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

$active_nav = 'archive';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );


$template['company_name'] = 'Biogen';
$template['company_name_short'] = 'biogen';
$template['logo_url'] = set_source($awss3_archive.'/biogen/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.biogen.com','biogen.com');


$template['we_are'] = array(
 'At Biogen, our mission is clear: we are pioneers in neuroscience. Since our founding in 1978 as one of the world’s first global biotechnology companies, Biogen has led innovative scientific research with the goal over the last decade to defeat devastating neurological diseases.',
 'At Biogen, our mission is clear: we are pioneers in neuroscience. Since our founding in 1978 as one of the world’s first global biotechnology companies, Biogen has led innovative scientific research with the goal over the last decade to defeat devastating neurological diseases.');
$template['we_offer'] = array(
  ' <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Bachelor/Master thesis</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Industrial internship</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Trainee program</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Direct entry</td>
  </tr></table>',
  ' <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Bachelor/Master thesis</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Industrial internship</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Trainee program</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td> Direct entry</td>
  </tr></table>');

$template['we_look'] = array(
'students, interns and recent graduates with life-science and engineering background such as (bio)chemical engineers / process engineers / pharmacists / analytical chemists or similar.',
'students, interns and recent graduates with life-science and engineering background such as (bio)chemical engineers / process engineers / pharmacists / analytical chemists or similar.');


include('../0_template/template.php');



?>
