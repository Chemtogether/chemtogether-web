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
    "title"        => "Interview with Dr. Michael Seet from BASF - Chemtogether",
    "desc"         => "Dr. Michael Seet works as Research Scientist at BASF. Learn more about his career and work in his interview, and meet BASF at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/basf_0_20181002.jpg",
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
$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = set_source($awss3.'/companies/basf/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.basf.com','basf.com');
$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');

// $template['mail'] = array('','');
$template['archive'] = '/archive/basf';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are the world’s leading chemical company, with the best teams developing intelligent solutions for our customers and creating chemistry for a sustainable future. BASF’s success as a company relies on the personal engagement of our employees. We encourage our staff to develop their strengths, and we recognize their achievements.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => ' We offer excellent frame conditions and development opportunities. The start position as Lab Team Leader offers the chance to develop your individual career as an expert in the worldwide R&D community, as a specialist in technology, production, marketing and sales, innovation scouting, or as a future manager in a global company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'You are an enthusiastic chemist or chemical engineer, and you have successfully completed your studies with a PhD or a PostDoc. Your focus is on one of the following specialist areas: Chemi­cal engineering, organic, inorganic, macromolecular, technical, physical, theoretical, analytical chemistry or biochemistry. You are open to every­thing that’s new and are looking for scientific and technical challenges. You enjoy working in an interdisciplinary and intercultural team.');

$template['interview_print_until'] = 0;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;


$i=0;
$template['interview'][$i++] = array(
  'name' => 'Nikolas Huwyler',
  'img_url' => $awss3.'/companies/basf/interviewee_2019_2',
  'position' => 'Laboratory Team Leader',

  'education' => array(
    0 => array(
      'date' => '2009-2015',
      'desc' => 'Doctor of Sciences at ETH Zurich, Group of Prof. Carreira',
    ),
    1 => array(
      'date' => '2008-2009',
      'desc' => 'Research Internship at MIT, Group of Prof. Jamison',
    ),
    2 => array(
      'date' => '2004-2009',
      'desc' => 'BSc and MSc in Chemistry at ETH Zurich',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2017',
      'desc' => 'Laboratory Team Leader at BASF in Crop Protection Discovery',
    ),
    1 => array(
      'date' => '2016-2017',
      'desc' => 'Postdoctoral Researcher at MPI for Coal Research',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What are your responsibilities as laboratory team leader at BASF?',
      'answer' => 'As a research scientist in crop protection my main responsibility is the discovery of
      new molecules that possess high activities against target pests, while at the same
      time being safe for humans and impacting the environment as little as possible. In my
      daily work, this includes managing research projects, collaborating closely with
      experts from other disciplines – ranging e.g. from biology or agronomy to patents
      and marketing, leading technicians in the laboratory, communicating and
      documenting results, monitoring competitors, and, most importantly, coming up with
      new ideas for our pipe-line. In addition, I am also involved in a couple of interesting
      activities outside of research, such as helping to organize the 136 th International BASF
      Summer Course.',
    ),
    1 => array(
      'question' => 'What made you choose BASF as an employer? Can you describe how the application
      process worked for you?',
      'answer' => 'In principle, quite simply because BASF offered me exactly the kind of position I was
      looking for at the time I was looking for it. Another important factor was, that I
      actually knew someone in the group I was applying to, and this person was always
      very positive about the position and BASF in general. For me, this positive picture was
      then further substantiated during my own interview, and ultimately convinced me to
      accept the offer – which to this day I have never regretted.<br>
      The application process itself was relatively similar to other larger chemistry or
      pharma companies. After filing an application on the company website, suitable
      candidates are asked to pass through an online assessment test, as well as a
      telephone interview. If successful, your dossier is forwarded to the hiring group
      leader, which selects a couple of candidates for on-site interviews. These interview
      days are usually comprised of a scientific talk by the candidate, several individual
      meetings with group leaders and executives, as well as a coffee-corner meeting with
      your potential future colleagues.',
    ),
    2 => array(
      'question' => 'During your PhD and your Postdoc, you focused on total synthesis. How can you
      apply your expertise in organic and organometallic chemistry in your daily work at
      BASF?',
      'answer' => 'I would say that I profit quite a lot from my background in total synthesis since, at
      least from a chemistry perspective, my current position is mostly about how to
      efficiently make a wide variety of relatively complex molecules in a short time. In this
      regard, it is a real advantage to have experience in devising synthetic strategies and
      being familiar with many different types of reactions.',
    ),
    3 => array(
      'question' => 'You gained a lot of experience in academia during your studies and research. How did
      you perceive the recent transition into industry? Does the approach to chemistry
      differ from university?',
      'answer' => 'At least in my experience, and as far as discovery groups are concerned, the
      chemistry itself and the way how chemistry problems are solved is not so much
      different from academia. The most significant changes are probably that you have to
      trouble-shoot reactions without ever having seen them yourself - by working with the
      information the technicians are giving you and by asking the right questions - and
      that one develops a certain preference for the more robust and scalable methods in
      organic chemistry.',
    ),
    4 => array(
      'question' => 'How important is harmony between work and outside life for you? Does BASF offer a
      good work-life balance for its employees?',
      'answer' => 'I would regard myself as a relatively active and committed person, inside and outside
      of work, and so I do not mind going an extra mile, or two, if my job requires it. On the
      other hand, I also have a lot of interests outside of work, such as for example rock
      climbing or cooking, which I would not want to give up either. In this respect, I
      personally was always very happy with how things worked out at BASF. Of course, it
      sometimes can get very busy at work but then again there are also times when
      everything is much more relaxed. Another quite positive aspect for me is that at
      BASF, PhD-degree holders are generally employed under an individual employment
      contract and therefore fully autonomous regarding time management. In fact, there
      is per se also no obligation for attendance in your office, if your responsibilities at a
      given day do not require it. This means, in most positions and with a bit of self-
      organization, the system offers a lot of flexibility, such as for example doing home
      office on certain days or distributing your working hours a bit more according to
      personal needs.',
    ),
    5 => array(
      'question' => 'What are possible career paths and promotion prospects at BASF?',
      'answer' => 'Chemists traditionally start their careers as lab team leaders in one of the research
      departments and stay in their first position for approximately three to five years. The
      reasoning behind this is, that in these positions at least a part of your responsibilities
      corresponds to something you already have experience in from your PhD, allowing
      you to focus more on all the things which are new. Afterwards, there are two distinct
      career paths one can pursue: In the expert-track, people stay in research with the
      goal of further deepening their knowledge and keeping a high level of expertise in
      their groups, while In the generalist-track the aim is on further broadening your set
      of skills and move on to other jobs, many of which are not available as entry-level
      positions because they require a good share of additional professional experience.',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or
      internships?',
      'answer' => 'I would always recommend to first invest some time in finding out a bit more about
      yourself, what you would like to do next, and, as consequence, which options there
      actually are. ETH and affiliated organizations offer a lot of events to inform yourself,
      such as for example Chemtogether, and it is definitively worthwhile to make use of
      some of these opportunities. The best sources of information, however, are usually
      people in your personal network that already are in one of the positions or
      companies that interest you. Once you know in which direction you would like to go,
      it is time to find the right job openings. Here again, besides searching yourself, I
      would let people in your network know that you are currently looking for a job. A
      very useful manual of how to approach the entire application process in a bit more
      thorough and structured way is the «Application Guide» from the ETH Career Center,
      which is available online.',
    ),
  ),
);









// $template['interview'][$i++] = array(
//   'name' => '',
//   'img_url' => $awss3.'/companies//interviewee_1',
//   'position' => '',

//   'education' => array(
//     0 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//     1 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//     2 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//   ),

//   'career' => array(
//     0 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//     1 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//     2 => array(
//       'date' => '',
//       'desc' => '',
//     ),
//   ),

//   'interview' => array(
//     0 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     1 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     2 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     3 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     4 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     5 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     6 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     7 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     8 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//     9 => array(
//       'question' => '',
//       'answer' => '',
//     ),
//   ),
// );




include('../0_template/template.php');



?>