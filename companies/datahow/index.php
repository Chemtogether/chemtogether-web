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


$template['company_name'] = 'datahow';
$template['company_name_short'] = 'datahow';
$template['logo_url'] = set_source($awss3.'/companies/datahow/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://datahow.ch','datahow.ch');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/datahow-ag/','DataHow AG');


// $template['we_are'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_offer'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_look'] = array(
//   'title' => '',
//   'text' => '');


$template['we_are'] = array(
   'title' => 'We are',

   'text' => 'We are a spin-off from the ICB department at ETH. We offer AI solutions and services to support mostly pharmaceutical companies to accelerate and stabilize the process development of complex drugs and therapies.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Thesis, Internship and Full-Time Employment in the customer team: solving pharma
manufacturing probelms with AI, algo team: developing new algorithms for our future
software releases.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'Engineering students who are interested to code and use machine learning to support pharma companies on their digital transformation journey.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
