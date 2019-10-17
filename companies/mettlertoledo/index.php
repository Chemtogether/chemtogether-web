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


$template['company_name'] = 'Mettler Toledo';
$template['company_name_short'] = 'mettlertoledo';
$template['logo_url'] = set_source($awss3.'/companies/mettlertoledo/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.mt.com/ch/de/home.html','mt.com');
$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://ch.linkedin.com/company/mettlertoledo','Mettler-Toledo International, Inc');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are the leading manufacturer and provider of precision instruments. Our weighing systems and analytical instruments are found in laboratories, industrial plants, and retail industry across the globe.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for a motivated personality who is always ready to develop further, who is open to new ideas and who enjoys working in a dynamic environment and realising his potential.');

$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
