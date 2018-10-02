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

if(isset($_GET['fb']) && $_GET['fb'] == 'i-0') {
  $fb = array(
    "title"        => "Interview with Suraj Rathore from Gurit - Chemtogether",
    "desc"         => "Suraj Rathore takes part in the Gurit Entrepreneurial Program at Gurit. Learn more about his career and work in his interview, and meet Gurit at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/gurit_20181002.jpg",
    "image_width"  => "800",
    "image_height" => "420"
  );
} else {
  // $fb = array(
  //   "title"        => "",
  //   "desc"         => "",
  //   "url"          => $awss3."/opengraph/",
  //   "image_url"    => "",
  //   "image_width"  => "",
  //   "image_height" => ""
  // );
}


$template['company_name'] = 'Gurit';
$template['company_name_short'] = 'gurit';
$template['logo_url'] = set_source($awss3.'/companies/gurit/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.gurit.com','gurit.com');
$template['facebook'] = array('https://www.facebook.com/GuritGroup/', 'Gurit');
$template['linkedin'] = array('https://www.linkedin.com/company/gurit/','Gurit');
// $template['mail'] = array('','');
// $template['archive'] = '/archive/';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are a developer and innovator in the composites industry positioned as the leading global supplier of composite materials, engineering services, tooling equipment, select parts and systems. We strive to go beyond the standard today. Focussing on developing our material and technology offering with the ambition of mastering it to its full extent in order to provide complete solutions to our customers. Operating across various market sectors, we like many of our customers, have a common goal of delivering the highest quality whilst driving environmental sustainability.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'You will have earned a Master or PhD in Materials Science or Chemistry, have a foundation of
  business economics/administration and possess an intrinsic entrepreneurial drive. We want you to
  combine these attributes and apply them every day. Our business language is English, but are
  interested in international citizens with a flair for foreign cultures. You’ll need this to lead complex
  strategic projects across our international environment. In short we want you to shape and deliver the
  future of composite solutions.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'An environment to leverage creativity and the entrepreneurial freedom to identify business
  opportunities. Then we want you to take responsibility in developing concepts and implementing
  projects to deliver growth solutions to the opportunities you identified. Mentored personally by the
  Executive Management Team we have faith that you will create career development opportunities for
  leading commercial technical roles in one of our Business Units.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
