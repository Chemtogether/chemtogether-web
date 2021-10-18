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
if(isset($_GET['fb']) && $_GET['fb'] == 'i-0') {
  $fb = array(
    "title"        => "Interview with Dr. Michael Seet from BASF - Chemtogether",
    "desc"         => "Dr. Michael Seet works as Research Scientist at BASF. Learn more about his career and work in his interview, and meet BASF at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/basf_0_20181002.jpg",
    "image_width"  => "800",
    "image_height" => "420"
  );
} else {
  // $fb = array(
  //   "title"        => "",
  //   "desc"         => "",
  //   "url"          => $awss3."/opengraph/",
  //   "image_url"    => "",
  //   "image_width"  => "",
  //   "image_height" => ""
  // );
}
$template['company_name'] = 'VALSYNTHESE SA';
$template['company_name_short'] = 'valsynthese';
$template['logo_url'] = set_source($awss3.'/companies/valsynthese/logo','png', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
//$template['homepage'] = array('https://www.basf.com','basf.com');
//$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
//$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');

// $template['mail'] = array('','');
//$template['archive'] = '/archive/basf';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'a privately owned and well-etablished Swiss CDMO for API intermediates and API drug substances, located in Brig, in the hearts of the Alps, part of the SSE Group. Specialized in hazardous chemistry, Valsynthese is serving multiple industries such as agrochemical, fragrances & flavours and medical devices.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => '<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Dynamic working environment in a human scale company</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Diversified and attractive job description</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Perspectives linked to a lively and growing company</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>First-rate social benefits</td>
  </tr></table>');
  
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'Flexible and motivated people to reinforce our team and support our developpement.');

$template['interview_print_until'] = 1; 
// if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 2;

$i=0;

$template['interview'][$i++] = array(
  'name' => 'Dr. Erika Lüthi',
  'img_url' => $awss3.'/companies/valsynthese/interviewee_2021_1',
  'position' => 'Chemikerin in Forschung & Entwicklung, Projektmanagerin',

  'education' => array(
    0 => array(
      'date' => '2006-2010',
      'desc' => 'Dissertation in Chemie, Forschungsgruppe Prof. Dr. Jean-Louis Reymond, Universität Bern',
    ),
    1 => array(
      'date' => '2001-2006',
      'desc' => 'Studium in Chemie (M. Sc.), Universität Bern',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2014-present',
      'desc' => 'Chemikerin Forschung & Entwicklung, Projektmanagerin, Valsynthese, Brig',
    ),
    1 => array(
      'date' => '2012-2014',
      'desc' => 'Projektmanagerin Forschung & Entwicklung  Boehme AG, Lacke & Farben, Liebefeld ',
    ),
    2 => array(
      'date' => '2011-2012',
      'desc' => 'Postdoktorat/Stipendium des Schweizerischen Nationalfonds SNF, Forschungsgruppe Prof. Dr. Véronique Gouverneur, Universität Oxford, GB',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'Was ist ihre derzeitige Tätigkeit bei Valsynthese?',
      'answer' => 'Ich  bin  Chemikerin  in  der  F&E-Abteilung  und  Projektleiterin.  Das  Ziel  unserer  Projekte  ist  es, 
      chemische Prozesse für Produktionsmengen (Kilogramm- bis Tonnenmassstab) zu entwickeln und 
      zu optimieren. Die Produkte sind meist organische Verbindungen (z.B. Pharma- oder 
      Agrochemikalien).  Zusammen  mit  Laboranten  entwickle  ich  die  Synthesen  auf  Laborstufe. 
      Gleichzeitig bin ich als Projektleiterin verantwortlich, die anderen Abteilungen (Analytik, 
      Produktion,  Technik,  EHS,  BU,  QA)  über  den  Stand  des  Projekts  zu  informieren  und  die 
      anstehenden  Aufgaben  zu  delegieren.  Dafür  werden  regelmässig  Sitzungen  abgehalten.  Ein 
      wichtiger Teil der Arbeit ist auch die Präsentation der Resultate dem Kunden gegenüber in Form 
      von  Berichten  und  Meetings.  Sobald  ein  Prozess  bereit  ist  für  die  Produktion,  übernimmt  der 
      Produktionsleiter das Projekt.',
    ),
    1 => array(
      'question' => 'An welchem Standort von Valsynthese arbeiten Sie? ',
      'answer' => 'Der  Standort  von  Valsynthese  ist  Gamsen  (zwischen  Brig  und  Visp,  VS).  Es  ist  gleichzeitig  der 
      Hauptsitz der SSE. Nebst der chemischen gibt es die Sprengstoff-Produktion. ',
    ),
    2 => array(
      'question' => 'Wie sieht Ihr klassischer Arbeitstag bei Valsynthese aus?',
      'answer' => 'Mein  Arbeitsalltag  teilt  sich  auf  in  einerseits  Büroarbeit  (Berichte  und  Protokolle  fürs  Labor 
      schreiben, Datenauswertung, Projektmanagement), was den grössten Teil ausmacht. Wichtig sind 
      zweitens tägliche Besprechungen mit den Laboranten und das Mitverfolgen der Arbeit im Labor. 
      Drittens gibt es Sitzungen im Team, zwischen den Abteilungen oder mit externen Kunden.',
    ),
    3 => array(
      'question' => 'Wie kam es,dass sie nun für Valsynthese arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
      'answer' => 'Nach meiner Zeit an der Universität, wo ich eine PhD und einen Postdoc in organischer Chemie 
      gemacht  habe,  und  kurzer  Zeit  in  einem  Lack-Unternehmen  suchte  ich  eine  Stelle  im  Bereich 
      organische Chemie. Ich bewarb mich auf die jetzige Stelle bei Valsynthese und nahm sie an, da 
      mir das Stellenprofil gefiel.',
    ),
    4 => array(
      'question' => 'Wie lief ihr Bewerbungsprozess bei Valsynthese?',
      'answer' => 'Der  Ablauf  war  „klassisch“.  Ich  reichte  das  Bewerbungsdossier  (CV,  Motivationsschreiben, 
      Zeugnisse)  ein  und  wurde  zu  zwei  Bewerbungsgesprächen  eingeladen.  Im  Bewerbungsgespräch 
      legte man den Fokus auf die Kenntnisse und Erfahrung aber auch auf Teamfähigkeit und andere 
      „Soft Skills“.',
    ),
    5 => array(
      'question' => 'Was glauben Sie unterscheidet Valsynthese von anderen Chemiefirmen?',
      'answer' => 'Wie  des  Öfteren  bei  KMUs  sind  die  Aufgabenstellungen  relativ  breit.  Ich  mache  nebst  der 
      Entwicklungsarbeit, die teilweise derjenigen an der Universität ähnelt (Literatursuche, 
      Forschungsarbeit) Projektmanagement-Aufgaben wie Zeitpläne, Kostenschätzungen oder bin bei 
      Risikoanalysen dabei.Valsynthese hat sich zudem spezialisiert auf Nitrierungen (wegen der Nähe zum 
      Sprengstoffbereich), Phosgenierung und neu auf Hydrierung. Die teilweise energiereichen 
      Reaktionen und Produkte erfordern Weiterbildung und Kenntnisse im Bereich Prozesssicherheit, ein 
      für mich interessantes Gebiet.',
    ),
    6 => array(
      'question' => 'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'answer' => 'Ich habe Chemie studiert und ein Doktorat in organischer Chemie gemacht. Meine Ausbildung war 
      eine  gute  Vorbereitung  auf  die  jetzige  Stelle,  da  die  Arbeit  teilweise  mit  derjenigen  an  der  Uni 
      überlappt.  Natürlich  gibt  es  Bereiche,  die  relativ  neu  waren  wie  z.B.  GMP-Richtlinien  oder 
      Prozesssicherheit. Aber es gibt gute Weiterbildungen dafür für die Privatindustrie.',
    ),
    7 => array(
      'question' => 'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt 
      ?',
      'answer' => 'Eine  Chemikerstelle  (F&E  oder  QC)  in  der  Privatindustrie  ist  eine  gute  Möglichkeit,  weiterhin 
      Forschungsarbeit zu machen, wer sich dafür interessiert - nicht im Sinn von Grundlagenforschung 
      sondern  eher  von  Entwicklung/Optimierung.  Eine  Doktorarbeit  oder  gute  Vorkenntnisse  aus  der 
      Privatindustrie sind wichtig für eine solche Stelle. Ich konnte meine praktische Erfahrung aus der 
      PhD-Zeit gut gebrauchen. In  der  Projektarbeit  muss  man  flexibel  und  bereit  sein  zu  Überstunden  wenn  nötig.  Es  kann 
      vorkommen, dass der Druck, einem Kunden zur rechten Zeit den fertigen Prozess oder das Produkt 
      zu liefern, hoch ist. Diese Art von Arbeit sollte man längerfristig gern machen. Daher gilt auch bei 
      der Bewerbung: Wer hohe Einsatzbereitschaft und Teamfähigkeit zeigt, hat sicher schon gepunktet.',
    ),
    8 => array(
      'question' => 'Welche Erfahrungen haben Sie mit Karrieremessen gemacht? ',
      'answer' => 'Ich war nicht direkt an Karrieremessen. Ich habe Kontaktaufnahmen zu Firmen an Veranstaltungen 
      wie dem SCS Fall Meeting aber geschätzt.',
    ),
    9 => array(
      'question' => 'Wie  lange  arbeiten  Sie  schon  für  Valsynthese und  inwiefern  hat  sich  Ihre  Position  bei 
      Valsynthese in dieser Zeit verändert? ',
      'answer' => 'Ich  bin  seit  2014  bei  Valsynthese.  Jedes  Projekt  hatte  andere  Herausforderungen,  aber  die 
      Hauptaufgaben haben sich nicht wesentlich geändert. Die grösste Veränderung war ein 
      Management-Wechsel  in  2017.  Danach  wurde  unser  Fokus  auf  Projektmanagement-Aufgaben 
      verstärkt. ',
    ),
    10 => array(
      'question' => 'Wie sehen Ihre Zukunftspläne bei Valsynthese aus?',
      'answer' => 'Ich habe einen kleinen Sohn. In den nächsten Jahren ist es mir wichtig, meine Stelle und die Familie 
      erfolgreich zu vereinbaren. Wie ich mich danach beruflich ausrichte, kann ich noch nicht sagen. Ich 
      denke aber, längerfristig im Bereich Entwicklung oder Sicherheit arbeiten zu wollen.',
    ),
    11 => array(
      'question' => 'Gibt es eine Möglichkeit, innerhalb der Teilbereiche zu wechseln , z.B. von R&D in die Produktion 
      oder ins Marketing?',
      'answer' => 'Ja, das ist hier möglich. Es gab z.B. zwei Chemiker-Kollegen, die nach ein paar Jahren als Chemiker 
      in die BU gewechselt haben als Product Manager. Es heisst nicht, dass man beliebig wechseln kann. 
      Aber  eine  Neu-Ausrichtung  ist  möglich  mit  entsprechender  Weiterbildung  und  guter  Planung  im 
      Team.',
    ),
    12 => array(
      'question' => 'Als  wie  wichtig  erachten  Sie  die  Work-Life  Balance?  Sind  Sie  zufrieden  mit  Ihrer  Work-Life 
      Balance bei Valsynthese?',
      'answer' => 'Seit ich eine eigene Familie habe, ist die Work-Life Balance automatisch wichtiger geworden, als 
      sie  es  vorher  schon  war.  Seit  3  Jahren  arbeite  ich  Teilzeit,  zuerst  80  %,  jetzt  70  %.  Teilzeit  in 
      meiner Stelle ist  herausfordernd. Die Deadlines für  Kunden bleiben die gleichen ungeachtet des 
      Pensums. Mit guter Planung und der Unterstützung des Chefs und der Kollegen ist es aber machbar. 
      Es hilft, wenn man davor länger 100 % gearbeitet hat und das Team einen kennt. Ich bin dankbar, 
      diese Teilzeit-Möglichkeit und damit viel  bessere Work-Life Balance in meinem Beruf bei 
      Valsynthese zu haben.',
    ),
    13 => array(
      'question' => 'Was schätzen Sie am meisten an der Firmenkultur von Valsynthese?',
      'answer' => 'Die gute Zusammenarbeit und Kollegialität, seit ich 2014 da bin. Man hilft einander aus, und bei 
      gemeinsamen Ausflügen ist die Atmosphäre sehr gut und „familiär“.',
    ),
  ),
);

include('../0_template/template.php');



?>