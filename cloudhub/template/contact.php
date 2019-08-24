<?php

	/**
	 * Configure contact form
	 */
	$contact_form_config = array
	(
		/**
		 * Email address to receive messages
		 */
		'recipient' => '',

		/**
		 * Email address to send the messages to your recipient
		 * Requires account permissions when used with an SMTP server
		 *
		 * Uses 'recipient' if not defined
		 */
		'sender' => '',

		/**
		 * Configure subject field
		 * The prefix is prepended to the user subject
		 */
		'subject' => array
		(
			'visible' => true,
			'required' => true,
			'prefix' => '[Contact Form]'
		),

		/**
		 * SMTP connection configuration
		 * Local mail server is used if not configured
		 *
		 * Setting 'secure' supports false, 'tls' or 'ssl'
		 * Setting 'port' supports 25, 465 or 587
		 */
		'smtp' => array
		(
			'hostname' => '',
			'username' => '',
			'password' => '',
			'secure' => 'tls',
			'port' => 587
		),

		/**
		 * Configure ReCaptcha protection
		 * Requires an API v2 key pair to function
		 *
		 * @see https://developers.google.com/recaptcha
		 */
		'recaptcha' => array
		(
			'site_key' => '',
			'secret_key' => ''
		),

		/**
		 * Configure labels and messages
		 * Can be used to customize or translate items
		 */
		'translate' => array
		(
			'labels' => array
			(
				'name' => 'Full Name',
				'email' => 'Email Address',
				'subject' => 'Subject',
				'message' => 'Message'
			),
			'errors' => array
			(
				'required' => '%s is required',
				'invalid' => '%s is invalid'
			),
			'messages' => array
			(
				'error' => 'We have encountered an unknown error, please try again.',
				'success' => 'We have received your message and will get back to you shortly.'
			)
		)
	);

	/**
	 * Load contact form class and its dependencies
	 * Create new class object with given configuration
	 */
	require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'contact-form.php';
	$contact_form = new Contact_Form($contact_form_config);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cloudhub Hosting and Technology HTML Template</title>
		<meta name="description" content="Cloudhub is a modern, responsive and easy to customize HTML template, perfectly suited for hosting and technology companies.">
		<meta name="keywords" content="html template, responsive, retina, cloud hosting, technology, startup">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Icons -->
		<link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon.png">
		<link rel="icon" href="img/icons/favicon.ico">
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/fontawesome.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</head>
	<body class="footer-dark">
		<!-- Header -->
		<header id="header" class="header-dynamic header-shadow-scroll">
			<div class="container">
				<a class="logo" href="index.html">
					<img src="img/logos/header-light.png" alt="">
				</a>
				<nav>
					<ul class="nav-primary">
						<li>
							<a href="home.html">Products</a>
							<ul>
								<li>
									<a href="products-cloud-hosting.html">Cloud Hosting</a>
								</li>
								<li>
									<a href="products-cloud-servers.html">Cloud Servers</a>
									<ul>
										<li>
											<a href="products-developer-cloud.html">Developer Cloud</a>
										</li>
										<li>
											<a href="products-custom-cloud.html">Custom Cloud</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="products-dedicated-cloud.html">Dedicated Cloud</a>
								</li>
								<li>
									<a href="products-block-storage.html">Block Storage</a>
								</li>
								<li>
									<a href="products-anycast-dns.html">Anycast DNS</a>
								</li>
								<li>
									<a href="products-ssl-certificates.html">SSL Certificates</a>
								</li>
								<li>
									<a href="products-domain-names.html">Domain Names</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="features.html">Features</a>
							<ul>
								<li>
									<a href="index.html">Demos</a>
									<ul>
										<li>
											<a href="home.html">Default</a>
										</li>
										<li>
											<a href="home-large-slider.html">Large Slider</a>
										</li>
										<li>
											<a href="home-light-header.html">Light Header</a>
										</li>
										<li>
											<a href="home-single-page.html">Single Page</a>
										</li>
										<li>
											<a href="home-light-slider.html">Light Slider</a>
										</li>
										<li>
											<a href="home-product-slider.html">Product Slider</a>
										</li>
										<li>
											<a href="home-user-onboarding.html">User Onboarding</a>
										</li>
										<li>
											<a href="home-domain-search.html">Domain Search</a>
										</li>
										<li>
											<a href="home-custom-color.html">Custom Color</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="elements-other.html">Elements</a>
									<ul>
										<li>
											<a href="blog-sidebar.html">Blog Sidebar</a>
										</li>
										<li>
											<a href="elements-columns.html">Column Rows</a>
										</li>
										<li>
											<a href="elements-sliders.html">Content Sliders</a>
										</li>
										<li>
											<a href="elements-pricing.html">Pricing Options</a>
										</li>
										<li>
											<a href="elements-masonry.html">Masonry Grid</a>
										</li>
										<li>
											<a href="elements-forms.html">Form Inputs</a>
										</li>
										<li>
											<a href="elements-tabs.html">Tab Groups</a>
										</li>
										<li>
											<a href="elements-galleries.html">Galleries</a>
										</li>
										<li>
											<a href="elements-other.html">Other</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="network.html">Network</a>
						</li>
						<li>
							<a href="about.html">Company</a>
							<ul>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="button button-secondary" href="client-login.html">
								<i class="fas fa-lock icon-left"></i>Client Login
							</a>
						</li>
					</ul>
					<ul class="nav-secondary">
						<li>
							<a href="contact.html"><i class="fas fa-phone icon-left"></i>+1 800 123 456</a>
						</li>
						<li>
							<a href="contact.html"><i class="fas fa-comment icon-left"></i>Support Chat</a>
						</li>
						<li>
							<a href="knowledge-base.html"><i class="fas fa-question-circle icon-left"></i>Knowledge Base</a>
						</li>
						<li>
							<a href="service-status.html"><i class="fas fa-check icon-left"></i>Service Status</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- Content -->
		<section id="content">
			<!-- Content Row -->
			<section class="content-row content-row-color content-row-clouds">
				<div class="container">
					<header class="content-header content-header-small content-header-uppercase">
						<h1>
							Contact Us
						</h1>
						<p>
							Send us a message and our team will be in touch very soon.
						</p>
					</header>
				</div>
			</section>
			<!-- Content Row -->
			<section class="content-row">
				<div class="container">
					<div class="column-row align-center">
						<div class="column-50">
							<form class="form-full-width" method="post" action="contact.php">
								<?php if ($contact_form->success): ?>
								<div class="form-row form-success">
									<ul>
										<li><?php echo $contact_form->config['translate']['messages']['success'] ?></li>
									</ul>
								</div>
								<div class="form-row">
									<div class="feature-box">
										<div class="feature-content">
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['name'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['name'])) echo $contact_form->sanitize['name'] ?></dd>
											</dl>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['email'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['email'])) echo $contact_form->sanitize['email'] ?></dd>
											</dl>
											<?php if (empty($contact_form->sanitize['subject']) === false): ?>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['subject'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['subject'])) echo $contact_form->sanitize['subject'] ?></dd>
											</dl>
											<?php endif; ?>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['message'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['message'])) echo nl2br($contact_form->sanitize['message']) ?></dd>
											</dl>
										</div>
									</div>
								</div>
								<?php else: ?>
								<?php if ($contact_form->errors): ?>
								<div class="form-row form-error">
									<ul>
										<?php foreach ($contact_form->errors as $error): ?>
										<li><?php echo $error ?></li>
										<?php endforeach; ?>
									</ul>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<div class="column-row">
										<div class="column-50">
											<label for="form-name"><?php echo $contact_form->config['translate']['labels']['name'] ?></label>
											<input id="form-name" type="text" name="name" value="<?php if (isset($contact_form->sanitize['name'])) echo $contact_form->sanitize['name'] ?>" required>
										</div>
										<div class="column-50">
											<label for="form-email"><?php echo $contact_form->config['translate']['labels']['email'] ?></label>
											<input id="form-email" type="email" name="email" value="<?php if (isset($contact_form->sanitize['email'])) echo $contact_form->sanitize['email'] ?>" required>
										</div>
									</div>
								</div>
								<?php if ($contact_form->config['subject']['visible']): ?>
								<div class="form-row">
									<label for="form-subject"><?php echo $contact_form->config['translate']['labels']['subject'] ?></label>
									<input id="form-subject" type="text" name="subject" value="<?php if (isset($contact_form->sanitize['subject'])) echo $contact_form->sanitize['subject'] ?>"<?php if ($contact_form->config['subject']['required']) echo ' required' ?>>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<label for="form-message"><?php echo $contact_form->config['translate']['labels']['message'] ?></label>
									<textarea id="form-message" name="message" cols="10" rows="10" required><?php if (isset($contact_form->sanitize['message'])) echo $contact_form->sanitize['message'] ?></textarea>
								</div>
								<?php if ($contact_form->config['recaptcha']['site_key'] && $contact_form->config['recaptcha']['secret_key']): ?>
								<div class="form-row">
									<div class="g-recaptcha" data-sitekey="<?php echo $contact_form->config['recaptcha']['site_key'] ?>"></div>
									<script src="https://www.google.com/recaptcha/api.js"></script>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<button class="button-secondary"><i class="fas fa-envelope icon-left"></i>Send Message</button>
								</div>
								<?php endif; ?>
								<?php if ($contact_form->debug && is_object($contact_form->debug)): ?>
								<div class="form-row">
									<pre><?php print_r($contact_form->debug) ?></pre>
								</div>
								<?php endif; ?>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Content Row -->
			<section class="content-row content-row-gray">
				<div class="container">
					<div class="column-row align-center text-align-center">
						<div class="column-33">
							<i class="fas fa-life-ring icon-feature"></i>
							<h3>
								Customer Support
							</h3>
							<p>
								Please submit a ticket through our client portal to contact us if you are already a customer.
							</p>
							<p>
								<a href="#customer-support">Open a Ticket<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
						<div class="column-33">
							<i class="fas fa-comments icon-feature"></i>
							<h3>
								IRC Community
							</h3>
							<p>
								Chat with our IRC community to learn more about cloud hosting, management and networking.
							</p>
							<p>
								<a href="#irc-community">Connect to IRC<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
						<div class="column-33">
							<i class="fas fa-exclamation-triangle icon-feature"></i>
							<h3>
								Bounty Program
							</h3>
							<p>
								We are dedicated to keep our platform secure and offer a bounty for every reported security issue.
							</p>
							<p>
								<a href="#bounty-program">Report a Bug<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Content Row -->
			<section class="content-row content-row-color">
				<div class="container">
					<header class="content-header">
						<h2>
							Interested in visiting us?
						</h2>
						<p>
							Please schedule an appointment with our sales team if you're interested in visiting one of our branches, datacenters or meeting with our team of technicians in person.<br><br>
							<a class="button button-secondary" href="about.html">
								<i class="fas fa-globe icon-left"></i>Global Branches
							</a>
						</p>
					</header>
				</div>
			</section>
		</section>
		<!-- Footer -->
		<footer id="footer">
			<section class="footer-primary">
				<div class="container">
					<div class="column-row">
						<div class="column-33">
							<h5>
								About Cloudhub
							</h5>
							<p>
								We provide cloud based enterprise hosting, server and storage solutions of unmatched quality. Feel free to visit or contact us for a custom quote.<br><br>
								765th Boulevard, Rochester, NY 14621<br>
								+1 800 123 456
							</p>
						</div>
						<div class="column-66">
							<div class="column-row align-right-top">
								<div class="column-25">
									<h5>
										Connect
									</h5>
									<ul class="list-style-icon">
										<li>
											<a href="#facebook"><i class="fab fa-facebook"></i>Facebook</a>
										</li>
										<li>
											<a href="#twitter"><i class="fab fa-twitter"></i>Twitter</a>
										</li>
										<li>
											<a href="#github"><i class="fab fa-github"></i>Github</a>
										</li>
										<li>
											<a href="#xing"><i class="fab fa-xing"></i>Xing</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										Products
									</h5>
									<ul>
										<li>
											<a href="products-cloud-hosting.html">Cloud Hosting</a>
										</li>
										<li>
											<a href="products-cloud-servers.html">Cloud Servers</a>
										</li>
										<li>
											<a href="products-dedicated-cloud.html">Dedicated Cloud</a>
										</li>
										<li>
											<a href="products-block-storage.html">Block Storage</a>
										</li>
										<li>
											<a href="products-anycast-dns.html">Anycast DNS</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										Resources
									</h5>
									<ul>
										<li>
											<a href="features.html">Features</a>
										</li>
										<li>
											<a href="network.html">Network</a>
										</li>
										<li>
											<a href="terms-of-service.html#privacy-policy">Privacy Policy</a>
										</li>
										<li>
											<a href="terms-of-service.html">Terms of Service</a>
										</li>
									</ul>
								</div>
								<div class="column-flex">
									<h5>
										Company
									</h5>
									<ul>
										<li>
											<a href="blog.html">Blog</a>
										</li>
										<li>
											<a href="about.html">About</a>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="footer-secondary">
				<div class="container">
					<p>
						Copyright 2017 &copy; Cloudhub Hosting Services. All rights reserved.<br>
						Powered by HTML5, developed by <a href="https://serifly.com">Serifly</a>
					</p>
				</div>
			</section>
		</footer>
		<!-- Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/headroom.min.js"></script>
		<script src="js/js.cookie.min.js"></script>
		<script src="js/imagesloaded.min.js"></script>
		<script src="js/bricks.min.js"></script>
		<script src="js/main.min.js"></script>
	</body>
</html>