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

$template['company_name'] = 'BÜCHI Labortechnik AG ';
$template['company_name_short'] = 'buchi';
$template['logo_url'] = set_source($awss3.'/companies/buchi/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.buchi.com/','buchi.com');
$template['linkedin'] = array('https://www.linkedin.com/company/büchi-labortechnik-ag/','BÜCHI Labortechnik');
//$template['archive'] = '/archive/buchi';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'For more than 80 years, BÜCHI has been one of the world\'s leading providers of laboratory technology solutions
  for research and development, quality assurance and production.
  The company is headquartered in eastern Switzerland and has R&D facilities, production sites and sales & service
  offices spread all over the globe.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer an exciting environment for innovative minds! Newcomers notice the warm welcome throughout the company. 
  Team spirit is very important at BÜCHI and makes it easy to get involved. We support you in your personal development and share
  in the company\'s success.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for innovative minds! Our common goal is to make a valuable contribution to the health and safety of
  people and the environment through our innovative and high-quality product and solutions.');


$template['button_print_until'] = 0;
$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-bachem">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-bachem">Watch our Flash presentation');
  


$template['interview_print_until'] = 1;
#if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

$template['interview'][$i++] = array(
  'name' => 'Lothar Opilik',
  'img_url' => $awss3.'/companies/buchi/interviewee_2022_1',
  'position' => 'Product Manager for Laboratory Evaporation',

  'education' => array(
    0 => array(
      'date' => '-',
      'desc' => '',
    ),
  ),
  'career' => array(
    0 => array(
      'date' => '-',
      'desc' => '-',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What is your current task at BÜCHI Labortechnik?',
      'answer' => 'I am in the product management team for laboratory evaporation, and I am currently involved in three different development projects.
      All of them are in very different stages of the development process. My main responsibility in the project teams is to 
      represent the "first customer" perspective on the new product. Moreover, I coordinate on-site testing activities 
      as well as prototype demonstrations for pilot customers. For the development project that is still in an early stage,
      I evaluate new technologies, e.g. with external partners in academia.',
    ),
    1 => array(
      'question' => 'Which advice would you give to ETH graduates who are looking for a job
      outside academia?',
      'answer' => 'Often soft skills are equally important as technical competence and sometimes it is
      worth to apply for a job, even if your profile does not fully fit the job advertisement.',
    ),
    2 => array(
      'question' => 'How does a typical day for you look like and what are the main challenges that
      arise?',
      'answer' => 'On a typical workday, I have a discussion with the lab technician in our testing lab
      about the ongoing activities. Then, I attend project meetings, review, or write
      technical documents or hold online meetings with external partners. The main
      challenges are to prioritize well and to keep a clear overview over all the different
      activities.',
    ),
    3 => array(
      'question' => 'What makes your job as a development chemist so unique and which
      strengths does one need for this job in particular?',
      'answer' => 'As development chemist I have a lot of interaction with various stakeholders. There is
      the direct exchange with the product manager, project managers, various
      representatives in the development department and the technology team, with
      production, the market organizations, external partners, patent attorneys and
      customers. This makes this job very diverse, and it is beneficial to appreciate the
      regular exchange with other people with different backgrounds. ',
    ),
    4 => array(
      'question' => 'How did your studies prepare you for your current job and which aspects did
      you mainly learn on the way?',
      'answer' => 'A good foundation in thermodynamics, the use of scientific methods as well as
      writing scientific reports are things that I learned during my studies and that I can use
      for my current job. Working in an interdisciplinary team and the ability to
      communicate concise are things that I rather learned on the way.',
    ),
  ),
);


include('../0_template/template.php');

?>