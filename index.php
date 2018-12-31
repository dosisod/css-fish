<?php
session_start();

$file="800x600.css";

if (isset($_GET)) { //if parameter is passed, save it
	if (isset($_GET["w"])) { $_SESSION["width"]=$_GET["w"]; }
	if (isset($_GET["h"])) { $_SESSION["height"]=$_GET["h"]; }
}
if (isset($_SESSION["width"]) && isset($_SESSION["height"])) {
	$_SESSION["done"]=true
}
if (isset($_SESSION["done"])) { //only use info if all data has been received
	//do something with the screen size (track user etc)
}
else { //else print the HTML to grab dimentions
	echo "<link rel='stylesheet' href='".$file."'><img id='h'><img id='w'>";
}
?>