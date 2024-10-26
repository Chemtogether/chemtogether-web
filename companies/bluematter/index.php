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


$template['company_name'] = 'Blue Matter Consulting';
$template['company_name_short'] = 'bluematter';
$template['logo_url'] = set_source($awss3.'/companies/bluematter/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://bluematterconsulting.com/','bluematterconsulting.com');
$template['linkedin'] = array('https://www.linkedin.com/company/blue-matter/','blue-matter');
$template['archive'] = '/archive/bluematter';


$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Blue Matter is a consulting firm serving the life sciences industry. We strive to bring a new approach to consulting with original ideas that deliver a meaningful impact.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '
   <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Steep learning curve working on interesting and challenging projects.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Projects from biotechs startups to multinational pharmaceutical corporations.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Supportive environment to learn and grow.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Being empowered to drive your development, own your work, and manage your time from day one.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>We support the wellbeing of our employees.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Structured onboarding program.</td>
  </tr></table>');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Individuals that are: Critical Thinkers , Collaborative, Communicative and Proactive');

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
);*/
include('../0_template/template.php');

?>
