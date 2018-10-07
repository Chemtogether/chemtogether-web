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
    "title"        => "Interview with Dr. Emad El Sayed from Carbogen Amcis - Chemtogether",
    "desc"         => "Dr. Emad El Sayed works as Manager PR&D at Carbogen Amcis. Learn more about his career and work in his interview, and meet Carbogen Amcis at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/carbogenamcis_20181002.jpg",
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


$template['company_name'] = 'Carbogen Amcis';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','Carbogen Amcis');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'CARBOGEN AMCIS was founded in 2006 as a result of the merger between “AMCIS” and “CarboGen.” AMCIS was founded in 1982 as a joint venture with an American pharmaceutical company and CarboGen in 1990 at the University of Zurich.<br> We are a leading service provider in the area of organic chemistry, product and process development to commercial production of Active Pharmaceutical Ingredients (APIs) for the pharmaceutical and bio-pharmaceutical industry. Our core markets are in North America, Europe and Asia. We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz) as well as facilities in France, United Kingdom and Shanghai. Our focus is to help customers create a better world.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => '<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Varied Work &amp High Responsibility</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Career Development opportunities</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Flexible Working Hours</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Supportive &amp Diverse Workplace</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Private Travel Insurance</td>
  </tr>
  </table><br>Would you like to be a part of CARBOGEN AMCIS and have a direct impact on our business growth? Then visit our <a href="http://www.carbogen-amcis.com/careers.asp">career homepage</a> or submit an expression of interest via <a href="mailto:bewerbung@carbogen-amcis.com">bewerbung@carbogen-amcis.com</a>.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => '...individuals with an educational and
  professional background in:
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Chemical Research & Development</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Quality Control & Assurance</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Analytical Development</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Quality Systems</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Chemical Production</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Regulatory Affairs</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Post-Doc</td>
  </tr>
  </table><br>
  We expect:  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>University Degree in Chemistry or
  Pharmaceutical Chemistry</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Ability to Work in a Team Environment</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Good Communication & Organizational
  Skills</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Solid Knowledge of German & English</td>
  </tr>
  </table>');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
