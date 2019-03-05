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


$template['company_name'] = 'Blaser Swisslube';
$template['company_name_short'] = 'blaser';
$template['logo_url'] = $awss3_archive.'/blaser/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.blaser.com/','blaser.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/blaser-swisslube/','Blaser Swisslube');
// $template['mail'] = array('','');

$template['we_are'] = array(
  "Blaser Swisslube is a globally active
company in the metalworking fluid
sector. The independent and familyowned
Swiss company was founded in
1936 and has since grown from a small
business into a technologically leading
global player, employing around 600
people worldwide. Blaser Swisslube
is represented in about 60 countries,
close to its customers. The company
develops and produces high-quality
cutting and grinding fluids and its
customers produce with great
success a wide range of products, from
the tiniest of parts to large, critical and
structural components in all
manufacturing industries.",
  "Blaser Swisslube is a globally active
company in the metalworking fluid
sector. The independent and familyowned
Swiss company was founded in
1936 and has since grown from a small
business into a technologically leading
global player, employing around 600
people worldwide. Blaser Swisslube
is represented in about 60 countries,
close to its customers. The company
develops and produces high-quality
cutting and grinding fluids and its
customers produce with great
success a wide range of products, from
the tiniest of parts to large, critical and
structural components in all
manufacturing industries.");
$template['we_offer'] = array(
  'Our family corporate culture has a long
tradition and we preserved it even as a
global active company. We aim to
create conditions so that every
employee can be successful and can
involve himself according to his skills.
The success of each individual 
employee makes our company
prosperous. We do everything so our
employees are satisfied and engage
themselves by their own conviction
to achieve our company goals. Our
collaboration is based on trust, openmindedness
and mutual respect. We
believe in own respect and create a
big room for manoeuvre, to enable on
each level an entrepreneurial
thinking and action, which leaves space
for unconventional solutions.<br>
We encourage expertise and personal
development through continuing
education and on the job training. We
offer our employees an advanced and
attractive working environment.',
  'Our family corporate culture has a long
tradition and we preserved it even as a
global active company. We aim to
create conditions so that every
employee can be successful and can
involve himself according to his skills.
The success of each individual 
employee makes our company
prosperous. We do everything so our
employees are satisfied and engage
themselves by their own conviction
to achieve our company goals. Our
collaboration is based on trust, openmindedness
and mutual respect. We
believe in own respect and create a
big room for manoeuvre, to enable on
each level an entrepreneurial
thinking and action, which leaves space
for unconventional solutions.<br>
We encourage expertise and personal
development through continuing
education and on the job training. We
offer our employees an advanced and
attractive working environment.');
$template['we_look'] = array(
  '-',
  '-');



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
