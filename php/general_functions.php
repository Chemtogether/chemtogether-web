<?php

// construct source and sourceset for images with two resolutions, used for retina devices
// needs images files "1x.*" and "2x.*" in the folder specified with the file type specified and an optional substring before the filetype
function set_source($dir, $filetype, $opt = "") {
	$filetype = ".".$filetype;
	if($opt != "") $filetype = $opt.$filetype;
	echo("src=\"".$dir."/1x".$filetype."\" srcset=\"".$dir."/1x".$filetype." 1x, ".$dir."/2x".$filetype." 2x\"");
}

// reconstructs get parameters and appends a new parameter to the end of the URL. If no parameter is currently set, parameter is appended with ?, otherwise correctly with $
function addGet($name, $value) {
    $params = $_GET;
    unset($params[$name]);
    $params[$name] = $value;
    return '?'.http_build_query($params);
}



 ?>
