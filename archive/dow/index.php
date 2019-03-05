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


$template['company_name'] = 'DOW';
$template['company_name_short'] = 'dow';
$template['logo_url'] = $awss3_archive.'/dow/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.dow-dupont.com/home/default.aspx','dow-dupont.com');
$template['facebook'] = array('https://www.facebook.com/TheDowChemicalCompany', 'The Dow Chemical Company');
$template['linkedin'] = array('https://www.linkedin.com/company/dow-chemical/','The Dow Chemical Company');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'DowDuPont Materials Science, a business
division of DowDuPont (NYSE:
DWDP), combines science and technology
knowledge to develop premier
materials science solutions that are
essential to human progress. The
division has one of the strongest and
broadest toolkits in the industry, with
robust technology, asset integration,
scale and competitive capabilities that
enable it to address complex global
issues.<br>
DowDuPont Materials Science’s market-driven,
industry-leading portfolio of
advanced materials, industrial intermediates,
and plastics businesses deliver
a broad range of differentiated technologybased
products and solutions
for customers in high-growth markets
such as packaging, infrastructure, and
consumer care. DowDuPont intends to
separate the Materials Science Division
into an independent, publicly traded
company.',
  'DowDuPont Materials Science, a business
division of DowDuPont (NYSE:
DWDP), combines science and technology
knowledge to develop premier
materials science solutions that are
essential to human progress. The
division has one of the strongest and
broadest toolkits in the industry, with
robust technology, asset integration,
scale and competitive capabilities that
enable it to address complex global
issues.<br>
DowDuPont Materials Science’s market-driven,
industry-leading portfolio of
advanced materials, industrial intermediates,
and plastics businesses deliver
a broad range of differentiated technologybased
products and solutions
for customers in high-growth markets
such as packaging, infrastructure, and
consumer care. DowDuPont intends to
separate the Materials Science Division
into an independent, publicly traded
company.');
$template['we_offer'] = array(
  'The Science To Your Success. A career
with us is an invitation to explore, create
and make valuable contributions to
human progress. We have some of the
world’s best scientists and innovators
dedicated to solving world challenges
through innovation.
<br><br>Find out how we do it: <a href="https://campusemeai.dow.com">campusemeai.dow.com</a><br><br>
International opportunities in EMEAI include:<br>
Research & Development<br>
Marketing & Sales<br>
Supply Chain<br>
Environment, Health & Safety<br>
Sutainability',
  'The Science To Your Success. A career
with us is an invitation to explore, create
and make valuable contributions to
human progress. We have some of the
world’s best scientists and innovators
dedicated to solving world challenges
through innovation.
<br><br>Find out how we do it: <a href="https://campusemeai.dow.com">campusemeai.dow.com</a><br><br>
International opportunities in EMEAI include:<br>
Research & Development<br>
Marketing & Sales<br>
Supply Chain<br>
Environment, Health & Safety<br>
Sutainability');
$template['we_look'] = array(
  'Innovators and team-players who want
to utilize their skills and share our
passion to make a difference. We look
for people with an open and respectful
mind who are flexible, mobile, and willing
to grow across the globe.',
  'Innovators and team-players who want
to utilize their skills and share our
passion to make a difference. We look
for people with an open and respectful
mind who are flexible, mobile, and willing
to grow across the globe.');



$i = 0;
$template['interview']['2018'][$i++] = array(
  'name' => 'Dr. Margherita Fontana',
  'img_url' => set_source($awss3.'/companies/dow/interviewee_1', 'png', FALSE),
  'position' => array('Global Strategic Marketing Director', 'Global Strategic Marketing Director'),

  'education' => array(
    3 => array(
      'date' => '1993-1999',
      'desc' => array('Università degli Studi di Palermo: Chemie/Physikalische Chemie', 'Università degli Studi di Palermo: Chemistry/Physical Chemistry')
    ),
    2 => array(
      'date' => '1997-1999',
      'desc' => array('Leiden University: Chemie/Colloidal Science', 'Leiden University: Chemistry/Colloidal Science')
    ),
    1 => array(
      'date' => '1999-2003',
      'desc' => array('PhD in Materials Science an der ETH Zurich', 'PhD in Materials Science at ETH Zurich')
    ),
    0 => array(
      'date' => '2008-2009',
      'desc' => array('INSEAD MBA in Strategy, Leadership, Finance', 'INSEAD MBA in Strategy, Leadership, Finance')
    ),
  ),

  'career' => array(
    8 => array(
      'date' => '2003-2004',
      'desc' => array('Wissenschaftliche Mitarbeiterin bei EMPA', 'Research Scientist at EMPA')
    ),
    7 => array(
      'date' => '2004-2006',
      'desc' => array('Head of Advanced Materials Laboratory bei Ciba', 'Head of Advanced Materials Laboratory at Ciba')
    ),
    6 => array(
      'date' => '2006-2008',
      'desc' => array('Projektmanagerin bei Ciba', 'Project Manager at Ciba')
    ),
    5 => array(
      'date' => '2008-2010',
      'desc' => array('Group Manager-New Business Development & Innovation Management bei BASF', 'Group Manager-New Business Development & Innovation Management at BASF')
    ),
    4 => array(
      'date' => '2010-2011',
      'desc' => array('Independent Consultant bei GLG - Gerson Lehrman Group', 'Independent Consultant at GLG - Gerson Lehrman Group')
    ),
    3 => array(
      'date' => '2011-2014',
      'desc' => array('Senior Marketing Manager Food & Specialty Packaging, EMEA, bei DOW', 'Senior Marketing Manager Food & Specialty Packaging, EMEA, at DOW')
    ),
    2 => array(
      'date' => '2014-2017',
      'desc' => array('Global Marketing Director Dow Construction Chemicals bei DOW', 'Global Marketing Director Dow Construction Chemicals at DOW')
    ),
    1 => array(
      'date' => '2016',
      'desc' => array('Chair Dow Women Innovation Network in EMEAI bei DOW', 'Chair Dow Women Innovation Network in EMEAI at DOW')
    ),
    0 => array(
      'date' => '2017',
      'desc' => array('Global Strategic Marketing Director Dow Building & Construction bei DOW', 'Global Strategic Marketing Director Dow Building & Construction at DOW')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Global Strategic Marketing Director bei Dow?',
                          'What are your responsibilities as Global Strategic Marketing Director at Dow?'),
      'answer' => array('Ein Schwerpunkt meiner Tätigkeit ist der Bereich Strategie und Portfolio, den ich global für Dow Construction Chemicals leite und somit die Ausrichtung unseres Geschäftsbereiches wesentlich mitgestalte. Mein Aufgabengebiet umfasst sowohl die Kooperation mit einer weltweit sehr diversen Wertschöpfungskette, als auch mit unterschiedlichsten Entscheidern und Meinungsbildnern innerhalb des Unternehmens. Ich führe ferner ein weltweit operierendes Marketingteam, welches die Innovationsimpulse aus den regionalen Märkten sowie Trends und globale Anforderungen in Innovationskonzepte umsetzt.',
                        'My key responsibility is to lead the innovation strategy & portfolio for the Dow Construction Chemical business globally. The focus of my responsibility comprises a wide value chain engagement in the market place as well key stakeholder management across regions and business within the Dow Chemical Company. The innovation drive comes from a strong customer interaction that we nurture in the regions together with my global team of experienced Marketing Managers.')
    ),
    1 => array(
      'question' => array('Sie haben Chemie studiert. Beschäftigt Dow auch Absolventen anderer Fachrichtungen (Chemieingenieure, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Chemistry. Does Dow also employ graduates of other fields of study (Chemical Engineering, Interdisciplinary Sciences)?'),
      'answer' => array('Absolut - Dow beschäftigt die besten Talente aus unterschiedlichsten Disziplinen. Dow schätzt die Vielfalt von Fähigkeiten, Talenten und Erfahrungen und sieht all dies als Voraussetzung dafür, das nachhaltigste und kundenorientierste Material Science Unternehmen zu sein.',
                        'Sure, Dow employees the best talents coming from multiple disciplines. At Dow we values diversity of skills, talent and experience in order to be the most sustainable, customer centric, innovative and inclusive material science company.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Hier gibt es keine Standardunterscheidung, es hängt einfach sehr von der jeweiligen Rolle ab. Es ist aber wichtig, viel Zeit in den Aufbau eines übergreifenden Netzwerkes zu stecken, dass einem beim Wissenserwerb und auch ansonsten unterstützt. Im akademischen Bereich ist dieses Netzwerk eher von Anfang ein ‚given‘, häufig ist es das Team in dem man arbeitet.',
                        'There is not a standard protocol, it very much depends on the job, but in general what is really important is to invest a lot of time to build a knowledge and support network within the company. In Academia that network is almost given from day 1, since it might be the team where you work or the Department etc. which is different from when you work in a company since there you have to build up your network from scratch.')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich Dow als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Dow as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Es waren die Menschen, die mich für die Stelle interviewten, die den Ausschlag für Dow gaben. Während dieser Interviews traf ich auf das gesamte Team und fühlte gleich, dass ich ein Teil davon sein konnte.  Ich erfuhr von der Marketingstelle bei Dow durch mein INSEAD Netzwerk. Dann habe ich mich über die Dow Website beworben und wurde eingeladen. Die Zeitspanne zwischen den Interviews und der Jobofferte betrug gerade mal 2 Wochen.',
                        'The people I met and interviewed with were the reason why I joined Dow. As part of the interview process I got to meet the entire team and I immediately felt I could belong to it. I got to know about the marketing opportunity at Dow through my INSEAD network. I applied on the Dow web page and was invited for the interview. The time between the interview and the job offer was only 2 weeks.')
    ),
    4 => array(
      'question' => array('Vor Dow waren Sie bei Ciba und der BASF. Welche Vorteile haben Sie daraus gezogen, mehrere Arbeitgeber kennengelernt zu haben?',
                          'Before joining Dow, you worked for Ciba and BASF. Which advantages do you see in getting to know multiple employers?'),
      'answer' => array('Es ist eine unglaublich bereichernde Erfahrung, bei mehreren Unternehmen beschäftigt gewesen zu sein – man bekommt eine weite, einzigartige Perspektive auf Kundenbeziehungen, Märkte und den Job an sich. Die gewonnene Erfahrung und das ‚Best Practice‘ Wissen helfen dann Verbesserungen einzuführen.',
                        'The experience of working for different companies is a very valuable one since it gives a broad and unique perspective on the customer relationships, the market and ultimately the job itself. Moreover it helps to have a positive impact by leveraging experience and drive change for the better by leveraging best practices.')
    ),
    5 => array(
      'question' => array('Nach Ihrem MBA an der INSEAD haben Sie sich auf die Business-Seite der chemischen Industrie fokussiert. Was hat Sie zu dieser Entscheidung veranlasst?',
                          'After your MBA at INSEAD, you focused on the business side of the chemical industry. What motivated you to this step?'),
      'answer' => array('Während meines PhD und meiner ersten Industrietätigkeit bei Ciba arbeitete ich auf vielen Forschungs- und Entwicklungsprojekten. Diese erforderten enge Zusammenarbeit mit den Kunden um die Entwicklungen voranzutreiben. Ich erkannte immer mehr den Wert der Arbeit, die das Marketing Team erbrachte, indem es mit unseren Kunden und anderen Partnern in der Wertschöpfungskette zusammenarbeitete und somit die Innovationen vorantrieb.',
                        'During my PhD but also during my first experience in industry, at Ciba, I worked on many R&D projects which were requiring close customer interaction in order to advance the development. Therefore I learnt to appreciate, step by step, the work that the marketing team was doing with our customers and value chain partners in order to drive innovation. While appreciating the strong complementarity between marketing and R&D, I felt the urge, upon completion of my MBA, to continue to lead Innovation but more from the front end marketing side.')
    ),
    6 => array(
      'question' => array('Profitieren Sie in Ihrer heutigen Tätigkeit immer noch von Ihrer naturwissenschaftlichen Ausbildung?',
                          'Are you profiting from your scientific education in your current position?'),
      'answer' => array('Ich habe von meiner naturwissenschaftlichen Ausbildung nicht nur in meiner heutigen Tätigkeit profitiert, sondern während all meiner Karriereschritte. Ich bin überzeugt, dass die Kombination von naturwissenschaftlicher Denkweise und Marketing-Wissen es mir erlaubt, sämtliche Herausforderung besonders produktiv zu lösen.',
                        'I have been profiting from my scientific education not only in my current position, but at all steps I have gone through in my career. A scientific education helps to tackle complexity and connect the dots across disciplines, teams, cultures, geographies, which is a skill set that is more and more valued and for which there is a shortage of. I think it is really that combination of scientific mindset and marketing knowhow that allows me to tackle all of the challenges in a most productive manner.')
    ),
    7 => array(
      'question' => array('Ihre Ausbildung und Karriere haben Sie nach Italien, in die Niederlande und die Schweiz, nach Frankreich und Singapur geführt. Was hat Sie daran gereizt, so viele Orte beruflich und akademisch zu erkunden?',
                          'Your education and career brought you to Italy, the Netherlands, Switzerland, France and Singapore. What fascinated you in discovering so many places professionally?'),
      'answer' => array('Ich bin von Natur aus neugierig auf Neues, und wenn ich zurückschaue, dann war diese Neugier ein wesentliches Leitmotiv in meiner persönlichen und beruflichen Entwicklung. Das bin ich! Ich bin begierig zu lernen, von anderen Kulturen, von Erfahrungen und Lebensweisen anderer Menschen, oder durch Entdeckung neuer Plätze. Ich sehe das Leben als eine grossartige Studienreise.',
                        'I am a very curious person and when looking backwards I can say that curiosity has been the main leitmotiv of my personal and professional development. It is who I am. I am passionate about learning from new cultures, people experiences and lives, and discover new places. I see life as a great learning journey.')
    ),
    8 => array(
      'question' => array('Sie sind Co-Chair des Dow Women Innovation Network EMEAI. Können Sie uns dazu mehr erzählen?',
                          'You are Co-Chair of the Dow Women Innovation Network EMEAI. Can you tell us more about that?'),
      'answer' => array('Ich leite seit 2 Jahren das Women Innovation Network mit der Mission, die Entwicklung von weiblichen Führungskräften in Dow in EMEAI (Europa, Mittlerer Osten, Afrika und Indien) voranzutreiben. Die Dow Vision sieht vor, das nachhaltigste, kundenorientierteste und inklusivste Material Science Unternehmen zu sein. Um dieses ehrgeizige Ziel zu erreichen müssen wir den Aspekt der Diversität bei Rekrutierung, Förderung und der Beschäftigungsperspektive miteinbeziehen. Dies gilt insbesondere auch für Frauen in Führungsrollen auf allen Unternehmensebenen.',
                        'For 2 years I have the privilege to lead the Women Innovation Network with the mission of advancing female leadership development within Dow across the EMEAI region. Dow Vision is that of being the most sustainable, customer centric and inclusive Material Science Company. In order to achieve our ambition as a company we need to continue to hire, develop and retain a very diverse work force of talented people which more and more needs to include female leaders at all levels in the organization.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Ich würde vorschlagen, mithilfe des Aumni-Netzwerks Firmen und potentiell interessante Stellen kennenzulernen, die offiziellen Stellenbeschreibungen möglicherweise nicht wirklich viel über die Unternehmenskultur aussagen – und genau diese ist ausschlaggebend für die persönliche Weiterentwicklung und Wachstumsmöglichkeiten.',
                        'I would suggest to proactively use the Alumni network to get to know the companies and the job they want to target, since the job description might not tell the full story about the culture and the environment that the company offers, which at the end is the most important factor for further development and growth opportunities.')
    ),
  ),
);



$template['interview']['2018'][$i++] = array(
  'name' => 'Dr. Peter Sandkuehler',
  'img_url' => set_source($awss3.'/companies/dow/interviewee_2', 'png', FALSE),
  'position' => array('Application Technology Leader Packaging', 'Application Technology Leader Packaging'),

  'education' => array(
    0 => array(
      'date' => '2000-2004',
      'desc' => array('PhD in Colloidal Aggregation an der ETH Zurich', 'PhD in Colloidal Aggregation at ETH Zurich')
    ),
  ),

  'career' => array(
    3 => array(
      'date' => '2008-2011',
      'desc' => array('Wissenschaftler bei DOW', 'Scientist at DOW')
    ),
    2 => array(
      'date' => '2004-2011',
      'desc' => array('Research Specialist bei DOW', 'Research Specialist at DOW')
    ),
    1 => array(
      'date' => '2011-2013',
      'desc' => array('F&SP TS&D Group Leader bei DOW', 'F&SP TS&D Group Leader at DOW')
    ),
    0 => array(
      'date' => '2013',
      'desc' => array('Application Technology Leader Packaging - Pack Studio bei DOW', 'Application Technology Leader Packaging - Pack Studio at DOW')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Application Technology Leader Packaging bei Dow?',
                          'What are your responsibilities as Application Technology Leader Packaging at Dow?'),
      'answer' => array('Als Application Technology Leader for Packaging bin ich Teil der Abteilung Technical Service and Development (TS&D), welche zum Packaging and Specialty Plastics Business bei Dow gehört. Das TS&D-Team ist die Schnittstelle zwischen dem technischen Team des Kunden und den R&D-Gruppen bei Dow, welche neue Produkte entwickeln. Zu meinen Zuständigkeiten gehört es, die derzeitigen und zukünftigen Leistungsanforderungen zu verstehen, welche an von Dow produzierte Verpackungsmaterialien gestellt werden. Basierend auf Erkenntnissen aus dem Markt entwickeln wir zusammen mit der R&D-Abteilung neue Produkte, welche diese Leistungsanforderungen erfüllen.',
                        'As the application technology leader for packaging I am part of the technical service and development (TS&D) organization in the Packaging and Specialty Plastics Business of Dow. The TS&D team is the interface between our customer’s technical team and the Dow R&D groups which develop new products. The responsibilities of the application technology leader include to understand current and future performance requirements for Dow products, which are used in the various market applications to produce films like for meat packaging. Based on these insights from the market on future packaging technology we together with R&D are then able to design new products which will help to address these performance requirements.')
    ),
    1 => array(
      'question' => array('Sie haben Chemieingenieurwissenschaften studiert. Beschäftigt Dow auch Absolventen anderer Fachrichtungen (Chemiker, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Chemical Engineering. Does Dow also employ graduates of other fields of study (Chemistry, Interdisciplinary Sciences)?'),
      'answer' => array('Dow beschäftigt Absolventen einer Vielzahl von Studiengängen. Das Profil eines Kandidaten bei Dow hängt stark von der spezifischen Job-Beschreibung ab. Zum Beispiel haben die Angestellten in der Katalyse-Forschungsabteilung typischerweise ein Chemie-Studium mit Fokus auf Katalyse absolviert, während in der Prozessforschung eher Chemieingenieure anzutreffen sind. In der Produktentwicklung oder der Application Technology, wo ich arbeite, ist ein Studium der Materialwissenschaften oder spezifischer Polymerwissenschaften ein klassischer Hintergrund. In Dows Forschungsgruppen Engineering Sciences und Core R&D ist die Vielfalt der anzutreffenden Expertisen sogar noch grösser. Hier sind Maschinenbauer, Biologen, Physiker und natürlich Chemiker mit verschieden Ausbildungen Teil der Teams.',
                        'Dow does employ graduates from various fields of study. The profile of a candidate Dow looks for depends very much on the specific job description. For example, in catalyst research the typical field of study is chemistry with a focus on catalysis; in process research, the profile is rather chemical engineers, whereas in product development or application technology, where I am working, material science or more specifically polymer science is a common education. In Dow’s research group of Engineering Sciences and Core R&D the breath of fields of expertise are even broader, with mechanical engineers, biologists, physicists and of course again various branches of chemistry being part of the teams.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Meiner Erfahrung nach arbeitet man als PhD oder Postdoc hauptsächlich an seinen eigenen Forschungszielen und widmet den Grossteil seiner Zeit dem Vorantreiben des eigenen Projektes. In der Industrie gibt es eine grosse Bandbreite von Jobs: Während der Arbeitstag einer Forschenden im Core R&D dem eines Senior Researchers an der Universität ähnelt, sind die Projekte mit den wirtschaftlichen Aspekten im Hintergrund definiert und es wird klar der Fokus darauf gelegt, die Arbeit der R&D-Gruppen in Produkte und wirtschaftliche Möglichkeiten zu verwandeln. In technischen Berufen und im Application Development, wo ich arbeite, hat man viel Kundenkontakt um die Bedürfnisse des Marktes zu verstehen und um herauszuarbeiten, welche Chemie- und Polymerprodukte der Industrie in Zukunft dienen können. Ausserdem ist die Zusammenarbeit mit anderen und der Austausch von Informationen innerhalb der industriellen Netzwerke unabdinglich um ein tiefgehendes Verständnis für das Feld und die darin stattfindenden Veränderungen zu ermöglichen. Es gibt also viel Abwechslungen darin, woran man arbeitet, z.T. mit mehreren kollidierenden Zielsetzungen. Lernen, Prioritäten zu setzen, ist etwas sehr wichtiges in der Industrie.',
                        'In my experience as a graduate student or post-doc you are focused on your specific research targets and dedicate most of your time on advancing your project. In industry, there is probably a wider range of job descriptions in the research & development area: whereas the work day of a Core R&D researcher may be similar to a senior university researcher position, the projects are defined with the business side in mind and there is a clear focus to turn the R&D work into products and commercial opportunities. There are as well technical and application development roles like the one I hold, with many external & customer contacts to understand market needs and what polymer and chemical products will serve the industry in the future. In addition, collaboration and information exchange within the industry networks is essential to gain an in depth understanding of the broader technology field and the changes it continuously undergoes. Hence often there are very dynamic changes on what you need to take care of during a work day with multiple conflicting objectives. Learning how to manage priorities is something very important in industry.')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich Dow als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Dow as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Nach meinem PhD an der ETH konnte ich mir sowohl eine akademische als auch eine Karriere in der Industrie vorstellen. Dow hatte damals begonnen, ein Research Assignment Program für Neueingestellte in Europa anzubieten und ich habe die Chance bekommen, ein Teil davon zu sein. Ich konnte für verschiedene Business R&D-Gruppen an Entwicklungsprojekten arbeiten, was ein grossartiger Start war.<br>
      Für die Bewerbung habe ich meinen CV an Kollegen von der ETH, welche bereits bei Dow arbeiteten, geschickt und ihn auf der Bewerbungswebsite von Dow hochgeladen. Ich hatte Telefon-Interviews und wurde dann zu persönlichen Interviews in Horgen eingeladen. Aufgrund der Leute welche ich während der Interviews traf war ich überzeugt, dass Dow ein toller Start für meine Karriere in der Industrie ist. Einige Zeit nach dem persönlichen Interview bekam ich ein Jobangebot mit der Bitte, in einigen Monaten anzufangen. Glücklicherweise konnte ich die Zwischenzeit damit überbrücken, noch einige Projekte an der ETH zu beenden. Das Wichtigste bei Bewerbungen ist, so viele Kanäle wie möglich zu nutzen um das Interesse der Firma zu wecken – und dann muss natürlich eine Position offen sein für die du der beste Kandidat/die beste Kandidatin bist.
      ',
                        'After my PhD at ETH I had considered both staying in academia and joining industry. Dow started offering at that time a Research assignment program for new hires in Europe and I got the chance to be part of it. I was exposed to different business R&D groups working for them on development projects. This was a great entry. During application, I had sent my CV both to colleagues from ETH already working for Dow and as well submitted it to the Dow job application internet page. I had phone interviews and was then invited to personal interviews in Horgen. Through the interviews and the people I met I was convinced Dow would be a great start for my career in industry. Sometime after the personal interview I actually got a job offer with the request to start in a few month time. I was lucky to be able to bridge this time still at the ETH completing some projects. The key point in applications is to use as many channels as available to raise the interest of the company – then there needs to be an actual position open for which you are the best candidate.')
    ),
    4 => array(
      'question' => array('Ihre gesamte berufliche Laufbahn lief bisher bei Dow ab. Welche Vorteile hatten Sie davon, langfristig in einer Firma zu verbleiben?',
                          'You joined Dow right after obtaining your PhD. Which advantages did you have from staying with the same employer long-term?'),
      'answer' => array('In grossen multinationalen Firmen wie Dow ist das Netzwerk was man über die Jahre entwickelt extrem wichtig um z.B. mit Projekten voranzukommen oder neue Produkte zu entwickeln. Das kannst du nicht alleine machen, du braucht Kollegen aus verschiedensten Aufgabengebieten, inklusive Vertrieb und Produktion. Ausserdem hat man die Möglichkeit, über die Zeit verschiedene Positionen zu besetzen und so vielfältige Erfahrungen zu sammeln, auch abteilungsübergreifend, also im R&D, Marketing, Produktmanagement etc. Das hat mir geholfen, mich persönlich und professionell weiterzuentwickeln.',
                        'In large multinational companies like Dow the broad network you develop over the years is very important to for example progress with projects and to develop new products. You can’t do this by yourself, you need colleagues from various functions, including sales and manufacturing. In addition, you have opportunities to hold various positions over time giving you a broad experience even across functions like R&D, marketing, and product management, which help you grow personally and professionally.')
    ),
    5 => array(
      'question' => array('Sie haben sowohl in Spanien als auch in der Schweiz für Dow gearbeitet. Welche Unterschiede haben Sie in den verschiedenen Ländern bemerkt? Was haben Sie von dieser Auslandserfahrung mitgenommen?',
                          'You have worked for Dow both in Spain and in Switzerland. Which differences did you notice and what did you take away from the experience abroad?'),
      'answer' => array('Jedes Land hat seine eigene Kultur und es war wunderbar, die Möglichkeit zu haben mehrere Jahre in Spanien zu leben und unter anderem die Sprache zu lernen. Wenn man eine gewisse Neugier mitbringt, schätzt man es wert in einer neuen Umgebung zu leben und zu arbeiten. Als eine sehr internationale Firma ermöglicht es Dow einem, den eigenen Respekt und die Sensitivität für unterschiedliche Sichtweisen und Kulturen zu stärken, vor allem durch solche Auslandserfahrungen. Man schätzt Diversität und bekommt offener gegenüber seinen Kollegen.',
                        'Every country has its culture and style and it has been wonderful to be able to live several years in Spain and learning, among other things, the language. With curiosity you appreciate how to live and work in a new environment and the many opportunities this offers. Dow, being a very international company, allows you  to increase your respect and sensitivity to different viewpoints and cultures especially by such an experience abroad. You appreciate diversity and become more inclusive towards your colleagues.')
    ),
    6 => array(
      'question' => array('Wie haben sich Ihre Verantwortlichkeiten während Ihrer Karriere bei Dow verändert?',
                          'How did your responsibilities change during your career at Dow?'),
      'answer' => array('In den ersten Jahren in der TS&amp;D-Abteilung habe ich mit Kunden aus Europa gearbeitet und war für spezifische Entwicklungsprojekte zuständig. Später hatte ich die Möglichkeit, ein Team zu leiten welches FEM-Modelle (finite-element method) entwickelte um das Platzen von Lebensmittelverpackungen zu modellieren. Ziel war es, zu verhindern dass der Inhalt verschüttet wird wenn eine Verpackung aus einem Supermarktregal fällt. Jetzt arbeite ich mit globalen Teams in meiner Rolle als Application Technology Leader.',
                        'In the first years in the TS&D department I was working with customers in Europe and had responsibility for specific development projects. Later I had the opportunity to lead a team that was developing FEM models (finite-element method[MOU1] ) to predict and then prevent bursting of stand up pouches dropped from supermarket shelves in order to be able to avoid spillage of product. Now I am working with global teams in my current role as application technology leader.  ')
    ),
    7 => array(
      'question' => array('Im Rahmen Ihrer Dissertation bei Professor Morbidelli hier an der ETH haben Sie sich mit Colloidal Aggregation beschäftigt. In welcher Hinsicht haben Sie von diesen Erfahrungen in einem industriellen Umfeld profitiert?',
                          'During your PhD with Professor Morbidelli here at ETH, your research focused on colloidal aggregation. How did you benefit from what you learned there in an industrial setting?'),
      'answer' => array('Das Wichtigste was du in deinem PhD lernen kannst, ist wie man eigenständig arbeitet und seine Forschung strukturiert. Du musst lernen wie man lernt. Das spezifische Thema an dem man arbeitet ist das Werkzeug um das zu tun. Natürlich gibt es extrem spezialisierte Felder in denen man die Expertise die man während des PhDs akquiriert hat später in der Industrie anwenden kann. Aber ich glaube häufiger wird man später von einem breiteren technischen Verständnis und der Fähigkeit zu lernen profitieren als vom spezifischen Forschungsthema.',
                        'The most important thing you can learn during PhD is to work independently, and to structure your research. You need to learn how to learn. The specific topic you work on is the tool to do that. There are of course highly specialized fields where the expertise you gain during PhD is applicable to your later work in industry, but I think more often you will rely on your broader technical understanding and your ability to learn rather than to rely on your specific PhD research.')
    ),
    8 => array(
      'question' => array('Als Chemieingenieur ist ein PhD ja kein Muss, wenn man eine Karriere in der Industrie anstrebt. Hat Ihnen der Titel bei der Bewerbung geholfen?',
                          'As a chemical engineer pursuing a career in industry, a PhD is not always a necessity. Did the title help you when applying for a job?'),
      'answer' => array('Das kommt auf die Industrie und die Firma an; in manchen Firmen mögen Titel wichtig sein, in anderen weniger. Ein erfolgreicher PhD ist ein Beweis dafür, dass man eigenständig gearbeitet hat. Das ist wichtig für Firmen die solche Kandidaten anstellen wollen, versus Master-Absolventen ohne PhD. Ich empfehle aber dass man einen PhD macht weil einem die Forschung Spass macht, und nicht weil man glaubt dass es einem hilft, seine Karriere in der Industrie schneller voranzutreiben. Das kommt dann mehr auf deine Persönlichkeit an.',
                        'This depends on the industry and the company; in some companies titles may matter, in others lesser so. A successful PhD is a demonstration that you have worked independently. This is valuable to companies who want to employ candidates with such additional skill sets versus a graduate without PhD. I recommend that you should go for a PhD because you enjoy research, and not because you think it will help your career to advance faster in industry. That depends more on your personality.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Sei so gut vorbereitet wie du nur sein kannst, sei unvoreingenommen, gib nicht auf. Der wertvollste Charakterzug bei jungen Forschern und Ingenieuren: Kritisches Denken!',
                        'Be as well prepared as you can, keep an open mind, don’t give up. One trait in young scientists and engineers which is most valuable: Critical Thinking!')
    ),
  ),
);



include('../0_template/template.php');


?>
