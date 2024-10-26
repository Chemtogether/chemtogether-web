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

$template['company_name'] = 'Medbase Apotheken';
$template['company_name_short'] = 'medbase';
$template['logo_url'] = set_source($awss3.'/companies/medbase/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2022 - Firmen: '.$template['company_name'], 'Chemtogether 2022 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://medbase.ch/','medbase.ch');
//$template['facebook'] = array('');
$template['linkedin'] = array('https://www.linkedin.com/company/medbasegruppe/','Medbase Gruppe');
//$template['mail'] = array('jobs','avantama.com');
//$template['archive'] = '/archive/medbase';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'One team, 3200 colleagues, 62 medical centers, 50 pharmacies and 36 dental centers. Medical, 
  pharmaceutical and therapeutic specialists work hand in hand to provide integrated care from prevention to rehabilitation.
  Become part of our success story.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Join us while you are still studying pharmacy, for example for your internship, your residency or a student job.
  After graduation, you start as a pharmacist at one of our pharmacies. In line with our commitment to promoting the next
  generation of pharmacists, we will help you develop individually - all the way to a management position.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'You want to shift from silo thinking to integrated healthcare with more intensive communication between pharmacies,
  medical centers, therapy and dentistry. Be the first point of contact for almost all health matters, offer health consultations
  and services such as vaccinations, and thus become the hub to the other professionals in the Medbase network.');

$template['button_print_until'] = 0;

$template['interview_print_until'] = 0;
/*
$template['interview'][$i++] = array(
  'name' => 'Julia Gerber',
  'img_url' => $awss3.'/companies/medbase/interviewee_2022_1',
  'position' => 'Federally Certified Pharmacist, Managing Director',

  'education' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),
  
  'interview' => array(
    0 => array(
      'question' => 'What is your current task at Medbase Apotheken AG?',
      'answer' => 'I work as a federally certified pharmacist and as Managing Director of Medbase Apotheke
      Grenchen.',
    ),
    1 => array(
      'question' => 'How does this job differ from a regular working day at the pharmacy and what excites you
      the most about working there?',
      'answer' => 'What I like most about my work at Medbase is the interdisciplinary cooperation. After all,
      a wide range of professionals from the fields of medicine, therapy, pharmacy, and dentistry
      work together at Medbase for the holistic care of our patients. The Medbase pharmacies are
      also being gradually developed into the point of care - the first contact in almost all health
      matters. This means my work is becoming more and more varied, as we offer an increasing
      range of services besides health consultations, such as a cystitis check.',
    ),
    2 => array(
      'question' => 'How does a typical day at Medbase Apotheken AG look like and what makes this job so
      unique?',
      'answer' => 'Every morning, we get together and briefly discuss the day ahead. My team and I take
      care of the orders twice a day, deliver medication and advise customers. We often also carry
      out medical services such as vaccinations, hearing consultations or skin checks. As a
      pharmacist and Managing Director, I check the prescriptions for the correct dosage and
      possible interactions with other medications and handle settlement with the health insurers. ',
    ),
    3 => array(
      'question' => 'How did your studies prepare you for the work you are doing now?',
      'answer' => 'My pharmacy studies and the year of practical assistance prepared me well for my work.
      But of course, you become more confident and proficient in consultation skills the longer you
      work in the pharmacy.',
    ),
    4 => array(
      'question' => 'Which advice would you give to pharmacy students along the way? Which alternatives would
      you recommend besides working in a regular pharmacy?',
      'answer' => 'There are many other employment opportunities for pharmacy students than working in a
      pharmacy, of course, but I find my work at the pharmacy very fulfilling, since I can see the
      direct impact of my work every day. In that respect, I can only recommend this profession to
      others.',
    ),
  ),
);
*/
include('../0_template/template.php');

?>