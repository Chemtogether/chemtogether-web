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
  
$template['company_name'] = 'Dow Europe';
$template['company_name_short'] = 'dow';
$template['logo_url'] = set_source($awss3.'/companies/dow/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://ch.dow.com/en-us','ch.dow.com');
$template['facebook'] = array('https://www.facebook.com/TheDowChemicalCompany/', 'The Dow Chemical Company');
$template['linkedin'] = array('https://www.linkedin.com/company/dow-chemical/','The Dow Chemical Company');
// $template['mail'] = array('info','chemtogether.ethz.ch');
$template['archive'] = '/archive/dow';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'The Dow Chemical Company (Dow) combines science and technology knowledge to develop premier materials science solutions that are essential to human progress. Dow has one of the strongest and broadest toolkits in the industry, with robust technology, asset integration, scale and competitive capabilities that enable it to address complex global issues. Dow’s market-driven, industry-leading portfolio of advanced materials, industrial intermediates, and plastics businesses deliver a broad range of differentiated technology-based products and solutions for customers in high-growth markets such as packaging, infrastructure, and consumer care. Dow is a subsidiary of DowDuPont (NYSE: DWDP), a holding company comprised of Dow and DuPont with the intent to form three strong, independent, publicly traded companies in agriculture, materials science and specialty sectors.<br><br>
  More information can be found at <a href="https://www.dow.com/">www.dow.com</a>.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'The Science to Your Success. A career with us is an invitation to explore, create and make valuable con­tributions to human progress. We have some of the world’s best scientists and innovators dedicated to solving world challenges through innovation. Find out how we do it at <a href="http://www.dowcampus.com/">www.dowcampus.com</a>.<br><br>In addition we offer: <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>The opportunity to carve out a unique and vibrant career</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Reward and recognition for strong performance</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Comprehensive benefits</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>An inclusive culture and diverse workforce that is empowered by authenticity, respect and equity for everyone</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Opportunity to participate in any of our 10 Employee Resource Groups as an enabler for personal growth and business success</td>
  </tr>
  </table>');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Innovators and team-players who want to utilize their skills and share our passion to make a difference. We look for people with an open and respectful mind who are flexible, mobile, and willing to grow their careers in an inclusive environment across the globe.<br><br>International opportunities in EMEAI include: <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Research & Development </td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Technical Service and Development</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Marketing & Sales </td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Supply Chain</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Environment, Health & Safety</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Sustainability</td>
  </tr>
  </table>');

  
$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;


include('../0_template/template.php');



?>