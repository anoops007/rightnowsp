<?php


//print_r($_GET["hub_challenge"]);


file_put_contents("fb.txt",file_get_contents("php://input"));

$fb=file_get_contents("fb.txt");
$fb=json_decode($fb);
$rid=$fb->entry[0]->messaging[0]->sender->id;

$token="EAAYfWirtVMUBAKxmjZAcGFRLFSlwCChe2c9TE384Yc9xffIJUN5edZBuO7A4r6YjFmlP6ZATXNWtnh2TuvVS0bZAbcT3xPROI9ag4ZAXqmbtZCFFTtJsVtwqlOhUOE1AGzA4QVgWK2ZAyoNq9FONbAbtNKVNNi2Q5aNUOqxpDMNBwZDZD";

$data=array(
'recipient'=>array('id'=>"$rid"),
'message'=>array('text'=>"Hi")
 );

$options=array(

	'http'=>array(
	'method'=>'POST',
	'content'=>json_encode($data),
	'header'=>"Content-Type: application/json\n"
	);
);


