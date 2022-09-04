<?php 
	$main = null;$about = null;$makeup = null;$hairs = null;$news=null;$contacts=null;
	setlocale(LC_ALL, 'uk_UA.KOI8-U');
	date_default_timezone_set('Europe/Kiev');
	$day=strftime('%d');
	$mon=strftime('%m');
	$year=strftime('%Y');
    $mysqli = new mysqli("localhost","vicky","QAZzaq33637","victoria-visage");	
	// $mysqli = new mysqli("localhost","root","QAZzaq33637","victoria-visage");
	$mysqli->set_charset( 'utf8' );
?>