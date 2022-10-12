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
$template['company_name'] = 'Novartis';
$template['company_name_short'] = 'novartis';
$template['logo_url'] = set_source($awss3.'/companies/novartis/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://novartis.com/','novartis.com');
$template['linkedin'] = array('https://www.linkedin.com/company/novartis/','Novartis');
$template['archive'] = '/archive/novartis';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are Novartis and we are reimagining medicine to improve and extend people\'s lives. 
  Our medicines address most major disease areas, from cancer to heart disease to rare genetic disorders.
  We use innovative science and technology to discover and develop breakthrough treatments and 
  find new ways to deliver them to as many people as posible.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Internships at every stage of academic training for:
    <table class="fa-table">
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td> Bachelor and Master students </td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td> Graduates </td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td> PhD students and Postdocs</td>
    </tr></table>
    Current vacancies are regularly advertised on our careers portal: www.novartis.com/careers.  
    We offer a diverse and inclusive employee culture, competitive compensation packages,
    flexible working and state-of-the-art campus.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for curious, engaged and responsible talents who want to make a difference and improve
  people\'s lives through medicines.');
$template['interview_print_until'] = 0;
$template['button_print_until'] = 0; 
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');
?>