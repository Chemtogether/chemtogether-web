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

   'text' => 'IMPAG AG is a leading distribution company specialized in innovative chemical, ingredient, and raw materials solutions, with headquarters in Zürich. With a strong focus on reliability, quality, and sustainability, IMPAG offers tailored solutions and services that meet the highest standards. We are following our company values of competence, respect, integrity and passion in all our decisions and relationships - would it be employees, suppliers or customers, to whose successes we are passionately committed to. IMPAG’s outstanding consulting expertise enables our clients to find the best solutions for their specific needs.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'At IMPAG, we offer thrilling career opportunities in the chemical sector where you can truly make a difference.<br>
Imagine being part of a leading distribution company, that not only focuses on technical consultancy, but also values your individualgrowth and creativity. With us, you’ll have the chance to develop your commercial and management skills in a unique environment.<br>
Picture yourself engaging with R&D departments across the country and across various segments, understanding their challenges, and finding ideal solutions within our extensive portfolio. You’ll connect with a wide range of chemical producers, exploring different functionalities and applications of their products. Whether your passion lies in chemical developments, sales, marketing, or technical support - your role at IMPAG will be filled with diverse topics and projects, promoting your development every step of the way.
Join our dynamic team and be part of a company that cherishes creativity, collaboration, and continuous learning. Together, we can drive innovation and shape the future of the chemical industry in a unique way.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are in search of passionate chemists who thrive on human interaction and are eager to enhance their commercial, communication, and negotiation skills, while providing technically sophisticated solutions to our customers.<br>
Highly motivated and self-driven individuals with a bachelor’s or master’s degree in chemistry or chemical engineering, envisioning their future beyond the lab, are encouraged to apply.
Solution-oriented team members with high standards, striving for excellence and embodying our core values in everything they do, will find a perfect fit with us.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');


?>
