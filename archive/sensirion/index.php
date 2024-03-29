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

$template['company_name'] = 'Sensirion AG';
$template['company_name_short'] = 'sensirion';
$template['logo_url'] = set_source($awss3.'/companies/sensirion/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.sensirion.com','sensirion.com');
$template['linkedin'] = array('https://www.linkedin.com/company/sensirion/','Sensirion');
//$template['archive'] = '/archive/sensirion';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Sensirion is an internationally active high-tech company with headquarters in Switzerland
  and subsidiaries in Asia, North America and Europe. For two decades, the ETH spin-off has
  been developing and producing world-leading sensors and sensor solutions for a wide range
  of applications in the medical technology, automotive and consumer goods sectors.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Sensirion offers stability and security - and lives the start-up spirit of the early days.
  Today, around 800 employees do their utmost with expertise and passion to always be one step ahead.
  Their common goal is to bring about lasting change that cannot be copied.
  For better quaility of life, health, efficiency and safety - for a smarter future around the globe.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young, passionate people who want to write their own success story - in the largest start-up
  in Switzerland.');

  $template['button_print_until'] = 0; 
  $template['interview_print_until'] = 0;
  // if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
 
include('../0_template/template.php');

?>