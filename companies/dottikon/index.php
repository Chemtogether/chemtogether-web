
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
$template['company_name'] = 'DOTTIKON ES';
$template['company_name_short'] = 'dottikon';
$template['logo_url'] = set_source($awss3.'/companies/dottikon/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://dottikon.com/','dottikon.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/dottikon-exclusive-synthesis-ag/','Dottikon Exclusive Synthesis AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/dottikon';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the Specialist for Hazardous, Safety-Critical Chemical Reactions with a strong
emphasis on technology-driven Research & Development and Scale-up. A custom
manufacturer of APIs and advanced intermediates for the world’s leading chemical,
biotech, and pharmaceutical industry, we pursue a one-site strategy in Switzerland
that covers the full range from lab scale all the way to multiton production.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'Our one-site strategy creates a unique environment that allows for rapid response
times to customer inquiries, fast decision taking and on-site production. You will have
access to all the plants and equipment where your chemistry will be implemented. We
offer flat hierarchies, clear structures, competences, and responsibility in a constructive and open working environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative, and good communication skills. The
ability to work independently and accurately is just as important as your motivation
to deliver outstanding results.');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Patrick Gäumann',
    'img_url' => $awss3.'/companies/dottikon/interviewee_2024_1',
    'position' => 'Junior Projektleiter Process QA',
  
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
        'question' => 'Bitte stellen Sie sich und Ihr Unternehmen kurz vor. Welche Schwerpunkte und Ziele verfolgen Sie? ',
        'answer' => 'Mein Name ist Patrick Gäumann und ich arbeite als Junior Projektleiter Process QA bei DOTTIKON ES. Wir stellen primär Wirkstoffe und Zwischenstufen für die Pharmaindustrie her. Veredelungschemikalien für industrielle und landwirtschaftliche Anwendungen werden auch von uns produziert, machen aber einen deutlich kleineren Teil des Nettoumsatzes aus. In meiner Funktion bin ich vor allem dafür zuständig, den Einfluss von Abweichungen im Herstellungsprozess auf die Produktqualität zu beurteilen.',
      ),
      1 => array(
        'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
        'answer' => 'DOTTIKON ES bietet Universitätsabgängern und -abgängerinnen die Möglichkeit Erfahrungen im GMP-Umfeld zu sammeln. Es ist ein stark wachsendes Unternehmen, bei dem ich die Chance gesehen habe, mich zusammen mit der Firma zu entwickeln und schon früh Verantwortung zu übernehmen. Ausserdem hatte ich während des Bewerbungsprozesses das Gefühl, dass innerhalb des Unternehmens ein familiärer Umgang und eine angenehme Arbeitsatmosphäre herrschen.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften? ',
        'answer' => 'DOTTIKON ES wächst momentan sehr stark, deshalb gibt es viele Jobs für Chemiker und Chemieingenieure mit unterschiedlichsten Interessen. Die ausgeschriebenen Stellen sind auf der Homepage www.dottikon.com einsehbar.',
      ),
      3 => array(
        'question' => 'Welche Studiengänge stellen Sie bevorzugt ein? Gibt es spezielle Einstiegsprogramme oder Praktika, die Sie anbieten? ',
        'answer' => 'DOTTIKON ES bietet Arbeitsstellen für eine Vielzahl von Studiengängen. Neben Chemikerinnen und Chemieingenieuren auch für Maschinenbauer und Studierende chemieverwandter Fächer (z.B. Pharmatechnik, Biochemie, Wirtschaftschemie, Pharmazie usw.). Des Weiteren bietet die Dottikon ES Praktika ab sechs Monaten Laufzeit in diversen Bereichen der Unternehmung an. Um mehr Informationen über ein Praktikum bei der DOTTIKON ES zu erhalten, können Sie sich bei der Personalabteilung melden.',
      ),
      4 => array(
        'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
        'answer' => 'Das ist abhängig von der ausgeschriebenen Stelle. Generell werden Menschen gesucht, die analytisch denken, zuverlässig und genau arbeiten, teamfähig sind und sich in Deutsch und Englisch verhandlungssicher (C1) ausdrücken können.',
      ),
      5 => array(
        'question' => 'Gibt es spezifische akademische Hintergründe oder Erfahrungen, die bevorzugt werden? Im Hinblick auf Wahlfächer? Semesterarbeiten in Forschungen? Teamarbeit? Case Studies?',
        'answer' => 'Es werden keine spezifischen Kenntnisse bevorzugt, aber ein gutes Basiswissen in organischer Chemie ist immer hilfreich in unserem Unternehmen. Generell ist uns wichtig, dass die Passion für die bisherige, eigene Arbeit spürbar ist.',
      ),
      6 => array(
         'question' => 'Mit welchen Problemen/Fragestellungen befassen Sie sich aktuell in Ihrem Unternehmen? ',
         'answer' => 'Als Custom Development and Manufacturing Organization (CDMO) und Spezialist für sicherheitskritische Reaktionen erarbeiten wir in der Prozessentwicklung die bestmöglichen Syntheserouten zur Herstellung von pharmazeutischen Wirkstoffen und entwickeln diese zu sicher skalierbaren, robusten, wirtschaftlichen und nachhaltigen Herstellprozessen für unsere Pilot- und Produktionsanlagen. Parallel dazu entwickeln wir die notwendigen analytischen Methoden, um die Herstellprozesse zu überwachen und um die Qualität der Zwischen- und Endprodukte kontrollieren zu können. Darüber hinaus unterstützen wir die Produktion bei eingeführten Produkten bis zum Ende deren Lebenszyklus.',
      ),
      7 => array(
         'question' => 'Können Sie Einblicke in aktuelle Forschungs- und Entwicklungsprojekte Ihres Unternehmens geben? Eventuell auch Kooperationen in der Forschung mit der ETH?',
         'answer' => 'Als CDMO arbeiten wir zusammen mit unseren Kunden weltweit an der Entwicklung und Optimierung der Herstellprozesse für deren Produkte. Dies sind normalerweise neue pharmazeutische Wirkstoffe oder deren Intermediate, welche sich zu Beginn meist noch in der klinischen Erprobung befinden. Wir können in unseren Prozessentwicklungs- und analytischen Laboren ungefähr 30 Entwicklungsprojekte gleichzeitig bearbeiten. Mit der ETH sind wir durch Workshops und gegenseitige Vorträge im Austausch.',
      ),
      8 => array(
         'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
         'answer' => 'Eine ausführliche Beschreibung des Engagements von DOTTIKON ES in Bezug auf Nachhaltigkeit und Umweltschutz ist im Sustainablility Report aufgeführt. Dieser kann auf der Homepage eingesehen werden. Grundsätzlich wird versucht, Prozesse so effizient wie möglich zu entwickeln, um Ressourcen zu sparen und die CO2-Emissionen möglichst gering zu halten.',
      ),
      9 => array(
         'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
         'answer' => 'DOTTIKON ES verfolgt eine Einstandortstrategie. Mit Ausnahme von einigen Sales Managern in den USA befinden sich alle Arbeitsplätze in Dottikon im Aargau.',
      ),
      10 => array(
         'question' => 'Welche Möglichkeiten bieten Sie für die berufliche Weiterentwicklung und Fortbildung Ihrer Mitarbeitenden?',
         'answer' => 'Die persönlichen Entwicklungsmöglichkeiten werden jährlich während der Standortbestimmung besprochen. DOTTIKON ES unterstützt die berufliche Entwicklung seiner Mitarbeitenden durch interne und externe Schulungen. Ausserdem fördert das Unternehmen den internen Stellenwechsel, wenn sich Mitarbeitende beruflich neu orientieren möchten.',
      ),
      11 => array(
         'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
         'answer' => 'Die Unternehmenskultur ist darauf ausgelegt, das Wissen der einzelnen Mitarbeitenden bestmöglich zu nutzen. In Meetings kommen alle zu Wort, unabhängig von ihrer Position innerhalb der Hierarchie. Das Ziel ist gemeinsam die ideale Lösung zu Problemen zu finden und so einen Mehrwert für den Kunden zu generieren. Deshalb ist die Unternehmenskultur geprägt durch eine offene und direkte Kommunikation. ',
      ),
      12 => array(
         'question' => 'Bietet Ihr Unternehmen Vorteile neben der Arbeit z.B. GA/Sport- und Freizeitmöglichkeiten? ',
         'answer' => 'Es befinden sich Duschen auf dem Firmengelände, sodass die Möglichkeit besteht, sich über den Mittag sportlich zu betätigen. Das Unternehmen stellt jeweils mit den Hazardous Runners ihr eigenes SOLA-Stafetten-Team. Ausserdem bietet DOTTIKON ES seinen Mitarbeitenden viele Aktionen, Vergünstigungen, eine eigene Kantine mit abwechslungsreichen Menus zu Vorzugspreisen und freie Parkplätze zur Nutzung. Der Standort, der sich direkt neben dem Bahnhof befindet, zeichnet sich durch seine gute Erreichbarkeit mit dem Auto sowie den öffentlichen Verkehrsmitteln aus. In der Betriebsfeuerwehr kann man sich zusätzliche Fertigkeiten aneignen und sein Netzwerk innerhalb der Firma stärken und ausbauen.',
      ),
      13 => array(
         'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
         'answer' => 'Der Bewerbungsprozess für Universitätsabgänger setzt sich aus zwei Runden zusammen. Die erste Runde umfasst eine kurze Einführung zur DOTTIKON ES und Gespräche mit mehreren Mitarbeitenden, darunter zumindest der zukünftige Vorgesetzte und die Vertretung der Personalabteilung. Des Weiteren wird meistens in einer der beiden Runden ein Rundgang durchgeführt, bei dem man unter anderem einen Eindruck vom Arbeitsplatz erhält. Eine gute Vorbereitung ist essenziell. Bewerbende sollten sich sowohl mit dem Unternehmen auseinandersetzen als auch überzeugende Antworten zum eigenen Werdegang bereithalten. Man sollte sich authentisch geben und auf seine Intuition hören.',
      ),
      14 => array(
         'question' => 'Wie können interessierte Studierende und Absolventen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
         'answer' => 'Interessierte Studierende und Absolventen können DOTTIKON ES auf LinkedIn, Facebook und Instagram folgen. Ausserdem sind offene Stellen auf der Homepage sowie den gängigen Stellenportalen ausgeschrieben.',
      ),
    ),
  );

include('../0_template/template.php');
?>