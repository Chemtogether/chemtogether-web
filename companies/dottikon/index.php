
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
$template['company_name'] = 'DOTTIKON ES';
$template['company_name_short'] = 'dottikon';
$template['logo_url'] = set_source($awss3.'/companies/dottikon/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://dottikon.com/','dottikon.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/dottikon-exclusive-synthesis-ag/','Dottikon Exclusive Synthesis AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/dottikon';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the Specialist for Hazardous, Safety-Critical Chemical Reactions with a strong
emphasis on technology-driven Research & Development and Scale-up. A custom
manufacturer of APIs and advanced intermediates for the world’s leading chemical,
biotech, and pharmaceutical industry, we pursue a one-site strategy in Switzerland
that covers the full range from lab scale all the way to multiton production.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'Our one-site strategy creates a unique environment that allows for rapid response
times to customer inquiries, fast decision taking and on-site production. You will have
access to all the plants and equipment where your chemistry will be implemented. We
offer flat hierarchies, clear structures, competences, and responsibility in a constructive and open working environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative, and good communication skills. The
ability to work independently and accurately is just as important as your motivation
to deliver outstanding results.');

/*  $template['button_print_until'] = 0;
  $template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-dottikon">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-dottikon">Watch our Flash presentation');
  


$template['interview_print_until'] = 1;*/

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
//if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
/*
$i = 0;

$template['interview'][$i++] = array(
  'name' => 'Matthias Frei',
  'img_url' => $awss3.'/companies/dottikon/interviewee_2022_1',
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
      'question' => 'What is your current task at DOTTIKON EXCLUSIVE SYNTHESIS AG?',
      'answer' => 'Broadly speaking, I am responsible for the development, and scale-up of flow-chemistry
      processes. This encompasses design of instrumentation, collecting and evaluatingexperimental data as well as developing and tuning models which are ultimately applied to
      design production-scale processes.',
    ),
    1 => array(
      'question' => 'How would you describe the working atmosphere at DOTTIKON EXCLUSIVE SYNTHESIS
      AG?',
      'answer' => 'Overall, very enjoyable. In the research and development department, we have a healthy
      mix of younger graduates and seasoned process chemists collaborating closely in a very
      friendly and supportive environment. Of course, there are some stressful periods – I doubt
      any jobs comes without them – but I have never encountered problems with, or among
      co-workers. ',
    ),
    2 => array(
      'question' => 'Which projects and challenges make your job as a chemical engineer interesting?',
      'answer' => 'It\'s hard to pinpoint a specific topic, as the work is quite stimulating in general. I think the
      most satisfying part is being able to put a lot of theoretical knowledge into practice and
      seeing first-hand how well (or sometimes poorly) your theories and models perform in a real
      plant. I also get to contribute to a wide range of different projects, so the work is far from a
      daily routine.',
    ),
    3 => array(
      'question' => 'Which strengths and capabilities acquired during your PhD are of help now in your current
      job?',
      'answer' => 'I don\'t work in the same field as during my thesis anymore, nevertheless, I feel my PhD
      studies have prepared me well for my current job. Skills I apply daily stem from the process
      of working within a scientific collaboration. Managing different projects in parallel, working as
      part of a team, and a great deal of interdisciplinary problem solving are probably among the
      most important of those. I get to apply a lot of engineering experience I collected in ETH\'s
      High-Pressure Lab as well.',
    ),
    4 => array(
      'question' => 'Which advice would you give to ETH students who are willing to step out into the world of
      industry?',
      'answer' => 'It\'s important to consider how you want to pursue your science and what you are looking for
      as the outcome of your work. In academia, you\'sre usually focussed on a very narrow field but
      have the opportunity to gain a lot of fundamental understanding. In industry, your research
      may have less depth, but is much more multifaceted. You\'sll have to broaden your horizon a
      lot, embracing commercial, technical, and environmental challenges as you go along.',
    ),
  ),
);
*/

include('../0_template/template.php');
?>