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


$template['company_name'] = 'Idorsia';
$template['company_name_short'] = 'idorsia';
$template['logo_url'] = $awss3_archive.'/idorsia/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.idorsia.com','idorsia.com');
$template['facebook'] = array('https://www.facebook.com/idorsia/', 'Idorsia Pharmaceuticals Ltd.');
$template['linkedin'] = array('https://www.linkedin.com/company/idorsia/','Idorsia Pharmaceuticals Ltd.');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Reaching out for more!<br><br>The purpose of Idorsia is to discover, develop and bring more, innovative medicines to patients. We have more ideas, we see more opportunities and we want to help more patients. In order to achieve this, we will develop Idorsia into one of Europe’s leading biopharmaceutical companies, with a strong scientific core.<br>Located near Basel – a biotech hub of Europe – Idorsia has over 700 employees specialized in the discovery and development of small molecules, to provide innovative therapeutic options.',
  'Reaching out for more!<br><br>The purpose of Idorsia is to discover, develop and bring more, innovative medicines to patients. We have more ideas, we see more opportunities and we want to help more patients. In order to achieve this, we will develop Idorsia into one of Europe’s leading biopharmaceutical companies, with a strong scientific core.<br>Located near Basel – a biotech hub of Europe – Idorsia has over 700 employees specialized in the discovery and development of small molecules, to provide innovative therapeutic options.');
$template['we_offer'] = array(
  'A state-of-the-art workplace in an inspiring environment, a competitive compensation package and a good balance between work and private life.',
  'A state-of-the-art workplace in an inspiring environment, a competitive compensation package and a good balance between work and private life.');
$template['we_look'] = array(
  'People who like doing more with less in a highly productive environment where people enjoy their work! If you like to show up with energy, intellect and creativity then you could be a good fit with Idorsia.<br>In drug discovery, we are regularly looking for trainees (e.g. BSc, MSc, and PhD students) to work with us for 6-12 months. To get insight into how you can contribute to one of our exciting drug discovery projects, please review our current openings at: <a href="https://careers.idorsia.com/">careers.idorsia.com</a>',
    'People who like doing more with less in a highly productive environment where people enjoy their work! If you like to show up with energy, intellect and creativity then you could be a good fit with Idorsia.<br>In drug discovery, we are regularly looking for trainees (e.g. BSc, MSc, and PhD students) to work with us for 6-12 months. To get insight into how you can contribute to one of our exciting drug discovery projects, please review our current openings at: <a href="https://careers.idorsia.com/">careers.idorsia.com</a>');


  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Cyrille Lescop',
    'img_url' => set_source($awss3_archive.'/idorsia/interview-2017-1', 'png', FALSE),
    'position' => array('Head of Laboratory', 'Head of Laboratory'),

    'education' => array(
      0 => array(
        'date' => '1992-1995',
        'desc' => array('MSc in Organischer Chemie, University of Auvergne','MSc in Organic Chemistry, University of Auvergne')
      ),
      1 => array(
        'date' => '1992-1995',
        'desc' => array('Diplôme d’Ingenieur Chemistry, Ecole Nationale Superieure de Chimie, Clemont-Ferrand','Diplôme d’Ingenieur Chemistry, Ecole Nationale Superieure de Chimie, Clemont-Ferrand')
      ),
      2 => array(
        'date' => '1996-2000',
        'desc' => array('Doktorat in Organischer Chemie, University of Maine, Le Mans','PhD in Organic Chemistry, University of Maine, Le Mans')
      ),
      3 => array(
        'date' => '2000-2002',
        'desc' => array('PostDoc, University of Texas','Postdoctoral position, University of Texas')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2002-2006',
        'desc' => array('Medicinal Chemist Santhera Pharmaceuticals','Medicinal Chemist Santhera Pharmaceuticals')
      ),
      1 => array(
        'date' => '2007-2011',
        'desc' => array('Beitritt Actelion (jetzt Idorsia) als Senior Lab Head','joined Actelion (now Idorsia) as Senior Lab Head')
      ),
      2 => array(
        'date' => '2012',
        'desc' => array('Associate Director','Associate Director')
      ),
      3 => array(
        'date' => '2017',
        'desc' => array('Principal Scientist, AD','Principal Scientist, AD')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Head of Laboratory bei Idorsia?",
          "What do you do as a Head of Laboratory at Idorsia?"),
        'answer' => array(
          "Ich manage ein Labor bestehend aus drei Mitarbeitern (Laborexperte, wissenschaftlicher Mitarbeiter, Auszubildender). Meine Aufgabe besteht im Entwurf und der Synthese bioaktiver Moleküle, die das Potential haben Wirkstoffkandidaten für die klinische Entwicklung zu werden. Zusätzlich bin ich als Projektleiter zuständig für die Projektplanung und die Koordinierung eines erweiterten Chemie-Teams.",
          "I manage a laboratory of 3 co-workers (lab expert, scientific associate, apprentice). My task consists in the design and the synthesis of bioactive molecules with the potential to deliver new drug candidates for clinical development. In addition, as project leader I am responsible for the project strategy and the coordination of an extended chemistry team.")
      ),
      1 => array(
        'question' => array(
          "Arbeiten Sie hauptsächlich in Allschwil oder reisen Sie viel?",
          "Are you working in Allschwil most of the time or does your position entail a lot of travelling?"),
        'answer' => array(
          "Ich muss selten auf Reisen gehen, ausser zu ein paar Konferenzen und Fortbildungen pro Jahr.",
          "I rarely need to travel except to attend a few conferences/training every year.")
      ),
      2 => array(
        'question' => array(
          "Sie sind jetzt schon seit 15 Jahren in der Medizinalchemie tätig, ist es bei Idorsia üblich im gleichen Tätigkeitsfeld zu bleiben oder gibt es Möglichkeiten in einen anderen Bereich zu wechseln, zum Beispiel ins Marketing?",
          "You have been working in medicinal chemistry for 15 years now, is it common at IDORSIA to stay in the same field or are there possibilities to change into e.g. marketing?"),
        'answer' => array(
          "Idorsia hat natürlich großes interesse daran, dass sich unsere Mitarbeiter weiterentwickeln. Ein kompletter Wechsel der Tätigkeit wie zum Beispiel in Marketing ist selten, aber es gibt die Möglichkeit nach ein paar Jahren den Karriereweg zu wechseln zum Beispiel in Richtung Patentanwalt oder Projektmanager.",
          "Idorsia is of course committed to develop its people. There is the possibility to change your career path after a few years to become patent attorney or project manager for example. However a complete change, like going to marketing, is rare.")
      ),
      3 => array(
        'question' => array(
          "Warum ist ein kompletter Wechsel so selten?",
          "Why is this so rare?"),
        'answer' => array(
          "Medizinalchemie ist nicht nur Chemie. Man muss ständig Kontakt zu anderen Disziplinen halten, wie zum Beispiel Biologie oder Pharmakologie, was die tägliche Arbeit sehr motivierend macht und dafür sorgt, dass nie Routine einkehrt. Ich persönlich habe große Freude daran mehr darüber zu lernen wie die Moleküle, die wir im Labor hergestellt haben, getestet werden. Sei es durch biologische assays oder durch in vivo Studien.",
          "Medicinal chemistry is not only about chemistry. It requires continuous contacts with other disciplines such as biology, or pharmacology which makes the daily work very motivating and never routine. Personally, I enjoy learning more about biological assays and in vivo study results meant to characterize the molecules we prepared in the lab.")
      ),
      4 => array(
        'question' => array(
          "Ich gehe mal davon aus, dass Idorsia als pharmazeutische Firma hauptsächlich organische Chemiker einstellt. Gibt es auch Chemiker aus anderen Fachgebieten in Ihrer Firma?",
          "As a pharmaceutical company I assume IDORSIA employs mostly organic chemists – are there also chemists from different fields or engineers needed in your company?"),
        'answer' => array(
          "Ja, Idorsia beschäftigt ausserdem analytische Chemiker, Formulationschemiker für die drug discovery stage und die Entwicklungsphase. Wir haben ausserdem eine hochqualifizierte Prozessforschungsgruppe und Chemical Development Gruppe.",
          "Yes, Idorsia also employs analytical chemists, formulation chemists for drug discovery stage as well as for development stage. We also have a very strong Process Research and Chemical Development group.")
      ),
      5 => array(
        'question' => array(
          "Was hat Sie dazu bewegt sich Idorsia als Arbeitgeber auszusuchen? Wie lief die Bewerbung ab – haben Sie sich auf eine ausgeschriebene Stelle beworben oder war es eine Initiativbewerbung?",
          "What led you to choose IDORSIA as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
        'answer' => array(
          "Ich habe mich initiativ bei Idorsia (damals noch Actelion) als Medizinalchemiker beworben. Es gab zwei Hauptgründe für meine Wahl. Einerseits die Erfolgsbilanz in Sachen Innovation und andererseits meine Bereitschaft in einem internationalen und interdisziplinären Umfeld zu arbeiten.",
          "I applied spontaneously to Idorsia (formerly Actelion) for a position as medicinal chemist. There were two main reasons to choose this company. Its track record for innovation and my willingness to work in an international and multidisciplinary environment.")
      ),
      6 => array(
        'question' => array(
          "Gibt es Praktika oder Programme, welche es Studenten oder Absolventen erlauben, sich aus erster Hand ein Bild von der Arbeit bei Idorsia zu machen?",
          "Are there internships or other programs, that would allow students or graduates to see firsthand how it is to work at IDORSIA?"),
        'answer' => array(
          "Idorsia schreibt jedes Jahr Praktikumsstellen aus (6 bis 12 Monate), welche Studenten erlauben, auf Tuchfühlung mit der Pharmaindustrie zu gehen.",
          "Every year Idorsia posts open positions for internship (6-12 months) that allow students to get a first contact with the Pharma Industry.")
      ),
      7 => array(
        'question' => array(
          "Wie einfach war der Übergang von Ihrer PostDoc-Stelle zu Idorsia? Wie unterscheidet sich die Arbeit in einer Forschungsgruppe in der organischen Chemie von Ihrer jetzigen Arbeitsumgebung?",
          "How easy was the transition from your postdoctoral position to IDORSIA? How does work in an organic chemistry group differ from your current work environment?"),
        'answer' => array(
          "Idorsia war nicht meine erste Firma. Ich arbeitete nach meinem PostDoc in den USA für 4 Jahre bei einer kleinen Schweizer Biotechfirma. Ein grosser Wechsel für mich war es ein Team zu betreuen und Leistungsziele zu setzen und zu bewerten. Ein weiterer Unterschied war auf einmal in einem multidisziplinären Umfeld zu arbeiten. Als Medizinalchemiker muss man mit vielen verschiedenen Kollegen zusammenarbeiten können, welche aus verschiedenen Disziplinen mit verschienden Hintergründen stammen. Ich musste mich daher mit dem Jargon und den Konzepten aus Biologie, Pharmakologie und Pharmakokinetik vertraut machen.",
          "Idorsia was not my first company. I worked for a small Swiss biotech company for 4 years after my postdoctoral stay in the US. A major change to me was to supervise a team and set/evaluate performances. Another difference was to work in a multidisciplinary environment. As medicinal chemist, one has to be able to work with colleagues from various disciplines, various backgrounds. I had to learn about jargon/concepts used in biology, pharmacology and pharmacokinetics.")
      ),
      8 => array(
        'question' => array(
          "Sie sind ja schon seit einer ganzen Weile bei Ihrer Firma – was ist ein typischer Fehler, den neue Chemiker in ihrem ersten 'echten' Job machen?",
          "Since you have been with your company for some time – what are common mistakes new chemists make at their first 'real' job? "),
        'answer' => array(
          "Ein typischer Fehler ist es, zu glauben dass die dienstälteren Kollegen immer alles wissen bzw. immer die beste Lösung parat haben. Haben Sie keine Angst sich bemerkbar zu machen und stellen Sie Fragen!",
          "A common mistake is to believe that colleagues older than you in the company always know the truth/have the best solution. Do not be scared to speak up and ask questions!")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last Question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Wenn Sie als Medizinalchemiker in der Pharmaindustrie tätig werden wollen, nachdem Sie Ihren Abschluss an der ETH gemacht haben, empfehle ich Ihnen einen PostDoc im Ausland. Dies ist üblicherweise eine Vorraussetzung um überhaupt zum Vorstellungsgespräch eingeladen zu werden. Wenn Sie zeigen können, dass Sie in der Lage sind sich in ein komplett neues Projekt in einer anderen Umgebung einzuarbeiten, dann ist dies ein wichtiger Pluspunkt in Ihrem Lebenslauf.",
          "If one would like to work as a medicinal chemist in the Pharma Industry after graduating from ETH, I would advise to get additional/different postdoctoral experience abroad as it is usually a pre-requisite to get a job interview. Demonstrating that you are able to jump into a new project in a totally new environment certainly is a valuable asset in your CV.")
      ),
    ),
  );


include('../0_template/template.php');

?>
