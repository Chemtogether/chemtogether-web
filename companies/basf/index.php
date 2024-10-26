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

$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = set_source($awss3.'/companies/basf/logo','png', FALSE);
$template['package'] = 'gold';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.basf.com','basf.com');
//$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');
$template['mail'] = array('jobs','basf.com');
$template['archive'] = '/archive/basf';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'At BASF, we create chemistry for a sustainable future. We combine economic success with environmental protection and social responsibility. The approximately 111,000 employees in the BASF Group work on contributing to the success of our customers in nearly all sectors and almost every country in the world. Further information at www.basf.com.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'BASF offers a variety of entry and career opportunities at various sites for natural scientists, engineers and digital talents:
    <table class="fa-table">
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Direct entry: With a direct entry you will be assigned challenging tasks from day one.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Trainee programs: Our TOP START, START IN and Inside trainee programs offer ambitious university graduates an exciting career start in various fields.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Internship and thesis</td>
    </tr>
  </tr></table>');
  
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'BASF relies on committed people with different experiences and perspectives. In addition to specialist knowledge and practical skills, the company values personal skills: A high degree of team spirit, good communication skills and intercultural skills are just as important as a sense of responsibility, entrepreneurial spirit and innovative spirit.');

// 2021: flash presentation  
$template['button_print_until'] = 0;
$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-basf">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-basf">Watch our Flash presentation');


$template['interview_print_until'] = 2; 

$i=0;
/*
$template['interview'][$i++] = array(
  'name' => 'Dr. Alice Glättli',
  'img_url' => $awss3.'/companies/basf/interviewee_2022_1',
  'position' => 'VP Strategy & Innovation for Performance Chemicals',

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
      'question' => 'What brought you to BASF after your studies and PhD at ETH?',
      'answer' => 'Towards the conclusion of my PhD in the area of computational and physical chemistry in the group of Prof. Wilfred van Gunsteren, I was exploring different career options such as strategy consulting, scientific publishing, research in academia or industry. In the end, I found the offer from BASF most compelling, as I
      got the opportunity to start as a lab leader in central research with the perspective to develop into roles beyond R&D after a few years.',
    ),
    1 => array(
      'question' => 'You have been in this company for many years now, which aspects have changed in the company and also in your task repertoire?',
      'answer' => 'Over the past 17 years, many different aspects in the company have evolved and changed. BASF strengthened its presence in Asia and has expanded and adapted its business 
      and technology portfolio in line with our company purpose of creating chemistry for a sustainable future. As an energy- and resource-intensive company
      we are now facing what is probably the biggest transformation in our over 150-year history: The transformation to a carbon-neutral and circular economy. This requires not 
      only the continued development of high-performance products with clear sustainability benefits for our customers, but also new concepts and approaches in
      the way we produce and what raw materials we use. Also, with regard to my own task repertoire, many aspects changed over the years. I started at
      BASF as a lab leader in central research for crop protection and then moved to different positions & responsibilities ranging from product management,
      marketing to new business development, sustainability and strategy. In each position and new responsibility, I benefitted from my past experiences and at the same time learned a lot of new things as well as expanded my skillset and network. I also had the chance
      to work for some time in our North American headquarter in New Jersey.',
    ),
    2 => array(
      'question' => 'Why would you recommend ETH graduates to start their industry experience at BASF?',
      'answer' => 'BASF is a very large international chemical company, present in about 90 different
      countries serving numerous industries with innovative products & offerings. So, there
      are a lot of
      exciting development opportunities in almost any direction within the company. What
      I personally find very appealing is that fact that you can start your career in research
      and after a few years you can decide to either pursue the expert-track and deepen
      your knowledge and expertise in a specific field or develop into different roles outside
      of research. ',
    ),
    3 => array(
      'question' => 'What makes working at BASF so unique?',
      'answer' => 'This is on the one hand the strong and collaborative network – no matter the
      question you will always find someone who can and is happy to help, and on the
      other hand the diverse development opportunities – my career path is just one
      example of many illustrating the possibilities to develop within and beyond R&D at
      BASF.',
    ),
    4 => array(
      'question' => 'Which advice would you give ETH students who are willing to step out into
      the world of industry?',
      'answer' => 'Take some time to explore what you would like to do, be curious and talk to different
      people to find out more about opportunities in industry. Make use of events such as
      Chemtogether or Polymesse to get to know company representatives. And of course,
      internships are a very good way to gain some first-hand experience and to a good
      starting-point to build a network in industry.',
    ),
  )
);


$template['interview'][$i++] = array(
  'name' => 'Oliver Enger',
  'img_url' => $awss3.'/companies/basf/interviewee_2022_2',
  'position' => ' ',

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
      'question' => 'Looking back at your studies at ETH; what made studying at this university unique for
      you? At which stage during your studies could you develop your interests in more
      depth?',
      'answer' => 'Studying at the ETH is unique in so many ways. It was a whole new world for a young
      science nerd.
      A mix of academic excellence (dedication, brilliant teacher, top-notch
      infrastructure,..), personal development (coming in contact with diverse culture, ways of
      doing science, languages, etc…), and an exciting student life.',
    ),
    1 => array(
      'question' => 'Tell us a bit about your time after your studies prior to working at BASF.',
      'answer' => 'My goal was to stick to what I most liked during my time at the ETH : great science and
      strong diversity. I thus decided to travel to the USA and start postdoctoral studies.
      Interestingly, the competence I acquired at the ETH that I mostly put to use during my
      stay in California was my interpersonal skills…',
    ),
    2 => array(
      'question' => 'What makes working at BASF so unique?',
      'answer' => 'Currently, the multi-disciplinary approach to solving chemistry challenges is very unique
      and fascinating – think about the energy challenge we have and designing full
      value-chain using heat-recovery systems (heat pumps), new chemistries that optimizes
      efficiency, molecular to system design through modelling etc….',
    ),
    3 => array(
      'question' => 'Which capabilities and strengths would you consider to be important in your job and
      which main challenges arise on a frequent basis?',
      'answer' => 'As already mentioned, next to a very solid scientific background, interpersonal skills are
      very important in science and industry. Implementing projects and developing long-term
      visions are never a “lonely cowboy” task, but rely on building teams with very diverse
      cultural and scientific backgrounds. So, getting everyone aligned and avoid (or solving)
      issues is very challenging and requires a good dose of listening and pragmatism.',
    ),
    4 => array(
      'question' => 'Which advice would you give ETH students who are willing to step out into the world
      of industry?',
      'answer' => 'Test the water through internships and never shy away from speaking openly with
      young (or older - like me) researchers in the industry - by sharing your
      personal goals, visions, expectations and questions, you will get a better
      understanding of the path you are going to engage on.',
    ),
  )
);
*/
include('../0_template/template.php');



?>