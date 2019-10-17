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


$template['company_name'] = 'Agilent Technologies';
$template['company_name_short'] = 'agilent';
$template['logo_url'] = set_source($awss3.'/companies/agilent/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.agilent.com/','agilent.com');
$template['facebook'] = array('https://www.facebook.com/Agilent.Tech/', 'Agilent Technologies');
$template['linkedin'] = array('https://ch.linkedin.com/company/agilent-technologies','Agilent Technologies');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Agilent inspires and supports discoveries that advance the quality of life. We provide life science, diagnostic and applied market laboratories worldwide with instruments, services, consumables, applications and expertise. With more than 15,000 employees, Agilent enables customers to gain the answers and insights they seek –– so they can do what they do best: improve the world around us. For more information about Agilent, see: www.agilent.com.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Agilent regularly offers career opportunities in Switzerland in the following functions: Sales (e.g. Account Management [internal, external], Product Specialist, Marketing Program Management), Service (Field Service Engineer, Application Engineer), and Lab Informatics Product Development (e.g. LIMS, ELN, as well as the laboratory software automation suite SLIMS [Genohm]). By joining Agilent you become part of a dedicated, passionate, and international team on a mission to inspire discoveries for a better world.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Agilent employees come from a variety of backgrounds, including Science, Technology, Engineering, and Business. In general, you should have a genuine interest in Research and Technology, particularly in Biotechnology and Life Sciences, be able to adapt well in a dynamic working environment and have an eager to learn attitude. For current opportunities in Switzerland, Europe, and globally: www.agilent.com/go/careers.');

$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
