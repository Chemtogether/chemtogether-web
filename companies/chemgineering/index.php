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


$template['company_name'] = 'Chemgineering';
$template['company_name_short'] = 'chemgineering';
$template['logo_url'] = set_source($awss3.'/companies/chemgineering/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

//$template['homepage'] = array('http://www.lonza.com/','lonza.com');
//$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
//$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
// $template['mail'] = array('','');
//$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
  'title' => '',
  'text' => '  ');

$template['we_offer'] = array(
   'title' => '',
   'text' => '  ');
$template['we_look'] = array(
  'title' => '',
  'text' => '');

$template['interview_print_until'] = 1;
//if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

$template['interview'][$i++] = array(
    'name' => 'Dr. Gunnar Zoch',
    'img_url' => $awss3.'/companies/lonza/interviewee_2019_1',
    'position' => 'Senior Project Leader QC',
  
    'education' => array(
      0 => array(
        'date' => '2014-2017',
        'desc' => 'Doctor of Sciences in Immunology, Department of Clinical Research at the Inselspital Bern',
      ),
      1 => array(
        'date' => '2015-2016',
        'desc' => 'Bachelor Minor in Business Administration, University Bern',
      ),
      2 => array(
        'date' => '2008-2014',
        'desc' => 'BSc and MSc in Biochemistry and Molecular Biology, Christian-Albrechts University in Kiel',
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018',
        'desc' => 'Senior Project Leader QC, Lonza AG',
      ),
      1 => array(
        'date' => '2017-2018',
        'desc' => 'Scientist QA, CSL Behring',
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => 'What are your responsibilities as senior project leader in the quality control at Lonza?',
        'answer' => 'I am the representative of the QC to customers, internal and external, and the project representative to the QC. This involves all aspects of the quality control from raw materials, production support, batch release to validations. I act as an organizer and planner, a mediator or a subject matter expert.',
      ),
      1 => array(
        'question' => 'You worked in the academia and in an hospital during your studies and now in the industry. Can you describe how the work differs between academia, hospitals and the industry?',
        'answer' => 'In the academic environment, I found that one could plan further ahead with greater precision. It depended more on one’s own scheduling and organizing. The clinic brought in more dependencies on other people and their ability to keep to schedules/deadlines. This is further increased in the industry. The same goes for the level of detail in your documentation.',
      ),
      2 => array(
        'question' => 'How have your studies prepared you for the role as senior project leader?',
        'answer' => 'The single biggest impact had the self-organisation I achieved while doing my PhD. Also multitasking and networking inside your own organisation makes your work easier.',
      ),
      3 => array(
        'question' => 'During your PhD and your studies, you focused on immunology, biochemistry and molecular biology. How can you apply your expertise in biochemistry and immunology in your daily work at Lonza?',
        'answer' => 'As I work with antibody-drug-conjugates, my biochemistry and immunology background allows me to understand the why’s and what’s of our products and the methods we use to analyse them. Also, it facilitates the impact assessment of any deviations and determining the root causes.',
      ),
      4 => array(
        'question' => 'How important is harmony between work and outside life for you? Does Lonza offer a good work-life balance for its employees?',
        'answer' => 'Life-work balance may be hollow phrase for some, but it is very important to me and it is also one aspect I like about Lonza. I enjoy flexible hours, the ability to work from home and easy overtime compensation. Lonza also offers several sport groups, training for the Matterhorn marathon for example, and even vacation homes.',
      ),
      5 => array(
        'question' => 'During your PhD you completed a Bachelor Minor in Business Administration. In which aspects did this further education added missing points to your spectrum that you missed after your Masters in Biochemistry and Molecular Biology?',
        'answer' => 'Getting to know the basics of business administration helped me in my professional and personal life. Having a grasp on accounting or understanding different philosophies of management lets you understand the decision made by a company or situations you find yourself in. Especially learning about the types of leadership a person display helped on weighing my options and deciding what kind of leader I want to be myself.',
      ),
      6 => array(
        'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?',
        'answer' => 'For jobs, do not pass over temporary jobs that, for example, last less than 6 months. These positions offer you a great chance to actually see and feel what is like in that position. This will help you for the next application as you know better what you are looking for, in a boss, in the position and in the size of the company. Give your CV and motivation letter to multiple persons to check and comment on.',
      ),
    ),
);

include('../0_template/template.php');

?>
