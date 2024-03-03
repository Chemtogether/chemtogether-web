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


$template['company_name'] = 'DR. BÄHLER DROPA AG';
$template['company_name_short'] = 'baehler';
$template['logo_url'] = set_source($awss3.'/companies/baehler/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://baehlerdropa.ch/','baehlerdropa.ch');
$template['linkedin'] = array('https://www.linkedin.com/company/baehlerdropa/','Baehlerdropa');
$template['archive'] = '/archive/baehler';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The family company DR. BÄHLER DROPA AG is one of the leading service providers in the Swiss healthcare system and has a long tradition of pharmaceutical and entrepreneurial excellence. Our nearly 2000 employees at over 120 locations throughout German-speaking Switzerland are committed to improve public health every day of the year. We follow trends closely, and our employees keep up with the latest developments through regular specialist training.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We combine the best of two worlds: as a family business, we attach great importance to a personable corporate culture and to appreciative collaboration. We are lean, flexible, and have short decision-making paths. At the same time, we offer the advantages of a large company with our central services, modern working conditions, and career opportunities. We offer <a href="https://baehlerdropa.ch/famulaturen">Famulaturen</a>, <a href="https://baehlerdropa.ch/assistenzstellen">Assistenzstellen</a>, and <a href="https://baehlerdropa.ch/jobs/pharmaziestudentinnen-sammelinserat-d-ch-aushang-und-verbaende">student jobs</a> to pharmacy students along with flexible working hours that fit their studies. We support graduates with our 2-year <a href="https://baehlerdropa.ch/trainees">Trainee@DBD</a> training program until they acquire the federal specialist title “Fachapotheker*in in Offizinpharmazie”.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for inquisitive pharmacy students and graduates.');
$template['extra'] = array(
  'title' => 'Get in touch',
  'text' => 'Do you have any questions, or are you interested in a flexible student job? Please do not hesitate to get in touch with us, either by phone, email, or WhatsApp: Fabienne Schmitter, Standortbetreuerin, looks forward to hearing from you at <a href="mailto:fabienne.schmitter@baehlerdropa.ch">fabienne.schmitter@baehlerdropa.ch</a> or <a href="tel:+41789173746">078 917 37 46</a>.');
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
