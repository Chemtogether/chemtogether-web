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


$template['company_name'] = 'EMS';
$template['company_name_short'] = 'ems';
$template['logo_url'] = set_source($awss3.'/companies/ems/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.ems-group.com','ems-group.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/ems-group/','EMS Group');
// $template['mail'] = array('','');
$template['archive'] = '/archive/ems';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The EMS Group is active worldwide in the business areas High Performance Polymers and Specialty Chemicals. The companies within the group are consolidated in the EMS-CHEMIE HOLDING AG domiciled in Domat/Ems.<br>The business area High Performance Polymers is comprised of EMS-GRIVORY and EMS-EFTEC. EMS-GRIVORY is a leading specialised manufacturer of high-performance polyamides and the supplier with the widest range of polyamide materials. EMS-EFTEC is represented under the name EFTEC as leading supplier worldwide for adhesives, sealants and coatings including application engineering systems for the automotive industry.<br>The business area Specialty Chemicals is made up of the Business Units EMS-GRILTECH and EMS-PATVAG. EMS-GRILTECH is specialized in the development and production of fibres, fusible adhesives and adhesive yarn for technical and textile applications, adhesion promoters for the tyre industry, powder coatings and reactive diluents. EMS-PATVAG specialises in ignitors for airbag gas generators.<br>EMS has 26 production sites in 16 countries and is represented throughout the world with company-owned sales companies or by distributors/traders. As of December 2017, the EMS Group has 2,912 employees worldwide with 135 apprentices based in Switzerland.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'Besides jobs we also offer internships in the following areas for high school graduates, students and graduates: laboratory (chemistry), business economics, application technology, engineering/system technology/IT as preparation for the ETH.<br>We offer you fair conditions of employment, a salary based on performance and function as well as an individual support and mentorship through hands-on training. In addition, EMS is characterised by a well-defined and lively corporate culture.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are searching for committed and qualified employees to strengthen our leading technological position and to produce products fulfilling the highest quality requirements. We expect a strong innovative drive and the will to achieve the extraordinary from our employees. We promote and demand a high degree of identification with the company and its goals to ensure future success of our strategies.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;



include('../0_template/template.php');



?>
