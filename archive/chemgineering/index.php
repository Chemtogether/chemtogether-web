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


$template['company_name'] = 'Chemgineering';
$template['company_name_short'] = 'chemgineering';
$template['logo_url'] = set_source($awss3_archive.'/chemgineering/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);


//$template['homepage'] = array('http://www.lonza.com/','lonza.com');
//$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
//$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
// $template['mail'] = array('','');
//$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
 'a global consulting and planning company focusing on the GxP-regulated environment. From consulting to concept studies to turnkey solutions, we offer the full range of services in the areas of pharmaceuticals, biotechnology, fine chemicals, medical technology, cosmetics, diagnostics and food.',
 'a global consulting and planning company focusing on the GxP-regulated environment. From consulting to concept studies to turnkey solutions, we offer the full range of services in the areas of pharmaceuticals, biotechnology, fine chemicals, medical technology, cosmetics, diagnostics and food.');

$template['we_offer'] = array(
   '
   <table class="fa-table">
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>A high degree of flexibility with regard to organizing working hours so that work and domestic life can be optimally balanced</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>The possibility to work on a mobile basis</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>An open communication climate</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>International Teams</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>Attractive social benefits</td>
   </tr></table>
   Find out more: https://www.chemgineering.com/en/careers/employee-stories', 
   '
   <table class="fa-table">
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>A high degree of flexibility with regard to organizing working hours so that work and domestic life can be optimally balanced</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>The possibility to work on a mobile basis</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>An open communication climate</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>International Teams</td>
   </tr>
   <tr>
   <td><i class="fas fa-fw fa-chevron-right"></td>
   <td>Attractive social benefits</td>
   </tr></table>
   Find out more: https://www.chemgineering.com/en/careers/employee-stories');

$template['we_look'] = array(
 'Are you on the verge of getting your science degree, and might you have already gained your first experiences in life sciences so that you now really want to get going? Career starters have found exactly the right place here! Depending on company area, you can start as a project engineer or a junior consultant within the Chemgineering Group, and in this way get right into the middle of a project.',
 'Are you on the verge of getting your science degree, and might you have already gained your first experiences in life sciences so that you now really want to get going? Career starters have found exactly the right place here! Depending on company area, you can start as a project engineer or a junior consultant within the Chemgineering Group, and in this way get right into the middle of a project.');




$i=0;

$template['interview']['2021'][$i++] = array(
  'name' => 'Helena Wiemeyer',
  'img_url' => set_source($awss3_archive.'/chemgineering/interviewee_2021_1','png', FALSE),
  'position' => array('Projektingenieur','Projektingenieur'),

  'education' => array(
    0 => array(
      'date' => '2016-2018',
      'desc' => array('Master of Science ETH in Process Engineering, ETH Zurich, Switzerland','Master of Science ETH in Process Engineering, ETH Zurich, Switzerland'),
    ),
    1 => array(
      'date' => '2013-2016',
      'desc' => array('Bachelor of Science ETH in Chemieingenieurwissenschaften, ETH Zurich, Switzerland','Bachelor of Science ETH in Chemieingenieurwissenschaften, ETH Zurich, Switzerland'),
    ),
  ),

  'career' => array(
    0 => array(
      'date' => 'seit 2018',
      'desc' => array('Projektingenieur, Chemgineering, Münchenstein','Projektingenieur, Chemgineering, Münchenstein'),
    ),
    1 => array(
      'date' => '2017-2018',
      'desc' => array('Praktikum in der Prozessentwicklung, Roche, Basel','Praktikum in der Prozessentwicklung, Roche, Basel'),
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was ist ihre derzeitige Tätigkeit bei Chemgineering?','Was ist ihre derzeitige Tätigkeit bei Chemgineering?'),
      'answer' => array('Ich arbeite als Projektingenieur in einem Grossprojekt. Neben meinem Arbeitspaket, einem Apparat für die Fest-Flüssig Trennung, bin ich für die Termin- und Qualitätskontrolle der Lieferanten zuständig.','Ich arbeite als Projektingenieur in einem Grossprojekt. Neben meinem Arbeitspaket, einem Apparat für die Fest-Flüssig Trennung, bin ich für die Termin- und Qualitätskontrolle der Lieferanten zuständig.'),
    ),
    1 => array(
      'question' => array('Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?','Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?'),
      'answer' => array('Es gibt so viele Möglichkeiten in der Industrie und an der Uni – Wo liegen deine Interessen und was macht dir Spass? In dem Bereich würde ich mir etwas suchen.','Es gibt so viele Möglichkeiten in der Industrie und an der Uni – Wo liegen deine Interessen und was macht dir Spass? In dem Bereich würde ich mir etwas suchen.'),
    ),
    2 => array(
      'question' => array('Wie sieht Ihr klassischer Arbeitstag bei Chemgineering aus?','Wie sieht Ihr klassischer Arbeitstag bei Chemgineering aus?'),
      'answer' => array('Die meisten Tage verbringe ich in unserem Büro in Münchenstein. Da ich ein Morgenmensch bin und wir im Gleitzeitmodell arbeiten, fange ich früh an. Meetings mit meinen Kollegen im Projekt gehören genauso dazu, wie solche mit externen Partnerfirmen und Kunden – seit Beginn der Pandemie vermehrt digital. Diesen Frühling habe ich den Bau und die Inbetriebnahme bei einem Kunden vor Ort betreut und sass nur selten an meinem Schreibtisch im Büro.','Die meisten Tage verbringe ich in unserem Büro in Münchenstein. Da ich ein Morgenmensch bin und wir im Gleitzeitmodell arbeiten, fange ich früh an. Meetings mit meinen Kollegen im Projekt gehören genauso dazu, wie solche mit externen Partnerfirmen und Kunden – seit Beginn der Pandemie vermehrt digital. Diesen Frühling habe ich den Bau und die Inbetriebnahme bei einem Kunden vor Ort betreut und sass nur selten an meinem Schreibtisch im Büro.'),
    ),
    3 => array(
      'question' => array('Wie kam es, dass sie nun für Chemgineering arbeiten? Wie sind sie auf die Firma aufmerksam geworden?','Wie kam es, dass sie nun für Chemgineering arbeiten? Wie sind sie auf die Firma aufmerksam geworden?'),
      'answer' => array('Während des Masters habe ich habe ein Praktikum bei Roche in der technischen Prozessentwicklung gemacht. Für meinen Einstieg habe ich nach einem Planungsunternehmen und einer Stelle im Projektumfeld gesucht, da der Arbeitsalltag sehr vielfältig und abwechslungsreich ist. Mein erster Kontakt mit Chemgineering war an der Polymesse als ich noch im Bachelor war.
       Als ich zwei Jahre später auf Stellensuche war und mich bei den verschiedenen Dienstleistern in und um Basel umgeschaut habe, 
       habe ich mich dann bei Chemgineering beworben.',
       'Während des Masters habe ich habe ein Praktikum bei Roche in der technischen Prozessentwicklung gemacht. Für meinen Einstieg habe ich nach einem Planungsunternehmen und einer Stelle im Projektumfeld gesucht, da der Arbeitsalltag sehr vielfältig und abwechslungsreich ist. Mein erster Kontakt mit Chemgineering war an der Polymesse als ich noch im Bachelor war.
       Als ich zwei Jahre später auf Stellensuche war und mich bei den verschiedenen Dienstleistern in und um Basel umgeschaut habe, 
       habe ich mich dann bei Chemgineering beworben.'),
    ),
    4 => array(
      'question' => array('Wie lief ihr Bewerbungsprozess bei Chemgineering?','Wie lief ihr Bewerbungsprozess bei Chemgineering?'),
      'answer' => array('Ich habe mich auf die Stelle beworben, die auf der Website ausgeschrieben war. Nach einem kurzen Telefonat
       wurde ich zu einem ersten Vorstellungsgespräch eingeladen. 
       Anschliessend hatte ich noch mehrere Gespräche mit Führungspersonen aus den verschiedenen Firmenbereichen. 
       Ich habe mich dann für den Bereich Prozess entschieden, da dieser am nächsten an meinem Studienfach liegt.','Ich habe mich auf die Stelle beworben, die auf der Website ausgeschrieben war. Nach einem kurzen Telefonat
       wurde ich zu einem ersten Vorstellungsgespräch eingeladen. 
       Anschliessend hatte ich noch mehrere Gespräche mit Führungspersonen aus den verschiedenen Firmenbereichen. 
       Ich habe mich dann für den Bereich Prozess entschieden, da dieser am nächsten an meinem Studienfach liegt.'),
    ),
    5 => array(
      'question' => array('Was glauben Sie unterscheidet Chemgineering von anderen Chemiefirmen? 
      Was sind die drei grössten Vorteile von Chemgineering?',
      'Was glauben Sie unterscheidet Chemgineering von anderen Chemiefirmen? 
      Was sind die drei grössten Vorteile von Chemgineering?'),
      'answer' => array('Wir sind ein Dienstleister und kommen mit den produzierenden Chemiefirmen über die Projektarbeit in Kontakt.
      Das bedeutet, dass man Einblick in verschiedene Bereiche und Firmen bekommt und durch die wechselnden Projekte immer wieder dazulernt 
      – für mich das wichtigste an meiner Arbeit. Auch das familiäre Umfeld in der Firma und das gute Klima schätze ich.',
      'Wir sind ein Dienstleister und kommen mit den produzierenden Chemiefirmen über die Projektarbeit in Kontakt.
      Das bedeutet, dass man Einblick in verschiedene Bereiche und Firmen bekommt und durch die wechselnden Projekte immer wieder dazulernt 
      – für mich das wichtigste an meiner Arbeit. Auch das familiäre Umfeld in der Firma und das gute Klima schätze ich.'),
    ),
    6 => array(
      'question' => array('Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?'),
      'answer' => array('Ich habe an der ETH Chemieingenieurwissenschaften (BSc) und Verfahrenstechnik (MSc) studiert. 
      Wie damals im Studium, begegnen mir bei der Arbeit komplexe Fragestellungen und verschiedene Produktionsprozesse aus der Chemie 
      und Pharmaindustrie. Das technische Knowhow aus den Vorlesungen zusammen mit den Fähigkeiten aus Übungen und Thesen,
      kann ich auf „echte“ Projekte anwenden. Neu waren für mich die Zusammenarbeit mit dem Kunden und die Kosten und Termine im Blick 
      zu behalten.',
      'Ich habe an der ETH Chemieingenieurwissenschaften (BSc) und Verfahrenstechnik (MSc) studiert. 
      Wie damals im Studium, begegnen mir bei der Arbeit komplexe Fragestellungen und verschiedene Produktionsprozesse aus der Chemie 
      und Pharmaindustrie. Das technische Knowhow aus den Vorlesungen zusammen mit den Fähigkeiten aus Übungen und Thesen,
      kann ich auf „echte“ Projekte anwenden. Neu waren für mich die Zusammenarbeit mit dem Kunden und die Kosten und Termine im Blick 
      zu behalten.'),
    ),
  ),
);



include('../0_template/template.php');

?>
