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

$template['company_name'] = 'DSM';
$template['company_name_short'] = 'dsm';
$template['logo_url'] = set_source($awss3_archive.'/dsm/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.dsm.com/','dsm.com');
$template['facebook'] = array('https://www.facebook.com/DSMcompany/', 'DSM');
$template['linkedin'] = array('https://www.linkedin.com/company/dsm/','DSM');

// $template['mail'] = array('','');
$template['archive'] = '/archive/dsm';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'DSM Nutritional Products DNP is the largest business group of DSM. As part of the Dutch Company we are leader in developing and producing Vitamins and other substances for our businesses Human / Animal Nutrition & Health and Personal Care. Focus of DSM is sustainability and together with our 25’000 colleagues world-wide we create bright science for brighter living.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' =>'DSM is a fast developing company and offers you all benefits of a global player. Working in international teams, managing diversity and an independent way of practice are just a few advantages. Start your career with different opportunities we offer: from Post-Doc, Internship to permanent positions.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'DSM is looking for potential talents with an open-minded thinking, high competences in problem solution and sustainable working methods. PhDs, University or apprentice graduates in Life Sciences or Chemistry will develop new processes, optimize chemical routes and ensure highest quality of DSM products.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 1;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;
$template['interview'][$i++] = array(
  'name' => 'Elias Timmerer',
  'img_url' => $awss3.'/companies/dsm/interviewee_2019_1',
  'position' => 'Process Control Engineer',

  'education' => array(
    0 => array(
      'date' => '2016-2018',
      'desc' => 'Master of Science - MS, Chemical and Bioengineering at ETH Zurich',
    ),
    1 => array(
      'date' => '2017-2017',
      'desc' => 'Master of Science - MS, Exchange in Chemical Engineering at TU Delft',
    ),
    2 => array(
      'date' => '2013-2017',
      'desc' => 'Bachelor of Science - BS, Chemical and Bioengineering at ETH Zurich',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2018',
      'desc' => 'Process Control Engineer at DSM',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What are your responsibilities as process control engineer at DSM?',
      'answer' => 'My primary responsibility is to provide process control competence for automation and migration projects for our sites globally, looking at functionality and process safety. This includes working out functional design documents together with suppliers, contributing to HAZOP (hazard and operability) studies but also having a look at different DSM sites and help them to learn from each other. Besides, I am busy driving digitalization projects in manufacturing, helping making everyday work processes more effective using modern technology.',
    ),
    1 => array(
      'question' => 'You started your work at DSM directly after graduating with a Master’s degree from ETH Zürich. How did the application process work for you? Did you have to compete with other candidates that did a PhD?',
      'answer' => 'I joined DSM via the MATCH! Program in 2018, a 5-day business course giving insights in different locations and businesses of DSM. The intention of this program was to fill up different kinds of vacancies with freshly graduated students (PhD and MSc). Some vacancies are a better fit for master students and some vacancies require the research experience acquired during a PhD. It is really depending on the career intended if a PhD is needed or not.',
    ),
    2 => array(
      'question' => 'You gained a lot of experience in academia during your studies and research. How did you perceive the recent transition into industry? Does the approach to chemical engineering differ from university?',
      'answer' => 'The big difference for me is that while in academia it is very much about studying theory and applying the theory to practical problems, working in the industry adds the human component. In industry, to even find out what the problem actually is and where things could be improved, you first need to build up a network to find the needed knowledge on the one hand and understanding the way of working of different people on the other. This involves a lot of communication and other soft skills, adds complexity but also makes it very much interesting.',
    ),
    3 => array(
      'question' => 'You graduated in chemical and bioengineering. Does DSM also employ graduates with a different background?',
      'answer' => 'Yes. DSM is a diverse science-based company active in health, nutrition and materials. Besides engineers, DSM therefore also employs a broad range of scientists with different backgrounds.',
    ),
    4 => array(
      'question' => 'How important is harmony between work and outside life for you? Does DSM offer a good work-life balance for its employees?',
      'answer' => 'For me personally, it is important that my employer respects my private time and life and with DSM this really is the case. Working from home or taking a day off when needed is usually not a problem and relies on my own judgement. DSM fully trusts its employees to manage their work time themselves.',
    ),
    5 => array(
      'question' => 'What are possible career paths and promotion prospects at DSM?',
      'answer' => 'There is no fixed career path at DSM. When starting, you steer your growth and development with the help of people and various tools. DSM has a mentoring program, for example, or X-time, which allows you to take part in projects outside your usual field. Using those things you find out where you want to develop and where you want to go in the future. It is on you to find your way and DSM is assisting you with that as much as possible.',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?',
      'answer' => 'When looking for a first job, try to find out what the values of the company are and if they match with your own ideas. Secondly, your first manager will be crucial for your growth and development, so try to get to know him and the team. Also, when finishing university it is difficult to fully understand job descriptions, don’t hesitate to ask questions to the contact person, they are usually happy to help. And finally, you will find the job and company that fits you best when you are yourself in the application process.',
    ),
  ),
);


include('../0_template/template.php');

?>