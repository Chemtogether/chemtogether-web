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
$template['package'] = 'gold';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2025 - Firmen: '.$template['company_name'], 'Chemtogether 2025 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.lonza.com/','lonza.com');
$template['linkedin'] = array('https://www.linkedin.com/company/lonza/','Lonza');
$template['archive'] = '/archive/lonza';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'As a dedicated contract development
and manufacturing organization (CDMO)
serving the healthcare industry, we bring
life-enhancing and life-saving treatments
to market for our customers and their
patients. We are a pioneer and world
leader in the CDMO industry and turn our
customers’ breakthrough innovations into viable therapies and manufacture the med-
icines of tomorrow.
');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'Our business is structured to meet our
customers’ complex needs across three
synergistic Business Platforms: Integrated
Biologics, Advanced Synthesis and
Specialized Modalities. Our services span
from early development to drug substance
and drug product manufacturing, and we lead in both established and emerg-
ing technologies including mammalian biologics, small molecules, highly potent
active pharmaceutical ingredients (APIs),
bioconjugates, mRNA, microbial, and cell
and gene.');

$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'Are you a graduate in manufacturing,
engineering, quality, or R&D? We are
looking for motivated individuals who are
eager to work across technologies and
contribute to integrated solutions that
support patients throughout the
entire treatment lifecycle. Explore exciting
opportunities in Basel, Stein, Visp or around
the globe - and become part of a team that
is shaping the future of healthcare. Find
out more on our career page: https://www.
lonza.com/careers');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 2;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
$template['interview'][$i++] = array(
  'name' => 'Barbara Stoessel',
  'img_url' => $awss3.'/companies/lonza/interviewee_2024_1',
  'position' => 'MSAT (Manufacturing Sciences and Technologies)',

  'education' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'Was ist deine derzeitige Aufgabe in Ihrem Unternehmen? <br> <i><b>What is your current task at your company?</b></i>',
      'answer' => 'Ich arbeite weiterhin in meiner Rolle als MSAT-Chemikerin am Lonza-Standort in Visp. Dabei bin ich sowohl im Labor als auch in der Produktion tätig. Meine Aufgaben umfassen unter anderem die Optimierung bestehender Prozesse, die technische Betreuung von Produktionskampagnen sowie die enge Zusammenarbeit mit verschiedenen Abteilungen wie Produktion, Engineering und Qualitätssicherung.
      <br><br> <i>I continue to work in my role as a Manufacturing Sciences and Technologies (MSAT) Chemist at Lonza’s Visp site. My responsibilities include working both in the laboratory and in production. I focus on optimizing existing processes, providing technical support for production campaigns, and collaborating closely with departments such as Production, Engineering, and Quality Assurance.</i>'
    ),
    1 => array(
      'question' => 'Warum hast du dich entschieden, bei Lonza zu arbeiten, und wie sah der Bewerbungsprozess aus? <br> <i><b>Why did you decide to work at Lonza and what did the application process look like?</b></i>',
      'answer' => 'Ich wusste schon früh, dass ich im Pharmabereich arbeiten möchte, da es mir wichtig ist, mit meiner Arbeit einen positiven Beitrag zum Leben anderer Menschen zu leisten. Ein weiterer entscheidender Aspekt war für mich, in einem grösseren Unternehmen tätig zu sein. Lonza, als globales Unternehmen mit ausgezeichnetem Ruf als CDMO, bot mir genau diese Möglichkeit. Auch die geografische Lage in einer sonnigen Region zwischen den Bergen hat mich sehr angesprochen. Den Bewerbungsprozess habe ich als effizient und angenehm erlebt. Besonders positiv fand ich, dass neben den fachlichen Qualifikationen auch darauf geachtet wurde, wie gut man ins Team passt.
      <br> <i>I knew early on that I wanted to work in the pharmaceutical industry because it’s important to me to make a positive contribution to people’s lives through my work. Another key factor for me was working in a larger company. Lonza, as a global organization with an excellent reputation as a CDMO, offered exactly that. I was also drawn to the location – a sunny region surrounded by mountains. I experienced the application process as efficient and pleasant, and I especially appreciated that besides professional qualifications, cultural and team fit were equally valued.</i>'
    ),
    2 => array(
      'question' => 'Welche Stärken hast du während deines Studiums entwickelt, die dir besonders in deiner jetzigen Tätigkeit geholfen haben? <br> <i><b>Which strengths did you develop during your studies that helped you in your current job?</b></i>',
      'answer' => 'Ich habe Chemie studiert und mich auf organische Chemie spezialisiert. Dieses Wissen hilft mir heute sehr, insbesondere beim Verständnis chemischer Prozesse und beim Planen und Durchführen von Laborexperimenten. Auch das Anleiten und Unterstützen von Laborant:innen fällt mir dadurch leichter. Gleichzeitig habe ich gelernt, dass viele Fähigkeiten erst „on the job“ entstehen. Offenheit und die Bereitschaft, sich kontinuierlich weiterzuentwickeln, sind entscheidend – denn die Praxis bringt oft ganz andere Anforderungen mit sich als das Studium. Es ist wichtig, sich davon nicht abschrecken zu lassen, sondern diese Herausforderungen anzunehmen.
      <br><br> <i>I studied chemistry and specialized in organic chemistry. This background helps me a lot in my current role – especially in understanding chemical processes and in planning and conducting lab experiments. It also makes it easier for me to guide and support lab technicians. At the same time, I’ve learned that many skills are developed on the job. Being open and willing to continuously learn is essential – because real-world practice often brings different challenges than academic study. It’s important not to be discouraged by that, but to see it as an opportunity for growth.</i>'
    ),
    3 => array(
      'question' => 'Was fasziniert dich besonders an deiner Arbeit? <br> <i><b>What fascinates you most about your work?</b></i>',
      'answer' => 'Mich fasziniert vor allem die Vielseitigkeit meiner Tätigkeit – ich bin sowohl im Labor als auch in der Produktion aktiv. Besonders spannend finde ich es, Verbesserungspotenziale zu identifizieren, die sich direkt auf die Effizienz, Nachhaltigkeit und Produktqualität auswirken. Die enge Zusammenarbeit mit verschiedenen Abteilungen wie Produktion, Engineering und Qualitätssicherung eröffnet immer wieder neue Perspektiven. Der interdisziplinäre Austausch trägt wesentlich dazu bei, Prozesse ganzheitlich zu optimieren.
      <br><br> <i>What fascinates me most is the variety of my role – I’m active in both the lab and production. I especially enjoy identifying opportunities for improvement that directly impact efficiency, sustainability, and product quality. The close collaboration with departments like Production, Engineering, and Quality Assurance constantly opens up new perspectives. This interdisciplinary exchange plays a key role in optimizing processes holistically.</i>'
    ),
    4 => array(
      'question' => 'Wie würdest du die Unternehmenskultur bei Lonza beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit? <br> <i><b>How would you describe the corporate culture at Lonza, especially regarding teamwork and collaboration?</b></i>',
      'answer' => 'Lonza fördert Kreativität und Innovation und ist sehr aufgeschlossen gegenüber neuen Technologien und Konzepten. Ein weiterer starker Aspekt der Unternehmenskultur ist die Zusammenarbeit und das Gemeinschaftsgefühl. Man fühlt sich als Teil eines Teams und arbeitet eng zusammen, was ich besonders schätze. Diese Kultur des Zusammenhalts und der Offenheit schafft ein angenehmes Arbeitsumfeld, in dem Ideen und Teamarbeit gefördert werden.
      <br><br> <i>Lonza promotes a culture of creativity, innovation, and openness to new technologies and ideas. Another strong aspect of the company culture is the sense of community and collaboration. You really feel like part of a team, and close cooperation is something I truly value. This culture of support and openness creates a positive work environment where ideas and teamwork are actively encouraged.</i>'
    ),
    5 => array(
      'question' => 'Was würdest du ETH-Studierenden empfehlen, während ihres Studiums zu tun, um für künftige Praxiserfahrungen in der Industrie vorbereitet zu sein? <br> <i><b>What would you recommend ETH students do during their studies to prepare for future industry experience?</b></i>',
      'answer' => 'Der Übergang von der Universität in die Industrie kann sich zunächst recht abrupt anfühlen. Viele Erfahrungen entstehen erst im Arbeitsalltag. Deshalb sind Offenheit und Lernbereitschaft essenziell. Die Praxis bringt oft ganz andere Anforderungen mit sich als das Studium. Wichtig ist, sich davon nicht abschrecken zu lassen, sondern diese Herausforderungen als Chance zur Weiterentwicklung zu sehen. Gerade für Berufseinsteiger:innen bietet Lonza eine Vielzahl an Junior-Stellen, was besonders vorteilhaft ist, wenn man noch keine Industrieerfahrung mitbringt. Es gibt Einstiegsmöglichkeiten in verschiedenen Bereichen wie Quality Assurance, Quality Control, MSAT oder Produktion – das eröffnet viele Optionen, um den passenden Weg zu finden.
      <br><br> <i>The transition from university to industry can feel quite abrupt at first. Many experiences only come through hands-on work. That’s why openness and a willingness to learn are essential. Practice often brings very different demands than academic study. It’s important not to be discouraged by this, but to see it as a chance for personal and professional development. Especially for recent graduates, Lonza offers a wide range of junior positions, which is a great advantage for those without prior industry experience. There are entry-level opportunities in areas such as Quality Assurance, Quality Control, MSAT, and Manufacturing – providing a broad range of options to find the right path.</i>'
    ),
  ),
);
$template['interview'][$i++] = array(
  'name' => 'Leonardo Jakob Nannini',
  'img_url' => $awss3.'/companies/lonza/interviewee_2024_2',
  'position' => 'Betriebschemiker | Operations Chemist',

  'education' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '',
      'desc' => '',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'Was ist deine derzeitige Aufgabe im Unternehmen? <br> <i><b>What is your current task at your company?</b></i>',
      'answer' => 'Derzeit arbeite ich als Senior Operations Chemist im Bereich Manufacturing bei Lonza in Visp. Meine Aufgabe ist sehr vielseitig und deckt den gesamten Produktionsprozess ab – von der Budgetplanung einer Kampagne über die operative Begleitung der Herstellung bis hin zur Freigabe und dem Versand der produzierten Batches.
      <br> <i>I currently work as a Senior Operations Chemist in the Manufacturing department at Lonza in Visp. My role is highly diverse and covers the entire production process – from campaign budget planning and operational support during manufacturing to the final release and shipment of the produced batches.</i>'
    ),
    1 => array(
      'question' => 'Warum hast du dich entschieden bei Lonza zu arbeiten, und wie sah der Bewerbungsprozess aus? <br> <i><b>Why did you decide to work at Lonza and what did the application process look like?</b></i>',
      'answer' => 'Ich habe vor drei Jahren bei Lonza angefangen, da mich Prozessentwicklung und -chemie schon immer fasziniert haben. Über einen Kontakt bin ich auf eine Stelle im Manufacturing aufmerksam geworden. Der Wechsel war ein grosser Schritt – direkt in die Produktion zu gehen war spannend und ganz anders als meine vorherige Arbeit an der ETH und im Postdoc. Dort arbeitete ich in kleinen Laborteams, hier hingegen in grossen Projektteams mit viel Eigenverantwortung. Der Bewerbungsprozess verlief sehr schnell: Nach dem Absenden meiner Bewerbung wurde ich zeitnah zu einem Gespräch eingeladen und erhielt kurz darauf das Stellenangebot.
      <br> <i>I joined Lonza three years ago because I’ve always been fascinated by process development and chemistry. A personal contact made me aware of an open position in Manufacturing. Transitioning directly into production was a big step for me – exciting and very different from my previous work at ETH and during my postdoc. Back then, I worked in small lab teams, whereas here, I collaborate with large project teams and take on much more responsibility. The application process was very quick: shortly after submitting my application, I was invited for an interview and received the job offer soon after.</i>'
    ),
    2 => array(
      'question' => 'Welche Stärken hast du während deines Studiums entwickelt, die dir besonders in deiner jetzigen Tätigkeit geholfen haben? <br> <i><b>Which strengths did you develop during your studies that helped you in your current job?</b></i>',
      'answer' => 'Ich habe Interdisziplinäre Naturwissenschaften studiert und mich auf organische Chemie spezialisiert. Rückblickend war jede Erfahrung hilfreich – keines lässt sich besonders hervorheben. Wichtig ist, Fächer zu wählen, die einen wirklich interessieren, und auch solche, in denen man sich verbessern möchte. Allerdings ist die Offenheit gegenüber anderen Disziplinen entscheidend – auch als organischer Chemiker sollte man flexibel sein, besonders im Engineering-Bereich. Das hilft mir auch bei meinem jetzigen Job sehr.
      <br> <i>I studied Interdisciplinary Natural Sciences and specialized in organic chemistry. Looking back, every experience has proven useful – none stands out in particular. What matters most is choosing courses that genuinely interest you, as well as those that challenge you to grow. Openness to other disciplines is also key – even as an organic chemist, it’s important to be flexible, especially when working in engineering-related areas. This mindset has been extremely helpful in my current role.</i>'
    ),
    3 => array(
      'question' => 'Was fasziniert dich besonders an deiner Arbeit? <br> <i><b>What fascinates you most about your work?</b></i>',
      'answer' => 'In meiner täglichen Arbeit finde ich besonders spannend, Prozesse und Abläufe zu optimieren, um die Produktion effizienter zu gestalten. Oft sind es gerade kleine Details, die einen grossen Unterschied machen. Gleichzeitig finde ich es inspirierend, Teil eines Unternehmens zu sein, das so viele unterschiedliche Fachbereiche vereint: von Chemie und Chemieingenieurwesen bis hin zu Biologie und Pharmazie. Besonders der stark wachsende Bereich Biologics eröffnet spannende Perspektiven für Biolog:innen und Biochemiker:innen. Diese interdisziplinäre Vielfalt macht die Arbeit bei Lonza für mich besonders reizvoll.
      <br> <i>What I find most exciting in my daily work is optimizing processes and workflows to make production more efficient. Often, it’s the small details that make a big difference. At the same time, I find it inspiring to be part of a company that brings together so many different disciplines – from chemistry and chemical engineering to biology and pharmaceutical sciences. The rapidly growing Biologics division, in particular, offers exciting opportunities for biologists and biochemists. This interdisciplinary diversity is what makes working at Lonza especially rewarding for me.</i>'
    ),
    4 => array(
      'question' => 'Wie würdest du die Unternehmenskultur bei Lonza beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit? <br> <i><b>How would you describe the corporate culture at Lonza, especially regarding teamwork and collaboration?</b></i>',
      'answer' => 'Die Unternehmenskultur bei Lonza ist sehr teamorientiert und familiär. Wir arbeiten eng zusammen, teilen Verantwortung und treiben Projekte gemeinsam voran. Teamfähigkeit und klare Kommunikation sind essenziell. Besonders spannend ist die kulturelle Vielfalt: Am Standort Visp arbeiten Menschen aus über 70 Nationen – das schafft ein internationales und dynamisches Arbeitsumfeld. Darüber hinaus legt Lonza grossen Wert auf die individuelle Weiterentwicklung. Mitarbeitende werden aktiv in ihre Entwicklung eingebunden – sie definieren ihre Stärken, Entwicklungsziele und Interessen. Ob jemand in seiner aktuellen Rolle bleiben, sich weiterentwickeln oder in einen neuen Bereich wechseln möchte: Gemeinsam wird nach passenden Möglichkeiten gesucht, um diese Ziele zu realisieren. Diese Kombination aus Teamgeist, Vielfalt und Entwicklungsmöglichkeiten macht die Unternehmenskultur bei Lonza für mich besonders wertvoll.
      <br> <i>The company culture at Lonza is very team-oriented and has a strong sense of community. We work closely together, share responsibility, and drive projects forward as a team. Teamwork and clear communication are essential. One of the most exciting aspects is the cultural diversity: at the Visp site, people from over 70 nationalities work together, creating an international and dynamic work environment. Lonza also places great emphasis on individual development. Employees actively shape their own growth by defining strengths, goals, and interests. Whether someone wants to stay in their current role, take on new responsibilities, or move into a different area, the company collaborates to find the right opportunities. This combination of team spirit, diversity, and development opportunities is what I value most about Lonza’s culture.</i>'
    ),
    5 => array(
      'question' => 'Was würdest du ETH-Studierenden empfehlen, während ihres Studiums zu tun, um für künftige Praxiserfahrungen in der Industrie vorbereitet zu sein? <br> <i><b>What would you recommend ETH students do during their studies to prepare for future industry experience?</b></i>',
      'answer' => 'In grossen Organisationen ist Kommunikation entscheidend: Informationen müssen nicht nur an die richtigen Personen gelangen, sondern auch klar und verständlich vermittelt werden. Für mich ist es fast genauso wichtig, Ergebnisse einfach und nachvollziehbar zu präsentieren, wie die Ergebnisse selbst zu erzielen. Daher empfehle ich, sich früh mit Kommunikation und Sprache auseinanderzusetzen – insbesondere, wenn man in einem internationalen Umfeld arbeitet und in einer Fremdsprache kommunizieren muss. Ausserdem halte ich es für sehr wertvoll, offen für neue Herausforderungen zu bleiben – vor allem dann, wenn sie ausserhalb der eigenen Komfortzone liegen. Gerade dort liegt oft das grösste Potenzial für persönliches und fachliches Wachstum.
      <br> <i>In large organizations, communication is absolutely key: information needs to reach the right people and be clearly understood. In my view, being able to present results in a simple and understandable way is almost as important as generating the results themselves. That’s why I recommend engaging with communication and language skills early on – especially if you will be working in an international environment and need to communicate in a foreign language. I also believe it’s incredibly valuable to stay open to new challenges – especially those outside your comfort zone. That’s often where the greatest potential for personal and professional growth lies.</i>'
    ),
  ),
);

include('../0_template/template.php');

?>
