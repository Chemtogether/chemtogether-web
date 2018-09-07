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


$template['company_name'] = 'Ivoclar Vivadent';
$template['company_name_short'] = 'ivoclarvivadent';
$template['logo_url'] = set_source($awss3.'/companies/ivoclarvivadent/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.ivoclarvivadent.ch','ivoclarvivadent.ch');
$template['facebook'] = array('https://www.facebook.com/ivoclarvivadent/', 'Ivoclar Vivadent');
$template['linkedin'] = array('https://www.linkedin.com/company/ivoclar-vivadent-ag/','Ivoclar Vivadent AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/ivoclarvivadent';

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
