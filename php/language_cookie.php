<?php
// cookie handling, language selection
date_default_timezone_set("Europe/Zurich");


if(isset($_GET['lang'])) {

	if($_GET['lang'] == "en") {
		setcookie("chemtogether_language", "en", time()+60*60*24*7, "/"); // adds the cookie
		$eng = true;
	} else if($_GET['lang'] == "de") {
		setcookie("chemtogether_language", "de", time()+60*60*24*7, "/"); // deletes the cookie
		$eng = false;
	} else $eng = true;


} else if (isset($_COOKIE["chemtogether_language"])) {

	if($_COOKIE["chemtogether_language"] == "en") {
		setcookie("chemtogether_language", "en", time()+60*60*24*7, "/"); // renews cookie for another week
		$eng = true;
	} else if($_COOKIE["chemtogether_language"] == "de") {
		setcookie("chemtogether_language", "de", time()+60*60*24*7, "/"); // renews cookie for another week
		$eng = false;
	} else $eng = true;


} else if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {

	if(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2) == "de") { // check if browser is set to prefer german
		$eng = false;
	} else {
		$eng = true;
	}


} else $eng = true; // fallback case


if($eng) {
	$language = "en";
} else {
	$language = "de";
}

?>
