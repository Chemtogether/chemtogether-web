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

$lang['general']['page_title'] = array('Chemtogether 2018 - Archiv: '.$template['company_name'], 'Chemtogether 2018 - Archive:'.$template['company_name']);
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
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Sabina Compassi',
    'img_url' => set_source($awss3_archive.'/msd/interview-2017-1', 'png', FALSE),
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
