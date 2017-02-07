<?php

$access_token = "EAAJa5MZBCPRYBAEKVRnxyN60Bbw4TzUTJCQLrnaOcS2Wt5oS6khZBCBcp6uybTEzPbsnDzlgCd6MVjoiL4JeE0ZAxU79gJvJn8236TUZBpvZBNzGD7HfzPvPZBZBEQP3UI18bXZAGz6Hy9s9aUOZA7VNlE9g8fiAtqzOqRKBZARHi3YwZDZD";

$verify_token = "vijay";
$hub_verify_token = null;
if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
    echo $challenge;
}


file_put_contents("fb.txt",file_get_contents("php://input"));

$fb=file_get_contents("fb.txt");

$input = json_decode($fb, true);
print_r($fb);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];
$message_to_reply = '';







