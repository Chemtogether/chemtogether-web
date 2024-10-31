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


$template['company_name'] = 'SYSTAG Systemtechnik AG';
$template['company_name_short'] = 'systag';
$template['logo_url'] = set_source($awss3.'/companies/systag/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.systag.ch/','systag.ch');
$template['linkedin'] = array('https://www.linkedin.com/company/systag-system-technik-ag/','SYSTAG');
$template['archive'] = '/archive/systag';


$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'A Swiss company operating worldwide as a partner of the pharmaceutical and chemical industry for automation in R&D laboratories.');
$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'The flexibility to work from home and be involved in diverse fields within the company. Our flat hierarchy allows you to develop yourself and make a difference through your own initiative.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'People who do not want to be just an anonymous number in a big company. For our positions in product development (software and hardware), project management and engineering we prefere people with a background in science or engineering.');

//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 2;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
$i=0;
/*
$template['interview'][$i++] = array(
    'name' => '',
    'img_url' => $awss3.'/companies/lonza/interviewee_2022_1',
    'position' => '',
  
    'education' => array(
      0 => array(
        'date' => '',
        'desc' => '',
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '',
        'desc' => '',
      ),

    ),
  
    'interview' => array(
      0 => array(
        'question' => 'Can you share your career story at Lonza with us?',
        'answer' => '',
      ),
    ),
);


$template['interview'][$i++] = array(
  'name' => '',
  'img_url' => $awss3.'/companies/lonza/interviewee_2022_2',
  'position' => '',

  'education' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),

  ),

  'interview' => array(
    0 => array(
      'question' => '',
      'answer' => '',
    ),
    1 => array(
      'question' => '',
      'answer' => '',
    ),
    2 => array(
      'question' => '',
      'answer' => '',
    ),
    3 => array(
      'question' => '',
      'answer' => '',
    ),
    4 => array(
      'question' => '',
      'answer' => '',
    ),
    5 => array(
      'question' => '',
      'answer' => '',
    ),
    6 => array(
      'question' => '',
      'answer' => '',
    ),

  ),
);*/
include('../0_template/template.php');

?>
