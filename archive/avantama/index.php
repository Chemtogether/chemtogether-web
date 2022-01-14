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


$template['company_name'] = 'Avantama';
$template['company_name_short'] = 'avantama';
$template['logo_url'] = set_source($awss3_archive.'/avantama/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://avantama.com/','avantama.com');
$template['facebook'] = array('https://www.facebook.com/goavantama/', 'Avantama');
$template['linkedin'] = array('https://www.linkedin.com/company/avantama-ag/','Avantama AG');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'We are an ETH startup company developing materials for a bright and efficient future.',
  'We are an ETH startup company developing materials for a bright and efficient future.');
$template['we_offer'] = array(
  'We offer exciting positions for high-end markets such as LCD displays, OLED displays, flexible solar cells etc.',
  'We offer exciting positions for high-end markets such as LCD displays, OLED displays, flexible solar cells etc.');
$template['we_look'] = array(
  'We are looking for curious candidates with a natural desire to solve materials/chemistry problems
   in the lab or who love to optimize chemical production processes.',
   'We are looking for curious candidates with a natural desire to solve materials/chemistry problems in the lab 
   or who love to optimize chemical production processes.');



$i = 0;

$template['interview']['2021'][$i++] = array(
  'name' => 'Eric Rüttimann',
  'img_url' => set_source($awss3_archive.'/avantama/interviewee_2021_1','png', FALSE),
  'position' => array('Materials Chemist','Materials Chemist'),

  'education' => array(
    0 => array(
      'date' => '2018-2020',
      'desc' => array('“Master of Science in Chemistry”, ETH Zurich, Switzerland','“Master of Science in Chemistry”, ETH Zurich, Switzerland'),
    ),
    1 => array(
      'date' => '2015-2018',
      'desc' => array('“Bachelor of Science in Molecular Sciences and Biochemistry“, University of Bern, Switzerland',
      '“Bachelor of Science in Molecular Sciences and Biochemistry“, University of Bern, Switzerland'),
    ),
    2 => array(
      'date' => '2013-2014',
      'desc' => array('Passerellen-Course, ISME St. Gallen','Passerellen-Course, ISME St. Gallen'),
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2021',
      'desc' => array('Materials Chemist at AVANTAMA','Materials Chemist at AVANTAMA'),
    ),
  ),
  
  'interview' => array(
    0 => array(
      'question' => array('Was ist ihre derzeitige Tätigkeit bei Avantama?',
      'Was ist ihre derzeitige Tätigkeit bei Avantama?',),
      'answer' => array('Ich bin seit Februar 2021 zu 80 % angestellt als Materials Chemist in der R&D Abteilung von Avantama. Dabei befassen wir uns mehrheitlich mit der Herstellung, Modifikation und Optimierung von Quanten Dots, kurz QDs. Avantama ist spezialisiert auf Perovskit Quanten Dots und im R&D Team versuchen wir die Eigenschaften der QDs für kundenspezifische Anwendungen umzusetzen. Das Feld dabei ist sehr breit gefächert: Von Displayanwendungen, Krebstherapie über Produktmarkierungen bis hin zu Röntgenanalysen hatte ich in kurzer Zeit schon viel Einblick. Aus Vertraulichkeitsgründen kann ich hier nicht alles genau ausführen. Zusätzlich bin ich intern zuständig für die Analytik via X-Ray Fluorescence (XRF).','Ich bin seit Februar 2021 zu 80 % angestellt als Materials Chemist in der R&D Abteilung von Avantama. Dabei befassen wir uns mehrheitlich mit der Herstellung, Modifikation und Optimierung von Quanten Dots, kurz QDs. Avantama ist spezialisiert auf Perovskit Quanten Dots und im R&D Team versuchen wir die Eigenschaften der QDs für kundenspezifische Anwendungen umzusetzen. Das Feld dabei ist sehr breit gefächert: Von Displayanwendungen, Krebstherapie über Produktmarkierungen bis hin zu Röntgenanalysen hatte ich in kurzer Zeit schon viel Einblick. Aus Vertraulichkeitsgründen kann ich hier nicht alles genau ausführen. Zusätzlich bin ich intern zuständig für die Analytik via X-Ray Fluorescence (XRF).'),
    ),
    1 => array(
      'question' => array('Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?','Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?'),
      'answer' => array('Nur weil ETH auf dem Papier steht, ist dies noch keine Garantie für einen erfolgreichen Übertritt ins Berufsleben in der Industrie. Der Konkurrenzkampf im Arbeitsmarkt ist sicherlich gegeben. Daneben sollte man entscheiden, ob man sich direkt bei einem grösseren, etablierten Chemiekonzern oder bei einem kleineren, überschaubaren Unternehmen oder Start-up bewirbt. Bei einem Start-up kann man sicherlich alle Phasen eines Unternehmens miterleben und diverse Entscheidungsprozesse auch aktiv mitgestalten. Bei einem Konzern hingegen ist wahrscheinlich die eigentliche Tätigkeit als Chemiker im Vordergrund. Auf jeden Fall sind bei der Jobsuche Geduld und Zuversicht sicher nicht fehl am Platz.','Nur weil ETH auf dem Papier steht, ist dies noch keine Garantie für einen erfolgreichen Übertritt ins Berufsleben in der Industrie. Der Konkurrenzkampf im Arbeitsmarkt ist sicherlich gegeben. Daneben sollte man entscheiden, ob man sich direkt bei einem grösseren, etablierten Chemiekonzern oder bei einem kleineren, überschaubaren Unternehmen oder Start-up bewirbt. Bei einem Start-up kann man sicherlich alle Phasen eines Unternehmens miterleben und diverse Entscheidungsprozesse auch aktiv mitgestalten. Bei einem Konzern hingegen ist wahrscheinlich die eigentliche Tätigkeit als Chemiker im Vordergrund. Auf jeden Fall sind bei der Jobsuche Geduld und Zuversicht sicher nicht fehl am Platz.'),
    ),
    2 => array(
      'question' => array('Wie sieht Ihr klassischer Arbeitstag bei Avantama aus?'
       ,'Wie sieht Ihr klassischer Arbeitstag bei Avantama aus?'),
      'answer' => array('In der Regel komme ich kurz nach 7 ins Büro und erledige administrative Tätigkeiten, die bei mir als R&D Chemiker nicht allzu viel Zeit in Anspruch nehmen. Oft bespreche ich mich kurz mit meinem Teamleader Marek über den Status meiner Projekte. Den Rest des Arbeitstages verbringe ich mehrheitlich im Labor. Als Chemiker ist das Labor mein zweites zuhause und manchmal muss ich mich zusammenreissen, überhaupt wieder rauszukommen. Über den Mittag gehe ich meistens Trainieren. (fürs Training schaffe ich es immer raus) Als Leistungssportler darf das Training nicht zu kurz kommen, deshalb mache ich eine längere Mittagspause. Je nachdem finden sich auch andere Mitarbeiter von Avantama für ein Lauftraining oder eine Session im Gym ein, was immer ein lustiger Nebeneffekt ist. Zwischendurch machen wir auch unterhaltsame Pausen, die wir gerne mit Pingpong oder Tischfussball füllen. Irgendjemand sorgt dabei immer für Ausgelassenheit. Abends gegen halb 6 ist mein Arbeitstag in der Regel beendet und ich absolviere dann zu Hause noch auf ein zweites Training. ','In der Regel komme ich kurz nach 7 ins Büro und erledige administrative Tätigkeiten, die bei mir als R&D Chemiker nicht allzu viel Zeit in Anspruch nehmen. Oft bespreche ich mich kurz mit meinem Teamleader Marek über den Status meiner Projekte. Den Rest des Arbeitstages verbringe ich mehrheitlich im Labor. Als Chemiker ist das Labor mein zweites zuhause und manchmal muss ich mich zusammenreissen, überhaupt wieder rauszukommen. Über den Mittag gehe ich meistens Trainieren. (fürs Training schaffe ich es immer raus) Als Leistungssportler darf das Training nicht zu kurz kommen, deshalb mache ich eine längere Mittagspause. Je nachdem finden sich auch andere Mitarbeiter von Avantama für ein Lauftraining oder eine Session im Gym ein, was immer ein lustiger Nebeneffekt ist. Zwischendurch machen wir auch unterhaltsame Pausen, die wir gerne mit Pingpong oder Tischfussball füllen. Irgendjemand sorgt dabei immer für Ausgelassenheit. Abends gegen halb 6 ist mein Arbeitstag in der Regel beendet und ich absolviere dann zu Hause noch auf ein zweites Training.'),
    ),
    3 => array(
      'question' => array('Wie kam es, dass sie nun für Avantama arbeiten? Wie sind sie auf die Firma aufmerksam geworden?'
      ,'Wie kam es, dass sie nun für Avantama arbeiten? Wie sind sie auf die Firma aufmerksam geworden?'),
      'answer' => array('Für mich als Leistungssportler war klar, dass ich eine finanzielle Unabhängig anstrebte um meine Karriere als Läufer weiterzuführen. Daneben entschied ich mich bewusst gegen ein Doktorat, da ich mich nicht über Jahre an die Stimmungsschwankungen eines Professors der ETH binden wollte. Schlussendlich war es Zufall. Ein Trainingspartner von mir hat mit Samuel Halim, dem CEO von Avantama, die Sekundarschule besucht. Er hat mich dann auf Avantama aufmerksam gemacht und als ich die Homepage aufsuchte und von den Quantum Dots erfuhr, wusste ich sogleich, dass dies mein Treffer war. Ich hatte bereits während meiner Master Thesis an Nanopartikeln geforscht und kannte die QDs von Professor Kovalenkos Vorlesungen. Ich sah erstmals die Möglichkeit, an etwas zu arbeiten, das mich auch intrinsisch interessierte.','Für mich als Leistungssportler war klar, dass ich eine finanzielle Unabhängig anstrebte um meine Karriere als Läufer weiterzuführen. Daneben entschied ich mich bewusst gegen ein Doktorat, da ich mich nicht über Jahre an die Stimmungsschwankungen eines Professors der ETH binden wollte. Schlussendlich war es Zufall. Ein Trainingspartner von mir hat mit Samuel Halim, dem CEO von Avantama, die Sekundarschule besucht. Er hat mich dann auf Avantama aufmerksam gemacht und als ich die Homepage aufsuchte und von den Quantum Dots erfuhr, wusste ich sogleich, dass dies mein Treffer war. Ich hatte bereits während meiner Master Thesis an Nanopartikeln geforscht und kannte die QDs von Professor Kovalenkos Vorlesungen. Ich sah erstmals die Möglichkeit, an etwas zu arbeiten, das mich auch intrinsisch interessierte.'),
    ),
    4 => array(
      'question' => array('Wie lief ihr Bewerbungsprozess bei Avantama?','Wie lief ihr Bewerbungsprozess bei Avantama?'),
      'answer' => array('Ich habe mich blind bei Samuel Halim beworben und durfte ungefähr nach zwei Wochen für die erste Bewerbungsrunde bei Samuel und Norman (CTO) erscheinen. Beide waren mir von Beginn weg sympathisch. Wir hatten ein unterhaltsames Gespräch, das sich hauptsächlich um Sport drehte. Weitere zwei Wochen später wurde ich für die zweite Bewerbungsrunde eingeladen, wobei die Arbeitsweise im Labor und das Verständnis der Materie im Vordergrund war. Dabei lernte ich die meisten anderen Mitarbeiter und meinen Abteilungsleiter Marek Oszajca kennen. Kurz darauf erhielt ich den Anstellungsvertrag.','Ich habe mich blind bei Samuel Halim beworben und durfte ungefähr nach zwei Wochen für die erste Bewerbungsrunde bei Samuel und Norman (CTO) erscheinen. Beide waren mir von Beginn weg sympathisch. Wir hatten ein unterhaltsames Gespräch, das sich hauptsächlich um Sport drehte. Weitere zwei Wochen später wurde ich für die zweite Bewerbungsrunde eingeladen, wobei die Arbeitsweise im Labor und das Verständnis der Materie im Vordergrund war. Dabei lernte ich die meisten anderen Mitarbeiter und meinen Abteilungsleiter Marek Oszajca kennen. Kurz darauf erhielt ich den Anstellungsvertrag.'),
    ),
    5 => array(
      'question' => array('Was glauben Sie unterscheidet Avantama von anderen Chemiefirmen? Was sind die drei grössten Vorteile von Avantama?','Was glauben Sie unterscheidet Avantama von anderen Chemiefirmen? Was sind die drei grössten Vorteile von Avantama?'),
      'answer' => array('Avantama ist ganz klar nicht vergleichbar mit den traditionellen Chemiefirmen, wie beispielsweise Roche, Novartis oder Sika. Als ETH Start-up mit derzeit 25 Mitarbeitenden sind wir sehr überschaubar. Avantama hat im Vergleich zu grossen Firmen eine sehr flache Hierarchie, wobei anzumerken ist, dass ein typischer Karriereweg mit Ein- und späterem Aufstieg aufgrund dieser Strukturierung eher schwierig ist. Dafür ist Avantama ein extrem innovatives Unternehmen. Beispielsweise die Perovskit Quanten Dots haben spätestens seit Professor Kovalenkos Beiträgen um das Jahr 2015 Bekanntheit erlangt. Wir bieten diese mittlerweile kommerziell an und arbeiten intensiv mit verschiedenen Kunden, um den Markt mit unserer Technologie zu erreichen. Für mich zählt dabei besonders, dass mir viele Freiheiten gegeben werden, um die internen Ziele zu erreichen. Man soll dabei durchaus kreativ sein und «out of the box» denken. Die meisten Mitarbeiter sind in meinem Alter, haben kürzlich das Studium abgeschlossen und haben bei Avantama die erste Stelle. Wir stehen daher alle an einem ähnlichen Punkt im Leben, was uns sehr verbindet. Das Wichtigste ist für mich allerdings die Atmosphäre und Dynamik im Team und in der Firma generell. Bei Avantama haben wir eine super Stimmung, die mich motiviert meinen Beitrag zu leisten. Bei uns hat vom zurückhaltenden Nerd über den verrückten Wissenschaftler bis zum ehrgeizigen Sportler jeder seinen Platz. Es ist ein grosser Gewinn, wenn jeder nicht nur seine Fähigkeiten, sondern auch seine Persönlichkeit einbringen kann. Bei uns ist es Normalität, wenn wegen guten Ergebnissen durch das Labor gebrüllt wird, Mitarbeiter zu guter Musik tanzen oder ein gewisser Chemiker (nicht ich) mehrmals die Woche einen Truthahn imitiert. ','Avantama ist ganz klar nicht vergleichbar mit den traditionellen Chemiefirmen, wie beispielsweise Roche, Novartis oder Sika. Als ETH Start-up mit derzeit 25 Mitarbeitenden sind wir sehr überschaubar. Avantama hat im Vergleich zu grossen Firmen eine sehr flache Hierarchie, wobei anzumerken ist, dass ein typischer Karriereweg mit Ein- und späterem Aufstieg aufgrund dieser Strukturierung eher schwierig ist. Dafür ist Avantama ein extrem innovatives Unternehmen. Beispielsweise die Perovskit Quanten Dots haben spätestens seit Professor Kovalenkos Beiträgen um das Jahr 2015 Bekanntheit erlangt. Wir bieten diese mittlerweile kommerziell an und arbeiten intensiv mit verschiedenen Kunden, um den Markt mit unserer Technologie zu erreichen. Für mich zählt dabei besonders, dass mir viele Freiheiten gegeben werden, um die internen Ziele zu erreichen. Man soll dabei durchaus kreativ sein und «out of the box» denken. Die meisten Mitarbeiter sind in meinem Alter, haben kürzlich das Studium abgeschlossen und haben bei Avantama die erste Stelle. Wir stehen daher alle an einem ähnlichen Punkt im Leben, was uns sehr verbindet. Das Wichtigste ist für mich allerdings die Atmosphäre und Dynamik im Team und in der Firma generell. Bei Avantama haben wir eine super Stimmung, die mich motiviert meinen Beitrag zu leisten. Bei uns hat vom zurückhaltenden Nerd über den verrückten Wissenschaftler bis zum ehrgeizigen Sportler jeder seinen Platz. Es ist ein grosser Gewinn, wenn jeder nicht nur seine Fähigkeiten, sondern auch seine Persönlichkeit einbringen kann. Bei uns ist es Normalität, wenn wegen guten Ergebnissen durch das Labor gebrüllt wird, Mitarbeiter zu guter Musik tanzen oder ein gewisser Chemiker (nicht ich) mehrmals die Woche einen Truthahn imitiert. '),
    ),
    6 => array(
      'question' => array('Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?','Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?'),
      'answer' => array('Ursprünglich habe ich eine Lehre als Hochbauzeichner absolviert und die Matura dann nachgeholt. Den Bachelor habe ich in Biochemie an der Universität Bern abgeschlossen und bin danach für den Master in Chemie an die ETH Zürich gewechselt. Seit ich bei Avantama angefangen habe, bin ich wirklich erstaunt, dass doch viele Elemente aus dem Studium für meine tägliche Arbeit durchaus relevant sind. Besonders die Vorlesungen von Professor Kovalenko haben mir hierfür einiges an Vorwissen eingebracht. Die Grundkenntnisse aus dem Studium erleichtern den Alltag sicherlich, besonders da im R&D viele neue, kreative Ideen ausprobiert werden. Ganz klar kann ich sagen, dass sich das Studium hierfür sehr gelohnt hat.','Ursprünglich habe ich eine Lehre als Hochbauzeichner absolviert und die Matura dann nachgeholt. Den Bachelor habe ich in Biochemie an der Universität Bern abgeschlossen und bin danach für den Master in Chemie an die ETH Zürich gewechselt. Seit ich bei Avantama angefangen habe, bin ich wirklich erstaunt, dass doch viele Elemente aus dem Studium für meine tägliche Arbeit durchaus relevant sind. Besonders die Vorlesungen von Professor Kovalenko haben mir hierfür einiges an Vorwissen eingebracht. Die Grundkenntnisse aus dem Studium erleichtern den Alltag sicherlich, besonders da im R&D viele neue, kreative Ideen ausprobiert werden. Ganz klar kann ich sagen, dass sich das Studium hierfür sehr gelohnt hat.'),
    ),
  ),
);




$i = 0;
$template['interview']['2017'][$i++] = array(
  'name' => 'Dr. Norman Luechinger',
  'img_url' => set_source($awss3_archive.'/avantama/interviewee_2017_1', 'png', FALSE),
  'position' => array('Chief Technology Officer', 'Chief Technology Officer'),

  'education' => array(
    0 => array(
      'date' => '2002-2007',
      'desc' => array('MSc Materials Science and Engineering, ETH Zürich','MSc in Materials Science and Engineering, ETH Zürich')
    ),
    1 => array(
      'date' => '2007-2010',
      'desc' => array('PhD in Chemie, ETH Zürich','PhD in Chemistry, ETH Zürich')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2008',
      'desc' => array('Mitgründer von Avantama und Chief Technology Officer','co-founded Avantama and joined as Chief Technology Officer')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array(
        "Was sind Ihre Aufgaben als Chief Technology Officer bei Avantama?",
        "What do you do as Chief Technology Officer at Avantama?"),
      'answer' => array(
        "Als CTO bin ich Teil des Managements von Avantama und für alle technischen Entwicklungen verantwortlich: Von der Entwicklung neuer Ideen über alle unsere Entwicklungsprojekte bis hin zum Upscale und der Produktion kommerzieller Materialien. In dieser Rolle habe ich auch enge Beziehungen zu unseren weltweiten Partnern.",
        "As CTO, I’m part of the management of Avantama and I am responsible for all technical developments: from the generation of new ideas, the responsibility for all our development projects to the upscale and production of commercial materials. My role also requires a close relationship to our worldwide customers.")
    ),
    1 => array(
      'question' => array(
        "Sie haben Ihren Abschluss an der ETH in Chemical Engineering erhalten – stellen Sie auch Absolventen der anderen 'HCI-Fachrichtungen' (Chemie, Pharmazie, Materialwissenschaften und interdisziplinäre Naturwissenschaften) ein?",
        "You graduated in chemical engineering from ETH – do you also employ graduates of the other 'HCI-disciplines' (Chemistry, Pharmacy, Material Sciences and Interdisciplinary Sciences)?"),
      'answer' => array(
        "Natürlich! Obwohl wir zur Zeit nur ein Dutzend Angestellte haben, kommen diese aus verschiedensten Fachrichtungen, wie zum Beispiel Chemieingenieurwesen, Chemie, Materialwissenschaften, Physik und Maschinenbau. Vielfältigkeit ist eine wichtige Variable in unserem Team und wir sind fest der Meinung, dass sie uns stärkt.",
        "Of course! Although we only have a dozen of employees, we employ graduates from various fields including chemical engineering, chemistry, materials science, physics as well as mechanical engineering. Diversity is an important variable in our team and we believe it makes us stronger.")
    ),
    2 => array(
      'question' => array(
        "In welchen Bereichen können 'HCI-Absolventen' Arbeit bei Avantama finden?",
        "How has your education at ETH prepared you for the role of CTO?"),
      'answer' => array(
        "Wir haben zur Zeit ein paar sehr interessante offene Stellen, welche sich für Absolventen des HCI-Gebäudes eignen: Development Engineer for LCD TV films,  Development Engineer in the LCD TV innovation team und Development Engineer for Solar Cells – die genauen Anforderungsprofile sind auf unserer Website!",
        "ETH teaches you basic principles of natural sciences as well as structuring complex problems. How you transfer that knowledge into the development of new materials that are useful to the largest companies in the world, is up to you. At Avantama, we have a unique approach to this.")
    ),
    3 => array(
      'question' => array(
        "Wie hat Sie Ihre Ausbildung an der ETH für Ihre Rolle als CTO vorbereitet?",
        "How does work in the university differ from the work in industry?"),
      'answer' => array(
        "Die ETH Zürich vermittelt die grundlegenden Prinzipien der Naturwissenschaften genauso wie die Strukturierung komplexer Probleme. Es ist jedem selbst überlassen, wie man dieses Wissen nutzt, zum Beispiel für die Entwicklung neuer Materialien, welche für die größten Firmen der Welt von Nutzem sind. Hier bei Avantama haben wir unsere eigene Herangehensweise an dieses Problem.",
        "In a typical (industry oriented) ETH project you might solve about 5% of the problems you’re facing when you want to bring a product to the market. The other 95% of the long road to a real world product are solved by the industry. Although the labs in the industry might look similar to ETH labs, it’s the time pressure and the need to fulfil the customer specifications which force you to focus and prioritize vigorously. There is definitely much less time to try something 'just for fun'…")
    ),
    4 => array(
      'question' => array(
        "Wie unterscheidet sich die Arbeit an der Universität von der in der Industrie?",
        "Avantama started as a spin-off of the ETH, do you still have close relations to ETH?"),
      'answer' => array(
        "In einem typischen (industriell orientierten) Projekt an der ETH lost man circa 5% der Probleme, die einem begegnen, wenn man ein Produkt tatsächlich auf den Markt bringen will. Die anderen 95% des langen Weges an den Markt werden von der Industrie gelöst. Obwohl die Labore denen an der ETH sehr ähneln - der Zeitdruck und die Notwendigkeit die Wünsche des Kunden zu erfüllen zwingen einen klar zu prioritisieren und sich immer auf das Ziel zu konzentrieren. Es gibt wesentlich weniger Zeit etwas 'mal so zum Spass' zu machen…",
        "Many of our employees have a history at ETH and we do have some running projects with both ETH Zurich and ETH Lausanne. And of course, a lot of our R&D customers are from leading universities worldwide including the ETH.")
    ),
    5 => array(
      'question' => array(
        "Avantama hat als ein spin-off der ETH angefangen, haben Sie immernoch enge Beziehungen zur ETH?",
        "In which areas can 'HCI-scientists' find work at Avantama?"),
      'answer' => array(
        "Viele unserer Mitarbeiter haben einen ETH-Hintergrund und wir haben zur Zeit verschiedene Projekte am laufen, sowohl mit der ETH Zürich als auch der EPF Lausanne. Natürlich sind auch vieler unserer Kunden von weltweit führenden Universitäten und daher auch von der ETH.",
        "We currently have a couple of very interesting vacancies, that are suitable for graduates of the HCI-building. Namely Development Engineer for LCD TV films, as Development Engineer in the LCD TV innovation team or as Development Engineer for Solar Cells. You can find more information on our website!")
    ),
    6 => array(
      'question' => array(
        "Gibt es einen Weg Avantama persönlich kennenzulernen – entweder durch Praktika oder wie gerade beschrieben durch Kollaborationen?",
        "Is there a way to get to know Avantama first-hand - either via internships or collaborations with universities?"),
      'answer' => array(
        "Der beste Weg um unsere Firma kennenzulernen ist, in dem man sich für eine Praktikumsstelle bewirbt. Praktikanten, die von uns angestellt werden, werden fast wie vollwertige Mitarbeiter behandelt. Dadurch werden sie an Projekten von höchster Wichtigkeit beteiligt sein und wirklich lernen wie die Dinge in der 'echten Welt' funktionieren.",
        "The best way to get to know our company is by applying for an internship at Avantama. If you get picked by us, you will enjoy an intership where you get treated almost as a regular employee. This means you will be involved in projects of highest importance and you can learn how things work in the real world.")
    ),
    7 => array(
      'question' => array(
        "Warum Avantama? Gibt es Vorteile, wenn man für eine relativ junge Firma arbeitet im Vergleich zur Arbeit bei einem etablierten Arbeitgeber?",
        "Why did you chose to work for Avantama? Are there advantages in working for a relatively young company compared to working for a more established employer?"),
      'answer' => array(
        "Arbeit in einer schnell wachsenden Firma bedeutet dass die Atmosphäre und Mentalität beide sehr dynamisch sind. Dadurch wird man auch nicht von strikten Firmenvorschriften und –regeln behindert. Ich persönlich finde es auch sehr inspirierend in einer kleinen Firma zu arbeiten und zeitgleich mit ein paar der größten Firmen der Welt zusammenzuarbeiten.",
        "Working in a fast growing company means that the mentality and atmosphere are really dynamic and you don’t get distracted by rigid company policies and regulations. Also, I find it quite stimulating to work in a small company and collaborating with some of the largest enterprises in the world.")
    ),
    8 => array(
      'question' => array(
        "Wie sehen die Zukunftspläne von Avantama aus? Planen Sie in der Schweiz zu bleiben oder sind Expansionen geplant?",
        "What has Avantama planned for the future? Do you plan on staying within Switzerland or do you want to expand?"),
      'answer' => array(
        "Wir planen zur Zeit unsere Forschung&ampEntwicklung sowie die Produktion an unserem Hauptstandort in Stäfa ZH auszubauen. Da der Grossteil unserer Kunden allerdings in Asien ist, werden wir in der näheren Zukunft auch Standorte in Asien eröffnen.",
        "We plan to further expand our R&D and production activities in our homebase in Stäfa ZH. On the other hand, most of our customers are based in Asia, which means that we will also need to open locations in Asia in the near future.")
    ),
    9 => array(
      'question' => array(
        "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
        "What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
      'answer' => array(
        "Reden Sie mit vielen verschiedenen Menschen! Denken Sie darüber nach was Sie in Ihrem Leben erreichen wollen, was Ihre Stärken und Schwächen sind und zielen Sie auf den Job ab, von dem Sie denken dass Sie am meisten Spaß dabei haben werden. Und wenn Sie die Früchte Ihrer Arbeit in der Elektronik von morgen sehen wollen, dann bewerben Sie sich bei Avantama!",
        "Talk to many different people! Think about what you want to achieve in life, what your strengths and weaknesses are and go for the job where you think you will have the most fun! And if you want to see the fruits of your work in tomorrow’s electronics, apply at Avantama!")
    ),
  ),
);

// $template['interview']['2017'][$i++] = array(
//   'name' => 'Esther Tschanen-Hamman',
//   'img_url' => $awss3.'/img/team/member_2',
//   'position' => array('Co-Präsident der Chemtogether', 'Head of Chemtogether'),
//
//   'education' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('PhD. in Chemie an der ETH Zürich','PhD. in chemistry at ETH Zürich')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('M.Sc. in Chemie an der ETH Zürich','M.Sc. in chemistry at ETH Zürich')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('B.Sc. in Chemie an der ETH Zürich','B.Sc. in chemistry at ETH Zürich')
//     ),
//   ),
//
//   'career' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('CEO bei Chemtogether','CEO at Chemtogether')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('Team-Leiter bei Chemtogether','Team-Manager at Chemtogether')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('Mitglied der Chemtogether','Member of Chemtogether')
//     ),
//   ),
//
//   'interview' => array(
//     0 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     1 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     2 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     3 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     4 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     5 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     6 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     7 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     8 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     9 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//   ),
// );
//
// $i = 0;
// $template['interview']['2016'][$i++] = array(
//   'name' => 'Esther Tschanen-Hamman',
//   'img_url' => $awss3.'/img/team/member_2',
//   'position' => array('Co-Präsident der Chemtogether', 'Head of Chemtogether'),
//
//   'education' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('PhD. in Chemie an der ETH Zürich','PhD. in chemistry at ETH Zürich')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('M.Sc. in Chemie an der ETH Zürich','M.Sc. in chemistry at ETH Zürich')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('B.Sc. in Chemie an der ETH Zürich','B.Sc. in chemistry at ETH Zürich')
//     ),
//   ),
//
//   'career' => array(
//     0 => array(
//       'date' => '2000-2002',
//       'desc' => array('CEO bei Chemtogether','CEO at Chemtogether')
//     ),
//     1 => array(
//       'date' => '2000-2002',
//       'desc' => array('Team-Leiter bei Chemtogether','Team-Manager at Chemtogether')
//     ),
//     2 => array(
//       'date' => '2000-2002',
//       'desc' => array('Mitglied der Chemtogether','Member of Chemtogether')
//     ),
//   ),
//
//   'interview' => array(
//     0 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     1 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     2 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     3 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     4 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     5 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     6 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     7 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     8 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//     9 => array(
//       'question' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet?'),
//       'answer' => array('Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.','Chemtogether ist eine Messe an der ETH Zürich, die Studierende mit Firmen in den Bereichen Chemie und Pharmazie verbindet. An den zwei Messetagen stellen sich je 9 unterschiedliche Unternehmen vor und erlauben es den Studenten wie Doktorierenden Kontakt mit insgesamt 18 Firmen aus der industriellen Chemie und Pharmazie herzustellen.')
//     ),
//   ),
// );
//



include('../0_template/template.php');

?>
