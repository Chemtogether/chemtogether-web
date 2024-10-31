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

$template['company_name'] = 'Sensirion AG';
$template['company_name_short'] = 'sensirion';
$template['logo_url'] = set_source($awss3.'/companies/sensirion/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.sensirion.com','sensirion.com');
$template['linkedin'] = array('https://www.linkedin.com/company/sensirion/','Sensirion');
//$template['archive'] = '/archive/sensirion';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Sensirion is an international high-tech company with its headquarters in Switzerland and subsidiaries in Asia, North America and Europe. For two decades, the ETH spin-off has been developing and producing world-leading sensors and sensor solutions for a wide range of applications in the medical technology, automotive and consumer goods sectors. As a market leader, Sensirion offers stability and security – and embodies a pioneering startup spirit. Today, 1225 employees do their utmost with expertise and passion to stay one step ahead. The common goal: creating sustainable change with innovative sensor solutions. For greater health, efficiency, security and quality of life – for a smarter future across the whole world.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Together, we make the world better. Contribute your ideas, make a difference and take responsibility. Sensirion is a young, dynamic and very humanly managed company with a strong corporate culture. We always strive to offer our employees - who contribute a relevant part to the overall success of our company - optimal conditions for personal and professional development. This includes, for example, taking on a high level of personal responsibility or working in interdisciplinary teams with leading and cooperative professionals. At Sensirion, you will work on independent projects from the very beginning and thus make a relevant contribution to the overall success of our company. Regular team meetings ensure the exchange of information.
  You can find our benefits here: <a href="https://www.sensirion.com/career/work-at-sensirion">https://www.sensirion.com/career/work-at-sensirion</a>');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We offer various positions in development, production and sales. There are exciting tasks in particular in our software departments, in automation and construction, in process engineering or also in technical sales. Various jobs in R&D and production also involve working in our clean rooms (ISO7 and ISO6).
  You can find an overview of our current open positions here: <a href="https://www.sensirion.com/career">https://www.sensirion.com/career</a>');

  $template['button_print_until'] = 0; 
  $template['interview_print_until'] = 0;
  // if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');

?>