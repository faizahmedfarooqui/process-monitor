<?php
require __DIR__."/AdminMail.php";
require __DIR__."/ProcessMonitor.php";

$body = '';
$classObject = new ProcessMonitor();
$bodyArray = $classObject->index();

if ( !empty($bodyArray) ) {

	$mailClassObject = new AdminMail;
	$mailClassObject->index($bodyArray);
}