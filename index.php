<?php
session_start();

$file="800x600.css";

if (isset($_GET)) { //if parameter is passed, save it
	if (isset($_GET["w"])) { $_SESSION["width"]=$_GET["w"]; }
	if (isset($_GET["h"])) { $_SESSION["height"]=$_GET["h"]; }
}
if (isset($_SESSION["width"]) && isset($_SESSION["height"])) {
	//do something with the screen size (track user etc)
	session_destroy();
}
else { //else print the HTML to grab dimentions
	echo "<link rel='stylesheet' href='".$file."'><img id='h'><img id='w'>";
}
?>