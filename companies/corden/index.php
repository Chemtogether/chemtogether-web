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


$template['company_name'] = 'Corden';
$template['company_name_short'] = 'corden';
$template['logo_url'] = set_source($awss3.'/companies/corden/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://cordenpharma.com','cordenpharma.com');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/corden-pharma-gmbh/','Corden Pharma GmbH');


// $template['we_are'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_offer'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_look'] = array(
//   'title' => '',
//   'text' => '');


$template['we_are'] = array(
   'title' => 'We are',

   'text' => 'CordenPharma is one of the leading
Contract Development and Manufacturing Organizations (CDMO) and develops and produces active pharmaceutical ingredients, medicines and
associated packaging services on behalf of its customers as a “full-service” service provider. The group employs around 2,800 people.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Flexible Working Hours, Dynamic and
exciting work environment, Retirement Pension Plan, Hybrid workplace');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'Please check our career website for current opportunities.');

   $template['button_print_until'] = 0; 

   $template['interview_print_until'] = 1;
   if(isset($_GET['preview'])) $template['interview_print_until'] = 0;
 
   $i=0;
   $template['interview'][$i++] = array(
     'name' => 'Simon Loosli',
     'img_url' => $awss3.'/companies/corden/interviewee_2024_1',
     'position' => 'Chemischer Projekt Leiter',
   
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
         'question' => 'Bitte stellen Sie sich und Ihr Unternehmen kurz vor. Welche Schwerpunkte und Ziele verfolgen Sie?',
         'answer' => 'Mein Name ist Simon Loosli und ich arbeite bei Cordenpharma in Liestal als Chemischer Projekt Leiter. Ich habe Chemie studiert und mein PhD bei Helma Wennemers an der ETH Zürich absolviert. Cordenpharma ist ein in Europa und USA tätiges CDMO.',
       ),
       1 => array(
         'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
         'answer' => 'Ich habe ursprünglich eine Lehre als Chemielaborant im Kilolabor in der Roche absolviert. Mein damaliger Chemiker hat mich sehr inspiriert und ich wollte später mal einen Ähnlichen Job machen können. Deshalb habe ich dann Chemie studiert und Cordenpharma hat mir dann genau die passende Stelle geboten.',
       ),
       2 => array(
         'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
         'answer' => 'Wir bieten Positionen in organisch- analytischen Positionen in der «drug product» Entwicklung und Stellen als Prozesschemiker in der Produktion. Weiter gibt es auch Postdoc Positionen.',
       ),
       3 => array(
         'question' => 'Welche Studiengänge stellen Sie bevorzugt ein? Gibt es spezielle Einstiegsprogramme oder Praktika, die Sie anbieten?',
         'answer' => 'Chemie und Chemieenginier bevorzugt mit PhD und Master.',
       ),
       4 => array(
         'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
         'answer' => 'Teamplayer,  Entrepreneurmindset, wissenschaftliche Excellence.',
       ),
       5 => array(
         'question' => 'Gibt es spezifische akademische Hintergründe oder Erfahrungen, die bevorzugt werden? Im Hinblick auf Wahlfächer? Semesterarbeiten in Forschungen? Teamarbeit? Case Studies?',
         'answer' => 'Nein, wir sind an Vielfalt interessiert.',
       ),
       6 => array(
          'question' => 'Mit welchen Problemen/Fragestellungen befassen Sie sich aktuell in Ihrem Unternehmen?',
          'answer' => 'Digitalisierung , Green Chemistry, Effizienzsteigerung in der Prozesschemie, Erweiterung synthetischer Methoden.',
       ),
       7 => array(
          'question' => 'Können Sie Einblicke in aktuelle Forschungs- und Entwicklungsprojekte Ihres Unternehmens geben? Eventuell auch Kooperationen in der Forschung mit der ETH?',
          'answer' => 'Bsp: Synthese diverser Lipide für Moderna zur Entwicklung von «state of the art» Arzneitransportmitteln. Kooperation mit der ETH anvisiert.',
       ),
       8 => array(
          'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
          'answer' => 'Starker Fokus auf grüne nachhaltige effiziente chemische Prozesse im Rahmen von Kundenprojekten.',
       ),
       9 => array(
          'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
          'answer' => 'Wir sind in Europa (Schweiz, Frankreich, Italien, Deutschland und Portugal) und USA (Colorado) vertreten. Austausch innerhalb von Sites etabliert.',
       ),
       10 => array(
          'question' => 'Welche Möglichkeiten bieten Sie für die berufliche Weiterentwicklung und Fortbildung Ihrer Mitarbeitenden?',
          'answer' => 'Generell können Senior Positionen erlangt werden. Auch ist der interne Wechsel in andere Abteilungen, z.B. vom Chemischen Projekt Leiter zum Projektmanager, möglich. Diverse Weiterbildungen werden von Cordenpharma gefördert. Yellow/Green Belt Kurse, Führungs- Kommunikationskurse und extensive fachliche Weiterbildung.',
       ),
       11 => array(
          'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
          'answer' => 'Wir sind als Matrixorganisation in Projektteams aufgebaut und Teamarbeit steht im Vordergrund. Gute Zusammenarbeit ist dabei der Schlüssel zum Erfolg.',
       ),
       12 => array(
          'question' => 'Bietet Ihr Unternehmen Vorteile neben der Arbeit z.B. GA/Sport- und Freizeitmöglichkeiten?',
          'answer' => 'Die Firma bezahlt einen Anteil ans Zugticket. Zudem kann jedes Jahr Reka-Check bezogen werden. Weiter werden diverse Sportveranstaltungen unterstützt (Bsp. Badminton Turnier).',
       ),
       13 => array(
          'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
          'answer' => 'Eine Bewerbung läuft typischerweise in zwei Stufe ab. Ein erstes Interview zum kennenlernen und ein zweites Interview zur fachlichen Vertiefung inkl. einem Standortrundgang.',
       ),
       14 => array(
          'question' => 'Wie können interessierte Studierende und Absolventen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
          'answer' => 'Direkt das lokale HR kontaktieren. Diese freuen sich sehr über eure Kontaktaufnahme.',
       ),
     ),
   );
 
 include('../0_template/template.php');


?>
