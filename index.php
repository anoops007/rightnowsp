<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

// Set this Verify Token Value on your Facebook App 
if ($verify_token === 'vijay') {
  echo $challenge;
}

//print_r($_GET["hub_challenge"]);

file_put_contents("fb.txt",file_get_contents("php://input"));

$fb=file_get_contents("fb.txt");
$fb=json_decode($fb);
$rid=$fb->entry[0]->messaging[0]->sender->id;

$token="EAAZAvbvlzWXQBAHokKUMAL2FonFd8iaqZAhS0Xj1vZBCsCjvquwv95npzzJc9o3nZC3ZBHgZBAxNS0ETVEiHbG0ILwHXFuZCrYAaZB55ZB6MlrZAS4w18x7ZBFTuLRDR4YNGfFRLEKaFNVMQkZB0kXTqVUP9dWwwiwPr0xYchceeoVCyK77w7Aw8aRoC";

$data=array(
'recipient'=>array('id'=>"$rid"),
'message'=>array('text'=>"Hi")
 );

$options=array(

	'http'=>array(
	'method'=>'POST',
	'content'=>json_encode($data),
	'header'=>"Content-Type: application/json\n"
	)
);
$context=stream_context_create($options);
file_get_contents("https://graph.facebook.com/v2.6/me/messages?access_token=$token",false,ll);

if(!empty($fb['entry'][0]['messaging'][0]['message'])){
  $result = curl_exec($ch);
}
