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


$template['company_name'] = 'Siegfried';
$template['company_name_short'] = 'siegfried';
$template['logo_url'] = set_source($awss3.'/companies/siegfried/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.siegfried.ch','siegfried.ch');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/siegfried-holding-ag/','Siegfried Holding AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/siegfried';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Siegfried is a world-class integrated service partner to the global pharmaceutical industry in the development and manufacture of Drug Substances and Drug Products that improve life. In recent years, Siegfried experienced as a company a dynamic growth phase. The company grew from three sites to now nine sites in six countries on three continents. Its production facilities are located in Switzerland, the USA, Malta, China, Germany and France. In 2017, the company achieved net sales of CHF 750.5 million and currently employs approximately 2300 people. Siegfried Holding AG is publicly listed on the Swiss Stock Exchange in Zurich (SIX: SFZN).');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Siegfried\'s work environment is dynamic and international. With a highly professional and motivated team, the company operates in a future-oriented business field. Siegfried possesses a unique culture that leverages cultural differences to create a competitive advantage. We strive to provide a work environment where employees can take on challenging jobs and associated responsibilities that best serve their personal and technical development and can benefit from the success of our company. Our performance-based compensation model is intended to attract and motivate highly-qualified, target-oriented employees in competitive market conditions with a view to forging long-term ties with Siegfried. Come and find out more about a company with a strong tradition of innovation where, just as our slogan suggests, you really can “expect more”.<br>Our most wanted entry-level positions are:  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><a href="http://bit.ly/SiegfriedProjectManagerChemicalProcessDevelopment">Project Manager, Chemical Process Development (f/m)</a></td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><a href="http://bit.ly/SiegfriedProjectManagerAnalytics">Project Manager, Analytics (f/m)</a></td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><a href="http://bit.ly/SiegfriedTraineeProgramm">Talent Pool Siegfried Trainee Programm</a></td>
  </tr>
  </table> ');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'On the entry-level, we predominantly are looking for Masters/PhD in chemistry, pharmaceutical science, life science, food technology or biochemistry. In Chemical Process Development in particular we are focusing on PhD candidates in organic chemistry specializing in synthesis, preferably with several semesters abroad. We entrust our staff with demanding duties and responsibilities so they can develop personally and professionally and take a stake in our company’s successes. They share with us an ambition to create innovative solutions that meet and exceed our clients’ exacting quality standards. Do you expect your employer to make the best use of your expertise while also helping you to learn new skills and develop personally? If you are a dynamic performer with a sound educational background, professional expertise and an entrepreneurial approach, you are just what we are looking for.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
