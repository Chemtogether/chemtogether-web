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

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
//$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Syngenta Crop Protection (CP) is one
of the four business units of Syngenta
Group, a global leader in agricultural
technology and innovation with 57000
employees in more than 100 countries.
Headquartered in Basel, Switzerland,
Syngenta CP has an industry-leading
R&D pipeline, strong research capa-
bilities and a broad product portfolio
of herbicides, insecticides, fungicides,
and seed treatments.');

$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'At our company both students and
graduates can apply their knowledge,
gain initial experience, learn and grow
in a variety of areas and benefit from
the know-how and experience of our
employees. We offer internships at all
levels during your academic education
(undergraduate, graduate, postgraduate and postdoctoral level) lasting
from 3 to 12 months.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for enthusiastic and talented individuals who want to launch
their career in science, chemistry, biology and engineering in order to meet
the present and future challenges of a
dynamic and demanding market environment.');

//$template['button_print_until'] = 0; 
//$template['interview_print_until'] = 1;
  //if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
  $template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;

  $template['interview'][$i++] = array(
    'name' => 'Simone Berardozzi',
    'img_url' => $awss3.'/companies/syngenta/interviewee_2024_1',
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
        'question' => 'Please introduce yourself and the company: Which focus and goals do you pursue?',
        'answer' => 'My name is Simone Berardozzi, and I have a background in chemistry and medicinal chemistry. I completed my PhD at Sapienza University of Rome in December 2017 under the supervision of Prof. Bruno Botta. Following this, I conducted post-doctoral research in Prof. Karl-Heinz Altmann’s lab at ETH Zürich from 2018 to 2021. <br>
        In March 2021, I joined Syngenta, a global leader in agricultural science and innovation. My passion for scientific innovation at the intersection of various disciplines led me to become part of the insect control lead generation team in September 2021. In this role, I coordinate chemistry, design, and project management activities for target-based projects. 
        At Syngenta, our focus in lead generation is to be at the forefront of innovation in crop protection. We strive to: 
        <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Develop novel and sustainable solutions.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Push the boundaries of scientific discovery in agricultural chemistry integrating cutting-edge technologies and interdisciplinary approaches in our research.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Enhance crop yields and food security globally.</td>
        </tr>
        </table>
        Through our work, we aim to contribute to Syngenta’s mission of helping farmers grow safe, nutritious food in a sustainable way while striving for sustainability.',
      ),
      1 => array(
        'question' => 'Why did you decide for this company?',
        'answer' => 'My main motivation to join Syngenta stemmed from the genuine interest I felt during the interview process. The interviewers showed a sincere curiosity about my ideas and potential contributions, engaging in meaningful dialogue about scientific concepts and innovative approaches. This wasn’t just a superficial interaction; it felt like the beginning of a collaborative journey. <br>
        What truly stood out was Syngenta’s commitment to fostering innovation in a safe and supportive environment. I sensed an openness to new and potentially unconventional ideas, coupled with a culture that values and nurtures creative thinking. <br>
        All these impressions turned out to be true, and moreover, Syngenta demonstrated a clear willingness to transform those ideas into concrete projects. Since joining, this environment has significantly impacted my work, allowing me to grow professionally. The opportunity to see my ideas evolve from concepts to real-world applications has been incredibly fulfilling and has reaffirmed my decision to join Syngenta.',
      ),
      2 => array(
        'question' => 'Of which study programme do you preferably employ students/graduates? Are there specific entry programs or internships you offer?',
        'answer' => 'At our company both students and graduates can apply their knowledge, gain initial experience, learn and grow in a variety of areas and benefit from the know-how and experience of our employees. We offer internships at all levels during your academic education (undergraduate, graduate, postgraduate and postdoctoral level) lasting from 3 to 12 months.',
      ),
      3 => array(
        'question' => 'Requirements and qualifications: Which qualifications and abilities are you looking for in applicants for scientific research jobs in your company?',
        'answer' => 'We are looking for enthusiastic students with a strong academic record and good communication skills (fluency in English, written and spoken). Previous experience in working in a chemistry laboratory or research setting is greatly valued. The experience gained will help you broaden the scope of your personal and professional skills. If you are a proactive team player who likes to work in diverse teams and who is goal oriented and eager to learn, we offer an inspiring global environment where you can enrich your knowledge through first hand practical experience.',
      ),
      4 => array(
        'question' => 'Are there specific academic backgrounds or experiences you prefer? Concerning elective subjects? Semester projects in research? Teamwork? Case Studies?',
        'answer' => 'We are looking for students who are currently enrolled in a Bachelor’s, Master’s or Ph. D. program in chemistry. Focus on organic synthesis, enabling technologies or modern computational approaches are a plus.',
      ),
      5 => array(
        'question' => 'Application process and tips: Can you explain the typical application process in your company? Do you have tips for successful applications?',
        'answer' => 'All open positions are published throughout the year on our website at <a href="https://jobs.syngenta.com/jobs">https://jobs.syngenta.com/jobs</a>, Location Switzerland. If you are interested, please submit an online application in English via the link, with your CV and motivation letter, as well as your university diplomas and transcripts.',
      )
    ),
  );





include('../0_template/template.php');


?>