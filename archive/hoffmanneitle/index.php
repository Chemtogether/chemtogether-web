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


$template['company_name'] = 'HOFFMANN EITLE';
$template['company_name_short'] = 'hoffmanneitle';
$template['logo_url'] = $awss3_archive.'/hoffmanneitle/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.hoffmanneitle.com','hoffmanneitle.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/hoffmann-eitle/','HOFFMANN EITLE');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'HOFFMANN EITLE is one of Europe’s leading firms specializing in the protection of intellectual property. With seven offices across Europe, the firm is one of the largest of its type. We advise our clients on all legal and technical issues regarding patent applications and patent prosecution and are well known for our expertise in opposition and litigation proceedings.<br> 
  More than 40 IP professionals work in our offices in the extended fields of chemistry and biochemistry, making it one of the strongest and most experienced private practice groups in this area. Our areas of competence take in pharmaceuticals, polymers, detergents & cosmetics, printing technologies, electrochemistry, semiconductors, plant protection, building materials, textiles, foodstuff and paper chemistry.<br>   
  Our client base is international on a global level, and our employees come from over 30 countries around the world, making HOFFMANN EITLE a culturally diverse workplace.
  ',
  'HOFFMANN EITLE is one of Europe’s leading firms specializing in the protection of intellectual property. With seven offices across Europe, the firm is one of the largest of its type. We advise our clients on all legal and technical issues regarding patent applications and patent prosecution and are well known for our expertise in opposition and litigation proceedings.<br> 
  More than 40 IP professionals work in our offices in the extended fields of chemistry and biochemistry, making it one of the strongest and most experienced private practice groups in this area. Our areas of competence take in pharmaceuticals, polymers, detergents & cosmetics, printing technologies, electrochemistry, semiconductors, plant protection, building materials, textiles, foodstuff and paper chemistry.<br>   
  Our client base is international on a global level, and our employees come from over 30 countries around the world, making HOFFMANN EITLE a culturally diverse workplace.
  ');
$template['we_offer'] = array(
  'The only route to becoming a patent attorney is by taking a position as a trainee, and being trained by an already-qualified patent attorney. We offer our trainees top-quality training (our pass rates for the Qualifying Exams are well above average), good long-term career perspectives and a dynamic and rewarding work environment.<br> 
  We also offer internships to allow potential applicants to get a feel of how it is to work as a patent attorney.
  ',
  'The only route to becoming a patent attorney is by taking a position as a trainee, and being trained by an already-qualified patent attorney. We offer our trainees top-quality training (our pass rates for the Qualifying Exams are well above average), good long-term career perspectives and a dynamic and rewarding work environment.<br> 
  We also offer internships to allow potential applicants to get a feel of how it is to work as a patent attorney.
  ');
$template['we_look'] = array(
  'Individuals with
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>a technical qualification at university level</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>excellent English skills (written and spoken)</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>first-rate technical comprehension</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>ability to analyze complex facts and present these in precise technical terms</td>
  </tr></table>
  ',
  'Individuals with
  <table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>a technical qualification at university level</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>excellent English skills (written and spoken)</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>first-rate technical comprehension</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>ability to analyze complex facts and present these in precise technical terms</td>
  </tr></table>
  ');



  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Adam Lacy',
    'img_url' => set_source($awss3_archive.'/hoffmanneitle/interview-2017-1', 'png', FALSE),
    'position' => array('Europäischer und Britischer Patentanwalt', 'European and British Patent Attorney'),

    'education' => array(
      0 => array(
        'date' => '2007',
        'desc' => array('MSc Chemie University of Oxford','MSc Chemistry at University of Oxford')
      ),
      1 => array(
        'date' => '2011',
        'desc' => array('PhD Chemie University of Oxford','PhD Chemistry at University of Oxford')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2013',
        'desc' => array('Beginn bei HOFFMANN EITLE','joined HOFFMANN EITLE')
      ),
      1 => array(
        'date' => '2016',
        'desc' => array('Europäischer Patentanwalt','European Patent Attorney')
      ),
      2 => array(
        'date' => '2017',
        'desc' => array('Britischer Patentanwalt','British Patent Attorney')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Europäischer und Britischer Patentanwalt bei HOFFMANN EITLE?",
          "What do you do as a European and British Patent Attorney at HOFFMANN EITLE?"),
        'answer' => array(
          "Ich berate unsere Kunden (hauptsächlich europäische, japanische oder amerikanische Firmen, die in der chemischen oder pharmazeutischen Forschung tätig sind) wie sie am besten ihr geistiges Eigentum in Europa verwalten. Dies beinhaltet das Entwerfen und Verfolgen von Patentanträgen genauso wie das Angreifen von Patenten der Konkurrenz. Im Rahmen dieser Aufgaben bin ich auch am Europäischen Patentamt bei Anhörungen zugegen und präsentiere unsere Fälle.",
          "I advise our clients (mostly European, Japanese, or American companies active in chemical or pharmaceutical research) how to best manage their intellectual property in Europe. This involves helping to draft and prosecute patent applications, and also attacking the patents of competitors. As part of this work, I attend hearings and present our cases at the European patent office.")
      ),
      1 => array(
        'question' => array(
          "Arbeiten Sie hauptsächlich in München oder ist Ihre Position mit vielen Reisen verbunden?",
          "Are you working in Munich most of the time or does your position entail a lot of traveling?"),
        'answer' => array(
          "Zur Zeit arbeite ich hauptsächlich in München, abgesehen von ein paar Überseereisen jedes Jahr. Der Reiseanteil hängt von den persönlichen Vorlieben und der Seniorität ab – manche meiner dienstälteren Kollegen reisen mindestens ein mal im Monat, entweder um an Konferenzen teilzunehmen oder um Kunden zu besuchen. Als Trainee bei HOFFMANN EITLE hat man die besondere Möglichkeit sechs Monate in unserer Niederlassung in London zu verbringen.",
          "At present, I mainly work in Munich, with a couple of trips abroad for work each year. The amount of traveling depends on personal preference and seniority: some of my more senior colleagues travel to visit clients or attend conferences worldwide as much as once a month. In addition, trainees at HOFFMANN EITLE have the opportunity to spend six months at our London office.")
      ),
      2 => array(
        'question' => array(
          "Warum haben Sie sich für eine Karriere als Patentanwalt entschieden?",
          "Why did you choose a career as a Patent Attorney?"),
        'answer' => array(
          "Der Teil der mir an der Forschung am meisten gefallen hat, war die Analyse der Resultate und die Vermittlung dieser – sei es schriftlich oder mündlich. Nachdem ich mich entschieden hatte die Forschung zu verlassen, war ich sehr daran interessiert eine Karriere zu finden, in der ich mich immernoch mit Forschung und neuen wissenschaftlichen Entwicklungen beschäftigen konnte. Gleichzeitig wollte ich einen größeren Schwerpunkt auf meine kommunikativen Fähigkeiten setzen. Ich war ausserdem schon in jungen Jahren mit der Thematik der Patente in Kontakt gekommen, da mein Vater selbst Erfinder war. Es war also ein sehr natürlicher Schritt, sich mit dem Patentrecht zu beschäftigen.",
          "The part of research which I most enjoyed was analyzing the results we had obtained, and communicating them in writing or orally. After deciding to leave research, I was keen to find a career in which I could continue to work with research and new scientific developments, at the same time as placing more emphasis on my communication skills. I had an awareness of the patent profession from a young age, because my father was an inventor. So it seemed a natural step to me to move into patent law.")
      ),
      3 => array(
        'question' => array(
          "Gibt es viele Chemiker bei HOFFMANN EITLE? Wie wichtig ist der wissenschaftliche Hintergrund in Ihrem Arbeitsgebiet?",
          "Are there many chemists at HOFFMANN EITLE? How important is the specific scientific background in your field of work?"),
        'answer' => array(
          "Wir haben insgesamt circa 50 Chemiker und Biochemiker bei HOFFMANN EITLE. Ein fundierter wissenschaftlicher Hintergrund ist essentiell für unsere Arbeit, da wir den Grossteil unserer Zeit damit verbringen über unser jeweiliges Fachgebiet nachzudenken.",
          "We have a total of approximately 50 chemists and biochemists at HOFFMANN EITLE. Having a strong scientific background is essential to our work, because we spend most of our time thinking about science.")
      ),
      4 => array(
        'question' => array(
          "Kommen Sie während Ihrer Tätigkeit als Patentanwalt auch mit Gebieten der Chemie in Kontakt in denen Sie selber tätig waren – sei es als Doktorand oder PostDoc?",
          "During you work as Patent Attorney, do you encounter the fields of organic chemistry in which you worked as a PhD student or as a PostDoc?"),
        'answer' => array(
          "Ja, ich habe an mehreren Fällen gearbeitet, die sich mit neuen synthetisch-organischen Methoden beschäftigt haben und betreue mehrere Fälle in der Pharmazie. Zusätzlich hatte ich die Möglichkeit in andere Gebiete der Chemie vorzudringen, die mir in meiner Forschungskarriere bisher nicht begegnet waren, wie zum Beispiel Fluorchemie und Papierchemie.",
          "Yes, I have worked on several cases directed to new synthetic organic methods and handle many cases in the pharmaceutical field. In addition, I have also had opportunities to branch out into new fields of chemistry which I had not encountered in my research career, such as fluorine and paper chemistry.")
      ),
      5 => array(
        'question' => array(
          "Was hat Sie dazu bewegt sich HOFFMANN EITLE als Arbeitgeber zu suchen? Wie verlief die Bewerbung – haben Sie sich auf eine ausgeschriebene Stelle beworben oder war es eine Initiativbewerbung?",
          "What led you to choose HOFFMANN EITLE as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
        'answer' => array(
          "Ich habe mich bei HOFFMANN EITLE beworben, da es eine der größten und die internationalste der Patentrechtskanzleien in Europa ist und ausserdem einen exzellenten Ruf hat – vorallem in der Chemie.<br><br>Ich reichte eine Initiativbewerbung ein und wurde daraufhin zu einem Bewerbungsgespräch in München eingeladen. Kurze Zeit später wurde mir eine Stelle angeboten.",
          "I chose to apply to HOFFMANN EITLE as they are one of the largest and most international patent law firms in Europe, and have an excellent reputation in chemistry in particular.<br><br>I made a speculative application to HOFFMANN EITLE. I was then invited to an interview in their Munich office, and was offered a position shortly after.")
      ),
      6 => array(
        'question' => array(
          "Wie einfach war der Wechsel von Ihrer PostDoc-Stelle zu HOFFMANN EITLE? Wie unterscheidet sich die Arbeit in einer Forschungsgruppe in der organischen Chemie von Ihrer jetzigen Arbeitsumgebung?",
          "How easy was the transition from your postdoctoral position to HOFFMANN EITLE? How does work in an organic chemistry group differ from your current work environment?"),
        'answer' => array(
          "Der Übergang fiel mir relative leicht, da ich die Arbeit sehr spannend fand. Das internationale Arbeitsumfeld war ebenfalls sehr ähnlich zu meiner Umgebung, die ich an der ETH vorfand. Trotzdem muss man sagen, auch wenn wir uns täglich mit Forschung auseinandersetzten – die tägliche Arbeit unterscheidet sich sehr von der Arbeit im Labor. Zum Beispiel führen wir keine Experimente selber durch, obwohl wir manchmal welche für unsere Kunden entwerfen. Patentanwälte arbeiten ausserdem normalerweise allein, während man in einem Labor ständig im Kontakt mit anderen Menschen steht. Zusätzlich gibt es sehr viel zu lernen in den drei bis vier Jahren Ausbildungszeit, was schon ein Unterschied zu einer PostDoc-Tätigkeit ist, bei der man schon sehr viele Jahre Erfahrung mitbringt.",
          "The transition was relatively easy for me, as I found the work very interesting and the international working environment similar to that which I had enjoyed at ETH. Having said this, although we do work with research, the day-to-day work is very different to lab work. For example, we do not carry out any experiments ourselves, although we sometimes design experiments for our clients. Also, Patent Attorneys tend to work by themselves most of the day, whereas working in a lab brings you constantly into contact with other people. In addition, there is a lot to learn during the three to four year training period, which is a big change from working as a postdoc in a field in which you have several years of experience.")
      ),
      7 => array(
        'question' => array(
          "Arbeiten Sie ausschliesslich in Englisch oder muss ein Patentanwalt auch andere Sprachen beherrschen?",
          "Do you only work in English or does a Patent Attorney need to be knowledgeable of more languages?"),
        'answer' => array(
          "Die Arbeitssprache bei HOFFMANN EITLE ist Englisch. Es ist nicht notwendig andere Spreachen zu beherrschen um als Patentanwalt tätig zu sein. Es schadet aber auch nicht – im Gegenteil, es gibt immer wieder Möglichkeiten in denen es von Vorteil ist andere Sprachen zu beherrschen. Für uns besonders interessante Sprachen sind: Deutsch, Französisch, Italienisch, Russisch, Japanisch, Koreanisch und Chinesisch.",
          "The working language at HOFFMANN EITLE is English. It is not necessary to know any other languages to work as a Patent Attorney. Having said this, opportunities do arise to use other languages, so they are always an asset! Additional languages which are of particular interest to us are German, French, Dutch, Italian, Spanish, Russian, Japanese, Korean, and Chinese.")
      ),
      8 => array(
        'question' => array(
          "Gibt es Praktika oder Programme, welche es Studenten oder Absolventen erlauben, sich aus erster Hand ein Bild von der Arbeit bei HOFFMANN EITLE zu machen?",
          "Are there internships or other programs, that would allow students or graduates to see first-hand how it is to work at HOFFMANN EITLE?"),
        'answer' => array(
          "HOFFMANN EITLE bietet das Jahr über Praktika an, die es potentiellen Bewerbern erlauben, sich selber ein Bild von der Arbeit als Patentanwalt zu machen. Praktikanten bei HOFFMANN EITLE können sich darauf freuen mit einem Betreuer an verschiedenen Fällen zu arbeiten und haben auch die Möglichkeit diesen zu mündlichen Anhörungen an das europäische Patentamt zu begleiten. ",
          "HOFFMANN EITLE offer internships throughout the year, to allow potential applicants to get a feel of how it is to work as a Patent Attorney. Interns at HOFFMANN EITLE can expect to work together with a supervisor on various cases, and also have opportunities to accompany our Patent Attorneys to oral proceedings at the European Patent Office.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Kommen Sie vorbei und besuchen Sie uns an der Chemtogether!",
          "Come by and meet us at Chemtogether!")
      ),
    ),
  );


include('../0_template/template.php');

?>
