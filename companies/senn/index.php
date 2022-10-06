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

$template['company_name'] = 'Senn Chemicals AG';
$template['company_name_short'] = 'senn';
$template['logo_url'] = set_source($awss3.'/companies/senn/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.senn.com','senn.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/sennchem/','Senn Chemicals AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/senn';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are providing custom manufacturing services to pharmaceutical, biotechnology, diagnostic and cosmetic companies 
  worldwide since 1963. Founded by Guido Senn in Dielsdorf, near Zurich,
  Switzerland, Senn Chemicals\' focus today is on the manufacturing of peptides, peptide fragments, amino acid derivatives and small molecules.
  We are cGMP approved and have been inspected by US FDA:');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'At Senn, we enjoy working in an atmosphere of a big family in a team of 22 different nations. We offer you
  a collegial working environment, an uncomplicated first-name policy and flat hierachies as well as the
  opportunity to self-develop in various departments. Senn Chemicals is within walking distance to various
  shops, sports centers and public transport.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for highly motivated and enthusiastic individuals, who would like to join our company and 
  establish in a professional environment and further to help us providing the expertise to achieve 
  excellent solutions even for challenging synthetic requirements.');

  $template['button_print_until'] = 0; 
  $template['interview_print_until'] = 0;
  // if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;
 
include('../0_template/template.php');

?>