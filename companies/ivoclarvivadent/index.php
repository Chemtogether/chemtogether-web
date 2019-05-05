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
    "title"        => "Interview with Dr. Sandro Sbicego from Ivoclar Vivadent - Chemtogether",
    "desc"         => "Dr. Sandro Sbicego works as Head of the Quality Control Department and Analytical Services R&D and Head of Global Quality Control at Ivoclar Vivadent. Learn more about his career and work in his interview, and meet Ivoclar Vivadent at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/ivoclarvivadent_20181002.jpg",
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
$template['company_name'] = 'Ivoclar Vivadent';
$template['company_name_short'] = 'ivoclarvivadent';
$template['logo_url'] = set_source($awss3.'/companies/ivoclarvivadent/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://www.ivoclarvivadent.ch','ivoclarvivadent.ch');
$template['facebook'] = array('https://www.facebook.com/ivoclarvivadent/', 'Ivoclar Vivadent');
$template['linkedin'] = array('https://www.linkedin.com/company/ivoclar-vivadent-ag/','Ivoclar Vivadent AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/ivoclarvivadent';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Today’s vision. Tomorrow’s reality. We have a passion for developing innovative products that open up new opportunities for our customers in the dental industry.<br>Ivoclar Vivadent, headquartered in Schaan, Liechtenstein, is one of the world’s leading manufacturers of innovative material systems for high-quality dental applications. The company’s success is based on a comprehensive portfolio of products and systems, strong research and development capabilities and a clear commitment to training and further education. The company employs about 3,600 people at 29 locations worldwide.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Making people smile is what we aspire to at Ivoclar Vivadent each day, with our innovative products and our employee-oriented culture. Working at Ivoclar Vivadent, we share our strong values that promote a culture of mutual respect that you will discover at all our locations around the world. Our ongoing employee development, education and training is one of the cornerstones that underlines the long-term and people-focused orientation as a family owned company.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Ivoclar Vivadent is an exciting, vibrant workplace where new ideas are encouraged and commitment is rewarded. We are looking for young, committed graduates who are passionate about innovation and share our vision to develop solutions for tomorrow’s dentistry.');

$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

include('../0_template/template.php');

?>