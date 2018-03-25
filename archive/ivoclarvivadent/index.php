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

$active_nav = 'archive';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );


$template['company_name'] = 'Ivoclar Vivadent';
$template['company_name_short'] = 'ivoclarvivadent';
$template['logo_url'] = $awss3_archive.'/ivoclarvivadent/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether 2018 - Archiv: '.$template['company_name'], 'Chemtogether 2018 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.ivoclarvivadent.ch','ivoclarvivadent.ch');
$template['facebook'] = array('https://www.facebook.com/ivoclarvivadent/', 'Ivoclar Vivadent');
$template['linkedin'] = array('https://www.linkedin.com/company/ivoclar-vivadent-ag/','Ivoclar Vivadent AG');
// $template['mail'] = array('','');

$template['we_are'] = array(
  "Ivoclar Vivadent is one of the world's leading dental companies with 3,500 employees at 31
locations around the world. With high-quality and innovative products for modern dentistry
and dental technology, we have achieved sales revenues of over 775 million Swiss Francs in
2016. For more than 90 years, Ivoclar Vivadent has been a privately owned company with
the aim to bring a smile to people's faces.",
"Ivoclar Vivadent is one of the world's leading dental companies with 3,500 employees at 31
locations around the world. With high-quality and innovative products for modern dentistry
and dental technology, we have achieved sales revenues of over 775 million Swiss Francs in
2016. For more than 90 years, Ivoclar Vivadent has been a privately owned company with
the aim to bring a smile to people's faces.");
$template['we_offer'] = array(
  'We offer you an environment that fosters an open and friendly climate in which people are
respectful of each other and share ideas openly. As a member of our team, we will give you
both challenges and support through varied and exciting activities and projects as well as
through professional development and further education opportunities.',
  'We offer you an environment that fosters an open and friendly climate in which people are
respectful of each other and share ideas openly. As a member of our team, we will give you
both challenges and support through varied and exciting activities and projects as well as
through professional development and further education opportunities.');
$template['we_look'] = array(
  'We are looking for young ambitious individuals who are passionate about innovation. People
who aspire to grow and move the company forward with commitment and passion. People
who find joy in successfully shaping the dental industry with us.',
  'We are looking for young ambitious individuals who are passionate about innovation. People
who aspire to grow and move the company forward with commitment and passion. People
who find joy in successfully shaping the dental industry with us.');



// $i = 0;
// $template['interview']['2017'][$i++] = array(
//   'name' => 'Patrik Willi',
//   'img_url' => $awss3.'/img/team/member_1',
//   'position' => array('Co-Präsident der Chemtogether', 'Head of Chemtogether'),
//
//   'education' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('PhD. in Chemie an der ETH Zürich','PhD. in chemistry at ETH Zürich')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('M.Sc. in Chemie an der ETH Zürich','M.Sc. in chemistry at ETH Zürich')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('B.Sc. in Chemie an der ETH Zürich','B.Sc. in chemistry at ETH Zürich')
//     ),
//   ),
//
//   'career' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('CEO bei Chemtogether','CEO at Chemtogether')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('Team-Leiter bei Chemtogether','Team-Manager at Chemtogether')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('Mitglied der Chemtogether','Member of Chemtogether')
//     ),
//   ),
//
//   'interview' => array(
//     0 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     1 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     2 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     3 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     4 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     5 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     6 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     7 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     8 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     9 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//   ),
// );
//
//
// $template['interview']['2017'][$i++] = array(
//   'name' => 'Esther Tschanen-Hamman',
//   'img_url' => $awss3.'/img/team/member_2',
//   'position' => array('Co-Präsident der Chemtogether', 'Head of Chemtogether'),
//
//   'education' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('PhD. in Chemie an der ETH Zürich','PhD. in chemistry at ETH Zürich')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('M.Sc. in Chemie an der ETH Zürich','M.Sc. in chemistry at ETH Zürich')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('B.Sc. in Chemie an der ETH Zürich','B.Sc. in chemistry at ETH Zürich')
//     ),
//   ),
//
//   'career' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('CEO bei Chemtogether','CEO at Chemtogether')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('Team-Leiter bei Chemtogether','Team-Manager at Chemtogether')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('Mitglied der Chemtogether','Member of Chemtogether')
//     ),
//   ),
//
//   'interview' => array(
//     0 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     1 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     2 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     3 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     4 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     5 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     6 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     7 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     8 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     9 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//   ),
// );
//
// $i = 0;
// $template['interview']['2016'][$i++] = array(
//   'name' => 'Esther Tschanen-Hamman',
//   'img_url' => $awss3.'/img/team/member_2',
//   'position' => array('Co-Präsident der Chemtogether', 'Head of Chemtogether'),
//
//   'education' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('PhD. in Chemie an der ETH Zürich','PhD. in chemistry at ETH Zürich')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('M.Sc. in Chemie an der ETH Zürich','M.Sc. in chemistry at ETH Zürich')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('B.Sc. in Chemie an der ETH Zürich','B.Sc. in chemistry at ETH Zürich')
//     ),
//   ),
//
//   'career' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('CEO bei Chemtogether','CEO at Chemtogether')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('Team-Leiter bei Chemtogether','Team-Manager at Chemtogether')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('Mitglied der Chemtogether','Member of Chemtogether')
//     ),
//   ),
//
//   'interview' => array(
//     0 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     1 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     2 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     3 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     4 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     5 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     6 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     7 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     8 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     9 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//   ),
// );
//



include('../0_template/template.php');

?>
