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
$template['company_name'] = 'Sika';
$template['company_name_short'] = 'sika';
$template['logo_url'] = set_source($awss3.'/companies/sika/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://che.sika.com/','che.sika.com');
$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');
// $template['mail'] = array('','');
$template['archive'] = '/archive/sika';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'a specialty chemicals company with a leading position in the development and production of systems and products for bonding, sealing, damping, reinforcing and protecting in the building sector and automotive industry. Sika has a worldwide presence in 98 countries with over 190 factories and over 17’000 employees. Our aim is to foster a culture of performance and respect - across hierarchies, departments, and countries. Trust is vital to Sika. It\'s the basis of our relationships with customers and employees. If you trust Sika we can open up a whole world of interesting opportunities for you too.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'innovative and challenging internships and traineeships focusing on specialty chemicals in the field of research and development. You will work independently and learn first-hand about the many aspects of chemistry and material sciences found in the various fields of Sika Technology.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'open-minded and proactive people with an international focus, who are interested in new technologies and exciting challenges.');
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');
?>