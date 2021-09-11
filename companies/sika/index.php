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
  'title' => '',
  'text' => '');
$template['we_offer'] = array(
  'title' => '',
  'text' => '');
$template['we_look'] = array(
  'title' => '',
  'text' => '');

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');
?>