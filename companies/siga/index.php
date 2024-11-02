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


$template['company_name'] = 'SIGA';
$template['company_name_short'] = 'siga';
$template['logo_url'] = set_source($awss3.'/companies/siga/logo','jpeg', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.siga.swiss/ch_de','siga.swiss');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/sigaswiss/','SIGA');


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

   'text' => 'SIGA, a Swiss family-owned company
with over 650 employees across 24
countries, develops, manufactures,
and educates on products for energy-efficient building envelopes, including diffusion-permeable membranes
and non-toxic adhesive tapes. Tight
building envelopes protect against uncontrolled air exchange, reduce energy
consumption for heating and cooling,
and contribute to combating climate change.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => '<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>Taking on responsibility:</b> After a thorough induction, personal development is specifically promoted and responsibility is transferred</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>SIGA culture:</b> Unique culture of learning and continuous improvement. Promotion of creativity through Scrum and open space working</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>Meaningful work:</b> Using breakthrough technologies to reduce energy consumption and CO2 emissions from buildings, avert climate catastrophe and add value to society</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td><b>An environment that encourages innovation:</b> Focused work with state-of-the-art tools, both on site in stylish premises and at home</td>
  </tr>
  </table>');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are seeking innovative minds in
materials science with a passion for exploring the properties and applications
of advanced materials. <br>
If you are driven by curiosity, enjoy interdisciplinary collaboration, join us to
push the boundaries of material technology and make a lasting impact on
the future of science and engineering.');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Melvin Renggli',
    'img_url' => $awss3.'/companies/siga/interviewee_2024_1',
    'position' => '',
  
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
        'answer' => 'Die SIGA entwickelt und produziert wohngiftfreie, alterungsbeständige Hochleistungsprodukte, um Gebäude aller Arten luft- und winddicht zu halten. Somit entsteht ein Mehrwert durch höheren Wohnkomfort, tieferen Energieverbrauch und langfristiger Werterhaltung. Mit unserer Vision streben wir nach einer Welt, in der Gebäude keine Energie verschwenden. <br>
         Die Entwicklung fokussiert sich dabei auf unterschiedliche Klebstoff-Systeme, sowie verschiedenste Trägermaterialien von Klebebändern, Dampfbremsen und verwandten Produkten für den Innen- und Aussenbereich. Mit ihrer Produkt-Palette bietet SIGA eine System-Lösung für jede Anwendung. <br>
         Das Familienunternehmen legt seit bald 60 Jahren grossen Wert auf Innovation und die Anliege seiner Kunden. So verbringen unsere Entwicklungs-Teams beispielsweise viel Zeit auf der Baustelle, um die Probleme und Bedürfnisse der Verarbeitenden genau zu verstehen und die perfekte Lösung zu erarbeiten.',
      ),
      1 => array(
        'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
        'answer' => 'SIGA ist regional tief verankert und steht seit jeher für höchste Qualität. Zudem wurde der Produktionsstandort Schweiz vor wenigen Jahren mit einer neuen Produktionshalle inklusive neuem Entwicklungslabor gestärkt. Die starke Förderung von eigener Innovation und Nachhaltigkeit machen die SIGA zu einem Unternehmen der Zukunft. <br>
         Als Arbeitgeber bietet die SIGA viele Vorteile, sei es mit flexiblen Arbeitszeiten, Vergünstigungen bei Versicherungen und Autokauf, oder auch Tickets für die Spiele des FC Luzern. Regelmässige Team-Events fördern den Zusammenhalt. Die Unternehmenskultur ist einfach einzigartig.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => 'Prinzipiell ist die Führungsstruktur flach gehalten. Mitglieder der Entwicklungs-Teams geniessen hohe Entscheidungsfreiheiten. Ebenfalls werden strategische Führungspositionen durch interne Mitarbeitende besetzt. Dadurch entsteht bereits sehr früh die Chance, Verantwortung zu übernehmen.',
      ),
      3 => array(
        'question' => 'Welche Studiengänge stellen Sie bevorzugt ein? Gibt es spezielle Einstiegsprogramme oder Praktika, die Sie anbieten?',
        'answer' => 'Da wir uns grundsätzlich mit Polymeren beschäftigen, sind in der Produktentwicklung vorwiegend Personen aus Chemie und Materialwissenschaft tätig. <br>
         Die SIGA verfügt über ein breites Angebot an Trainee-Programmen, welche auch individuell zusammengestellt werden. Dabei können auch Stationen im Ausland besucht werden. Praktika oder Diplomarbeiten sind nach Absprache grundsätzlich jederzeit möglich.',
      ),
      4 => array(
        'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
        'answer' => 'Fachlich qualifiziert ist grundsätzlich jede und jeder Hochschul-Abgänger/-in aus den Bereichen Chemie, Biochemie, Chemieingenieurswesen und Materialwissenschaft. Teamfähigkeit ist sehr wichtig, da wir jeden Tag eng mit allen Entwicklungsfachpersonen zusammenarbeiten. Des Weiteren ist pragmatisches Denken gefragt, da (trotz aller Normen und Vorgaben) nicht immer alles schwarz—weiss ist. Damit einher sollte auch eine hohe Kommunikationsbereitschaft gehen.',
      ),
      5 => array(
        'question' => 'Gibt es spezifische akademische Hintergründe oder Erfahrungen, die bevorzugt werden? Im Hinblick auf Wahlfächer? Semesterarbeiten in Forschungen? Teamarbeit? Case Studies?',
        'answer' => 'Jegliches Vorwissen in organischer Chemie ist hilfreich. Vertieftes Wissen in Analyse und Verarbeitung von Polymeren ist grundsätzlich wünschenswert. Exkurse in Mechanik Bauwesen (z.B. am D-BAUG oder D-MATL) sind hilfreich, aber nicht zwingend notwendig. Erfahrung in Forschungsteams, sei es akademisch oder industriell, sind sicher von Vorteil.',
      ),
      6 => array(
         'question' => 'Mit welchen Problemen/Fragestellungen befassen Sie sich aktuell in Ihrem Unternehmen?',
         'answer' => 'Unsere Klebstoffe sind unser Aushängeschild. Entsprechend entwickeln wir sie immer weiter und suchen nach alternativen Technologien, gerade zum Thema Nachhaltigkeit. Für den Klebstoff werden ständig Träger neu- und weiterentwickelt. Weiter steht die Entwicklung von Dampfbremsen im Fokus. Hier versuchen wir, ständig auf dem neusten Stand der Anforderungen oder schon weiter zu sein. <br>
         Die SIGA hat beispielsweise 2016 eine diffusionsvariable Dampfbremse (die Majrex) auf den Markt gebracht. Sie besitzt als einzige Dampfbremse eine richtungsabhängige Dampfdurchlässigkeit. Ganz aktuell ist das Beispiel «Trestard». Als Reaktion auf den Brand des «Grenfell Tower» in London werden in Grossbritannien die Brandschutzmassnahmen in Gebäuden erhöht. Die SIGA hat innerhalb kürzester Zeit ein Klebeband mit Brandschutzklasse B – also schwer entflammbar – entwickelt und auf den Markt gebracht. Damit wurde ein grosses Kundenbedürfnis schnell und hochwertig gelöst.',
      ),
      7 => array(
         'question' => 'Können Sie Einblicke in aktuelle Forschungs- und Entwicklungsprojekte Ihres Unternehmens geben? Eventuell auch Kooperationen in der Forschung mit der ETH?',
         'answer' => 'Wir sind in allen oben genannten Punkten, also Klebstoffe sowie Träger- und Linerentwicklung sowohl intern, als auch mit internationalen Partnern bestrebt die neuesten Trends, welche unseren Kunden den entscheidenden Fortschritt bieten, in unsere bestehenden und neuen Produkten einzubringen. Verständlicherweise dürfen wir keine detailierten Informationen zu laufenden Projekten veröffentlichen. Leider bestehen zurzeit keine Forschungsprojekte mit der ETH.',
      ),
      8 => array(
         'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
         'answer' => 'Mit unserer Unternehmens-Vision will die SIGA den Energieverbrauch in jeglichen Gebäuden minimieren. Durch die Produkte wird der Bau von energie-autarken Gebäuden ermöglicht. Allein dadurch setzt sich die SIGA für Nachhaltigkeit ein. Weiter setzen wir auf höchste Qualität und entwickeln Produkte mit einer Lebensdauer von mindestens 50 Jahren. Zudem verzichtet die SIGA auf Lösungsmittel, VOC und schädliche Weichmacher in den Produkten.',
      ),
      9 => array(
         'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
         'answer' => 'Forschung und Entwicklung, sowie die Produktion befinden sich ausschliesslich in der Schweiz. Im Verkauf sind Schulungsleiter und Anwendungstechniker weltweit im Einsatz. Die wissenschaftliche Tätigkeit im Ausland beschränkt sich demnach auf Besuche bei internationalen Lieferanten oder Messen.',
      ),
      10 => array(
         'question' => 'Welche Möglichkeiten bieten Sie für die berufliche Weiterentwicklung und Fortbildung Ihrer Mitarbeitenden?',
         'answer' => 'Weiterbildungsmöglichkeiten werden bei der SIGA grossgeschrieben. Etliche interne Module ermöglichen einen grossen fachspezifischen Wissensaufbau. Fachseminare und -messen können und sollen regelmässig besucht werden. Langfristige externe Weiterbildungen werden immer unterstützt.',
      ),
      11 => array(
         'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
         'answer' => 'Die Unternehmenskultur ist einzigartig. Die Entwicklungs-Teams arbeiten eng zusammen. Jede/r im Team ist der/dem anderen gleichgestellt. Team-Events und firmenübergreifende Anlässe sorgen für Auflockerung und freundschaftliche Verhältnisse untereinander. <br>
         Im Arbeitsalltag suchen wir ständig nach Verbesserungsmöglichkeiten. Dadurch steht das Unternehmen nie still und Störfaktoren können schnell eliminiert werden. Sogenannte «Retros» geben dem Team die Möglichkeit, Probleme im Alltag offen anzusprechen und gemeinsam zu lösen. Damit entwickelt sich auch das Team selbst immer weiter.',
      ),
      12 => array(
         'question' => 'Bietet Ihr Unternehmen Mobilität an Standorte in unterschiedlichen Ländern an?',
         'answer' => 'Geschäftsreisen sind immer vollständig vom Unternehmen gedeckt. Nach Möglichkeit stehen Geschäftswagen zur Verfügung.',
      ),
      13 => array(
         'question' => 'Bietet Ihr Unternehmen Vorteile neben der Arbeit z.B. GA/Sport- und Freizeitmöglichkeiten?',
         'answer' => 'Die SIGA bietet verschiedene Benefits für Mitarbeitende. Es bestehen Angebote für Paddel-Spiele und SUPs, Tickets für Fussballspiele des FCL und Rabatte von verschiedenen Partnerfirmen. Ausserdem bieten Partner-Deals mit Versicherungen und Autohändlern attraktive Konditionen. Firmeneigene Hardware und Unternehmensfahrzeuge werden jeweils gebraucht zum Vorteilspreis angeboten. <br>
         Für Mitarbeitende mit langem Arbeitsweg steht das SIGA Guesthouse zur Verfügung. Im firmeneigenen Hotel stellt das Unternehmen Zimmer für Übernachtungen vor Ort bereit.',
      ),
      14 => array(
         'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
         'answer' => 'Nach eingegangener Bewerbung wird diese auf die Grundanforderungen hin geprüft. Sind diese erfüllt, so findet ein erstes Videointerview statt. Es dient dem ersten Kennenlernen und zum Austausch der gegenseitigen Erwartungen. Danach folgt ein Bewerbungsgespräch vor Ort, inklusive Fachgespräch. Die passende Person wird zuletzt zu einem Arbeitstag im Team eingeladen. Hierbei soll nicht nur der/die Kandidat/-in bewertet werden, sondern auch vice versa die SIGA als zukünftige Arbeitgeberin.',
      ),
      15 => array(
         'question' => 'Wie können interessierte Studierende und Absolvent/-innen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
         'answer' => 'Wir sind an diversen Fachmessen vertreten. Offene Stellen sind auf unsere Homepage <a href="jobs.siga.swiss">«jobs.siga.swiss»</a>, LinkedIn & Co. aufgeschaltet. Eine unverbindliche Kontaktaufnahme oder Blindbewerbungen sind jederzeit online über unser Kontaktformular möglich.',
      ),
    ),
  );

include('../0_template/template.php');


?>
