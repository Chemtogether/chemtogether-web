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
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.mt.com/ch/de/home.html','mt.com');
$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://ch.linkedin.com/company/mettlertoledo','Mettler-Toledo International, Inc');


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

   'text' => '…a global leader in precision instruments and services. We are renowned for innovation and quality across laboratory, process analytics, industrial, product inspection,
and food retailing solutions. As the world’s premier provider of precision instruments
and software, our products are pivotal in research, quality control, and manufacturing
processes in life sciences, food, chemical, and many other industries.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '… challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company. Our diverse portfolio
extends across a wide range of laboratory and analytical instruments, sensors and
automated chemistry systems critical in drug discovery and chemical development. In
production and packaging, our advanced check-weighing, metal detection, and X-ray
systems set industry standards. A leader in weighing and dimensioning solutions, we
provide comprehensive automation capabilities for industrial applications globally.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => '… motivated personalities who are always ready to develop further, who are open
to new ideas and who enjoy working in a dynamic environment and realising their
potential.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
