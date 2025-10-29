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


$template['company_name'] = 'df-mp';
$template['company_name_short'] = 'dfmp';
$template['logo_url'] = set_source($awss3.'/companies/dfmp/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://df-mp.com','df-mp.com');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
//$template['linkedin'] = array('https://www.linkedin.com/company/sigaswiss/','SIGA');


// $template['we_are'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_offer'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_look'] = array(
//   'title' => '',
//   'text' => '');


$template['we_are'] = array(
   'title' => 'We are',

   'text' => 'df-mp is one of the top European firms
in the field of intellectual property law.
We have been advising and representing clients in national and international
matters relating to patents and trademarks for over two decades. Based in
the centre of Munich, our team is international, with attorneys/trainees from
countries including Germany, England,
USA, and Canada.
We possess multilingual capabilities,
command a high level of intercultural
expertise, and maintain a global network. This enables us to develop strategies tailored to the specific demands
of various judicial systems. We provide
counsel to international corporations,
as well as domestic and foreign law
firms, across diverse fields such as
biotechnology, chemistry, pharmaceuticals, electrical and mechanical arts,
trademarks, and designs.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'df-mp offers exceptional training to
become a European and/or a German
Patent Attorney, comprising immediate exposure to technical and legal
aspects of patent cases, supervised by
a qualified Attorney. The work is challenging and rewarding, and provides a
strong basis for trainees to be able to
pass the Qualifying Examinations. We
further provide a family-friendly, inclusive and flexible working environment.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are looking for technically-qualified
individuals with at least an MSc or PhD,
an excellent command of written and
spoken English, attention-to-detail and
motivation to apply these skills to the
protection of intellectual property in
exciting new areas of technology.');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
 $template['interview'][$i++] = array(
  'name'   => 'Maryna Psol',
  'img_url'=> $awss3.'/companies/dfmp/interviewee_2025_1',
  'position' => 'Patent Attorney Candidate <br> Dr. rer. nat., M.Sc., B.Sc., LL.B',

  'education' => array(
    0 => array('date' => '', 'desc' => 'Dr. rer. nat., M.Sc., B.Sc., LL.B'),
  ),

  'career' => array(
    0 => array('date' => '2023–present', 'desc' => 'Patent Attorney Candidate, df-mp'),
  ),

  'interview' => array(

    0 => array(
      'question' => 'What is your current task at your company? / Was ist Ihre derzeitige Aufgabe in Ihrem Unternehmen?',
      'answer' => 'I am a Patent Attorney Trainee at df-mp. The training usually takes about three years and concludes with the qualifying examination to become a patent attorney. I am now in my third year. Before joining df-mp, I completed my PhD in a field combining Biochemistry and Neuroscience. This scientific background helps me understand the inventions I work with and communicate their core ideas in a legal context.'
    ),

    1 => array(
      'question' => 'Why did you decide to work at your company and what did the application process look like? / Warum haben Sie sich entschieden, in Ihrem Unternehmen zu arbeiten, und wie sah der Bewerbungsprozess aus?',
      'answer' => 'While completing my PhD, I knew I wanted to stay connected to scientific developments and innovations, but I was looking for a path outside academia. That is how I became interested in the patent attorney profession. To learn more, I took a course in Intellectual Property Rights taught by a practicing IP lawyer. He shared valuable insights into the field and recommended df-mp as an excellent place for training, especially for candidates with a background in life sciences and chemistry.<br><br>
The application process involved submitting my documents and taking part in two interviews. I immediately had a very positive impression of the firm. The conversations were open and professional, and I felt respected throughout the process. It was clear that both solid scientific background and motivation to learn and succeed are highly valued here. This confirmed my decision to join df-mp.'
    ),

    2 => array(
      'question' => 'Which strengths did you develop during your studies that helped you in particular in your current job? / Welche Stärken haben Sie während Ihres Studiums entwickelt, die Ihnen besonders in Ihrer jetzigen Tätigkeit geholfen haben?',
      'answer' => 'During my studies, I learned to analyze complex problems, which helps me to evaluate inventions and legal questions. Reading and organizing large amounts of research papers taught me to handle technical information efficiently. I also developed attention to detail and persistence. I became used to dealing with setbacks and finding new approaches when things do not go as planned, which is just as useful in patent law as it is in the lab.'
    ),

    3 => array(
      'question' => 'What fascinates you about your work in particular? / Was fasziniert Sie besonders an Ihrer Arbeit?',
      'answer' => 'I find it fascinating that the work covers a wide range of scientific topics, unlike typical research where you often stay in a single niche. I enjoy the mix of science, law and language. It is exciting to see how ideas from the lab develop into real-world products, medicines, or research tools, and to understand how business and strategic decisions are made in companies. I also like spotting trends early and seeing where innovation is heading. For example, just recently a colleague shared newspaper articles discussing a therapeutic antibody for which he had written a patent application only a few years ago. This antibody is now considered a potential breakthrough in HIV treatment, and it was exciting to see how work in the office can directly influence real-world applications.'
    ),

    4 => array(
      'question' => 'How would you describe the corporate culture in your company, especially with regard to teamwork and collaboration? / Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
      'answer' => 'The work often involves focused tasks that are handled independently, which suits people who enjoy working on their own. At the same time, there are plenty of opportunities to discuss ideas, get feedback, and learn from colleagues. Every project brings together multiple people who rely on each other, so teamwork is essential. I also feel that my opinion is valued and that more experienced colleagues are happy to share their experience and support me. This combination of independence and collaboration makes the work both engaging and rewarding.'
    ),

    5 => array(
      'question' => 'What would you recommend ETH students to do during their studies for future industry experience? / Was würden Sie ETH-Studierenden empfehlen, während ihres Studiums zu tun, um für künftige Praxiserfahrungen in der Industrie vorbereitet zu sein?',
      'answer' => 'I would suggest talking to people in the field and exploring different career paths early on. Seek out mentors or mentorship programs and try internships to gain hands-on experience. It is also important to develop skills like critical thinking, clear communication, adaptability, and teamwork, because they are just as valuable as technical knowledge when moving into patent law. Being curious and proactive helps you discover what truly excites you and makes it easier to find the right path after graduation.'
    ),

  ),
);


include('../0_template/template.php');


?>
