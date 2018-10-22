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
    "title"        => "Interview with Suraj Rathore from Gurit - Chemtogether",
    "desc"         => "Suraj Rathore takes part in the Gurit Entrepreneurial Program at Gurit. Learn more about his career and work in his interview, and meet Gurit at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/gurit_20181002.jpg",
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


$template['company_name'] = 'Gurit';
$template['company_name_short'] = 'gurit';
$template['logo_url'] = set_source($awss3.'/companies/gurit/logo_svg','svg', FALSE);
$template['package'] = 'silver';
$template['day'] = 1;

$lang['general']['page_title'] = array('Chemtogether 2018 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.gurit.com','gurit.com');
$template['facebook'] = array('https://www.facebook.com/GuritGroup/', 'Gurit');
$template['linkedin'] = array('https://www.linkedin.com/company/gurit/','Gurit');
// $template['mail'] = array('','');
// $template['archive'] = '/archive/';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'We are a developer and innovator in the composites industry positioned as the leading global supplier of composite materials, engineering services, tooling equipment, select parts and systems. We strive to go beyond the standard today. Focussing on developing our material and technology offering with the ambition of mastering it to its full extent in order to provide complete solutions to our customers. Operating across various market sectors, we like many of our customers, have a common goal of delivering the highest quality whilst driving environmental sustainability.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'You will have earned a Master or PhD in Materials Science or Chemistry, have a foundation of
  business economics/administration and possess an intrinsic entrepreneurial drive. We want you to
  combine these attributes and apply them every day. Our business language is English, but are
  interested in international citizens with a flair for foreign cultures. You’ll need this to lead complex
  strategic projects across our international environment. In short we want you to shape and deliver the
  future of composite solutions.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'An environment to leverage creativity and the entrepreneurial freedom to identify business
  opportunities. Then we want you to take responsibility in developing concepts and implementing
  projects to deliver growth solutions to the opportunities you identified. Mentored personally by the
  Executive Management Team we have faith that you will create career development opportunities for
  leading commercial technical roles in one of our Business Units.');



$template['interview_print_until'] = 1;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i = 0;



$template['interview'][$i++] = array(
  'name' => 'Suraj Rathore',
  'img_url' => $awss3.'/companies/gurit/interviewee_1',
  'position' => array('Trainee im Gurit Entrepreneurial Program', 'Trainee of the Gurit Entrepreneurial Program'),

  'education' => array(
    0 => array(
      'date' => '2016-2018',
      'desc' => array('M.Sc. Management and Engineering in Computer Aided Mechanical Engineering an der RWTH Aachen und Maastricht School of Managment', 'M.Sc. Management and Engineering in Computer Aided Mechanical Engineering at RWTH Aachen and Maastricht School of Managment')
    ),
    1 => array(
      'date' => '2009-2013',
      'desc' => array('B.Tech. Mechanical Engineering an der Punjab Technical University', 'B.Tech. Mechanical Engineering at Punjab Technical University')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2018',
      'desc' => array('Trainee im Gurit Entrepreneurial Program', 'Trainee of the Gurit Entrepreneurial Program')
    ),
    1 => array(
      'date' => '2017-2018',
      'desc' => array('Werksstudent bei Siemens AG', 'Working student at Siemens AG')
    ),
    2 => array(
      'date' => '2016-2016',
      'desc' => array('Gründer von www.fooder.co.in', 'Founder of www.fooder.co.in')
    ),
    3 => array(
      'date' => '2013-2016',
      'desc' => array('Assistant Manager bei Godrej & Boyce Mfg. Co.', 'Assistant Manager at Godrej & Boyce Mfg. Co.')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben in Ihrem neuen Job bei Gurit?',
                          'What are your responsibilities in your new job at Gurit?'),
      'answer' => array('Als Teil des «Entrepreneurial Trainee Progam» bin ich dafür verantwortlich, bestimmte Projekte voranzutreiben. Dazu muss ich einen Business Case erstellen um ein Produkt über seine Gegenwart hinaus zu diversifizieren.',
                        'As a part of the entrepreneurial trainee program, I am responsible for driving certain projects which requires me to set-up a business case to diversify a product beyond its present.')
    ),
    1 => array(
      'question' => array('Sie haben einen Bachelorabschluss in Maschinenbau und absolvieren zurzeit einen Master in Management and Engineering. Beschäftigt Gurit auch Absolventinnen und Absolventen anderer Fachrichtungen?',
                          'You graduated with a Bachelor’s degree in Mechanical Engineering and are now pursuing a Master’s degree in Management and Engineering. Does Gurit also employ graduates of other fields of study (Chemistry, Chemical Engineering, Interdisciplinary Sciences)?'),
      'answer' => array('Gurit ist ein breitgefächertes Unternehmen mit diversen Fähigkeiten und Expertisen. Im Team von Gurit sind verschiedenste Fachrichtungen vertreten, wie zum Beispiel Chemie, Chemieingenieurwesen, Maschinenbau, Management und Interdisziplinäre Naturwissenschaften.',
                        'Yes, Gurit is a diversified group with which comes the need to have diversified skills and expertise. People from backgrounds such as chemistry, chemical engineering, composite engineering, mechanical engineering, management and interdisciplinary sciences are the ones which complete Gurit’s team.')
    ),
    2 => array(
      'question' => array('Warum haben Sie sich Gurit als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose Gurit as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Die unternehmerische Herangehensweise nach dem Motto «Make it happen» hat mir schon immer gefallen. Als ich von Gurit’s Entrepreneurial Trainee Program hörte, war ich sofort interessiert. Durch einen Besuch unseres CTOs, Damian Bannister, an der RWTH Aachen wurde ich auf die Stellenausschreibung aufmerksam. Einige Wochen nach meiner Onlinebewerbung musste ich online eine Persönlichkeitsbeurteilung durchführen. Nach einem Skype-Interview wurde ich für mein finales Vorstellungsgespräch nach Zürich eingeladen. Das Auswahlverfahren bestand aus einem persönlichen Gespräch, gefolgt von einem Rollenspiel und einer Business-Case-Präsentation.',
                        'I always liked the sense of ownership and ‘Make it happen’ approach and when I learnt about Gurit’s Entrepreneurial Trainee program’s description it was an instant fit. I came across this program through Mr. Damian Bannister, our CTO, who visited our university – RWTH Aachen University in Germany early this year and explained about the Entrepreneurial Trainee Program. As mentioned above I felt it aligned with what I wanted to do pretty well, so I went home and looked for the program online and applied. After a couple of weeks, I received an online personality assessment. After a Skype interview, I was invited to Gurit’s Head Office in Zürich for a final interview. The final assessment consisted of an interview part followed by a role play and finally a business case study presentation.')
    ),
    3 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('An der Universität beginnt der Tag meistens sehr geplant. Man weiss, welche Vorlesungen stattfinden und was der Inhalt sein wird. Man lernt neue Dinge aus einer theoretischen Sichtweise und meistens ist genau vorgeschrieben, wie Aufgaben mit gegebenen Hilfsmitteln zu erledigen sind. Die Leistung an der Universität wirkt sich hauptsächlich auf den eigenen Lebenslauf aus, man übernimmt selten viel Verantwortung.<br>Am Arbeitsplatz ist man oft einem grösseren Umfang an interessanten Aktivitäten und Veranstaltungen ausgesetzt. Man bekommt die Möglichkeit, Gelerntes in einem praktischen Kontext umzusetzen und sich gleichzeitig durch das Lösen neuer Aufgaben weiterzuentwickeln. Hier wirkt sich die eigene Leistung definitiv auf den Erfolg des Unternehmens aus und man trägt deutlich mehr Verantwortung.
      ',
                        'At university the day starts mostly in planned way. You know which lectures you are going to have and what would be the content. You learn new things in a more theoretical aspect and you are basically told what to do most of the time and all of the things you needed are provided for you. Your performance in the university will mostly make a difference in building up your personal profile. The level of responsibility and accountability is limited to assignments and projects.<br>On the other hand, working life is different in that you are exposed to a greater range of interesting activities and events. You get the opportunity to apply what you have learned at university in a practical manner and at the same time you learn new things with hands on tasks which you might be doing for the first time. And here your performance definitely makes a difference in the company’s success as the level of responsibility and accountability on you is much higher.
                        ')
    ),
    4 => array(
      'question' => array('Nach Ihrem Bachelorabschluss haben Sie drei Jahre lang in der Industrie gearbeitet bevor Sie wieder an die Universität zurückgekehrt sind. Was hat Sie dazu motiviert, ein Masterstudium zu absolvieren?',
                          'After finishing your Bachelor’s degree, you worked in industry for three years before re-entering university. What motivated you to continue your academic studies and pursue a master’s degree?'),
      'answer' => array('Als ich anfing in der Industrie zu arbeiten hatte ich die Aufgaben eines Maschinenbauers. Am Anfang waren meine Aufgaben eher technischer Natur. Nach dem ersten Jahr wurden mir immer mehr Managementaufgaben zugewiesen, was mir sehr gut gefiel. Ich sammelte aus erster Hand Erfahrung im Management, aber ich wollte mich weiterentwickeln. Aus diesem Grund entschied ich mich dazu, einen Master in Management and Engineering zu absolvieren um meine Fähigkeiten im Management sowie im technischen Bereich voranzutreiben.',
                        'When I started to work in the industry, I started with the responsibilities of a Mechanical Engineer. My tasks in the beginning were more technically inclined. But, as the first year passed the responsibilities were not just technical but started getting managerial, which I liked a lot. I was gaining hands on managerial skills, but I felt the need to upgrade myself at that point to have an edge. That was when I decided to do a master’s in Management and Engineering so that I can develop better management skills and also at the same time enhance my technical abilities. ')
    ),
    5 => array(
      'question' => array('Welche ausserfachlichen Kompetenzen sollte man sich neben dem Studium aneignen um für den Berufseinstieg in einem Unternehmen wie Gurit gerüstet zu sein?',
                          'Which soft skills should students try to acquire in the course of their studies to succeed in a company like Gurit?'),
      'answer' => array('Meiner Meinung nach sind für den Berufseinstieg vor allem Kommunikationsfähigkeiten essentiell. Damit meine ich nicht rednerische Kunst, sondern einfach die Fähigkeit, sich selbst gegenüber anderen auszudrücken und andere auf einfachste Weise zu verstehen. Als Teil der Kommunikation sind der Umgang mit Menschen sowie Verhandlungsfertigkeiten sehr hilfreich.',
                        'I think, whenever you are entering a working environment from university, having good communication skills is the key. I don’t mean being a great orator, but the ability to express yourself to others and to understand others in the simplest way. Also, as part of good communication skills, having good people management skills and negotiation skills is highly useful. ')
    ),
    6 => array(
      'question' => array('Vor Ihrem Einstieg bei Gurit hatten Sie bereits in verschiedenen Bereichen der Industrie gearbeitet. Wie wichtig war Ihre vorhandene Berufserfahrung für Ihren Bewerbungsprozess?',
                          'Before joining Gurit, you had already worked in several different fields of industry. How important was your previous work experience for your application process at Gurit?'),
      'answer' => array('Ich glaube, dass jede praktische Erfahrung zählt, so wie es auch in meinem Bewerbungsprozess bei Gurit der Fall war. Durch meine ersten Erfahrungen in der Industrie habe ich mir Management- und Verhandlungsfähigkeiten angeeignet. Die Arbeit in meinem eigenen Startup hat mir beigebracht, wie man mit geschäftlichen Unsicherheiten, Risiko und Rückschlägen umgeht. All diese Erfahrungen haben sich positiv auf meine Bewerbung ausgewirkt.',
                        'I believe every practical experience counts, so was the case with me while applying with Gurit. My initial experience in the industry helped me learn the technical skills, people management skills and the negotiation skills in a more practical way. Working in my own startup helped me to learn about addressing uncertainty in business environment, handling pitfalls and managing risks. All this experience together holds a big chunk towards my application with Gurit.')
    ),
    7 => array(
      'question' => array('Sie kommen ursprünglich aus Indien und sind vor zwei Jahren nach Deutschland gekommen, um Ihr Masterstudium aufzunehmen. Sind Ihnen markante Unterschiede zwischen Ihren Arbeitsumfeldern in Indien und Deutschland aufgefallen?',
                          'You are originally from India and moved to Germany two years ago for your Master studies. Did you experience any striking differences between your Indian and German working environments?'),
      'answer' => array('Ja, die Arbeitskulturen der beiden Länder sind gewissermassen komplementär. In der indischen Industrie gibt es sehr grosse Machtunterschiede, die in Deutschland deutlich kleiner sind. In Deutschland ist es für Angestellte daher einfacher, sich dem Management gegenüber offen auszudrücken. In Indien wird eine sehr praktische Herangehensweise gewählt – «learning by doing». In Deutschland wird die vorausgehende Planung sehr genau genommen und erst dann zur Umsetzung übergegangen.',
                        'Yes, certainly the two working cultures are quite complementary. You have a high power differential in the industry in India, which is minimal in Germany, which makes it easier for the employees in Germany to be expressive to the management. The Indian working environment follows mostly a hands-on approach, which is more like learning by doing. In Germany, on the other hand, the planning part is done quite well and then follows the implementation. ')
    ),
    8 => array(
      'question' => array('Ist es für Gurit als Arbeitgeber wichtig, dass eine Bewerberin oder ein Bewerber Auslandserfahrung hat?',
                          'Is it important for Gurit as an employer that an applicant has international experience?'),
      'answer' => array('Gurit ist ein internationales Unternehmen mit Niederlassungen in mehreren Ländern und einem internationalen Team. Auslandserfahrung ist daher auf jeden Fall von Vorteil.',
                        'Gurit is an international company with its presence in several countries and the teams are also international. So, having international experience will definitely give you an advantage among the other applicants.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Am wichtigsten ist es herauszufinden, woran man gerne und leidenschaftlich arbeitet. Gleichzeitig sollte man sich auch insgesamt weiterentwickeln, nicht nur akademisch, sondern auch durch ausserfachliche Aktivitäten, Hackathons oder Wettbewerbe. All diese Dinge helfen einem dabei, sich Softskills anzueignen und bei Bewerbungen für Praktika oder Jobs erfolgreich zu sein.',
                        'First and foremost is to find out what are you most passionate about doing or working on and once you know it you are halfway through. At the same time try to develop yourself in an overall manner, which means not just in academics but also taking part in something out of academics like hackathons, competitions and the extra-curricular activities around you in the university. These are some simple ways which help you in gaining good soft skills. Once you have all that, you are ready with an edge to apply for internships or jobs. ')
    ),
  ),
);



include('../0_template/template.php');



?>
