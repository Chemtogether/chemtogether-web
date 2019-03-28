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
    "title"        => "Interview with Dr. Benjamin Wyler from Lonza - Chemtogether",
    "desc"         => "Dr. Benjamin Wyler works as Project Leader and Process Development Chemist at Lonza. Learn more about his career and work in his interview, and meet Lonza at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/lonza_20181002.jpg",
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


$template['company_name'] = 'Lonza';
$template['company_name_short'] = 'lonza';
$template['logo_url'] = set_source($awss3.'/companies/lonza/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
// $template['mail'] = array('','');
$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are the leading supplier using science and technology to improve the quality of life; we work with passion, using advanced technologies, to transform life science into new possibilities for our customers; headquartered in Basel, Switzerland, we operate production, R&D, and business sites around the world, including Europe, North America, and Asia.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer an environment that fosters creativity and success, a company without burdensome bureaucracy, and the ability to be involved in many aspects of internal and external business; you will be rewarded for a job well done, have opportunities to develop your knowledge and skills, and you will be respected and valued.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'At Lonza, we are looking for and invest in great people; whether you are looking for an internship, an apprenticeship, or a full-time position, Lonza can help you broaden your horizons with practical experience at a global life sciences organization.');



include('../0_template/template.php');

?>
