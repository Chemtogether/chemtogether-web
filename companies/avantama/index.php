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

$template['company_name'] = 'AVANTAMA';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3.'/companies/avantama/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://avantama.com/','avantama.com');
$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');


$template['mail'] = array('jobs','avantama.com');
$template['archive'] = '/archive/avantama';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are an ETH startup company developing materials for a bright and efficient future.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer exciting positions for high-end markets such as LCD displays, OLED displays, flexible solar cells etc.');
  
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for curious candidates with a natural desire to solve materials/chemistry problems in the lab or who love to optimize chemical production processes.');



$template['button_print_until'] = 1;
$template['button_info'] = array('<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-avantama">Watch our Flash presentation','<a href="https://vcs.ethz.ch/dievcs/kommissionen/chemtogether/chemtogether-2021-flash-video-avantama">Watch our Flash presentation');

$template['interview_print_until'] = 1;
##if(isset($_GET['preview'])) $template['interview_print_until'] = 0;


$template['interview'][$i++] = array(
  'name' => 'Eric Rüttimann',
  'img_url' => $awss3.'/companies/avantama/interviewee_2021_1',
  'position' => 'Materials Chemist',

  'education' => array(
    0 => array(
      'date' => '2018-2020',
      'desc' => '“Master of Science in Chemistry”, ETH Zurich, Switzerland',
    ),
    1 => array(
      'date' => '2015-2018',
      'desc' => '“Bachelor of Science in Molecular Sciences and Biochemistry“, University of Bern, Switzerland',
    ),
    2 => array(
      'date' => '2013-2014',
      'desc' => 'Passerellen-Course, ISME St. Gallen',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2021',
      'desc' => 'Materials Chemist at AVANTAMA',
    ),
  ),
  
  'interview' => array(
    0 => array(
      'question' => 'Was ist ihre derzeitige Tätigkeit bei Avantama?',
      'answer' => 'Ich bin seit Februar 2021 zu 80 % angestellt als Materials Chemist in der R&D Abteilung von Avantama. Dabei befassen wir uns mehrheitlich mit der Herstellung, Modifikation und Optimierung von Quanten Dots, kurz QDs. Avantama ist spezialisiert auf Perovskit Quanten Dots und im R&D Team versuchen wir die Eigenschaften der QDs für kundenspezifische Anwendungen umzusetzen. Das Feld dabei ist sehr breit gefächert: Von Displayanwendungen, Krebstherapie über Produktmarkierungen bis hin zu Röntgenanalysen hatte ich in kurzer Zeit schon viel Einblick. Aus Vertraulichkeitsgründen kann ich hier nicht alles genau ausführen. Zusätzlich bin ich intern zuständig für die Analytik via X-Ray Fluorescence (XRF).',
    ),
    1 => array(
      'question' => 'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
      'answer' => 'Nur weil ETH auf dem Papier steht, ist dies noch keine Garantie für einen erfolgreichen Übertritt ins Berufsleben in der Industrie. Der Konkurrenzkampf im Arbeitsmarkt ist sicherlich gegeben. Daneben sollte man entscheiden, ob man sich direkt bei einem grösseren, etablierten Chemiekonzern oder bei einem kleineren, überschaubaren Unternehmen oder Start-up bewirbt. Bei einem Start-up kann man sicherlich alle Phasen eines Unternehmens miterleben und diverse Entscheidungsprozesse auch aktiv mitgestalten. Bei einem Konzern hingegen ist wahrscheinlich die eigentliche Tätigkeit als Chemiker im Vordergrund. Auf jeden Fall sind bei der Jobsuche Geduld und Zuversicht sicher nicht fehl am Platz.',
    ),
    2 => array(
      'question' => 'Wie sieht Ihr klassischer Arbeitstag bei Avantama aus?',
      'answer' => 'In der Regel komme ich kurz nach 7 ins Büro und erledige administrative Tätigkeiten, die bei mir als R&D Chemiker nicht allzu viel Zeit in Anspruch nehmen. Oft bespreche ich mich kurz mit meinem Teamleader Marek über den Status meiner Projekte. Den Rest des Arbeitstages verbringe ich mehrheitlich im Labor. Als Chemiker ist das Labor mein zweites zuhause und manchmal muss ich mich zusammenreissen, überhaupt wieder rauszukommen. Über den Mittag gehe ich meistens Trainieren. (fürs Training schaffe ich es immer raus) Als Leistungssportler darf das Training nicht zu kurz kommen, deshalb mache ich eine längere Mittagspause. Je nachdem finden sich auch andere Mitarbeiter von Avantama für ein Lauftraining oder eine Session im Gym ein, was immer ein lustiger Nebeneffekt ist. Zwischendurch machen wir auch unterhaltsame Pausen, die wir gerne mit Pingpong oder Tischfussball füllen. Irgendjemand sorgt dabei immer für Ausgelassenheit. Abends gegen halb 6 ist mein Arbeitstag in der Regel beendet und ich absolviere dann zu Hause noch auf ein zweites Training. ',
    ),
    3 => array(
      'question' => 'Wie kam es, dass sie nun für Avantama arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
      'answer' => 'Für mich als Leistungssportler war klar, dass ich eine finanzielle Unabhängig anstrebte um meine Karriere als Läufer weiterzuführen. Daneben entschied ich mich bewusst gegen ein Doktorat, da ich mich nicht über Jahre an die Stimmungsschwankungen eines Professors der ETH binden wollte. Schlussendlich war es Zufall. Ein Trainingspartner von mir hat mit Samuel Halim, dem CEO von Avantama, die Sekundarschule besucht. Er hat mich dann auf Avantama aufmerksam gemacht und als ich die Homepage aufsuchte und von den Quantum Dots erfuhr, wusste ich sogleich, dass dies mein Treffer war. Ich hatte bereits während meiner Master Thesis an Nanopartikeln geforscht und kannte die QDs von Professor Kovalenkos Vorlesungen. Ich sah erstmals die Möglichkeit, an etwas zu arbeiten, das mich auch intrinsisch interessierte.',
    ),
    4 => array(
      'question' => 'Wie lief ihr Bewerbungsprozess bei Avantama?',
      'answer' => 'Ich habe mich blind bei Samuel Halim beworben und durfte ungefähr nach zwei Wochen für die erste Bewerbungsrunde bei Samuel und Norman (CTO) erscheinen. Beide waren mir von Beginn weg sympathisch. Wir hatten ein unterhaltsames Gespräch, das sich hauptsächlich um Sport drehte. Weitere zwei Wochen später wurde ich für die zweite Bewerbungsrunde eingeladen, wobei die Arbeitsweise im Labor und das Verständnis der Materie im Vordergrund war. Dabei lernte ich die meisten anderen Mitarbeiter und meinen Abteilungsleiter Marek Oszajca kennen. Kurz darauf erhielt ich den Anstellungsvertrag.',
    ),
    5 => array(
      'question' => 'Was glauben Sie unterscheidet Avantama von anderen Chemiefirmen? Was sind die drei grössten Vorteile von Avantama?',
      'answer' => 'Avantama ist ganz klar nicht vergleichbar mit den traditionellen Chemiefirmen, wie beispielsweise Roche, Novartis oder Sika. Als ETH Start-up mit derzeit 25 Mitarbeitenden sind wir sehr überschaubar. Avantama hat im Vergleich zu grossen Firmen eine sehr flache Hierarchie, wobei anzumerken ist, dass ein typischer Karriereweg mit Ein- und späterem Aufstieg aufgrund dieser Strukturierung eher schwierig ist. Dafür ist Avantama ein extrem innovatives Unternehmen. Beispielsweise die Perovskit Quanten Dots haben spätestens seit Professor Kovalenkos Beiträgen um das Jahr 2015 Bekanntheit erlangt. Wir bieten diese mittlerweile kommerziell an und arbeiten intensiv mit verschiedenen Kunden, um den Markt mit unserer Technologie zu erreichen. Für mich zählt dabei besonders, dass mir viele Freiheiten gegeben werden, um die internen Ziele zu erreichen. Man soll dabei durchaus kreativ sein und «out of the box» denken. Die meisten Mitarbeiter sind in meinem Alter, haben kürzlich das Studium abgeschlossen und haben bei Avantama die erste Stelle. Wir stehen daher alle an einem ähnlichen Punkt im Leben, was uns sehr verbindet. Das Wichtigste ist für mich allerdings die Atmosphäre und Dynamik im Team und in der Firma generell. Bei Avantama haben wir eine super Stimmung, die mich motiviert meinen Beitrag zu leisten. Bei uns hat vom zurückhaltenden Nerd über den verrückten Wissenschaftler bis zum ehrgeizigen Sportler jeder seinen Platz. Es ist ein grosser Gewinn, wenn jeder nicht nur seine Fähigkeiten, sondern auch seine Persönlichkeit einbringen kann. Bei uns ist es Normalität, wenn wegen guten Ergebnissen durch das Labor gebrüllt wird, Mitarbeiter zu guter Musik tanzen oder ein gewisser Chemiker (nicht ich) mehrmals die Woche einen Truthahn imitiert. ',
    ),
    6 => array(
      'question' => 'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'answer' => 'Ursprünglich habe ich eine Lehre als Hochbauzeichner absolviert und die Matura dann nachgeholt. Den Bachelor habe ich in Biochemie an der Universität Bern abgeschlossen und bin danach für den Master in Chemie an die ETH Zürich gewechselt. Seit ich bei Avantama angefangen habe, bin ich wirklich erstaunt, dass doch viele Elemente aus dem Studium für meine tägliche Arbeit durchaus relevant sind. Besonders die Vorlesungen von Professor Kovalenko haben mir hierfür einiges an Vorwissen eingebracht. Die Grundkenntnisse aus dem Studium erleichtern den Alltag sicherlich, besonders da im R&D viele neue, kreative Ideen ausprobiert werden. Ganz klar kann ich sagen, dass sich das Studium hierfür sehr gelohnt hat.',
    ),
  ),
);

include('../0_template/template.php');

?>