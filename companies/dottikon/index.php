
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
$template['company_name'] = 'Dottikon';
$template['company_name_short'] = 'dottikon';
$template['logo_url'] = set_source($awss3.'/companies/dottikon/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://dottikon.com/','dottikon.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/dottikon-exclusive-synthesis-ag/','Dottikon Exclusive Synthesis AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/dottikon';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the Specialist for hazardous, safety-critical chemical reactions with a strong emphasis on technology-driven research and development and scale-up. A custom manufacturer of APIs and advanced intermediates for the pharmaceutical and industrial industries around the globe, we pursue a one-site strategy in Switzerland that covers the full range from lab scale all the way to multi-ton production. DOTTIKON employs over 600 employees, 16% of whom hold a Ph.D. in chemistry..');
$template['we_offer'] = array(
  'title' => 'What do we offer?',
  'text' => 'Our one-site strategy creates a unique environment that allows for rapid response times to customer inquiries, fast decision taking and on-site production. You will have access to all the plants and equipment where your chemistry will be implemented. As a demanding, dynamic and performance-driven company, we offer flat hierarchies, clear structures, competences, and responsibility in a constructive and open working environment.');
$template['we_look'] = array(
  'title' => 'Who we\'re looking for',
  'text' => 'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative, and good communication skills. The ability to work independently and accurately is just as important as your motivation to deliver outstanding results.');
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
include('../0_template/template.php');
?>