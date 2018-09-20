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


$template['company_name'] = 'Carbogen Amcis';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','Carbogen Amcis');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Coming soon.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Coming soon.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'Coming soon.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
