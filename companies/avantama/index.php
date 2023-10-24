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

$template['company_name'] = 'Avantama AG';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://avantama.com/','avantama.com');
//$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');


$template['mail'] = array('jobs','avantama.com');
$template['archive'] = '/archive/avantama';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'leader in high-tech materials for electronics. Our material innovations are used in optical and electronic coatings. Our materials are used in solar cells, displays, windows and other applications.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'a unique environment to develop materials for a bright and efficient future.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'chemists, chemical engineers and materials scientist');



$template['button_print_until'] = 0;
$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-avantama">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-avantama">Watch our Flash presentation');

$template['interview_print_until'] = 1;
##if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

$template['button_print_until'] = 0; 

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
/*
$template['interview'][$i++] = array(
  'name' => 'Florian Grieder',
  'img_url' => $awss3.'/companies/avantama/interviewee_2022_1',
  'position' => 'Process Engineer',

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
      'question' => 'What is your current task at Avantama AG?',
      'answer' => 'Since January 2021 I am employed 100% as a Process Engineer in the production
      team of Avantama. Together with my coworkers, we are responsible for the upscaling
      of the R&D production process of our quantum dot materials. On one hand, this
      means handling up to 30kg barrels of chemicals, processing this amount in sized up
      chemical reactors and assuring the quality of each process step to the final product.
      On the other hand, we are further optimizing and investigating the chemical
      processes to improve the reliability of the final product as well as increasing the yield
      of every step both with experiments on a large and on a small scale. Being a small
      company leads to additional responsibilities regarding procurement of chemicals as
      well maintenance of chemical reactors. Furthermore, I am one of the company
      paramedics.',
    ),
    1 => array(
      'question' => 'How would you describe the working atmosphere at Avantama AG?',
      'answer' => 'Working at Avantama is great. Being a small company, you quickly know everyone
      and with the open and helpful atmosphere that we have, it is easy to chat or discuss
      challenges with anyone up to the CEO. With our hands on mentality, every idea is
      welcome and quickly tested. With a one/two-day event in the summer and winter,
      Christmas dinner, many many Friday beers and other spontaneous group events,
      Avantama provides a very familial work environment.',
    ),
    2 => array(
      'question' => 'How does a typical day at the company look like? What excites you the most in
      your current job?',
      'answer' => 'My day at the company starts relatively early at 7 o\'clock when I check my mails and
      do the boring administrative things as well as analyzing gathered data. Between 8
      and 9 mostly everyone has arrived and the whole office gathers for a coffee break
      with some chatting and sometimes a birthday cake or holiday sweets. Then the more
      practical part starts with preparing chemicals and running our production line
      involving analyzing samples with x-ray powder diffraction, UV/Vis spectroscopy and
      many analytical tools. Due to confidentiality, I can\'t tell you more about specific tasks.
      This work further extends into the afternoon and is only interrupted by another coffee
      or ice cream break in the afternoon. Between 4 and 5 it\'s home time.
      What excites me most about my job is to see how relatively simple chemicals can be
      transformed into our fascinating final quantum dot material, involving intense color
      changes, exactly what I imagined chemistry would be like as a child. ',
    ),
    3 => array(
      'question' => 'How did your application process look like prior to starting at this company?',
      'answer' => 'I finished my master thesis right after the corona lockdown in summer 2020 and
      realized that fewer companies are hiring compared to before the corona crisis. I then
      started applying for internships, including one at Avantama. Samuel Halim, CEO of
      Avantama and the person responsible for recruitment replied to my application and
      asked if instead of an internship I would be interested in a full-time position. The first
      part of the application process was an online interview with the CEO and CTO about
      my CV and some scientific questions to test my knowledge and logical thinking. The
      second part was conducted on site involving lab work and typical calculations thatwould be done in the lab. I got to know the whole company and was introduced to the
      team I would be working with. Soon after I got the mail that would like to employ me.',
    ),
    4 => array(
      'question' => 'What did you study and how did it prepare you for the work you are doing
      now?',
      'answer' => 'I did my bachelor and master\'s degree in material science at ETH. On a scientific
      level I felt prepared well and most knowledge regarding the chemical processes and
      the physics of the quantum dots was taught as part of the curriculum. On a more
      practical level there was more of a challenge with working on big and heavy chemical
      reactors. All the work in the lab is more on the gram and milliliter scale and suddenly
      adding three orders of magnitude changes the way of handling as well as the
      necessary safety precautions. Otherwise as a more interdisciplinary study, material
      science helped a lot to bridge chemical problems with engineering solutions.',
    ),
  ),
);
*/
include('../0_template/template.php');

?>