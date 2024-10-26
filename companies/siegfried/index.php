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


$template['company_name'] = 'Siegfried Holding AG';
$template['company_name_short'] = 'siegfried';
$template['logo_url'] = set_source($awss3.'/companies/siegfried/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.siegfried.ch','siegfried.ch');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/siegfried-holding-ag/','Siegfried Holding AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/siegfried';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Siegfried is a worldwide leading Contract and Development Manufacturing
Organization (CDMO). We operate on
3 continents, 7 countries and 14 locations. We supply for ≈ 200 out of 1500
Active Pharmaceutical Ingredients
(APIs) approved by the FDA. We serve
more than 500 customers globally and
up to 1b people get in contact with our
products every year. We offer contract
developing and manufacturing of APIs,
intermediates and finished dosage
forms. Founded in 1873, we celebrated
our 150 years.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Join Siegfried for the best of both
worlds: the stability of a global leader
with the innovative spirit of a startup.
Collaborate with talented colleagues,
gain international experience, and
grow in a supportive environment.
Here, your ideas matter, and your career can thrive.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'We’re seeking Bachelor’s, Master’s
graduates and EFZ “Lehrabgänger/
innen” with a passion for continuous
learning and a drive to innovate. If
you thrive in dynamic environments,
embrace challenges, and seek variety
in your work, Siegfried is the place for
you. We value curiosity, adaptability,
and a proactive mindset.');

  
$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
