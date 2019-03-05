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
$template['interview']['2018'][$i++] = array(
  'name' => 'Dr. Emad El Sayed',
  'img_url' => set_source($awss3.'/companies/carbogenamcis/interviewee_1', 'png', FALSE),
  'position' => array('Manager PR&D', 'Manager PR&D'),

  'education' => array(
    0 => array(
      'date' => '1999-2001',
      'desc' => array('Postdoktorat in asymmetrischer Synthese an der ETH Zürich', 'PostDoc in asymmetric synthesis at ETH Zurich')
    ),
    1 => array(
      'date' => '1994-1999',
      'desc' => array('Doktorat in katalytischer asymmetrischer Synthese an der Université de Genève', 'PhD in catalytic asymmetric synthesis at Université de Genève')
    ),
    2 => array(
      'date' => '1989-1994',
      'desc' => array('M.Sc. in Chemie an der University of Massachusetts und Alexandria University', 'M.Sc. in Chemistry at University of Massachusetts and Alexandria University')
    ),
    3 => array(
      'date' => '1985-1989',
      'desc' => array('B.Sc. in Chemie an der Alexandria University', 'B.Sc. in Chemistry at Alexandria University')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2015',
      'desc' => array('Manager PR&D bei Carbogen Amcis', 'Manager PR&D at Carbogen Amcis')
    ),
    1 => array(
      'date' => '2007-2015',
      'desc' => array('Senior Chemist bei Carbogen Amcis', 'Senior Chemist at Carbogen Amcis')
    ),
    2 => array(
      'date' => '2001-2006',
      'desc' => array('Project Chemist bei Carbogen Amcis', 'Project Chemist at Carbogen Amcis')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Manager Process Research & Development bei CARBOGEN AMCIS?',
                          'What are your responsibilities as Manager Process Research & Development at CARBOGEN AMCIS?'),
      'answer' => array('Ich fungiere als Plattform für den Informationsaustausch und unterstütze meine Gruppe aus Chemikern und Labortechnikern. In den Bereich meiner Zuständigkeit fallen auch das Überprüfen der Ressourcenverfügbarkeit, Vorstellungsgespräche neuer Gruppenmitglieder, die Schulung der Gruppenmitglieder und die Bearbeitung von Kundenanfragen. Zusätzlich vertrete ich die Firma bei Veranstaltungen.',
                        'I act as an information exchange platform and support my group of chemists and lab technicians. Some of my other responsibilities include the inspection of resource availabilities, recruitment interviews for new group members, training of group members and preparing and planning of customers’ requests for proposals. I also represent the company at events.')
    ),
    1 => array(
      'question' => array('Sie haben Chemie studiert. Beschäftigt CARBOGEN AMCIS auch Absolventen anderer Fachrichtungen (Chemieingenieure, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Chemistry. Does CARBOGEN AMCIS also employ graduates of other fields of study (Chemical Engineering, Interdisciplinary Sciences)?'),
      'answer' => array('Ja, neben der Mehrheit an Chemikern stellt CARBOGEN AMCIS auch Chemieingenieure, Biologen und Toxikologen (m/w) an.',
                        'Yes, CARBOGEN AMCIS also employs Chemical Engineers, Biologists as well as Toxicologists in addition to the majority of the Chemistry degree holders.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Die Arbeit in der Industrie unterscheidet sich deutlich von der an der Universität, obwohl die beiden Gebiete stark verbunden und voneinander abhängig sind. Das Leben in der Industrie ist durch zwei Aspekte gekennzeichnet.<br>
      Erstens ist der Umgang mit Menschen wichtig. Man hat mit Kollegen (aus der gleichen oder einer anderen Abteilung), Zulieferern, externen Technikern, Kunden (kleine bis grosse Unternehmen), Beratern und Behörden zu tun. Jede Gruppe hat ihre eigenen Erwartungen, Ziele, Interessen und Prioritäten.<br>      
      Zweitens sind die Prioritäten in der Industrie anders verteilt. Universitäten konzentrieren sich mehr auf die rein methodologische, wissenschaftliche Herangehensweise. In der Industrie ist der wissenschaftliche Aspekt nur einer von vielen. Wichtig sind vor allem die Durchführbarkeit, Atomeffizienz, Robustheit und Reproduzierbarkeit eines Prozesses. Weiters ist man natürlich an der Minimierung der Produktionszeit sowie der Rohstoffkosten interessiert.
      ',
                        'Work in the industry differs to great extent from the one at university, although the two fields are very much connected and interdependent from each other. There are two main aspects to industry life. Firstly, the human interaction is important. One interacts with colleagues (from the same or different departments), suppliers, external technicians, customers (big to small organizations), consultants and authorities. Each category has its expectations, targets and fields of interest and focus. <br>Secondly, the focus of activities is different. Universities tend to focus on the pure methodological and scientific approach. In industry the scientific approach is in the center of interest beside other aspects such as practicability, both atom and financial economies, robustness and reproducibility of processes, pragmatic solutions, reduction of manufacturing time and cost of goods, etc..')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich CARBOGEN AMCIS als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose CARBOGEN AMCIS as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Als noch relativ junger Chemiker gegen Ende meines Postdocs an der ETH Zürich war ich noch stark in Richtung einer akademischen Karriere ausgerichtet. Im Laufe mehrerer Vorstellungsgespräche in der Industrie habe ich allerdings schnell erkannt, dass es da noch ein ganz anderes Universum gibt, das immer noch mit der akademischen Welt zusammenhängt. Damals war die Industrie für mich noch völlig unbekannt. Im Jahr 2001, noch vor dem Zusammenschluss, war Carbogen Laboratories ein junges, dynamisches Unternehmen voller talentierter Chemikerinnen und Chemiker mit aussergewöhnlichem Innovationspotential. Aus diesem Grund hatte ich die Möglichkeit, mit dem Unternehmen mitzuwachsen und zusammen mit meinen Kolleginnen und Kollegen weitreichend dazu beizutragen, wofür CARBOGEN AMCIS heute bekannt ist.<br>
      Die Bewerbung selbst ist schon sehr lange her. Das Bewerbungsverfahren war dynamisch wie CARBOGEN AMCIS selbst: direkter Kontakt, Einladung zum Vorstellungsgespräch, Präsentation meiner Ph.D.- bzw. Postdoc-Arbeit. Wir haben ausgiebig über die ausgeschriebene Stelle gesprochen, alles in einer freundlichen, offenen Atmosphäre.',
                        'As still a middle young chemist just ending his Postdoc studies at ETH Zürich I was much focused on an academic career. I explored the option of an industrial career. It was during my different interviews in the industry that I quickly realized that there was another universe still related to and interacting with the academic world. The industry was totally unknown to me at that time. It was my eagerness to explore new fields that made me move more towards this industry. Back in 2001, (before the merger) Carbogen Laboratories was a young dynamic organization focused on innovation and it was full of talented chemists which offered extraordinary innovation potential. Accordingly, I had this unique opportunity to grow with, shape and contribute extensively together with my colleagues to what CARBOGEN AMCIS is known for today.<br>
                        As far as the application process is concerned: it was a very long time ago. The application process was as dynamic as CARBOGEN AMCIS is: direct contact, invitation to interview, oral presentation of my Ph.D. / Postdoc. work in English. Open discussions and description of the role of a Project Chemist, which was the position that I applied for at that time. In short a friendly, open and focused atmosphere.
                        ')
    ),
    4 => array(
      'question' => array('Welche Fähigkeiten und Qualitäten erwartet CARBOGEN AMCIS von Chemieabsolventen mit PhD/MSc.-Abschluss?',
                          'Which abilities and qualities does CARBOGEN AMCIS expect of Chemistry graduates with a Ph.D./M.Sc. degree?'),
      'answer' => array('Natürlich erwarten wir ein fundiertes chemisches Grundwissen. Sehr gute Englisch- und Deutschkenntnisse sind ein grosser Vorteil. Wir wünschen uns auch eine systematische Arbeitsweise, gleichzeitig aber mit innovativen Ansätzen.',
                        'Obviously we expect a deep and solid Chemistry knowledge background. Very good mastering of the English and German language is a big advantage. We encourage a systematic way of working but also at the same time with an innovative approach.')
    ),
    5 => array(
      'question' => array('Welche ausserfachlichen Kompetenzen sollten sich die Studierenden an der Universität aneignen um in einem Pharmaunternehmen wie CARBOGEN AMCIS erfolgreich zu sein?',
                          'Which soft skills should students try to acquire in the course of their studies to succeed in a pharmaceutical company like CARBOGEN AMCIS?'),
      'answer' => array('Kommunikations- und Präsentationsfähigkeiten, die Fähigkeit gut zuzuhören, Geduld und Konzentration. Von Vorteil sind auch eine pragmatische, lösungsorientierte Arbeitsweise, Flexibilität und Aufgeschlossenheit gegenüber neuen Themengebieten.',
                        'Some of the most important ones are communication and presentation skills, a strong ability to thoroughly listen rather than hearing, patience and the ability to remain focused. It’s also helpful to have a pragmatic, solution-oriented way of thinking, be flexible and open to learn in new fields.')
    ),
    6 => array(
      'question' => array('Sie haben vor 17 Jahren bei CARBOGEN AMCIS als Projektchemiker begonnen und seitdem verschiedene Karrierestufen durchlaufen. Welche Aufstiegsmöglichkeiten und Karrierewege gibt es in ihrem Unternehmen?',
                          'Since joining CARBOGEN AMCIS 17 years ago as a Project Chemist, you have held several different positions within the company. Could you describe some of the career opportunities that exist within the company?'),
      'answer' => array('Die Möglichkeiten sind oft von der Abteilung abhängig. Generell bieten wir folgende Chancen:<table class="fa-table">
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Praktische Aufgaben (z.B. Projektchemiker)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Projektmanagement (z.B. Organisation technischer Angelegenheiten zwischen verschiedenen Standorten)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Key Account Management (z.B. Betreuung der Grosskunden und Ansprechpartner bei Fragen und Unsicherheiten, Beratung und Erarbeitung von bestmöglichen Lösungsvorschlägen im Sinne der Kunden)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Marketing und Vertrieb (z.B. Vertreter von CARBOGEN AMCIS in der Schweiz und im Ausland und unser Leistungsvermögen, unsere Stärken und unsere Vielfältigkeit unseren zukünftigen Kunden präsentieren)</td>
      </tr>
      </table>Weitere Möglichkeiten gibt es in den Bereichen QC&A (Quality Control and Analytical Development), QA (Quality Assurance), QS (Quality Systems) und der Evaluation von Kundenanfragen.
      ',
                        'Career opportunities can slightly differ according to the department (within CARBOGEN AMCIS) in question. Generally, we offer the following opportunities:<table class="fa-table">
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Hands-on responsibilities (e.g. Project Chemist position)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Project Management activities (e.g. organization of technical activities between different sites)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Key Account Managers (e.g. primary contact person for a certain given customer collecting their questions and uncertainties and guiding them through the organization to find the best fit for fulfilling their expectations and needs)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Sales and Marketing (e.g. representing CARBOGEN AMCIS inside and outside Switzerland - promoting our organizational capabilities, strengths and diversities to our future customers)</td>
                        </tr>
                        </table>
                        Additional opportunities include QC&A (Quality Control and Analytical Development), QA (Quality Assurance), QS (Quality Systems) and Evaluation of Customers request.
                          ')
    ),
    7 => array(
      'question' => array('Direkt vor Ihrem Einstieg bei CARBOGEN AMCIS haben Sie einen zweijährigen Postdoc an der ETH absolviert. Hat das für Sie den Einstieg in das Unternehmen erleichtert oder hätten Sie denselben Weg auch direkt nach Ihrem Ph.D.-Abschluss einschlagen können?',
                          'Before joining CARBOGEN AMCIS you spent two years as a postdoc at ETH. Did this help you in the recruitment process or could you have entered the same career path right after your Ph.D.?'),
      'answer' => array('Mein Postdoc an der ETH hat meine wissenschaftlichen Kenntnisse weiter gefestigt und mir so eine noch bessere Grundlage für meine Entwicklung bei CARBOGEN AMCIS verschafft. Ich hätte auch direkt nach meinem Ph.D. bei CARBOGEN AMCIS anfangen können, aber für mich persönlich war der Postdoc auf jeden Fall von Vorteil.',
                        'My postdoc at ETH helped me to stand on an even more solid ground with my scientific as well as instrumental knowledge gained at CARBOGEN AMCIS. I could have joined CARBOGEN AMCIS directly after the Ph.D. but the postdoc was for my case at least an advantage.')
    ),
    8 => array(
      'question' => array('Sie haben Ihr Studium in Ägypten, den USA und der Schweiz absolviert. Legen Sie als Arbeitgeber besonderen Wert darauf, dass man als Bewerber*in Auslandserfahrung vorzuweisen hat?',
                          'You studied at universities in Egypt, the USA and Switzerland. Is it important for you as an employer that an applicant has international experience?'),
      'answer' => array('In Frage 6 ging es um Kommunikationsfähigkeiten. Diese sind sehr wichtig (wie auch in Frage 3 beschrieben) weil Kommunikation in der Industrie über verschiedene Leute mit unterschiedlicher Ausbildung, Erfahrung und kulturellem Hintergrund geht. Zusätzlich wird oft in Fremdsprachen kommuniziert. Auslandserfahrung ist zwar kein Muss, aber auf jeden Fall ein Vorteil.',
                        'In question 6 we spoke about communication skills. Communication skills are very important (as also described in the answer to question 3) because in industry communication flows through different people with a very broad range of experience, education, intellectual as well as cultural aspects. In addition one would deal with persons with different languages. Although having an international experience has its advantage, it is not a must.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Erweitern Sie laufend Ihr fachliches Wissen. Hören Sie gut zu und überlegen Sie sich Ihre Antwort gut. Denken Sie kreativ. Erinnern Sie sich daran, dass was Sie sehen oder glauben zu verstehen, wie die Sterne am Himmel, nicht unbedingt dem entspricht, wie es tatsächlich ist. Seien Sie pragmatisch und wählen Sie den Weg des geringsten Widerstandes. Bleiben Sie sich selbst treu und denken Sie daran, dass sie zu gegebener Zeit in den Spiegel schauen müssen. Spielen Sie immer mit offenen Karten, dadurch schlagen Sie Brücken zwischen Ihnen und Ihrer Umgebung. Kein Mensch der Welt weiss alles - haben Sie auch den Mut zu sagen «Ich weiss es nicht.». Vor einem Problem zu stehen ist nicht das wahre Problem. Das wahre Problem ist, wie man damit umgeht. Das macht den Unterschied zwischen Ihnen und allen anderen aus.',
                        'Remain interested in broadening your field of knowledge. Listen (don’t hear) and be patient in giving an answer or a comment. Think out of the box. Understand and apply your field of education. Like the stars in heaven, remember that what you see or think you understand is not necessarily what actually is. Be pragmatic and like water flowing downhill follow the path that costs you the least energy. Remain true and authentic to yourself – remember that at a certain moment in life you have to look in the mirror. Always play with open cards this will build bridges between you and your surroundings. No person on earth knows everything. Have the courage to also say: “I don’t know”. Facing a problem is not the real problem. Your main problem is how to deal with the problem. This is what makes you different from anybody else.')
    ),
  ),
);

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
