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


$template['company_name'] = 'df-mp';
$template['company_name_short'] = 'dfmp';
$template['logo_url'] = set_source($awss3.'/companies/dfmp/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://df-mp.com','df-mp.com');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
//$template['linkedin'] = array('https://www.linkedin.com/company/sigaswiss/','SIGA');


// $template['we_are'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_offer'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_look'] = array(
//   'title' => '',
//   'text' => '');


$template['we_are'] = array(
   'title' => 'We are',

   'text' => 'df-mp is one of the top European firms
in the field of intellectual property law.
We have been advising and representing clients in national and international
matters relating to patents and trademarks for over two decades. Based in
the centre of Munich, our team is international, with attorneys/trainees from
countries including Germany, England,
USA, and Canada.
We possess multilingual capabilities,
command a high level of intercultural
expertise, and maintain a global network. This enables us to develop strategies tailored to the specific demands
of various judicial systems. We provide
counsel to international corporations,
as well as domestic and foreign law
firms, across diverse fields such as
biotechnology, chemistry, pharmaceuticals, electrical and mechanical arts,
trademarks, and designs.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'df-mp offers exceptional training to
become a European and/or a German
Patent Attorney, comprising immediate exposure to technical and legal
aspects of patent cases, supervised by
a qualified Attorney. The work is challenging and rewarding, and provides a
strong basis for trainees to be able to
pass the Qualifying Examinations. We
further provide a family-friendly, inclusive and flexible working environment.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are looking for technically-qualified
individuals with at least an MSc or PhD,
an excellent command of written and
spoken English, attention-to-detail and
motivation to apply these skills to the
protection of intellectual property in
exciting new areas of technology.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
