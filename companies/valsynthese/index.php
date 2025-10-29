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
// if(isset($_GET['fb']) && $_GET['fb'] == 'i-0') {
//   $fb = array(
//     "title"        => "Interview with Dr. Michael Seet from BASF - Chemtogether",
//     "desc"         => "Dr. Michael Seet works as Research Scientist at BASF. Learn more about his career and work in his interview, and meet BASF at this year's Chemtogether!",
//     "url"          => "",
//     "image_url"    => $awss3."/opengraph/basf_0_20181002.jpg",
//     "image_width"  => "800",
//     "image_height" => "420"
//   );
// } else {
  // $fb = array(
  //   "title"        => "",
  //   "desc"         => "",
  //   "url"          => $awss3."/opengraph/",
  //   "image_url"    => "",
  //   "image_width"  => "",
  //   "image_height" => ""
  // );
// }
$template['company_name'] = 'VALSYNTHESE SA';
$template['company_name_short'] = 'valsynthese';
$template['logo_url'] = set_source($awss3.'/companies/valsynthese/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
//$template['homepage'] = array('https://www.basf.com','basf.com');
//$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
//$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');
$template['homepage'] = array('https://www.valsynthese.ch/','valsynthese.ch');
//$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://www.linkedin.com/company/valsynthese/','Valsynthese');
// $template['mail'] = array('','');
$template['archive'] = '/archive/valsynthese';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'SSE/Valsynthese is a company that wants its employees to be proud. Passion, Innovation,
Teamwork and an Enterpreneurial culture are our core values. We are putting human beings in
the center and nurture a diverse, equitable and inclusive environment where everyone feels
engaged, valued and respected. Gender equality, encouraging part time working models and
flexible working hours to well balance working/private life are part of our organizational DNA.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => '<ul>
  <li>Room for innovation and your own ideas.</li>
  <li>A family-like working atmosphere and a culture of appreciation.</li>
  <li>Excellent social benefits and employment conditions.</li>
  <li> Flexible working hours.</li>
</ul>');
  
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'We are looking for passionate individuals who are eager to contribute their expertise and
curiosity to a dynamic and collaborative environment. We value initiative, precision, and a
flexible mindset—ready to adapt to evolving challenges and diverse contexts.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 1;
if(isset($_GET['preview'])) $template['interview_print_until'] = 1;
// if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 2;

$i=0;

$template['interview'][$i++] = array(
  'name' => 'Diego',
  'img_url' => $awss3.'/companies/valsynthese/interviewee_2025_1',
  'position' => 'Quality Control in Gamsen, Switzerland',

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
      'question' => 
        'What is your current task at your company?',
      'answer' => 
        'I work in the quality control (QC) of Valsynthese in Gamsen, Switzerland. Here I’m part of a small subgroup which primarily focuses on method development and implementation for new production campaigns. Additionally, I also help out as needed in analytical routine measurements for established and ongoing campaigns. I work primarily with GC, but also regularly use other methods like titration, water analysis via KF or HPLC. The position includes a lot of practical work, which I particularly enjoy.'
    ),

    1 => array(
      'question' => 
        'Why did you decide to work at your company and what did the application process look like?',
      'answer' => 
        'I had visited the company during my apprenticeship as a lab assistant at another company. Therefore, I had already had some insight into the firm culture and the lab facilities. Additionally, the firm has a good image in our region which was also important to me. For both reasons Valsynthese had always been an option for me. Thus, I quickly applied to an online job advertisement when I saw it. I was then promptly invited to an interview with my future boss as well as the head of the QC-department. After a promising interview I had the opportunity to visit the firm to see the lab and meet my potential future colleagues. Shortly after this visit I was offered the position and happily accepted. The entire process was professional, yet uncomplicated.'
    ),

    2 => array(
      'question' => 
        'Which strengths did you develop during your studies that helped you in particular in your current job?',
      'answer' => 
        'My studies gave me a wide theoretical background in many analytic and synthetic fields. Therefore, I knew most of the techniques used in the lab already quite well or was at least able to quickly adapt to new ones. Furthermore, I was already familiar with writing reports and documentations. Both of which are important in method development. That said, I could also implement a lot of skills I acquired during my apprenticeship. First and foremost, there was my ability to work clean and precise and to document my work in a clear and well-organized fashion (which also helped me during my bachelor\'s and master\'s theses). In addition to that I also had practical experience with most of the used methods as well as the programs used for most instruments (like GC and HPLC systems). Lastly, I already had basic experience with working in an GMP environment.'
    ),

    3 => array(
      'question' => 
        'What fascinates you about your work in particular?',
      'answer' => 
        'I find it fascinating to be able to work with many different analytical methods and a wide variety of compounds. It is also interesting to get a deeper insight into a lot of different analytical techniques (for example into how the modification of certain parameters influences the sample separation in GC and HPLC methods). Additionally, I enjoy working precisely and thus have no issues working under GMP guidelines. Lastly, I find it fulfilling to work in a position where I actively help to ensure the quality of our products and therefore the safety of our customers.'
    ),

    4 => array(
      'question' => 
        'How would you describe the corporate culture in your company, especially with regard to teamwork and collaboration?',
      'answer' => 
        'The corporate culture in our lab is very pleasant and professional. If you need help you can ask basically anyone in the lab, and they are going to help you if they can. Inputs and ideas are encouraged and taken seriously. And if you make a mistake, people won\'t immediately get mad at you. Instead, they will help you fix it and give you pointers on how to avoid similar mistakes in the future.'
    ),

    5 => array(
      'question' => 
        'What would you recommend ETH students to do during their studies to prepare for future industry experience?',
      'answer' => 'In industry in general—and in analytics in particular—it is important to work clean and precisely and to properly document everything you do. Therefore, it would be prudent to adopt such a way of working already during your studies. Especially since your way of working is often not as strictly controlled at universities as it is going to be later on in industry. Particularly for analytical positions it would also be useful to get some hands-on experience in HPLC and GC analysis. Both are widely used in industry but often (at least in my experience) treated primarily theoretically (and often somewhat superficial) during studies. For both points an industrial internship would certainly be helpful.'
    
    ),
  ),
);


include('../0_template/template.php');



?>