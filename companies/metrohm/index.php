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
    "title"        => "Interview with Dr. Vincent Diederich from Metrohm - Chemtogether",
    "desc"         => "Dr. Vincent Diederich works as Production Engineer & Interim Department Head at the Department of Separation Column Production at Metrohm. Learn more about his career and work in his interview, and meet Metrohm at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/metrohm_20181001.jpg",
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
$template['company_name'] = 'Metrohm';
$template['company_name_short'] = 'metrohm';
$template['logo_url'] = set_source($awss3.'/companies/metrohm/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');
$template['archive'] = '/archive/metrohm';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Metrohm is a high-tech company headquartered in Herisau, Switzerland, with 42 subsidiaries all around the globe. Our high-precision instruments for chemical analysis are among the best in the world. We are growing faster than the market and outperform our competitors; in our main business, titration, we are the global number one.</br> Of our more than 2200 employees, 550 are working at our International Headquarters in Herisau, and every third person there works in R&amp;D.</br> We are independent: Metrohm is owned by the charitable Metrohm foundation; profits are reinvested in the company and used to support philanthropic projects.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer you challenging, highly rewarding opportunities at the interface between chemistry, electronics, software engineering, and our global customers. Young talents with a «can-do» attitude get the chance to take on responsibility quickly.</br> People, who come to work for us enjoy a stimulating working environment. We are easy-going, we have various different backgrounds – and we are passionate to develop the best analytical instruments in the world. Our campus-like headquarters in Herisau were built in 2011 and offer state-of- the-art work places.</br> We are growing fast, but our business model is sustainable; jobs at Metrohm do not depend on the whims of investors.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young talents eager to start their career as a<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>chemist / chemical engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>software engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>electronics engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>design engineer</td>
  </tr>
  </table>');


$template['interview_print_until'] = 0;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
  
  
include('../0_template/template.php');

?>