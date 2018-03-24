<?php

//
// GENERAL VARIABLES
//

$awss3 = 'https://s3.eu-central-1.amazonaws.com/static.chemtogether.2018';
$awss3_archive = 'https://s3.eu-central-1.amazonaws.com/static.chemtogether.archive';


//
// GENERAL FUNCTIONS
//

//
function set_source($path, $filetype = "", $verbose = TRUE) {
	if($filetype == 'svg') {
		$filetype = ".".$filetype;
		if ($verbose) echo("src=\"".$path.$filetype."\"");
		else return "src=\"".$path.$filetype."\"";
	} else {
		$filetype = ".".$filetype;
		if ($verbose) echo("src=\"".$path."_1x".$filetype."\" srcset=\"".$path."_1x".$filetype." 1x, ".$path."_2x".$filetype." 2x\"");
		else return "src=\"".$path."_1x".$filetype."\" srcset=\"".$path."_1x".$filetype." 1x, ".$path."_2x".$filetype." 2x\"";
	}
}

// reconstructs get parameters and appends a new parameter to the end of the URL. If no parameter is currently set, parameter is appended with ?, otherwise correctly with $
function addGet($name, $value) {
	$params = $_GET;
	unset($params[$name]);
	$params[$name] = $value;
	return '?'.http_build_query($params);
}


function obfuscate_mail($prefix, $classes, $content = '', $suffix = 'chemtogether.ethz.ch', $verbose = TRUE) {
	$output = "<script type='text/javascript'>suffix='".$suffix."'; mail=('".$prefix."' + '@' + suffix); document.write(\"<a class='".$classes."' href='mailto:\" + mail + \"'>\");</script>";
	if ($content != '') {
		$output .= $content;
	} else {
		$output .= "<script type='text/javascript'>suffix='".$suffix."'; mail=('".$prefix."' + '@' + suffix); document.write(mail);</script>";
	}
	$output .= "</a>";
	if($verbose) echo($output);
	else return $output;
}


?>
