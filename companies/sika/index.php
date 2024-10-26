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
$template['logo_url'] = set_source($awss3.'/companies/sika/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://che.sika.com/','che.sika.com');
//$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');
// $template['mail'] = array('','');
$template['archive'] = '/archive/sika';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'A specialty chemicals company with a
globally leading position in the development and production of systems
and products for bonding, sealing,
damping, reinforcing, and protecting
in the building sector and motor vehicle industry.
Sika has subsidiaries in 103 countries,
manufactures in over 400 factories,
and develops innovative technologies
for customers around the world that
facilitate the sustainable transformation of the construction and at this
time we employ 33,000 people worldwide.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Innovating and challenging internships
and traineeships focusing on specialty chemicals in the field of research
and development. You will work independently and learn first-hand about
the many aspects of chemistry and material sciences found in the various fields of Sika Technology.');
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