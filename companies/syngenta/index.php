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
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
//$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Syngenta Crop Protection (CP) is one of the four business units of Syngenta Group, 
  a global leader in agricultural technology and innovation with 49000 employees in more than 100 countries. 
  Headquartered in Basel, Switzerland, Syngenta CP has an industry-leading R&D pipeline, strong research capabilities 
  and a broad product portfolio of herbicides, insecticides, fungicides, and seed treatments.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'At our company both students and graduates can apply their knowledge, gain initial experience, learn and grow
  in a variety of areas and benefit from the know-how and experience of our employees. We offer internships at all levels
  during your academic education (undergraduate, graduate, postgraduate and postdoctoral level) lastring from 3 to 12 months.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for enthusiastic and talented individual who want to launch their career in science,
  chemistry, biology and engineering in order to meet the present and future challenges of a dynamic
  and demanding market environment.');

$template['button_print_until'] = 0; 
 //$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-syngenta">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-syngenta">Watch our Flash presentation');


$template['interview_print_until'] = 1;
 // if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $template['interview'][$i++] = array(
    'name' => 'Amandine Kolleth',
    'img_url' => $awss3.'/companies/syngenta/interviewee_2022_1',
    'position' => 'Crop Protect
    Research Chemist (Principal Scientist)',
  
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
        'question' => 'What does your current role as a Crop Protect
        Research Chemist (Principal Scientist) at Syngenta entail?',
        'answer' => 'In Stein we cover 3 indications for crop protect research: Disease control, Insect control and
        Plant health-Soil health (Weed control is based at Jealott\'s-Hill, our site in UK). I am currently
        working in Insect control in lead exploration projects, these are early stage projects that have
        just left the discovery phase. In this role, I am responsible of the chemistry of one project,
        which starts with the design of the molecules we want to make, then elaboration of the
        synthetic routes, bring support to the synthesis chemists in their daily work by
        troubleshooting, advices etc, and finally, analyse the data once the molecule are tested to
        restart a new wave of design and synthesis. In addition to this role, I am also project leader
        which consists in having a cross functional understanding of the priorities of the project
        (Biology, Toxicology, Bioscience etc…) to build a science plan and coordinate the activities to
        ensure a good delivery of the project.',
      ),
      1 => array(
        'question' => 'What made you want to do your postdoc at Syngenta? Was is related to your PhD
        topic?',
        'answer' => 'Since the beginning of my PhD I always knew I wanted to work in industry. I wanted to see
        the direct applicability of my work and be part of a team where everybody contributes to the
        same goal. To be completely honest I didn\'t know if I wanted to make my postdoc inacademia or in industry, the most important thing for me at that time was to keep growing my
        knowledge in chemistry, learn new things and enrich my CV with publications as we know
        that Organic chemistry in a highly competitive field. During the last year of my PhD, I have
        been selected to join the Syngenta PhD workshop in Stein (organized every second year)
        and I really enjoyed working on real case exercises and seeing the challenges that Syngenta
        tackles. I have been lucky that, in the end of these 2 days, my future boss Dr Alain De
        Mesmaeker proposed me a postdoc fellowship, of course I accepted and never left the
        company since then. Obviously my role evolved a lot but this is also what I like at Syngenta,
        the perspective of evolution are infinite. My postdoc was not related to my PhD topic, I
        worked (2.5 years) on the synthesis of 4 membered rings in using keteniminium
        intermediates while a spent most of my PhD on the total synthesis of a natural product.',
      ),
      2 => array(
        'question' => 'How does a typical day at the company look like? What excites you the most in your
        job?',
        'answer' => 'This is what I like in my job, there is not a typical day, it’s always different. Of course the
        design of new molecules is a big part of my time, it is not only about finding the most
        biologically active molecule but really optimize on the full spectrum even for an early phase
        project (physchem, biology, species selectivity, toxicology, soil endpoints, …). Data analysis
        becomes also more and more important as we generate more data than in the past since
        biological activity was almost the only driver in the beginning of a project. I like being part of
        a team and see everybody dedicated to the same goal.',
      ),
      3 => array(
        'question' => 'How would you describe the working atmosphere at Syngenta?',
        'answer' => 'It is highly collaborative. We are always part of a team, we can challenge our ideas,
        reformulate our hypotheses and mix our creativity for the best of the project. We have all
        different background, experience, expertise and this is what makes our strength.',
      ),
      4 => array(
        'question' => 'Which advice would you give to ETH graduates who are looking for a job outside
        academia?',
        'answer' => 'I would of course advice to have a strong scientific background but beside that develop as
        early as possible additional skills. Soft skill for instance (leadership skills, argumentation
        skills, good oral communication) are extremely important as I said before, we never work
        alone, and build and favor a team cohesion is essential. On top of everything, be curious:
        research in general can only progress if we ask questions and be open to not find an
        obvious and quick answer.',
      ),
    ),
  );





include('../0_template/template.php');


?>