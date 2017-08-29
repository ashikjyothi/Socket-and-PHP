<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
phpinfo();
include ("vendor/autoload.php")

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;

$version = new Version1X("http://localhost:3001");

$client = new Client($version);

	$client->initialize();
	$client->emit("new_order",["test"=>"test","test1"=>"test1"]);
	$client->close();
	
