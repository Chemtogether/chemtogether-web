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


$template['company_name'] = 'CARBOGEN AMCIS';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','CARBOGEN AMCIS');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'CARBOGEN AMCIS is a leading service provider in the area of product and process development, 
  including the commercial production of active ingredients for the pharmaceutical and biopharmaceutical industries.
  We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz), as well as locations in Riom (FR),
  Manchester (UK), Shanghai (CN) and Veenendaal (NL).');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We are committed to providing an inclusive and rewarding work environment that acknowledges the efforts of outstanding and long-term employees. We highly support continuing education and further training of our staff and encourage our staff’s professional career. Our organization also allows a
  cross-departmental development within the company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for highly motivated individuals prepared to expand their high-class education & knowledge in Pharma Industry. You should be willing to add upon what you have already learned helping us and our worldwide customers to bring their products to the market relating to all aspects of modern drug development in terms of all chemistry, analytics, production, quality and regulatory aspects.');
  
//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 1;
  //if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
  $template['button_print_until'] = 0; 

  $template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
/*
  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Luca Mannocci',
    'img_url' => $awss3.'/companies/carbogenamcis/interviewee_2022_1',
    'position' => 'Manager ADC',
  
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
        'question' => 'What does your current role as Manager ADC at CARBOGEN AMCIS entail?',
        'answer' => 'As Manager Antibody Drug Conjugates (ADC), I am primarily responsible for the planning
        and coor-dination of the required tech-transfer, development (process or analytical) and
        manufacture (non-GMP/GMP) activities within a matrix organization comprising our core
        bioconjugation team, other internal departments as well as external key suppliers or service
        providers.
        I am also responsible for the management of the bioconjugation (ADC) team and
        bioconjugation laboratories. I am Subject Matter Expert (SME) during authorities or client
        audit and inspections.
        Lastly, I provide support in proposal writing and project evaluation, as well as to Business
        Develop-ment/Marketing team initiatives.
        Previously, as ADC Senior Chemist I was leading the development and (non-GMP/GMP)
        manufacturing operations for the production of Pre-clinical and clinical bioconjugate drug
        substances like ADC, synthetic vaccines or anticoagulants.
        I was also responsible for the compliance of the cleanroom laboratories, equipment as well
        as personnel with the current GMP regulations and internal SOPs.',
      ),
      1 => array(
        'question' => 'How does a typical day at CARBOGEN AMCIS look like?',
        'answer' => 'A typical day starts with a quick check of the meeting agenda or the production schedule.
        Those are the two main constants of the day. Between the agenda appointments, I often
        have to deal with CMC activity planning/revision, resource coordination, process problem
        solving and other various administrative tasks, including SOPs writing, internal document
        revision or invoices to approve.',
      ),
      2 => array(
        'question' => 'What makes working at CARBOGEN AMCIS so unique?',
        'answer' => 'As member of the CARBOGEN AMCIS Bioconjugation department I have the opportunity of
        interacting closely with other various multidisciplinary team and the possibility of “hands-on
        working” on very different edge-of-technology biotechnological projects.',
      ),
      3 => array(
        'question' => 'What are the main challenges one encounters on a regular basis?',
        'answer' => 'Communication with the various project stakeholders or with the other responsible
        department is the main challenge of my role, as their background may be profoundly
        different although we sit in the same rooms and often collaborate on the very same tasks.',
      ),
      4 => array(
        'question' => 'In which manner does the work of your PhD differ from your current tasks? Which skills did
        you learn outside of academia?',
        'answer' => 'During the Academy and in particular the PhD you are, to certain extent, the main author of
        your own project. You are in charge for both the planning and (timely) execution of almost allactivities. In industry, you have to learn how to collaborate in a matrix environment with
        people with different background and culture. You have to understand the role of the
        collaborators (not only the names!), how they can efficiently contribute to the project and
        keep them constantly engaged with the final scope.
        Eventually, good planning as well as communication and coordination skills are far more
        critical in industry than in Academia. Nonetheless, the academic knowledge you acquired
        during the University years are in my view indispensable to sustain the project (and
        business) discussions, persuade the stakeholders, give confidence and trust to the client or
        to your own team and eventually successfully complete the assigned project with great
        satisfaction.'
      ),
      5 => array(
        'question' => 'Which advice would you give to ETH students who are in particular interested in the area of
        DNA-encoded chemical libraries?',
        'answer' => 'DECL technology is certainly a fascinating and fertile turf of the broader
        “Needle-in-the-Haystack” drug discovery field. Soon, DECL-innovators will have to compete
        (or make a better use) with AI and machine learning to beat the current fierce competition.
        Today, tools like oligo-compatible reactions, enzymatic encoding and next generation
        sequencing for building and decoding any DNA encoded chemical libraries are readily
        available in the public domains and are steadily increasing. Today, the main challenge
        seems to be the same as in the LEGO game: you can get all sophisticated bricks that you
        like but without a good idea and a good plan, you cannot build up anything. So be creative,
        think big - out of the box- do not be your own bottleneck. Then, build your library, and do not
        get out of the lab (or despair) until it has been properly tested against the protein target of
        your choice. Innovative ideas rarely comes while you are sitting alone in the office. Better to
        try going out, perhaps strolling in a park or to sit in a bar with friend in front of a good drink.',
      ),
    ),
  );
*/

include('../0_template/template.php');



?>
