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
$template['company_name'] = 'Idorsia';
$template['company_name_short'] = 'idorsia';
$template['logo_url'] = set_source($awss3.'/companies/idorsia/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://idorsia.com/','idorsia.com');
$template['facebook'] = array('https://www.facebook.com/idorsia/', 'Idorsia Pharmaceuticals Ltd.');
$template['linkedin'] = array('https://www.linkedin.com/company/idorsia/','Idorsia Pharmaceuticals Ltd.');
// $template['mail'] = array('','');
$template['archive'] = '/archive/idorsia';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Reaching out for more! The purpose of Idorsia is to discover, develop and bring more, innovative medicines to patients. 
  We have more ideas, we see more opportunities and we want to help more patients.
  In order to achieve this, we will develop Idorsia into one of Europes\' leading biopharmaceutical companies, with a strong
  scientific core.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'A state-of-the-art workplace in an inspiring environment, a competitive compensation package and a good balance between work and private life.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Simply put - our success depends on our people! This is why we want to recruit, engage and develop talented people
  who are passionate about working together and applying science to bring benefits to patients.');
$template['interview_print_until'] = 0;
$template['button_print_until'] = 0; 
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');
?>