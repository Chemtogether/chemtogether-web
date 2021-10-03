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
  
$template['company_name'] = 'Dow';
$template['company_name_short'] = 'dow';
$template['logo_url'] = set_source($awss3.'/companies/dow/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.careers.dow.com','careers.dow.com');
$template['facebook'] = array('https://www.facebook.com/TheDowChemicalCompany/', 'The Dow Chemical Company');
$template['linkedin'] = array('https://www.linkedin.com/company/dow-chemical/','The Dow Chemical Company');
// $template['mail'] = array('info','chemtogether.ethz.ch');
$template['archive'] = '/archive/dow';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'Dow combines one of the broadest technology sets in the industry with asset integration, focused innovation and global scale to achieve profitable growth and become the most innovative, customer centric, inclusive and sustainable materials science company.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'Imagine being part of an inclusive workplace where your diverse ideas are combined with your colleagues’ to deliver innovations directly to customers. Our people are driven by curiosity and continuously interested in how science can enhance people’s lives. You can expect us to create multiple career paths in R&D, Technical Service & Development, Manufacturing & Engineering and Supply Chain.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Are you a talented student/fresh graduate with a background in chemistry or chemical/material/polymer engineering? Can you bring your passion, expertise and experience to help us shape the future? We are seeking collaborative talents who can work in teams, listen to diverse perspectives and embrace innovation to turn challenges into opportunities. Visit careers.dow.com and join the conversation!');

  
$template['interview_print_until'] = 0;
// if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

$template['interview'][$i++] = array(
  'name' => 'Dr. Barbara Bonavoglia',
  'img_url' => $awss3.'/companies/dow/interviewee_2019_1',
  'position' => 'Scientist within Packaging & Specialty Plastics business',

  'education' => array(
    0 => array(
      'date' => '2001-2005',
      'desc' => 'Doctor of Sciences at ETH Zurich',
    ),
    1 => array(
      'date' => '1995-2001',
      'desc' => 'Master in Chemical Engineering, Politecnico di Milano',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2016',
      'desc' => 'Scientist within Packaging & Specialty Plastics business, DOW',
    ),
    1 => array(
      'date' => '2008',
      'desc' => 'Application Technology Leader Hygiene and Medical, DOW',
    ),
    2 => array(
      'date' => '2005-2008',
      'desc' => 'Development Engineer in the Customer Technical Support Center, DOW',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What are your responsibilities as a scientist within the packaging & specialty plastics business and as application technology leader for hygiene and medical at DOW?',
      'answer' => 'In my role as a Scientist within the Packaging & Specialty Plastics business I have the opportunity to lead our student programm called the Industrial Innovation Campus. 
      Within this responsibility:
          (1) I work together with my colleagues to define ideas of projects that are suitable for master students coming to DOW in Horgen for a 9 month internship,
          (2) I prioritize the projects according to our strategy and business needs, 
          (3) I visit universities to present the program and interview candidates 
          (4) and finally, I welcome those who participate in the program at our site in Horgen and supervise that the projects run smoothly while the students are here.  
          As the application technology leader for one of our business segments, my main responsibility is to define the multigenerational plan of research projects that DOW needs in order to fulfil the immediate business needs as well as deliver innovation in the long term. To perform this task successfully, I work closely with customers and brand owners to understand the needs and trends, with DOW marketing to set the long-term strategy and with our people managers to properly resources the projects.',
    ),
    1 => array(
      'question' => 'You graduated in chemistry. Does DOW also employ graduates with a different field of study?',
      'answer' => 'I did my master in chemical engineering in Milan at the Politecnico and then did my PhD at ETH in the department once called Chemistry and Bio-engineering. 
      Within the R&D department, DOW employs people from various backgrounds. I would say that we hire people from all the STEM fields.',
    ),
    2 => array(
      'question' => 'During your PhD you focused on phase behaviour of polymer-supercritical CO2 -systems. How can you apply your expertise from academia in your daily work at DOW?',
      'answer' => 'What the PhD taught me is the ability to run complex projects within a specific timeframe and connect with people outside of my immediate work environment to make sure to successfully reach the desired milestones. This experience was extremely useful throughout my career at DOW.',
    ),
    3 => array(
      'question' => 'You were already promoted multiple times at DOW. How do you imagine your future career opportunities to look like?',
      'answer' => 'DOW gives great opportunities to people who are eager to learn and develop throughout the years. I love the technical career path and would like to grow further by having the opportunity to lead larger technical projects.',
    ),
    4 => array(
      'question' => 'How does your daily work life look like at DOW? Do you normally work at the same location or do you get to travel for work?',
      'answer' => 'My work foresees a certain amount of travelling to visit customers and value chain members as well as universities and institutes. Only by keeping the right contacts with the outside world, I’m able to define the next generation projects and activities that will deliver value to the company in the medium to long term. 
      When I’m in the office, I’m very often in contact with our IP department and R&D department to protect the developed innovation and define next steps in projects.
      There is therefore no “standard” day of work. Every day is different, which makes my job very interesting.',
    ),
    5 => array(
      'question' => 'You have been with DOW for almost 14 years. In your opinion, what does DOW offer employees so that you have remained loyal to the company for so long?',
      'answer' => 'DOW gives great opportunities to develop according to the skillset that each one brings. One can start in one role or one business and be given opportunity to move into completely different roles or businesses if the right skillset and interest is there. I have several colleagues who moved from technical into commercial roles and then back into managerial roles or stayed in the commercial function. 
      If instead people show the skill set and interest to grow into a deeper technical career, DOW offers the possibility to grow within the R&D function to become fellow and experts in certain areas. 
      The company also has a great diversity and inclusion culture. You feel respected in the company irrespective of background and ideas!',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?',
      'answer' => 'Be yourself, be open, ask challenging questions, show why you are different from the others through your special work and study experiences or because of special interests and hobbies. Send a picture of yourself with the CV. I like to see the face of who is applying, and a picture sometimes says more than 1000 words. Send a motivation letter with the informations why have you chosen that position and why are you a perfect match of the position you applied to. Prepare yourself for the interview for example look at the company’s website, inform you about what they do and where they set the emphasis.',
    ),
  ),
);

include('../0_template/template.php');



?>