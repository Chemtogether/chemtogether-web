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

$template['company_name'] = 'Metrohm AG';
$template['company_name_short'] = 'metrohm';
$template['logo_url'] = set_source($awss3.'/companies/metrohm/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');
$template['archive'] = '/archive/metrohm';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Metrohm is a high-tech company with
60 subsidiaries all around the globe.
Our high-precision instruments for
chemical analysis are among the best
in the world. We are growing faster
than the market and outperform our
competitors; in our main business,
titration, we are the global number
one. We are independent: Metrohm
is owned by the charitable Metrohm
foundation.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'You challenging, highly rewarding opportunities at the interface between
chemistry, electronics, software and
mechanical engineering, and our
global customers. Young talents with
a «cando» attitude get the chance to
take on responsibility quickly. People,
who come to work for us enjoy a stimulating working environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Young talents eager to start their career as a:<table class="fa-table">
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

  $template['button_print_until'] = 0; 
  $template['interview_print_until'] = 0;
  // if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
 
include('../0_template/template.php');

?>