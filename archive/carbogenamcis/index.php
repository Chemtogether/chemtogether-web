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


$template['company_name'] = 'CARBOGEN AMCIS';
$template['company_name_short'] = 'carbogenamcis';
$template['logo_url'] = set_source($awss3_archive.'/carbogenamcis/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.carbogen-amcis.com/home.asp','carbogen-amcis.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/carbogen-amcis/','CARBOGEN AMCIS');
$template['mail'] = array('bewerbung','carbogen-amcis.com');

$template['we_are'] = array(
  'CARBOGEN AMCIS is a leading service provider in the area of product and process development, including the commercial production of active ingredients for the pharmaceutical and biopharmaceutical industries. We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz), as well as locations in Riom (FR), Manchester (UK), Shanghai (CN) and Veenendaal (NL).',
  'CARBOGEN AMCIS is a leading service provider in the area of product and process development, including the commercial production of active ingredients for the pharmaceutical and biopharmaceutical industries. We have 4 facilities across Switzerland (Aarau, Hunzenschwil, Bubendorf, and Vionnaz), as well as locations in Riom (FR), Manchester (UK), Shanghai (CN) and Veenendaal (NL).');
$template['we_offer'] = array(
  'We are committed to providing an inclusive and rewarding work environment that acknowledges the efforts of outstanding and long-term employees. We highly support continuing education and further training of our staff and encourage our staff’s professional career. Our organization also allows a
  cross-departmental development within the company.',
  'We are committed to providing an inclusive and rewarding work environment that acknowledges the efforts of outstanding and long-term employees. We highly support continuing education and further training of our staff and encourage our staff’s professional career. Our organization also allows a
  cross-departmental development within the company.');
$template['we_look'] = array(
  'We are looking for highly motivated individuals prepared to expand their high-class education & knowledge in Pharma Industry. You should be willing to add upon what you have already learned helping us and our worldwide customers to bring their products to the market relating to all aspects of modern drug development in terms of all chemistry, analytics, production, quality and regulatory aspects.',
  'We are looking for highly motivated individuals prepared to expand their high-class education & knowledge in Pharma Industry. You should be willing to add upon what you have already learned helping us and our worldwide customers to bring their products to the market relating to all aspects of modern drug development in terms of all chemistry, analytics, production, quality and regulatory aspects.');

$i=0;

$template['interview']['2021'][$i++] = array(
  'name' => 'Dr. Volker Wolfart',
  'img_url' => set_source($awss3_archive.'/carbogenamcis/interviewee_2021_1','png', FALSE),
  'position' => array('Senior Scientific Advisor','Senior Scientific Advisor'),

  'education' => array(
    0 => array(
      'date' => '1995-1997',
      'desc' => array('PhD in Chemistry with Prof. Dr. R. Gleiter at Universität Heidelberg','PhD in Chemistry with Prof. Dr. R. Gleiter at Universität Heidelberg'),
    ),
    1 => array(
      'date' => '1989-1995',
      'desc' => array('Diploma in Chemistry at Universität Heidelberg','Diploma in Chemistry at Universität Heidelberg'),
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2014',
      'desc' => array('Business Development at CARBOGEN AMCIS AG','Business Development at CARBOGEN AMCIS AG'),
    ),
    1 => array(
      'date' => '2011-2014',
      'desc' => array('Senior Scientific Advisor at CARBOGEN AMCIS AG','Senior Scientific Advisor at CARBOGEN AMCIS AG'),
    ),
    2 => array(
      'date' => '2008-2011',
      'desc' => array('Head of Process Research & Development at CAROGEN AMCIS AG','Head of Process Research & Development at CAROGEN AMCIS AG'),
    ),
    3 => array(
      'date' => '2000-2011',
      'desc' => array('Group Manager API Synthesis at CARBOGEN AMCIS AG','Group Manager API Synthesis at CARBOGEN AMCIS AG'),
    ),
    4 => array(
      'date' => '1998-2000',
      'desc' => array('Project team leader API Synthesis at CARBOGEN AMCIS AG','Project team leader API Synthesis at CARBOGEN AMCIS AG'),
    ),
    5 => array(
      'date' => '1980-1983',
      'desc' => array('Chemical laboratory assistant at BASF','Chemical laboratory assistant at BASF'),
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was ist ihre derzeitige Tätigkeit bei CARBOGEN AMCIS?','Was ist ihre derzeitige Tätigkeit bei CARBOGEN AMCIS?'),
      'answer' => array('Meine derzeitige Jobbezeichnung ist «Senior Scientific Advisor», 
      d.h. eine Instanz für wissenschaftliche Fragen. Dazu bin ich der Koordinator für zwei der vier Schweizer Niederlassungen 
      und im Hauptgeschäft für die Wachstumsprojekte (Business Development) der Firma verantwortlich.',
      'Meine derzeitige Jobbezeichnung ist «Senior Scientific Advisor», 
      d.h. eine Instanz für wissenschaftliche Fragen. Dazu bin ich der Koordinator für zwei der vier Schweizer Niederlassungen 
      und im Hauptgeschäft für die Wachstumsprojekte (Business Development) der Firma verantwortlich.'),
    ),
    1 => array(
      'question' => array('Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
      'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?'),
      'answer' => array('Auf jeden Fall mit uns in Kontakt treten und sich persönlich erkundigen, wie die momentane Situation aussieht. 
      Wir sind stetig am Wachsen und suchen frische und begeisterungsfähige Persönlichkeiten. 
       …und natürlich zu uns auf die Chemtogether 2021 kommen.',
       'Auf jeden Fall mit uns in Kontakt treten und sich persönlich erkundigen, wie die momentane Situation aussieht. 
      Wir sind stetig am Wachsen und suchen frische und begeisterungsfähige Persönlichkeiten. 
       …und natürlich zu uns auf die Chemtogether 2021 kommen.'),
    ),
    2 => array(
      'question' => array('Wie sieht Ihr klassischer Arbeitstag bei CARBOGEN AMCIS aus?','Wie sieht Ihr klassischer Arbeitstag bei CARBOGEN AMCIS aus?'),
      'answer' => array('Den klassischen Tag gibt es nicht; es ist sehr abwechslungsreich bei CARBOGEN AMCIS zu arbeiten. 
      Einmal der Umgang mit den Kunden, Behörden, Dienstleistern und natürlich Arbeitskollegen/-innen aus den verschiedenen Abteilungen. 
      Chemie spielt bei mir nur noch eine untergeordnete Rolle, aber sie ist dennoch bei manchen Entscheidungen sehr wichtig.',
      'Den klassischen Tag gibt es nicht; es ist sehr abwechslungsreich bei CARBOGEN AMCIS zu arbeiten. 
      Einmal der Umgang mit den Kunden, Behörden, Dienstleistern und natürlich Arbeitskollegen/-innen aus den verschiedenen Abteilungen. 
      Chemie spielt bei mir nur noch eine untergeordnete Rolle, aber sie ist dennoch bei manchen Entscheidungen sehr wichtig.'),
    ),
    3 => array(
      'question' => array('Wie kam es, dass sie nun für CARBOGEN AMCIS arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
      'Wie kam es, dass sie nun für CARBOGEN AMCIS arbeiten? Wie sind sie auf die Firma aufmerksam geworden?'),
      'answer' => array('Ich war gerade im Post Doc mit der BASF in Ludwigshafen und mein Doktorvater fand eine Anzeige in der Basler Zeitung,
       die CARBOGEN AMCIS geschaltet hatte. 
       Der Schwerpunkt Organische Chemie und die Fragestellungen im Bereich organische Synthese haben mich gereizt und mich zur Bewerbung 
       motiviert.',
       'Ich war gerade im Post Doc mit der BASF in Ludwigshafen und mein Doktorvater fand eine Anzeige in der Basler Zeitung,
       die CARBOGEN AMCIS geschaltet hatte. 
       Der Schwerpunkt Organische Chemie und die Fragestellungen im Bereich organische Synthese haben mich gereizt und mich zur Bewerbung 
       motiviert.'),
    ),
    4 => array(
      'question' => array('Wie lief ihr Bewerbungsprozess bei CARBOGEN AMCIS?','Wie lief ihr Bewerbungsprozess bei CARBOGEN AMCIS?'),
      'answer' => array('Ich wurde 1998 per Email eingeladen und durfte mich dann vor Ort persönlich vorstellen.
       Dabei hatte ich Kontakt mit dem Abteilungsleiter für die chemische Entwicklung, 
       diversen künftigen Kollegen und dem damaligen Human Resources. Ausserdem konnte ich meine Expertise und Doktorarbeit 
       im Kreise der Fachabteilung per Vortrag präsentieren. Daran hat sich bis heute wenig geändert.',
       'Ich wurde 1998 per Email eingeladen und durfte mich dann vor Ort persönlich vorstellen.
       Dabei hatte ich Kontakt mit dem Abteilungsleiter für die chemische Entwicklung, 
       diversen künftigen Kollegen und dem damaligen Human Resources. Ausserdem konnte ich meine Expertise und Doktorarbeit 
       im Kreise der Fachabteilung per Vortrag präsentieren. Daran hat sich bis heute wenig geändert.'),
    ),
    5 => array(
      'question' => array('Was glauben Sie unterscheidet CARBOGEN AMCIS von anderen Chemiefirmen? 
      Was sind die drei grössten Vorteile von CARBOGEN AMCIS?',
      'Was glauben Sie unterscheidet CARBOGEN AMCIS von anderen Chemiefirmen? 
      Was sind die drei grössten Vorteile von CARBOGEN AMCIS?'),
      'answer' => array('Uns unterscheidet, dass wir einen sehr starken Kundenfokus haben. Das macht es, je nach Herkunft und Background des Kunden, sehr spannend. Das Ziel ist ganz klar, den Kunden optimal zu bedienen. Ausserdem sind wir eine der wenigen weltweiten Spezialisten für hochaktive Arzneistoffe. Durch unsere internationale Vernetzung mit der Corporate Struktur (i.e. unsere weltweiten Standorte), haben wir einige schnelle Alternativen im Vergleich zu anderen Firmen der Branche. Die drei grössten Vorteile:

      <table class="fa-table">
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Ausgezeichnetes Arbeitsklima</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Abwechslungsreiches Arbeitsfeld und Entwicklungsmöglichkeiten</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>High Class wissenschaftliches Arbeiten und Know-How </td>
      </tr></table>',
      'Uns unterscheidet, dass wir einen sehr starken Kundenfokus haben. Das macht es, je nach Herkunft und Background des Kunden, sehr spannend. Das Ziel ist ganz klar, den Kunden optimal zu bedienen. Ausserdem sind wir eine der wenigen weltweiten Spezialisten für hochaktive Arzneistoffe. Durch unsere internationale Vernetzung mit der Corporate Struktur (i.e. unsere weltweiten Standorte), haben wir einige schnelle Alternativen im Vergleich zu anderen Firmen der Branche. Die drei grössten Vorteile:

      <table class="fa-table">
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Ausgezeichnetes Arbeitsklima</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Abwechslungsreiches Arbeitsfeld und Entwicklungsmöglichkeiten</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>High Class wissenschaftliches Arbeiten und Know-How </td>
      </tr></table>')
    ),
    6 => array(
      'question' => array('Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?',
      'Was haben sie studiert und haben Sie sich durch das Studium gut auf Ihre jetzige Tätigkeit vorbereitet gefühlt?'),
      'answer' => array('Das Studium rüstet gut für die Arbeit in der organischen Synthese aus. 
      Ich habe in Heidelberg studiert/promoviert. Dort wird die Organische Synthese gepflegt und hat lange Tradition.
       Zusätzlich braucht es aber später im Beruf Verständnis für GMP, Ökonomie, Prozesssicherheit und Personalführung, 
       die i.d.R. im Studium nicht vermittelt werden. Dazu geben wir natürlich künftigen Kollegen*innen Möglichkeiten zur Weiterbildung. 
       Was jedoch zählt, sind die «Soft Skills», wie der Umgang mit Kollegen und Menschen generell. 
       Da kann man schon punkten, wenn man/frau dies auch im Studium schon geleistet hat; Bsp. durch Assistenztätigkeit,
        Tutorbetrieb oder andere nebenamtliche Tätigkeiten.',
        'Das Studium rüstet gut für die Arbeit in der organischen Synthese aus. 
      Ich habe in Heidelberg studiert/promoviert. Dort wird die Organische Synthese gepflegt und hat lange Tradition.
       Zusätzlich braucht es aber später im Beruf Verständnis für GMP, Ökonomie, Prozesssicherheit und Personalführung, 
       die i.d.R. im Studium nicht vermittelt werden. Dazu geben wir natürlich künftigen Kollegen*innen Möglichkeiten zur Weiterbildung. 
       Was jedoch zählt, sind die «Soft Skills», wie der Umgang mit Kollegen und Menschen generell. 
       Da kann man schon punkten, wenn man/frau dies auch im Studium schon geleistet hat; Bsp. durch Assistenztätigkeit,
        Tutorbetrieb oder andere nebenamtliche Tätigkeiten.'),
    ),
  ),
);






$i=0;
  $template['interview'][2019][$i++] = array(
    'name' => 'Dr. Volker Wolfart',
    'img_url' => set_source($awss3_archive.'/carbogenamcis/interviewee_2019_1', 'png', FALSE),
    'position' => array('Business Development','Business Development'),
  
    'education' => array(
      0 => array(
        'date' => '1995-1997',
        'desc' => array('PhD in Chemistry with Prof. Dr. R. Gleiter at Universität Heidelberg','PhD in Chemistry with Prof. Dr. R. Gleiter at Universität Heidelberg'),
      ),
      1 => array(
        'date' => '1989-1995',
        'desc' => array('Diploma in Chemistry at Universität Heidelberg','Diploma in Chemistry at Universität Heidelberg'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2014',
        'desc' => array('Business Development at CARBOGEN AMCIS AG','Business Development at CARBOGEN AMCIS AG'),
      ),
      1 => array(
        'date' => '2011-2014',
        'desc' => array('Senior Scientific Advisor at CARBOGEN AMCIS AG','Senior Scientific Advisor at CARBOGEN AMCIS AG'),
      ),
      2 => array(
        'date' => '2008-2011',
        'desc' => array('Head of Process Research & Development at CAROGEN AMCIS AG','Head of Process Research & Development at CAROGEN AMCIS AG'),
      ),
      3 => array(
        'date' => '2000-2011',
        'desc' => array('Group Manager API Synthesis at CARBOGEN AMCIS AG','Group Manager API Synthesis at CARBOGEN AMCIS AG'),
      ),
      4 => array(
        'date' => '1998-2000',
        'desc' => array('Project team leader API Synthesis at CARBOGEN AMCIS AG','Project team leader API Synthesis at CARBOGEN AMCIS AG'),
      ),
      5 => array(
        'date' => '1980-1983',
        'desc' => array('Chemical laboratory assistant at BASF','Chemical laboratory assistant at BASF'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What are your current responsibilities in the area of business development at
        CARBOGEN AMCIS AG?','What are your current responsibilities in the area of business development at
        CARBOGEN AMCIS AG?'),
        'answer' => array('My responsibility is to ensure the company grows to its full potential on the market where
        my focus is currently set on Switzerland.','My responsibility is to ensure the company grows to its full potential on the market where
        my focus is currently set on Switzerland.'),
      ),
      1 => array(
        'question' => array('You started working at CARBOGEN AMCIS AG in 1998. Into which fields did you gain
        insight and were you able to follow your career aspirations throughout that time?','You started working at CARBOGEN AMCIS AG in 1998. Into which fields did you gain
        insight and were you able to follow your career aspirations throughout that time?'),
        'answer' => array('Back then, my main field of action back was organic syntheses for clients around the globe. I
        became the team leader of a small team to serve pharma project tasks including doing
        chemistry in the lab, scaling it up to multi kilograms and evaluating and finding solutions for
        synthetic approaches to a new drug. This path more or less matched my aspirations.','Back then, my main field of action back was organic syntheses for clients around the globe. I
        became the team leader of a small team to serve pharma project tasks including doing
        chemistry in the lab, scaling it up to multi kilograms and evaluating and finding solutions for
        synthetic approaches to a new drug. This path more or less matched my aspirations.'),
      ),
      2 => array(
        'question' => array('How did the company change over the range of time and what are your visions for
        the future?','How did the company change over the range of time and what are your visions for
        the future?'),
        'answer' => array('Starting with slightly more than 50 employees we grew into almost 600 employees today.
        We started with one site in Aarau and extended to four sites in Switzerland and five
        additional ones in Europe and Asia. The basic business model is still the same. What has
        changed are the responsibilities, the breadth of project types, the number of clients and the
        value of projects. The vision is to grow at a healthy pace and to attain new drugs for us to
        develop and manufacture which are also in the area of ADCs (Antibody Drug Conjugates).','Starting with slightly more than 50 employees we grew into almost 600 employees today.
        We started with one site in Aarau and extended to four sites in Switzerland and five
        additional ones in Europe and Asia. The basic business model is still the same. What has
        changed are the responsibilities, the breadth of project types, the number of clients and the
        value of projects. The vision is to grow at a healthy pace and to attain new drugs for us to
        develop and manufacture which are also in the area of ADCs (Antibody Drug Conjugates).'),
      ),
      3 => array(
        'question' => array('A lot of your past and present work at the company dealt with regulatory affairs,
        leading and managing teams and building new company sites. How much of “natural
        science” do you still encounter each day?','A lot of your past and present work at the company dealt with regulatory affairs,
        leading and managing teams and building new company sites. How much of “natural
        science” do you still encounter each day?'),
        'answer' => array('I only have very little contact with practical science in daily life. However, you cannot grow a
        scientific company not knowing where it all comes from.','I only have very little contact with practical science in daily life. However, you cannot grow a
        scientific company not knowing where it all comes from.'),
      ),
      4 => array(
        'question' => array('After finishing your degree in Chemistry at the Ruprecht-Karls-Universität Heidelberg,
        you obtained a PhD and worked as postdoctoral researcher at BASF before joining
        CARBOGEN AMCIS AG. Is it still necessary nowadays to finish a PhD or Postdoc before
        joining the company?','After finishing your degree in Chemistry at the Ruprecht-Karls-Universität Heidelberg,
        you obtained a PhD and worked as postdoctoral researcher at BASF before joining
        CARBOGEN AMCIS AG. Is it still necessary nowadays to finish a PhD or Postdoc before
        joining the company?'),
        'answer' => array('Not at all. What is important is your academic background, your personality and your
        willingness to add upon your current knowledge.','Not at all. What is important is your academic background, your personality and your
        willingness to add upon your current knowledge.'),
      ),
      5 => array(
        'question' => array('You have been with CARBOGEN AMCIS AG for more than 20 years. In your opinion,
        what does the company offer employees so that you have remained loyal to the
        company for so long? Are you able to find a good balance between work and your
        outside life?','You have been with CARBOGEN AMCIS AG for more than 20 years. In your opinion,
        what does the company offer employees so that you have remained loyal to the
        company for so long? Are you able to find a good balance between work and your
        outside life?'),
        'answer' => array('The company offers an interesting field to establish new crafts and talents and offers a very
        good working environment. The team spirits are excellent, and I still feel like I am working
        with the best people there are out there!
        Yes, CARBOGEN AMCIS AG offers a good work-life balance to me. If I need some inspiration,
        I grab my fishing gear and sit at one of the beautiful lakes to receive new impressions.','The company offers an interesting field to establish new crafts and talents and offers a very
        good working environment. The team spirits are excellent, and I still feel like I am working
        with the best people there are out there!
        Yes, CARBOGEN AMCIS AG offers a good work-life balance to me. If I need some inspiration,
        I grab my fishing gear and sit at one of the beautiful lakes to receive new impressions.'),
      ),
      6 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or
        internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or
        internships?'),
        'answer' => array('First: Know what you want for your career. Think of where to start but keep the long-term
        goal in mind. Where do you see yourself in 10 years, for example?
        Second: Be aware that YOU have something to offer too, e.g. your working power, your
        talents and your scientific education. These are things that your employer will benefit from
        Third: Be bold and humble at the same time. For instance, call the HR people of the
        companies you are interested in and talk to them about your plans and intentions. Maintain
        an attitude of willingness to learn.
        Fourth: Be yourself and present yourself to those interested in you.','First: Know what you want for your career. Think of where to start but keep the long-term
        goal in mind. Where do you see yourself in 10 years, for example?
        Second: Be aware that YOU have something to offer too, e.g. your working power, your
        talents and your scientific education. These are things that your employer will benefit from
        Third: Be bold and humble at the same time. For instance, call the HR people of the
        companies you are interested in and talk to them about your plans and intentions. Maintain
        an attitude of willingness to learn.
        Fourth: Be yourself and present yourself to those interested in you.'),
      ),
    ),
  );

$i=0;
$template['interview']['2018'][$i++] = array(
  'name' => 'Dr. Emad El Sayed',
  'img_url' => set_source($awss3_archive.'/carbogenamcis/interviewee_2018_1', 'png', FALSE),
  'position' => array('Manager PR&D', 'Manager PR&D'),

  'education' => array(
    0 => array(
      'date' => '1999-2001',
      'desc' => array('Postdoktorat in asymmetrischer Synthese an der ETH Zürich', 'PostDoc in asymmetric synthesis at ETH Zurich')
    ),
    1 => array(
      'date' => '1994-1999',
      'desc' => array('Doktorat in katalytischer asymmetrischer Synthese an der Université de Genève', 'PhD in catalytic asymmetric synthesis at Université de Genève')
    ),
    2 => array(
      'date' => '1989-1994',
      'desc' => array('M.Sc. in Chemie an der University of Massachusetts und Alexandria University', 'M.Sc. in Chemistry at University of Massachusetts and Alexandria University')
    ),
    3 => array(
      'date' => '1985-1989',
      'desc' => array('B.Sc. in Chemie an der Alexandria University', 'B.Sc. in Chemistry at Alexandria University')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2015',
      'desc' => array('Manager PR&D bei CARBOGEN AMCIS', 'Manager PR&D at CARBOGEN AMCIS')
    ),
    1 => array(
      'date' => '2007-2015',
      'desc' => array('Senior Chemist bei CARBOGEN AMCIS', 'Senior Chemist at CARBOGEN AMCIS')
    ),
    2 => array(
      'date' => '2001-2006',
      'desc' => array('Project Chemist bei CARBOGEN AMCIS', 'Project Chemist at CARBOGEN AMCIS')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('Was sind Ihre Aufgaben als Manager Process Research & Development bei CARBOGEN AMCIS?',
                          'What are your responsibilities as Manager Process Research & Development at CARBOGEN AMCIS?'),
      'answer' => array('Ich fungiere als Plattform für den Informationsaustausch und unterstütze meine Gruppe aus Chemikern und Labortechnikern. In den Bereich meiner Zuständigkeit fallen auch das Überprüfen der Ressourcenverfügbarkeit, Vorstellungsgespräche neuer Gruppenmitglieder, die Schulung der Gruppenmitglieder und die Bearbeitung von Kundenanfragen. Zusätzlich vertrete ich die Firma bei Veranstaltungen.',
                        'I act as an information exchange platform and support my group of chemists and lab technicians. Some of my other responsibilities include the inspection of resource availabilities, recruitment interviews for new group members, training of group members and preparing and planning of customers’ requests for proposals. I also represent the company at events.')
    ),
    1 => array(
      'question' => array('Sie haben Chemie studiert. Beschäftigt CARBOGEN AMCIS auch Absolventen anderer Fachrichtungen (Chemieingenieure, Interdisziplinäre Naturwissenschaftler)?',
                          'You graduated with a degree in Chemistry. Does CARBOGEN AMCIS also employ graduates of other fields of study (Chemical Engineering, Interdisciplinary Sciences)?'),
      'answer' => array('Ja, neben der Mehrheit an Chemikern stellt CARBOGEN AMCIS auch Chemieingenieure, Biologen und Toxikologen (m/w) an.',
                        'Yes, CARBOGEN AMCIS also employs Chemical Engineers, Biologists as well as Toxicologists in addition to the majority of the Chemistry degree holders.')
    ),
    2 => array(
      'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                          'How does a typical work day in industry differ from one at university?'),
      'answer' => array('Die Arbeit in der Industrie unterscheidet sich deutlich von der an der Universität, obwohl die beiden Gebiete stark verbunden und voneinander abhängig sind. Das Leben in der Industrie ist durch zwei Aspekte gekennzeichnet.<br>
      Erstens ist der Umgang mit Menschen wichtig. Man hat mit Kollegen (aus der gleichen oder einer anderen Abteilung), Zulieferern, externen Technikern, Kunden (kleine bis grosse Unternehmen), Beratern und Behörden zu tun. Jede Gruppe hat ihre eigenen Erwartungen, Ziele, Interessen und Prioritäten.<br>      
      Zweitens sind die Prioritäten in der Industrie anders verteilt. Universitäten konzentrieren sich mehr auf die rein methodologische, wissenschaftliche Herangehensweise. In der Industrie ist der wissenschaftliche Aspekt nur einer von vielen. Wichtig sind vor allem die Durchführbarkeit, Atomeffizienz, Robustheit und Reproduzierbarkeit eines Prozesses. Weiters ist man natürlich an der Minimierung der Produktionszeit sowie der Rohstoffkosten interessiert.
      ',
                        'Work in the industry differs to great extent from the one at university, although the two fields are very much connected and interdependent from each other. There are two main aspects to industry life. Firstly, the human interaction is important. One interacts with colleagues (from the same or different departments), suppliers, external technicians, customers (big to small organizations), consultants and authorities. Each category has its expectations, targets and fields of interest and focus. <br>Secondly, the focus of activities is different. Universities tend to focus on the pure methodological and scientific approach. In industry the scientific approach is in the center of interest beside other aspects such as practicability, both atom and financial economies, robustness and reproducibility of processes, pragmatic solutions, reduction of manufacturing time and cost of goods, etc..')
    ),
    3 => array(
      'question' => array('Warum haben Sie sich CARBOGEN AMCIS als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                          'What made you choose CARBOGEN AMCIS as an employer? Can you describe how the application process worked for you?'),
      'answer' => array('Als noch relativ junger Chemiker gegen Ende meines Postdocs an der ETH Zürich war ich noch stark in Richtung einer akademischen Karriere ausgerichtet. Im Laufe mehrerer Vorstellungsgespräche in der Industrie habe ich allerdings schnell erkannt, dass es da noch ein ganz anderes Universum gibt, das immer noch mit der akademischen Welt zusammenhängt. Damals war die Industrie für mich noch völlig unbekannt. Im Jahr 2001, noch vor dem Zusammenschluss, war Carbogen Laboratories ein junges, dynamisches Unternehmen voller talentierter Chemikerinnen und Chemiker mit aussergewöhnlichem Innovationspotential. Aus diesem Grund hatte ich die Möglichkeit, mit dem Unternehmen mitzuwachsen und zusammen mit meinen Kolleginnen und Kollegen weitreichend dazu beizutragen, wofür CARBOGEN AMCIS heute bekannt ist.<br>
      Die Bewerbung selbst ist schon sehr lange her. Das Bewerbungsverfahren war dynamisch wie CARBOGEN AMCIS selbst: direkter Kontakt, Einladung zum Vorstellungsgespräch, Präsentation meiner Ph.D.- bzw. Postdoc-Arbeit. Wir haben ausgiebig über die ausgeschriebene Stelle gesprochen, alles in einer freundlichen, offenen Atmosphäre.',
                        'As still a middle young chemist just ending his Postdoc studies at ETH Zürich I was much focused on an academic career. I explored the option of an industrial career. It was during my different interviews in the industry that I quickly realized that there was another universe still related to and interacting with the academic world. The industry was totally unknown to me at that time. It was my eagerness to explore new fields that made me move more towards this industry. Back in 2001, (before the merger) Carbogen Laboratories was a young dynamic organization focused on innovation and it was full of talented chemists which offered extraordinary innovation potential. Accordingly, I had this unique opportunity to grow with, shape and contribute extensively together with my colleagues to what CARBOGEN AMCIS is known for today.<br>
                        As far as the application process is concerned: it was a very long time ago. The application process was as dynamic as CARBOGEN AMCIS is: direct contact, invitation to interview, oral presentation of my Ph.D. / Postdoc. work in English. Open discussions and description of the role of a Project Chemist, which was the position that I applied for at that time. In short a friendly, open and focused atmosphere.
                        ')
    ),
    4 => array(
      'question' => array('Welche Fähigkeiten und Qualitäten erwartet CARBOGEN AMCIS von Chemieabsolventen mit PhD/MSc.-Abschluss?',
                          'Which abilities and qualities does CARBOGEN AMCIS expect of Chemistry graduates with a Ph.D./M.Sc. degree?'),
      'answer' => array('Natürlich erwarten wir ein fundiertes chemisches Grundwissen. Sehr gute Englisch- und Deutschkenntnisse sind ein grosser Vorteil. Wir wünschen uns auch eine systematische Arbeitsweise, gleichzeitig aber mit innovativen Ansätzen.',
                        'Obviously we expect a deep and solid Chemistry knowledge background. Very good mastering of the English and German language is a big advantage. We encourage a systematic way of working but also at the same time with an innovative approach.')
    ),
    5 => array(
      'question' => array('Welche ausserfachlichen Kompetenzen sollten sich die Studierenden an der Universität aneignen um in einem Pharmaunternehmen wie CARBOGEN AMCIS erfolgreich zu sein?',
                          'Which soft skills should students try to acquire in the course of their studies to succeed in a pharmaceutical company like CARBOGEN AMCIS?'),
      'answer' => array('Kommunikations- und Präsentationsfähigkeiten, die Fähigkeit gut zuzuhören, Geduld und Konzentration. Von Vorteil sind auch eine pragmatische, lösungsorientierte Arbeitsweise, Flexibilität und Aufgeschlossenheit gegenüber neuen Themengebieten.',
                        'Some of the most important ones are communication and presentation skills, a strong ability to thoroughly listen rather than hearing, patience and the ability to remain focused. It’s also helpful to have a pragmatic, solution-oriented way of thinking, be flexible and open to learn in new fields.')
    ),
    6 => array(
      'question' => array('Sie haben vor 17 Jahren bei CARBOGEN AMCIS als Projektchemiker begonnen und seitdem verschiedene Karrierestufen durchlaufen. Welche Aufstiegsmöglichkeiten und Karrierewege gibt es in ihrem Unternehmen?',
                          'Since joining CARBOGEN AMCIS 17 years ago as a Project Chemist, you have held several different positions within the company. Could you describe some of the career opportunities that exist within the company?'),
      'answer' => array('Die Möglichkeiten sind oft von der Abteilung abhängig. Generell bieten wir folgende Chancen:<table class="fa-table">
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Praktische Aufgaben (z.B. Projektchemiker)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Projektmanagement (z.B. Organisation technischer Angelegenheiten zwischen verschiedenen Standorten)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Key Account Management (z.B. Betreuung der Grosskunden und Ansprechpartner bei Fragen und Unsicherheiten, Beratung und Erarbeitung von bestmöglichen Lösungsvorschlägen im Sinne der Kunden)</td>
      </tr>
      <tr>
      <td><i class="fas fa-fw fa-chevron-right"></td>
      <td>Marketing und Vertrieb (z.B. Vertreter von CARBOGEN AMCIS in der Schweiz und im Ausland und unser Leistungsvermögen, unsere Stärken und unsere Vielfältigkeit unseren zukünftigen Kunden präsentieren)</td>
      </tr>
      </table>Weitere Möglichkeiten gibt es in den Bereichen QC&A (Quality Control and Analytical Development), QA (Quality Assurance), QS (Quality Systems) und der Evaluation von Kundenanfragen.
      ',
                        'Career opportunities can slightly differ according to the department (within CARBOGEN AMCIS) in question. Generally, we offer the following opportunities:<table class="fa-table">
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Hands-on responsibilities (e.g. Project Chemist position)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Project Management activities (e.g. organization of technical activities between different sites)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Key Account Managers (e.g. primary contact person for a certain given customer collecting their questions and uncertainties and guiding them through the organization to find the best fit for fulfilling their expectations and needs)</td>
                        </tr>
                        <tr>
                        <td><i class="fas fa-fw fa-chevron-right"></td>
                        <td>Sales and Marketing (e.g. representing CARBOGEN AMCIS inside and outside Switzerland - promoting our organizational capabilities, strengths and diversities to our future customers)</td>
                        </tr>
                        </table>
                        Additional opportunities include QC&A (Quality Control and Analytical Development), QA (Quality Assurance), QS (Quality Systems) and Evaluation of Customers request.
                          ')
    ),
    7 => array(
      'question' => array('Direkt vor Ihrem Einstieg bei CARBOGEN AMCIS haben Sie einen zweijährigen Postdoc an der ETH absolviert. Hat das für Sie den Einstieg in das Unternehmen erleichtert oder hätten Sie denselben Weg auch direkt nach Ihrem Ph.D.-Abschluss einschlagen können?',
                          'Before joining CARBOGEN AMCIS you spent two years as a postdoc at ETH. Did this help you in the recruitment process or could you have entered the same career path right after your Ph.D.?'),
      'answer' => array('Mein Postdoc an der ETH hat meine wissenschaftlichen Kenntnisse weiter gefestigt und mir so eine noch bessere Grundlage für meine Entwicklung bei CARBOGEN AMCIS verschafft. Ich hätte auch direkt nach meinem Ph.D. bei CARBOGEN AMCIS anfangen können, aber für mich persönlich war der Postdoc auf jeden Fall von Vorteil.',
                        'My postdoc at ETH helped me to stand on an even more solid ground with my scientific as well as instrumental knowledge gained at CARBOGEN AMCIS. I could have joined CARBOGEN AMCIS directly after the Ph.D. but the postdoc was for my case at least an advantage.')
    ),
    8 => array(
      'question' => array('Sie haben Ihr Studium in Ägypten, den USA und der Schweiz absolviert. Legen Sie als Arbeitgeber besonderen Wert darauf, dass man als Bewerber*in Auslandserfahrung vorzuweisen hat?',
                          'You studied at universities in Egypt, the USA and Switzerland. Is it important for you as an employer that an applicant has international experience?'),
      'answer' => array('In Frage 6 ging es um Kommunikationsfähigkeiten. Diese sind sehr wichtig (wie auch in Frage 3 beschrieben) weil Kommunikation in der Industrie über verschiedene Leute mit unterschiedlicher Ausbildung, Erfahrung und kulturellem Hintergrund geht. Zusätzlich wird oft in Fremdsprachen kommuniziert. Auslandserfahrung ist zwar kein Muss, aber auf jeden Fall ein Vorteil.',
                        'In question 6 we spoke about communication skills. Communication skills are very important (as also described in the answer to question 3) because in industry communication flows through different people with a very broad range of experience, education, intellectual as well as cultural aspects. In addition one would deal with persons with different languages. Although having an international experience has its advantage, it is not a must.')
    ),
    9 => array(
      'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                          'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
      'answer' => array('Erweitern Sie laufend Ihr fachliches Wissen. Hören Sie gut zu und überlegen Sie sich Ihre Antwort gut. Denken Sie kreativ. Erinnern Sie sich daran, dass was Sie sehen oder glauben zu verstehen, wie die Sterne am Himmel, nicht unbedingt dem entspricht, wie es tatsächlich ist. Seien Sie pragmatisch und wählen Sie den Weg des geringsten Widerstandes. Bleiben Sie sich selbst treu und denken Sie daran, dass sie zu gegebener Zeit in den Spiegel schauen müssen. Spielen Sie immer mit offenen Karten, dadurch schlagen Sie Brücken zwischen Ihnen und Ihrer Umgebung. Kein Mensch der Welt weiss alles - haben Sie auch den Mut zu sagen «Ich weiss es nicht.». Vor einem Problem zu stehen ist nicht das wahre Problem. Das wahre Problem ist, wie man damit umgeht. Das macht den Unterschied zwischen Ihnen und allen anderen aus.',
                        'Remain interested in broadening your field of knowledge. Listen (don’t hear) and be patient in giving an answer or a comment. Think out of the box. Understand and apply your field of education. Like the stars in heaven, remember that what you see or think you understand is not necessarily what actually is. Be pragmatic and like water flowing downhill follow the path that costs you the least energy. Remain true and authentic to yourself – remember that at a certain moment in life you have to look in the mirror. Always play with open cards this will build bridges between you and your surroundings. No person on earth knows everything. Have the courage to also say: “I don’t know”. Facing a problem is not the real problem. Your main problem is how to deal with the problem. This is what makes you different from anybody else.')
    ),
  ),
);

$i=0;
$template['interview']['2017'][$i++] = array(
  'name' => 'Dr. Jonas Bürgler',
  'img_url' => set_source($awss3_archive.'/carbogenamcis/interviewee_2017_1', 'png', FALSE),
  'position' => array('Senior Chemist R&D', 'Senior Chemist R&D'),

  'education' => array(
    0 => array(
      'date' => '2002-2006',
      'desc' => array('MSc ETH Chemie','MSc ETH Chemistry')
    ),
    1 => array(
      'date' => '2007-2011',
      'desc' => array('ETH Zürich Doktorat und PostDoc bei Prof. Dr. Togni','ETH Zurich PhD and PostDoc with Prof. Dr. Togni')
    ),
    2 => array(
      'date' => '2011-2013',
      'desc' => array('Colorado State University PostDoc bei Dr. Wood','Colorado State University PostDoc with Dr. Wood')
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2013-2017',
      'desc' => array('Project Chemist PR&D bei CARBOGEN AMCIS','Project Chemist PR&D at CARBOGEN AMCIS')
    ),
    1 => array(
      'date' => '2017',
      'desc' => array('Senior Chemist PR&D bei CARBOGEN AMCIS','Senior Chemist PR&D at CARBOGEN AMCIS')
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array(
        "Was sind Ihre Aufgaben als Senior Chemist PR&D bei CARBOGEN AMCIS?",
        "What do you do as Senior Chemist PR&D at CARBOGEN AMCIS?"),
      'answer' => array(
        "Ich bin ein leitender Chemiker in der Abteilung für Prozessforschung und Entwicklung in unserem Unternehmen. In meiner Verantwortung liegt die Laborentwicklung, ich kontrolliere die Produktion meiner Projekte, organisiere die Rohmaterialien und schreibe Produktionsvorschriften. Ich arbeite eng zusammen mit der Abteilung für Qualitätskontrolle um eine hohe Qualität unserer Wirkstoffe gewährleisten zu können. Darüber hinaus schreibe ich Offerten für zukünftige Projekte und kommuniziere den Fortschritt von Projekten an unsere Kunden (in Form von Berichten oder in Telefonkonferenzen).",
        "I work in the Process Research and Development department of our company. I supervise the lab development and oversee the production of my projects, organize raw materials and write instructions. I work in close collaboration with the analytical and the quality control departments in order to ensure a high product quality. I also write proposals for future projects and communicate project progress internally and to the customer (written in reports and orally in telecons).")
    ),
    1 => array(
      'question' => array(
        "Arbeiten Sie die meiste Zeit in Bubendorf oder bringt Ihre Position viel Reisen mit sich?",
        "Are you working in Bubendorf most of the time or does your position entail a lot of traveling?."),
      'answer' => array(
        "CARBOGEN AMCIS hat vier Standorte in der Schweiz, wobei Bubendorf als größter Standort auch der Hauptsitz ist. Ich arbeite am Standort Neuland in Hunzenschwil, einer kleinen Stadt in der Nähe von Lenzburg. Abhängig von den Projekten an denen ich gerade arbeite reise ich auch ein- oder zweimal im Monat zu den Standorten in Aarau und Bubendorf. Abgesehen von den anderen Standorten von CARBOGEN AMCIS ist es in meiner Position eher ungewöhnlich zu Reisen und kommt daher auch kaum vor.",
        "CARBOGEN AMCIS has four sites in Switzerland, Bubendorf being the Head Quarter and biggest site. I work at the Neuland site in Hunzenschwil, a small town close to Lenzburg. Generally, I am based at this site but depending on the projects I am working on, travelling to the other sites in Aarau and Bubendorf once or twice a month is normal. Visiting other places than CARBOGEN AMCIS sites is not very common in my position, thus long distance travelling is not a big part.")
    ),
    2 => array(
      'question' => array(
        "Während Ihres Doktorats haben Sie an P-stereogenen Ferrocenyl Phosphinen und deren Anwendung als Liganden in der asymmetrischen Katalyse gearbeitet. Ist Ihnen Ihr dabei erlerntes Wissen bei CARBOGEN AMCIS von Vorteil?",
        "Your dissertation was focused on synthesizing P-stereogenic Ferrocenyl phospines and their application as ligands in asymmetric catalysis. Were you able to use this experience in your tasks at CARBOGEN AMCIS?"),
      'answer' => array(
        "Ich hatte bisher noch nicht die Chance mit phosphorhaltigen Verbindungen oder mit Ferrocenen zu arbeiten, jedoch ist die Anwendung von katalytischen Methoden und ein guter Kenntnisstand in metallorganischer Chemie und asymmetrischer Synthese eine Voraussetzung für meine Arbeit. Eines der wichtigsten Dinge die man während seines Doktorats lernt ist meiner Meinung nach wie man ein spezifisches Problem angeht und schließlich löst.",
        "I have not had the chance to work with phosphorus containing compounds nor on ferrocenes, however the application of catalytic methods and a broad knowledge of organometallic chemistry and asymmetric synthesis is a requisite in my daily work. Also, in my opinion, the most important thing a student will learn during his Ph.D. studies is how to tackle and solve a specific problem.")
    ),
    3 => array(
      'question' => array(
        "Also ist in der Industrie nicht notwendig Experte auf einem spezialisierten Gebiet zu sein, wie zum Beispiel dem einer Doktorarbeit?",
        "So being specialized on a small, defined topic – like the topic of a PhD-thesis is not necessarily needed in industry?"),
      'answer' => array(
        "Ein Spezialist in einem Teilgebiet der organischen Chemie zu sein ist sicher nützlich, jedoch ist es von viel größerer Bedeutung ein breites Wissen in synthetischer organischer Chemie vorzuweisen und lösungsorientiert arbeiten zu können.",
        "Being a specialist in a certain area of organic chemistry can help, but having a broad knowledge in synthetic organic chemistry and excellent problem solving skills are definitely more important.")
    ),
    4 => array(
      'question' => array(
        "Wie unterscheidet sich die Tätigkeit an einer Universität von Arbeit in der Industrie?",
        "How does work in the university differ from the work in industry?"),
      'answer' => array(
        "In der Industrie liegt der Fokus stärker auf dem Erreichen eines Ziels als darauf, eine wissenschaftliche Begründung zu finden oder eine These zu belegen. Besonders für Dienstleister wie CARBOGEN AMICS ist es oft wichtiger, eine bestimmte Menge eines Produkts zu liefern als dieses auf dem elegantesten Weg herzustellen. Sicherheitsvorschriften, Qualitätsaspekte sowie Behördenanforderungen und Kundenansprüche sind weitere Faktoren, welche einen Prozess beeinflussen, während an Universitäten die “Chemie” des Öfteren der einzige Aspekt ist, welchen es zu beachten gilt.",
        "In the industry the focus is more on achieving the target than on finding the scientific rationale or prove a thesis. Especially as a service provider like CARBOGEN AMCIS very often delivering a certain amount of product is more important than finding the most elegant way to produce it. Also due to safety reasons, quality aspects as well as authority and customer requirements there are several additional factors that impact the process, while at the university the “chemistry” is mostly the only factor to be considered.")
    ),
    5 => array(
      'question' => array(
        "Gibt es einen direkten Weg sich von CARBOGEN AMICS ein eigenes Bild zu machen – entweder durch ein Praktikum oder ein Zusammenarbeit im akademischen Umfeld?",
        "Is there a way to get to know CARBOGEN AMCIS first-hand - either via internships or collaborations with universities?"),
      'answer' => array(
        "Durchaus. Wir offerieren Lehrstellen sowie Praktika an gewissen CARBOGEN AMICS-Standorten an. Studenten können für weitere Informationen dazu direkt unser Personalbeschaffungsteam kontaktieren. Wir kollaborieren von Zeit zu Zeit ebenfalls mit Universitäten, meistens für kleine Syntheseprojekte.",
        "Yes, we have apprenticeship and internship opportunities at certain CARBOGEN AMCIS sites. The best thing for students to do is to contact our recruitment team for further information. I also know that we sometimes collaborate with universities, mostly in small synthetic projects.")
    ),
    6 => array(
      'question' => array(
        "Wie finden Sie neue Ideen für zukünftige Projekte?",
        "How do you come up with ideas for future projects?"),
      'answer' => array(
        "Als Dienstleister sind wir oft den Synthesewegen und Vorstellungen der Kunden verpflichtet. Wenn wir jedoch zeigen können, dass gewisse Änderungen einen Prozess sicherer, effizienter oder kosteneffizienter machen, stimmen die meisten Kunden diesen Änderungen gerne zu. Dies ist in der Anfangsphase eines Projekts, in welcher der Kunde weniger an einen vorhandenen Prozess gebunden ist, öfters der Fall.",
        "Being a service provider we are often bound to the synthetic routes and ideas provided by the customers. However, if we can demonstrate that a certain change can make the process safer, more efficient and/or cost efficient most customers are happy to agree. This is mostly the case with early phase projects where the customer is less restricted to a “fixed” process.")
    ),
    7 => array(
      'question' => array(
        "Ist es immer einfach, Ihre Kunden von diesen zu überzeugen?",
        "Is it always easy to convince your customers to actually pursue them?"),
      'answer' => array(
        "Viele Kunden sind auch daran interessiert, die Kosten einer ausführlichen Entwicklung niedrig zu halten, besonders wenn sie davon überzeugt sind, das ihr Prozess für die Produktion gut genug ist. Deswegen ist es nicht immer einfach, sie für mehr Prozessentwickung zu begeistern, auch wenn dies uns und unseren Kunden das Leben einfacher machen könnte.",
        "Most customers try to keep the cost of an extended development down by reducing this part as much as possible, especially when they think they have a process good enough for production. Therefore, it is not always easy to convince them to do more development, even if it could facilitate our and the customers life.")
    ),
    8 => array(
      'question' => array(
        "Was hat dazu geführt, CARBOGEN AMCIS als Arbeitgeber zu wählen? Wie war der Bewerbungsvorgang – haben Sie sich auf eine ausgeschriebene Bewerbung oder war es eine Initiativbewerbung?",
        "What led you to choose CARBOGEN AMCIS as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
      'answer' => array(
        "Ich habe mich auf eine ausgeschriebene Position beworben, eine Eintrittsstelle als Projektchemiker. Ich hatte ein Interview vor Ort, welches mir ein gutes Bild von CARBOGEN AMCIS und auch von meiner Funktion als Projektchemiker gegeben hat. Die Leute waren freundlich und die Atmosphäre locker und offen, was mich überzeugt hat, dass die Arbeit bei CARBOGEN AMCIS zu mir passt. Und ich bin immer noch der gleichen Ansicht",
        "I applied for an advertised position, an entry position as project chemist. I had an on-site interview, which gave me a good picture of CARBOGEN AMCIS and also of my function as a project chemist. The people I met were friendly and the atmosphere was relaxed and open, which convinced me that working for CARBOGEN AMCIS should suit me well. And I am still of the same opinion.")
    ),
    9 => array(
      'question' => array(
        "Was wäre Ihr Ratschlag für eine Person, die kürzlich einen Abschluss an der ETH gemacht hat und einen Job sucht?",
        "What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
      'answer' => array(
        "Ich denke, dass es wichtig ist zu versuchen, einen Job zu finden, der gut zu einem passt. Bei dem derzeitigen Arbeitsmarkt ist dies schwierig, oft bewerben sich Studienabgänger auf Stellen, die sie gar nicht unbedingt wollen nur um einen Fuss in der Tür zu haben. Das ist verständlich, aber normalerweise profitiert weder der Angestellte noch die Firma davon. Mit einem Ph.D. in Chemie hat man eine grosse Auswahl von Optionen in vielen Feldern der chemischen Industrie, daher ist es wichtig sich über die Möglichkeiten zu informieren und herauszufinden, welche Stelle am besten passen würde. Deshalb ist es wichtig, die Stellenbeschreibungen gründlich zu lesen um heraus zu finden um was es in dem Job geht. Es ist auch nicht verboten, die Firmen direkt nach mehr Informationen zu fragen.",
        "I think it is important to try to find a job that suits oneself. With the current job market this is difficult and often graduates apply for positions they don’t necessarily want, just to have the foot in the door. This is understandable but normally neither the employee nor the company really benefits from this. With a Ph.D. in chemistry one has a large variety of options in many areas of the chemical industry, thus it is important to inform oneself about the possibilities and find out which position would suit best. Therefore, it is important to carefully read the job descriptions to find out what the job is about. It is also not forbidden to directly ask the companies to obtain more information.")
    ),
  ),
);



include('../0_template/template.php');

?>
