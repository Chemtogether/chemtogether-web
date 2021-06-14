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
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://idorsia.com/','idorsia.com');
$template['facebook'] = array('https://www.facebook.com/idorsia/', 'Idorsia Pharmaceuticals Ltd.');
$template['linkedin'] = array('https://www.linkedin.com/company/idorsia/','Idorsia Pharmaceuticals Ltd.');
// $template['mail'] = array('','');
$template['archive'] = '/archive/idorsia';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Idorsia is specialized in the discovery and development of small molecules, to transform the horizon of therapeutic options. With an experienced team of over 800 highly qualified specialists dedicated to realizing our ambitions, a broad portfolio of innovative drugs in the pipeline, and a strong balance sheet, Idorsia is in the ideal position to bringing R&D efforts to business success.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'A state-of-the-art workplace in an inspiring environment, a competitive compensation package and a good balance between work and private life.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'People who like doing more with less in a highly productive environment where people enjoy their work! If you like to show up with energy, intellect and creativity then you could be a good fit with Idorsia.<br>In drug discovery, we are regularly looking for trainees (e.g. BSc, MSc, and PhD students) to work with us for 6-12 months. To get insight into how you can contribute to one of our exciting drug discovery projects, please review our current openings at: <a href="https://careers.idorsia.com/">careers.idorsia.com</a>');
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');
?>