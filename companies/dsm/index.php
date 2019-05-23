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

$template['company_name'] = 'DSM';
$template['company_name_short'] = 'dsm';
$template['logo_url'] = set_source($awss3_archive.'/dsm/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.dsm.com/','dsm.com');
$template['facebook'] = array('https://www.facebook.com/DSMcompany/', 'DSM');
$template['linkedin'] = array('https://www.linkedin.com/company/dsm/','DSM');

// $template['mail'] = array('','');
$template['archive'] = '/archive/dsm';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'DSM Nutritional Products DNP is the largest business group of DSM. As part of the Dutch Company we are leader in developing and producing Vitamins and other substances for our businesses Human / Animal Nutrition & Health and Personal Care. Focus of DSM is sustainability and together with our 25’000 colleagues world-wide we create bright science for brighter living.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' =>'DSM is a fast developing company and offers you all benefits of a global player. Working in international teams, managing diversity and an independent way of practice are just a few advantages. Start your career with different opportunities we offer: from Post-Doc, Internship to permanent positions.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'DSM is looking for potential talents with an open-minded thinking, high competences in problem solution and sustainable working methods. PhDs, University or apprentice graduates in Life Sciences or Chemistry will develop new processes, optimize chemical routes and ensure highest quality of DSM products.');
    
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');

?>