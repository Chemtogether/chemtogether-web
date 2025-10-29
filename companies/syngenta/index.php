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


$template['company_name'] = 'Syngenta';
$template['company_name_short'] = 'syngenta';
$template['logo_url'] = set_source($awss3.'/companies/syngenta/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
//$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Syngenta Crop Protection (CP) is one of
the four business units of Syngenta Group,
a global leader in agricultural technology
and innovation with 57000 employees in
more than 100 countries. Headquartered
in Basel, Switzerland, Syngenta CP has
an industry-leading R&D pipeline, strong
research capabilities and a broad
product portfolio of herbicides,
insecticides, fungicides, and seed
treatments.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'At our company both students and
graduates can apply their knowledge,
gain initial experience, learn and grow in a variety of areas and bene"t from the know-
how and experience of our employees. We offer internships at all levels during
your academic education (undergraduate, graduate, postgraduate and postdoctoral
level) lasting from 3 to 12 months.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for enthusiastic and
talented individuals who want to launch
their career in science, chemistry,
biology and engineering in order to meet the
present and future challenges of a dynamic
and demanding market environment.');

//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 1;
  //if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
  $template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
$template['interview'][$i++] = array(
  'name' => 'Nico Santschi',
  'img_url' => $awss3.'/companies/syngenta/logo',
  'position' => 'Global leader in agricultural science and innovation',

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
      'question' => 'What is your current task at your company?',
      'answer' => 'For the past seven years, I have worked at Syngenta Crop Protection AG, and since 2023, I have served as the Head of Pilot Plant Process Technology. This is a manufacturing facility operating on up to a 4000-liter scale. The purposes of the asset are twofold: (1) demonstrating scale-up and manufacturability of chemical processes and (2) provision of larger quantities of active ingredients for research. As such, I am responsible for the organization operating safely and for the timely delivery of the required material.'
    ),
    1 => array(
      'question' => 'Why did you decide to work at your company and what did the application process look like?',
      'answer' => 'After my decision to move from academia into industry, I was looking for a job profile that would cater to my varied interests, ranging from pure organic synthesis to method development to physical chemistry — a career in process chemistry fitted the bill perfectly. I was also fortunate to have had fellow students, colleagues, and advisors previously working for Syngenta Crop Protection AG, even in the process technology department, and sharing their insights. In the end, the combination of an intellectually stimulating and welcoming environment paired with the outlook of contributing to a tangible product made Syngenta Crop Protection AG the perfect choice. The application process consisted of three stages: (1) submission of the application, (2) a telephone interview focusing on my CV, cover letter, and motivation, and finally (3) a full-day interview. The latter comprised a presentation and technical as well as behavioral interviews. The day after the interview, I received a job offer and have been with the company since then.'
    ),
    2 => array(
      'question' => 'Which strengths did you develop during your studies that helped you in particular in your current job?',
      'answer' => 'Apart from the chemical education, most likely and more generally the "scientific method". That is the formulation of a hypothesis and conceiving, in the wider sense, experiments to falsify and/or corroborate certain aspects. In addition, the academic environment also very much invites "curiosity", enabling students to venture into different fields and think outside the box or perceived constraints. Last but certainly not least, success during one’s studies is also deeply rooted in successful "collaboration" — for example, either in joint preparation for finals or supporting each other on research projects. All these aspects have accompanied me through my journey so far.'
    ),
    3 => array(
      'question' => 'What fascinates you about your work in particular?',
      'answer' => 'With no day being like the previous one, every day presents an opportunity to learn something new and further my understanding of certain aspects of the wider industry. There is always agency, but sometimes effects may be seen immediately, and sometimes we are operating on time horizons of several years. Being part of the Production & Supply branch of Syngenta Crop Protection AG, I am constantly fascinated and intrigued by the multitude of functions collaborating across fields of expertise, research, development, and production sites, as well as borders, to realize new products addressing the immediate needs of farmers globally.'
    ),
    4 => array(
      'question' => 'How would you describe the corporate culture in your company, especially with regard to teamwork and collaboration?',
      'answer' => '"Collaboration" is one of the pillars of the Syngenta Group leadership framework and a key aspect of day-to-day operations. The introduction of a new product to the market requires hundreds of individual experts working towards the same goal. As such, I have always perceived the general atmosphere as very collaborative, as well as welcoming new ideas, inputs, and approaches. From the first day, the company took a genuine interest in assisting in my personal development to contribute to its success effectively.'
    ),
    5 => array(
      'question' => 'What would you recommend ETH students to do during their studies for future industry experience?',
      'answer' => 'Invest some time to get an understanding of the companies you are interested in and the general entry-level positions that are typically offered. When open days or lectures are hosted or industrial visits organized by student functions or societies, participate to get a first flair of the industrial setting, the specific ways-of-working and mingle with the employees. Also consider performing a research project or carrying out a postdoc in an industrial setting to get relevant hands-on experience and distinguish yourself from other applicants.'
    ),
  ),
);




include('../0_template/template.php');


?>