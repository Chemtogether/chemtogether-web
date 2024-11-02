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


$template['company_name'] = 'Lonza';
$template['company_name_short'] = 'lonza';
$template['logo_url'] = set_source($awss3.'/companies/lonza/logo','png', FALSE);
$template['package'] = 'gold';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Lonza ist heute ein weltweit führendes Unternehmen im Bereich Life Sciences, welches auf drei Kontinenten tätig ist.
Unsere wichtigste wissenschaftliche Lösung sind talentierte Mitarbeitende, die zusammenarbeiten und Ideen entwickeln, die anderen Unternehmen helfen, Menschen zu helfen. Im Gegenzug steuern unsere Mitarbeitenden ihre Karriere selbstständig. Denn ihre Ideen, ob gross und klein, verbessern die Welt.
');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Zu Lonza kommen Menschen, die Herausforderungen annehmen und mit ihrer Kreativität im Bereich Life Science
neue Ideen für komplexe Problemstellungen entwickeln. Zusammen leisten wir einen Beitrag, der das Leben vieler Menschen auf der ganzen Welt verbessern kann. Dies bietet ihnen die
Gewissheit und die Zufriedenheit, mit der eigenen Arbeit wirklich einen Unterschied zu machen.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Für unsere Standorte in Basel, Stein und Visp suchen wir Fachkräfte aus allen Bereichen der Life Science. Es er-
wartet Sie das Beste aus zwei Welten: Ein Hightech-Arbeitsplatz mit inspirierenden Kollegen und ein unvergleichlicher Lifestyle.
');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 2;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Barbara Stoessel',
    'img_url' => $awss3.'/companies/lonza/interviewee_2024_1',
    'position' => 'MSAT (Manufacturing Sciences and Technologies)',
  
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
        'question' => 'Bitte stelle Lonza Visp kurz vor: Welche Schwerpunkte und Ziele gibt es?',
        'answer' => 'Der Lonza-Standort, an dem ich arbeite, befindet sich in Visp, im deutschsprachigen Teil des Wallis, und ist der älteste sowie grösste weltweit. Dieser Standort konzentriert sich auf Forschung, Entwicklung und Herstellung von pharmazeutischen Produkten, insbesondere von Arzneimitteln. Zu den in Visp produzierten Erzeugnissen zählen unter anderem kleine Moleküle, hochwirksame Wirkstoffe, Peptide sowie Biokonjugate wie Antikörper-Wirkstoff-Konjugate (ADCs). Darüber hinaus werden sowohl biopharmazeutische Produkte auf Säugetier- als auch auf mikrobieller Basis hergestellt. Die vielseitigen Einrichtungen am Standort Visp ermöglichen eine enge Zusammenarbeit zwischen den verschiedenen Abteilungen und schaffen wertvolle Synergien.',
      ),
      1 => array(
        'question' => 'Warum hast du dich damals für Lonza entschieden?',
        'answer' => 'Ich wusste schon früh, dass ich im Pharmabereich arbeiten möchte, da es mir wichtig ist, etwas Positives zum Leben anderer Menschen beizutragen. Ein weiterer entscheidender Aspekt war für mich, in einem grösseren Unternehmen tätig zu sein. Lonza, als globales Unternehmen mit ausgezeichnetem Ruf als CDMO, bot mir genau diese Möglichkeit. Zudem bietet Lonza hervorragende Einstiegschancen nach dem Studium, und die geografische Lage in einer sonnigen Region zwischen den Bergen fand ich ebenfalls sehr ansprechend.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Lonza für Studierende sowie Absolventinnen und Absolventen im Bereich Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => 'Bei Lonza gibt es eine Vielzahl an Junior-Stellen, was besonders vorteilhaft ist, wenn man frisch von der Uni kommt und noch keine Erfahrung in der Industrie hat. Es gibt die Möglichkeit, in verschiedenen Bereichen wie Quality Assurance, Quality Control, MSAT oder Produktion einzusteigen, was eine grosse Vielfalt an Optionen bietet. Ein weiterer Vorteil ist die Möglichkeit sich intern weiterzuentwickeln und sich auf bestimmte Bereiche spezialisieren zu können, was langfristige Karrieremöglichkeiten innerhalb des Unternehmens schafft.',
      ),
      3 => array(
        'question' => 'Welche Wahlfächer und Schwerpunkte hast du gewählt, welche nun für deinen Beruf hilfreich sind?',
        'answer' => 'Ich habe ein Chemiestudium abgeschlossen, und mein Hintergrund als organische Chemikerin ist in meiner täglichen Arbeit äusserst hilfreich. Zum Beispiel verstehe ich dadurch besser, wie chemische Prozesse ablaufen und kann dementsprechend Laborexperimente aufsetzen und gestalten. Auch das Anleiten und Betreuen von Laboranten wird dadurch erleichtert. Was ich besonders betonen möchte, ist, dass es viele "Learning on the Job"-Erfahrungen gibt. Die Offenheit und Bereitschaft kontinuierlich dazu zu lernen ist wichtig. Egal wie gut man sich vorbereitet oder wie viele Wahlfächer man belegt – in der Praxis ist vieles anders. Es ist wichtig, sich davon nicht abschrecken zu lassen, sondern diese Herausforderungen anzunehmen.',
      ),
      4 => array(
        'question' => 'In welchen Regionen/Länder ist Lonza tätig und welche Möglichkeiten international Erfahrung zu sammeln siehst du?',
        'answer' => 'Lonza verfügt über mehrere Standorte in mehr als 30 Ländern weltweit. Das Unternehmen bietet die Möglichkeit, zwischen den Standorten zu wechseln, sodass man beispielsweise eine Rotation machen und für ein paar Jahre ins Ausland gehen kann. Obwohl ich nicht genau weiss, wie dieser Prozess im Detail abläuft, ist es eine sehr wertvolle Chance, die die Vorteile eines internationalen Unternehmens deutlich unterstreicht. Solche Möglichkeiten ermöglichen nicht nur berufliche Weiterentwicklung, sondern auch wertvolle interkulturelle Erfahrungen.',
      ),
      5 => array(
        'question' => 'Welche Möglichkeiten für beruflichen Fort- und Weiterbildung bietet Lonza?',
        'answer' => 'Lonza bietet ein breites Spektrum an internen Weiterbildungsmöglichkeiten, darunter zahlreiche Mentoring- und Coachingprogramme sowie die eigene Schulungsplattform "Learn@Lonza". Darüber hinaus gibt es die Gelegenheit, an Konferenzen und Workshops teilzunehmen. Wenn Mitarbeitende den Wunsch haben, sich weiterzubilden, und dies ihrer beruflichen Entwicklung dient, wird dies von Lonza aktiv unterstützt. Solche Massnahmen fördern die persönliche und fachliche Weiterentwicklung und stärken die Karrierechancen innerhalb des Unternehmens.',
      ),
      6 => array(
         'question' => 'Wie würdest du die Unternehmenskultur beschreiben? ',
         'answer' => 'Lonza fördert Kreativität und Innovation und ist sehr aufgeschlossen gegenüber neuen Technologien und Konzepten. Ein weiterer starker Aspekt der Unternehmenskultur ist die Zusammenarbeit und das Gemeinschaftsgefühl. Man fühlt sich als Teil eines Teams und arbeitet eng zusammen, was ich besonders schätze. Diese Kultur des Zusammenhalts und der Offenheit schafft ein angenehmes Arbeitsumfeld, in dem Ideen und Teamarbeit gefördert werden.',
      ),
      7 => array(
         'question' => 'Kannst du mir kurz beschreiben was Small Molecules macht und welche Projekte derzeit am Laufen sind?',
         'answer' => 'Small Molecules ist ein Geschäftsbereich von Lonza, der sich auf die Herstellung von Zwischenprodukten und Wirkstoffen für Arzneimittel spezialisiert hat. Die Bandbreite an Projekten und Anwendungen ist dabei sehr vielfältig. So arbeiten wir beispielsweise an Medikamenten zur Krebsbehandlung, aber auch an Medikamenten gegen viele weitere Erkrankungen. Diese Vielfalt macht den Bereich besonders spannend. Alle Projekte verfolgen das gemeinsame Ziel, das Leben der Patienten zu verbessern und ihre Gesundheit zu fördern.',
      ),
      8 => array(
         'question' => 'Wie ist es im Wallis zu leben und zu arbeiten?',
         'answer' => 'Das Leben im Wallis ist grossartig. Am Anfang musste ich mich zwar etwas an den Dialekt gewöhnen, aber ich habe mich sofort in der Region und auch bei der Arbeit willkommen gefühlt. In meiner Freizeit geniesse ich es, wandern zu gehen und die lokalen Traditionen zu entdecken. Das Wetter ist hier ebenfalls (meistens) schön! (lacht)',
      ),
    ),
  );
  
  $template['interview'][$i++] = array(
    'name' => 'Leonardo Jakob Nannini',
    'img_url' => $awss3.'/companies/lonza/interviewee_2024_2',
    'position' => 'Betriebschemiker',
  
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
        'question' => 'Bitte stelle Lonza Visp kurz vor: Welche Schwerpunkte und Ziele gibt es?',
        'answer' => 'Lonza ist eine Contract Development and Manufacturing Organization (CDMO), bei der Pharmaunternehmen ihre Produkte entwickeln und herstellen lassen können. Das Unternehmen ist stark kundenorientiert und bietet eine breite Palette an Services, von der Frühphasen-Entwicklung bis hin zu grossskaligen Produktionsprozessen. Es gibt eine grosse Vielfalt an Projekten, von Biologics bis Small Molecules. Ich arbeite im Bereich Small Molecules, speziell im FCC, wo wir auf die grossskalige Produktion fokussiert sind, während die Entwicklung in kleineren Massstäben bereits früher erfolgt.',
      ),
      1 => array(
        'question' => 'Warum hast du dich damals für Lonza entschieden?',
        'answer' => 'Ich begann vor 2 Jahren bei Lonza, da mich Prozessentwicklung und -chemie schon immer stark interessiert haben. Damals habe ich mich nach Stellen umgesehen und bin durch einen Kontakt auf Lonza gestossen, wo ich eine Position im Manufacturing gefunden habe. Der Wechsel war ein grosser Schritt für mich, da ich direkt in die Produktion ging, was sehr spannend war. Es war definitiv anders als meine Arbeit an der ETH und im Postdoc. Dort arbeitet man in kleinen Gruppen im Labor, während man hier mit grösseren Projektteams zusammenarbeitet und viel aktiver sein muss, um das Projekt voranzubringen.',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Lonza für Studierende sowie Absolventinnen und Absolventen im Bereich Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => 'Lonza bietet vielfältige Möglichkeiten für ein breites Spektrum an Fachbereichen: von Chemie und Chemieingenieurwesen bis hin zu Manufacturing. Das Unternehmen ist in die Bereiche Small Molecules und Biologics unterteilt. Small Molecules konzentriert sich auf organische Chemie und beinhaltet auch viel Engineering, was besonders für Chemiker interessant ist. Gleichzeitig bietet der Biologics-Bereich, der stark wächst, spannende Chancen für Biologen und Biochemiker. Zudem gibt es die Bioconjugates-Abteilung, in der Chemie und Biologie zusammenkommen. Die Einstiegsmöglichkeiten sind sehr vielfältig und bieten Raum für Entwicklung in unterschiedlichen Bereichen.',
      ),
      3 => array(
        'question' => 'Welche Wahlfächer und Schwerpunkte hast du gewählt, welche nun für deinen Beruf hilfreich sind?',
        'answer' => 'Für meine Tätigkeit bei Lonza sind alle Fächern nützlich und anwendbar. Dabei lässt sich keins besonders hervorheben. Ich habe Interdisziplinäre Naturwissenschaften studiert und meine Wahlfächer in Richtung organische Chemie gewählt. Wichtig ist, Fächer zu wählen, die einen wirklich interessieren, und auch solche, in denen man sich verbessern kann, um den Horizont zu erweitern. Am Ende zählt die Offenheit gegenüber anderen Bereichen. Auch als organischer Chemiker sollte man flexibel sein, besonders im Engineering-Bereich, und nicht starr auf den eigenen Fachbereich beharren.',
      ),
      4 => array(
        'question' => 'In welchen Regionen/Länder ist Lonza tätig und welche Möglichkeiten international Erfahrung zu sammeln siehst du?',
        'answer' => 'Lonza ist international stark vertreten und bietet in vielen Ländern Entwicklungsmöglichkeiten. Es gibt die Chance, sich weiterzuentwickeln und an einem Exchange-Programm teilzunehmen. Ich finde, dass das Angebot vor allem in der Schweiz besonders stark ist, man hat immer die Möglichkeit, sich intern bei Lonza zu bewegen und neue Chancen zu ergreifen.',
      ),
      5 => array(
        'question' => 'Welche Möglichkeiten für beruflichen Fort- und Weiterbildung bietet Lonza?',
        'answer' => 'Bei Lonza gibt es viele interne Möglichkeiten zur Weiterentwicklung. Jeder Mitarbeitende gibt an, wo seine Stärken und Schwächen liegen, welche Ziele verfolgt werden und in welchen Bereichen eine Weiterbildung gewünscht ist. Manche wollen im aktuellen Job bleiben, andere streben einen Aufstieg oder einen Wechsel in einen anderen Bereich an. Auch wenn man nicht immer völlig frei entscheiden kann, besteht meist die Möglichkeit, sich in die gewünschte Richtung zu entwickeln.
        Im Bereich Small Molecules kann man ebenfalls in andere Abteilungen wechseln und dabei viel Neues lernen. Die verschiedenen Bereiche sind sehr unterschiedlich, sowohl in ihrer Arbeitsweise als auch in den Herausforderungen, die sie mit sich bringen.',
      ),
      6 => array(
         'question' => 'Wie würdest du die Unternehmenskultur beschreiben?',
         'answer' => 'Lonza ist sehr familiär und die Arbeit ist stark auf Teamarbeit ausgerichtet. Wir arbeiten eng im Team zusammen, teilen die Verantwortung und bringen gemeinsam Projekte voran. Es ist besonders wichtig, ein guter Teamplayer zu sein und effektiv zu kommunizieren. Auch kulturell ist Lonza spannend, da am Standort in Visp über 70 Nationalitäten vertreten sind, was ein internationales und vielfältiges Arbeitsumfeld schafft.',
      ),
      7 => array(
         'question' => 'Kannst du mir kurz beschreiben was Small Molecules macht und welche Projekte derzeit am Laufen sind?',
         'answer' => 'Die Projekte, an denen wir arbeiten, sind vertraulich, daher können wir nicht im Detail darüber sprechen. Im FCC (Fine Chemical Complex) arbeiten wir jedoch auf einer grossindustriellen Skala mit 10-Kubikmeter-Reaktoren, um Materialien für den kommerziellen Einsatz zu produzieren. Viele grosse Pharmafirmen wenden sich an Lonza, um Kapazitäten für die Produktion ihrer Wirkstoffe (APIs) zu nutzen, und wir entwickeln dann Vorschläge, wie das am effizientesten umgesetzt werden kann. Ist das Produkt einmal auf dem Markt, lassen sich Produktionsprozesse nur schwer ändern, aber es gibt immer noch Spielraum, um die Effizienz zu maximieren, was sowohl aus wirtschaftlicher als auch aus umwelttechnischer Sicht wichtig ist. Unser Ziel ist es, Abfälle und Lösungsmittel zu reduzieren und so den Umwelteinfluss zu minimieren, während wir gleichzeitig so effizient wie möglich arbeiten.',
      ),
      8 => array(
         'question' => 'Wie ist es im Wallis zu leben und zu arbeiten?',
         'answer' => 'Im Wallis zu leben ist grossartig, wobei es natürlich Geschmackssache ist, wie man die Region empfindet. Ich komme aus Bellinzona, wo eine ähnliche Atmosphäre herrscht. Hier gibt es viele Möglichkeiten und Aktivitäten, und man muss die Natur und die Berge mögen. Die Region ist sehr vielfältig, und man ist schnell überall, da die Zugverbindungen im Wallis hervorragend sind.',
      ),
    ),
  );

include('../0_template/template.php');

?>
