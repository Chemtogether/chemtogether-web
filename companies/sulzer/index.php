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


$template['company_name'] = 'Sulzer AG';
$template['company_name_short'] = 'sulzer';
$template['logo_url'] = set_source($awss3.'/companies/sulzer/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.sulzer.com/','sulzer.com');
$template['linkedin'] = array('https://www.linkedin.com/company/sulzer/','Sulzer');
//$template['archive'] = '/archive/sulzer';


$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Sulzer is a global leader in fluid engineering and chemical processing applications. We specialize in in energy-efficient pumping, agitation, mixing, separation,purification, crystallization, and polymerization technologies for fluids of all types. Our customers benefit from our commitment to innovation, performance, and quality and from our responsive network of 180 world-class production facilities and service centers across the globe. As a pioneer in industry, we have a proud heritage of innovation and continue to evolve for the future.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We are empowering the next generation of engineers and offer a variety of entry and career opportunities in the area of Polymer, R&D, CCUS, Application Development, and Pilot Plants. As a recognized “Top Employer 2023” we are dedicated to creating a work environment in which our people can thrive and are empowered to make a difference. We are committed to best people practices and employee experience at work and care for the development and well-being of our people. Join our story and create your own impact by developing your expertise. Current vacancies are regularly advertised on our career portal www.sulzer.com/en/about-us/careers');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Everyone at Sulzer plays a role in building solutions that help make our lives safer, smarter, and more sustainable. We are looking for people that enjoy a vibrant and international environment and consider themselves passionate about developing innovative, efficient, and eco-friendly solutions. If you are a team player, with a curious mindset, motivated to learn, qualified with relevant skills and problem-solving abilities, join our team, and help us take Sulzer Chemtech to the next level.');


//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 2;

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
/*
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
);
*/
include('../0_template/template.php');

?>
