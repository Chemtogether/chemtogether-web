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


$template['company_name'] = 'qCella';
$template['company_name_short'] = 'qcella';
$template['logo_url'] = set_source($awss3.'/companies/qcella/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://qcella.com/','qcella.com');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/qcella/','qCella');


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

   'text' => 'qCella is redefining product heating in automotive interiors and for machine components. As an innovative hard-
ware start-up from ETH Zurich, we have developed a patent-pending copper-cellulose-based material for resistance
heating applications and beyond. Our mission is to replace traditional wire-based heating systems with our paper-thin, homogeneously heating, 
and customizable heating mats, offering exceptional versatility, energy efficiency, and seamless integration across industries.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We provide challenging opportunities
to work on cutting-edge materials and
chemical processes, with hands-on
involvement in experiment design, reaction optimization, and process development. Our team members benefit from close mentorship, access to advanced
laboratory facilities, and a
dynamic startup setting that encourages creativity, rapid learning, and the ability to directly contribute to
innovative products with real-world impact.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are seeking motivated students
or recent graduates in chemistry,
chemical engineering, or related fields
who are eager to gain practical experience
in research and development. Ideal candidates are independent, collaborative, and enthusiastic about tackling experimental challenges, optimizing
reactions, and contributing to the creation of novel heating materials in a fast-paced, interdisciplinary startup environment.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
