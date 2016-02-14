<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
 
if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en-US';
}
 
switch ($lang) {
  case 'en-US':
  $lang_file = 'lang.en.us.php';
  break;
 
  case 'fr-CA':
  $lang_file = 'lang.fr.ca.php';
  break;
 
  case 'en-CA':
  $lang_file = 'lang.en.ca.php';
  break;
        
  case 'es-MX':
  $lang_file = 'lang.es.mx.php';
  break;
 
  case 'fr-FR':  
  $lang_file = 'lang.fr.fr.php';
  break;

	case 'en-IE':
	$lang_file = 'lang.en.ie.php';
	break;

	case 'es-PR':
	$lang_file = 'lang.es.pr.php';
	break;

  default:
  $lang_file = 'lang.en.us.php';
 
}
 
include_once 'languages/'.$lang_file;
?>