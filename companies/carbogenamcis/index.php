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

if(isset($_GET['fb']) && $_GET['fb'] == 'i-0') {
  $fb = array(
    "title"        => "Interview with Dr. Emad El Sayed from CARBOGEN AMCIS - Chemtogether",
    "desc"         => "Dr. Emad El Sayed works as Manager PR&D at CARBOGEN AMCIS. Learn more about his career and work in his interview, and meet CARBOGEN AMCIS at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/carbogenamcis_20181010.jpg",
    "image_width"  => "800",
    "image_height" => "420"
  );
} else {
  // $fb = array(
  //   "title"        => "",
  //   "desc"         => "",
  //   "url"          => $awss3."/opengraph/",
  //   "image_url"    => "",
  //   "image_width"  => "",
  //   "image_height" => ""
  // );
}


$template['company_name'] = 'CARBOGEN AMCIS';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','CARBOGEN AMCIS');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'CARBOGEN AMCIS is a leading service provider in the area of product and process development, including the commercial production of active ingredients for the pharmaceutical and biopharmaceutical industries. We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz), as well as locations in Riom (FR), Manchester (UK), Shanghai (CN) and Veenendaal (NL).');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We are committed to providing an inclusive and rewarding work environment that acknowledges the efforts of outstanding and long-term employees. We highly support continuing education and further training of our staff and encourage our staff’s professional career. Our organization also allows a
  cross-departmental development within the company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for highly motivated individuals prepared to expand their high-class education & knowledge in Pharma Industry. You should be willing to add upon what you have already learned helping us and our worldwide customers to bring their products to the market relating to all aspects of modern drug development in terms of all chemistry, analytics, production, quality and regulatory aspects.');
  
  $template['interview_print_until'] = 1;
  //if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Dr. Volker Wolfart',
    'img_url' => $awss3.'/companies/carbogenamcis/interviewee_2019_1',
    'position' => 'Business Development',
  
    'education' => array(
      0 => array(
        'date' => '1995-1997',
        'desc' => 'PhD in Chemistry with Prof. Dr. R. Gleiter at Universität Heidelberg',
      ),
      1 => array(
        'date' => '1989-1995',
        'desc' => 'Diploma in Chemistry at Universität Heidelberg',
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2014',
        'desc' => 'Business Development at CARBOGEN AMCIS AG',
      ),
      1 => array(
        'date' => '2011-2014',
        'desc' => 'Senior Scientific Advisor at CARBOGEN AMCIS AG',
      ),
      2 => array(
        'date' => '2008-2011',
        'desc' => 'Head of Process Research & Development at CAROGEN AMCIS AG',
      ),
      3 => array(
        'date' => '2000-2011',
        'desc' => 'Group Manager API Synthesis at CARBOGEN AMCIS AG',
      ),
      4 => array(
        'date' => '1998-2000',
        'desc' => 'Project team leader API Synthesis at CARBOGEN AMCIS AG',
      ),
      5 => array(
        'date' => '1980-1983',
        'desc' => 'Chemical laboratory assistant at BASF',
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => 'What are your current responsibilities in the area of business development at
        CARBOGEN AMCIS AG?',
        'answer' => 'My responsibility is to ensure the company grows to its full potential on the market where
        my focus is currently set on Switzerland.',
      ),
      1 => array(
        'question' => 'You started working at CARBOGEN AMCIS AG in 1998. Into which fields did you gain
        insight and were you able to follow your career aspirations throughout that time?',
        'answer' => 'Back then, my main field of action back was organic syntheses for clients around the globe. I
        became the team leader of a small team to serve pharma project tasks including doing
        chemistry in the lab, scaling it up to multi kilograms and evaluating and finding solutions for
        synthetic approaches to a new drug. This path more or less matched my aspirations.',
      ),
      2 => array(
        'question' => 'How did the company change over the range of time and what are your visions for
        the future?',
        'answer' => 'Starting with slightly more than 50 employees we grew into almost 600 employees today.
        We started with one site in Aarau and extended to four sites in Switzerland and five
        additional ones in Europe and Asia. The basic business model is still the same. What has
        changed are the responsibilities, the breadth of project types, the number of clients and the
        value of projects. The vision is to grow at a healthy pace and to attain new drugs for us to
        develop and manufacture which are also in the area of ADCs (Antibody Drug Conjugates).',
      ),
      3 => array(
        'question' => 'A lot of your past and present work at the company dealt with regulatory affairs,
        leading and managing teams and building new company sites. How much of “natural
        science” do you still encounter each day?',
        'answer' => 'I only have very little contact with practical science in daily life. However, you cannot grow a
        scientific company not knowing where it all comes from.',
      ),
      4 => array(
        'question' => 'After finishing your degree in Chemistry at the Ruprecht-Karls-Universität Heidelberg,
        you obtained a PhD and worked as postdoctoral researcher at BASF before joining
        CARBOGEN AMCIS AG. Is it still necessary nowadays to finish a PhD or Postdoc before
        joining the company?',
        'answer' => 'Not at all. What is important is your academic background, your personality and your
        willingness to add upon your current knowledge.',
      ),
      5 => array(
        'question' => 'You have been with CARBOGEN AMCIS AG for more than 20 years. In your opinion,
        what does the company offer employees so that you have remained loyal to the
        company for so long? Are you able to find a good balance between work and your
        outside life?',
        'answer' => 'The company offers an interesting field to establish new crafts and talents and offers a very
        good working environment. The team spirits are excellent, and I still feel like I am working
        with the best people there are out there!
        Yes, CARBOGEN AMCIS AG offers a good work-life balance to me. If I need some inspiration,
        I grab my fishing gear and sit at one of the beautiful lakes to receive new impressions.',
      ),
      6 => array(
        'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or
        internships?',
        'answer' => 'First: Know what you want for your career. Think of where to start but keep the long-term
        goal in mind. Where do you see yourself in 10 years, for example?
        Second: Be aware that YOU have something to offer too, e.g. your working power, your
        talents and your scientific education. These are things that your employer will benefit from
        Third: Be bold and humble at the same time. For instance, call the HR people of the
        companies you are interested in and talk to them about your plans and intentions. Maintain
        an attitude of willingness to learn.
        Fourth: Be yourself and present yourself to those interested in you.',
      ),
    ),
  );

include('../0_template/template.php');



?>
