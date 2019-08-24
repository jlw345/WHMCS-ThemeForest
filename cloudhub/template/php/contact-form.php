<?php

	/**
	 * Load PHPMailer library
	 * Reliable sending and SMTP support
	 *
	 * @see https://github.com/PHPMailer/PHPMailer
	 */
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPMailer' . DIRECTORY_SEPARATOR . 'Exception.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPMailer' . DIRECTORY_SEPARATOR . 'PHPMailer.php';
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPMailer' . DIRECTORY_SEPARATOR . 'SMTP.php';

	/**
	 * Load ReCaptcha library
	 * Service to protect your contact form
	 *
	 * @see https://github.com/google/recaptcha
	 */
	require __DIR__ . DIRECTORY_SEPARATOR . 'ReCaptcha' . DIRECTORY_SEPARATOR . 'autoload.php';

	/**
	 * Contact form class
	 * Requires PHP 5.6 or higher
	 *
	 * @version 1.3 (2018/01/18)
	 * @author Serifly (https://serifly.com)
	 */
	class Contact_Form
	{
		/**
		 * Store error messages
		 *
		 * @var array
		 */
		public $errors = array();

		/**
		 * Store sanitized values
		 *
		 * @var array
		 */
		public $sanitize = array();

		/**
		 * Message sending success state
		 *
		 * @var bool
		 */
		public $success = false;

		/**
		 * Debug mode state and mailer object
		 *
		 * @var object
		 */
		public $debug = null;

		/**
		 * Store default and custom configuration
		 *
		 * @var array
		 */
		public $config = array
		(
			'recipient' => '',
			'sender' => '',
			'subject' => array
			(
				'visible' => false,
				'required' => false,
				'prefix' => ''
			),
			'smtp' => array
			(
				'hostname' => '',
				'username' => '',
				'password' => '',
				'secure' => '',
				'port' => 25
			),
			'recaptcha' => array
			(
				'site_key' => '',
				'secret_key' => ''
			),
			'translate' => array
			(
				'labels' => array
				(
					'name' => 'Full Name',
					'email' => 'Email Address',
					'subject' => 'Subject',
					'message' => 'Message',
					'recaptcha' => 'ReCaptcha'
				),
				'errors' => array
				(
					'required' => '%s is required',
					'invalid' => '%s is invalid'
				),
				'messages' => array
				(
					'error' => 'Error',
					'success' => 'Success'
				)
			),
			'debug' => false
		);

		/**
		 * Merge configurations and initiate contact form validation
		 * Continue sending the message if validation passes
		 *
		 * @param array $config
		 */
		public function __construct($config)
		{
			$this->config = $this->merge_config($this->config, $config);
			if ($this->validate()) $this->send();
		}

		/**
		 * Validate contact form data on POST request
		 * Submitted values are sanitized for form output
		 *
		 * @return bool
		 */
		private function validate()
		{
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if (empty($_POST['name']))
				{
					$this->errors['name'] = sprintf
					(
						$this->config['translate']['errors']['required'],
						$this->config['translate']['labels']['name']
					);
				}

				if (empty($_POST['email']))
				{
					$this->errors['email'] = sprintf
					(
						$this->config['translate']['errors']['required'],
						$this->config['translate']['labels']['email']
					);
				}
				else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
				{
					$this->errors['email'] = sprintf
					(
						$this->config['translate']['errors']['invalid'],
						$this->config['translate']['labels']['email']
					);
				}

				if ($this->config['subject']['visible'])
				{
					if (empty($_POST['subject']) && $this->config['subject']['required'])
					{
						$this->errors['subject'] = sprintf
						(
							$this->config['translate']['errors']['required'],
							$this->config['translate']['labels']['subject']
						);
					}
				}

				if (empty($_POST['message']))
				{
					$this->errors['message'] = sprintf
					(
						$this->config['translate']['errors']['required'],
						$this->config['translate']['labels']['message']
					);
				}

				if ($this->config['recaptcha']['site_key'] && $this->config['recaptcha']['secret_key'])
				{
					$recaptcha = new \ReCaptcha\ReCaptcha($this->config['recaptcha']['secret_key']);

					if (empty($_POST['g-recaptcha-response']))
					{
						$this->errors['g-recaptcha-response'] = sprintf
						(
							$this->config['translate']['errors']['required'],
							$this->config['translate']['labels']['recaptcha']
						);
					}
					else if ($recaptcha->verify($_POST['g-recaptcha-response'])->isSuccess() === false)
					{
						$this->errors['g-recaptcha-response'] = sprintf
						(
							$this->config['translate']['errors']['invalid'],
							$this->config['translate']['labels']['recaptcha']
						);
					}
				}

				foreach (array('name', 'email', 'subject', 'message') as $input)
				{
					if (empty($_POST[$input]) === false)
					{
						$this->sanitize[$input] = filter_var($_POST[$input], FILTER_SANITIZE_STRING);
					}
				}

				if (empty($this->errors)) return true;
			}

			return false;
		}

		/**
		 * Send message with given parameters
		 * Make mailer accessible if debug mode is active
		 */
		private function send()
		{
			if ($this->sanitize && ($phpmailer = new \PHPMailer\PHPMailer\PHPMailer()))
			{
				$phpmailer->WordWrap = 78;
				$phpmailer->CharSet = 'UTF-8';
				$phpmailer->Encoding = 'quoted-printable';
				$phpmailer->Body = $this->sanitize['message'];
				$phpmailer->Subject = $this->config['subject']['prefix'] . (empty($this->sanitize['subject']) === false ? ' ' . $this->sanitize['subject'] : '');
				$phpmailer->setFrom($this->config['sender'] ? $this->config['sender'] : $this->config['recipient']);
				$phpmailer->addReplyTo($this->sanitize['email'], $this->sanitize['name']);
				$phpmailer->addAddress($this->config['recipient']);

				if ($this->config['smtp']['hostname'])
				{
					$phpmailer->isSMTP();
					$phpmailer->SMTPSecure = $this->config['smtp']['secure'] ? $this->config['smtp']['secure'] : false;
					$phpmailer->Host = $this->config['smtp']['hostname'];
					$phpmailer->Port = $this->config['smtp']['port'];

					if ($this->config['smtp']['username'] && $this->config['smtp']['password'])
					{
						$phpmailer->SMTPAuth = true;
						$phpmailer->Username = $this->config['smtp']['username'];
						$phpmailer->Password = $this->config['smtp']['password'];
					}
				}

				if ($phpmailer->send()) $this->success = true;
				if ($this->config['debug']) $this->debug = $phpmailer;
			}

			if ($this->success === false) $this->errors = array($this->config['translate']['messages']['error']);
		}

		/**
		 * Merge multiple configuration arrays
		 * Overwrites previous string keys
		 *
		 * @param array $arrays
		 * @return array
		 */
		private function merge_config()
		{
			$arrays = func_get_args();
			$config = array();

			while ($arrays)
			{
				if (is_array($array = array_shift($arrays)))
				{
					foreach ($array as $key => $value)
					{
						if (is_array($value) && array_key_exists($key, $config) && is_array($config[$key]))
						{
							$config[$key] = $this->merge_config($config[$key], $value);
						}
						else
						{
							$config[$key] = $value;
						}
					}
				}
			}

			return $config;
		}
	}