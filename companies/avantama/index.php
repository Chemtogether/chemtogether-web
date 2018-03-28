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


$template['company_name'] = 'Avantama';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://avantama.com/','avantama.com');
$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/avantama';

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



include('../0_template/template.php');



?>
