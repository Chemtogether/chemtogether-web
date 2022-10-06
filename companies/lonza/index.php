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


$template['company_name'] = 'Lonza';
$template['company_name_short'] = 'lonza';
$template['logo_url'] = set_source($awss3.'/companies/lonza/logo','png', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Lonza is a preferred global partner to the pharmaceutical, biotech and nutrition markets. We work to enable a
  healthier world by supporting our customers to deliver new and innovative medicines that help treat a wide range of 
  diseases. We achieve this by combining technological insight with world-class manufacturing, scientific expertise and 
  process excellence.
  ');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'At Lonza, we invest in great people. We encourage our employees to challenge themselves, 
   and we offer an environment that fosters creativity and success, where you can develop your skills and knowledge 
   by working in teams of highly collaborative experts in a rewarding and dynamic atmosphere. 
   With headquarters in Basel, Switzerland, we operate production, R&D and business sites around the world.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'For our sites in Visp, Basel, Stein & Monteggio we are looking for 
  skilled  and ambitious workers from all areas of Life Science. You can expect the best of both worlds: 
  A high-tech workplace with inspiring colleagues and an incomparable lifestyle in the middle of the Alps.
  ');
$template['button_print_until'] = 0; 
$template['interview_print_until'] = 2;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

$template['interview'][$i++] = array(
    'name' => 'Ala\'a ',
    'img_url' => $awss3.'/companies/lonza/interviewee_2022_1',
    'position' => 'QA Ops Team Leader, QA mRNA',
  
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
        'question' => 'Can you share your career story at Lonza with us?',
        'answer' => 'My first contact with Lonza was reading about it in the news, and I was impressed
        with its growth and how it covers a diverse range of therapies - from smallmolecules, to cell and gene and biologics. I joined Lonza in July 2019 as a Quality
        Assurance Manager, and in 2022 I was promoted to be a member of the QA mRNA
        leadership team.
        My team and I play a crucial role in supporting the safe and consistent production of
        mRNA, adhering to specific standards and striving to continuously improve results
        and eliminate errors - which ensures the safety of the patient. My work involves
        finding innovative solutions to challenges and making sure my team is engaged,
        curious and takes the initiative to find the best possible solutions. I feel like I am in
        the right organization to learn, grow and make an impact.
        I love working with such a dedicated and reliable team, and seeing my team
        members prosper and grow is the biggest motivation for me, and keeps me moving
        forward. Working with employees from over 58 countries is something pretty special
        about working at Lonza Visp, and something that one does not encounter that often.
        I am also an ambassador for Valais4You, where I support my colleagues in
        integrating not only at Lonza, but the Valais region as well. It is exciting to see the
        site growing and more customers choosing to partner with us.',
      ),
    ),
);


$template['interview'][$i++] = array(
  'name' => 'Edwin',
  'img_url' => $awss3.'/companies/lonza/interviewee_2022_2',
  'position' => 'Lead Scientist in Phys-Chem Analytics & Quality Control Group',

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
      'question' => 'I chose Lonza because…',
      'answer' => 'Lonza is incredibly agile, always evolving to serve the needs of the industry by
      developing new technologies and solutions. With Lonza growing so quickly, I felt
      there were lots of opportunities and potential to grow with the company.',
    ),
    1 => array(
      'question' => 'Since I started at Lonza, my career has progressed…',
      'answer' => 'Beyond my expectations since 2011, when I started as a trainee with Lonza\'s
      Analytical Services Department in Slough (UK) under the Singapore Economic
      Development Board\'s STRAT program. It was a rigorous 1-year training program
      across various analytical groups like process analytics, characterization and method
      development & validation. By month ten, I was trained to perform around 15 Lonza
      platform bioanalytical assays and was offered a role as Analytical Technologist by
      Lonza, Singapore Development Services. In 2014, I was promoted to the Scientistposition. In 2017, I joined the recently established drug product services business
      unit as Senior Scientist in Phys-Chem Analytics & Quality Control Group. It\'s been
      an amazing few years.',
    ),
    2 => array(
      'question' => 'It\'s special to work at Lonza because…',
      'answer' => 'It offers the whole spectrum of services from drug substance development all the
      way to drug product manufacturing. We\'re unlike any other contract development
      and manufacturing organization (CDMO) - we don\'t just act like a service provider
      but we actively solve our customer\'s challenges.',
    ),
    3 => array(
      'question' => 'My work is meaningful because…',
      'answer' => 'We have lots of experience and expertise, allowing to act as consultants and help
      customers get their drugs to market faster. I learn something new every day and
      being in a multinational company enables me to work closely with colleagues from
      various sites.',
    ),
    4 => array(
      'question' => 'What makes me feel good at the end of the working day is…',
      'answer' => 'Knowing that what we do in the lab helps to ensure the quality, identity, strength, and
      purity of drug products that impact the lives of patients. Being able to deliver
      analytical data to customers on time also makes a big difference. And I enjoy helping
      to onboard new colleagues so they can hit the ground running and get their first jobs
      right, first time.',
    ),
    5 => array(
      'question' => 'The most exciting thing about working at Lonza is…',
      'answer' => 'The dynamic, fast-paced and challenging nature of the company and the work we
      do.',
    ),
    6 => array(
      'question' => 'What I most appreciate about my team is…',
      'answer' => 'Their wonderful personalities. I also get incredibly strong support and recognition
      from my managers. The teamwork is second to none, everyone collaborates and
      helps one another towards a common goal.',
    ),

  ),
);
include('../0_template/template.php');

?>
