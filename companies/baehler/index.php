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


$template['company_name'] = 'DR. BÄHLER DROPA AG';
$template['company_name_short'] = 'baehler';
$template['logo_url'] = set_source($awss3.'/companies/baehler/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://baehlerdropa.ch/','baehlerdropa.ch');
$template['linkedin'] = array('https://www.linkedin.com/company/baehlerdropa/','Baehlerdropa');
$template['archive'] = '/archive/baehler';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The family company DR. BÄHLER DROPA
AG is one of the leading service providers
in the Swiss healthcare system and has
a long tradition of pharmaceutical and
entrepreneurial excellence. Our
nearly 2000 employees at over 120 locations
throughout German-speaking Switzerland
are committed to improve public health
every day of the year. We follow trends
closely, and our employees keep up with
the latest developments through regular
specialist training.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We combine the best of two worlds: as a family business, we attach great importance to a personable corporate culture and to appreciative collaboration. We are lean, flexible, and have short decision-making paths. At the same time, we offer the advantages of a large company with our central services, modern working conditions, and career opportunities. We o!er Famulaturen, Assistenzstellen,
and student jobs to pharmacy students
along with "exible working hours that fit
their studies. We support graduates with
our 2-year Trainee@DBD training program
until they acquire the federal specialist title
“Fachapotheker*in in O$zinpharmazie”.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for inquisitive pharmacy students and graduates.');
$template['extra'] = array(
  'title' => 'Get in touch',
  'text' => 'Do you have any questions, or are you interested in a flexible student job? Please do not hesitate to get in touch with us: Simone Patrick Carmone, Eidg. Dipl. Apotheker ETH, Standortleiter looks forward to hearing from you at <a href="tel:+41793280396">+41 79 328 03 96 </a>.');
//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 2;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
$template['button_print_until'] = 0; 

$template['interview_print_until'] = 1;
if(isset($_GET['preview'])) $template['interview_print_until'] = 1;
$i=0;



$template['interview'][$i++] = array(
  'name' => 'Simone Carmone',
  'img_url' => $awss3.'/companies/baehler/logo',
  'position' => 'Site Manager & Site Supervisor',

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
      'answer' => 'I am a Site Manager and Site Supervisor at DR. BÄHLER DROPA AG, responsible together with my team for supporting our pharmacies and drugstores in the Aargau region as well as in the neighbouring cantons of Zurich, Zug, and Lucerne.<br><br>
In my role, I serve as the link between our service centre and the management teams of the individual locations. I coach and support the local managers in their daily operations, help them achieve their business goals, and ensure that the company’s philosophy and guidelines are put into practice on site.<br><br>
In addition, I take on an important mediator role – promoting communication, assisting with operational matters, and stepping in personally when staffing shortages occur to provide relief and maintain smooth operations.<br><br>
It is particularly important to me to actively embody the \"We are family\" spirit of our family-owned company and to contribute to ensuring that we remain one of the most attractive employers in the industry.'
    ),

    1 => array(
      'question' => 'Why did you decide to work at your company and what did the application process look like?',
      'answer' => 'I have been part of DR. BÄHLER DROPA AG for more than 18 years – I started directly after completing my training as a pharmacy assistant. Even back then, I was impressed by the company’s open, family-oriented culture and strong team spirit.<br><br>
What motivated me most was the opportunity to develop both personally and professionally from the very beginning. I completed my Matura and later my pharmacy studies at ETH while working – always with the full support of my employer. This trust and encouragement were decisive for me and further strengthened my connection to the company.<br><br>
The application process at that time was very warm and straightforward – it already reflected the \"We are family\" spirit that I still experience in my daily work today. For me, DR. BÄHLER DROPA AG has never been just an employer, but an environment where you can grow, take on responsibility, and achieve meaningful things together.'
    ),

    2 => array(
      'question' => 'Which strengths did you develop during your studies that helped you in particular in your current job?',
      'answer' => 'During my pharmacy studies at ETH, I primarily learned to think analytically, understand complex interrelationships, and work with precision. These skills are extremely valuable to me today, especially when it comes to approaching operational challenges in a structured way and making well-founded decisions.<br><br>
At the same time, my studies taught me to take responsibility, think critically, and act in a solution-oriented manner – qualities that are essential in my role as a site manager and coach.<br><br>
Finally, I also learned the importance of perseverance, setting priorities, and pursuing long-term goals – abilities that help me motivate my team and achieve success together.'
    ),

    3 => array(
      'question' => 'What fascinates you about your work in particular?',
      'answer' => 'What fascinates me most about my work is its diversity and dynamism. No day is the same – every pharmacy, every team, and every situation brings new challenges and opportunities.<br><br>
I am truly passionate about supporting and developing people – whether it’s helping branch managers achieve their goals or seeing employees grow in their personal development. This direct impact and shared sense of achievement motivate me every single day.<br><br>
I also appreciate the entrepreneurial freedom my role offers. It allows me to actively contribute to embedding our values and philosophy at the various locations and to make a lasting difference.<br><br>
What I find particularly fulfilling is that at DR. BÄHLER DROPA AG we don’t just think in business terms – we act with humanity. This family spirit is something I wholeheartedly live and strive to pass on.'
    ),

    4 => array(
      'question' => 'How would you describe the corporate culture in your company, especially with regard to teamwork and collaboration?',
      'answer' => 'The corporate culture at DR. BÄHLER DROPA AG is strongly shaped by trust, openness, and mutual support.<br><br>
Teamwork for us is not just a slogan – it’s something we live every day. Regular exchange between the locations, the service centre, and the various specialist departments creates a strong sense of togetherness. Every opinion is valued, and everyone has the opportunity to contribute.<br><br>
What I particularly appreciate is the culture of constructive feedback and the trust placed in us. This open collaboration allows us to overcome challenges quickly, learn from one another, and achieve success together.<br><br>
Long story short: we work professionally – and always with heart – and that’s exactly what makes our company so special.'
    ),

    5 => array(
      'question' => 'What would you recommend ETH students to do during their studies for future industry experience?',
      'answer' => 'I would encourage ETH students to gain practical experience early on and to actively connect with the professional world – whether through internships, summer jobs, or small projects in pharmacies or industry. Theory is important, but understanding how processes actually work in everyday practice is invaluable.<br><br>
It’s equally important to stay curious and open-minded – to explore different fields, look beyond one’s own area, and be willing to try new things. Communication, teamwork, and empathy are just as crucial in professional life as technical knowledge. Those who start developing these skills during their studies will be much better prepared for their future careers.<br><br>
And finally: pursue your own path with passion and perseverance. My own journey has shown that with dedication and joy in what you do, you can achieve a great deal – especially in an environment that supports and values personal growth.'
    ),

  ),
);


include('../0_template/template.php');

?>
