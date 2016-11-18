<?php

function db_connect() {


	if (preg_match("/localhost/",$_SERVER["HTTP_HOST"]) == true) {
		include "config.php";
		$servername = $server;
		$username = $user;
		$password = $pw;
		$dbname = $db;
	} else {
		$servername = getenv('server');
		$username = getenv('user');
		$password = getenv('password');
		$dbname = getenv('db');
	}

	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//check connection
	if ($conn->connect_error) {
		die("SQL (&#9746)<br/> " . $conn->connect_error);
	} else {
		return $conn;
	}
}

function select($conn,$sql) {
	$result = $conn ->query($sql);
	if ($result->num_rows > 0) {
		return $result;
	}
}

function insert($conn, $sql) {
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}