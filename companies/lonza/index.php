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


$template['company_name'] = 'Lonza';
$template['company_name_short'] = 'lonza';
$template['logo_url'] = set_source($awss3.'/companies/lonza/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
// $template['mail'] = array('','');
$template['archive'] = '/archive/lonza';

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
  'name' => 'Dr. Benjamin Wyler ',
  'img_url' => $awss3.'/companies/lonza/interviewee_1',
  'position' => array('Project Leader, Process Development Chemist', 'Project Leader, Process Development Chemist'),

  'education' => array(
    2 => array(
      'date' => '2006-2009',
      'desc' => array('B.Sc. in Chemie, Universität Bern', 'B.Sc. in Chemistry, University of Bern')
    ),
    1 => array(
      'date' => '2009-2011',
      'desc' => array('M.Sc. in Chemie, Universität Bern', 'M.Sc. in Chemistry, University of Bern')
    ),
    0 => array(
      'date' => '2011-2015',
      'desc' => array('PhD in Chemie, Gruppe Prof. P. Renaud an der Universität Bern', 'PhD in Chemistry, Group Prof. P. Renaud at University of Bern')
    ),
  ),

  'career' => array(
    4 => array(
      'date' => '2011-2011',
      'desc' => array('Praktikum NIBR/GDC bei Novartis', 'Internship NIBR/GDC at Novartis')
    ),
    3 => array(
      'date' => '2007-2011',
      'desc' => array('Mitarbeiter Index Nominum - International Drug Directory bei pharmaSuisse', 'Contributor Index Nominum - International Drug Directory at pharmaSuisse')
    ),
    2 => array(
      'date' => '2016-2016',
      'desc' => array('PostDoc, Gruppe Prof. P. Renaud an der Universität Bern', 'PostDoc, Group Prof. P. Renaud at University of Bern')
    ),
    1 => array(
      'date' => '2016-2017',
      'desc' => array('PostDoc, Gruppe Prof. Dr. R. Sarpong an der University of California', 'PostDoc, Group Prof. Dr. R. Sarpong at University of California')
    ),
    0 => array(
      'date' => '2017',
      'desc' => array('Chemist R&D, Project Leader bei Lonza', 'Chemist R&D, Project Leader at Lonza')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Project Leader bei Lonza?',
                          'What are your responsibilities as project leader at Lonza?'),
      'answer' => array('Als Projektleiter in der R&D bei Lonza entwickeln wir chemische Prozesse, koordinieren den technischen Transfer dieser Prozesse vom Labor in eine Produktionsanlage und gewährleisten in Zusammenarbeit mit interdisziplinären Teams (Produktion, EHS, etc.) eine erfolgreiche Herstellung dieser chemischen Produkte.',
                        'As project leader in R&D at Lonza, we develop chemical processes, coordinate the technological transfer of these processes from the lab to a production facility and ensure, in collaboration with interdisciplinary teams, the successful production of our products.')
    ),
    1 => array(
      'question' => array('Sie haben Chemie studiert. Beschäftigt Lonza auch Absolventen anderer Fachrichtungen?',
                          'You graduated with a degree in Chemistry. Does Lonza also employ graduates of other fields of study?'),
      'answer' => array('Bei Lonza werden neben Chemikern/Chemieingenieuren auch Leute aus der gesamten Life Science (Biotechnologie, Mikrobiologie, Zellbiologie, etc.) gesucht.',
                        'Besides chemists and chemical engineers, Lonza also employs people from all life sciences such as biotechnology, microbiology or cell biology.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Im Gegensatz zur Universität ist der Spielraum in der Privatwirtschaft offensichtlich stärker beschränkt. Man kann zwar immer noch seine Begeisterung für die Naturwissenschaften ausleben, muss sich jedoch immer im «abgesteckten Bereich» aufhalten. Dafür ist jedoch auch ein direkter Nutzen eher sichtbar, z.B. hat man mehrere Tonnen eines interessanten Intermediates hergestellt.',
                        'In contrast to university, private industrial research is obviously much more focused. While you still have room to live out your scientific passions, you always have to stay within the pre-defined boundaries of your project. The advantage is that there is a direct use or value to what you are doing, such as producing an interesting intermediate on a multi-ton scale.')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich Lonza als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Lonza as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Während meiner Zeit meines Postdocs an der UC Berkeley habe ich mich schon relativ früh immer wieder umgeschaut, welche Stellen auf dem Markt vorhanden sind. Nach ca. einem Jahr habe ich dann meine jetzige Stelle ausgeschrieben gesehen und mich ohne zu zögern beworben. Da ich schon während meines Studiums Kontakt mit Wallisern und auch Mitarbeitenden von Lonza hatte, war das eine einfache Entscheidung, die ich bis heute nicht bereue. Ich wurde relativ kurz nachdem ich mich beworben hatte kontaktiert und wurde nach zwei erfolgreichen Telefoninterviews zu einem persönlichen Treffen eingeladen. Dann ging alles sehr schnell und mir wurde ein Angebot unterbreitet.',
                        'During my postdoc at UC Berkeley I was already looking around for job opportunities on the market. After about a year I found the job opening for my current position at Lonza and applied without hesitating. Given that I had already been in contact with people from the canton of Wallis and employees of Lonza during my university studies, it was an easy decision for me, which I never regretted. Shortly after I had applied, I was contacted by Lonza and after two successful phone interviews, I was invited to a personal interview. Following the interview process, I quickly received an offer.')
    ),
    4 => array(
      'question' => array('Sie haben unmittelbar vor Ihrem Einstieg bei Lonza einen einjährigen Postdoc an der UC Berkeley absolviert. Hat Ihnen dieser den Berufseinstieg erleichtert?',
                          'Before joining Lonza, you went to UC Berkeley for a one-year postdoc. How did this benefit your professional career?'),
      'answer' => array('Der Postdoc-Aufenthalt an der UC Berkeley in der Gruppe von Prof. Richmond Sarpong hat mich nicht nur fachlich, sondern auch menschlich sehr viel weitergebracht. Man lernt neue Leute, unterschiedliche Arbeitsweisen sowie andere Laborausstattungen kennen. Teamwork mit Personen unterschiedlicher Hintergründe ist das A und O bei jeder Arbeit.',
                        'My postdoc at UC Berkeley in the group of Prof. Richmond Sarpong helped me to further develop not only on a technical but also on a personal level. You get to know new people, different working styles as well as different lab equipment. Being able to work in a multidisciplinary team is crucial in any working environment.')
    ),
    5 => array(
      'question' => array('Vor Ihrem PhD haben Sie ein halbjähriges Praktikum bei Novartis absolviert. Welche Erfahrungen haben Sie daraus für Ihre berufliche Laufbahn mitgenommen?',
                          'Before starting your PhD, you spent half a year as an intern at Novartis. Which experiences did you gain from your internship for your later career?'),
      'answer' => array('Die Zusammenarbeit mit Leuten aus verschieden Life Science Bereichen. Man bekommt auch einen ersten Eindruck, wie es in der Privatwirtschaft funktioniert.',
                        'Working together with people from different life science fields. You also get a first impression of how industrial research works.')
    ),
    6 => array(
      'question' => array('Bietet Lonza Praktikumsstellen für Studierende an?',
                          'Does Lonza offer internships for students?'),
      'answer' => array('Ja, Lonza bietet Praktika in vielen Bereichen an. In den Kerngebieten Chemie und Biologie, aber auch in HR oder Marketing. Die Dauer, Aufgaben und der Umfang eines Praktikums werden oft individuell vereinbart. Meist dauern sie zwischen vier und zwölf Monaten.',
                        'Yes, Lonza offers a broad spectrum of possible internships. In the core segments Chemistry and Biology but also in HR or Marketing. The duration, tasks and scope of the internship are often agreed upon on an individual basis. It usually last from four to twelve months.')
    ),
    7 => array(
      'question' => array('Welche Aufstiegsmöglichkeiten und Karrierewege gibt es innerhalb des Unternehmens?',
                          'Can you describe some of the career opportunities that exist within Lonza?'),
      'answer' => array('Lonza bietet diverse Lern- und Weiterentwicklungsprogramme an und unterstützt die Mitarbeitenden beim Erwerb von neuen Qualifikationen. Dadurch entstehen viele Möglichkeiten innerhalb des Unternehmens. Sei es als Spezialist oder Manager und Führungskraft. Vor allem Visp, als wachsender Standort innerhalb von Lonza, bietet zurzeit vielfältige Möglichkeiten.',
                        'Lonza offers various learning and development opportunities and supports its employees in acquiring new qualifications. This opens many possibilities within the company, such as expert or management and leadership positions. Especially Visp, as a growing location of Lonza, currently offers diverse opportunities.')
    ),
    8 => array(
      'question' => array('Welche ausserfachlichen Kompetenzen sollte man sich neben dem Studium aneignen um für den Berufseinstieg in einem modernen Chemieunternehmen gerüstet zu sein?',
                          'Which soft skills should students try to acquire in the course of their studies to succeed in a modern chemical company like Lonza?'),
      'answer' => array('Teamwork, Offenheit und Begeisterung Neues zu (er-)lernen.',
                        'Teamwork, openness and enthusiasm to learn new things.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Bewerben, bewerben, bewerben. Ihr habt nichts zu verlieren. Mehr als ein «Nein» kann es nicht geben. Auch sehr wichtig ist, ein «Nein» nicht persönlich zu nehmen. Seht es als Motivation, das nächste Mal noch besser vorbereitet zu sein.',
                        'Apply, apply, apply. You have nothing to lose - you cannot get more than a «No». It’s also important not to take a «No» too personally. See it as a motivation to be even better prepared for the next application.')
    ),
  ),
);



include('../0_template/template.php');



?>
