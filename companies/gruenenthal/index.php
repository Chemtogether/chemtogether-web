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


$template['company_name'] = 'gruenenthal';
$template['company_name_short'] = 'gruenenthal';
$template['logo_url'] = set_source($awss3.'/companies/gruenenthal/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.grunenthal.ch/','grunenthal.ch');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://de.linkedin.com/company/gruenenthal','Grünenthal');


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

   'text' => 'a global science-based pharmaceutical company headquartered in Aachen, Germany. We
specialize in pain management and related diseases, with a strong focus on innovation,
sustainability, and responsible production. Our Swiss site in Mitlödi plays a key role in active
pharmaceutical ingredient manufacturing using 100% renewable electricity.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We provide high-quality medicines and cutting-edge research in pain therapy, supported by a
robust R&D pipeline and sustainable production practices. Our teams work across 29 countries,
delivering solutions that improve patients’ lives. We also o!er expertise in digital transformation
and inclusive workplace culture.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We seek partnerships and talent that share our commitment to innovation, sustainability,
and patient-centric care. Whether in research, digitalization, or manufacturing, we welcome
collaboration with organizations and individuals who aim to shape the future of healthcare
together with us.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
