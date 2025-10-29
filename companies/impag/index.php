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


$template['company_name'] = 'IMPAG AG';
$template['company_name_short'] = 'impag';
$template['logo_url'] = set_source($awss3.'/companies/impag/logo','png', FALSE);
$template['package'] = 'base';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.impag.ch','impag.ch');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
$template['linkedin'] = array('https://www.linkedin.com/company/impag-ag/','IMPAG AG');


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

   'text' => 'IMPAG AG is a leading distribution
company specialized in innovative
chemical, ingredient, and raw materials
solutions, with headquarters in Zürich.
With a strong focus on reliability, quality,
and sustainability, IMPAG offers tailored
solutions and services that meet the
highest standards. Our outstanding
consulting expertise enables our clients
to find the best solutions for their specific
needs.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Picture yourself engaging with R&D
departments across the country and
across various segments, understanding

their challenges, and "nding ideal solu-
tions within our extensive portfolio. You’ll connect with a wide range of chemical
producers, exploring di!erent
functionalities and applications of
their products. Whether your passion
lies in chemical developments, sales,
marketing, or technical support - your role at
IMPAG will be filled with diverse topics and
projects.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are in search of passionate chemists
who thrive on human interaction and
are eager to enhance their commercial,
communication, and negotiation
skills, while providing technically
sophisticated solutions to our customers. Highly motivated and self-driven individuals with a bachelor’s or master’s degree in chemistry or
chemical engineering, envisioning their future beyond the lab, are encouraged to apply.');

$template['button_print_until'] = 0; 
$template['interview_print_until'] = 1;
if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

$template['interview'][$i++] = array(
  'name' => '',
  'img_url' => $awss3.'/companies/impag/logo',
  'position' => 'Senior Sales & Product Manager',

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
      'question' => 'What is your current task at your company? / Was ist Ihre derzeitige Aufgabe in Ihrem Unternehmen?',
      'answer' => 'Ich bin bei IMPAG AG aktuell als Senior Sales & Product Manager im Bereich Performance Chemicals tätig. Dies beinhaltet technische Beratung beim Kunden, Lieferanten- und Product Management. Dabei löst man Herausforderungen der Kunden verschiedenster Art, sei es technischer, regulatorischer oder auch wirtschaftlicher Natur.<br><br>
Dabei bin ich einerseits im Office tätig, andererseits im Aussendienst bei Kunden, an Messen, Veranstaltungen oder auch bei Lieferpartnern. Hauptfokus ist der Schweizer Markt, jedoch zusätzlich die Betreuung einiger Europäischer Key Accounts sowie Lieferpartner weltweit.'
    ),

    1 => array(
      'question' => 'Why did you decide to work at your company and what did the application process look like? / Warum haben Sie sich entschieden, in Ihrem Unternehmen zu arbeiten, und wie sah der Bewerbungsprozess aus?',
      'answer' => 'Für mich war bereits bei der Wahl des Studiums klar, dass ich nicht in die F&E gehen möchte. Daher habe ich Wirtschaftschemie an der UZH studiert, um mein Interesse an den Naturwissenschaften mit der Realwirtschaft zu verbinden. Bei der IMPAG AG kann man dies als Sales & Product Manager im Chemiebereich natürlich perfekt umsetzen.<br><br>
Da bereits ein ehemaliger Kommilitone bei IMPAG arbeitete, hatte ich bereits einen ersten Einblick in die Tätigkeiten.<br><br>
Nach einem ersten persönlichen Gespräch mit dem Abteilungsleiter wurde ich zu einem zweiten Termin vor Ort eingeladen. Im Vorfeld erhielt ich eine Aufgabe, die ich dann in Form einer Kurzpräsentation dem Team vorstellen durfte. Dabei lernte ich zugleich meine zukünftigen Kolleginnen und -kollegen sowie die Räumlichkeiten kennen. Ergänzend dazu gab es weitere Aufgaben im Rahmen eines Assessments, die meine fachlichen und methodischen Kompetenzen überprüften. Dadurch entstand ein sehr ganzheitlicher Bewerbungsprozess, der mir einen authentischen Einblick in die Zusammenarbeit und Kultur des Unternehmens gab.'
    ),

    2 => array(
      'question' => 'Which strengths did you develop during your studies that helped you in particular in your current job? / Welche Stärken haben Sie während Ihres Studiums entwickelt, die Ihnen besonders in Ihrer jetzigen Tätigkeit geholfen haben?',
      'answer' => 'Neben den fachlichen Themen, welche offensichtlich in der Beratung von chemischen Produkten notwendig sind, ist sicher das pragmatische, lösungsorientierte Denken eines Naturwissenschaftlers eine Stärke, die in meinem Job sehr hilfreich ist.<br><br>
Zudem konnte ich durch die verschiedensten Vorträge und Arbeiten bereits im Studium lernen, wie man eine wissenschaftliche Arbeit erstellt und vor anderen Menschen spricht bzw. seine Resultate bestmöglich verkauft.<br><br>
Aber auch bereits im Studium konnte ich wertvolle Kontakte knüpfen, mit welchen ich heute in meiner Tätigkeit noch regelmässig zu tun habe.'
    ),

    3 => array(
      'question' => 'What fascinates you about your work in particular? / Was fasziniert Sie besonders an Ihrer Arbeit?',
      'answer' => 'Mich fasziniert die Vielseitigkeit in meiner Arbeit, denn man hat täglich mit verschiedensten Menschen zu tun. Sei dies intern mit Customer Service, Marketing, Management sowie den Saleskolleg:innen, aber auch extern mit Lieferpartnern, Kunden oder diversen Institutionen.<br><br>
Zudem kann man häufig Problemstellungen von Kunden lösen, solche Successs-Stories sind äusserst motivierend. Ebenfalls kann ich stets dazulernen, sei es über neue Produkte, Innovationen oder auch andere Bereiche im Arbeitsalltag. Man lernt nie aus.'
    ),

    4 => array(
      'question' => 'How would you describe the corporate culture in your company, especially with regard to teamwork and collaboration? / Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
      'answer' => 'TEAM wird bei der IMPAG gross geschrieben, bereits der Hiring-Prozess ist auf unsere Unternehmenskultur zugeschnitten. Denn bei der IMPAG ist Zusammenarbeit nicht nur Teil der Kultur – sie ist ihr Herzstück.<br><br>
Unter dem Leitgedanken „together unique“ leben wir Teamarbeit auf allen Ebenen: Wir verbinden unterschiedliche Perspektiven, Erfahrungen und Fähigkeiten, um gemeinsam Lösungen zu schaffen.<br><br>
Unsere Teams arbeiten bereichsübergreifend, offen und auf Augenhöhe zusammen. Dabei setzen wir auf gegenseitige Unterstützung, Vertrauen und aktive Kommunikation – denn nur im Miteinander entsteht echte Stärke.<br><br>
Dass wir regelmässig mit dem Swiss Arbeitgeber Award ausgezeichnet werden, bestätigt, wie einzigartig und wertvoll dieses Miteinander bei uns gelebt wird.<br><br>
Ob im Projekt, im Alltag oder bei Herausforderungen: Wir ziehen am selben Strang und feiern Erfolge gemeinsam.'
    ),

    5 => array(
      'question' => 'What would you recommend ETH students to do during their studies for future industry experience? / Was würden Sie ETH-Studierenden empfehlen, während ihres Studiums zu tun, um für künftige Praxiserfahrungen in der Industrie vorbereitet zu sein?',
      'answer' => 'Ein Praktikum in der Industrie, wenn immer möglich. Andererseits, falls es das Studium zulässt, bereits neben dem Studium Teilzeit in einem relevanten Unternehmen zu arbeiten.<br><br>
Wir hatten beispielsweise die Möglichkeit, ein Industriepraktikum zu absolvieren und die Masterarbeit ebenfalls in der Industrie durchzuführen, das gibt erste Arbeitserfahrung in der Realwirtschaft sowie bereits ein erstes Netzwerk, was Matchentscheidend sein kann.'
    ),

  ),
);


include('../0_template/template.php');


?>
