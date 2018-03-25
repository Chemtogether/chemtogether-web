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


$template['company_name'] = 'Carbogen Amcis';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = $awss3_archive.'/carbogenamcis/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether 2018 - Archiv: '.$template['company_name'], 'Chemtogether 2018 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','Carbogen Amcis');
$template['mail'] = array('bewerbung','carbogen-amcis.com');

$template['we_are'] = array(
  'CARBOGEN AMCIS was founded in
2006 as a result of the merger between
“AMCIS” and “CarboGen.” AMCIS was
founded in 1982 as a joint venture with
an American pharmaceutical company
and CarboGen in 1990 at the University
of Zurich.<br>
We are a leading service provider in
the area of organic chemistry, product
and process development to commercial
production of Active Pharmaceutical
Ingredients (APIs) for the pharmaceutical
and bio-pharmaceutical industry.
Our core markets are in North America,
Europe and Asia. We have 4 facilities
across Switzerland (Aarau, Hunzenschwil,
Bubendorf, and Vionnaz)
as well as facilities in France, United
Kingdom and Shanghai. Our focus is to
help customers create a better world.',
  'CARBOGEN AMCIS was founded in
2006 as a result of the merger between
“AMCIS” and “CarboGen.” AMCIS was
founded in 1982 as a joint venture with
an American pharmaceutical company
and CarboGen in 1990 at the University
of Zurich.<br>
We are a leading service provider in
the area of organic chemistry, product
and process development to commercial
production of Active Pharmaceutical
Ingredients (APIs) for the pharmaceutical
and bio-pharmaceutical industry.
Our core markets are in North America,
Europe and Asia. We have 4 facilities
across Switzerland (Aarau, Hunzenschwil,
Bubendorf, and Vionnaz)
as well as facilities in France, United
Kingdom and Shanghai. Our focus is to
help customers create a better world.');
$template['we_offer'] = array(
  'Varied Work &amp High Responsibility<br>
Career Development opportunities<br>
Flexible Working Hours<br>
Supportive &amp Diverse Workplace<br>
Private Travel Insurance<br><br>
Would you like to be a part of
CARBOGEN AMCIS and have a direct
impact on our business growth? Then
visit our <a href="http://www.carbogen-amcis.com/careers.asp">career homepage</a> or submit an expression of interest
via <a href="mailto:bewerbung@carbogen-amcis.com">bewerbung@carbogen-amcis.com</a>',
  'Varied Work &amp High Responsibility<br>
Career Development opportunities<br>
Flexible Working Hours<br>
Supportive &amp Diverse Workplace<br>
Private Travel Insurance<br><br>
Would you like to be a part of
CARBOGEN AMCIS and have a direct
impact on our business growth? Then
visit our <a href="http://www.carbogen-amcis.com/careers.asp">career homepage</a> or submit an expression of interest
via <a href="mailto:bewerbung@carbogen-amcis.com">bewerbung@carbogen-amcis.com</a>');
$template['we_look'] = array(
  '...individuals with an educational and
professional background in:<br>
Chemical Research & Development<br>
Quality Control & Assurance<br>
Analytical Development<br>
Quality Systems<br>
Chemical Production<br>
Regulatory Affairs<br>
Post-Doc<br><br>
We expect:<br>
University Degree in Chemistry or
Pharmaceutical Chemistry<br>
Ability to Work in a Team Environment<br>
Good Communication & Organizational
Skills<br>
Solid Knowledge of German & English',
  '...individuals with an educational and
professional background in:<br>
Chemical Research & Development<br>
Quality Control & Assurance<br>
Analytical Development<br>
Quality Systems<br>
Chemical Production<br>
Regulatory Affairs<br>
Post-Doc<br><br>
We expect:<br>
University Degree in Chemistry or
Pharmaceutical Chemistry<br>
Ability to Work in a Team Environment<br>
Good Communication & Organizational
Skills<br>
Solid Knowledge of German & English');


$i=0;
$template['interview']['2017'][$i++] = array(
  'name' => 'Dr. Jonas Bürgler',
  'img_url' => set_source($awss3_archive.'/carbogenamcis/interview-2017-1', 'png', FALSE),
  'position' => array('Senior Chemist R&D', 'Senior Chemist R&D'),

  'education' => array(
    0 => array(
      'date' => '2002-2006',
      'desc' => array('MSc ETH Chemie','MSc ETH Chemistry')
    ),
    1 => array(
      'date' => '2007-2011',
      'desc' => array('ETH Zürich Doktorat und PostDoc bei Prof. Dr. Togni','ETH Zurich PhD and PostDoc with Prof. Dr. Togni')
    ),
    2 => array(
      'date' => '2011-2013',
      'desc' => array('Colorado State University PostDoc bei Dr. Wood','Colorado State University PostDoc with Dr. Wood')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2013-2017',
      'desc' => array('Project Chemist PR&D bei CARBOGEN AMCIS','Project Chemist PR&D at CARBOGEN AMCIS')
    ),
    1 => array(
      'date' => '2017',
      'desc' => array('Senior Chemist PR&D bei CARBOGEN AMCIS','Senior Chemist PR&D at CARBOGEN AMCIS')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array(
        "Was sind Ihre Aufgaben als Senior Chemist PR&D bei CARBOGEN AMCIS?",
        "What do you do as Senior Chemist PR&D at CARBOGEN AMCIS?"),
      'answer' => array(
        "Ich bin ein leitender Chemiker in der Abteilung für Prozessforschung und Entwicklung in unserem Unternehmen. In meiner Verantwortung liegt die Laborentwicklung, ich kontrolliere die Produktion meiner Projekte, organisiere die Rohmaterialien und schreibe Produktionsvorschriften. Ich arbeite eng zusammen mit der Abteilung für Qualitätskontrolle um eine hohe Qualität unserer Wirkstoffe gewährleisten zu können. Darüber hinaus schreibe ich Offerten für zukünftige Projekte und kommuniziere den Fortschritt von Projekten an unsere Kunden (in Form von Berichten oder in Telefonkonferenzen).",
        "I work in the Process Research and Development department of our company. I supervise the lab development and oversee the production of my projects, organize raw materials and write instructions. I work in close collaboration with the analytical and the quality control departments in order to ensure a high product quality. I also write proposals for future projects and communicate project progress internally and to the customer (written in reports and orally in telecons).")
    ),
    1 => array(
      'question' => array(
        "Arbeiten Sie die meiste Zeit in Bubendorf oder bringt Ihre Position viel Reisen mit sich?",
        "Are you working in Bubendorf most of the time or does your position entail a lot of traveling?."),
      'answer' => array(
        "CARBOGEN AMCIS hat vier Standorte in der Schweiz, wobei Bubendorf als größter Standort auch der Hauptsitz ist. Ich arbeite am Standort Neuland in Hunzenschwil, einer kleinen Stadt in der Nähe von Lenzburg. Abhängig von den Projekten an denen ich gerade arbeite reise ich auch ein- oder zweimal im Monat zu den Standorten in Aarau und Bubendorf. Abgesehen von den anderen Standorten von CARBOGEN AMCIS ist es in meiner Position eher ungewöhnlich zu Reisen und kommt daher auch kaum vor.",
        "CARBOGEN AMCIS has four sites in Switzerland, Bubendorf being the Head Quarter and biggest site. I work at the Neuland site in Hunzenschwil, a small town close to Lenzburg. Generally, I am based at this site but depending on the projects I am working on, travelling to the other sites in Aarau and Bubendorf once or twice a month is normal. Visiting other places than CARBOGEN AMCIS sites is not very common in my position, thus long distance travelling is not a big part.")
    ),
    2 => array(
      'question' => array(
        "Während Ihres Doktorats haben Sie an P-stereogenen Ferrocenyl Phosphinen und deren Anwendung als Liganden in der asymmetrischen Katalyse gearbeitet. Ist Ihnen Ihr dabei erlerntes Wissen bei CARBOGEN AMCIS von Vorteil?",
        "Your dissertation was focused on synthesizing P-stereogenic Ferrocenyl phospines and their application as ligands in asymmetric catalysis. Were you able to use this experience in your tasks at CARBOGEN AMCIS?"),
      'answer' => array(
        "Ich hatte bisher noch nicht die Chance mit phosphorhaltigen Verbindungen oder mit Ferrocenen zu arbeiten, jedoch ist die Anwendung von katalytischen Methoden und ein guter Kenntnisstand in metallorganischer Chemie und asymmetrischer Synthese eine Voraussetzung für meine Arbeit. Eines der wichtigsten Dinge die man während seines Doktorats lernt ist meiner Meinung nach wie man ein spezifisches Problem angeht und schließlich löst.",
        "I have not had the chance to work with phosphorus containing compounds nor on ferrocenes, however the application of catalytic methods and a broad knowledge of organometallic chemistry and asymmetric synthesis is a requisite in my daily work. Also, in my opinion, the most important thing a student will learn during his Ph.D. studies is how to tackle and solve a specific problem.")
    ),
    3 => array(
      'question' => array(
        "Also ist in der Industrie nicht notwendig Experte auf einem spezialisierten Gebiet zu sein, wie zum Beispiel dem einer Doktorarbeit?",
        "So being specialized on a small, defined topic – like the topic of a PhD-thesis is not necessarily needed in industry?"),
      'answer' => array(
        "Ein Spezialist in einem Teilgebiet der organischen Chemie zu sein ist sicher nützlich, jedoch ist es von viel größerer Bedeutung ein breites Wissen in synthetischer organischer Chemie vorzuweisen und lösungsorientiert arbeiten zu können.",
        "Being a specialist in a certain area of organic chemistry can help, but having a broad knowledge in synthetic organic chemistry and excellent problem solving skills are definitely more important.")
    ),
    4 => array(
      'question' => array(
        "Wie unterscheidet sich die Tätigkeit an einer Universität von Arbeit in der Industrie?",
        "How does work in the university differ from the work in industry?"),
      'answer' => array(
        "In der Industrie liegt der Fokus stärker auf dem Erreichen eines Ziels als darauf, eine wissenschaftliche Begründung zu finden oder eine These zu belegen. Besonders für Dienstleister wie CARBOGEN AMICS ist es oft wichtiger, eine bestimmte Menge eines Produkts zu liefern als dieses auf dem elegantesten Weg herzustellen. Sicherheitsvorschriften, Qualitätsaspekte sowie Behördenanforderungen und Kundenansprüche sind weitere Faktoren, welche einen Prozess beeinflussen, während an Universitäten die “Chemie” des Öfteren der einzige Aspekt ist, welchen es zu beachten gilt.",
        "In the industry the focus is more on achieving the target than on finding the scientific rationale or prove a thesis. Especially as a service provider like CARBOGEN AMCIS very often delivering a certain amount of product is more important than finding the most elegant way to produce it. Also due to safety reasons, quality aspects as well as authority and customer requirements there are several additional factors that impact the process, while at the university the “chemistry” is mostly the only factor to be considered.")
    ),
    5 => array(
      'question' => array(
        "Gibt es einen direkten Weg sich von CARBOGEN AMICS ein eigenes Bild zu machen – entweder durch ein Praktikum oder ein Zusammenarbeit im akademischen Umfeld?",
        "Is there a way to get to know CARBOGEN AMCIS first-hand - either via internships or collaborations with universities?"),
      'answer' => array(
        "Durchaus. Wir offerieren Lehrstellen sowie Praktika an gewissen CARBOGEN AMICS-Standorten an. Studenten können für weitere Informationen dazu direkt unser Personalbeschaffungsteam kontaktieren. Wir kollaborieren von Zeit zu Zeit ebenfalls mit Universitäten, meistens für kleine Syntheseprojekte.",
        "Yes, we have apprenticeship and internship opportunities at certain CARBOGEN AMCIS sites. The best thing for students to do is to contact our recruitment team for further information. I also know that we sometimes collaborate with universities, mostly in small synthetic projects.")
    ),
    6 => array(
      'question' => array(
        "Wie finden Sie neue Ideen für zukünftige Projekte?",
        "How do you come up with ideas for future projects?"),
      'answer' => array(
        "Als Dienstleister sind wir oft den Synthesewegen und Vorstellungen der Kunden verpflichtet. Wenn wir jedoch zeigen können, dass gewisse Änderungen einen Prozess sicherer, effizienter oder kosteneffizienter machen, stimmen die meisten Kunden diesen Änderungen gerne zu. Dies ist in der Anfangsphase eines Projekts, in welcher der Kunde weniger an einen vorhandenen Prozess gebunden ist, öfters der Fall.",
        "Being a service provider we are often bound to the synthetic routes and ideas provided by the customers. However, if we can demonstrate that a certain change can make the process safer, more efficient and/or cost efficient most customers are happy to agree. This is mostly the case with early phase projects where the customer is less restricted to a “fixed” process.")
    ),
    7 => array(
      'question' => array(
        "Ist es immer einfach, Ihre Kunden von diesen zu überzeugen?",
        "Is it always easy to convince your customers to actually pursue them?"),
      'answer' => array(
        "Viele Kunden sind auch daran interessiert, die Kosten einer ausführlichen Entwicklung niedrig zu halten, besonders wenn sie davon überzeugt sind, das ihr Prozess für die Produktion gut genug ist. Deswegen ist es nicht immer einfach, sie für mehr Prozessentwickung zu begeistern, auch wenn dies uns und unseren Kunden das Leben einfacher machen könnte.",
        "Most customers try to keep the cost of an extended development down by reducing this part as much as possible, especially when they think they have a process good enough for production. Therefore, it is not always easy to convince them to do more development, even if it could facilitate our and the customers life.")
    ),
    8 => array(
      'question' => array(
        "Was hat dazu geführt, CARBOGEN AMCIS als Arbeitgeber zu wählen? Wie war der Bewerbungsvorgang – haben Sie sich auf eine ausgeschriebene Bewerbung oder war es eine Initiativbewerbung?",
        "What led you to choose CARBOGEN AMCIS as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
      'answer' => array(
        "Ich habe mich auf eine ausgeschriebene Position beworben, eine Eintrittsstelle als Projektchemiker. Ich hatte ein Interview vor Ort, welches mir ein gutes Bild von CARBOGEN AMCIS und auch von meiner Funktion als Projektchemiker gegeben hat. Die Leute waren freundlich und die Atmosphäre locker und offen, was mich überzeugt hat, dass die Arbeit bei CARBOGEN AMCIS zu mir passt. Und ich bin immer noch der gleichen Ansicht",
        "I applied for an advertised position, an entry position as project chemist. I had an on-site interview, which gave me a good picture of CARBOGEN AMCIS and also of my function as a project chemist. The people I met were friendly and the atmosphere was relaxed and open, which convinced me that working for CARBOGEN AMCIS should suit me well. And I am still of the same opinion.")
    ),
    9 => array(
      'question' => array(
        "Was wäre Ihr Ratschlag für eine Person, die kürzlich einen Abschluss an der ETH gemacht hat und einen Job sucht?",
        "What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
      'answer' => array(
        "Ich denke, dass es wichtig ist zu versuchen, einen Job zu finden, der gut zu einem passt. Bei dem derzeitigen Arbeitsmarkt ist dies schwierig, oft bewerben sich Studienabgänger auf Stellen, die sie gar nicht unbedingt wollen nur um einen Fuss in der Tür zu haben. Das ist verständlich, aber normalerweise profitiert weder der Angestellte noch die Firma davon. Mit einem Ph.D. in Chemie hat man eine grosse Auswahl von Optionen in vielen Feldern der chemischen Industrie, daher ist es wichtig sich über die Möglichkeiten zu informieren und herauszufinden, welche Stelle am besten passen würde. Deshalb ist es wichtig, die Stellenbeschreibungen gründlich zu lesen um heraus zu finden um was es in dem Job geht. Es ist auch nicht verboten, die Firmen direkt nach mehr Informationen zu fragen.",
        "I think it is important to try to find a job that suits oneself. With the current job market this is difficult and often graduates apply for positions they don’t necessarily want, just to have the foot in the door. This is understandable but normally neither the employee nor the company really benefits from this. With a Ph.D. in chemistry one has a large variety of options in many areas of the chemical industry, thus it is important to inform oneself about the possibilities and find out which position would suit best. Therefore, it is important to carefully read the job descriptions to find out what the job is about. It is also not forbidden to directly ask the companies to obtain more information.")
    ),
  ),
);



include('../0_template/template.php');

?>
