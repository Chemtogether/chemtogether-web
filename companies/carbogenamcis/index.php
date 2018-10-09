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
    "title"        => "Interview with Dr. Emad El Sayed from Carbogen Amcis - Chemtogether",
    "desc"         => "Dr. Emad El Sayed works as Manager PR&D at Carbogen Amcis. Learn more about his career and work in his interview, and meet Carbogen Amcis at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/carbogenamcis_20181002.jpg",
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


$template['company_name'] = 'Carbogen Amcis';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3.'/companies/carbogenamcis/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','Carbogen Amcis');
$template['mail'] = array('bewerbung','carbogen-amcis.com');
$template['archive'] = '/archive/carbogenamcis';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'CARBOGEN AMCIS was founded in 2006 as a result of the merger between “AMCIS” and “CarboGen.” AMCIS was founded in 1982 as a joint venture with an American pharmaceutical company and CarboGen in 1990 at the University of Zurich.<br> We are a leading service provider in the area of organic chemistry, product and process development to commercial production of Active Pharmaceutical Ingredients (APIs) for the pharmaceutical and bio-pharmaceutical industry. Our core markets are in North America, Europe and Asia. We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz) as well as facilities in France, United Kingdom and Shanghai. Our focus is to help customers create a better world.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => '<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Varied Work &amp High Responsibility</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Career Development opportunities</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Flexible Working Hours</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Supportive &amp Diverse Workplace</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Private Travel Insurance</td>
  </tr>
  </table><br>Would you like to be a part of CARBOGEN AMCIS and have a direct impact on our business growth? Then visit our <a href="http://www.carbogen-amcis.com/careers.asp">career homepage</a> or submit an expression of interest via <a href="mailto:bewerbung@carbogen-amcis.com">bewerbung@carbogen-amcis.com</a>.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => '...individuals with an educational and
  professional background in:
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Chemical Research & Development</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Quality Control & Assurance</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Analytical Development</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Quality Systems</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Chemical Production</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Regulatory Affairs</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Post-Doc</td>
  </tr>
  </table><br>
  We expect:  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>University Degree in Chemistry or
  Pharmaceutical Chemistry</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Ability to Work in a Team Environment</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Good Communication & Organizational
  Skills</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>Solid Knowledge of German & English</td>
  </tr>
  </table>');



$template['interview_print_until'] = 0;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i = 0;


$template['interview'][$i++] = array(
  'name' => 'Dr. Emad El Sayed',
  'img_url' => $awss3.'/companies/carbogenamcis/interviewee_1',
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



include('../0_template/template.php');



?>
