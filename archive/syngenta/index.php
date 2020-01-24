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


$template['company_name'] = 'Syngenta';
$template['company_name_short'] = 'syngenta';
$template['logo_url'] = $awss3_archive.'/logo/syngenta';

$lang['general']['page_title'] = array('Chemtogether 2020 - Archiv: '.$template['company_name'], 'Chemtogether 2020 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'We are a leading agriculture company helping to improve global food security by enabling millions of farmers to make better use of available resources. 
  We uee world-class science to provide innovative crop solutions with 28,000 people in over 90 countries working to transform how crops are grown. 
  We are committed to rescuing land from degradation, enhancing biodiversity and revitalizing rural communities.',
  'We are a leading agriculture company helping to improve global food security by enabling millions of farmers to make better use of available resources. 
  We uee world-class science to provide innovative crop solutions with 28,000 people in over 90 countries working to transform how crops are grown. 
  We are committed to rescuing land from degradation, enhancing biodiversity and revitalizing rural communities.');
$template['we_offer'] = array(
  'We offer positions in chemistry research in Switzerland to students who are excited by solving practical problems in chemistry. Our placements provide a wide variety of opportunities to introduce you to the exciting work that Syngenta does and prepare for the possibility of a longer-term relationship with us. 
  This includes several five-to-seven month chemistry internships based at our research & development centers in Stein and Münchwilen where you may work on a wide range of projects, including: (1) Chemical research, (2) Computer Assisted Molecular Modelling (CAMM), (3) Process Technology and Chemical Engineering or (4) Analytics.',
  'We offer positions in chemistry research in Switzerland to students who are excited by solving practical problems in chemistry. Our placements provide a wide variety of opportunities to introduce you to the exciting work that Syngenta does and prepare for the possibility of a longer-term relationship with us. 
  This includes several five-to-seven month chemistry internships based at our research & development centers in Stein and Münchwilen where you may work on a wide range of projects, including: (1) Chemical research, (2) Computer Assisted Molecular Modelling (CAMM), (3) Process Technology and Chemical Engineering or (4) Analytics.');
$template['we_look'] = array(
  'We are looking for enthusiastic students with a strong academic record and good communication skills who are currently enrolled in a bachelor, Master, or Ph.D program in chemistry. (1) As well as English, you should ideally speak at least one other language fluently. (2) Previous experience in working in a synthetic organic chemistry laboratory is greatly valued. (3) A valid residence and work permit for Switzerland, or the entitlement under an international treaty to obtain such (e.g. EU bilateral treaty) is required.',
  'We are looking for enthusiastic students with a strong academic record and good communication skills who are currently enrolled in a bachelor, Master, or Ph.D program in chemistry. (1) As well as English, you should ideally speak at least one other language fluently. (2) Previous experience in working in a synthetic organic chemistry laboratory is greatly valued. (3) A valid residence and work permit for Switzerland, or the entitlement under an international treaty to obtain such (e.g. EU bilateral treaty) is required.');




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
