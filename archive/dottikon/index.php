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

$active_nav = 'archive';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );


$template['company_name'] = 'Dottikon';
$template['company_name_short'] = 'dottikon';
$template['logo_url'] = $awss3_archive.'/dottikon/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://dottikon.com/','dottikon.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/dottikon-exclusive-synthesis-ag/','Dottikon Exclusive Synthesis AG');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'We are the Specialist for Hazardous, Safety-Critical Chemical Reactions with a strong emphasis on technology-driven Research &amp; Development and Scale-up. A custom manufacturer of APIs and advanced intermediates for the pharmaceutical and industrial industries around the globe, we pursue a one-site strategy in Switzerland that covers the full range from lab scale all the way to multi-ton production. DOTTIKON employs over 550 employees, 14% of whom hold a Ph.D. in chemistry.',
  'We are the Specialist for Hazardous, Safety-Critical Chemical Reactions with a strong emphasis on technology-driven Research &amp; Development and Scale-up. A custom manufacturer of APIs and advanced intermediates for the pharmaceutical and industrial industries around the globe, we pursue a one-site strategy in Switzerland that covers the full range from lab scale all the way to multi-ton production. DOTTIKON employs over 550 employees, 14% of whom hold a Ph.D. in chemistry.');
$template['we_offer'] = array(
  'Our one-site strategy creates a unique environment that allows for rapid response times to customer inquiries, fast decision taking and on-site production. You will have access to all the plants and equipment where your chemistry will be implemented. As a demanding, dynamic and performance-driven company, we offer flat hierarchies, clear structures, competences and responsibilities in a constructive and open working environment.',
  'Our one-site strategy creates a unique environment that allows for rapid response times to customer inquiries, fast decision taking and on-site production. You will have access to all the plants and equipment where your chemistry will be implemented. As a demanding, dynamic and performance-driven company, we offer flat hierarchies, clear structures, competences and responsibilities in a constructive and open working environment.');
$template['we_look'] = array(
  'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative and good communication skills. The ability to work independently and accurately is just as important as your motivation to deliver outstanding results.',
  'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative and good communication skills. The ability to work independently and accurately is just as important as your motivation to deliver outstanding results.');



  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Ulrich Neuenschwander',
    'img_url' => set_source($awss3_archive.'/dottikon/interviewee_2017_1', 'png', FALSE),
    'position' => array('Leiter Methodenvalidierung', 'Head of Method Validation'),

    'education' => array(
      0 => array(
        'date' => '2003-2008',
        'desc' => array('BSc und MSc ETH Chemie','BSc und MSc ETH Chemistry')
      ),
      1 => array(
        'date' => '2008-2011',
        'desc' => array('ETH Zürich Doktorat bei Prof. Dr. Ive Hermans','ETH Zürich PhD with Prof. Dr. Ive Hermans')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2013-2014',
        'desc' => array('Projektleiter QM Methodenvalidierung','Project Leader WA method validation')
      ),
      1 => array(
        'date' => '2014',
        'desc' => array('Leiter Methodenvalidierung','Head Method Validation')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Leiter Methodenvalidierung bei DOTTIKON?",
          "What do you do as Head of Method Validation at Dottikon?"),
        'answer' => array(
          "DOTTIKON stellt Pharmawirkstoffe für Medikamente her. In meiner Rolle bin ich für gut ein Dutzend Mitarbeiter zuständig. Meine Gruppe ist Teil der Qualitätsabteilung und arbeitet unter cGMP-Vorgaben. Unsere Aufgabe ist, Analysenmethoden für neu entwickelte Pharmawirkstoffe zu validieren. Konkret heisst das, dass chromatographische, spektroskopische oder nasschemische Methoden, welche intern oder extern entwickelt wurden, vor deren Einsatz im Routinebetrieb auf Herz und Nieren geprüft werden. Mittels experimentellen Daten zeigen wir, dass die Methoden für deren Einsatzzweck geeignet sind, um z.B. die Reinheit eines Wirkstoffs abzubilden.",
          "Dottikon produces active pharmaceutical ingredients (APIs) for drugs. In my role, I supervise roughly a dozen employees. My group is part of the quality department and always works according to cGMP standards. Our task is to validate methods of analysis for newly developed APIs. This means that chromatographic, spectroscopic or chemical methods, which were developed internally or externally, are checked thoroughly before they are cleared for routine use. Using experimental date, we show that the methods are suitable for their purpose, e.g. determining the purity of a compound.")
      ),
      1 => array(
        'question' => array(
          "Arbeiten Sie hauptsächlich in Dottikon oder sind Sie international tätig?",
          "Are you mainly working in Dottikon or is your position a more international one."),
        'answer' => array(
          "Unsere Firma verfolgt eine Einstandortstrategie, deswegen arbeite ich vorwiegend in Dottikon. Da alles an einem Standort ist, lernt man aus nächster Nähe die verschiedenen Aspekte einer Pharmaproduktion kennen. Man sieht wirklich alles: Entwicklung, Validierung, Kleinmengenproduktion bis hin zur Multitonnen-Produktion. Da unsere Kunden international aufgestellt sind, finden regelmässig länderübergreifende Telefonkonferenzen statt.",
          "Our company has a single-site policy, therefore I am usually working in Dottikon. Since everything is on one site, you can experience first-hand all the aspects of the pharmaceutical production. You can really see everything: Research&ampDevelopment, Validation, small-scale production all the way up to the multi-ton scale production. Since our customers are spread all over the world, we regularly have international phone conferences.")
      ),
      2 => array(
        'question' => array(
          "Sie sind bei DOTTIKON als Projektleiter in der Methodenvalidierung eingestiegen, was waren da Ihre Aufgaben?",
          "You started at Dottikon as Project Leader in Method Validation, what were your responsibilities at that time?"),
        'answer' => array(
          "Inhaltlich waren es die gleichen Aufgaben die ich jetzt auch bearbeite. Als Projektleiter war ich damals aber vermehrt operativ tätig und stand deshalb auch noch ab und zu im Labor. Zudem war ich für eine kleinere Zahl an Projekten verantwortlich, dafür aber in grösserer Detailtiefe.",
          "Overall, the responsibilities were the same as in my current position. As Project Leader I was working much more operatively and was occasionally standing myself at the lab bench. Also the number of project I was responsible for, was smaller, but in turn I was involved in much more detail.")
      ),
      3 => array(
        'question' => array(
          "Gibt es bei DOTTIKON Möglichkeiten als Chemiker innerhalb der Teilbereiche zu wechseln, z.B. von F&ampE in die Produktion oder ins Marketing?",
          "Are there possibilities within Dottikon to change fields, for instance from research&ampdevelopment to production or marketing?"),
        'answer' => array(
          "Natürlich gibt es Möglichkeiten, sich weiterzuentwickeln, je nach persönlichem und fachlichem Hintergrund. Nicht alle Wechsel sind dabei gleich leicht. Wenn man im Bereich Qualität oder in der F&E einsteigt, hat man sicher gute Voraussetzungen für einen Wechsel in andere Abteilungen. Man sollte sich aber bewusst sein, dass es für einen Abteilungswechsel einen gereiften Entschluss braucht. Ein stetiges Springen zwischen Fachgebieten macht keinen Sinn und ist nicht dem Ziel zuträglich, sich in einem spezifischen Gebiet zum Spezialisten zu entwickeln.",
          "Of course, there are possibilities to develop oneself within Dottikon, depending on your personal and professional background. Not all interchanges are equally easy. If you start out in Quality or R&ampD, you surely have a good foundation for a move in to different departments. One should always bear in mind, that such a change should be considered very carefully. It does not make sense to bounce around between departments and it does not help you to achieve your goal to become an expert in your chosen field.")
      ),
      4 => array(
        'question' => array(
          "Was hat Sie dazu bewegt, sich DOTTIKON als Arbeitgeber auszusuchen? Haben Sie sich auf eine ausgeschriebene Stelle oder initiativ beworben?",
          "What made you choose Dottikon as an employer? Did you apply on an advertised position or was it a speculative application?"),
        'answer' => array(
          "Ich habe die Website dottikon.com/jobs besucht und dort eine interessante Stellenausschreibung gesehen. Im nächsten Schritt habe ich mit einem Bekannten, welcher bereits bei DOTTIKON arbeitete, geredet und mich über das Arbeitsklima in der Firma informiert. Daraufhin habe ich mich beworben.",
          "I visited dottikon.com/jobs and saw an interesting job listing there. The next step was to talk to an acquaintance who already worked at Dottikon. I informed myself about the working atmosphere and applied soon after.")
      ),
      5 => array(
        'question' => array(
          "Gibt es Möglichkeiten sich aus erster Hand ein Bild von der Arbeit bei DOTTIKON zu machen, z.B. durch Praktika oder Kollaborationen mit Universitäten?",
          "Are there possibilities to get some first-hand experience at Dottikon, either through internships or collaborations with universities?"),
        'answer' => array(
          "Wir bevorzugen Kandidaten, die den Direkteinstieg wagen, d.h. sich für eine ausgeschriebene Stelle eigenverantwortlich bewerben. Wenn keine passende Stelle ausgeschrieben ist, besteht jedoch auch die Möglichkeit, sich spontan zu bewerben, da wir immer fähige Chemiker und andere Mitarbeitende suchen.",
          "We prefer candidates who dare to dive in head first into the job, meaning that they apply for an advertised position of their own volition. If there is no suitable position advertised, there is of course the possibility of a speculative application, since we are always looking for capable chemists or employees in general.")
      ),
      6 => array(
        'question' => array(
          "In Ihrer Doktorarbeit am ICB (ETH) haben Sie sich mit dem Mechanismus und der Kinetik der radikalischen Autooxidation von Terpenen beschäftigt. Haben Ihnen diese Erfahrungen bei Ihren Aufgaben bei DOTTIKON geholfen?",
          "In your PhD-Thesis at the ICB (ETH) you explored the mechanism and kinetics of the radicalic autooxidation of terpenes. Did these experiences help you with your responsibilities at Dottikon?"),
        'answer' => array(
          "Ich habe Reaktionsmechanismen mittels einer Kombination von Experimenten, ab initio Rechnungen und kinetischen Modellierungen untersucht. Beim experimentellen Teil war es unabkömmlich, sich ein genaues Bild über den Reaktionsverlauf zu machen. Dies konnte ich mittels analytischen Methoden bewerkstelligen, welche präzise und genaue Resultate liefern, wie zum Beispiel GC, HPLC, Spektroskopie. Seit der Doktorarbeit hat sich die Analytik für mich mehr und mehr vom Arbeitsinstrument zum Arbeitszweck gewandelt.",
          "I studied reaction mechanism with a combination of experiments, ab initio calculations and kinetic modelling. During the experimental part it was vital to get a very detailed picture of the reaction pathway. I could achieve this, using analytical methods, which provide precise and accurate results, like GC, HPLC and spectroscopy. Since my PhD-thesis analytics has change more and more from a tool to the purpose of my work.")
      ),
      7 => array(
        'question' => array(
          "Wie gross war die Umstellung als Sie nach Ihrem Postdoktorat zu DOTTIKON gewechselt haben? Wird in der Industrie anders gearbeitet als an der Universität?",
          "How big was the change after your PostDoc when you came to Dottikon? Does one work different in industry compared to university?"),
        'answer' => array(
          "Ich habe die Zeit an der Universität als sehr intensiv erlebt. Um massgeblich an qualitativ hochstehender Forschung beteiligt zu sein, braucht es einen grossen persönlichen Einsatz. Wenn man sich also gewohnt ist, mit Einsatz, Freude und Lernwille bei der Sache zu sein, wird man auch in der Industrie erfolgreich sein. Das Schöne an einer Industriekarriere ist, dass man als Teil eines grossen, interdisziplinären Teams arbeitet und sich nicht als Einzelkämpfer durchschlagen muss.",
          "I experienced my time at university very intensively. To be a significant part of excellent research, you have to make a significant personal investment. So if you are used to be focussed on your task with commitment, joy and a will to learn, you will be able to succeed in industry as well. One of the bonuses of an industry career is that you are a part of a big, interdisciplinary team and you are not a solitary fighter.")
      ),
      8 => array(
        'question' => array(
          "DOTTIKON produziert sehr viele Produkte, die cGMP-zertifiziert sind. Welche besonderen Anforderungen stellt dies an die Qualitätssicherung?",
          "DOTTIKON produces a lot of products, that have to be certified according to cGMP. Which are the special challenges this poses to QA?"),
        'answer' => array(
          "Die Herausforderung besteht u.a. darin, dass die Gesetzgebung (oder deren Auslegung) permanent im Fluss ist. Es braucht also eine gewisse Flexibilität, und man muss die Prozesse in der Firma regelmässig den externen Rahmenbedingungen anpassen. Zentral ist auf alle Fälle eine wissenschaftliche Auswertung der erhobenen Daten und eine nachvollziehbare Dokumentation der daraus gezogenen Schlüsse.",
          "The challenge lies among other thing in the fact, that the laws (or their interpretation) is constantly changing. So there is a certain need for flexibility and the processes within the company need to be constantly updated according to the external circumstances. At the heart of this there is a need for a scientific evaluation of the recorded data and a precise documentation of the drawn conclusions.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What advice would you give to a 'fresh' ETH graduate who is looking for a job?"),
        'answer' => array(
          "Erstens: Anstatt die Jobsuche auf Grossfirmen zu beschränken, sollten sie vermehrt auch die Angebote von mittelständischen Betrieben prüfen. Das spannende an mittelständischen Betrieben ist, dass man sehr rasch Verantwortung übernehmen und einiges bewirken kann.<br>
          Zweitens: Sie sollen den Mut haben, ihre Fähigkeiten richtig einzuschätzen und sich dabei nicht von blumigen Formulierungen abschrecken lassen, welche in einem Stelleninserat unter der Rubrik 'Voraussetzungen' erwähnt werden.",
          "First: Instead of focussing only on big companies, you should seriously consider medium-sized companies. The fascinating thing about medium-sized companies is that you can very soon take responsibility and really make a difference.<br>
          Second: You should have the courage to correctly assess your qualifications and don’t be intimidated by the flowery language used in the category 'requirements' in a job posting.")
      ),
    ),
  );


include('../0_template/template.php');

?>
