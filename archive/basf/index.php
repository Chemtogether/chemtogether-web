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


$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = $awss3_archive.'/basf/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether 2018 - Archiv: '.$template['company_name'], 'Chemtogether 2018 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.basf.com','basf.com');
$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'We are the world’s leading chemical company, with the best teams developing intelligent solutions for our customers and creating chemistry for a sustainable future. BASF’s success as a company relies on the personal engagement of our employees. We encourage our staff to develop their strengths, and we recognize their achievements.',
  'We are the world’s leading chemical company, with the best teams developing intelligent solutions for our customers and creating chemistry for a sustainable future. BASF’s success as a company relies on the personal engagement of our employees. We encourage our staff to develop their strengths, and we recognize their achievements.');
$template['we_offer'] = array(
  'You have earned an above average
PhD in materials science or in chemistry.
Moreover, you are interested in
developing chemistry-based system
solutions which are applicable to
diverse industries such as automobile,
construction, sports and cosmetics.
Whilst working in an international
team you have already used your excellent
English skills. Beyond this, you
have experience in project management,
you are innovative and passionate
about leading people to success.',
  'You have earned an above average
PhD in materials science or in chemistry.
Moreover, you are interested in
developing chemistry-based system
solutions which are applicable to
diverse industries such as automobile,
construction, sports and cosmetics.
Whilst working in an international
team you have already used your excellent
English skills. Beyond this, you
have experience in project management,
you are innovative and passionate
about leading people to success.');
$template['we_look'] = array(
  'Responsibility from day one in a
challenging work environment and
“on-the-job” training as part of a committed
team. Competitive compensation
including attractive benefits as
well as excellent career opportunities
in an international company. Expect to
be surprised by the exciting range of
career opportunities at BASF.',
  'Responsibility from day one in a
challenging work environment and
“on-the-job” training as part of a committed
team. Competitive compensation
including attractive benefits as
well as excellent career opportunities
in an international company. Expect to
be surprised by the exciting range of
career opportunities at BASF.');


  
  $i = 0;
  $template['interview']['2018'][$i++] = array(
    'name' => 'Dr. Michael Seet',
    'img_url' => set_source($awss3_archive.'/basf/interview-2018-1', 'png', FALSE),
    'position' => array('Research Scientist', 'Research Scientist'),
  
    'education' => array(
      0 => array(
        'date' => '2009-2013',
        'desc' => array('Doktorat an der ETH Zürich, Gruppe Prof. Diederich', 'PhD at ETH Zurich, Group of Prof. Diederich')
      ),
      1 => array(
        'date' => '2003-2008',
        'desc' => array('Chemiestudium an der Phillips-Universität Marburg', 'Studies in Chemistry at Phillips-Universität Marburg')
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2016',
        'desc' => array('Research Scientist bei BASF', 'Research Scientist at BASF')
      ),
      1 => array(
        'date' => '2013-2016',
        'desc' => array('Research Scientist bei Beiersdorf AG', 'Research Scientist at Beiersdorf AG')
      ),
      2 => array(
        'date' => '2008-2009',
        'desc' => array('Praktikum bei BASF', 'Internship at BASF')
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('Was sind Ihre Aufgaben als Projektmanager bei der BASF?',
                            'What are your responsibilities as project manager at BASF?'),
        'answer' => array('In meiner Rolle als Projektmanager in der BASF Pflanzenschutzforschung koordiniere ich ein Team bestehend aus vier Laborleitenden (Medizinische Chemie, Computational Chemistry, Biochemie) und fünf Labortechnikern.',
                          'In my role as project manager at BASF crop protection R&D, I am coordinating a project team consisting of four lab heads (medicinal chemistry, computational chemistry, biochemistry) and five lab technicians. Aim of the project is finding a new lead candidate and promote it from early hit discovery to lead optimization phase. Tasks comprise the coordination of lab syntheses, molecular modeling approaches, biochemical assay setup, interpretation and presentation of results, defining milestones and targets of the project.')
      ),
      1 => array(
        'question' => array('Sie haben Chemie studiert. Beschäftigt die BASF auch Absolventinnen und Absolventen anderer Fachrichtungen?',
                            'You graduated from ETH Zürich with a PhD in Chemistry. Does BASF also employ graduates of other fields of study?'),
        'answer' => array('Ja. Die BASF ist ein multidisziplinäres Unternehmen, das Fachkräfte mit verschiedensten Hintergründen beschäftigt (Naturwissenschaften, Ingenieurwissenschaften, Sozialwissenschaften, etc.).',
                          'Yes. BASF is a multidisciplinary and highly diverse company, employing professionals with a broad spectrum of backgrounds (all kind of natural sciences, engineers, social sciences, etc.).')
      ),
      2 => array(
        'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                            'How does a typical work day in industry differ from one at university?'),
        'answer' => array('Meiner Meinung nach gibt es zwei Hauptunterschiede zwischen der Arbeit in der Industrie und an der Universität. Erstens ist industrielle Forschung von der Zusammenarbeit mit verschiedenen Forschungs-, Geschäfts- und Serviceeinheiten geprägt - viele Akteure sind involviert. Die verschiedenen Kompetenzen und Sichtweisen der unterschiedlichen Akteure bereichern das Projekt. Im Gegensatz dazu kann man in der universitären Forschung Projekte oft mehr auf seine eigene Art und Weise durchführen. Zweitens trägt man in der industriellen Forschung mehr Verantwortung, zum Beispiel was das Einhalten von Budgets und Zeitvorgaben der Projekte oder die Fortbildung der Mitarbeitenden betrifft.',
                          'In my opinion, there are two major differences in working in industry as compared to academia. Firstly, industrial research relies strongly on collaborations with various research, business, and service units. Many stakeholders are involved, whose different competencies and views add value to your project. In contrast, in academic research you can run your project more in your own way. Secondly, in industrial research you take over more responsibility, for instance in terms of keeping budget and timelines in your project, or in employee development.')
      ),
      3 => array(
        'question' => array('Warum haben Sie sich die BASF als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                            'What made you choose BASF as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('Ich habe mich bei der BASF für eine ausgeschriebene Stelle beworben. Dass man mich in der Abteilung aus meinem Praktikum noch kannte hat mir den Weg zum Vorstellungsgespräch jedoch deutlich erleichtert. Generell gefällt mir das Arbeitsklima in der Firma und die Freiheit, die mir in meiner Forschung gewährt wird.',
                          'I applied for BASF to an open position. However, knowing people from the unit due to my previous internship facilitated the invitation for an interview significantly. Generally speaking, I very much enjoy the working atmosphere at BASF and the high degree of freedom I am given in my research.')
      ),
      4 => array(
        'question' => array('In welcher Form bietet die BASF Praktikumsstellen für Studierende an?',
                            'Does BASF offer internships for university students?'),
        'answer' => array('Die BASF bietet eine breite Auswahl an Praktika für Bachelor- und Masterstudierende an. Neben einem mehrmonatigen Praktikum besteht auch die Möglichkeit, eine Bachelor-, Master- oder Doktorarbeit bei der BASF zu machen.',
                          'BASF offers a wide range of internships for undergraduate students. You can join BASF for just a few months, or you can apply to do your bachelor, master, or PhD thesis with BASF.')
      ),
      5 => array(
        'question' => array('Sie haben vor Ihrem PhD ein dreimonatiges Praktikum bei Ihrem späteren Arbeitgeber BASF absolviert. Welche Erfahrungen haben Sie daraus für Ihre berufliche Laufbahn mitgenommen?',
                            'Before starting your PhD, you joined BASF for a three-month internship. Which experiences did this add to your professional career?'),
        'answer' => array('Während meines Praktikums habe ich zwei wichtige Dinge gelernt. Was meine fachbezogenen Kompetenzen betrifft, habe ich gelernt, meinen Arbeitstag sehr effizient zu planen. Diese praktische Erfahrung war eine sehr nützliche Ergänzung zu meinem theoretischen Wissen aus dem Studium. Zusätzlich konnte ich in der Firma viele Kontakte knüpfen, was für meine spätere Karriere äußerst hilfreich war.',
                          'To me, there are two major learnings from my three-month internship at BASF. In terms of improving my hard skills, I learned how to plan my daily lab work very efficiently. This practical experience was a very useful complement to my theoretical background I learned at university. On top of that, I had the chance to build up a network with other interns and lab heads, which was of enormous value for my later career.')
      ),
      6 => array(
        'question' => array('Vor Ihrem Einstieg bei BASF haben Sie bei der Beiersdorf AG ebenfalls als Projektmanager gearbeitet. Was waren Ihre Beweggründe für den Wechsel zur BASF?',
                            'Before joining BASF, you also worked for Beiersdorf AG as a project manager. What was your motivation for changing your job?'),
        'answer' => array('In meinem ersten Job nach meinem PhD bei Beiersdorf habe ich in einer Scouting-Abteilung gearbeitet. Die Arbeit dort bestand teils aus Forschung, teils aus Supplier-Management. Nach drei Jahren entschied ich mich dazu, nach einer neuen Herausforderung in einer reinen Forschungsabteilung zu suchen. Zu dieser Zeit gab es keine passenden Möglichkeiten bei Beiersdorf, deshalb habe ich mich außerhalb der Firma umgesehen und bin auf meine jetzige Stelle bei der BASF gestoßen.',
                          'In my first job after my PhD at Beiersdorf I worked in a Scouting unit, which was partly scientific research, partly supplier management. After three years I decided to look for new challenges in a pure research unit. At that time, there was no suitable opportunity at Beiersdorf, so I looked outside the company, and eventually found my current position at BASF.')
      ),
      7 => array(
        'question' => array('Welche Aufstiegsmöglichkeiten und Karrierewege gibt es innerhalb des Unternehmens?',
                            'Could you describe some of the career opportunities that exist within your company?'),
        'answer' => array('Als Wissenschaftler beginnt man seine Karriere bei der BASF normalerweise in einer Forschungseinheit. Nach einiger Zeit in der Forschung und Entwicklung entscheiden sich viele für einen sogenannten «Expert Track», im Laufe dessen sie ihre Expertise in einem bestimmten Forschungsgebiert verbreitern und vertiefen können um zum «Senior Scientist» oder «Principal Scientist» aufzusteigen. Andere wiederum entscheiden sich für den sogenannten «General Management Track», der darauf ausgelegt ist, abseits der Forschung in anderen Bereichen der BASF Erfahrung zu sammeln und letztlich auf eine Führungsposition abzielt. In beiden Fällen bietet die BASF vielseitige Unterstützung für die Fortbildung ihrer Angestellten.',
                          'As a scientist, you usually start your career at BASF in a research unit. After some time in R&D, many people either decide to go on a so-called Expert Track, on which they broaden and deepen their expertise in a specific research field and advance to Senior Scientist or Principal Scientist grades. Or they go on a so-called General Management Track, on which they leave R&D and broaden their experience in other units within BASF, to eventually strive for a later leadership role. In both scenarios, BAFS offers many tools to support and develop their employees.')
      ),
      8 => array(
        'question' => array('Welche außerfachlichen Kompetenzen sollte man sich neben dem Studium aneignen um für den Berufseinstieg in einem modernen Chemieunternehmen gerüstet zu sein?',
                            'Which soft skills should students try to acquire in the course of their studies to succeed in a modern chemical company like BASF?'),
        'answer' => array('Neben den fachlichen Kernkompetenzen ist es immer eine gute Idee, Erfahrung in angrenzenden Fachgebieten zu sammeln. Als synthetischer Chemiker ist es zum Beispiel hilfreich, gewisse Grundfertigkeiten in Biologie, IT oder Computational Chemistry zu besitzen. Generell rate ich dazu, die Bedeutung von Softskills nicht zu unterschätzen. Seien Sie neugierig und bereit, neue Dinge auszuprobieren, seien Sie offen für Kollaborationen und versuchen Sie, neue Kontakte zu knüpfen. Das ist in jeder Hinsicht hilfreich.',
                          'Besides your core competencies, it is always a good idea to be experienced in closely related disciplines. For instance, as a synthetic chemist, it helps to be skilled in computational chemistry, biology, or IT. However, a general advice is to never underestimate the importance of your soft skills. Be curious and open to try new things, look for collaborations, be creative and establish new contacts. This will help you in any case.')
      ),
      9 => array(
        'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                            'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Ich rate dazu, schon während des Studiums ein Netzwerk an Kontakten aufzubauen. Dazu gibt es viele Möglichkeiten – sei es ein Auslandssemester, ein Praktikum oder Kollaborationen in der Forschung. Denken Sie daran, dass Sie es sind, die sich Ihre Arbeitgeber aussuchen.',
                          'I strongly recommend building a network during your undergrad and PhD studies. Go abroad for one semester, setup research collaborations, or do an internship in industry. Consider that it is you who chooses the company you want to work for.')
      ),
    ),
  );
  
  
  
  include('../0_template/template.php');
  
  
  
  ?>