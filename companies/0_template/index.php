<?php

// provides small functions
include('php/general.php');


// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
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

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: Chemtogether', 'Chemtogether 2018 - Companies: Chemtogether');
$lang['navigation']['title'] = array('Chemtogether', 'Chemtogether');
$lang['navigation']['topnav_title']= array('Chemtogether', 'Chemtogether');





$template['company_name'] = 'Chemtogether';
$template['company_name_short'] = 'dow';
$template['logo_url'] = $awss3.'/logo/chemtogether';
$template['package'] = 'base';
$template['day'] = 2;

$template['homepage'] = array('https://www.chemtogether.ethz.ch','chemtogether.ethz.ch');
$template['facebook'] = array('https://www.facebook.com/chemtogether/', 'Chemtogether');
$template['linkedin'] = array('https://www.linkedin.com/company/chemtogether/','Chemtogether');
$template['mail'] = array('info','chemtogether.ethz.ch');

$template['we_are'] = array(
  'Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.',
  'Chemtogether is a career fair at ETH Zürich with the aim of connecting students and companies in the general field of chemistry and pharmacy. During both days, 9 companies will present themselves and allow for the exchange of career options with the students and PhDs. In total, 18 companies from the industrial world of chemistry and pharmacy will be present.');
$template['we_offer'] = array(
  'Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.',
  'Chemtogether is a career fair at ETH Zürich with the aim of connecting students and companies in the general field of chemistry and pharmacy. During both days, 9 companies will present themselves and allow for the exchange of career options with the students and PhDs. In total, 18 companies from the industrial world of chemistry and pharmacy will be present.');
$template['we_look'] = array(
  'Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.',
  'Chemtogether is a career fair at ETH Zürich with the aim of connecting students and companies in the general field of chemistry and pharmacy. During both days, 9 companies will present themselves and allow for the exchange of career options with the students and PhDs. In total, 18 companies from the industrial world of chemistry and pharmacy will be present.');












include('../0_template/template.php');



?>
