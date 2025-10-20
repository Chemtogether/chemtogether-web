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
$template['company_name'] = 'Sika Services AG';
$template['company_name_short'] = 'sika';
$template['logo_url'] = set_source($awss3.'/companies/sika/logo','jpg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://che.sika.com/','che.sika.com');
//$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');
// $template['mail'] = array('','');
// $template['archive'] = '/archive/sika';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Sika is a global specialty chemicals
company leading in bonding, sealing,
damping, reinforcing, and protection solutions
for construction and industrial manufacturing.
With subsidiaries in 102 countries, over 400
factories, and 34,000 employees, it
produces innovative technologies that drive
environmentally compatible transformation in
construction and transportation, generating CHF
11.76 billion in sales in 2024.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Innovative and challenging internships and
traineeships in the field of specialty chemicals,
with a focus on research and development.
Participants will have the opportunity to work
independently and gain hands-on experience
across various areas of chemistry and materials
science within Sika Technology.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'Open-minded and proactive people
with an international focus, who are
interested in exciting challenges - drop
by our booth to explore the world of
Sika and learn how you can kickstart
your career journey with us!');

$template['button_print_until'] = 0;
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');
?>