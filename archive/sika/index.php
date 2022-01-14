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


$template['company_name'] = 'Sika';
$template['company_name_short'] = 'sika';
$template['logo_url'] = $awss3_archive.'/sika/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://che.sika.com/','che.sika.com');
$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');

// $template['mail'] = array('','');

$template['we_are'] = array(
  'Sika is a specialty chemicals company with a leading position in the development and production of systems and products for bonding, sealing, damping, reinforcing, and protecting in the building sector and motor vehicle industry. Sika has subsidiaries in 100 countries around the world and manufactures in over 300 factories. At this time we employ 25,000 people worldwide.',
  'Sika is a specialty chemicals company with a leading position in the development and production of systems and products for bonding, sealing, damping, reinforcing, and protecting in the building sector and motor vehicle industry. Sika has subsidiaries in 100 countries around the world and manufactures in over 300 factories. At this time we employ 25,000 people worldwide.');
$template['we_offer'] = array(
  'Creativity, innovation, customer-centricity, research and sustainability are dynamic components of Sika’s long-term success and future growth. We offer candidates the possibility to work on large-scale projects around the globe, that result in effective and original products for customers. We give you the opportunity to develop, for instance via collaborating with R&D teams in different countries.',
  'Creativity, innovation, customer-centricity, research and sustainability are dynamic components of Sika’s long-term success and future growth. We offer candidates the possibility to work on large-scale projects around the globe, that result in effective and original products for customers. We give you the opportunity to develop, for instance via collaborating with R&D teams in different countries.');
$template['we_look'] = array(
  'At Sika we value courage for innovation, strength to persist, and pleasure in working together. You have the ability to perform combined with a high degree of social skills, an entrepreneurial spirit, respect for different opinions and working in diverse teams to achieve our strategic goals.
  Is it your ambition to perform, excel and be proud of your results? Then Sika is the place for you!',
  'At Sika we value courage for innovation, strength to persist, and pleasure in working together. You have the ability to perform combined with a high degree of social skills, an entrepreneurial spirit, respect for different opinions and working in diverse teams to achieve our strategic goals.
  Is it your ambition to perform, excel and be proud of your results? Then Sika is the place for you!');


  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Sara Fornera',
    'img_url' => set_source($awss3_archive.'/sika/interviewee_2017_1', 'png', FALSE),
    'position' => array('Wissenschaftlerin (F&ampE)', 'Scientist (R&ampD)'),

    'education' => array(
      0 => array(
        'date' => '2002-2007',
        'desc' => array('BSc und MSc ETH Materialwissenschaften','BSc and MSc ETH Material Sciences')
      ),
      1 => array(
        'date' => '2008-2011',
        'desc' => array('Doktorat in Polymerchemie ETH Zürich',' PhD in Polymer Chemistry ETH Zürich')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2011-2017',
        'desc' => array('Sika Projektleiterin Automotive Trim','Sika Project Leader Automotive Trim')
      ),
      1 => array(
        'date' => '2017',
        'desc' => array('Wissenschaftlerin (F&ampE)','Scientist (R&ampD)')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Wissenschaftlerin in der Forschungsabteilung bei Sika?",
          "What are your reponsibilities as a Scientist in Research and Development at Sika?"),
        'answer' => array(
          "Mein Hauptprojekt ist fokussiert auf die Suche nach neuen Zutaten für unsere Formulierungen, die weniger umweltschädlich, aber trotzdem effizient sind. In Zusammenarbeit mit Chemikern und anderen Wissenschaftlern untersuchen wir in unserer Abteilung die Zusammenhänge zwischen Molekularstrukturen, theoretischen Modellen und empirischen Resultaten. Ein erfolgreiches Beispiel ist unsere i-Cure®Technologie, die eine vollkommen neue Generation von Dicht- und Klebstoffen mit signifikant verbesserter Verarbeitbarkeit, Haltbarkeit, Klebkraft und Ökologie ermöglicht.",
          "My main focus is the search for new ingredients for our formulationsm which are less environmentally harmful, but are still efficient. In cooperation with chemists and other scientists in our department, we are investigating the connection between molecular structure, theoretic models and empiric results. A successful example is our i-Cure technology, which is completely new generation of sealants and adhesives.")
      ),
      1 => array(
        'question' => array(
          "An welchem Standort von Sika arbeiten Sie? Arbeiten Sie immer am gleichen Ort oder ist ihre Beschäftigung mit Reisen verbunden?",
          "At which site of Sika are you working? Are you always in the same place or does your occupation entail a lot of travelling?"),
        'answer' => array(
          "Ich arbeite in Zürich Altstetten. Abhängig vom Projekt, arbeiten wir in enger Zusammenarbeit mit unseren Produktionsstandorten, unseren Kunden und Lieferanten, welche alle in der Schweiz oder im Ausland vertreten sind. Dadurch reise ich ca. einen Tag im Monat. Dies ist ein gutes Gleichgewicht zwischen Telefonkonferenzen und persönlichen Meetings und stellt einen sehr wichtigen Teil der Arbeit dar.",
          "I am working in Zürich Altstetten. Depending on the project, we are working closely with our production site, our customers and our suppliers, which are all located in- or outside of Switzerland. Because of this, I am usually travelling one day a month. This is a good balance to telephone conferences and personal meeting and is a very important part of my job.")
      ),
      2 => array(
        'question' => array(
          "Sie haben bei Sika als Projektleiterin im Bereich Automotive Trim angefangen, was waren da Ihre Aufgaben?",
          "You started out as a project leader in automotive trim, what were your responsibilities at that time?"),
        'answer' => array(
          "In den ersten 5 Jahren bei Sika, habe ich als Projektleiterin in der Entwicklung gearbeitet. Dort habe ich neue Klebstoffe für die Automobilindustrie entwickelt, sie in der Produktion für das Scale-up betreut und bei verschiedenen Kunden eingeführt. Entwicklung, Produktionsbetreuung, Trouble shooting bei den Kunden und Projektleitung waren meine Haupttätigkeiten. Zusätzliche Aufgabe waren Sitzungen mit verschiedenen Schnittstellen wie Lieferanten, Marketing, Verkauf, Einkauf und Produktion. In dieser Funktion reiste ich etwas mehr - ca. 10% meiner Arbeitszeit.",
          "In my first 5 years at Sika, I was a project leader in R&ampD. I developed new adhesives for the automotive industry, supported the scale-up and in the end established the product with various customers. Development, product support, production support, troubleshooting with customers and leading projects were all part of my job then. Another task were meetings with various intersections such as suppliers, marketing, sales, purchasing and production. In this position, I was traveling a bit more often – about 10% of the time.")
      ),
      3 => array(
        'question' => array(
          "Sie haben Materialwissenschaften studiert – gibt es bei Sika auch Stellen für Absolventen der anderen 'HCI-Fachrichtungen', also Chemieingenieurwesen, Chemie, Pharmazie und interdisziplinäre Naturwissenschaften?",
          "You studied material sciences – does Sika also employ graduates of the other 'HCI-disciplines' (Chemistry, Pharmacy, Material Sciences and Interdisciplinary Sciences)?"),
        'answer' => array(
          "Auf jeden Fall. Die Arbeitsgruppen in der Sika sind sehr heterogen und wir versuchen Menschen mit unterschiedlichen Ausbildungen zusammenzubringen, damit sie im Team ihre Stärken auch wirklich ausleben können. Ich arbeite täglich mit Chemikern, Chemieingenieuren und Wissenschaftlern mit den unterschiedlichsten Hintergründen zusammen. Persönlich finde ich für eine erfolgreiche Zusammenarbeit nicht nur das Studium und das 'fachliche Wissen' entscheidend, sondern auch, dass die Leute neugierig, offen und selbstkritisch bleiben.",
          "Definitely. The teams at Sika are very heterogeneous and we try to connect people with different education, so that each of them can shine in their own discipline. I work together with chemists, chemical engineers and scientists of all kinds of backgrounds on a daily basis. In my opinion for a successful collaboration, not only the field of study and the professional knowledge are important, it is also important to be curious, open and self-reflecting.")
      ),
      4 => array(
        'question' => array(
          "Gibt es bei Sika Möglichkeiten innerhalb der Teilbereiche zu wechseln, z.B. von F&ampE in die Produktion oder ins Marketing?",
          "Are there possibilities to switch fields within Sika, e.g. from R&ampD into production or marketing?"),
        'answer' => array(
          "Ja, diese Möglichkeit wird von Sika gelebt, unterstützt und gefördert. So kann es durchaus geschehen, dass die alten Bürokollegen plötzlich wichtige Stakeholders werden und sich das Netzwerk innerhalb Sika in die verschiedensten Bereiche erweitert.",
          "Yes, this possibility is part of Sika and is supported. It can easily happen, that your former colleague from the office is suddenly an important stakeholder and your personal network within Sika expands into various different fields.")
      ),
      5 => array(
        'question' => array(
          "Was hat Sie dazu bewegt, sich Sika als Arbeitgeber auszusuchen? Haben Sie sich auf eine ausgeschriebene Stelle oder initiativ beworben?",
          "What made you chose Sika as an employer? Did you apply for an advertised position or was it a speculative application?"),
        'answer' => array(
          "Die Bewerbung war eher halb-initiativ…Als Materialwissenchaftlerin habe ich mich auf Polymere spezialisiert und wollte in der Industrie arbeiten. Am Ende meiner Dissertation habe ich einige Kollegen, die schon bei Sika arbeiteten, gefragt ob sie von einer freien Stelle in der Forschung und Entwicklung wissen. Glücklicherweise waren zu dem Zeitpunkt gerade zwei Stellen in der Klebstoffabteilung offen und eine davon hat sich angehört, wie mein Traumjob: 'Projektleitung im Automotive Bereich mit Kundenbetreuung'. Fliessend in Italienisch, Französisch, Deutsch und Englisch galten als Vorteil. Die sehr offene und gute Stimmung beim Vorstellungsgespräch haben mich ausserdem davon überzeugt für Sika zu arbeiten.",
          "The application was semi-speculative… As a material scientist, I was specialized on polymers and wanted to go into industry. At the end of my dissertation, I asked some of my former colleagues, which were already at Sika, if they knew anything about an opening in R&D. Luckily there were two open positions in the adhesives department and one of them sounded like my dream job. 'Project leader in the automotive section with customer support'. Being fluent in Italian, French, German and English were listed as advantage. The very open and positive mood at the interview also convinced me to work for Sika.")
      ),
      6 => array(
        'question' => array(
          "Gibt es Möglichkeiten sich aus erster Hand ein Bild von der Arbeit bei Sika zu machen, z.B. durch Praktika oder Kollaborationen mit Universitäten?",
          "Is there a way to get to know Sika first-hand - either via internships or collaborations with universities?"),
        'answer' => array(
          "Ja, im Schnitt haben wir ungefähr acht Praktikanten, die in den verschiedenen Bereichen innerhalb der Forschung und Entwicklung ein Praktikum absolvieren, in der Regel während drei bis maximal neun Monaten. Wir bieten auch 'Traineeship' Programme an. Diese Programme richten sich vor allem an Hochschulabsolventen, die bereit sind, langfristig ins Ausland zu gehen. Dafür werden sie während maximal 12 Monaten in der Sika Schweiz und 6 Monaten im Ausland ausgebildet, um dann eine lokale Aufgabe irgendwo im Ausland anzunehmen.<br>Ausserdem gibt es Fälle, bei denen Projekte durchgeführt werden, die in Zusammenarbeit mit Forschungsgruppen der Universitäten oder Fachhochschulen entstehen.",
          "Yes, on average we employ approximately eight interns, which work in various different areas within research&development, usually during three to nine months. We also offer 'Traineeship' programs. These programs are aimed at university graduates, which are willing to spend some time abroad. They are being trained for a maximum of 12 months at Sika Switzerland and 6 months abroad, with the goal to take up a permanent position abroad afterwards.<br>There are also cases in which projects are carried out together with universities or FHs.")
      ),
      7 => array(
        'question' => array(
          "Ihre Doktorarbeit beschäftigte sich mit der Immobilisierung von Enzymen auf Polymeren, das wirkt auf den ersten Blick recht weit von Ihrer jetzigen Tätigkeit entfernt. Gab es trotzdem Erfahrungen aus Ihrem Doktorat, die Sie bei Sika einbringen konnten?",
          "In your PhD-thesis you worked on immobilization of enzymes on polymers, on a first glance, this does not look very closely related to your current position. Were there anyways experiences from your PhD-work, which helped you at Sika?"),
        'answer' => array(
          "Ja, meine Doktorarbeit war sehr weit entfernt! Aber trotzdem habe ich sehr viele Erfahrungen aus meiner Dissertationszeit mitgenommen, die ich nicht missen möchte. Für mich waren die drei Jahre eine Zeit, in der ich sehr viel über mich selber gelernt habe, z.B. mich selber zu motivieren und meine psychischen und physischen Grenzen bei der Arbeit kennenzulernen. Ausserdem habe ich bei der Dissertation von meinem Doktorvater sehr viel in Bezug auf Arbeitsmethodik mitgenommen und gelernt klare Berichte und Vorträge innerhalb kurzer Zeiten zu verfassen. Einige damalige Laborkollegen sind heute noch ein wichtiger Teil meines privaten und beruflichen Netzwerkes. Für mich war also die Dissertationszeit eine tolle, wenn auch anstrengende Lebenserfahrung, die mich auf das spätere Arbeitsleben vorbereitete.",
          "My PhD-thesis was indeed very far from my current work! Nevertheless I was able to gather a lot of experiences during my PhD, which I wouldn’t want to miss. For me these three years were a time in which I learned a lot about myself, for instance how to motivate myself and where my mental and physical boundaries are, when it comes to work. My PA also taught me a lot about structuring your work and how to produce concise and clear reports or presentations in a short time. Some former labmates are today an important part of my private and professional network. For me the PhD was a fun, although also exhausting, experience, which prepared me for my later career.")
      ),
      8 => array(
        'question' => array(
          "Wie groß war die Umstellung, als Sie nach Ihrem Doktorat zu Sika gewechselt haben? Wird in der Industrie anders gearbeitet als an der Universität?",
          "How big was the change, when you came to Sika after your PhD? Does one work different in industry compared to university?"),
        'answer' => array(
          "Die Umstellung war sehr gross. Die Entscheidungen, die man in der Industrie trifft, können ganz andere Auswirkungen haben, als Entscheidungen, die während der Dissertation getroffen werden. Ein falsches 'Ja' in der Produktion kann schnell mal 200’000 – 300‘000 CHF kosten. Unterschiedlich ist auch, dass in der Industrie die Teamleistung enorm wichtig ist. Die sogenannten 'soft – skills', sind ein sehr wichtiger Bestandteil der täglichen Arbeit und wenn man das Glück hat, einen guten Mentor und/oder Chef bei der Arbeit zu haben, ist dies eine Bereicherung, die einem neue und andere Perspektiven eröffnen kann.",
          "The change was very big. The decisions you have to make in industry, have completely different consequences, compared to a PhD work. A wrong 'yes' in production can easily cost 200’000 to 300’000 CHF. Another difference is that teamwork is much more important. The so-called 'soft skills' are an important part of you daily work. If you are lucky to have a good mentor and/or boss at work, this really a great asset and opens completely new perspectives.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Ich empfehle viel Ehrlichkeit in den Vorstellungsgesprächen und in der Probezeit. Niemand hat ein Nutzen davon, wenn die falsche Person in der falschen Position eingesetzt ist. Nicht jeder kann und muss ein Leben lang im Labor arbeiten, nur weil man Chemie studiert hat. Ausserdem empfehle ich Bescheidenheit. Oft man kann man viel mehr von einem erfahrenen Laboranten lernen, als von 10 ETH Büchern.",
          "I recommend a lot of honesty in your interviews and the probation period. Nobody benefits, if the wrong person is in the wrong position. Just because you studied chemistry, it does not mean that you have to work in the lab for the rest of your life. I also recommend a bit of humility, you can usually learn much more from an experienced lab technician, than from 10 ETH-books.")
      ),
    ),
  );



include('../0_template/template.php');

?>
