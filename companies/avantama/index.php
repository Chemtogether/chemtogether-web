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


$template['company_name'] = 'Avantama';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://avantama.com/','avantama.com');
$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/avantama';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are a start-up company with a young and dynamic team that is committed to develop and produce materials for a bright and efficient future. Avantama is the worldwide leader in the development and production of specialty nanoparticles and coating materials for the electronics industry. Avantama’s high tech products enable the fabrication of specific optical and electronic coatings for industrial customers. Our product pipeline is filled with exciting products for the following product groups: LCD TV displays, OLED lighting devices, printed and flexible solar cells, amongst others..');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer you a start-up environment with exciting projects changing the world. You will be given a lot of responsibility and space for your own ideas. We offer several full-time positions in our research & development team. In addition, we offer up to 4 internships to students in their bachelor year or later.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'We are looking for bright and innovative personalities with an excellent bachelor, masters or PhD degree preferably in materials science, chemistry, nanotechnology, physics or a similar field paired with a passion for materials and electronic devices..');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
