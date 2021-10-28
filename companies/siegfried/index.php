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


$template['company_name'] = 'Siegfried Holding AG';
$template['company_name_short'] = 'siegfried';
$template['logo_url'] = set_source($awss3.'/companies/siegfried/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.siegfried.ch','siegfried.ch');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/siegfried-holding-ag/','Siegfried Holding AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/siegfried';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'In the Midst of People’s Lives – Across the Globe. The Siegfried Group is one of the world’s leading Custom Development and Manufacturing Organizations (CDMOs) developing and producing active pharmaceutical ingredients (API), intermediates and finished dosage forms. As our core competence, we successfully integrate chemical and pharmaceutical capabilities into a single business model.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Siegfried’s work environment is dynamic and international. With a highly professional and motivated team, the company operates in a future-oriented business field. Siegfried possesses a unique culture that leverages cultural differences to create a competitive advantage. Siegfried places highest priority on providing a flexible, diverse and discrimination-free working environment.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'On the entry-level, we predominantly are looking for Masters/PhD in chemistry, pharmaceutical science, life science, food technology or biochemistry. In Chemical Process Development in particular we are focusing on PhD candidates in organic chemistry specializing in synthesis, preferably with several semesters abroad.');

  
$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
