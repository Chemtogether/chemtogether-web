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


$template['company_name'] = 'GALENICA AG';
$template['company_name_short'] = 'galenicare';
$template['logo_url'] = set_source($awss3.'/companies/galenicare/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

//$template['homepage'] = array('https://www.hoffmanneitle.com','hoffmanneitle.com');
// $template['facebook'] = array('', '');
//$template['linkedin'] = array('https://www.linkedin.com/company/hoffmann-eitle/','HOFFMANN EITLE');
// $template['mail'] = array('','');
//$template['archive'] = '/archive/hoffmanneitle';

$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the largest pharmacy Group in Switzerland. With more than 350 pharmacies all over Switzerland, we can offer you different opportunities at all levels of your career.');

  $template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'We can offer you apprenticeships during your Master studies in Pharmacy. Graduates are more than welcome to start as young Pharmacists. In addition, we offer a large selection of trainings from the begging of your career.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for motivated pharmacists.');

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
