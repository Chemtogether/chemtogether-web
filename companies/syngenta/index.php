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


$template['company_name'] = 'Syngenta';
$template['company_name_short'] = 'syngenta';
$template['logo_url'] = set_source($awss3.'/companies/syngenta/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Syngenta Crop Protection (CP) is one of the four business units of Syngenta Group, a global leader in agricultural technology and innovation with 49000 employees in more than 100 countries. Headquartered in Basel, Switzerland, Syngenta CP has an industry-leading R&D pipeline, strong research capabilities and a broad product portfolio of herbicides, insecticides, fungicides, and seed treatments.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'A diverse workforce and an inclusive workplace environment are enablers of our ambition to be the most collaborative and trusted team in agriculture. Our employees reflect the diversity of our customers, the markets where we operate and the communities which we serve.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We’re keen to recruit the best graduates from a variety of disciplines. Agronomy, biology, chemistry or engineering – at Syngenta CP, students and graduates in a wide range of disciplines will find an opportunity to launch their career.');

$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>