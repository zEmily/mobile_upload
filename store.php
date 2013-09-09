<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	var_dump($_POST);
	$db = new SQLite3("./mysqlitedb.db");
	$db->exec("create table if not exists img (link string)");
	foreach ($_POST as $name => $value) {
		$db->exec("insert into img (link) values ('{$value}')");
	}
	
	$res = $db->query("select * from img");
	while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
		var_dump($row);
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$db = new SQLite3("./mysqlitedb.db");
	$res = $db->query("select * from img");
	while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
		var_dump($row);
	}
}