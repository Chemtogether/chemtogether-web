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


$template['company_name'] = 'Ivoclar Vivadent';
$template['company_name_short'] = 'ivoclarvivadent';
$template['logo_url'] = $awss3_archive.'/ivoclarvivadent/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.ivoclarvivadent.ch','ivoclarvivadent.ch');
$template['facebook'] = array('https://www.facebook.com/ivoclarvivadent/', 'Ivoclar Vivadent');
$template['linkedin'] = array('https://www.linkedin.com/company/ivoclar-vivadent-ag/','Ivoclar Vivadent AG');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Today’s vision. Tomorrow’s reality. We have a passion for developing innovative products that open up new opportunities for our customers in the dental industry.<br>Ivoclar Vivadent, headquartered in Schaan, Liechtenstein, is one of the world’s leading manufacturers of innovative material systems for high-quality dental applications. The company’s success is based on a comprehensive portfolio of products and systems, strong research and development capabilities and a clear commitment to training and further education. The company employs about 3,600 people at 29 locations worldwide.',
  'Today’s vision. Tomorrow’s reality. We have a passion for developing innovative products that open up new opportunities for our customers in the dental industry.<br>Ivoclar Vivadent, headquartered in Schaan, Liechtenstein, is one of the world’s leading manufacturers of innovative material systems for high-quality dental applications. The company’s success is based on a comprehensive portfolio of products and systems, strong research and development capabilities and a clear commitment to training and further education. The company employs about 3,600 people at 29 locations worldwide.');
$template['we_offer'] = array(
  'Making people smile is what we aspire to at Ivoclar Vivadent each day, with our innovative products and our employee-oriented culture. Working at Ivoclar Vivadent, we share our strong values that promote a culture of mutual respect that you will discover at all our locations around the world. Our ongoing employee development, education and training is one of the cornerstones that underlines the long-term and people-focused orientation as a family owned company.',
  'Making people smile is what we aspire to at Ivoclar Vivadent each day, with our innovative products and our employee-oriented culture. Working at Ivoclar Vivadent, we share our strong values that promote a culture of mutual respect that you will discover at all our locations around the world. Our ongoing employee development, education and training is one of the cornerstones that underlines the long-term and people-focused orientation as a family owned company.');
$template['we_look'] = array(
  'Ivoclar Vivadent is an exciting, vibrant workplace where new ideas are encouraged and commitment is rewarded. We are looking for young, committed graduates who are passionate about innovation and share our vision to develop solutions for tomorrow’s dentistry.',
  'Ivoclar Vivadent is an exciting, vibrant workplace where new ideas are encouraged and commitment is rewarded. We are looking for young, committed graduates who are passionate about innovation and share our vision to develop solutions for tomorrow’s dentistry.');


  $i=0;

  $template['interview'][2019][$i++] = array(
    'name' => 'Dr. Michael Westphal',
    'img_url' => set_source($awss3_archive.'/ivoclarvivadent/interviewee_2019_1', 'png', FALSE),
    'position' => array('Team Leader F&E','Team Leader F&E'),
  
    'education' => array(
      0 => array(
        'date' => '2009-2013',
        'desc' => array('Dual-PhD, University of Queensland and Ruprecht-Karls University in Heidelberg','Dual-PhD, University of Queensland and Ruprecht-Karls University in Heidelberg'),
      ),
      1 => array(
        'date' => '2011-2012',
        'desc' => array('Research stay, University of Queensland and University of Newcastle','Research stay, University of Queensland and University of Newcastle'),
      ),
      2 => array(
        'date' => '2003-2009',
        'desc' => array('Diploma in Chemistry at the Ruprecht-Karls University in Heidelberg','Diploma in Chemistry at the Ruprecht-Karls University in Heidelberg'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2019',
        'desc' => array('Team Leader F&E, Ivoclar Vivadent','Team Leader F&E, Ivoclar Vivadent'),
      ),
      1 => array(
        'date' => '2014-2019',
        'desc' => array('Research Associate, Ivoclar Vivadent','Research Associate, Ivoclar Vivadent')
      ),
      2 => array(
        'date' => '2009-2014',
        'desc' => array('Research Assistant, Ruprecht-Karls University in Heidelberg','Research Assistant, Ruprecht-Karls University in Heidelberg')
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What are your responsibilities as team leader of R&D at Ivoclar Vivadent?','What are your responsibilities as team leader of R&D at Ivoclar Vivadent?'),
        'answer' => array('Recently, we have established a completely new team that is responsible for the lifecycle management of all clinical and technical products of the Organic R&D department. This means that my responsibility, especially at the very beginning, is to give my team the framework that provides it with the necessary scope for action. In addition, my team has an important interface function between all departments. As a team leader, I provide ongoing support to all the team members. Moreover, I also act as a materials expert for special dental product classes because I worked as a developer during the past 5 years. In other words, my experience and expertise with regard to dental products as well as organisational procedures allows me to back up the whole team.','Recently, we have established a completely new team that is responsible for the lifecycle management of all clinical and technical products of the Organic R&D department. This means that my responsibility, especially at the very beginning, is to give my team the framework that provides it with the necessary scope for action. In addition, my team has an important interface function between all departments. As a team leader, I provide ongoing support to all the team members. Moreover, I also act as a materials expert for special dental product classes because I worked as a developer during the past 5 years. In other words, my experience and expertise with regard to dental products as well as organisational procedures allows me to back up the whole team.'),
      ),
      1 => array(
        'question' => array('What made you choose Ivoclar Vivadent as an employer? Can you describe how the application process worked for you?','What made you choose Ivoclar Vivadent as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('After my PhD, I applied for lots of jobs, as it was customary at that time. Therefore, I luckily had the chance to get to know different companies during the application process. At first for me as a chemist, a dental company was not in my focus, but I gave it a try. And I have to confess, it was a very pleasant experience.  The application process was fast and friendly and included a phone call, a skype interview and a one-day work trial with final interviews with my future supervisor and the HR business partner. During the application process, I realised relatively quickly that a friendly working environment combined with so much nature surrounding me was exactly what I was looking for. Even today, I would make the same decision as 5 years ago.','After my PhD, I applied for lots of jobs, as it was customary at that time. Therefore, I luckily had the chance to get to know different companies during the application process. At first for me as a chemist, a dental company was not in my focus, but I gave it a try. And I have to confess, it was a very pleasant experience.  The application process was fast and friendly and included a phone call, a skype interview and a one-day work trial with final interviews with my future supervisor and the HR business partner. During the application process, I realised relatively quickly that a friendly working environment combined with so much nature surrounding me was exactly what I was looking for. Even today, I would make the same decision as 5 years ago.'),
      ),
      2 => array(
        'question' => array('During your PhD you focused on bioinorganic chemistry. How can you apply your expertise in biochemistry and organometallic chemistry in your daily work at Ivoclar Vivadent?','During your PhD you focused on bioinorganic chemistry. How can you apply your expertise in biochemistry and organometallic chemistry in your daily work at Ivoclar Vivadent?'),
        'answer' => array('I think it is not my expertise in bioinorganic chemistry in particular that I apply in my daily work. It is more the experience I have been able to gather in chemistry which I can apply in connection with and put into context with all the functionalities of the dental products. This has made it much easier for me to understand the different outcomes during the development stage of a product and to react accordingly.','I think it is not my expertise in bioinorganic chemistry in particular that I apply in my daily work. It is more the experience I have been able to gather in chemistry which I can apply in connection with and put into context with all the functionalities of the dental products. This has made it much easier for me to understand the different outcomes during the development stage of a product and to react accordingly.'),
      ),
      3 => array(
        'question' => array('You graduated in chemistry. Does Ivoclar Vivadent also employ graduates with a different field of study?','You graduated in chemistry. Does Ivoclar Vivadent also employ graduates with a different field of study?'),
        'answer' => array('Of course, Ivoclar Vivadent employs graduates with many different backgrounds. In the different departments, various kinds of expertise are needed. Most of the developers in the R&D department, for example, have a chemistry or materials science background. In the Scientific Services department, our employees are mainly biologists who are responsible for creating very important documentation.','Of course, Ivoclar Vivadent employs graduates with many different backgrounds. In the different departments, various kinds of expertise are needed. Most of the developers in the R&D department, for example, have a chemistry or materials science background. In the Scientific Services department, our employees are mainly biologists who are responsible for creating very important documentation.'),
      ),
      4 => array(
        'question' => array('How important is harmony between work and outside life for you? Does Ivoclar Vivadent offer a good work-life balance for its employees?','How important is harmony between work and outside life for you? Does Ivoclar Vivadent offer a good work-life balance for its employees?'),
        'answer' => array('Harmony is always needed! Since we are in the Alps here and have a lot of opportunities, it is easy to find an activity that helps ensure a good work-life balance. Nevertheless, Ivoclar Vivadent conducts regular workshops  to support employees in achieving and maintaining a healthy work-life balance. In addition, we have free yoga classes, for example.','Harmony is always needed! Since we are in the Alps here and have a lot of opportunities, it is easy to find an activity that helps ensure a good work-life balance. Nevertheless, Ivoclar Vivadent conducts regular workshops  to support employees in achieving and maintaining a healthy work-life balance. In addition, we have free yoga classes, for example.'),
      ),
      5 => array(
        'question' => array('You were already promoted once during your employment at Ivoclar Vivadent. How do you imagine your future career opportunities to look like?','You were already promoted once during your employment at Ivoclar Vivadent. How do you imagine your future career opportunities to look like?'),
        'answer' => array('In a company that is much smaller than the famous tech giants or big chemical companies, it is generally not possible to get promoted every few years. But I think that by continuously doing good work, I will be able to assume a position with an even wider area of responsibility. This also happened when I was promoted last time.','In a company that is much smaller than the famous tech giants or big chemical companies, it is generally not possible to get promoted every few years. But I think that by continuously doing good work, I will be able to assume a position with an even wider area of responsibility. This also happened when I was promoted last time.')
      ),
      6 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Always have a look at our website; there you can find a continually updated list of the job offers or available internships at our headquarters in Schaan and at our subsidiaries. If there is no suitable job offer or internship, do not hesitate to contact us proactively and send us your application documents.','Always have a look at our website; there you can find a continually updated list of the job offers or available internships at our headquarters in Schaan and at our subsidiaries. If there is no suitable job offer or internship, do not hesitate to contact us proactively and send us your application documents.'),
      ),
    ),
  );


$i = 0;
$template['interview'][2018][$i++] = array(
  'name' => 'Dr. Sandro Sbicego',
  'img_url' => set_source($awss3_archive.'/ivoclarvivadent/interviewee_2018_1', 'png', FALSE),
  'position' => array('Head of the Quality Control Department and Analytical Services R&D, Head of Global Quality Control', 'Head of the Quality Control Department and Analytical Services R&amp;D, Head of Global Quality Control'),

  'education' => array(
    2 => array(
      'date' => '1989-1994',
      'desc' => array('Universität Bern, Studium in Biochemie / Biologie', 'University of Bern, Studies in Biochemistry / Biology')
    ),
    1 => array(
      'date' => '1994-1998',
      'desc' => array('Universität Bern, Dissertation im Gebiet der Molekularen Biologie' ,'University Bern, Dissertation in the area of molecular biology')
    ),
    0 => array(
      'date' => '2005-2007',
      'desc' => array('Universität Basel, Nachdiplomstudium in Pharmazeutischer Medizin', 'University Basel, Postgraduate studies in Pharmaceutical Medicine')
    ),
  ),

  'career' => array(
    3 => array(
      'date' => '1998-2002',
      'desc' => array('Wissenschaftlicher Mitarbeiter auf dem Gebiet der RNA Biochemie, Howard Hughes Medical Institute, University of California in Los
      Angeles', 'Research associate in the area of RNA biochemisty, Howard Hughes Medical Institute, University of California at Los Angeles')
    ),
    2 => array(
      'date' => '2003-2009',
      'desc' => array('Wissenschaftlicher Mitarbeiter in Scientific Services, R&amp;D bei Ivoclar Vivadent' ,'Scientific staff in Scientific Services, R&amp;D at Ivoclar Vivadent')
    ),
    1 => array(
      'date' => '2010',
      'desc' => array('Head of the Quality Control Department and Analytical Services R&D bei Ivoclar Vivadent' ,'Head of the Quality Control Department and Analytical Services R&amp;D at Ivoclar Vivadent')
    ),
    0 => array(
      'date' => '2016',
      'desc' => array('zusätzlich: Head of Global Quality Control bei Ivoclar Vivadent' ,'in addition: Head of Global Quality Control at Ivoclar Vivadent')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Head of the Quality Control Department and Analytical Services R&D bei Ivoclar Vivadent?',
                          'What are your responsibilities as Head of the Quality Control Department and Analytical Services R&D at Ivoclar Vivadent?'),
      'answer' => array('Als Leiter der Qualitätskontrolle bin ich für die fachliche und organisatorische Führung des Labors mit ca. 50 Mitarbeitenden zuständig. Dabei geht es um die Sicherstellung der korrekten und zeitnahen Durchführung der chemisch-analytischen, materialtechnischen und zahntechnischen Prüfungen zur Freigabe der Rohmaterialien und Produkte.<br>
      Ein Hauptpunkt meiner Arbeit ist aber auch die Etablierung, Weiterentwicklung und Implementierung einer globalen Strategie zur Qualitätskontrolle. Dabei verfolge ich die Entwicklungen und Trends in Bezug auf die weltweiten regulatorischen
      Anforderungen im Bereich der Qualitätskontrolle.<br>
      Als Leiter der Zentralen Analytik F&E stelle ich sicher, dass wir die notwendigen Analysemethoden und die entsprechende Infrastruktur der Forschung zur Verfügung stellen.
      ',
                        'As Head of the Quality Control Department, I am responsible for the technical and organizational management of a laboratory with ca. 50 employees. We ensure that chemical, analytical, material and dental inspections are performed in a correct and timely manner to allow clearance of raw materials and products. A main focus of my work is to establish, develop and implement a global strategy for quality control. To this end, I follow the trends and changes with regards to global regulatory demands in the area of quality control. As Head of the Analytical Services R&D, I ensure that we have the required analysis methods and possess the respective infrastructure.')
    ),
    1 => array(
      'question' => array('Sie haben Biochemie studiert. Beschäftigt Ivoclar Vivadent auch Absolventen anderer Fachrichtungen (Chemiker, Chemieingenieure, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Biochemistry. Does Ivoclar Vivadent also employ graduates of other fields of study (Chemistry, Chemical Engineering, Interdisciplinary Sciences)?'),
      'answer' => array('Ivoclar Vivadent beschäftigt Absolventen aus fast allen Studienrichtungen. In der Forschung und Entwicklung arbeitet ein breit aufgestelltes interdisziplinäres Team aus Chemikern, Materialwissenschaftlern, Physikern,  Verfahrenstechnikern und natürlich auch Zahnmedizinern und Biologen. In der Geräteentwicklung bauen Systemingenieure und Softwareentwickler an Maschinen, die die Arbeit der Zahnärzte und Zahntechniker erleichtern und für den Patienten sicheren und ästhetische Zahnersatz gewährleisten.',
                        'Ivoclar Vivadent employs graduates from almost all fields of study. In R&D, we have an interdisciplinary team of chemists, material scientists, physicists, process engineers and of course also dental specialists and biologists. In device development, system engineers and software developers work on machines which simplify the work of dentists and dental technicians and ensure a safer and more aesthetic dental prosthesis for the patient.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Die Arbeit in der Industrie, insbesondere in der Medizintechnik, unterliegt einem hohen Regulierungsgrad, was ein sehr strukturiertes und dokumentiertes Vorgehen erfordert. Forschung und Entwicklung sind aber auch sehr stark auf die Kundenbedürfnisse ausgerichtet, welche in klaren Entwicklungszielen münden - die Forschung bleibt nicht Selbstzweck. Trotzdem unterhält Ivoclar Vivadent auch eine sehr ausgebaute Grundlagen-und-Technologie-Abteilung, in welcher an neuen Ansätzen und technologischen Grundlagen geforscht wird.',
                        'Working in industry, especially in medical technology, is subject to a high degree of regulation, resulting in very structured and well-documented procedures. Research & Development is strongly focused on customer needs, leading to clearly defined development objectives – research is not an end in itself. However, Ivoclar Vivadent has a fully-developed department for basic research and technology, in which we work on new approaches and technological foundations.')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich Ivoclar Vivadent als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Ivoclar Vivadent as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Als ich mich vor 15 Jahren auf die Stelle bei Ivoclar Vivadent beworben habe, kannte ich die Firma nicht. Die Stelle im wissenschaftlichen Dienst hatte mich angesprochen: Planen von klinischen Studien, Bewertung der Biokompatibilität und Risikomanagement, spannend und abwechslungsreich.',
                        'When I applied for the job at Ivoclar Vivadent 15 years ago, I didn’t know the company. The position in the Scientific Service was appealing to me: Planning clinical studies, assessing biocompatibility, risk management – exciting and rich in variety.')
    ),
    4 => array(
      'question' => array('Nach dem Doktorat machten Sie ein Nachdiplomstudium an der Universität Basel gemacht. War das eine Voraussetzung für Ihre erste Stelle bei Ivoclar Vivadent?',
                          'After your PhD, you went on to do postgraduate studies at the University of Basel. Was that a prerequisite for your first position at Ivoclar Vivadent?'),
      'answer' => array('Kontinuierliche Weiterbildung endet natürlich nicht mit einem Job in der Industrie. Ivoclar hat mir ein berufsbegleitendes Nachdiplomstudium in Pharmazeutischer Medizin ermöglicht, in welchem ich das Wissen in meinem Fachgebiet vertiefen konnte.',
                        'Of course continuous education does not end with a job in industry. Ivoclar enabled me to enroll in and complete an extra-educational post-graduate studies course in pharmaceutical medicine in which I was able to deepen my knowledge in this specific field of expertise.')
    ),
    5 => array(
      'question' => array('Die Forschung während Ihres PhDs und während Ihrer Zeit an der UCLA beschäftigte sich mit RNA-Biochemie. Kam dieses Themenfeld einmal bei Ihrer jetzigen Arbeit auf?',
                          'During your PhD and your time at UCLA, your research focussed on RNA biochemistry. Did that area ever come up during your work now?'),
      'answer' => array('Nein, die RNA-Biochemie von tropischen Krankheitserregern ist Grundlagenforschung par excellence, welche mit meiner jetzigen Arbeit thematisch nichts zu tun hat. Aber natürlich habe ich in dieser Zeit sehr viel Rüstzeug für die jetzige Position angeeignet: Die strukturierte Suche nach Lösungen, das Evaluieren alternativer Wege und auch einfach das Dranbleiben. Die Zeit in Los Angeles war geprägt durch die Arbeit in einem sehr heterogenen und international zusammengesetzten Team. Dort konnte ich für mich wichtige Erfahrungen sammeln, auf die ich mich in meiner internationalen Position zurückgreifen kann.',
                        'No, the RNA biochemistry of tropical pathogens is basic research par excellence and has nothing to do with my current work as regards subject matter. But of course I acquired many skills helpful in my current position: the structured search for solutions, the evaluation of alternatives approaches and simply sticking with it. My time in Los Angeles was coined by the work in a very heterogeneous and international team. This allowed me to make experiences which I draw on in my international position today.')
    ),
    6 => array(
      'question' => array('Regulatory affairs war und ist ein Kernpunkt Ihrer Arbeit bei Ivoclar Vivadent. Wie sehr kommen Sie dabei noch in Kontakt mit Naturwissenschaft?',
                          'A lot of your past and present work at the company dealt with regulatory affairs. How much “natural science” do you still come in contact with each day?'),
      'answer' => array('Regulatory affairs hat mit Naturwissenschaften mehr zu tun als der Name erwarten lässt. Es geht darum die vorhandenen Daten auf ihre Wissenschaftlichkeit hin zu überprüfen und gegenüber den Behörden zu verteidigen, da kommt manch ein gestandener Entwickler ins Schwitzen...<br>
      In meiner jetzigen Position leite ich neben Qualitätskontrolle auch die Zentrale Analytik für die Forschung und Entwicklung, wo immer wieder unterwartete Fragestellungen zu bearbeiten sind. Aber selber im Labor Hand angelegt habe ich seit Jahren nicht mehr.
      ',
                        'Regulatory affairs has more to do with natural science than the name might suggest. It’s about verifying available data for their scientificity and to defend it against government agencies. This can make even seasoned developers break a sweat…
                        In my current position, I head the Analytical Services R&D besides the Quality Control Department. Unexpected questions come up again and again. But I haven’t worked in the lab myself in years.
                        ')
    ),
    7 => array(
      'question' => array('Vor zwei Jahren wurden Sie Head of Global Quality Control. Was sind besondere Schwierigkeiten, wenn man Richtlinien für eine internationale Firma entwickelt?',
                          'Two years ago, you became Head of Global Quality Control. What is particularly challenging when setting standards for an international cooperation?'),
      'answer' => array('Wir haben 8 Produktionsstandorte in den USA, in Europa und auf den Philippinen, alle mit ihrer eigenen Geschichte und Kultur und mit eigenen Besonderheiten. Diese alle unter einen Hut zu bekommen ist nicht einfach. Die regulatorischen Vorgaben sind für alle gleich, was meine Arbeit erleichtert. Das spannende dabei ist es, alle für den gleichen Weg zu begeistern und gesetzte Massstäbe einzufordern, ohne die lokalen Organisationen in ihrer Eigenverantwortung zu beschneiden. Dies bedeutet viel Beziehungsarbeit und kulturelles Verständnis. Da kommt mir die Erfahrung aus dem Postdoc in LA sehr zugute.',
                        'We have 8 production sites in the US, in Europe and in the Philippines, all with their unique history and culture and with their own peculiarities. Combining the work from all those different locations is not easy. The regulatory situation is the same for all of them, which simplifies my work. The interesting thing about it is to excite everyone for the same path and to impose standards without robbing the local organizations of their autonomy. This means a lot of relationship building and cultural understanding. My experiences from my postdoc in LA help a lot with that.')
    ),
    8 => array(
      'question' => array('Was sind Ihre Pläne und Ziele für Ihre Karriere bei Ivoclar Vivadent? Welche Möglichkeiten gibt es, sich innerhalb der Firma weiterzuentwickeln?',
                          'Looking at your career at Ivoclar Vivadent, what are you plans and goals for the future? Which opportunities exist at your company for personal development?'),
      'answer' => array('Ivoclar bietet engagierten Mitarbeitenden Möglichkeiten sich gezielt weiterzuentwickeln, sei es auf hierarchischer Stufe oder fachlicher Ebene. Ich selber habe meine "Karriere" nie wirklich geplant - Optionen sind nicht vorhersehbar. Was für mich zählt, ist dass die Aufgaben spannend und erfüllend sind – das ist auch die Basis für eine erfolgreiche Arbeit und somit neuer Möglichkeiten.',
                        'Ivoclar offers dedicated employees opportunities to upgrade their education, may it be in terms of hierarchical or technical level. Myself, I have never really planned my career – options aren’t really predictable. What’s important to me is that my job is exciting and fulfilling – that is the basis for successful work and thus new opportunities.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie einem "frischen" ETH-Absolventen geben, der sich auf Jobsuche begibt?',
                          'Which suggestions do you have for  a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Suchen Sie etwas das zu ihrem Typ passt und potentiell Spass macht. Bewerben Sie sich bei der Ivoclar Vivadent!',
                        'Look for something that fits your type and could be fun. Apply with Ivoclar Vivadent!')
    ),
  ),
);


include('../0_template/template.php');

?>
