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


$template['company_name'] = 'HELVETING';
$template['company_name_short'] = 'helveting';
$template['logo_url'] = set_source($awss3.'/companies/helveting/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.helveting.com','helveting.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/helveting/','HELVETING Engineering AG');
// $template['mail'] = array('','');
// $template['archive'] = '/archive/helveting';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'HELVETING is a Swiss engineering company and part of the ALTEN Group. ALTEN is employing more than 28’000 highly qualified engineers and scientists worldwide. As a flexible, dynamic and competent development service provider, we deliver expert knowledge and develop outstanding customized solutions for our clients. Our consultants are active in many different industries and advise our customers on process and technology related queries. Cross Engineering is our specialty. We create innovative solutions that push the boundaries of the traditional industries, applying an interdisciplinary way of thinking.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'As a member of our team, you will face challenging as well as stimulating assignments and projects. You will enhance your professional career supported by various educational opportunities.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'HELVETING would like to get in contact with young and ambitious individuals that are passionate about engineering, open minded and with an interdisciplinary approach. Team players that can work independently if needed. We welcome qualified “can-do types”, with a technical BSc or MSc level degree. ');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
