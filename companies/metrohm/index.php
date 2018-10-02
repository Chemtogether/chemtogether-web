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
    "title"        => "Interview with Dr. Vincent Diederich from Metrohm - Chemtogether",
    "desc"         => "Dr. Vincent Diederich works as Production Engineer & Interim Department Head at the Department of Separation Column Production at Metrohm. Learn more about his career and work in his interview, and meet Metrohm at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/metrohm_20181001.jpg",
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

$template['company_name'] = 'Metrohm';
$template['company_name_short'] = 'metrohm';
$template['logo_url'] = set_source($awss3.'/companies/metrohm/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');
$template['archive'] = '/archive/metrohm';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Coming soon.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Coming soon.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'Coming soon.');



$template['interview_print_until'] = 0;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i = 0;
$template['interview'][$i++] = array(
  'name' => 'Dr. Vincent Diederich',
  'img_url' => $awss3.'/companies/metrohm/interviewee_1',
  'position' => array('Produktionsingenieur & Stv. Abteilungsleiter, Abteilung Trennsäulenproduktion', 'Production Engineer & Interim Department Head, Department Separation Column Production'),

  'education' => array(
    0 => array(
      'date' => '2008-2014',
      'desc' => array('Doktorat bei Prof. Morbidelli an der ETH Zürich', 'Doctorate with Prof. Morbidelli at ETH Zurich')
    ),
    1 => array(
      'date' => '2007-2008',
      'desc' => array('M.Sc. ETH Chemie- und Bioingenieurwissenschaften an der ETH Zürich', 'M.Sc. Chemical and Bioengineering at ETH Zurich')
    ),
    2 => array(
      'date' => '2004-2007',
      'desc' => array('B.Sc. ETH Chemieingenieurwissenschaften an der ETH Zürich', 'B.Sc. Chemical Engineering at ETH Zurich')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => array('ab 11/2018', 'since 11/2018'),
      'desc' => array('Produktmanager Chromatographiesäulen bei Metrohm', 'Product Manager Chromatography Columns at Metrohm')
    ),
    1 => array(
      'date' => '2015',
      'desc' => array('Produktionsingenieur & Stv. Abteilungsleiter, Abteilung Trennsäulenproduktion bei Metrohm', 'Production Engineer & Interim Department Head, Department Separation Column Production at Metrohm')
    ),
    2 => array(
      'date' => '2014-2015',
      'desc' => array('Wissenschaftlicher Mitarbeiter an der ETH Zürich', 'Research Associate at ETH Zurich')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Produktionsingenieur bei der Metrohm AG?',
                          'What are your responsibilities as a production engineer at Metrohm AG?'),
      'answer' => array('Als Produktionsingenieur bei der Metrohm AG arbeite ich in der Abteilung Säulenproduktion. Für die Ionenchromatographie (IC) werden Trennsäulen verwendet und deren Herstellung optimiere ich. Genauer geht es darum, die Reproduzierbarkeit und die Qualität unserer Produkte sicherzustellen und dabei nach Möglichkeit die Herstellkosten zu senken.',
                        'As a production engineer at Metrohm AG, I work in the column production department. I optimize the production of columns used in ion chromatography. More specifically, we work on ensuring the reproducibility and quality of our products while potentially lowering manufacturing costs.')
    ),
    1 => array(
      'question' => array('Sie haben Chemieingenieurwissenschaften studiert. Beschäftigt die Metrohm AG auch Absolventen anderer Fachrichtungen (Chemiker, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Chemical Engineering. Does Metrohm AG also employ graduates of other fields of study (Chemistry, Interdisciplinary Sciences)?'),
      'answer' => array('In der Tat bietet die Firma Metrohm AG auch Möglichkeiten für Chemiker und interdisziplinäre Naturwissenschaftler. Für die Bereiche Entwicklung neuer Geräte, Vertrieb, Support und Marketing ist dabei sicherlich eine fundierte Ausbildung in chemischer Analytik von Vorteil. Aber auch Synthesechemiker finden bei der Metrohm AG ihren Platz, beispielsweise im Bereich der Herstellung und Entwicklung von neuen Säulenmaterialien.',
                        'Metrohm AG does indeed also have positions for chemists and interdisciplinary scientists. In the fields of device development and sales as well as in support and marketing, a thorough education in chemical analytics is certainly an advantage. However, also synthetic chemists find positions at Metrohm AG, for instance in the development and production of new column materials.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('An der Universität arbeitet man oftmals alleine an einem Projekt. In der Industrie sieht dies anders aus: hier müssen Personen aus sehr unterschiedlichen Bereichen zusammenarbeiten, um erfolgreich zu sein. Den regelmässigen Austausch mit anderen Abteilungen finde ich sehr spannend, insbesondere weil man auch Einblick in andere Tätigkeiten in der Firma erhält (Entwicklung, Vertrieb, Marketing, Konstruktion, Qualitätsmanagement, etc.).',
                        'At university, one often works on a project alone. In industry, things look very different: Here, people from very different fields need to work together in order to be successful. I find the constant exchange with other departments very exciting, especially since you also get insights into the other activities of the company (research & development, sales, marketing, construction, quality management etc.).')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich die Metrohm AG als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Metrohm as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Ein Student in unserer Forschungsgruppe arbeitete an einem Projekt mit der Metrohm AG und somit hatte ich den ersten Kontakt. Nach meiner Doktorarbeit, welche eher in der Grundlagenforschung angesiedelt war, habe ich mir gewünscht, in der Industrie an einem Produkt zu arbeiten. Somit habe ich mich bei der Metrohm AG auf eine ausgeschriebene Stelle beworben. Obwohl die Stelle bereits besetzt war, wurde ich eingeladen und habe schlussendlich eine andere Stelle eingenommen.',
                        'A student in our research group worked on a project with Metrohm AG, so I first got into contact with the company this way. After my PhD, which was rather focused on basic research, I wanted to work on a project in industry. Thus, I applied with Metrohm AG for an advertised position. Although the position had already been filled, I was invited nevertheless and eventually began to work in another position.')
    ),
    4 => array(
      'question' => array('Was sind Ihre Pläne und Ziele für Ihre Karriere bei der Metrohm AG? Welche Möglichkeiten gibt es, sich innerhalb der Firma weiterzuentwickeln?',
                          'Looking at your career at Metrohm, what are you plans and goals for the future? Which opportunities exist at your company for personal development?'),
      'answer' => array('Die Metrohm AG legt grossen Wert auf die interne Weiterentwicklung ihrer Mitarbeiter und unterstützt sie in ihrer Weiterbildung. Somit ergeben sich für jeden Möglichkeiten weiterzukommen. Ab November ist dies bei mir der Fall. Ich werde intern den Job wechseln und als Junior Product Manager im Competence Center Ionenchromatographie eine neue Aufgabe annehmen.',
                        'Metrohm AG puts great emphasis on the internal development of their employees and supports them in their continuing education. Like this, everybody has opportunities to move ahead professionally. This is the case for me from November on. I will change jobs internally and focus on new tasks as Junior Product Manager in the Competence Center Ion Chromatography.')
    ),
    5 => array(
      'question' => array('Im Rahmen Ihrer Dissertation bei Professor Morbidelli hier an der ETH haben Sie die Chemie und Physik von Polymerhydrogelen untersucht. Dieses Themengebiet unterscheidet sich also durchaus von Ihrem jetzigen beruflichen Fokus. War dieser Übergang schwierig?',
                          'During your PhD with Professor Morbidelli here at ETH, your research focused on polymer hydrogels, a subject quite different from your professional focus today. Was that transition difficult?'),
      'answer' => array('Auf den ersten Blick scheinen diese Themen tatsächlich weit voneinander entfernt zu sein. Jedoch gibt es bei der Herstellung von Hydrogelen und von Materialien für chromatographische Säulen ähnliche Polymerisationsmechanismen. Dies hat mir fachlich den Einstieg durchaus leicht gemacht. Stattdessen musste ich mich am Anfang an die deutlich andere Arbeitsweise in der Industrie gewöhnen.',
                        'At first glance, these subjects do indeed seem very different. However, there are similar polymerization mechanisms in the preparation of both hydrogels and materials for chromatographic columns. This made my first steps in the job a lot easier, from a technical point of view. Of course, I had to get used to the very different way of working in industry.')
    ),
    6 => array(
      'question' => array('Als Chemieingenieur ist ein PhD ja kein Muss, wenn man eine Karriere in der Industrie anstrebt. Hat Ihnen der Titel bei der Bewerbung geholfen?',
                          'As a chemical engineer pursuing a career in industry, a PhD is not always a necessity. Did the title help you when applying for a job?'),
      'answer' => array('Tatsächlich ist ein PhD als Chemieingenieur in der Industrie kein Muss. Ob mir der PhD Titel bei meiner Bewerbung geholfen hat, kann ich schlecht beurteilen. Vielmehr bin ich aber davon überzeugt, dass die während meiner Dissertation erlernten Techniken, sowie die Möglichkeit, mich in gewisse Themenbereiche zu vertiefen, bei meiner Bewerbung mit Sicherheit von Vorteil waren.',
                        'A PhD is indeed not always required for a chemical engineer in industry. I can’t judge whether or not my PhD helped me when applying. However, I am convinced that the techniques I learned during my thesis as well as the ability to intensify my knowledge in certain fields were an advantage for the application.')
    ),
    7 => array(
      'question' => array('Welche soft skills sind in Ihrem jetzigen Job bei der Metrohm AG gefragt und welche der Stationen in Ihrem Lebenslauf haben Sie gut darauf vorbereitet?',
                          'Which soft skills do you need in your current job at Metrohm and which chapters in your academic and professional career prepared you for this?'),
      'answer' => array('Meiner Meinung nach ist der grösste Unterschied zwischen der Arbeit in der Industrie und an der Universität die Grösse und Zusammensetzung der Arbeitsgruppen. Um als Gruppe erfolgreich zu sein, braucht es neben guten fachlichen Kenntnissen insbesondere den soft skill der Teamfähigkeit. Diese kann man nur teilweise erlernen oder durch Erfahrung gewinnen. Möglicherweise hat mir dabei das Basketballspielen im Team oder aber meine Tätigkeiten in diversen Vorständen geholfen.<br>
      In meiner neuen Tätigkeit als Produktmanager werde ich im regelmässigen Austausch mit unseren Tochtergesellschaften auf der ganzen Welt im Kontakt sein. Dabei werden mir meine Sprachkenntnisse sicherlich nützlich sein.
      ',
                        'In my opinion, the biggest difference between working in industry and at university is the size and composition of the teams you work in. To be successful as a team, you not only need good technical competences but also a capacity for teamwork. This is something you can only learn to a certain extent or gain through experience. Playing basketball in a team or my involvement in different governing bodies might have helped me with that.<br>
                        In my new role as product manager, I will be in regular contact with our subsidiaries all over the world. Here, my language skills will surely be useful.
                        ')
    ),
    8 => array(
      'question' => array('Müssen Sie für Ihren Job weiterhin auf dem aktuellen Stand der Forschung bleiben, oder konzentrieren Sie sich eher auf die Anwendung von bereits etablierten Technologien?',
                          'Does your job require you to stay on top of current research or do you rather focus on applying established technologies?'),
      'answer' => array('In meiner Rolle als Produktionsingenieur war es nicht unbedingt notwendig, ständig auf dem aktuellen Stand der Forschung zu bleiben. Hier konnte ich oft auf bereits etablierte und bekannte Technologien aufbauen. Stattdessen kann es durchaus sein, dass ich mich zukünftig als Produktmanager wieder stärker mit der Fachliteratur beschäftigen werde.',
                        'In my role as a production engineer it wasn’t necessary to stay up to date with current research all the time. I was mostly able to build on known and established technologies. In my future as a product manager, I will probably read scientific literature more often.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie einem "frischen" ETH-Absolventen geben, der sich auf Jobsuche begibt?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Den perfekten Kandidaten gibt es nur in höchst seltenen Fällen. Ich empfehle euch daher, euch auch auf Stellen zu bewerben, bei denen ihr das Anforderungsprofil nicht vollständig erfüllen könnt. Eine Faustregel besagt, wenn ca. 75 – 80% des Anforderungsprofils passt, unbedingt bewerben. Die anderen Kompetenzen können erlernt werden, insbesondere, wenn sie fachlicher Natur sind.',
                        'There are only very few exceptions where there is the perfect candidate. I would thus recommend that you also apply for jobs for which you don’t fulfill all requirements perfectly. There’s a rule of thumb saying that if you fulfill ca. 75 – 80 % of the criteria, you should definitely apply. The other competences can often be learned, in particular those that are technical in nature.')
    ),
  ),
);



include('../0_template/template.php');


?>
