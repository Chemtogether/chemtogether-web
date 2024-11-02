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

$template['company_name'] = 'BACHEM';
$template['company_name_short'] = 'bachem';
$template['logo_url'] = set_source($awss3.'/companies/bachem/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.bachem.com/','bachem.com');
$template['linkedin'] = array('https://www.linkedin.com/company/bachem/','Bachem');

$template['archive'] = '/archive/bachem';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The Swiss based Bachem Group is specialized in the development and manufacturing of pepTide- and oligonucleoTide-based active pharmaceutical ingredients. With 50 years of experience and a global reach, the group is the partner of choice for the biotech and pharma industry. Bachem attaches the utmost importance to quality, innovation and partnership. Bachem. Leading Partner in Tides.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer graduates with a diploma or doctoral degree the possibility to apply their
knowledge, gain initial experience in a variety of areas and benefit from the know-
how of our experienced employees within a highly collaborative environment with a
respectful attitude.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young, committed and fully qualified graduates, holding a diploma
or already in possession of a doctoral degree, who would like to join our company
and establish in a professional environment, to secure our long-term success and
maintain market leadership.');


$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Ruben Wälchli',
    'img_url' => $awss3.'/companies/bachem/interviewee_2024_1',
    'position' => 'Senior Scientist in der Abteilung QC Early Phase',
  
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
        'answer' => 'Mein Name ist Ruben Wälchli und ich arbeite als Senior Scientist in der Abteilung QC Early Phase bei der Bachem. Die Bachem ist führend in der Entwicklung und Herstellung von Peptiden und Oligonukleotiden, welche dann als Wirkstoffe in Medikamenten eingesetzt werden.',
      ),
      1 => array(
        'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
        'answer' => 'Mir war Bachem schon seit meiner Zeit an der ETH Zürich (unter anderem durch das Chemtogether) als Unternehmen bekannt. Als sie dann eine Stelle ausgeschrieben hatte, welche sich mit meiner Erfahrung und meinen Interessen deckte, habe ich mich beworben.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => 'Die Bachem hat regelmässig Stellen für Absolventen dieser Studienrichtungen ausgeschrieben. Diese bieten einen hervorragenden Einstieg in die pharmazeutische Industrie und für talentierte, motivierte Mitarbeitende eröffnen sich dann in der Regel Möglichkeiten der Weiterentwicklung, z.B. zum Fachexperten oder zur Führungskraft.',
      ),
      3 => array(
        'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
        'answer' => 'Das Kerngeschäft der Bachem ist die chemische Synthese von Peptiden und Oligonukleotiden, welche dann als Wirkstoffe für Pharmazeutika eingesetzt werden. Somit sind Kenntnisse in der Synthese, Aufreinigung und/oder Analyse von solchen Molekülen für Bewerber garantiert zentral.',
      ),
      4 => array(
        'question' => 'Gibt es spezifische akademische Hintergründe oder Erfahrungen, die bevorzugt werden? Im Hinblick auf Wahlfächer? Semesterarbeiten in Forschungen? Teamarbeit? Case Studies?',
        'answer' => 'In meiner Abteilung wäre es sicher praktische Erfahrung mit state-of-the-art analytischen Techniken wie UHPLC, hochauflösender Massenspektrometrie, NMR, etc. Idealerweise angewandt auf Peptide und/oder Oligonukleotide. Zusätzlich wären bereits gewisse Kenntnisse in der guten Herstellpraxis (GMP) und den zugehörigen Richtlinien ein grosser Vorteil. Auf der persönlichen Ebene ist die Teamfähigkeit essentiell, da jedes Projekt eine Teamleistung darstellt.',
      ),
      5 => array(
        'question' => 'Mit welchen Problemen/Fragestellungen befassen Sie sich aktuell in Ihrem Unternehmen?',
        'answer' => 'Die von unseren Kunden nachgefragten Moleküle werden zusehends komplexer. Das stellt auch die Analytik vor immer grössere Herausforderungen. Deshalb müssen wir uns stetig weiterentwickeln und unter anderem neue, leistungsfähige analytische Technologien routinetauglich machen.',
      ),
      6 => array(
         'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
         'answer' => 'Nachhaltigkeit und Umweltschutz sind für Bachem sehr wichtige Themen. Diese werden zum Beispiel durch effizientere Herstellprozesse, welche weniger organische Lösemittel verbrauchen, adressiert. Bachem wurde ausserdem von der Ratingagentur EcoVadis mit einem hervorragenden Nachhaltigkeitsrating ausgezeichnet.',
      ),
      7 => array(
         'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
         'answer' => 'Die Bachem hat Standorte in der Schweiz, den USA, Grossbritannien und Japan. Es ergeben sich für Mitarbeitenden immer wieder Möglichkeiten, um bei Interesse auch an einen anderen Standort zu wechseln.',
      ),
      8 => array(
         'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
         'answer' => 'Trotz der mittlerweile schon erreichten Grösse der Unternehmung, bleiben die Wege meist kurz und viele Sachen können unbürokratisch schnell umgesetzt werden. Ausserdem schätze ich die gegenseitige Hilfsbereitschaft unter den Mitarbeitenden, auch über Abteilungs- und Bereichsgrenzen hinweg.',
      ),
      9 => array(
         'question' => 'Bietet Ihr Unternehmen Vorteile neben der Arbeit z.B. GA/Sport- und Freizeitmöglichkeiten?',
         'answer' => 'Bachem bietet unter anderem Zugang zur Vorteilsplattform Swibeco mit attraktiven Rabatten bei vielen externen Firmen. Am Standort gibt es zudem ein vielfältiges, kostenloses Sportprogramm mit täglichen Kursen.',
      ),
      10 => array(
         'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
         'answer' => 'Bei uns in der Abteilung findet in der Regel zuerst ein telefonisches Interview statt. Wenn danach weiterhin Interesse besteht, dann werden Bewerber meistens zu einem persönlichen Interview inklusive Präsentation und Kennenlernen vom Team eingeladen. Wichtig ist sicher, dass man dabei klar zeigen kann, dass man für die Stelle relevante Erfahrung mitbringt und dass man sich positiv in das Team einfügen kann.',
      ),
      11 => array(
         'question' => 'Wie können interessierte Studierende und Absolventen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
         'answer' => 'Absolventenmessen wie das Chemtogether sind sicher eine ideale Plattform. Zusätzlich sind auf unserer Website immer die aktuellen Karrierechancen publiziert.',
      ),
    ),
  );

include('../0_template/template.php');

?>