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


$template['company_name'] = 'astrazeneca';
$template['company_name_short'] = 'astrazeneca';
$template['logo_url'] = set_source($awss3.'/companies/astrazeneca/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.astrazeneca.ch','astrazeneca.ch');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/astrazeneca/','AstraZeneca');


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

   'text' => 'AstraZeneca is a global, science-led biopharmaceutical company that has been present
in Switzerland for nearly 50 years, ranking
among the country’s top ten revenue-generating pharmaceutical firms. AstraZeneca
focuses on the discovery, development, and
commercialisation of prescription medicines in the areas of Oncology, Cardiovascular, Renal and Metabolism, Respiratory and
Immunology, and Rare Diseases.
AstraZeneca is represented in 90 countries.
Our medicines are manufactured in 28 facilities spread across 16 different countries
and sold in over 125 countries.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Over 285 employees in Switzerland are committed to providing patients with life-changing medicines and making a positive impact
on the healthcare system, society, and the
planet. AstraZeneca has pledged to an inclusive work environment based on respect
and acceptance. The company was thus
recognised as a «Great Place to Work» for
the sixth consecutive time in 2024 and carries the «Swiss LGBTI label».');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'Currently, over 230,000 people are treated
with a drug from AstraZeneca in Switzerland. By 2026, the company expects the approval of over 35 new therapies.
We are looking for talents who are keen to
join us in achieving our ambitious goals.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
