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


$template['company_name'] = 'Blue matter consulting';
$template['company_name_short'] = 'bluematter';
$template['logo_url'] = set_source($awss3.'/companies/bluematter/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://bluematterconsulting.com/','bluematterconsulting.com');
$template['linkedin'] = array('https://www.linkedin.com/company/blue-matter/','blue-matter');
//$template['archive'] = '/archive/bluematter';


$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Blue Matter is a strategic consulting firm serving the life sciences industry. We work with some of the most innovative companies and therapies in the world. While we’re committed to excellence, we also foster a People First culture that’s collaborative and supportive, focusing on our team’s well-being and personal growth.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '
   <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>A steep learning curve working on interesting and challenging projects across our clients’ products, portfolios, and organizations.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Projects from biotechs startups to multinational pharmaceutical corporations.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>A Supportive environment to learn and grow, regardless of your skill and knowledge level.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Being empowered to drive your development, own your work, and manage your time from day one.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>We support the wellbeing of our employees by reimbursing health-related aspects such as gym membership, sports coaching, or sports equipment.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Cost-matching education initiatives (even if it is not work-related) for your self-improvement.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Hybrid office and home working model (depending on project schedules), with very limited travel requirement (5-10% on average).</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>A structured onboarding program to help you learn basic consulting skills.</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Support for your developmental journey with a Peer-level buddy to help you navigate your way around Blue Matter and share their experiences, as well as a senior-level career coach to support your overall professional development and career progression</td>
  </tr></table>');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'At Blue Matter we look for aspiring / veteran Consultants (AC / C / SC) that are scientifically trained (either by experience or academic accomplishments) and have a solid base across all of the following competencies, which are:
    <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Critical Thinker</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Collaborative</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Communicative</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Proactive</td>
  </tr></table>
    We would be extra thrilled if you are:
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Able to display a mature level of structured thinking</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Able to integrate business, industry and academic knowledge towards creating creative solutions</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Able to demonstrate direct biopharma industry knowledge and experience</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Experienced in client facing environments</td>
  </tr></table>');

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
