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
$template['company_name_short'] = 'BACHEM';
$template['logo_url'] = set_source($awss3.'/companies/bachem/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.bachem.com/','bachem.com');
$template['facebook'] = array('https://www.facebook.com/BachemGroup/', 'Bachem Group');
$template['linkedin'] = array('https://www.linkedin.com/company/bachem/','Bachem');



$template['archive'] = '/archive/bachem';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'The Swiss based Bachem Group is specialized in the development and manufacturing of pepTide- and oligonucleoTide-based active pharmaceutical ingredients. With 50 years of experience and a global reach, the group is the partner of choice for the biotech and pharma industry. Bachem attaches the utmost importance to quality, innovation and partnership.
  Bachem. Leading Partner in Tides');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'We offer graduates with a diploma or doctoral degree the possibility to apply their knowledge, gain initial experience in a variety of areas and benefit from the know-how of our experienced employees within a highly collaborative environment with a respectful attitude.');
  
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young, committed and fully qualified graduates, holdinga diploma or already in possession of a doctoral degree, who would like to join our company and establish in a professional environment, to secure our long-term success and maintain market leadership.');





$template['interview_print_until'] = 1;
#if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

$template['interview'][$i++] = array(
  'name' => 'Dr. Pascal Engl',
  'img_url' => $awss3.'/companies/bachem/interviewee_2021_1',
  'position' => 'Group Leader R&D, Bachem AG Bubendorf',

  'education' => array(
    0 => array(
      'date' => '2017-2019',
      'desc' => 'Postdoctoral Researcher - Max-Planck Institute für Kohlenforschung, Mülheim an der Ruhr, Germany, Department of Organic Chemistry, Group of Prof. Dr. Tobias Ritter',
    ),
    1 => array(
      'date' => '2014-2017',
      'desc' => 'Dr. Sc. ETH Zürich, ETH Zürich (CH), Laboratory of Inorganic Chemistry on “Development and Application of N-Trifluoromethyl NHC Ligands for Transition-Metal Catalysis” Advisor: Prof. Antonio Togni',
    ),
    2 => array(
      'date' => '2011-2013',
      'desc' => 'Master of Science in Chemistry, ETH Zurich, Switzerland',
    ),
    3 => array(
      'date' => '2007-2009',
      'desc' => 'Bachelor of Science in Chemistry, ETH Zurich, Switzerland',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2019-present',
      'desc' => 'Group Leader R&D, Bachem AG Bubendorf',
    ),
    1 => array(
      'date' => '2019',
      'desc' => 'Project Chemist R&D, Bachem AG Bubendor',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'Was ist ihre derzeitige Tätigkeit bei BACHEM?',
      'answer' => 'Ich arbeite als Gruppenleiter in der Forschungs- und Entwicklungsabteilung bei BACHEM und führe ein Team von Laborant/Innen. Bachem stellt Peptide und Oligonukleotide her, das sind Moleküle, die als Wirkstoffe bei Medikamenten zum Beispiel gegen Krebs und Diabetes zum Einsatz kommen. In meiner Rolle bin ich als Führungskraft verantwortlich für die Entwicklung von effizienten, skalierbaren und zugleich nachhaltigen Herstellungsverfahren von peptidischen Wirkstoffen. Dabei ist Qualität sehr wichtig, denn in der Pharma-Welt sind die Anforderungen von Kunden, Behörden und letztlich Patienten selbstverständlich sehr hoch. Zudem arbeite ich mit verschiedenen interdisziplinären Projektteams zusammen, welche sich mit der Planung und Umsetzung von Investitionsprojekten zu Gunsten von Kapazitätserweiterungen, Compliance und Prozessoptimierung befassen.',
    ),
    1 => array(
      'question' => 'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
      'answer' => 'Es gibt zwei wichtige Fragen, die man sich im Vorfeld einer Bewerbung stellen sollte:

      1. «Wieso möchte ich für diese Firma arbeiten?»
      
      Dies ist oft einer der ersten Fragen, die im Zuge eines Bewerbungsgesprächs gestellt wird und dennoch wird diese häufig von Kandidat/innen unterschätzt. Es lohnt sich daher im Vorfeld sich grundlegend über die Firma und Ihrer Tätigkeit zu informieren.
      
      2. «Wieso bin gerade Ich die richtige Kandidat/in für diese Rolle?»
      
      Der «cover letter» für die Bewerbung auf die gewünschte Stelle sollte die Schlüsselqualifikationen adressieren und der Person, welche die Kandidaten/innen suche leitet, aufzeigen wieso man für diesen Job am besten geeignet ist. Dabei soll man seine Qualifikationen mit persönlichen Erfahrungen und Beispielen aus dem eigenen Werdegang hervorheben. Ein gesundes Mass an Selbstvertrauen sollte nicht fehlen. ',
    ),
    2 => array(
      'question' => 'Wie sieht Ihr klassischer Arbeitstag bei BACHEM aus?',
      'answer' => 'In der Forschung und Entwicklung ist man häufig mit neuen und sich ständig ändernden Herausforderungen konfrontiert, was den Arbeitstag sehr vielfältig und spannend macht. Eine der Hauptaufgaben ist sicherlich die Erarbeitung von zielführenden Lösungen bei chemischen und verfahrenstechnischen Fragestellungen. Dabei ist eine effiziente Produktions- und Ressourcenplanung gefragt, um eine reibungslose Bearbeitung von Aufträgen zu ermöglichen. Neben der Organisation der Forschungsarbeiten, erstelle ich Projektübersichten, Berichte und Präsentation zu

      Forschungsergebnissen für den internen Gebrauch und der Kommunikation mit Kunden. Ein weiterer Teil meiner Arbeit als Gruppenleiter beinhaltet die Förderung und Weiterentwicklung meiner Mitarbeiter/innen durch aktives «Coaching» und Weiterbildungen.',
    ),
    3 => array(
      'question' => 'Wie kam es, dass sie nun für BACHEM arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
      'answer' => 'Ich bin durch mein persönliches Network von ETH-Kollegen auf Bachem aufmerksam geworden. Bachem hat in den letzten Jahren ein starkes Wachstum hingelegt, welches weiter andauert und sehr gute Karrieremöglichkeiten bietet. ',
    ),
    4 => array(
      'question' => 'Wie lief ihr Bewerbungsprozess bei BACHEM?',
      'answer' => 'Nach meiner schriftlichen Bewerbung bei BACHEM wurde ich zu einem Telefoninterview mit der Abteilung human resources (HR) und einem Abteilungsleiter aus dem Bereich der Forschung und Entwicklung eingeladen. Dadurch hatte ich die erste Gelegenheit mich bei der Firma vorzustellen und erste Fragen zu meiner Person zu beantworten. Im Anschluss wurde ich zu einer weiteren Interviewrunde vor Ort bei BACHEM eingeladen, in welchem mir arbeitsrelevante und fachspezifische Fragen gestellt wurden. Zudem durfte ich einen Teil meiner bisherigen Forschungsarbeiten vor Mitgliedern aus der Forschungs- und Entwicklungsabteilung präsentieren und hatte auch die Gelegenheit mir einen Eindruck von den Produktions- und Laboreinrichtungen zu machen.',
    ),
    5 => array(
      'question' => 'Was glauben Sie unterscheidet BACHEM von anderen Chemiefirmen? Was sind die drei grössten Vorteile von BACHEM?',
      'answer' => 'Im Vergleich zu vielen anderen Chemiefirmen ist BACHEM noch vergleichsweise klein. Der Umgang innerhalb der Firma ist sehr familiär und erlaubt einen unkomplizierten Austausch. BACHEM ist im stetigen Wachstum und investiert viel in neue Infrastrukturen und in die Entwicklung Ihrer Mitarbeiter. Dadurch bieten sich auch sehr gute Karrieremöglichkeiten in den unterschiedlichsten Bereichen der Firma im In- und Ausland an. Zudem fördert die Firma aktiv innovative Ideen von den Mitarbeitern und deren Umsetzung.',
    ),
    6 => array(
      'question' => 'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'answer' => 'Ich habe Chemie an der ETH Zürich studiert und anschliessend in der Gruppe von Prof. Antonio Togni promoviert. Das qualitativ hochstehende und forschungsorientierte Studium hat mich gelehrt, wie man strukturiert und organisiert auf wissenschaftliche Fragestellungen und Herausforderungen eingeht. Das Studium an der ETH war eine wertvolle Erfahrung für meinen persönlichen Werdegang und hat mir neben einem breiten Fachwissen auch viele weitere relevante Kompetenzen, wie ein gute Kommunikation, Zusammenarbeit und auch Durchhaltevermögen vermittelt.',
    ),
  ),
);


include('../0_template/template.php');

?>