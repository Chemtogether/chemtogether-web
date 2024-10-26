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

$template['company_name'] = 'BACHEM';
$template['company_name_short'] = 'bachem';
$template['logo_url'] = set_source($awss3.'/companies/bachem/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.bachem.com/','bachem.com');
$template['linkedin'] = array('https://www.linkedin.com/company/bachem/','Bachem');

$template['archive'] = '/archive/bachem';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The Swiss based Bachem Group is specialized in the development and manufacturing of pepTide- and oligonucleoTide-based active pharmaceutical ingredients. With 50 years of experience and a global reach, the group is the partner of choice for the biotech and pharma industry. Bachem attaches the utmost importance to quality, innovation and partnership. Bachem. Leading Partner in Tides.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer graduates with a diploma or doctoral degree the possibility to apply their
knowledge, gain initial experience in a variety of areas and benefit from the know-
how of our experienced employees within a highly collaborative environment with a
respectful attitude.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young, committed and fully qualified graduates, holding a diploma
or already in possession of a doctoral degree, who would like to join our company
and establish in a professional environment, to secure our long-term success and
maintain market leadership.');


/*$template['button_print_until'] = 1;
$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-bachem">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-bachem">Watch our Flash presentation');
  


$template['interview_print_until'] = 1;*/

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

#if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
/*
$template['interview'][$i++] = array(
  'name' => 'Jakub Jagielski',
  'img_url' => $awss3.'/companies/bachem/interviewee_2022_1',
  'position' => 'Project Chemist in MSAT',

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
      'question' => 'What is your current task at Bachem?',
      'answer' => 'I work as a Project Chemist in the MSAT (Manufacturing Science & Technology)
      Department and my task is to implement new production technologies and improve
      the existing ones. This mainly includes lab testing, definition of the user
      requirements, planning, discussions with the equipment suppliers, authoring and
      review of GMP-relevant documentation, and finally equipment commissioning. In
      other words, I make sure that our production teams have everything they need to
      focus on their job.',
    ),
    1 => array(
      'question' => 'Why did you decide to work at Bachem and how did the application
      process look like?',
      'answer' => 'I was always curious about working in the chemical/pharmaceutical industry. During
      the recruitment phase, I realized Bachem is a fast-growing company where I would
      be able to start working with almost no industry experience on challenging and
      innovative projects relevant to production processes. I also had a very positive
      impression of the people I would be working with.
      I applied through Bachem’s careers portal by submitting standard job application
      documents (CV, motivation letter, certificates etc.) and was invited for a first in-person
      interview with my future supervisors as well as HR partner. After I successfully made
      it to the next stage, I was invited to a second round. This time I met the rest of the
      team, got an insight into how the company operates and what my potential projects
      might look like. In the end, I had the opportunity to present a topic of my choice to a
      group of Bachem colleagues from the same department.',
    ),
    2 => array(
      'question' => 'Which strengths did you develop during your studies at ETH that helped
      you in particular in your current job?',
      'answer' => 'During my PhD studies, I learned to work independently, cope with difficult situations
      and communicate with different collaborators in order to achieve the goal. Apart from
      that, my studies at ETH gave me a very solid theoretical and practical knowledge in
      the field of chemical engineering.',
    ),
    3 => array(
      'question' => 'What fascinates you about your work in particular?',
      'answer' => 'The opportunity to work on different projects, to constantly learn new technologies
      and the ability to improve current production processes, ultimately benefiting patients
      worldwide. There are always many challenges ahead and it never gets boring. ',
    ),
    4 => array(
      'question' => 'What would you recommend ETH students to do during their studies
      for future industry experience?',
      'answer' => 'If possible, try to do an internship either at a company or research organization. Use
      this chance also for going abroad in order to meet other cultures as well as working
      styles and conditions. Sometimes they really vary from what one can experience at
      ETH. Generally, getting used to leaving your comfort zone might be beneficial in the
      future.',
    ),
  ),
);
*/

include('../0_template/template.php');

?>