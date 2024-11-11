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


$template['company_name'] = 'Mettler Toledo';
$template['company_name_short'] = 'mettlertoledo';
$template['logo_url'] = set_source($awss3.'/companies/mettlertoledo/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.mt.com/ch/de/home.html','mt.com');
$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://ch.linkedin.com/company/mettlertoledo','Mettler-Toledo International, Inc');


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

   'text' => '…a global leader in precision instruments and services. We are renowned for innovation and quality across laboratory, process analytics, industrial, product inspection,
and food retailing solutions. As the world’s premier provider of precision instruments
and software, our products are pivotal in research, quality control, and manufacturing
processes in life sciences, food, chemical, and many other industries.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '… challenging positions, attractive working conditions and good training opportunities in an innovative and world-leading high-tech company. Our diverse portfolio
extends across a wide range of laboratory and analytical instruments, sensors and
automated chemistry systems critical in drug discovery and chemical development. In
production and packaging, our advanced check-weighing, metal detection, and X-ray
systems set industry standards. A leader in weighing and dimensioning solutions, we
provide comprehensive automation capabilities for industrial applications globally.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => '… motivated personalities who are always ready to develop further, who are open
to new ideas and who enjoy working in a dynamic environment and realising their
potential.');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Kim Mercandetti',
    'img_url' => $awss3.'/companies/mettlertoledo/interviewee_2024_1',
    'position' => 'Service Specialist and Trainer UV/VIS',
  
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
        'answer' => 'Ich bin Kim Mercandetti und habe mein Bachelorstudium in Chemieingenieurwissenschaften sowie das Masterstudium in Biologie- und Chemieingenieurwissenschaften an der ETH Zürich absolviert. Im Anschluss an mein Studium habe ich die Stelle als «Service Specialist and Trainer UV/VIS» bei METTLER TOLEDO angetreten.  <br> METTLER TOLEDO ist ein führender, global agierender Hersteller von analytischen Präzisionsinstrumenten, Messtechnologien und Dienstleistungen für Anwendungen im Labor, der Industrie und im Handel. Unsere Firmenkultur beruht auf viel persönlichem Engagement und bietet unseren Mitarbeitenden die Freiheit, eigene Ideen zu entwickeln, sich innerhalb des Unternehmens zu entfalten und zu verwirklichen.',
      ),
      1 => array(
        'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
        'answer' => 'Ich habe bereits während meiner Praktika mit den Produkten von METTLER TOLEDO gearbeitet und fand die breite Produktpalette von Waagen, über thermische und chemische Analyse zu Produktinspektion (um nur einiges zu nennen) faszinierend. Nach aktiver Jobsuche bei METTLER TOLEDO hat mich dann der Jobinhalt selber aber auch die gesamte Arbeitsatmosphäre und Weiterentwicklungsmöglichkeiten überzeugt. Zudem hat es vom Arbeitsort (Zürich Oerlikon > Nänikon; S14) gut gepasst.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => 'Wir bieten diverse Möglichkeiten z.B. als Application Specialist, als Product Manager usw. Wir bieten aber auch immer wieder interessante Internships in diesen Bereichen an.',
      ),
      3 => array(
        'question' => 'Welche Studiengänge stellen Sie bevorzugt ein? Gibt es spezielle Einstiegsprogramme oder Praktika, die Sie anbieten?',
        'answer' => 'In meiner Abteilung der analytischen Chemie haben wir vermehrt Chemiker und Chemieingenieure aber auch Lebensmittel- und Materialwissenschaftler. Da die Aufgaben selten zu 100% mit der Tätigkeit in einem klassischen Akademielabor vergleichbar sind, sind aber auch noch viele weitere Fähigkeiten wichtig. Sofern ein Grundverständnis für Chemie vorhanden ist und man offen für Neues ist, hat man sehr gute Voraussetzungen.',
      ),
      4 => array(
        'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
        'answer' => 'Fähigkeiten (nebst dem gefragten Ausbildungsprofil): bspw. analytisches Denken, komplexe Inhalte verstehen, Flexibilität, Eigeninitiative, Innovative Ideen.',
      ),
      5 => array(
        'question' => 'Mit welchen Problemen/Fragestellungen befassen Sie sich aktuell in Ihrem Unternehmen?',
        'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Neuentwicklung von Produkten inkl. Hardware-, Software-, Methoden- und Serviceentwicklung.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Pflege der installierten Basis.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Sales- und Kundensupport.</td>
        </tr>
        </table>',
      ),
      6 => array(
         'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
         'answer' => 'Die GreenMT Strategie unterstützt die Mission des Unternehmens, indem sie Prioritäten in den Bereichen Umwelt, Gesellschaft und Unternehmensführung setzt, in denen wir viel Positives bewirken können. Details sind in unserem Sustainability-Report auf unserer Website www.mt.com zu finden.',
      ),
      7 => array(
         'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
         'answer' => 'Der operative Hauptsitz der Firma ist in Nänikon-Greifensee (ZH). Hier befinden sich auch ein grosser Teil der Produktentwicklung (R&D and Manufacturing Center) und der Vertrieb an Schweizer (Market Head Office).',
      ),
      8 => array(
         'question' => 'Welche Möglichkeiten bieten Sie für die berufliche Weiterentwicklung und Fortbildung Ihrer Mitarbeitenden?',
         'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Viele interne Fortbildungen im Hinblick auf Personal Skills möglich (bspw. Project Management, Design Thinking).</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Sprachkurse.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Auch externe Weiterbildungen und Kurse werden unterstützt.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Am Schweizer Standort: Young Professional Circle (YPC): METTLER TOLEDO bietet die Möglichkeit, sich durch dieses Programm schnell in die Organisation zu integrieren und das Know-How sowie das funktionsübergreifende Verständnis zu erweitern. Das Programm bietet die Möglichkeit das Senior Management und das HR zu treffen, um im Unternehmen sichtbarer zu werden und das eigene Netzwerk zu erweitern.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Am Schweizer Standort: Mentoring Program.</td>
        </tr>
        </table>',
      ),
      9 => array(
         'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
         'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Offene, unterstützende und willkommene Du-Kultur.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Super angenehme Arbeitsatmosphäre und direkte Kommunikationswege.</td>
        </tr>
        </table>',
      ),
      10 => array(
         'question' => 'Bietet Ihr Unternehmen Vorteile neben der Arbeit z.B. GA/Sport- und Freizeitmöglichkeiten?',
         'answer' => 'Fussball, Unihockey, Schwimmen, Lauf- und Bikegruppen, Firmentriathlon, finanzielle Unterstützung bei Fitnessabo um nur eine Auswahl zu nennen.',
      ),
      11 => array(
         'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
         'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Nach dem Bewerbungseingang wird deine Bewerbung mit der Linie geprüft und du wirst zu einem ersten telefonischen Gespräch mit einem Talent Acquisition Spezialisten eingeladen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Das weitere Gespräch findet via MS-Teams mit dem Hiring Manager und dem HR statt: Erstes Kennenlernen, Vorstellung des Unternehmens und der offenen Position, typische HR Fragen an dich.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Das abschliessende Gespräch (hängt von der Position ab): Präsentation vor neuem Team, Kennenlernen des Teams, abschliessende Fragen klären mit dem Hiring Manager und HR.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Gute Vorbereitung (wie für jedes andere Bewerbungsgespräch auch).</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Saubere und vollständige Bewerbungsunterlagen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Vergiss nicht, das Interesse beruht auf Gegenseitigkeit! Du möchtest deine Gegenüber und die Position auch kennenlernen – nutze die Möglichkeit Fragen zu stellen.</td>
        </tr>
        </table>',
      ),
      12 => array(
         'question' => 'Wie können interessierte Studierende und Absolventen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
         'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Wir sind an diversen Karrieremessen und Hochschul-Events vertreten.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Du kannst dich in unserem Talent-Pool registrieren.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Du kannst dich für den Job-Alert registrieren, so wirst du über alle neuen Stellen informiert.</td>
        </tr>
        </table>',
      ),
    ),
  );

include('../0_template/template.php');


?>
