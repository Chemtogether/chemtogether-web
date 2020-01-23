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


$template['company_name'] = 'Mettler Toledo';
$template['company_name_short'] = 'mettlertoledo';
$template['logo_url'] = set_source($awss3_archive.'/mettlertoledo/logo','png', FALSE);

$lang['general']['page_title'] = array('Chemtogether 2020 - Archiv: '.$template['company_name'], 'Chemtogether 2020 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.mt.com/ch/de/home.html','mt.com');
$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://ch.linkedin.com/company/mettlertoledo','Mettler-Toledo International, Inc');

$template['we_are'] = array(
  'We are the leading manufacturer and provider of precision instruments. Our weighing systems and analytical instruments are found in laboratories, industrial plants, and retail industry across the globe.',
  'We are the leading manufacturer and provider of precision instruments. Our weighing systems and analytical instruments are found in laboratories, industrial plants, and retail industry across the globe.');
$template['we_offer'] = array(
  'We offer challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company.',
  'We offer challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company.');
$template['we_look'] = array(
  'We are looking for a motivated personality who is always ready to develop further, who is open to new ideas and who enjoys working in a dynamic environment and realising his potential.',
  'We are looking for a motivated personality who is always ready to develop further, who is open to new ideas and who enjoys working in a dynamic environment and realising his potential.');




  //
  //
  // $template['interview']['2017'][$i++] = array(
  //   'name' => '',
  //   'img_url' => set_source($awss3_archive.'//', 'png', FALSE),
  //   'position' => array('', ''),
  //
  //   'education' => array(
  //     0 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     1 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     2 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //   ),
  //
  //   'career' => array(
  //     0 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     1 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     2 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //   ),
  //
  //   'interview' => array(
  //     0 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     1 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     2 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     3 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     4 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     5 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     6 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     7 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     8 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     9 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //   ),
  // );

include('../0_template/template.php');



?>
