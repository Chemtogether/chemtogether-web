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


$template['company_name'] = 'Mettler Toledo';
$template['company_name_short'] = 'mettlertoledo';
$template['logo_url'] = set_source($awss3.'/companies/mettlertoledo/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2023 - Firmen: '.$template['company_name'], 'Chemtogether 2023 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.mt.com/ch/de/home.html','mt.com');
$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://ch.linkedin.com/company/mettlertoledo','Mettler-Toledo International, Inc');


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
<<<<<<< HEAD
<<<<<<< HEAD
   'text' => 'METTLER TOLEDO is a leading global manufacturer of precision analytical instruments, measurement technologies and services for laboratory, industrial and commercial applications. We are proud of our unique corporate culture. All 18’000 employees contribute to making METTLER TOLEDO a great employer and a strong competitor in the global market. It is built on personal commitment and offers our employees the freedom to develop their own ideas, to evolve within the company and to realize their potential. With a worldwide presence in over 40 countries, METTLER TOLEDO is globally diversified and accessible all over the world. <br>
=======
   'text' => 'METTLER TOLEDO is a leading global manufacturer of precision analytical instruments, measurement technologies and services for laboratory, industrial and commercial applications. We are proud of our unique corporate culture. All 18’000 employees contribute to making METTLER TOLEDO a great employer and a strong competitor in the global market. It is built on personal commitment and offers our employees the freedom to develop their own ideas, to evolve within the company and to realize their potential. With a worldwide presence in over 40 countries, METTLER TOLEDO is globally diversified and accessible all over the world.
>>>>>>> 79c3bb2 (Update 2023 expoguide and company description)
   Our innovation, quality, as well as our ability to keep up with the accelerating pace of change, underlines our long-standing leadership in the industry. We hold over 5,000 patents and trademarks in various technically innovative application areas. Our solutions are used in many laboratory and industrial applications worldwide in research and development, quality control, process analytics, product inspection and retail. We remain the market leader in innovative technologies that give our customers a competitive edge.In order to further strengthen and expand our global market position, we are permanently looking for creative and dynamic employees.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Flexible working hours (depending on the role), a
   hybrid work model, and a wide portfolio of training
   opportunities:
<<<<<<< HEAD
   <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>A 40-hour work week with at least 25 vacation days per year, plus 4 to 7 additional days off between bank holidays</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Free parking and direct access to public transport</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Healthy lunches cooked onsite at our own METTLER TOLEDO restaurant, with special prices for employees</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>A range of additional attractive benefits, including employee discounts at select area businesses</td>
  </tr></table>
=======
   <ul>
   <li> A 40-hour work week with at least 25 vacation days
   per year, plus 4 to 7 additional days off between
   bank holidays </li>
   <li> Free parking and direct access to public transport
   Healthy lunches cooked onsite at our own MET-
   TLER TOLEDO restaurant, with special prices for
   employees </li>
   <li> A range of additional attractive benefits, including
   employee discounts at select area businesses </li>
   </ul>
>>>>>>> 79c3bb2 (Update 2023 expoguide and company description)
   You can expect challenging, interesting, and varied
   tasks in an innovative and international environ-
   ment, with the opportunity to network globally and
   achieve your career goals.');
=======
   'text' => 'We are the leading manufacturer and provider of precision instruments. Our weighing systems and analytical instruments are found in laboratories, industrial plants, and retail industry across the globe.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'We offer challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company.');
>>>>>>> 5d71497 (added sign-up link)

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are looking for a motivated personality who is always ready to develop further, who is open to new ideas and who enjoys working in a dynamic environment and realising his potential.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
