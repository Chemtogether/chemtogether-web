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


$template['company_name'] = 'IMPAG AG';
$template['company_name_short'] = 'impag';
$template['logo_url'] = set_source($awss3.'/companies/impag/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.impag.ch','impag.ch');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/impag-ag/','IMPAG AG');


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

   'text' => 'IMPAG is a renowned, internationally active commodity trading company with headquarters in i and subsidiaries in Germany, France, Austria, Poland and Spain. We are a
great, dynamic team and are regularly honored with the Swiss Employer Award.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'You start with us in Zurich immediately or by arrangement.
You will sell our wide range of Performance Chemicals / CASE, with a focus on paint & coatings, and expand it further.
You are the face and voice for our customers in Switzerland, field service approx. 30%.
You develop customized offers and lead negotiations until the contract is concluded.
You identify and develop new business opportunities to drive growth.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'You have a basic chemical-technical education and are interested in the
development of raw material solutions for the paint & coatings industry. 
You have initial experience in trading industrial goods.
You work independently and in a structured manner with an organizational flair.
You are flexible and can adapt quickly to changing market conditions.
You have a high level of self-motivation and networked thinking.
You have very good language skills in German and English.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
