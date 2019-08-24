<?php
    //
	// // Fill in these three values with your own information
	// $api_key = '7154ba9eaa3e3f1e4fc873c5601edd6b-us8';
	// $datacenter = 'us8';
	// $list_id = 'b3eb93b902';
    //
	// $email = $_POST['email'];
	// $status = 'subscribed';
	// if(!empty($_POST['status'])){
	//     $status = $_POST['status'];
	// }
	// $url = 'https://'.$datacenter.'.api.mailchimp.com/3.0/lists/'.$list_id.'/members/';
    //
	// $username = 'apikey';
	// $password = $api_key;
    //
	// $data = array("email_address" => $email,"status" => $status);
	// $data_string = json_encode($data);
    //
	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL,$url);
	// curl_setopt($ch, CURLOPT_POST, 1);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	// curl_setopt($ch, CURLOPT_USERPWD, "$username:$api_key");
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	//     'Content-Type: application/json',
	//     'Content-Length: ' . strlen($data_string))
	// );
    //
	// $result=curl_exec ($ch);
	// curl_close ($ch);
    //
	// echo $result;


$apiKey = '7154ba9eaa3e3f1e4fc873c5601edd6b-us8';
$listId = 'b3eb93b902';
$double_optin=false;
$send_welcome=false;
$email_type = 'html';
$email = $_POST['email'];
//replace us2 with your actual datacenter
$submit_url = "http://us8.api.mailchimp.com/1.3/?method=listSubscribe";
$data = array(
    'email_address'=>$email,
    'apikey'=>$apiKey,
    'id' => $listId,
    'double_optin' => $double_optin,
    'send_welcome' => $send_welcome,
    'email_type' => $email_type
);
$payload = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $submit_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));

$result = curl_exec($ch);
curl_close ($ch);
$data = json_decode($result);
if ($data->error){
    echo $data->error;
} else {
    echo "Got it, you've been added to our email list.";
}
