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


$template['company_name'] = 'HOFFMANN EITLE';
$template['company_name_short'] = 'hoffmanneitle';
$template['logo_url'] = set_source($awss3.'/companies/hoffmanneitle/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.hoffmanneitle.com','hoffmanneitle.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/hoffmann-eitle/','HOFFMANN EITLE');
// $template['mail'] = array('','');
$template['archive'] = '/archive/hoffmanneitle';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'HOFFMANN EITLE is one of Europe’s leading firms specializing in the protection of intellectual property.
   With seven offices across Europe, the firm is one of the largest of its type. We advise our clients on all legal 
   and technical issues regarding patent applications and patent prosecution and are well known for our expertise 
   in opposition and litigation proceedings.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'The only route to becoming a patent attorney is by taking a position as a trainee,
   and being trained by an already-qualified patent attorney. 
   We offer our trainees top-quality training (our pass rates for the Qualifying Exams are well above average), 
   good long-term career perspectives, and a dynamic and rewarding work environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Individuals with
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>a technical qualification at university level (M.Sc. or Ph.D.)</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>excellent English skills (written and spoken)</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>first-rate technical comprehension</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>ability to analyze complex facts and present these in precise technical terms</td>
  </tr></table>
  ');

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
