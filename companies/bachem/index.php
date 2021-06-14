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

$template['company_name'] = 'AVANTAMA';
$template['company_name_short'] = 'BACHEM';
$template['logo_url'] = set_source($awss3.'/companies/bachem/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.bachem.com/','bachem.com');
$template['facebook'] = array('https://www.facebook.com/BachemGroup/', 'Bachem Group');
$template['linkedin'] = array('https://www.linkedin.com/company/bachem/','Bachem');



$template['archive'] = '/archive/bachem';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The Swiss based Bachem Group is specialized in the development and manufacturing of pepTide- and oligonucleoTide-based active pharmaceutical ingredients. With 50 years of experience and a global reach, the group is the partner of choice for the biotech and pharma industry. Bachem attaches the utmost importance to quality, innovation and partnership.
  Bachem. Leading Partner in Tides');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer graduates with a diploma or doctoral degree the possibility to apply their knowledge, gain initial experience in a variety of areas and benefit from the know-how of our experienced employees within a highly collaborative environment with a respectful attitude.');
  
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young, committed and fully qualified graduates, holdinga diploma or already in possession of a doctoral degree, who would like to join our company and establish in a professional environment, to secure our long-term success and maintain market leadership.');





$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');

?>