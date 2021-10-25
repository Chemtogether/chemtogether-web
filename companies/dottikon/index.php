
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
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://dottikon.com/','dottikon.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/dottikon-exclusive-synthesis-ag/','Dottikon Exclusive Synthesis AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/dottikon';
$template['we_are'] = array(
  'title' => 'Who we are',
  'text' => 'We are the Specialist for Hazardous, Safety-Critical Chemical Reactions with a strong emphasis on technology-driven Research & Development and Scale-up. A custom manufacturer of APIs and advanced intermediates for the pharmaceutical and industrial industries around the globe, we pursue a one-site strategy in Switzerland that covers the full range from lab scale all the way to multi-ton production.');
$template['we_offer'] = array(
  'title' => 'We offer you',
  'text' => 'Our one-site strategy creates a unique environment that allows for rapid response times to customer inquiries, fast decision taking and on-site production. You will have access to all the plants and equipment where your chemistry will be implemented. As a demanding, dynamic and performance-driven company, we offer flat hierarchies, clear structures, competences, and responsibility in a constructive and open working environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for flexible and committed chemists with a strong team spirit, an entrepreneurial mentality, a sense for initiative, and good communication skills. The ability to work independently and accurately is just as important as your motivation to deliver outstanding results.');
$template['interview_print_until'] = 1;
//if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

$i = 0;

$template['interview'][$i++] = array(
  'name' => 'Dr. Tobias Brütsch',
  'img_url' => $awss3.'/companies/dottikon/interviewee_2021_1',
  'position' => 'Senior Process Chemist R&D',

  'education' => array(
    0 => array(
      'date' => '2012-2016',
      'desc' => 'Ph.D. thesis on "Total Synthesis of Mandelalide A and Synthesis of (-)-Zampanolide Analogs for Structure-Activity Relationship Studies", ETH Zurich (Switzerland), Advisor: Prof. K. H. Altmann',
    ),
    1 => array(
      'date' => '2010-2012',
      'desc' => 'Master Studies in Chemistry, University of Zurich (Switzerland)',
    ),
    2 => array(
      'date' => '2006-2009',
      'desc' => 'Bachelor Studies in Chemistry, ZHAW Wadenswil (Switzerland)',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2016-present',
      'desc' => 'Senior Process Chemist R&D Routefinding, DOTTIKON EXCLUSIVE SYNTHESIS',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'Was ist ihre derzeitige Tätigkeit bei DOTTIKON ES?',
      'answer' => 'Ich bin bei DOTTIKON ES als Senior Process-Chemist in der Forschung und Entwicklung im Bereich Routefinding und Prozessforschung tätig. Dabei beschäftigen wir uns mit der Entwicklung neuer Syntheserouten für pharmazeutische Wirkstoffe oder deren Intermediate. Durch ein optimales Prozessdesign stellen wir die Skalierbarkeit, Sicherheit, Wirtschaftlichkeit und Nachhaltigkeit der neuen Route sicher.',
    ),
    1 => array(
      'question' => 'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
      'answer' => 'Ohren und Augen auf! Die meisten Absolventen machen sich vermutlich schon vor dem Abschluss Gedanken darüber, in welcher Richtung sie sich bewegen wollen. Hat man eine Firma mit einem interessanten Jobinserat im Fokus, sollte man sich so schnell wie möglich bewerben. ',
    ),
    2 => array(
      'question' => 'Wie sieht Ihr klassischer Arbeitstag bei DOTTIKON ES aus?',
      'answer' => 'Den klassischen Arbeitstag gibt es nicht, da wir sehr vielseitige Projekte für unterschiedliche Kunden bearbeiten und jedes Projekt ganz spezifische Herausforderungen mit sich bringt. Auf der Suche nach neuen Routen und während dem Prozessdesign, arbeiten wir meistens im kleinen Team im Labor. Dabei ist mein Arbeitstag geprägt durch Literaturrecherchen und das Planen, Ausführen und Auswerten von Laborexperimenten. Bei weiter fortgeschrittenen Projekten, wie zum Beispiel bei der Vorbereitung einer Produktionskampagne, stehen eher die technischen, organisatorischen und regulatorischen Fragestellungen im Zentrum.',
    ),
    3 => array(
      'question' => 'Wie kam es, dass sie nun für DOTTIKON ES arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
      'answer' => 'Gegen Ende meines Doktorats an der ETH war ich auf der Suche nach einer Stelle in der chemischen Forschung und Entwicklung in der Nähe von Zürich. DOTTIKON ES war mir schon vorher als potenzieller Arbeitsgeber mit einer starken Forschung und Entwicklung bekannt.',
    ),
    4 => array(
      'question' => 'Wie lief ihr Bewerbungsprozess bei DOTTIKON ES?',
      'answer' => 'Der Bewerbungsprozess würde ich als intensiv und effizient beschreiben. Ich erhielt nach jedem der zwei Gespräche eine schnelle Antwort und wurde klar über das weitere Vorgehen informiert.',
    ),
    5 => array(
      'question' => 'Was glauben Sie unterscheidet DOTTIKON ES von anderen Chemiefirmen? Was sind die drei grössten Vorteile von DOTTIKON ES?',
      'answer' => 'Als inhabergeführte Firma verfolgt DOTTIKON ES eine sehr langfristige Strategie, die konsequent auf die Bedürfnisse der Kunden und des Marktes ausgerichtet ist.
      Die Firma hat bewusst nur einen Standort und baut diesen weiterhin mit neuen Produktionsanlagen aus. Das schafft eine natürliche Nähe zwischen den Abteilungen und minimiert Reibungsverluste im Berufsalltag.
      Die Forschung und Entwicklung hat bei DOTTIKON ES einen sehr hohen Stellenwert. Damit ist DOTTIKON ES in der Lage auch für chemisch komplexe Moleküle und anspruchsvolle Transformationen innovative und robuste Prozesse zu entwickeln und diese rasch in die Produktionsanlagen einzuführen.',
    ),
    6 => array(
      'question' => 'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'answer' => 'Nach meinem Masterabschluss in Chemie an der Uni Zürich habe ich an der ETH bei Prof. Altmann promoviert. Dort durfte ich mich mit der Totalsynthese von Naturstoffen befassen. In meiner jetzigen Position bin ich dankbar, auf das chemische Grundwissen aus dem Studium und die Erfahrungen mit komplexen organischen Synthesen aus meiner Doktorarbeit zurückgreifen zu können. Die Herausforderungen im beruflichen Alltag brauchen aber auch spezifisches Fachwissen, Teamfähigkeit, Problemlösungskompetenz und viel Erfahrung.',
    ),
  ),
);


include('../0_template/template.php');
?>