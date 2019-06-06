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
if(isset($_GET['fb']) && $_GET['fb'] == 'i-0') {
  $fb = array(
    "title"        => "Interview with Dr. Michael Seet from BASF - Chemtogether",
    "desc"         => "Dr. Michael Seet works as Research Scientist at BASF. Learn more about his career and work in his interview, and meet BASF at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/basf_0_20181002.jpg",
    "image_width"  => "800",
    "image_height" => "420"
  );
} else {
  // $fb = array(
  //   "title"        => "",
  //   "desc"         => "",
  //   "url"          => $awss3."/opengraph/",
  //   "image_url"    => "",
  //   "image_width"  => "",
  //   "image_height" => ""
  // );
}
$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = set_source($awss3.'/companies/basf/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.basf.com','basf.com');
$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');

// $template['mail'] = array('','');
$template['archive'] = '/archive/basf';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are the world’s leading chemical company, with the best teams developing intelligent solutions for our customers and creating chemistry for a sustainable future. BASF’s success as a company relies on the personal engagement of our employees. We encourage our staff to develop their strengths, and we recognize their achievements.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => ' We offer excellent frame conditions and development opportunities. The start position as Lab Team Leader offers the chance to develop your individual career as an expert in the worldwide R&D community, as a specialist in technology, production, marketing and sales, innovation scouting, or as a future manager in a global company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'You are an enthusiastic chemist or chemical engineer, and you have successfully completed your studies with a PhD or a PostDoc. Your focus is on one of the following specialist areas: Chemi­cal engineering, organic, inorganic, macromolecular, technical, physical, theoretical, analytical chemistry or biochemistry. You are open to every­thing that’s new and are looking for scientific and technical challenges. You enjoy working in an interdisciplinary and intercultural team.');

$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');



?>