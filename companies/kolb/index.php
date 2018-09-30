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


$template['company_name'] = 'KLK Kolb';
$template['company_name_short'] = 'kolb';
$template['logo_url'] = set_source($awss3.'/companies/kolb/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.kolb.ch','kolb.ch');
// $template['facebook'] = array('', '');
// $template['linkedin'] = array('','');
// $template['mail'] = array('','');
$template['archive'] = '/archive/kolb';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'With approximately 480 employees, KLK Kolb is one of the leading alkoxylation companies in Europe and offers a wide range of surfactants, chemical specialities, paper process chemicals and customer- specific products for various industries. KLK Kolb is a member of the global KLK OLEO Group. We sell our products worldwide and currently have three manufacturing sites in the heart of Europe (Hedingen/CH, Moerdijk/NL and Delden/NL).');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'We offer challenging, versatile jobs in a rapidly growing international company. KLK Kolb is a professional, well-established organization with an open working environment, giving an opportunity for creativity and the freedom to work independently. We help our employees to make use of their full potential, further develop their professional expertise and reach their personal career goals. Moreover, we offer attractive employment conditions.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'KLK Kolb is looking for employees who are highly motivated and have a proactive and independently- thinking mindset. Personalities who use their experience and creativity actively, in order to achieve the goal together. Safety, integrity, loyalty, team spirit and result-oriented performance are additional KLK Kolb values.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
