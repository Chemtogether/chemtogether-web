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


$template['company_name'] = 'Cabb AG';
$template['company_name_short'] = 'cabb';
$template['logo_url'] = set_source($awss3.'/companies/cabb/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://cabb-chemicals.com/','cabb-chemicals.com');
$template['linkedin'] = array('https://www.linkedin.com/company/cabb-chemicals/','Cabb');
$template['archive'] = '/archive/cabb';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => '');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => '');
$template['button_print_until'] = 0; 
$template['interview_print_until'] = 2;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

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
        'question' => '',
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
);
include('../0_template/template.php');

?>
