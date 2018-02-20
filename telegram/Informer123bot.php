<?php
	$query = $_POST["inputMsg"];
	$botToken = "521360216:AAGFoAb-vo4h0H7NiKcDMD7phwNS_BzjLUg";
	$website = "https://api.telegram.org/bot".$botToken;
	$update = file_get_contents($website."/getupdates");
	$updateArray = json_decode($update,TRUE);
	//$chat_id = $updateArray["result"][0]["message"]["chat"]["id"];
	//print_r($update);
	//my id = 403227375
	$chat_id = "-155623023";
	$sendMsg = file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".$query);
	print_r($update);
	//https://api.telegram.org/bot521360216:AAGFoAb-vo4h0H7NiKcDMD7phwNS_BzjLUg/getupdates
?>
