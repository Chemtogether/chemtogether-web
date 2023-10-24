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


$template['company_name'] = 'GALENICA AG';
$template['company_name_short'] = 'galenicare';
$template['logo_url'] = set_source($awss3.'/companies/galenicare/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.galenica.com/','galenica.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/galenica-ltd/','Galenica');
// $template['mail'] = array('','');
//$template['archive'] = '/archive/hoffmanneitle';

$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the leading healthcare provider and the largest pharmacy network in Switzerland. Our companies offer a wide range of future-oriented careers that have something in common: our employees are highly committed to the health and well-being of the people of Switzerland.');

  $template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'We can offer you apprenticeships. We offer excellent entry opportunities for pharmacy students at all levels (parttime job, assistantship, FPH further training) in our Amavita, Coop Vitality (joint venture with Coop) and Sun Store pharmacies. Immerse yourself in the fascinating and diverse professional world of Galenica!');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for committed talents. If you’re truly passionate about a career in pharmacy, this is the right place for you, whether you are in the Bachelor’s or Master’s program or have already completed your studies.');

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
