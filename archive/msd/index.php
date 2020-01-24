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


$template['company_name'] = 'MSD';
$template['company_name_short'] = 'msd';
$template['logo_url'] = $awss3_archive.'/msd/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.msd.com','msd.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/msd-global/','MSD Global');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'At MSD, we are inventing for life. As a leading global biopharmaceutical company, we have been engaged in life science research for more than a century, developing drugs and vaccines for the most challenging diseases worldwide. In Switzerland, we provide a wide range of healthcare solutions and are making available significant novel medicines, including treatments of cancer, hepatitis C, diabetes and antibiotic-resistant infections. Our recently re-integrated broad vaccines portfolio is well positioned to further prevent diseases and improve public health. <br>Switzerland serves as an international hub in the company’s global setting with four sites in and around the city of Lucerne. Our R&amp;D site in Werthenstein was involved in the development of about 45% of MSD’s products, serving patients in need. From here, around 270 scientists, engineers, technicians, process specialists and administrative personnel from around 14 nations test, develop and analyze new large molecule (i.e. biological), test and run stability studies on drug substances or drug products, provide experimental medicines for worldwide clinical trials and are contributing state-of- the-art packaging of clinical supplies.',
  'At MSD, we are inventing for life. As a leading global biopharmaceutical company, we have been engaged in life science research for more than a century, developing drugs and vaccines for the most challenging diseases worldwide. In Switzerland, we provide a wide range of healthcare solutions and are making available significant novel medicines, including treatments of cancer, hepatitis C, diabetes and antibiotic-resistant infections. Our recently re-integrated broad vaccines portfolio is well positioned to further prevent diseases and improve public health.<br>Switzerland serves as an international hub in the company’s global setting with four sites in and around the city of Lucerne. Our R&amp;D site in Werthenstein was involved in the development of about 45% of MSD’s products, serving patients in need. From here, around 270 scientists, engineers, technicians, process specialists and administrative personnel from around 14 nations test, develop and analyze new large molecule (i.e. biological), test and run stability studies on drug substances or drug products, provide experimental medicines for worldwide clinical trials and are contributing state-of- the-art packaging of clinical supplies.');
$template['we_offer'] = array(
  'Inventing shapes our corporate culture. In joining MSD, you’ll be part of an organization that is inspired by innovation to achieve our ambitious goals and transform lives through spirited co-creation and applied curiosity. You will be embarking on a journey where you can drive your national or international career development aspirations. We are proud of our modern working environment and our positive culture of cooperation and support. We are an equal opportunities organization, proudly embracing diversity in all its forms. When are you inventing the future?',
  'Inventing shapes our corporate culture. In joining MSD, you’ll be part of an organization that is inspired by innovation to achieve our ambitious goals and transform lives through spirited co-creation and applied curiosity. You will be embarking on a journey where you can drive your national or international career development aspirations. We are proud of our modern working environment and our positive culture of cooperation and support. We are an equal opportunities organization, proudly embracing diversity in all its forms. When are you inventing the future?');
$template['we_look'] = array(
  'We are regularly looking for talents with a strong educational background in Life Sciences, recently having gained a relevant university degree or with first industry experience, pursuing a career in the pharmaceutical industry. Your experience can be applied in a variety of functions within our local and regional organizations in Switzerland, e.g. in R&amp;D and manufacturing, quality, regulatory affairs or external manufacturing management. Besides, MSD offers an apprenticeship program with a focus on biology or chemistry.',
  'We are regularly looking for talents with a strong educational background in Life Sciences, recently having gained a relevant university degree or with first industry experience, pursuing a career in the pharmaceutical industry. Your experience can be applied in a variety of functions within our local and regional organizations in Switzerland, e.g. in R&amp;D and manufacturing, quality, regulatory affairs or external manufacturing management. Besides, MSD offers an apprenticeship program with a focus on biology or chemistry.');


  $i=0;

  $template['interview'][2019][$i++] = array(
    'name' => 'Dr. Stephanie Moessner',
    'img_url' => set_source($awss3_archive.'/msd/interviewee_2019_1', 'png', FALSE),
    'position' => array('Director Pharmaceutical Sciences WAG','Director Pharmaceutical Sciences WAG'),
  
    'education' => array(
      0 => array(
        'date' => '1996-1998',
        'desc' => array('Postdoctoral Researcher (Humboldt Fellowship), NIST National Institute of Standards and Technology, Gaithersburg, Maryland, US','Postdoctoral Researcher (Humboldt Fellowship), NIST National Institute of Standards and Technology, Gaithersburg, Maryland, US'),
      ),
      1 => array(
        'date' => '1991-1995',
        'desc' => array('PhD scientist in analytical and environmental chemistry, toxicology, University of Ulm, Germany, Department of Analytical and Environmental Chemistry','PhD scientist in analytical and environmental chemistry, toxicology, University of Ulm, Germany, Department of Analytical and Environmental Chemistry'),
      ),
      2 => array(
        'date' => '1985-1991',
        'desc' => array('Diploma, Chemistry (inorganic, organic, physical and analytical chemistry), University of Ulm, Germany','Diploma, Chemistry (inorganic, organic, physical and analytical chemistry), University of Ulm, Germany'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018',
        'desc' => array('Director PharmSci WAG, Werthenstein BioPharma GmbH, MSD Switzerland','Director PharmSci WAG, Werthenstein BioPharma GmbH, MSD Switzerland'),
      ),
      1 => array(
        'date' => '2010-2018',
        'desc' => array('Director ACDS (Analytical Chemistry in Development and Supply), Werthenstein BioPharma GmbH, MSD Switzerland','Director ACDS (Analytical Chemistry in Development and Supply), Werthenstein BioPharma GmbH, MSD Switzerland'),
      ),
      2 => array(
        'date' => '2004-2010',
        'desc' => array('Associate Director GMP/Comparator Labs, Werthenstein BioPharma GmbH, MSD Switzerland','Associate Director GMP/Comparator Labs, Werthenstein BioPharma GmbH, MSD Switzerland'),
      ),
      3 => array(
        'date' => '1999-2004',
        'desc' => array('Manager Stability Lab, Werthenstein Chemie AG','Manager Stability Lab, Werthenstein Chemie AG'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What is your daily work like as Director of Chemistry at MSD and what are your responsibilities?','What is your daily work like as Director of Chemistry at MSD and what are your responsibilities?'),
        'answer' => array('I am head of the Pharmaceutical Sciences department at MSD in Switzerland at the development site in Schachen close to Lucerne. My teams are developing analytical methods for innovative drug products, e.g. on polymeric basis. My daily work is mainly leading people, project coordination and making strategic decisions.','I am head of the Pharmaceutical Sciences department at MSD in Switzerland at the development site in Schachen close to Lucerne. My teams are developing analytical methods for innovative drug products, e.g. on polymeric basis. My daily work is mainly leading people, project coordination and making strategic decisions.'),
      ),
      1 => array(
        'question' => array('You worked in the academia and the industry. How does the work differ in the fields and what could they learn from each other?','You worked in the academia and the industry. How does the work differ in the fields and what could they learn from each other?'),
        'answer' => array('While academia is primarily focused on basic scientific research, the pharmaceutical industry is applying these results into products for the benefit of the patient. Synergies between academia and industry are key for the success of both. MSD has recognized this important network and has established their research facilities close to top universities.','While academia is primarily focused on basic scientific research, the pharmaceutical industry is applying these results into products for the benefit of the patient. Synergies between academia and industry are key for the success of both. MSD has recognized this important network and has established their research facilities close to top universities.'),
      ),
      2 => array(
        'question' => array('You graduated in chemistry and completed your PhD as well in the fields of chemistries. How much do you still come in contact with concrete chemistry in your function as director?','You graduated in chemistry and completed your PhD as well in the fields of chemistries. How much do you still come in contact with concrete chemistry in your function as director?'),
        'answer' => array('In my current position as people manager, the direct contact with scientific problems is less in focus than earlier in my career. Other competencies like developing and motivating people get more important.','In my current position as people manager, the direct contact with scientific problems is less in focus than earlier in my career. Other competencies like developing and motivating people get more important.'),
      ),
      3 => array(
        'question' => array('How much have your studies prepared you for your role as Director of Chemistry at MSD?','How much have your studies prepared you for your role as Director of Chemistry at MSD?'),
        'answer' => array('During my PhD thesis in addition to working on scientific questions I have learned how to manage success and failure. I learned to be curious, resilient, flexible and adapt to challenging situations. This has tremendously prepared me for my current role.','During my PhD thesis in addition to working on scientific questions I have learned how to manage success and failure. I learned to be curious, resilient, flexible and adapt to challenging situations. This has tremendously prepared me for my current role.'),
      ),
      4 => array(
        'question' => array('How important is harmony between work and outside life for you? Does MSD offer a good work-life balance for its employees?','How important is harmony between work and outside life for you? Does MSD offer a good work-life balance for its employees?'),
        'answer' => array('A good work-life balance is and was very important during my career. I have two children, worked part-time for many years, enjoy flexible working hours and can work from home. MSD has been recognized as Top Employer since many years.','A good work-life balance is and was very important during my career. I have two children, worked part-time for many years, enjoy flexible working hours and can work from home. MSD has been recognized as Top Employer since many years.'),
      ),
      5 => array(
        'question' => array('You were already promoted multiple times. How do you imagine your future career path to look like?','You were already promoted multiple times. How do you imagine your future career path to look like?'),
        'answer' => array('This is a good question! To be honest, I never had a clear career path laid out for me. I always relied on my openness, flexibility and good network to develop into potential new roles.','This is a good question! To be honest, I never had a clear career path laid out for me. I always relied on my openness, flexibility and good network to develop into potential new roles.'),
      ),
      6 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('I would suggest him or her to be open-minded, choose broadly and be aware that the industry is changing fast and not always in a predictable way. A good network, challenging mentors and supportive sponsors are crucial in your career. Attending as many university events as possible to establish relationships with potential employers in the region is very helpful. Explore different areas in internships to get an understanding, what it is like to work in such a role. There are so many opportunities nowadays, so keep on exploring.','I would suggest him or her to be open-minded, choose broadly and be aware that the industry is changing fast and not always in a predictable way. A good network, challenging mentors and supportive sponsors are crucial in your career. Attending as many university events as possible to establish relationships with potential employers in the region is very helpful. Explore different areas in internships to get an understanding, what it is like to work in such a role. There are so many opportunities nowadays, so keep on exploring.'),
      ),
    ),
  );

  $i=0;
  $template['interview'][2018][$i++] = array(
    'name' => 'Dr. Marc David Grynbaum',
    'img_url' => set_source($awss3_archive.'/msd/interviewee_2018_1', 'png', FALSE),
    'position' => array('Principal Scientist Regional SAS Hub', 'Principal Scientist Regional SAS Hub'),
  
    'education' => array(
      0 => array(
        'date' => '2004-2006',
        'desc' => array('Doktorat bei Prof. Albert an der Eberhard-Karls-Universität', 'PhD with Prof. Albert at Eberhard-Karls-University')
      ),
      1 => array(
        'date' => '2005-2005',
        'desc' => array('Graduate Research Assistant an der Tufts University', 'Graduate Research Assistant at Tufts University')
      ),
      2 => array(
        'date' => '1998-2004',
        'desc' => array('Diplom in Chemie an der Eberhard-Karls-Universität', 'Diploma in Chemistry at Eberhard-Karls-University')
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018',
        'desc' => array('Principal Scientist Regional SAS Hub bei MSD', 'Principal Scientist Regional SAS Hub at MSD')
      ),
      1 => array(
        'date' => '2015-2018',
        'desc' => array('Associate Director SAS &amp; Dev Lab bei MSD', 'Associate Director SAS &amp; Dev Lab at MSD')
      ),
      2 => array(
        'date' => '2012-2015',
        'desc' => array('Associate Director CoE for Comparator Blinding bei MSD', 'Associate Director CoE for Comparator Blinding at MSD')
      ),
      3 => array(
        'date' => '2007-2012',
        'desc' => array('Assoc. Principal Scientist GMP Testing Lab bei MSD', 'Assoc. Principal Scientist GMP Testing Lab at MSD')
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('Was sind Ihre Aufgaben als Principal Scientist Regional SAS Hub bei MSD?',
                            'What are your responsibilities as Principal Scientist Regional SAS Hub at MSD?'),
        'answer' => array('In meiner Rolle als Principal Scientist leite ich das regionale Supply Support Sciences Team. Mein Team, bestehend aus acht Mitarbeitenden vom Laboranten bis zum promovierten Biochemiker, unterstützt kommerzielle Standorte in der europäischen Region bei analytischen Fragestellungen. Ein Gebiet ist die analytische Identifikation von Fremdpartikeln (sogenanntem „Extraneous Matter“), welche von Zeit zu Zeit während der Produktion auftreten. Unsere Analysenergebnisse unterstützen den Herstellungsstandort bei der sogenannten „root cause“-Analyse und dem „impact assessment“ – sprich bei der Abklärung, woher dieser Partikel kommt, wie sich das Auftreten in Zukunft vermeiden lässt und was der Einfluss auf unser Produkt ist.<br>Eine weitere Aufgabe ist z.B. die Bereitstellung analytischer Daten zu registrierungspflichtigen Herstellungsänderungen. Ab und an ändern sich unsere Herstellungsprozesse. Bevor wir Medikamente, die nach einem geänderten Prozess hergestellt wurden, auf den Markt bringen können, müssen wir aufzeigen, dass diese Änderung keinen Einfluss auf die Produktqualität und seine Wirkung hat. In der Regel werden hierzu bei den Behörden analytische Daten bereitgestellt, welche mein Labor generiert – und zwar nach länderspezifischen Anforderungen, denn jede Region, bzw. jedes Land hat eigene Anforderungen an diese analytischen Daten. In diesen Tätigkeiten interagiere ich persönlich, und auch mein Team, mit unseren globalen Kollegen vor allem in den USA und Europa, aber auch in Asien – also letzendlich weltweit.<br>Neben den operativen Tätigkeiten habe ich vor allem die personelle Verantwortung für meine Mitarbeitenden und deren persönliche und berufliche Entwicklung. Des Weiteren ist es als Vorgesetzter meine Aufgabe, ein offenes und inklusives Arbeitsumfeld zu schaffen und zu fördern - nur so kann mein Team bestmögliche Arbeit leisten.
        ',
                          'In my role as Principal Scientist, I am heading the regional Supply Support Sciences Team. My team, consisting of eight employees and including everyone from lab technicians to graduated biochemists, supports commercial sites in Europe when facing analytical questions. One area we work in is the identification of unknown particles (so called “Extraneous Matter”), which occur during manufacturing. The results of our analyses support the production site in the so-called root cause analysis and in the impact assessment – i.e. where does this particle come from, how can we prevent this issue in the future and what is the impact on our product.<br>Another task is the support of source of supply change registrations. From time to time, our production processes may change. Before medicines that were produced using a modified process can be provided to a specific market, we have to show that those changes do not influence product quality or efficacy. Typically, my lab provides analytical data for those registrations for each country. Each region respectively each country has different requirements on what / or how to provide the data.<br>For these activities, both my team and me interact with our colleagues from all over the world, mainly in the US and in Europe, but also in Asia. In addition to the operative tasks, I have the responsibility for my team and their personal and professional development. Additionally, it is my job as manager to provide an open and inclusive work environment – that’s the only way a team can perform at its absolute best.
                          ')
      ),
      1 => array(
        'question' => array('Sie haben Chemie studiert. Beschäftigt MSD auch Absolventen anderer Fachrichtungen (Chemieingenieure, Interdisziplinäre Naturwissenschaftler)?',
                            'You graduated with a degree in Chemistry. Does MSD also employ graduates of other fields of study (Chemical Engineering, Interdisciplinary Sciences)?'),
        'answer' => array('Während ich an unserem Forschungs- und Entwicklungsstandort in Schachen arbeite (ca. 15 Minuten von Luzern entfernt), bietet MSD Schweiz an unseren vier  Standorten in bzw. um Luzern eine Vielfalt an Tätigkeiten. Dementsprechend vielfältig sind die Profile unserer rund 700 Mitarbeitenden. Neben Chemikerinnen gibt es natürlich viele Pharmazeuten, es gibt Biotechnologinnen, Biochemiker, Biologen, Physikerinnen, Ingenieure, Informatiker, ... ich kann gar nicht alle aufzählen. Gleichzeitig sind vermutlich die meisten Mitarbeitenden nicht direkt in dem Fachgebiet tätig, in welchem sie ursprünglich studiert hatten. Die Stellenausschreibungen auf unserem Job-Portal (<a href="https://www.msd.ch/de/career/">www.msd.ch/de/career/</a>) sind deshalb auch offen formuliert, z.B. „Education required: Degree in Engineering or Biological/Chemistry Sciences“. Ich würde Absolventen empfehlen, sich nicht zu sehr auf ihr Fachgebiet zu fokussieren.',
                          'While I am working at our R&D site in Schachen (approx. 15 minutes from Lucerne), MSD Switzerland offers a variety of different jobs at our four sites in and around Lucerne. Accordingly, the profiles of our 700 employees differ a lot. Besides chemists, there are of course many pharmacists, there are biotechnologists, biochemists, biologists, physicists, engineers, computer scientists, … I can’t even list all of them. At the same time, many of the employees don’t work directly in their respective field of study. That’s why the job advertisements on our job website (<a href="https://www.msd.ch/en/career/">www.msd.ch/en/career/</a>) are formulated very openly, e.g. “Education required: Degree in Engineering or Biological/Chemistry Sciences“. I would advise university graduates not to focus too much on their particular area of expertise.')
      ),
      2 => array(
        'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                            'How does a typical work day in industry differ from one at university?'),
        'answer' => array('Das ist meines Erachtens eine sehr pauschale Frage und lässt sich nicht so einfach beantworten. Das ist sowohl von der Universität und der eigenen Forschungsgruppe abhängig als auch von der Firma und der Abteilung.',
                          'From my perspective this is a very general question and cannot be answered that easily. It depends on the university as well as the research group and on the company and the department one is working for.')
      ),
      3 => array(
        'question' => array('Warum haben Sie sich MSD als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                            'What made you choose MSD as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('Ich habe nach der Promotion ca. 25 Bewerbungen auf ausgeschriebene Stellen in der pharmazeutisch-chemischen Industrie und den Zulieferern verschickt. Der Arbeitsmarkt war sehr gut und ich hatte innerhalb kürzester Zeit den Vertrag bei MSD (damals gehörte unser Standort noch zu der amerikanischen Schering-Plough) in der Tasche, so dass ich meine zur Überbrückung gedachte Assistentenstelle bei meinem Professor an der Universität vorzeitig aufgelöst habe.<br>  Ich habe mich wirklich breit beworben und diverse Interviews auch im Salesbereich geführt, welcher mich damals ebenfalls interessierte. Als ich nach dem zweiten Interview bei MSD das positive Feedback und Jobangebot von der Personalabteilung erhielt, sagte ich direkt mündlich zu. Im Nachhinein die beste Entscheidung die ich treffen konnte, ich liebe das internationale Umfeld unserer Firma und kann mich voll mit unserer Mission „Innovative Produkte und Dienstleistungen zu entdecken, zu entwickeln und bereit zu stellen, die Leben auf der ganzen Welt retten und verbessern“ identifizieren. Wir pflegen eine sehr offene und internationale Kultur, es arbeiten Mitarbeiter aus über 50 Nationalitäten bei MSD Schweiz, manchmal fühlt man sich wie bei den „mini“ United Nations. Es herrscht ein guter Teamspirit und MSD ermöglicht uns eine gute Work-Life-Balance mit spitzen Benefits. All dies ermöglicht MSD Schweiz auch die Zertifizierung als Top Employer (<a href="https://www.msd.ch/de/infocenter/meldungen/top-employer-2018.xhtml">www.msd.ch/de/infocenter/meldungen/top-employer-2018.xhtml</a>).
        ',
                          'After my graduation, I sent about 25 applications for job openings in the pharmaceutical-chemical industry and for jobs with suppliers. The job market was very good and I quickly signed the contract with MSD (at the time our site was actually part of the American company Schering-Plough), so I terminated my assistant position with my professor from university earlier than expected.<br>I really applied for a wide spectrum of jobs and had very diverse interviews, also e.g. in sales, which interested me as well. When I got the positive feedback and the job offer after my second interview at MSD, I directly accepted the position over the phone. In retrospect, this was the best decision I could have made. I love the international environment in our company and can completely identify with our mission “To discover, develop and provide innovative products and services that save and improve lives around the world“. We have a very open and international culture and have employees from over 50 nationalities working at MSD Switzerland (sometimes it feels like the “mini United Nations”). There’s a good team spirit and MSD allows for a healthy work-life-balance and excellent benefits. All this lead to MSD Switzerland’s certification as Top Employer (<a href="https://www.msd.ch/en/infocenter/meldungen/top-employer-2018.xhtml">www.msd.ch/en/infocenter/meldungen/top-employer-2018.xhtml</a>).')
      ),
      4 => array(
        'question' => array('Ihre gesamte berufliche Laufbahn lief bisher bei MSD ab. Welche Vorteile hatten Sie davon, langfristig in einer Firma zu verbleiben?',
                            'You joined MSD right after obtaining your PhD. Which advantages did you have from staying with the same employer long-term?'),
        'answer' => array('Korrekt, meine professionelle berufliche Laufbahn habe ich bei MSD absolviert. Das klingt langweilig, oder? Für mich war es keinesfalls langweilig! Zum einen hat sich meine Rolle viermal richtungsweisend verändert, zum anderen kann ich heute sagen, dass ich Projekte bis zur erfolgreichen Markteinführung betreut habe. Pharmazeutische Entwicklung benötigt eine lange Zeit von der Entdeckung des Wirkstoffs bis das Medikament letztendlich den Patienten zur Verfügung steht – häufig 10 Jahre und dabei schaffen es die wenigsten Produkte letztendlich bis zum Markt. Ich konnte in meiner Laufbahn die Entwicklung zweier lebensrettender Medikamente bis zur Markteinführung persönlich betreuen - an einem habe ich sieben Jahre gearbeitet. Und... man sieht sich immer zwei Mal im Leben: In meiner jetzigen Rolle kann ich dieses Produkt nun weiterbetreuen bei der Erstregistrierung in weiteren Ländern.',
                          'Correct, my professional career was entirely with MSD. That sounds boring, doesn’t it? But for me it really wasn’t! For once, my role changed four times significantly. And today I can say that I have supported projects all the way to successful market introduction. Pharmaceutical development takes a lot of time from discovery of the active substance until the drug is finally available to the patient – often 10 years, and only very few products even make it to the market. During my time at MSD, I had the opportunity to personally work on the development of two life-saving drugs and to bring them to the market. I worked on one of them for seven years. And … you always meet twice in life – in my current role, I can continue to work on this project and support the initial registration in further countries.')
      ),
      5 => array(
        'question' => array('Auf Ihrem Lebenslauf findet sich eine Reihe von Weiterbildungen, welche Sie innerhalb von MSD absolviert haben. Können Sie uns mehr zu diesen Möglichkeiten erzählen?',
                            'Your CV lists a number of Advanced Trainings you completed at MSD. Can you tell us a little bit more about those opportunities?'),
        'answer' => array('Das stimmt, ich habe diverse Weiterbildungen absolviert, wobei es noch mehr sind als die, die ich auf meinem Lebenslauf aufgeführt habe. Ständige Weiterentwicklung und Weiterbildung ist mir, aber auch MSD als Arbeitgeber, sehr wichtig.<br>70% der Entwicklung sind die Erfahrungen im Job, 20% Lernen von anderen (Mentoring, Networking) und 10% Lernen durch Training. Und als Mitarbeiter ist man hier ebenfalls in der Pflicht, nicht „stehen zu bleiben“, der Vorgesetze ermöglicht die Entwicklung.<br>Mein persönlicher Höhepunkt bisher war sicher, dass ich im letzten Jahr ausgewählt wurde, am „Business Leadership Program“ teilzunehmen. Dies ist eins der „Star-Progamme“ innerhalb von MSD und es wird in Zusammenarbeit mit Duke Corporation Education angeboten. In diesem Training habe ich viel über Finance gelernt (und einen Onlinekurs „Demystifying Finance“ absolviert), aber auch meine Leadership Skills weiterentwickelt. Am Training nahmen Kollegen aus sämtlichen Bereichen unserer Firma (Manufacturing, Research, Clinical, Marketing, Sales, ...) und aus sämtlichen Regionen teil, sprich wir waren eine sehr diverse und damit spannende Gruppe. Für das Training wurde als zentrale Location Dubai gewählt. Trotz Training von 8 bis 18 Uhr mit anschliessendem Abendessen blieb doch Zeit für das eine oder andere Bad im warmen Meer. Eine grossartige Erfahrung!
        ',
                          'Yes, I completed a number of Advanced Trainings, and there’s even more than those  listed on my CV. Continuous development and continuous education are very important to me personally and also to MSD as an employer. 70% of the development is experiences on the job, 20% is learning from others (mentoring, networking) and 10% is training. As employee, one has to be eager to develop and the manager enables one’s development.<br>My personal highlight was certainly to be selected for the “Business Leadership Program” last year. This is one of MSD’s “Star Programs” and is offered in collaboration with Duke Corporation Education. In this training, I learned a lot about Finance (and completed an online course “Demystifying Finance”) and also improved my leadership skills. Colleagues from all areas of our company (Manufacturing, Research, Clinical, Marketing, Sales, …) and from all regions participated in the training, so we were a very diverse and thus very interesting group. The training took place in Dubai and despite an intense training program from 8AM to 6PM, followed by dinner, there was still some time for a quick swim in the warm sea. A great experience!
                          ')
      ),
      6 => array(
        'question' => array('Wie haben sich Ihre Verantwortlichkeiten während Ihrer Karriere bei MSD verändert?',
                            'How did your responsibilities change during your career at MSD?'),
        'answer' => array('Als ich 2007 startete, habe ich das pharmazeutische Analytik-Labor geleitet, d.h. mein Team hat die Produktpipeline betreut und zusätzlich betreuten wir die Stabilitätsanalytik – hier auch für Wirkstoffe. Als die strategische Entscheidung im Konzern getroffen wurde, die Wirkstoffherstellung von unserem Standort weg zu verlagern, wechselte meine Gruppe in die frühe pharmazeutische Analytik, in welcher wir klinische Phase-I Studien betreut haben. Diese Produkte waren sehr nah am Wirkstoff orientiert („Active in Capsule“ / „Bottle“). Darauf wechselten wir in die späte Analytik ab klinischer Phase-2b bis zu Markteinführung. Vor etwa drei Jahren habe ich ein neues Labor aufgebaut, das unsere Medikamente nach der Markteinführung betreut, das regionale Supply Analytical Sciences Labor.<br>Bereits 2007 habe ich als Vorgesetzter gestartet. Mit der Zeit hat sich meine Rolle weg vom Supervisor, also vom rein Operationellen mehr zum Strategischen, entwickelt. Das spiegelt sich auch in meinem Team wider, jeder einzelne hat jetzt mehr Verantwortung. Zudem ist meine direkte Vorgesetzte nun in den USA.
        ',
                          'When I started in 2007, I headed the pharmaceutical analytical laboratory, i.e. my team supported the product pipeline and we also worked on stability analytics, including active substances. When the company made the strategic decision to move the active pharmaceutical ingredient (API) pilot plant away from our site, my group switched to early phase pharmaceutical analytics, where we supported clinical Phase-1 studies. These products were very close to the active substances (“Active in Capsule”/”Bottle”). We then switched to late phase pharmaceutical analytics from Phase-2b to market introduction. Recently, three years ago, I established a new laboratory, which supports our drugs after market introduction – the regional Supply Analytical Sciences Laboratory.<br>While I started back in 2007 as people manager, over time, my role developed from a supervisory position (purely operational) to a more strategic one. This is also reflected in my team – everyone has more responsibility now. In addition, my direct manager is now in the US.
                          ')
      ),
      7 => array(
        'question' => array('Im Rahmen Ihrer Dissertation an der Eberhard-Karls-Universität Tübingen und Tufts University Boston haben Sie sich mit der Wirkungsweise von Active Pharmaceutical Ingredients beschäftigt. In welcher Hinsicht haben Sie von diesen Erfahrungen in einem industriellen Umfeld profitiert?',
                            'During your PhD in Tübingen and Boston, your research focused on the modes of action of Active Pharmaceutical Ingredients. How did you benefit from what you learned there in an industrial setting?'),
        'answer' => array('Mein Promotions-Betreuer bzw. mein Prof hatte sehr viele Industrie-Kooperationen. Von diesen habe ich stark profitiert: Kennenlernen des industriellen Umfelds, Präsentation der Resultate bei Meetings an der Universität oder auch bei unseren industriellen Partnern in Deutschland aber auch im Ausland. Von dieser ergebnisorientierten Arbeitsweise habe ich viel gelernt. Zusätzlich ermöglichten uns die Industriemittel auch die Teilnahme an verschiedenen internationalen Konferenzen. Neben der Präsentation der eigenen Daten habe ich hiervon vor allem die kulturelle Vielfalt durch den wissenschaftlichen Austausch mit internationalen Forschern an ausserordentlichen Tagungsorten mitgenommen. Diese Internationalität braucht man heutzutage in jeder Branche und in jeder Firma.',
                          'My PhD supervisor, or my professor respectively, had many industrial collaborations. I profited a lot from those: Getting to know the industrial environment, presenting the results at meetings both at university and at our industrial partners in Germany and abroad. I learned a lot from this result-oriented way of working. The financial support from industry also allowed us to participate in multiple international conferences. Besides presenting my own data, I profited a lot from the cultural diversity and the scientific exchange with international researchers at extraordinary conference venues. This “internationality” is something you will need in every industry and in every company nowadays.')
      ),
      8 => array(
        'question' => array('Müssen Sie für Ihren Job weiterhin auf dem aktuellen Stand der Forschung bleiben, oder konzentrieren Sie sich eher auf die Anwendung von bereits etablierten Technologien?',
                            'Does your job require you to stay on top of current research or do you rather focus on applying established technologies?'),
        'answer' => array('Eine super Frage! Während wir in einem regulierten Umfeld arbeiten, in dem sich etablierte Methoden nur langsam ändern, ist Innovation immer ein hochaktuelles Thema! Der Entwicklungszyklus wird immer kürzer. Im Studium habe ich im Praktikum noch Gaschromatographie-Peaks ausgeschnitten und gewogen ... heute undenkbar. Wir evaluieren fortwährend neue Technologien, die wir für unsere Anwendungen verwenden können. Dies sind nicht nur kommerziell erhältliche Technologien, es gibt auch universitäre Kollaborationen. Innovation bedeutet aber nicht immer nur ein neues, grosses (oder kleines) Gerät – Innovation ist ein Mindset und kann auch im Kleinen erfolgen. Dies ist mir sehr wichtig und braucht einfach Kreativität. Innerhalb von MSD gibt es verschiedene Innovations-Zentren, Innovations-Foren und interne Konferenzen, bei denen sich unsere Wissenschaftler aus der ganzen Welt austauschen. Dieses Jahr haben wir ein Site Event unserer „Manufacturing Science & Technology Days“ in der Schweiz abgehalten, an dem Kollegen aus Analytik, Biotech & Manufacturing teilgenommen haben. An diesen Events herrscht immer eine ganze besondere Atmosphäre – neben dem inspirierenden wissenschaftlichen Austausch und dem Netzwerken, kommt der Spass nie zu kurz.',
                          'Great question! Yes, we work in a regulated environment in which established methods only change slowly. However, innovation is always a hot topic! The development cycles are much shorter now. In one of my classes during my studies I cut out and weighed Gas-Chromatography peaks … today unthinkable. We constantly evaluate new technologies that we can implement for our purposes. Those are not only commercially available ones, MSD also collaborates with universities. Innovation doesn’t always mean a new big (or small) piece of equipment, it is a mindset and innovation can occur in small incremental steps. This is very important to me and simply requires creativity. Within MSD we have multiple Innovation Centers, Innovation Forums and internal conferences where our scientists from all over the world exchange ideas. This year we held a site event of our „Manufacturing Science & Technology Days“ in Switzerland which colleagues from Analytical, Biotech & Manufacturing attended. Those events always have a very special atmosphere and besides the inspiring scientific exchange and the networking, fun is a big part of it.')
      ),
      9 => array(
        'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                            'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Das ist jetzt wirklich eine sehr offene Frage. Von Routine-Themen, wie dem eigenen Social-Media-Auftritt, Networking - sprich Karrieremessen wie die Chemtogether besuchen und frühzeitig Kontakte zu Unternehmen knüpfen, evtl. Arbeitserfahrungen sammeln (Praktika), der Recherche über die Firma vor dem Interview, bis hin zu dem Follow-up nach dem Interview. Ein paar Ratschläge: <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Auf Jobsuche nicht mit Scheuklappen vorgehen, Offenheit für die Vielfalt an Tätigkeiten, Branchen und Firmen bewahren. Ein promovierter Freund (ebenfalls Chemiker) ist im Consulting, ein MSD-Kollege hat als promovierter Biologe im Sales gestartet, ein anderer ist als Physiker in unserer Market Research Abteilung tätig. So mancher strebt eine Karriere als Patentanwalt an und hat neben der Tätigkeit in einer Kanzlei das entsprechende Fernstudium aufgenommen. Insofern sollte man sich gut überlegen, wohin man möchte und sich dabei nicht zu sehr auf sein Studienfach fokussieren.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Sicher ist eine der ersten Überlegungen, ob man in einem Grosskonzern arbeiten möchte oder doch lieber in einem mittelständischen Unternehmen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Wie ist das Arbeitsumfeld, das Arbeitsklima? Hier können Plattformen aus dem Internet helfen, allerdings muss man den Kommentaren auch mit Vorsicht begegnen – nicht alles, was dort steht, ist objektiv wahr, nicht alles lässt sich pauschalisieren; im Positiven wie im Negativen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Ist einem der Vorgesetzte sympathisch, das Team?</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td>Man sollte sich nicht von Absagen demotivieren lassen. Im Allgemeinen nicht, aber auch nicht, wenn man zu einer spezifischen Firma möchte. Nur weil man für das Interview in einem Team nicht eingeladen wurde bzw. eine Absage erhalten hat, heisst das nicht, dass man in dieser Firma keine Chance hat.</td>
        </tr></table>Viel Erfolg!',
                          'That’s a very open question. Everything, from the routine topics like the own Social Media appearance, networking (i.e. visiting career fairs such as Chemtogether), building connections to companies early on, gaining work experience (internships) to researching about the company prior to the interview as well as the follow-up after the interview is important. A few tips:
                          <table class="fa-table">
                          <tr>
                          <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td>Keep an open mind for the great variety of jobs, industries and companies. A friend of mine went into consulting following his Ph.D., a colleague from MSD started as a graduated biologist in the Sales department; another one works as a physicist in our market research department. Some strive for a career as a patent attorney and have completed the respective studies in parallel to working at a patent law firm. So you should carefully think about what it is that you want to do and do not focus too much on your field of study.</td>
                          </tr>
                          <tr>
                          <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td>Certainly one of the first decisions should be whether one wants to work for a large, multinational company or for a midsize firm.</td>
                          </tr>
                          <tr>
                          <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td>What is the working environment like? Forums on the web can help, however, you should look at those open-mindedly. Not all the comments are objectively true or can be generalized, both positive as well as negative.</td>
                          </tr>
                          <tr>
                          <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td>Do you like the potential boss, the team?</td>
                          </tr>
                          <tr>
                          <td><i class="fas fa-fw fa-chevron-right"></td>
                          <td>Don’t lose your motivation through rejection letters. In general, but also if you want to join a specific company. Not being invited for an interview with one team doesn’t necessarily mean you don’t have a chance at that company.</td>
                          </tr></table>Good luck!
                          ')
      ),
    ),
  );
  



  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Sabina Compassi',
    'img_url' => set_source($awss3_archive.'/msd/interviewee_2017_1', 'png', FALSE),
    'position' => array('Associate Director Global Improvement', 'Associate Director Global Improvement'),

    'education' => array(
      0 => array(
        'date' => '1985-1989',
        'desc' => array('Diplom Pharmazeutische Wissenschaften, ETH Zürich','Diploma Pharmaceutical Sciences, ETH Zürich')
      ),
      1 => array(
        'date' => '1994-1998',
        'desc' => array('Doktorat, ETH Zürich','PhD ETH Zürich')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '1989-1996',
        'desc' => array('Siegfried Pharma GmbH, Head Development','Siegfried Pharma GmbH, Head Development')
      ),
      1 => array(
        'date' => '1998-1999',
        'desc' => array('Mittelschullehrerin Kollegium Stans','Teacher at Kollegium Stans')
      ),
      2 => array(
        'date' => '1998-2002',
        'desc' => array('Head Clinical Studies Coordination Werthenstein Chemie AG/Schering-Plough','Head Clinical Studies Coordination Werthenstein Chemie AG/Schering-Plough')
      ),
      3 => array(
        'date' => '2002-2007',
        'desc' => array('Head QA Werthenstein Chemie AG/Schering-Plough','Head QA Werthenstein Chemie AG/Schering-Plough')
      ),
      4 => array(
        'date' => '2007',
        'desc' => array('Manager Global Harmonisation MSD/Werthenstein BioPharma GmbH','Manager Global Harmonisation  MSD/Werthenstein BioPharma GmbH')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Associate Director Global Improvement bei MSD?",
          "What do you do as Associate Director Global Improvement at MSD?"),
        'answer' => array(
          "Ich bin ein Mitglied des Site Management Teams. Ich betreue und berate Projekte (global und lokal) mit dem Ziel Prozesse jedwelcher Art zu verbessern. Das können technische oder wissenschaftliche Prozesse sein, aber auch administrative, dokumentationsbezogene oder sogar finanzielle. Dabei geht es nicht darum, dass ich ein Experte auf dem jeweiligen Gebiet bin, mein Ziel ist es sicherzustellen, das alle Aufgaben in einer strukturierten und dokumentierten bzw. auf Daten basierenden Art und Weise ablaufen und die vorhandenen Tools richtig genutzt werden. Wenn verschiedene Lösungsmöglichkeiten gefunden wurden, geht es darum, dem Team Entscheidungsmatrizen zur Verfügung zu stellen und nach der Entscheidung schliesslich die Umsetzung zu unterstützen und den Change zu managen.",
          "I am a member of the site management team. I’m leading and mentoring projects (globally or locally) with the aim to improve processes of every kind. It could be technical/scientific processes or it could be administrative, documentation or even financial processes.<br>It is not about me being an expert on the topic at hand, my focus and my task is to ensure that the issues are handled in a structured and data driven manner using appropriate tools. After options for solutions are found, it is about helping the team to provide decision matrices, and after decision is made, support implementation and manage the change.")
      ),
      1 => array(
        'question' => array(
          "Wie man es bei einer Pharmafirma erwarten würde, haben Sie Pharmazie studiert – beschäftigt MSD auch Absolventen der anderen 'HCI-Fachrichtungen' (Chemie, Pharmazie, Materialwissenschaften und interdisziplinäre Naturwissenschaften)?",
          "As expected in a pharmaceutical company, you studied pharmaceutical sciences – do you also employ graduates of the other 'HCI-disciplines' (Chemistry, Chemical Engineering, Material Sciences and Interdisciplinary Sciences)?"),
        'answer' => array(
          "Als Pharmazeutin bin ich in der Minderheit. Das mag überraschend klingen, aber es ist eine Tatsache, dass die meisten unserer Wissenschaftler/Mitarbeiter keine Pharmazeuten sind. Pharmazeuten sind, obwohl sie die am besten passende Ausbildung haben, typischerweise unterrepräsentiert – zumindest in der Schweiz und in den USA.",
          "As a pharmacist I am a minority. This may sound very surprising, but it is a fact, that most scientist / employees in pharma are not pharmacists, while pharmacists (with their corresponding best suited education) typically are not represented to an expected extent, at least this is true for Switzerland and the USA.")
      ),
      2 => array(
        'question' => array(
          "Ihre jetzige Position ist, wie Sie es beschrieben haben, mehr eine planende und beratende Tätigkeit und nicht sonderlich nah an der Laborbank. Wie typisch ist es bei MSD Wissenschaftler in einer leitenden oder geschäftsführenden Position anzutreffen? Ist es möglich die Tätigkeit innerhalb MSD zu wechseln – z.B. von der Forschung&ampEntwicklung ins Marketing?",
          "Your current position is as you said more of a planning and managing function and not that close to the lab bench – how common is it to find scientist in managing positions at MSD? Is it possible/common to change fields within MSD (e.g. from research&development to marketing/managing)?"),
        'answer' => array(
          "Wissenschaftler sind häufig in leitenden Positionen bei MSD anzutreffen, zumindest in Produktions- und Forschungs- & Entwicklungs-Divisionen. In den medzinischeren Bereichen sind normalerweise Mediziner an der Spitze. Es ist mit Sicherheit auch möglich in andere Bereiche zu wechseln, aber es ist eher unüblich – die Wissenschaftler bleiben üblicherweise bei der Wissenschaft.",
          "It is quite common to find scientist in managerial functions in MSD, at least in the production/research/development divisions. In medical related divisions it is common to have physisians at the top.<br>While it is certainly possible, it is not usual and possibly not easy to change fields, usually the scientists stick to the scientific part.")
      ),
      3 => array(
        'question' => array(
          "Wie unterscheidet sich die Arbeit an der Universität von der Arbeit in einer pharmazeutischen Firma? Wie verändert der Zwang zur GMP-Zertifizierung den Arbeitsablauf?",
          "How does work in the university differ from the work in a pharmaceutical company? How does the need for GMP-certification change the workflow?"),
        'answer' => array(
          "GMP engt einfach nur die verfügbaren Optionen ein, aber wenn es wirklich in seiner Tiefe verstanden wird, dann lässt es mehr Raum als man erwarten würde. Das Problem ist aber auf jeden Fall, dass GMP in klarem Kontrast ist zur Flexibilität, Agilität und Kreativität, die für die Forschung benötigt wird. Die akademische Art unterscheidet sich zudem von der Arbeit in einer großen pharmazeutischen Firma. In einer großen Firma geht es nicht darum die beste Lösung und die 'Wahrheit' zu finden, sondern darum eine Lösung zu finden die allen Interessenvertretern passt. Alignment ist das Ziel.",
          "GMP simply narrows down options. However, if GMP is understood deeply it leaves more room than one would expect. The issue is, that GMP clearly is in contrast with flexibility, agility and creativity needed for research. The academic style is in contrast to the work in a big pharmaceutical company. In a big company it is not about the best solution and finding “the truth” behind things, it is about finding a solution that suits all stakeholders, as close to the best as possible. Alignment is the focus.")
      ),
      4 => array(
        'question' => array(
          "Wie hat Sie Ihre Ausbildung für Herausforderungen vorbereitet, die Sie in Ihrer jetzigen Tätigkeit bewältigen müssen?",
          "How did your education prepare you for the challenges you have to face in your current position?"),
        'answer' => array(
          "Meine Ausbildung hat die beste Grundlage für meine gesamte Karriere gebildet und ist immer noch die Basis für das was ich heute mache. Meine Denkweise wurde wissenschaftlich fundiert geschult, aber gleichzeitig in einer praktischen und zielorientierten Art und Weise, die vermutlich für diese Ausbildung einzigartig ist. Wissen ist das eine, aber es ist genauso wichtig die richtigen Fragen zu stellen und richtig zu differenzieren. Man muss lernen, Sachverhalte und Probleme richtig anzugehen und zu definieren.",
          "My education provided the best basis for all of my career, and is still even the basis for what I am doing today. It has built the mind in a scientific based but also practical and goal oriented manner that probably is unique for this particular education. It is knowledge, but then it is also asking the right questions, and being able to differentiate. It is about learning how to define and how to approach issues and problems.")
      ),
      5 => array(
        'question' => array(
          "War das Thema Ihrer Doktorarbeit auch für Ihre spätere Tätigkeit relevant?",
          "Was the topic of your PhD work also relevant to your current work?"),
        'answer' => array(
          "Mein Studium der Pharmazie in den späten 80ern hat mich perfekt für jedes Szenario vorbereitet, das ich in der pharmazeutischen Industrie angetroffen habe. Was ich damals gelernt habe, ist heute noch gültig. Das Thema meiner Doktorarbeit war – zufälligerweise – sehr relevant: Die erste klinische Studie, die ich zu koordnieren hatte, war für einen Wirkstoff, der für die Forscher der Firma ausunbekannten Gründen die intestinale Aufnahme von Cholesterol blockierte. Genau diesen Mechanismus hatte ich ganz kurz davor in meiner Doktorarbeit gefunden und erklärt.",
          "My pharmaceutical studies in the late 80ies prepared me perfectly for any scenario I’ve encountered in the pharmaceutical industry. What I learned then, still is valid nowadays. The research topic of my PhD was – by chance – very closely related: The first Clinical Trial I was given to coordinate was for a drug that – for reasons unknown to the researchers in the company – inhibited the intestinal absorption of cholesterol. The mechanism of which I’ve just had come to reveal in my PhD.")
      ),
      6 => array(
        'question' => array(
          "Sie haben auch in öffentlichen Apotheken gearbeitet – hatte/hat diese Erfahrung Ihnen bei Ihrer Tätigkeit bei MSD geholfen?",
          "You also worked in public pharmacies – did/does this experiences help you at MSD?"),
        'answer' => array(
          "Auf jeden Fall. Ich bin näher an der 'Front' und kann unseren Mitarbeitern einfacher die Perspektive eines Patienten, Apothekers oder Arztes vermitteln. Diese fehlt bei den Kollegen mit anderen Hintergründen, wie zum Beispiel Biologie oder Chemie.",
          "Yes it does. I’m closer to the 'world outside' and can more easily let our employees see perspective of a patient or a pharmacist or a doctor. This is a view that is missing in many colleagues with other backgrounds for instance biology or chemistry.")
      ),
      7 => array(
        'question' => array(
          "Was hat Sie dazu bewogen MSD als Arbeitgeber zu wählen?",
          "What made you choose MSD as an employer?"),
        'answer' => array(
          "Um ehrlich zu sein, habe ich mir MSD/Schering Plough nicht aktiv ausgesucht. Zu dieser Zeit wollte ich einfach einen komplett neuen Aspekt der pharmazeutischen Industrie erforschen. Das hat mich zu Schering Plough geführt und dadurch zu MSD.",
          "To be honest - I didn’t actively chose MSD/Schering Plough. At that time, I wanted to explore a completely new aspect of the pharmaceutical industry. Which is what brought me to Schering Plough and then to MSD.")
      ),
      8 => array(
        'question' => array(
          "Sie coachen und arbeiten an Verbesserungsprojekten – welche Qualitäten würden Sie gerne von einem neuen Mitarbeiter bei MSD sehen?",
          "Since you are coaching and working on improvement projects, what qualities would you like a new employee at MSD to show?"),
        'answer' => array(
          "Ich sehe immer gerne analytisches und strategisches Denkvermögen. Ein weiterer wichtiger Faktor ist eine offene Herangehensweise bei der Problemlösung.",
          "I always like to see analytical and strategic thinking skills. Another important factor is open mindedness when it comes to solving problems.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Seien Sie gewillt zu lernen. Setzen Sie Neugierde an erster Stelle. Lernen Sie Managementfähigkeiten langsam und seien sie nicht versucht, zu früh in eine Management-/Geschäftsführungsposition zu wechseln.",
          "Be willing to learn. Put curiosity in front. Learn management skills slowly and don’t be tempted to jump to a managerial/supervising function too early.")
      ),
    ),
  );


include('../0_template/template.php');

?>
