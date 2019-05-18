<?php

// provides small functions
include('php/general.php');


// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('../data.php');
include('../lang.php');


// GENERAL

$active_nav = 'companies';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );


$template['company_name'] = 'Johnson & Johnson';
$template['company_name_short'] = 'johnsonandjohnson';
$template['logo_url'] = set_source($awss3_archive.'/johnsonandjohnson/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.jnj.ch/','jnj.ch');
$template['facebook'] = array('https://facebook.com/jnj/', 'Johnson & Johnson');
$template['linkedin'] = array('https://www.linkedin.com/company/johnson-&-johnson/','Johnson & Johnson');

$template['we_are'] = 0;

$template['we_offer'] = 0;

$template['we_look'] = 0;

$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>