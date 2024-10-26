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


$template['company_name'] = 'SIGA';
$template['company_name_short'] = 'siga';
$template['logo_url'] = set_source($awss3.'/companies/siga/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.siga.swiss/ch_de','siga.swiss');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/sigaswiss/','SIGA');


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

   'text' => 'SIGA, a Swiss family-owned company
with over 650 employees across 24
countries, develops, manufactures,
and educates on products for energy-efficient building envelopes, including diffusion-permeable membranes
and non-toxic adhesive tapes. Tight
building envelopes protect against uncontrolled air exchange, reduce energy
consumption for heating and cooling,
and contribute to combating climate change.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>Taking on responsibility:</b> After a thorough induction, personal development is specifically promoted and responsibility is transferred</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>SIGA culture:</b> Unique culture of learning and continuous improvement. Promotion of creativity through Scrum and open space working</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>Meaningful work:</b> Using breakthrough technologies to reduce energy consumption and CO2 emissions from buildings, avert climate catastrophe and add value to society</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>An environment that encourages innovation:</b> Focused work with state-of-the-art tools, both on site in stylish premises and at home</td>
  </tr>
  </table>');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are seeking innovative minds in
materials science with a passion for exploring the properties and applications
of advanced materials. <br>
If you are driven by curiosity, enjoy interdisciplinary collaboration, join us to
push the boundaries of material technology and make a lasting impact on
the future of science and engineering.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
