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


$template['company_name'] = 'Bachem';
$template['company_name_short'] = 'bachem';
$template['logo_url'] = set_source($awss3.'/companies/bachem/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.bachem.com/','bachem.com');
$template['facebook'] = array('https://www.facebook.com/BachemGroup/', 'Bachem Group');
$template['linkedin'] = array('https://www.linkedin.com/company/bachem/','Bachem');
// $template['mail'] = array('','');
$template['archive'] = '/archive/bachem';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Bachem is a listed technology-based company focused on peptide chemistry. The company provides a full range of services to the pharma and biotech industries. It specializes in the development of innovative, efficient manufacturing processes and the reliable production of peptide-based active pharmaceutical ingredients. A comprehensive catalog of biochemicals and exclusive custom syntheses for research labs complete the service portfolio. Headquartered in Switzerland with subsidiaries in Europe and the US, the group has a global reach with more experience and know-how than any other company in the industry. Towards its customers, Bachem shows total commitment to quality, innovation and partnership.<br>Bachem. Pioneering Partner for Peptides.');
$template['we_offer'] = array(
  'title' => 'What do we have to offer?',
  'text' => 'We offer graduates with a diploma or doctoral degree the possibility to apply their knowledge, gain initial experience in a variety of areas and benefit from the know-how of our experienced employees within a highly collaborative environment with a respectful attitude.');
$template['we_look'] = array(
  'title' => 'Who are we looking for?',
  'text' => 'We are looking for young, committed and fully qualified graduates, holding a diploma or already in possession of a doctoral degree, who would like to join our company and establish in a professional environment, to secure our long-term success and maintain market leadership.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
