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
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','CARBOGEN AMCIS');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'CARBOGEN AMCIS provides drug development and commercialisation services to the pharmaceutical and bio-
pharmaceutical industries, at all stages
of drug development. Our capabilities
span from contract chemical process
research and development to the supply of Active Pharmaceutical Ingredients (APIs) - as well as drug products
for preclinical studies, clinical trials and
commercial use. Besides being a leading service provider, we also offer high
quality Cholesterol and Vitamin D analog products.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We are looking for highly motivated
individuals prepared to expand their
high-class education & knowledge in
the Pharma Industry. You should be
willing to add upon what you have
already learned helping us and our
worldwide customers to bring their
products to the market relating to all
aspects of modern drug development
in terms of chemistry, analytics, production, quality and regulatory aspects.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are committed to provide an inclusive and rewarding work environment
that acknowledges the efforts of outstanding and long-term employees.
We highly support continuing education and further training of our employees and encourage our staff’s professional career. Our organization also
allows across-departmental development within the company.');
  
//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 1;
  //if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
  $template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Emad El Sayed',
    'img_url' => $awss3.'/companies/carbogenamcis/interviewee_2024_1',
    'position' => 'Senior Manager PR&D',
  
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
        'question' => 'What does your current role as Senior Manager PR&D at CARBOGEN AMCIS entail?',
        'answer' => 'As Senior Manager PR&D I am primarily responsible of my group. I support my group of Chemists
technically and organizationally. I am involved in the team formation around a project. I participate
intensively in the pipelining process and the management of resources.
In addition, I am involved in the path forward finding in case of trouble shooting with respect to
resources and coordination between departments. I am also involved in the detection of new
procedures for the evolution of processes within the enterprise.
Through my long experience with CARBOGEN AMCIS I am strongly involved in a number of
representations both at the level of academia as well as on an industry level.',
      ),
      1 => array(
        'question' => 'How does a typical day at CARBOGEN AMCIS look like?',
        'answer' => 'Trts with science (new ideas, challenges, expectations, conclusions and discoveries), goes
further to organizational work (co-ordination and communication within and between the different
departments), customer contact (reports, e-mails and teleconferences or even visits), financial
analysis (budgetary situation of projects, cost of materials, concordance of the services provided
relative to contracts and defending the customer’s as well as the enterprise’s interests). Finally, the
day will come to an end with planning for the coming days or weeks.',
      ),
      2 => array(
        'question' => 'What makes working at CARBOGEN AMCIS so unique?',
        'answer' => 'Diversity is what I mostly love in my job. The magic impact of this word penetrating in all aspects of
faced types of chemistry, personal interactions, faced challenges, performed roles and applications.',
      ),
      3 => array(
        'question' => 'What are the main challenges one encounters on a regular basis?',
        'answer' => 'Communication internally and externally remains a common challenge not only at CARBOGEN AMCIS
but at different institutions and communities. Language, culture and scientific background can
profoundly influence the quality of communication. For this reason, it is very important to relay on
active listening coupled with back questions to make sure that the statements are well understood.',
      ),
      4 => array(
        'question' => 'In which manner does the work of your PhD differ from your current tasks? Which skills did you
learn outside of academia?',
        'answer' => 'The technical know-how acquired during the PhD is fundamental to the scientific existence in the
industrial field. This aspect regarded as the most important in academia is only one detail among
other facets of what is needed in industry. I will go through a list of points that seem to be important
in industry as follows:<br>
<b>1. Budget and Time: </b>
These two words are the two sides of the same and single coin. The resulting scrambling of
both would result to a new word, called “efficiency”. This is a term that you never learn in
academia. Usually, you have, relatively speaking to industry, more time and more budget in
academia. In industry things are done in the shortest time and with as less but also as much
as enough budget needed. <br>
<b>2. Teamwork: </b>
To be more efficient (to fulfil point 1 above) you need to work as a team of specialists. Each
member of the team is somehow specialized in a certain topic around the mutual goal of the
project. By doing so, (i) errors are reduced, since everybody is a specialist in one domain and
(ii) time will be reduced, since if correctly planed certain activities can be run parallel to
others with a different set of operators. <br>
<b>3. Communication: </b>
Having a team with different goals and different backgrounds requires a very good
communication. It starts with the writing of experiments that need to be accessible and
understood by another person. It requires communication platforms, where the team
members can exchange. Documentation of the discussions (problems, solutions, conclusions
and decisions) are primordia to a good communication. Added to this are also other aspects
of active listening, transparent planning and tracking (with respect to budget and time) of the
common project.
Customer interaction is a very important part of the communication. <br>
<b>4. Regulation Requirements: </b>
In the pharma industry (GMP guidelines) and in the Chemistry industry (ISO classifications)
are very important for the use and cleaning of equipment, manufacturing of materials /
compounds as well as their release and shipment. This point is more of a technical part that
is not really taught in academia. <br>'
      ),
      5 => array(
        'question' => 'Which advice would you give to ETH students?',
        'answer' => 'Be open for new horizons and be conscious that there is no absolute truth. There is only a relative
view. Try to place yourself in the other’s position to see more facets. Consequently, the view will be
wider. Be aware that those who criticize you are bringing you out of your comfort zone and thus
stimulating your personal and professional evolution. Keep in mind that life itself is a huge University.
The more we learn, the more we realize that we still didn’t perceive the whole picture. Failure is the
first step to success. Never regret, rather learn.
Good luck!',
      ),
    ),
  );

include('../0_template/template.php');



?>
