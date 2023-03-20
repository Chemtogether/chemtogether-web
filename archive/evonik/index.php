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
$template['company_name'] = 'Evonik Industries AG ';
$template['company_name_short'] = 'evonik';
$template['logo_url'] = set_source($awss3.'/companies/evonik/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://corporate.evonik.com/','evonik.com');
$template['linkedin'] = array('https://www.linkedin.com/company/evonik/','Evonik');

//$template['archive'] = '/archive/evonik';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Evonik is one of the world leaders in specialty chemicals. The company is active in more
  than 100 countries and generated sales of 15 billion euros and an operating profit of 2.38 billion euros in 2021. 
  Evonik goes far beyond chemistry to create innovative, profitable and sustainable solutions.
  More than 33000 employees work together for a common purpose: We want to improve life, today and tomorrow.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'From trainee programs to zeolite research, at Evonik you will discover a world of opportunities for every
  stage of your career.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'Apply your studies to the real world and kick-start your career with Evonik. Internships,
  trainee programs, theses, final projects, networking, dual courses of study, grants, scholarships and 
  opportunities that launch careers. With Evonik, the only limit to your potential is your ambition and imagination.');
  $template['button_print_until'] = 0;
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');
?>