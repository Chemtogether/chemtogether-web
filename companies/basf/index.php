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


$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = set_source($awss3.'/companies/basf/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.basf.com','basf.com');
$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');
// $template['mail'] = array('','');
$template['archive'] = '/archive/basf';

$template['we_are'] = array(
  'In Kürze.',
  'Coming soon.');
$template['we_offer'] = array(
  'In Kürze.',
  'Coming soon.');
$template['we_look'] = array(
  'In Kürze.',
  'Coming soon.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
