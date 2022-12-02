<?php

$content = file_get_contents("php://input");
if ($content) {
	# tokem telegram
	$token = "";
	# link token
	$apiLink = "https://api.telegram.org/bot$token";
	# update
	$update = decode_json($content, true);
	# chat id
	$chat_id = $update["message"]["chat"]["id"];
	$text = $update["message"]["text"];
	$chatName = $update["message"]["chat"]["first_name"].' - '.$update["message"]["chat"]["username"];
	// persiapan balas chat
	file_get_contents($apiLink."sendmessage?chat_id=$chat_id&text=hay $chatName, yang kamu ketikan", $text);
}else {
	echo "hanya telegram yang bisa akses di url ini";
}


?>
