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


$template['company_name'] = 'Chemgineering';
$template['company_name_short'] = 'chemgineering';
$template['logo_url'] = set_source($awss3.'/companies/chemgineering/logo','png', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.chemgineering.com/','chemgineering.com');
//$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
$template['linkedin'] = array('https://www.linkedin.com/company/chemgineering/','Chemgineering Group');
// $template['mail'] = array('','');
$template['archive'] = '/archive/chemgineering';

$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'The Chemgineering Group is a global consulting and planning company focusing on the GxP-regulated environment.
   From consulting to concept studies to turnkey solutions, we offer the full range of services. 
   We have engineers, process engineers, chemists, pharmacists, biotechnologists and many more specialists from many 
   different fields, our employees also originate from a wide variety of cultures.  
   ');

$template['we_offer'] = array(
   'title' => 'We offer you',
   'text' => '
   <table class="fa-table">
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>A high degree of flexibility with regard to organizing working hours </td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>The possibility to work on a mobile basis</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td> Individualized professional training acoording to personal development goals</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>Regular team and company events</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>Maintaining an open communication climate and flat hierachies</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>Attractive social benefits</td>
   </tr>
   </tr></table>
   Find out more: https://www.chemgineering.com/en/careers/employee-stories');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Project engineer or Junior consultants, depending on company area. 
  Are you on the verge of getting your science degree, and might you already have gained your first
  experiences in life sciences so that you now really want to get going? Career starters have found
  exactly the right place here!');

//$template['button_print_until'] = 0; 
//$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-chemgineering">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-chemgineering">Watch our Flash presentation');

//$template['interview_print_until'] =1;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
$i=0;

/*
$template['interview'][$i++] = array(
  'name' => 'Helena Wiemeyer',
  'img_url' => $awss3.'/companies/chemgineering/interviewee_2022_1',
  'position' => 'Project Engineer',

  'education' => array(
    0 => array(
      'date' => '2016-2018',
      'desc' => 'Master of Science ETH in Process Engineering, ETH Zurich, Switzerland',
    ),
    1 => array(
      'date' => '2013-2016',
      'desc' => 'Bachelor of Science ETH in Chemical Engineering, ETH Zurich, Switzerland',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => 'since 2018',
      'desc' => 'Project Engineer, Chemgineering, Münchenstein',
    ),
    1 => array(
      'date' => '2017-2018',
      'desc' => 'Internship in Process Development, Roche, Basel',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What is your main task at Chemgineering? How does a typical workday look like?',
      'answer' => 'As a project engineer I am currently collaborating on a large-scale project. I am
      responsible for the time and cost controlling of all equipment for the new API
      manufacturing plant. In addition to this I also have technical tasks for the detail
      design, construction and commissioning of the centrifuge and the cooling unit. I
      spent most of my days in our office near Basel, either at my desk or in meetings with
      the project team. On one or two days per week I meet on-site with the client or visit a
      supplier.',
    ),
    1 => array(
      'question' => 'What makes working at Chemgineering so unique?',
      'answer' => 'Working in a project environment means that my tasks and also the processes, clients and
      people I interact with change from time to time and I can always learn something new - the
      most important thing for me. We are around 100 employees in the office in Münchenstein -
      so you know each other, either from working together or from a BBQ lunch, hiking trip or ski
      day with colleagues.',
    ),
    2 => array(
      'question' => 'How did your internship at Roche shape your interests and curiosity and what did you
      learn during this time?',
      'answer' => 'During my internship I developed a modelling tool for solid drug manufacturing (granulation,
      milling, tableting and coating). It was interesting to see drug manufacturing processes from
      close, to identify which properties are crucial and to come up with a tool that can be used for
      prediction or to find optimal process parameters. The insights into a large pharma
      corporation are useful for me still today and have encouraged me to pursue a career in
      industry.',
    ),
    3 => array(
      'question' => 'What are the main challenges that arise in your work?',
      'answer' => 'When deadlines approach or during the construction phase it tends to get stressful and I
      work longer days. Luckily, my time at ETH has taught me resilience and how to organize
      myself when I have a lot on my plate. Communication with clients and in an interdisciplinary
      team can also be challenging at times.',
    ),
    4 => array(
      'question' => 'Which advice would you give ETH graduates who embark on the journey from academia
      to industry?',
      'answer' => 'Follow your interests and maintain the will to learn.',
    ),
  ),
);
*/
include('../0_template/template.php');

?>
