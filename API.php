<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = time() . mt_rand(10000, 99999) . '.jpeg';
    move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$fname);
    // 这是返回的代表图片地址的url。需要更改
    $res = 'http://localhost/upload/img/'.$fname;
	echo $res;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

}