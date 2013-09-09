<?php

function getBlob($datauri) {
	$s = substr($datauri, strpos($datauri, 'base64')+6);
	return base64_decode($s);
}

function postImg() {
	$ch = curl_init();
	// 下面两个地址，看情况做更改
	$data = array('file'=>'@c:/wamp/www/upload/tmp.jpg');
	curl_setopt($ch, CURLOPT_URL, 'http://localhost/upload/API.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_exec($ch);
	curl_close($ch);
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	file_put_contents('./tmp.jpg', getBlob($_POST['s']));
	postImg();
}