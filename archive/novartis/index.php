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


$template['company_name'] = 'Novartis';
$template['company_name_short'] = 'novartis';
$template['logo_url'] = $awss3_archive.'/novartis/logo';
$template['package'] = 'silver';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.novartis.com','novartis.com');
$template['facebook'] = array('https://www.facebook.com/novartis', 'Novartis');
$template['linkedin'] = array('https://www.linkedin.com/company/novartis/','Novartis');
// $template['mail'] = array('','');

$template['we_are'] = array(
  "Novartis is a global healthcare company
based in Switzerland that provides
solutions to address the evolving
needs of patients worldwide. Created
in 1996 from the merger between
Ciba-Geigy and Sandoz, we are Switzerland’s
largest healthcare company and
one of the 25 largest companies by
market capitalization globally.
Novartis is the only major healthcare
company with leadership positions in
both patented and generic pharmaceuticals.
We are represented by over
118’700 associates in more than 140
countries worldwide with over 13’000
people of more than 100 different
nationalities working in Switzerland
alone.<br>
In 2015, Novartis has reached almost
one billion patients worldwide with its
products.",
  "Novartis is a global healthcare company
based in Switzerland that provides
solutions to address the evolving
needs of patients worldwide. Created
in 1996 from the merger between
Ciba-Geigy and Sandoz, we are Switzerland’s
largest healthcare company and
one of the 25 largest companies by
market capitalization globally.
Novartis is the only major healthcare
company with leadership positions in
both patented and generic pharmaceuticals.
We are represented by over
118’700 associates in more than 140
countries worldwide with over 13’000
people of more than 100 different
nationalities working in Switzerland
alone.<br>
In 2015, Novartis has reached almost
one billion patients worldwide with its
products.");
$template['we_offer'] = array(
  'Our mission is to discover new ways
to improve and extend people’s lives.
Our vision is to be a trusted leader in
changing the practice of medicine.<br>
We use science-based innovation to
address some of society’s most challenging
healthcare issues. We discover
and develop breakthrough treatments
and find new ways to deliver them to
as many people as possible. We also
aim to provide a shareholder return
that rewards those who invest their
money, time and ideas in our company.',
  'Our mission is to discover new ways
to improve and extend people’s lives.
Our vision is to be a trusted leader in
changing the practice of medicine.<br>
We use science-based innovation to
address some of society’s most challenging
healthcare issues. We discover
and develop breakthrough treatments
and find new ways to deliver them to
as many people as possible. We also
aim to provide a shareholder return
that rewards those who invest their
money, time and ideas in our company.');
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
