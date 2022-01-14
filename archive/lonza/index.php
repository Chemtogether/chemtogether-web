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


$template['company_name'] = 'Lonza';
$template['company_name_short'] = 'lonza';
$template['logo_url'] = set_source($awss3_archive.'/lonza/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['facebook'] = array('https://www.facebook.com/LonzaGroupAG/', 'Lonza Group');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Lonza is an integrated solutions provider that creates value along the Healthcare Continuum®. We focus on creating a healthy environment, promoting a healthier lifestyle and preventing illness through consumers\' preventive healthcare, as well as improving patient healthcare by supporting our customers to deliver innovative medicines that help treat or even cure severe diseases.',
  'Lonza is an integrated solutions provider that creates value along the Healthcare Continuum®. We focus on creating a healthy environment, promoting a healthier lifestyle and preventing illness through consumers\' preventive healthcare, as well as improving patient healthcare by supporting our customers to deliver innovative medicines that help treat or even cure severe diseases.');
$template['we_offer'] = array(
  'At Lonza, we invest in great people. We encourage our employees to challenge themselves, and we offer an environment that fosters creativity and success, where you can develop your skills and knowledge by working in teams of highly collaborative experts in a rewarding and dynamic atmosphere. With headquarters in Basel, Switzerland, we operate production, R&D and business sites around the world, including Europe, North America and Asia.',
  'At Lonza, we invest in great people. We encourage our employees to challenge themselves, and we offer an environment that fosters creativity and success, where you can develop your skills and knowledge by working in teams of highly collaborative experts in a rewarding and dynamic atmosphere. With headquarters in Basel, Switzerland, we operate production, R&D and business sites around the world, including Europe, North America and Asia.');
$template['we_look'] = array(
  'For our site in Visp we are looking for skilled workers from all areas of Life Science. You can expect the best of both worlds: A high-tech workplace with inspiring colleagues and an incomparable lifestyle in the middle of the Alps.',
  'For our site in Visp we are looking for skilled workers from all areas of Life Science. You can expect the best of both worlds: A high-tech workplace with inspiring colleagues and an incomparable lifestyle in the middle of the Alps.
  ');


  $i=0;

  $template['interview'][2019][$i++] = array(
      'name' => 'Dr. Gunnar Zoch',
      'img_url' => set_source($awss3_archive.'/lonza/interviewee_2019_1', 'png', FALSE),
      'position' => array('Senior Project Leader QC','Senior Project Leader QC'),
    
      'education' => array(
        0 => array(
          'date' => '2014-2017',
          'desc' => array('Doctor of Sciences in Immunology, Department of Clinical Research at the Inselspital Bern','Doctor of Sciences in Immunology, Department of Clinical Research at the Inselspital Bern'),
        ),
        1 => array(
          'date' => '2015-2016',
          'desc' => array('Bachelor Minor in Business Administration, University Bern','Bachelor Minor in Business Administration, University Bern'),
        ),
        2 => array(
          'date' => '2008-2014',
          'desc' => array('BSc and MSc in Biochemistry and Molecular Biology, Christian-Albrechts University in Kiel','BSc and MSc in Biochemistry and Molecular Biology, Christian-Albrechts University in Kiel'),
        ),
      ),
    
      'career' => array(
        0 => array(
          'date' => '2018',
          'desc' => array('Senior Project Leader QC, Lonza AG','Senior Project Leader QC, Lonza AG'),
        ),
        1 => array(
          'date' => '2017-2018',
          'desc' => array('Scientist QA, CSL Behring','Scientist QA, CSL Behring')
        ),
      ),
    
      'interview' => array(
        0 => array(
          'question' => array('What are your responsibilities as senior project leader in the quality control at Lonza?','What are your responsibilities as senior project leader in the quality control at Lonza?'),
          'answer' => array('I am the representative of the QC to customers, internal and external, and the project representative to the QC. This involves all aspects of the quality control from raw materials, production support, batch release to validations. I act as an organizer and planner, a mediator or a subject matter expert.','I am the representative of the QC to customers, internal and external, and the project representative to the QC. This involves all aspects of the quality control from raw materials, production support, batch release to validations. I act as an organizer and planner, a mediator or a subject matter expert.'),
        ),
        1 => array(
          'question' => array('You worked in the academia and in an hospital during your studies and now in the industry. Can you describe how the work differs between academia, hospitals and the industry?','You worked in the academia and in an hospital during your studies and now in the industry. Can you describe how the work differs between academia, hospitals and the industry?'),
          'answer' => array('In the academic environment, I found that one could plan further ahead with greater precision. It depended more on one’s own scheduling and organizing. The clinic brought in more dependencies on other people and their ability to keep to schedules/deadlines. This is further increased in the industry. The same goes for the level of detail in your documentation.','In the academic environment, I found that one could plan further ahead with greater precision. It depended more on one’s own scheduling and organizing. The clinic brought in more dependencies on other people and their ability to keep to schedules/deadlines. This is further increased in the industry. The same goes for the level of detail in your documentation.'),
        ),
        2 => array(
          'question' => array('How have your studies prepared you for the role as senior project leader?','How have your studies prepared you for the role as senior project leader?'),
          'answer' => array('The single biggest impact had the self-organisation I achieved while doing my PhD. Also multitasking and networking inside your own organisation makes your work easier.','The single biggest impact had the self-organisation I achieved while doing my PhD. Also multitasking and networking inside your own organisation makes your work easier.'),
        ),
        3 => array(
          'question' => array('During your PhD and your studies, you focused on immunology, biochemistry and molecular biology. How can you apply your expertise in biochemistry and immunology in your daily work at Lonza?','During your PhD and your studies, you focused on immunology, biochemistry and molecular biology. How can you apply your expertise in biochemistry and immunology in your daily work at Lonza?'),
          'answer' => array('As I work with antibody-drug-conjugates, my biochemistry and immunology background allows me to understand the why’s and what’s of our products and the methods we use to analyse them. Also, it facilitates the impact assessment of any deviations and determining the root causes.','As I work with antibody-drug-conjugates, my biochemistry and immunology background allows me to understand the why’s and what’s of our products and the methods we use to analyse them. Also, it facilitates the impact assessment of any deviations and determining the root causes.'),
        ),
        4 => array(
          'question' => array('How important is harmony between work and outside life for you? Does Lonza offer a good work-life balance for its employees?','How important is harmony between work and outside life for you? Does Lonza offer a good work-life balance for its employees?'),
          'answer' => array('Life-work balance may be hollow phrase for some, but it is very important to me and it is also one aspect I like about Lonza. I enjoy flexible hours, the ability to work from home and easy overtime compensation. Lonza also offers several sport groups, training for the Matterhorn marathon for example, and even vacation homes.','Life-work balance may be hollow phrase for some, but it is very important to me and it is also one aspect I like about Lonza. I enjoy flexible hours, the ability to work from home and easy overtime compensation. Lonza also offers several sport groups, training for the Matterhorn marathon for example, and even vacation homes.'),
        ),
        5 => array(
          'question' => array('During your PhD you completed a Bachelor Minor in Business Administration. In which aspects did this further education added missing points to your spectrum that you missed after your Masters in Biochemistry and Molecular Biology?','During your PhD you completed a Bachelor Minor in Business Administration. In which aspects did this further education added missing points to your spectrum that you missed after your Masters in Biochemistry and Molecular Biology?'),
          'answer' => array('Getting to know the basics of business administration helped me in my professional and personal life. Having a grasp on accounting or understanding different philosophies of management lets you understand the decision made by a company or situations you find yourself in. Especially learning about the types of leadership a person display helped on weighing my options and deciding what kind of leader I want to be myself.','Getting to know the basics of business administration helped me in my professional and personal life. Having a grasp on accounting or understanding different philosophies of management lets you understand the decision made by a company or situations you find yourself in. Especially learning about the types of leadership a person display helped on weighing my options and deciding what kind of leader I want to be myself.'),
        ),
        6 => array(
          'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
          'answer' => array('For jobs, do not pass over temporary jobs that, for example, last less than 6 months. These positions offer you a great chance to actually see and feel what is like in that position. This will help you for the next application as you know better what you are looking for, in a boss, in the position and in the size of the company. Give your CV and motivation letter to multiple persons to check and comment on.','For jobs, do not pass over temporary jobs that, for example, last less than 6 months. These positions offer you a great chance to actually see and feel what is like in that position. This will help you for the next application as you know better what you are looking for, in a boss, in the position and in the size of the company. Give your CV and motivation letter to multiple persons to check and comment on.'),
        ),
      ),
  );

  $i = 0;

  $template['interview'][2018][$i++] = array(
    'name' => 'Dr. Benjamin Wyler ',
    'img_url' => set_source($awss3_archive.'/lonza/interviewee_2018_1', 'png', FALSE),
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
