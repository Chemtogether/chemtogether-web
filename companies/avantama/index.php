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

$template['company_name'] = 'AVANTAMA';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://avantama.com/','avantama.com');
$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');


$template['mail'] = array('jobs','avantama.com');
$template['archive'] = '/archive/avantama';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are an ETH startup company developing materials for a bright and efficient future.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer exciting positions for high-end markets such as LCD displays, OLED displays, flexible solar cells etc.');
  
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for curious candidates with a solid educational background.');





$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');

?>