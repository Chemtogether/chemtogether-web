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

$template['company_name'] = 'Ivoclar Vivadent';
$template['company_name_short'] = 'ivoclarvivadent';
$template['logo_url'] = set_source($awss3.'/companies/ivoclarvivadent/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://www.ivoclarvivadent.ch','ivoclarvivadent.ch');
$template['facebook'] = array('https://www.facebook.com/ivoclarvivadent/', 'Ivoclar Vivadent');
$template['linkedin'] = array('https://www.linkedin.com/company/ivoclar-vivadent-ag/','Ivoclar Vivadent AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/ivoclarvivadent';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Today’s vision. Tomorrow’s reality. We have a passion for developing innovative products that open up new opportunities for our customers in the dental industry.<br>Ivoclar Vivadent, headquartered in Schaan, Liechtenstein, is one of the world’s leading manufacturers of innovative material systems for high-quality dental applications. The company’s success is based on a comprehensive portfolio of products and systems, strong research and development capabilities and a clear commitment to training and further education. The company employs about 3,600 people at 29 locations worldwide.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Making people smile is what we aspire to at Ivoclar Vivadent each day, with our innovative products and our employee-oriented culture. Working at Ivoclar Vivadent, we share our strong values that promote a culture of mutual respect that you will discover at all our locations around the world. Our ongoing employee development, education and training is one of the cornerstones that underlines the long-term and people-focused orientation as a family owned company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Ivoclar Vivadent is an exciting, vibrant workplace where new ideas are encouraged and commitment is rewarded. We are looking for young, committed graduates who are passionate about innovation and share our vision to develop solutions for tomorrow’s dentistry.');

$template['interview_print_until'] = 1;

$i=0;
/*
$template['interview'][$i++] = array(
  'name' => 'Dr. Michael Westphal',
  'img_url' => $awss3.'/companies/ivoclarvivadent/interviewee_2019_1',
  'position' => 'Team Leader F&E',

  'education' => array(
    0 => array(
      'date' => '2009-2013',
      'desc' => 'Dual-PhD, University of Queensland and Ruprecht-Karls University in Heidelberg',
    ),
    1 => array(
      'date' => '2011-2012',
      'desc' => 'Research stay, University of Queensland and University of Newcastle',
    ),
    2 => array(
      'date' => '2003-2009',
      'desc' => 'Diploma in Chemistry at the Ruprecht-Karls University in Heidelberg',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2019',
      'desc' => 'Team Leader F&E, Ivoclar Vivadent',
    ),
    1 => array(
      'date' => '2014-2019',
      'desc' => 'Research Associate, Ivoclar Vivadent',
    ),
    2 => array(
      'date' => '2009-2014',
      'desc' => 'Research Assistant, Ruprecht-Karls University in Heidelberg',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What are your responsibilities as team leader of R&D at Ivoclar Vivadent?',
      'answer' => 'Recently, we have established a completely new team that is responsible for the lifecycle management of all clinical and technical products of the Organic R&D department. This means that my responsibility, especially at the very beginning, is to give my team the framework that provides it with the necessary scope for action. In addition, my team has an important interface function between all departments. As a team leader, I provide ongoing support to all the team members. Moreover, I also act as a materials expert for special dental product classes because I worked as a developer during the past 5 years. In other words, my experience and expertise with regard to dental products as well as organisational procedures allows me to back up the whole team.',
    ),
    1 => array(
      'question' => 'What made you choose Ivoclar Vivadent as an employer? Can you describe how the application process worked for you?',
      'answer' => 'After my PhD, I applied for lots of jobs, as it was customary at that time. Therefore, I luckily had the chance to get to know different companies during the application process. At first for me as a chemist, a dental company was not in my focus, but I gave it a try. And I have to confess, it was a very pleasant experience.  The application process was fast and friendly and included a phone call, a skype interview and a one-day work trial with final interviews with my future supervisor and the HR business partner. During the application process, I realised relatively quickly that a friendly working environment combined with so much nature surrounding me was exactly what I was looking for. Even today, I would make the same decision as 5 years ago.',
    ),
    2 => array(
      'question' => 'During your PhD you focused on bioinorganic chemistry. How can you apply your expertise in biochemistry and organometallic chemistry in your daily work at Ivoclar Vivadent?',
      'answer' => 'I think it is not my expertise in bioinorganic chemistry in particular that I apply in my daily work. It is more the experience I have been able to gather in chemistry which I can apply in connection with and put into context with all the functionalities of the dental products. This has made it much easier for me to understand the different outcomes during the development stage of a product and to react accordingly.',
    ),
    3 => array(
      'question' => 'You graduated in chemistry. Does Ivoclar Vivadent also employ graduates with a different field of study?',
      'answer' => 'Of course, Ivoclar Vivadent employs graduates with many different backgrounds. In the different departments, various kinds of expertise are needed. Most of the developers in the R&D department, for example, have a chemistry or materials science background. In the Scientific Services department, our employees are mainly biologists who are responsible for creating very important documentation.',
    ),
    4 => array(
      'question' => 'How important is harmony between work and outside life for you? Does Ivoclar Vivadent offer a good work-life balance for its employees?',
      'answer' => 'Harmony is always needed! Since we are in the Alps here and have a lot of opportunities, it is easy to find an activity that helps ensure a good work-life balance. Nevertheless, Ivoclar Vivadent conducts regular workshops  to support employees in achieving and maintaining a healthy work-life balance. In addition, we have free yoga classes, for example.',
    ),
    5 => array(
      'question' => 'You were already promoted once during your employment at Ivoclar Vivadent. How do you imagine your future career opportunities to look like?',
      'answer' => 'In a company that is much smaller than the famous tech giants or big chemical companies, it is generally not possible to get promoted every few years. But I think that by continuously doing good work, I will be able to assume a position with an even wider area of responsibility. This also happened when I was promoted last time.',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?',
      'answer' => 'Always have a look at our website; there you can find a continually updated list of the job offers or available internships at our headquarters in Schaan and at our subsidiaries. If there is no suitable job offer or internship, do not hesitate to contact us proactively and send us your application documents.',
    ),
  ),
);
*/
include('../0_template/template.php');

?>