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
$template['company_name'] = 'Sika Technology AG';
$template['company_name_short'] = 'sika';
$template['logo_url'] = set_source($awss3.'/companies/sika/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://che.sika.com/','che.sika.com');
$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');
// $template['mail'] = array('','');
$template['archive'] = '/archive/sika';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Sika is a specialty chemicals company with a leading position in the development and production of systems and products for bonding, sealing, damping, reinforcing, and protecting in the building sector and motor vehicle industry. Sika has subsidiaries in 100 countries around the world and manufactures in over 300 factories. At this time we employ 25,000 people worldwide.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Creativity, innovation, customer-centricity, research and sustainability are dynamic components of Sika’s long-term success and future growth. We offer candidates the possibility to work on large-scale projects around the globe, that result in effective and original products for customers. We give you the opportunity to develop, for instance via collaborating with R&D teams in different countries.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'At Sika we value courage for innovation, strength to persist, and pleasure in working together. You have the ability to perform combined with a high degree of social skills, an entrepreneurial spirit, respect for different opinions and working in diverse teams to achieve our strategic goals.
  Is it your ambition to perform, excel and be proud of your results? Then Sika is the place for you!');

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');
?>