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


$template['company_name'] = 'Metrohm';
$template['company_name_short'] = 'metrohm';
$template['logo_url'] = $awss3_archive.'/metrohm/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether 2018 - Archiv: '.$template['company_name'], 'Chemtogether 2018 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Metrohm is a high-tech company headquartered in Herisau, Switzerland, with 42 subsidiaries all
around the globe. Our high-precision instruments for chemical analysis are among the best in the
world. We are growing faster than the market and outperform our competitors; in our main
business, titration, we are the global number one.</br>
Of our more than 2200 employees, 460 are working at our International Headquarters in Herisau,
and every third person there works in R&amp;D.</br>
We are independent: Metrohm is owned by the charitable Metrohm foundation; profits are
reinvested in the company and used to support philanthropic projects.',
  'Metrohm is a high-tech company headquartered in Herisau, Switzerland, with 42 subsidiaries all
around the globe. Our high-precision instruments for chemical analysis are among the best in the
world. We are growing faster than the market and outperform our competitors; in our main
business, titration, we are the global number one.</br>
Of our more than 2200 employees, 460 are working at our International Headquarters in Herisau,
and every third person there works in R&amp;D.</br>
We are independent: Metrohm is owned by the charitable Metrohm foundation; profits are
reinvested in the company and used to support philanthropic projects.');
$template['we_offer'] = array(
  'We offer you challenging, highly rewarding opportunities at the interface between chemistry,
electronics, software engineering, and our global customers. Young talents with a «can-do» attitude
get the chance to take on responsibility quickly.</br>
People, who come to work for us enjoy a stimulating working environment. We are easy-going, we
have various different backgrounds – and we are passionate to develop the best analytical
instruments in the world. Our campus-like headquarters in Herisau were built in 2011 and offer
state-of- the-art work places.</br>
We are growing fast, but our business model is sustainable; jobs at Metrohm do not depend on the
whims of investors.',
  'We offer you challenging, highly rewarding opportunities at the interface between chemistry,
electronics, software engineering, and our global customers. Young talents with a «can-do» attitude
get the chance to take on responsibility quickly.</br>
People, who come to work for us enjoy a stimulating working environment. We are easy-going, we
have various different backgrounds – and we are passionate to develop the best analytical
instruments in the world. Our campus-like headquarters in Herisau were built in 2011 and offer
state-of- the-art work places.</br>
We are growing fast, but our business model is sustainable; jobs at Metrohm do not depend on the
whims of investors.');
$template['we_look'] = array(
  'We are looking for young talents eager to start their career as a</br></br>
  -chemist / chemical engineer,</br>
  -software engineer,</br>
  -electronics engineer, or</br>
  -design engineer',
  'We are looking for young talents eager to start their career as a</br></br>
  -chemist / chemical engineer,</br>
  -software engineer,</br>
  -electronics engineer, or</br>
  -design engineer');


  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Sabrina Gschwind',
    'img_url' => set_source($awss3_archive.'/metrohm/interview-2017-1', 'png', FALSE),
    'position' => array('Junior Product Manager', 'Junior Product Manager'),

    'education' => array(
      0 => array(
        'date' => '2006-2010',
        'desc' => array('BSc und MSc ETH Chemie','BSc and MSc ETH Chemistry')
      ),
      1 => array(
        'date' => '2008-2011',
        'desc' => array('ETH Zürich Doktorat bei Prof. Dr. Detlef Günther','ETH Zürich PhD with Prof. Dr. Detlef Günther')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2015-2016',
        'desc' => array('Metrohm Application Specialist CC Titration','Metrohm Application Specialist CC Titration')
      ),
      1 => array(
        'date' => '2016',
        'desc' => array('Junior Product Manager','Junior Product Manager')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Junior Product Manager für Sensoren bei Metrohm?",
          "What do you do as Junior Product Manager for Sensoren at Metrohm?"),
        'answer' => array(
          "Unsere Sensoren werden hauptsächlich in der Titration und für Messungen (z.B. pH, Leitfähigkeit, Temperatur) benutzt. Meine Aufgaben bestehen darin, das Sensoren Portfolio der Metrohm zu managen und zu optimieren. Ich betreue die Produkte während des gesamten Produktlebenszyklus. Das beginnt bei der Konkurrenzanalyse und dem Erfassen von Kundenbedürfnissen, Abschätzen von Marktpotential, Mitbetreuen von Neuentwicklungen und der Optimierung von Produkten am Markt bis hin zur Abkündigung von Sensoren.",
          "Our sensors are mainly used for titration and measurements (e.g. pH, conductivity, temperature). My responsibility is to manage and optimise our sensor portfolio. I support our products during their complete product life cycle. This starts by analysing the competition and the needs of our customers, goes over to supervise the development and the optimisation of products and ends with the discontinuation of sensors.")
      ),
      1 => array(
        'question' => array(
          "Haben Sie viel Kundenkontakt bzw. gehört Marketing auch zu Ihren Aufgaben?",
          "Do you have a lot of contact with customers? Is marketing also part of your job?"),
        'answer' => array(
          "Zur Produktbetreuung gehört natürlich auch entsprechendes Marketingmaterial mit unserer Marketingabteilung zu erstellen, den Webauftritt mitzugestalten, und unsere Vertretungen/Kunden in Seminaren zu schulen. Auch die Beteiligung in Normengremien ist ein Teil meiner Arbeit. Des Weiteren bin ich zurzeit für den Support von Vertretungen (und dadurch indirekt vom Kunden) bei Sensorfragen/-problemen zuständig.<br>Ich habe mit vielen unterschiedlichen Leuten innerhalb, aber auch ausserhalb der Firma zu tun, bewege mich zwischen Labor und Schreibtisch und habe trotzdem auch die Möglichkeit international tätig zu sein.",
          "Supporting a product means that the corresponding marketing material has to be developed with our marketing department. Also our sites and customers have to be trained on the products. I am also part of committees for norms and currently I am responsible for the support in sensor-question of our sites (and therefore indirectly our customers).")
      ),
      2 => array(
        'question' => array(
          "Sie sind bei Metrohm als Application Specialist für CC Titration eingestiegen, was waren da Ihre Aufgaben?",
          "You started out at Metrohm as Application Specialist for CC titration, what were your responsibilities back then?"),
        'answer' => array(
          "Als Application Specialist ist man hauptsächlich für die Erstellung von Applikationsdokumenten zuständig. Also wie kann man z.B. eine Bestimmung eines Analyten mit unseren Geräten durchführen. Dazu gehört auch die Suche nach internationalen Normen, die mit unseren Geräten durchgeführt werden können, die Teilnahme an Ringversuchen oder Tests von neuen Geräten oder Software.",
          "As Application Specialist you are responsible for the creation of application documents. E.g. how can you determine a specific analyte using our machines. This also includes the search for international norms, that can be performed with our machines, the participation in ring trials and the tests of new machines or software.")
      ),
      3 => array(
        'question' => array(
          "Welche Bereiche der Chemie sind bei Metrohm gefragt? Gibt es für Chemiker die Möglichkeit in 'fachfremde' Bereiche wie z.B. Marketing zu wechseln?",
          "Which areas of chemistry are needed at Metrohm? Is there a possibility to move into different areas, like marketing?"),
        'answer' => array(
          "Die Metrohm bietet viele Möglichkeiten für Chemiker. Sei dies in der Produktion oder Entwicklung von Säulenmaterial für die Ionenchromatographie (Synthese), als Chemiker in der Entwicklung neuer Geräte, aber auch in der Softwareentwicklung oder im gesamten Vertrieb und Marketing, als Applikationsspezialist, Produktspezialist oder im Product Management. Ein Verständnis für die Chemie ist in allen Bereichen von Vorteil und wird geschätzt.",
          "Methrohm offers a lot of possibilities for chemists. Be it in production or in development of column materials for ion chromatography (synthesis), as a chemist in the development of new machines, in software development or in sales and marketing or product management. An understanding of chemistry is advantageous on all areas and is valued deeply.")
      ),
      4 => array(
        'question' => array(
          "Was hat Sie dazu bewegt, sich Metrohm als Arbeitgeber auszusuchen? Wie unterscheidet sich Metrohm von anderen Arbeitgebern?",
          "What made you choose Metrohm as an employer? How does Metrohm differ from other employers?"),
        'answer' => array(
          "Ich bin über eine Initiativbewerbung bei der Metrohm gelandet, mir gefällt das Leitbild und die Grösse der Firma. Dadurch hat man viele Möglichkeiten sich einzubringen und etwas zu bewegen.",
          "I arrived at Metrohm via a speculative application. I like the guiding principles and the size of the company. This gives you a lot of opportunity to get involved and to achieve something.")
      ),
      5 => array(
        'question' => array(
          "Gibt es Möglichkeiten sich aus erster Hand ein Bild von der Arbeit bei Metrohm zu machen, z.B. durch Praktika oder Kollaborationen mit Universitäten?",
          "Is there a way to get to know Metrohm first-hand - either via internships or collaborations with universities?"),
        'answer' => array(
          "Es gibt diverse Möglichkeiten, 'Metrohm-Luft' zu schnuppern. Einerseits werden immer wieder Praktikas angeboten, es gibt aber auch die Möglichkeit eine Bachelor- oder Masterarbeit in einer der verschiedenen Abteilungen durchzuführen.",
          "There are different opportunities to catch some 'Metrohm air'. One the one hand we offer internships, on the other hand there is also the possibility to do your Bachelors or Masters thesis in one of our departements.")
      ),
      6 => array(
        'question' => array(
          "Im Rahmen Ihrer Dissertation haben sie ein neues System entwickelt um Nanopartikel in ein ICP-Massenspektrometer einzuführen – inwiefern konnten Sie die Erfahrungen, die Sie in dieser Arbeit gesammelt haben, bei Metrohm nutzen?",
          "During your dissertation you developed a new system to insert nanoparticles into an ICP mass spectrometer – how could you use your experiences, that you made during this time, at Metrohm?"),
        'answer' => array(
          "Hauptsächlich Softskills und natürlich meine Fähigkeit analytisch zu denken. Auch habe ich während meiner Dissertation oft mit unterschiedlichen Instrumenten zu tun gehabt und diverse Software benutzt. Dies hat mir geholfen, mich schnell auf Neues einzustellen.<br>Ansonsten ist es doch etwas sehr anderes – in meiner Diss habe ich mich mit dem Ultraspurenbereich (ppt-Level) und Nanopartikel beschäftigt, nun in der Titration ist man in einer ganz anderen Grössenordnung und beschäftigt sich mit ppm bis %-Bereiche.",
          "Mainly soft skills and my ability to think analytically. During my dissertation I came in contact with different instruments and had to use different software – this allowed me to quickly adapt to new things. In other regards, it is something very different – in my PhD I worked on the ultra-trace level (ppt-level) with nanoparticles, now with the titrations we are at a completely different level and are working from ppm- to %-levels.")
      ),
      7 => array(
        'question' => array(
          "Sie sind nach Ihrem Doktorat direkt zu Metrohm gewechselt – wie groß war die Umstellung?",
          "You came to Metrohm directly after your PhD – how big was the change?"),
        'answer' => array(
          "Sehr gross. Einerseits natürlich aufgrund des komplett anderen Beschäftigungsbereiches, aber auch, weil Erwartungen an die Arbeit anders sind als an einer Universität. In der Industrie warten spannende Tätigkeiten, welche einen betriebswirtschaftlichen Nutzen aufweisen und auf die Machbarkeit ausgelegt sind. Hingegen wird in einer Uni eher auf theoretischer Ebene geforscht. Zudem bot sich mir die Gelegenheit sich in einem viel komplexeren System zurechtzufinden und viele neue Prozesse kennenzulernen.",
          "Very big. On the one hand, this was of course caused by the completely new field of work, but on the other hand also because the expectations regarding your work are completely different, compared to the university. In industry fascinating tasks are waiting for you, that have an economic merit and are geared towards applications. At the university your research on a much more theoretical level. I also had the possibility to work with a much more complex system and got to know a lot of different processes.")
      ),
      8 => array(
        'question' => array(
          "Was sind Ihre Pläne und Ziele für Ihre Karriere bei Metrohm? Welche Möglichkeiten gibt es sich innerhalb von Metrohm weiterzuentwickeln?",
          "What are your goals within Metrohm? What are the options to develop oneself within Metrohm?"),
        'answer' => array(
          "Ich kann zurzeit eine Weiterbildung in Product Management besuchen. Ich erhoffe mir dadurch neue Ideen und ein fokussierteres Product Management. Die Firma schätzt Engagement und unterstützt finanziell oder mit internen Kursen die Weiterentwicklung ihrer Mitarbeiter.",
          "I am currently able to attend a training in product management. I hope to gather new ideas and will be able to provide a more focussed product management. Our company values commitment and supports this either financially or with internal trainings.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last Question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Bleibt offen, auch für Stellen, über die ihr vielleicht noch nie nachgedacht habt.",
          "Stay open minded, especially for jobs, which you might not have considered before.")
      ),
    ),
  );

  $template['interview']['2017'][$i++] = array(
    'name' => 'Iris Kalkman',
    'img_url' => set_source($awss3_archive.'/metrohm/interview-2017-2', 'png', FALSE),
    'position' => array('Produktionsspezialistin &amp Berufsbildnerin', 'Product Specialist &amp Trainer'),

    'education' => array(
      0 => array(
        'date' => '2006-2009',
        'desc' => array('Ausbildung zur Laborantin Metrohm','Apprenticeship Lab Technician Metrohm')
      ),
      1 => array(
        'date' => '2010-2014',
        'desc' => array('BSc und MSc ETH in Chemie','BSc and MSc ETH  in Chemistry')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2014-2017',
        'desc' => array('Metrohm Application Specialist','Metrohm Application Specialist')
      ),
      1 => array(
        'date' => '2017',
        'desc' => array('Metrohm Product Specialist','Metrohm Product Specialist')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Produktionsspezialistin bei Metrohm?",
          "What are your responsibilities as Product Specialist at Metrohm?"),
        'answer' => array(
          "Meine Tätigkeit als Produktspezialistin beinhaltet den Support unserer Tochtergesellschaften in Bezug auf unsere Titrationsgeräte und die Sicherstellung des Know-hows unserer Tochtergesellschaften. Dazu führe ich Kurse sowie Seminare im In- und Ausland durch.",
          "My work as product specialist includes the support of our subsidiary companies with regards to titration apparatuses and the securing of the know-how of our subsidiaries. To ensure this, I carry out courses and seminars in Switzerland and abroad.")
      ),
      1 => array(
        'question' => array(
          "Und was machen Sie als Lehrlingsausbilderin?",
          "And what do you do as Trainer?"),
        'answer' => array(
          "In der Lehrlingsausbildung stelle ich sicher, dass unsere Lernenden die bestmögliche Ausbildung erhalten. Dabei werden während der Lehre analytische sowie auch synthetische Arbeiten durchgeführt. Da die Lehre als Laborant EFZ Chemie sehr anspruchsvoll ist, steht schulische Nachhilfe ebenso auf dem Programm, wie das Korrigieren der Berichte und das Betreuen während praktischen Arbeiten.",
          "I work with our apprentices and ensure that they receive the best education possible. Therefore they do analytic as well as synthetic work. Since the apprenticeship as a lab technician EFZ chemistry is very demanding, tutoring as well as the correction of reports and the support of practical work is part of my responsibilities.")
      ),
      2 => array(
        'question' => array(
          "Titrationen sind im Praktikum schon eher unbeliebt, wie kam es dazu, dass Sie gerade in diesem Bereich gelandet sind?",
          "Titrations are not the most popular thing during the labcourses, how did you end up in this field?"),
        'answer' => array(
          "Ich bin da mehr oder weniger hineingerutscht. Während der Schulzeit hatte ich einmal titriert und fand das gar nicht so schlimm. Als ich danach meine Ausbildung als Laborantin begonnen hatte, war das Titrieren ein wichtiger Punkt der Ausbildung, aber nicht der Einzige. Während der Lehrzeit sah ich in alle Laborbereiche in der Metrohm. Dies beinhaltete die verschiedenen Competence Center (Product &amp Application Management), sowie die Entwicklungsabteilungen der Titration, Ionenchromatographie, Voltammetrie und die Säulenproduktion. Dass ich danach in der Titration gelandet bin, habe ich dem Abteilungsleiter des CC Titration zu verdanken, welcher mich damals gefragt hatte, ob ich nach der Lehre für ihn arbeiten wolle.",
          "I sort of stumbled into this. In school, I titrated once and didn’t find it too bad. During my apprenticeship, titrations were an important part of the education, but not the only one. In my apprenticeship I saw all the parts of Metrohm. This included the different competence centres (Product & Application Management) as well as the R&D departments for titration, ion chromatography, voltammetry and the column production. That I ended up in titration, is thanks to the head of CC titration, who asked me after my apprenticeship, if I wanted to work for him.")
      ),
      3 => array(
        'question' => array(
          "Sie haben bereits bei Metrohm Ihre Ausbildung zur Laborantin absolviert, warum haben Sie sich für Metrohm als Ausbildungsbetrieb entschieden?",
          "What made you choose Metrohm as the company for your apprenticeship?"),
        'answer' => array(
          "Nach dem Gymnasium wollte ich nicht direkt ein Studium beginnen und entschied mich für eine Lehre. Ich bewarb mich damals bei fünf Firmen um eine Lehrstelle. Die Metrohm lud mich als erste zum Schnuppern ein und mir gefiel das Team und die Arbeiten während der Schnupperlehre so gut, dass ich mich entschied die Lehre dort zu absolvieren.",
          "After school, I did not want to go to university directly and therefore decided for an apprenticeship. I applied to five different companies and Metrohm were the first to invite me for a closer look. I liked the team and the work during my trial period so much, that I chose Metrohm for my apprenticeship.")
      ),
      4 => array(
        'question' => array(
          "Welche Bereiche der Chemie sind bei Metrohm gefragt? Gibt es für Chemiker die Möglichkeit in 'fachfremde' Bereiche wie z.B. Marketing zu wechseln?",
          "Which areas of chemistry are needed at Metrohm? Is there a possibility to move into different areas, like marketing?"),
        'answer' => array(
          "Bei der Metrohm AG ist vor allem das Verständnis für die Analytik gefragt. Jedoch stellen unsere Vertretungen uns mit ihren Supportanfragen teilweise auch in Bezug auf anorganische und organische Chemie auf die Probe. Da der Hauptsitz unserer Firma in Herisau ist, sind auch Abteilungen wie Marketing und Entwicklung vertreten. Dabei ist es gut möglich, dass ein Chemiker in der Software testet oder im Marketing Werbemittel erstellt. Auch wird der einzelne Mitarbeiter je nach Neigung und Motivation mit entsprechenden Weiterbildungen unterstützt.",
          "At the Metrohm AG you need the understanding of analytics most of all. Our sites also keep us on our toes with support requests regarding inorganic and organic chemistry. Since our main site is in Herisau, we also have a departements, that test software or develop marketing material. Employees are also always encouraged to do trainings according to their own interests.")
      ),
      5 => array(
        'question' => array(
          "Nach Ihrem Studium an der ETH sind Sie wieder zu Metrohm zurückgekehrt – was unterscheidet Metrohm von anderen Arbeitgebern?",
          "After your time at ETH, you decided to come back to Metrohm – what distinguishes Metrohm from other employers?"),
        'answer' => array(
          "Ich habe mich während meiner Lehrzeit und dem nachfolgenden Jahr als ich für das CC Titration gearbeitet habe, sehr wohl im Unternehmen gefühlt und habe gar nichts anderes gesucht. Als man mir ein Jahr vor meinem Masterabschluss die Frage stellte, ob ich wieder zurückkommen und die Lehrlingsausbildung übernehmen wolle, zögerte ich nicht. Diese Entscheidung habe ich bis heute nicht bereut.",
          "During my apprenticeship and in the following year in CC titration, I really enjoyed my time in the company and therefore didn’t even look for another company. When I was asked a year before my Masters degree, if I wanted to take over the apprentice training, I did not hesitate to say yes. I do not regret this decision at all.")
      ),
      6 => array(
        'question' => array(
          "Was hat Sie dazu bewogen direkt nach dem Master wieder in die Metrohm zu wechseln? Viele Chemiker sind der Meinung, dass sie einen Doktortitel brauchen um einen Job zu bekommen…",
          "What made you go back to Metrohm after your Masters? A lot of chemists are under the impression that you need a PhD to get a job…"),
        'answer' => array(
          "Für mich persönlich kam nie die Frage auf, ob ich einen Doktortitel machen will. Für mich war ein Doktortitel gleichbedeutend mit einer Arbeitsstelle in der Forschung oder der Arbeit als Vorgesetzter, der seine Leute aus seinem Büro heraus betreut. Da ich nicht in der Forschung arbeiten wollte und auch ein Bürojob für mich nicht in Frage kam, entschied ich mich dazu, dass nach dem Master mein akademischer Weg zu Ende ist.",
          "I never considered doing a PhD. For me this was equivalent to the decision to get a job in R&D or as a boss that supervises her employees out of her office. Since I neither wanted to work in R&D nor wanted an office job, I decided that my academic career ends with my Masters degree.")
      ),
      7 => array(
        'question' => array(
          "Haben Sie in Ihrem Beruf manchmal Vorteile durch Ihre Berufsausbildung im Vergleich zu Ihren 'rein akademischen' Kollegen?",
          "Do you have certain advantages compared to your 'purely academic' colleagues?"),
        'answer' => array(
          "Ich sah die Vorteile während dem Studium vor allem darin, dass ich das Praktikum im ersten Semester nicht absolvieren musste und freigestellt wurde. Nein, Spass bei Seite. Meiner Meinung hat man nach der Lehre einfach mehr Erfahrung in Bezug auf das praktische Arbeiten. Die Arbeitsschritte sind schon recht routiniert und alltäglich. Dies muss ein Akademiker nach dem Studium erst noch lernen.",
          "During my studies the main advantage was that I didn’t have to do the first semester labcoure! Jokes aside – in my opinion, an apprenticeship provides more experience regarding the practical aspects of work. All steps are already part of the routine, this is something somebody fresh from university still has to learn.")
      ),
      8 => array(
        'question' => array(
          "Was sind Ihre Pläne und Ziele für Ihre Karriere bei Metrohm? Welche Möglichkeiten gibt es sich innerhalb von Metrohm weiterzuentwickeln?",
          "What are your goals within Metrohm? What are the options to develop oneself within Metrohm?"),
        'answer' => array(
          "Als ich bei der Metrohm begonnen habe, startete ich als Applikationsspezialistin. Dabei habe ich mich vor allem auf die Neuentwicklung von Applikationen konzentriert. Mittlerweile bin ich Produktspezialistin und unterstütze unsere Tochtergesellschaften und Kunden in Bezug auf produktspezifische Fragen. Ich kann Ihnen gar nicht sagen, ob ich mich Richtung Marketing und Produktmanagement oder in Richtung Support und Neuentwicklungen entwickeln möchte. Im Moment gefällt mir meine Position und daher gibt es nichts zu ändern.",
          "When I started at Metrohm I was an application specialist. In this area I focussed mostly on the development of new applications. In the meantime I became a product specialist und support our subsidiaries and customers with regards to product specific questions. Right now I cannot even tell if I want to develop myself in the direction of marketing and product management or in the direction of support and innovation. I am very happy with my current position and don’t want to change it any time soon.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last Question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Es gibt nach einem Studium viele verschiedene Richtungen die man einschlagen kann. Überlegt euch was ihr gerne erreichen wollt. Je nachdem was ihr gerne machen würdet, ist es entsprechend notwendig einen PhD zu machen. Ob ihr in die Forschung, in die Wirtschaft oder sogar in eine andere Richtung wie z.B. Marketing gehen möchtet. Es steht euch alles offen. Und auch wenn oft Berufserfahrung gefragt ist, bewerbt euch trotzdem für die Stelle. Es ergibt sich meist trotzdem eine Möglichkeit in der entsprechenden Firma anzufangen.",
          "After graduation there are a lot of different directions to take. Think carefully what you want to achieve. Depending on this, it might be necessary to get a PhD. Whether you want to go into research, industry or a completely different direction like marketing – everything is open for you. And if a prerequisite is experience – apply anyways. More often than not, there is still a possibility to start out in that company!")
      ),
    ),
  );


include('../0_template/template.php');

?>
