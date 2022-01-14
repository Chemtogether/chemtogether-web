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
$template['logo_url'] = set_source($awss3_archive.'/metrohm/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Metrohm is a high-tech company with 60 subsidiaries all around the globe. Our high-precision instruments for chemical analysis are among the best in the world. We are growing faster than the market and outperform our competitors; in our main business, titration, we are the global number one. We are independent: Metrohm is owned by the charitable Metrohm foundation.',
  'Metrohm is a high-tech company with 60 subsidiaries all around the globe. Our high-precision instruments for chemical analysis are among the best in the world. We are growing faster than the market and outperform our competitors; in our main business, titration, we are the global number one. We are independent: Metrohm is owned by the charitable Metrohm foundation.');
$template['we_offer'] = array(
  'You challenging, highly rewarding opportunities at the interface between chemistry, electronics, software and mechanical engineering, and our global customers. Young talents with a «cando» attitude get the chance to take on responsibility quickly. People, who come to work for us enjoy a stimulating working environment.',
  'You challenging, highly rewarding opportunities at the interface between chemistry, electronics, software and mechanical engineering, and our global customers. Young talents with a «cando» attitude get the chance to take on responsibility quickly. People, who come to work for us enjoy a stimulating working environment.');
$template['we_look'] = array(
  'We are looking for young talents eager to start their career as a<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>chemist / chemical engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>software engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>electronics engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>design engineer</td>
  </tr>
  </table>',
  'We are looking for young talents eager to start their career as a<table class="fa-table">
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>chemist / chemical engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>software engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>electronics engineer</td>
  </tr>
  <tr>
  <td><i class="fas fa-fw fa-chevron-right"></td>
  <td>design engineer</td>
  </tr>
  </table>');

  $i=0;

  $template['interview']['2021'][$i++] = array(
    'name' => 'Tobias Favero',
    'img_url' => set_source($awss3_archive.'/metrohm/interviewee_2021_1','png', FALSE),
    'position' => array('Systems Engineer','Systems Engineer'),
  
    'education' => array(
      0 => array(
        'date' => '2011-2017',
        'desc' => array('BSc und MSc in Interdisziplinären Naturwissenschaften, ETH Zürich','BSc und MSc in Interdisziplinären Naturwissenschaften, ETH Zürich'),
      ),
      1 => array(
        'date' => '2005-2008',
        'desc' => array('BSc in Informationstechnologie, ZHAW Winterthur ','BSc in Informationstechnologie, ZHAW Winterthur '),
      ),
      2 => array(
        'date' => '1997-2000',
        'desc' => array('Lehre als Chemielaborant, Coca-Cola Amatil AG ','Lehre als Chemielaborant, Coca-Cola Amatil AG '),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018-present',
        'desc' => array('Systems Engineer, Metrohm','Systems Engineer, Metrohm'),
      ),
      1 => array(
        'date' => '2009-2011',
        'desc' => array('Softwareentwickler, NovaLink','Softwareentwickler, NovaLink'),
      ),
      2 => array(
        'date' => '2000-2003',
        'desc' => array('Chemielaborant, Coca-Cola Beverages AG ','Chemielaborant, Coca-Cola Beverages AG '),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('Was ist ihre derzeitige Tätigkeit bei Metrohm?','Was ist ihre derzeitige Tätigkeit bei Metrohm?'),
        'answer' => array('Ich habe als Kernteammitglied die Fachverantwortung für ein Team in der Abteilung Systems Engineering. 
        Mein Team begleitet verschiedene Projekte mit Experimenten im Labor, 
        diese Aufgaben beinhalten aber nicht nur "klassische" Laborarbeit sondern ist sehr interdisziplinär, 
        da in der Geräteentwicklung verschiedene Disziplinen sehr eng zusammen arbeiten und es unumgänglich ist 
        fachlich über den Tellerrand zu schauen. In der Rolle als Kernteammitglied bin ich neben der
         Ressourcen- und Arbeitsplanung auch für die Qualität der Ergebnisse unseres Teams verantwortlich.',
         'Ich habe als Kernteammitglied die Fachverantwortung für ein Team in der Abteilung Systems Engineering. 
        Mein Team begleitet verschiedene Projekte mit Experimenten im Labor, 
        diese Aufgaben beinhalten aber nicht nur "klassische" Laborarbeit sondern ist sehr interdisziplinär, 
        da in der Geräteentwicklung verschiedene Disziplinen sehr eng zusammen arbeiten und es unumgänglich ist 
        fachlich über den Tellerrand zu schauen. In der Rolle als Kernteammitglied bin ich neben der
         Ressourcen- und Arbeitsplanung auch für die Qualität der Ergebnisse unseres Teams verantwortlich.'),
      ),
      1 => array(
        'question' => array('Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
        'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?'),
        'answer' => array('Sei offen für Stellen die auf den ersten Blick nicht genau deinem Fächerpacket aus dem Studium entsprechen, 
        den perfekten Match wird es sowieso nie geben, und vielfach sind die Aufgaben und Verantwortungsbereiche nachträglich für 
        entsprechend geeignete Kandidat:innen ausbaubar. Ausserdem erfordern viele Stellen auch sehr generelle Fähigkeiten wie eine 
        schnelle Auffassungsgabe, erfassen und beurteilen von Daten, oder manchmal auch schlicht Durchhaltewillen.
         Diese Softskills hast du schon viel geübt und unter Beweis gestellt während deinem Studium an der ETH, 
         vergiss nicht das in deinen Bewerbungen herauszustreichen.',
         'Sei offen für Stellen die auf den ersten Blick nicht genau deinem Fächerpacket aus dem Studium entsprechen, 
        den perfekten Match wird es sowieso nie geben, und vielfach sind die Aufgaben und Verantwortungsbereiche nachträglich für 
        entsprechend geeignete Kandidat:innen ausbaubar. Ausserdem erfordern viele Stellen auch sehr generelle Fähigkeiten wie eine 
        schnelle Auffassungsgabe, erfassen und beurteilen von Daten, oder manchmal auch schlicht Durchhaltewillen.
         Diese Softskills hast du schon viel geübt und unter Beweis gestellt während deinem Studium an der ETH, 
         vergiss nicht das in deinen Bewerbungen herauszustreichen.'),
      ),
      2 => array(
        'question' => array('Wie sieht Ihr klassischer Arbeitstag bei Metrohm aus?',
        'Wie sieht Ihr klassischer Arbeitstag bei Metrohm aus?'),
        'answer' => array('Ein "normaler" Arbeitstag besteht aus 2-3 Meetings bei denen es meistens um die teamübergreifende
         Koordination der verschiedenen Projekte geht. Die restliche Zeit verbringe ich vor allem mit bilateralen fachlichen 
         Gesprächen innerhalb meines Teams, dabei beurteilen wir zusammen aktuelle Daten, diskutieren Problemstellungen oder 
         besprechen die Dokumentation der Ergebnisse.',
         'Ein "normaler" Arbeitstag besteht aus 2-3 Meetings bei denen es meistens um die teamübergreifende
         Koordination der verschiedenen Projekte geht. Die restliche Zeit verbringe ich vor allem mit bilateralen fachlichen 
         Gesprächen innerhalb meines Teams, dabei beurteilen wir zusammen aktuelle Daten, diskutieren Problemstellungen oder 
         besprechen die Dokumentation der Ergebnisse.'),
      ),
      3 => array(
        'question' => array('Wie kam es, dass sie nun für Metrohm arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
        'Wie kam es, dass sie nun für Metrohm arbeiten? Wie sind sie auf die Firma aufmerksam geworden?'),
        'answer' => array('Ich habe mich nach meinem Studium an der ETH nach einer Stelle umgesehen bei der meine Doppelqualifikation 
        (Chemie/IT) ein Mehrwert sein kann. Da in Analysegeräten und Sensoren diese beiden Disziplinen oft eng verzahnt sind, 
        habe ich mich vor allem bei Firmen beworben die Laborgeräte entwickeln, so bin ich auf die Metrohm gestossen.',
        'Ich habe mich nach meinem Studium an der ETH nach einer Stelle umgesehen bei der meine Doppelqualifikation 
        (Chemie/IT) ein Mehrwert sein kann. Da in Analysegeräten und Sensoren diese beiden Disziplinen oft eng verzahnt sind, 
        habe ich mich vor allem bei Firmen beworben die Laborgeräte entwickeln, so bin ich auf die Metrohm gestossen.'),
      ),
      4 => array(
        'question' => array('Wie lief ihr Bewerbungsprozess bei Metrohm?','Wie lief ihr Bewerbungsprozess bei Metrohm?'),
        'answer' => array('Ich habe mich auf eine Stelle als Teilprojektleiter beworben, bei der ich aber im ersten Anlauf 
        abgelehnt worden bin. Da die Metrohm meinen Lebenslauf spannend fand wurde mir im Anschluss angeboten mein Dossier vorerst 
        zu behalten um bei passenden Stellen auf mich zurück zu kommen. Dies ist kurze Zeit später auch passiert, ich wurde eingeladen 
        mich für eine andere Stelle vorzustellen und habe diese im Anschluss erhalten.',
        'Ich habe mich auf eine Stelle als Teilprojektleiter beworben, bei der ich aber im ersten Anlauf 
        abgelehnt worden bin. Da die Metrohm meinen Lebenslauf spannend fand wurde mir im Anschluss angeboten mein Dossier vorerst 
        zu behalten um bei passenden Stellen auf mich zurück zu kommen. Dies ist kurze Zeit später auch passiert, ich wurde eingeladen 
        mich für eine andere Stelle vorzustellen und habe diese im Anschluss erhalten.'),
      ),
      5 => array(
        'question' => array('Was glauben Sie unterscheidet Metrohm von anderen Chemiefirmen? 
        Was sind die drei grössten Vorteile von Metrohm?',
        'Was glauben Sie unterscheidet Metrohm von anderen Chemiefirmen? 
        Was sind die drei grössten Vorteile von Metrohm?'),
        'answer' => array('Ein grosser Vorteil ist, dass der grösste Teil der Entwickler:innen vor Ort in Herisau stationiert ist, 
        dies fördert und erleichtert die disziplinenübergreifende Zusammenarbeit enorm.
         Eine Kultur der offenen Türen unterstützt die Zusammenarbeit zusätzlich,
          sodass viele Fragen im persönlichen Gespräch gelöst werden können. Ein weiterer grosser Vorteil 
          ist die stetige Weiterbildung der Mitarbeiter:innen, dies wird von der Firma Metrohm aktiv gefördert.',
          'Ein grosser Vorteil ist, dass der grösste Teil der Entwickler:innen vor Ort in Herisau stationiert ist, 
        dies fördert und erleichtert die disziplinenübergreifende Zusammenarbeit enorm.
         Eine Kultur der offenen Türen unterstützt die Zusammenarbeit zusätzlich,
          sodass viele Fragen im persönlichen Gespräch gelöst werden können. Ein weiterer grosser Vorteil 
          ist die stetige Weiterbildung der Mitarbeiter:innen, dies wird von der Firma Metrohm aktiv gefördert.'),
      ),
      6 => array(
        'question' => array('Was haben sie studiert und war die Tatsache, 
        dass Sie einen ETH Abschluss hatten, ein Vorteil für den Einstieg in die Berufswelt?',
        'Was haben sie studiert und war die Tatsache, 
        dass Sie einen ETH Abschluss hatten, ein Vorteil für den Einstieg in die Berufswelt?'),
        'answer' => array('Ich habe Interdisziplinäre Naturwissenschaften studiert. 
        Dies ist aber nicht meine Erstausbildung da ich bereits eine Lehre als Chemielaborant und ein Studium in Informatik 
        (ZHAW Winterthur) abgeschlossen habe und sowohl im Labor als auch als Softwareentwickler
         schon einige Jahre Berufserfahrung mitbrachte. Meine aktuelle Stelle ist jedoch die erste nach dem ETH Abschluss, 
         insofern war es schon ein Einstieg in eine neue berufliche Perspektive. Bei den Bewerbungen hat mir der ETH Abschluss 
         vor allem durch seine Reputation geholfen, als Absolvent habe ich viel Vorschussvertrauen hinsichtlich meiner Fähigkeiten 
         erhalten komplexe Probleme zu lösen und mich selbständig in neue Fragestellungen einzuarbeiten.',
         'Ich habe Interdisziplinäre Naturwissenschaften studiert. 
        Dies ist aber nicht meine Erstausbildung da ich bereits eine Lehre als Chemielaborant und ein Studium in Informatik 
        (ZHAW Winterthur) abgeschlossen habe und sowohl im Labor als auch als Softwareentwickler
         schon einige Jahre Berufserfahrung mitbrachte. Meine aktuelle Stelle ist jedoch die erste nach dem ETH Abschluss, 
         insofern war es schon ein Einstieg in eine neue berufliche Perspektive. Bei den Bewerbungen hat mir der ETH Abschluss 
         vor allem durch seine Reputation geholfen, als Absolvent habe ich viel Vorschussvertrauen hinsichtlich meiner Fähigkeiten 
         erhalten komplexe Probleme zu lösen und mich selbständig in neue Fragestellungen einzuarbeiten.'),
      ),
    ),
  );


  $i=0;
  $template['interview'][2019][$i++] = array(
  'name' => 'Karina Hasler',
  'img_url' => set_source($awss3_archive.'/metrohm/interviewee_2019_1', 'png', FALSE),
  'position' => array('Systems Engineer','Systems Engineer'),

  'education' => array(
    0 => array(
      'date' => '2014-2015',
      'desc' => array('“Master of Science ETH in Chemistry”, ETH Zurich, Switzerland','“Master of Science ETH in Chemistry”, ETH Zurich, Switzerland'),
    ),
    1 => array(
      'date' => '2009-2014',
      'desc' => array('“Bachelor of Science ETH in Chemistry“, ETH Zurich, Switzerland','“Bachelor of Science ETH in Chemistry“, ETH Zurich, Switzerland'),
    ),
    2 => array(
      'date' => '2005-2009',
      'desc' => array('Maturität, Secondary school in Nuolen','Maturität, Secondary school in Nuolen'),
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2019',
      'desc' => array('Teamleader at Systems Engineering, Metrohm AG','Teamleader at Systems Engineering, Metrohm AG'),
    ),
    1 => array(
      'date' => '2017',
      'desc' => array('Core Team Member at Systems Engineering, Metrohm AG','Core Team Member at Systems Engineering, Metrohm AG'),
    ),
    2 => array(
      'date' => '2015',
      'desc' => array('Systems Engineer at Systems
Engineering, Metrohm AG, Herisau, Switzerland','Systems Engineer at Systems
Engineering, Metrohm AG, Herisau, Switzerland'),
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('What are your responsibilities as team leader at Metrohm?','What are your responsibilities as team leader at Metrohm?'),
      'answer' => array('The main task of a team leader is to improve the personal skills of the employees so
that they can reach their future career opportunities. The team leader also serves as
the primary point of contact to discuss personal issues or problems with their
colleagues.','The main task of a team leader is to improve the personal skills of the employees so
that they can reach their future career opportunities. The team leader also serves as
the primary point of contact to discuss personal issues or problems with their
colleagues.'),
    ),
    1 => array(
      'question' => array('You started your work at Metrohm directly after graduating with a Master’s degree
from ETH Zürich. How did the application process work for you? Did you have to
compete with other candidates that did a PhD?','You started your work at Metrohm directly after graduating with a Master’s degree
from ETH Zürich. How did the application process work for you? Did you have to
compete with other candidates that did a PhD?'),
      'answer' => array('There did not appear to be any competition between PhD and Master’s degree during
the application process, but there were other challenges. I only applied for jobs in
analytics where a PhD is not necessary, nor will it be considered for salary. Many
applications have been rejected due to lack of practical experience for positions
requiring a Master’s degree, and for being overqualified for lab technician positions.','There did not appear to be any competition between PhD and Master’s degree during
the application process, but there were other challenges. I only applied for jobs in
analytics where a PhD is not necessary, nor will it be considered for salary. Many
applications have been rejected due to lack of practical experience for positions
requiring a Master’s degree, and for being overqualified for lab technician positions.'),
    ),
    2 => array(
      'question' => array('How does your daily work life look like at Metrohm? Do you normally work at the
same location or do you get to travel for work?','How does your daily work life look like at Metrohm? Do you normally work at the
same location or do you get to travel for work?'),
      'answer' => array('My daily work life constantly changes on a daily basis. Through the interdisciplinary
workspace, no day looks like another. As a core team member, I serve assist with
project leadership to coordinate different tests of many projects and connect the
different disciplines. My responsibilities as a team leader give me a different
perspective that is independent of routine technical work which allows me the
opportunity to lead a team completely—including the coordination and support of
five colleagues with their technical and personal challenges. So, how can one day be
like the other one?
My work mostly takes place in Herisau, so there is not much need to travel on a
regular basis.','My daily work life constantly changes on a daily basis. Through the interdisciplinary
workspace, no day looks like another. As a core team member, I serve assist with
project leadership to coordinate different tests of many projects and connect the
different disciplines. My responsibilities as a team leader give me a different
perspective that is independent of routine technical work which allows me the
opportunity to lead a team completely—including the coordination and support of
five colleagues with their technical and personal challenges. So, how can one day be
like the other one?
My work mostly takes place in Herisau, so there is not much need to travel on a
regular basis.'),
    ),
    3 => array(
      'question' => array('You graduated in chemistry. Does Metrohm also employ graduates with a different
background?','You graduated in chemistry. Does Metrohm also employ graduates with a different
background?'),
      'answer' => array('Yes, Metrohm employs people with diverse backgrounds and is an interdisciplinary
workplace. For example, I have colleagues with degrees in electronics and various
engineering specialties. There also can be found some interdisciplinary backgrounds
in the department of Systems Engineering, where the laboratory tests are done.','Yes, Metrohm employs people with diverse backgrounds and is an interdisciplinary
workplace. For example, I have colleagues with degrees in electronics and various
engineering specialties. There also can be found some interdisciplinary backgrounds
in the department of Systems Engineering, where the laboratory tests are done.'),
    ),
    4 => array(
      'question' => array('How important is harmony between work and outside life for you? Does Metrohm
offer a good work-life balance for its employees?','How important is harmony between work and outside life for you? Does Metrohm
offer a good work-life balance for its employees?'),
      'answer' => array('The Work-Life-Balance is very important for me and for all my team members.
Metrohm offers many possibilities for a good work-life balance and offers amenities
such as an exercise room as well as a relaxing room. In addition, there are events held
like the companies run of St.Gallen as well as ‘Bike to work’.','The Work-Life-Balance is very important for me and for all my team members.
Metrohm offers many possibilities for a good work-life balance and offers amenities
such as an exercise room as well as a relaxing room. In addition, there are events held
like the companies run of St.Gallen as well as ‘Bike to work’.'),
    ),
    5 => array(
      'question' => array('You were already promoted twice during your employment at Metrohm. How do you
imagine your future career opportunities to look like?','You were already promoted twice during your employment at Metrohm. How do you
imagine your future career opportunities to look like?'),
      'answer' => array('Metrohm gave me the chance to work as a core team member as my first promotion
after 1.5 years, and also recently promoted me to the team leader. These two

promotions happened fairly quickly in my 3.5 year tenure. The next step in the
company Metrohm could be to manage a project as a project leader or to be the head
of a department. Let’s see what the future brings.','Metrohm gave me the chance to work as a core team member as my first promotion
after 1.5 years, and also recently promoted me to the team leader. These two

promotions happened fairly quickly in my 3.5 year tenure. The next step in the
company Metrohm could be to manage a project as a project leader or to be the head
of a department. Let’s see what the future brings.'),
    ),
    6 => array(
      'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or
internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or
internships?'),
      'answer' => array('It will be a very difficult time to find a job after graduating from ETH. If there is a
chance to attend an internship between the Bachelor and the Master studies, take it
to obtain practice work experience. There will be a time where companies do not
reply or you will be frustrated because they always give you the same answer.
Nevertheless, be sure you will find a company that will give you a chance.','It will be a very difficult time to find a job after graduating from ETH. If there is a
chance to attend an internship between the Bachelor and the Master studies, take it
to obtain practice work experience. There will be a time where companies do not
reply or you will be frustrated because they always give you the same answer.
Nevertheless, be sure you will find a company that will give you a chance.'),
    ),
  ),
);


  $i = 0;
  $template['interview'][2018][$i++] = array(
    'name' => 'Dr. Vincent Diederich',
    'img_url' => set_source($awss3_archive.'/metrohm/interviewee_2018_1', 'png', FALSE),
    'position' => array('Produktionsingenieur & Stv. Abteilungsleiter, Abteilung Trennsäulenproduktion', 'Production Engineer & Interim Department Head, Department Separation Column Production'),
  
    'education' => array(
      0 => array(
        'date' => '2008-2014',
        'desc' => array('Doktorat bei Prof. Morbidelli an der ETH Zürich', 'Doctorate with Prof. Morbidelli at ETH Zurich')
      ),
      1 => array(
        'date' => '2007-2008',
        'desc' => array('M.Sc. ETH Chemie- und Bioingenieurwissenschaften an der ETH Zürich', 'M.Sc. Chemical and Bioengineering at ETH Zurich')
      ),
      2 => array(
        'date' => '2004-2007',
        'desc' => array('B.Sc. ETH Chemieingenieurwissenschaften an der ETH Zürich', 'B.Sc. Chemical Engineering at ETH Zurich')
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018',
        'desc' => array('Produktmanager Chromatographiesäulen bei Metrohm','Product Manager Chromatography Columns at Metrohm')
      ),
      1 => array(
        'date' => '2015',
        'desc' => array('Produktionsingenieur & Stv. Abteilungsleiter, Abteilung Trennsäulenproduktion bei Metrohm', 'Production Engineer & Interim Department Head, Department Separation Column Production at Metrohm')
      ),
      2 => array(
        'date' => '2014-2015',
        'desc' => array('Wissenschaftlicher Mitarbeiter an der ETH Zürich', 'Research Associate at ETH Zurich')
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('Was sind Ihre Aufgaben als Produktionsingenieur bei der Metrohm AG?',
                            'What are your responsibilities as a production engineer at Metrohm AG?'),
        'answer' => array('Als Produktionsingenieur bei der Metrohm AG arbeite ich in der Abteilung Säulenproduktion. Für die Ionenchromatographie (IC) werden Trennsäulen verwendet und deren Herstellung optimiere ich. Genauer geht es darum, die Reproduzierbarkeit und die Qualität unserer Produkte sicherzustellen und dabei nach Möglichkeit die Herstellkosten zu senken.',
                          'As a production engineer at Metrohm AG, I work in the column production department. I optimize the production of columns used in ion chromatography. More specifically, we work on ensuring the reproducibility and quality of our products while potentially lowering manufacturing costs.')
      ),
      1 => array(
        'question' => array('Sie haben Chemieingenieurwissenschaften studiert. Beschäftigt die Metrohm AG auch Absolventen anderer Fachrichtungen (Chemiker, Interdisziplinäre Naturwissenschaftler)?',
                            'You graduated with a degree in Chemical Engineering. Does Metrohm AG also employ graduates of other fields of study (Chemistry, Interdisciplinary Sciences)?'),
        'answer' => array('In der Tat bietet die Firma Metrohm AG auch Möglichkeiten für Chemiker und interdisziplinäre Naturwissenschaftler. Für die Bereiche Entwicklung neuer Geräte, Vertrieb, Support und Marketing ist dabei sicherlich eine fundierte Ausbildung in chemischer Analytik von Vorteil. Aber auch Synthesechemiker finden bei der Metrohm AG ihren Platz, beispielsweise im Bereich der Herstellung und Entwicklung von neuen Säulenmaterialien.',
                          'Metrohm AG does indeed also have positions for chemists and interdisciplinary scientists. In the fields of device development and sales as well as in support and marketing, a thorough education in chemical analytics is certainly an advantage. However, also synthetic chemists find positions at Metrohm AG, for instance in the development and production of new column materials.')
      ),
      2 => array(
        'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                            'How does a typical work day in industry differ from one at university?'),
        'answer' => array('An der Universität arbeitet man oftmals alleine an einem Projekt. In der Industrie sieht dies anders aus: hier müssen Personen aus sehr unterschiedlichen Bereichen zusammenarbeiten, um erfolgreich zu sein. Den regelmässigen Austausch mit anderen Abteilungen finde ich sehr spannend, insbesondere weil man auch Einblick in andere Tätigkeiten in der Firma erhält (Entwicklung, Vertrieb, Marketing, Konstruktion, Qualitätsmanagement, etc.).',
                          'At university, one often works on a project alone. In industry, things look very different: Here, people from very different fields need to work together in order to be successful. I find the constant exchange with other departments very exciting, especially since you also get insights into the other activities of the company (research & development, sales, marketing, construction, quality management etc.).')
      ),
      3 => array(
        'question' => array('Warum haben Sie sich die Metrohm AG als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                            'What made you choose Metrohm as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('Ein Student in unserer Forschungsgruppe arbeitete an einem Projekt mit der Metrohm AG und somit hatte ich den ersten Kontakt. Nach meiner Doktorarbeit, welche eher in der Grundlagenforschung angesiedelt war, habe ich mir gewünscht, in der Industrie an einem Produkt zu arbeiten. Somit habe ich mich bei der Metrohm AG auf eine ausgeschriebene Stelle beworben. Obwohl die Stelle bereits besetzt war, wurde ich eingeladen und habe schlussendlich eine andere Stelle eingenommen.',
                          'A student in our research group worked on a project with Metrohm AG, so I first got into contact with the company this way. After my PhD, which was rather focused on basic research, I wanted to work on a project in industry. Thus, I applied with Metrohm AG for an advertised position. Although the position had already been filled, I was invited nevertheless and eventually began to work in another position.')
      ),
      4 => array(
        'question' => array('Was sind Ihre Pläne und Ziele für Ihre Karriere bei der Metrohm AG? Welche Möglichkeiten gibt es, sich innerhalb der Firma weiterzuentwickeln?',
                            'Looking at your career at Metrohm, what are you plans and goals for the future? Which opportunities exist at your company for personal development?'),
        'answer' => array('Die Metrohm AG legt grossen Wert auf die interne Weiterentwicklung ihrer Mitarbeiter und unterstützt sie in ihrer Weiterbildung. Somit ergeben sich für jeden Möglichkeiten weiterzukommen. Ab November ist dies bei mir der Fall. Ich werde intern den Job wechseln und als Junior Product Manager im Competence Center Ionenchromatographie eine neue Aufgabe annehmen.',
                          'Metrohm AG puts great emphasis on the internal development of their employees and supports them in their continuing education. Like this, everybody has opportunities to move ahead professionally. This is the case for me from November on. I will change jobs internally and focus on new tasks as Junior Product Manager in the Competence Center Ion Chromatography.')
      ),
      5 => array(
        'question' => array('Im Rahmen Ihrer Dissertation bei Professor Morbidelli hier an der ETH haben Sie die Chemie und Physik von Polymerhydrogelen untersucht. Dieses Themengebiet unterscheidet sich also durchaus von Ihrem jetzigen beruflichen Fokus. War dieser Übergang schwierig?',
                            'During your PhD with Professor Morbidelli here at ETH, your research focused on polymer hydrogels, a subject quite different from your professional focus today. Was that transition difficult?'),
        'answer' => array('Auf den ersten Blick scheinen diese Themen tatsächlich weit voneinander entfernt zu sein. Jedoch gibt es bei der Herstellung von Hydrogelen und von Materialien für chromatographische Säulen ähnliche Polymerisationsmechanismen. Dies hat mir fachlich den Einstieg durchaus leicht gemacht. Stattdessen musste ich mich am Anfang an die deutlich andere Arbeitsweise in der Industrie gewöhnen.',
                          'At first glance, these subjects do indeed seem very different. However, there are similar polymerization mechanisms in the preparation of both hydrogels and materials for chromatographic columns. This made my first steps in the job a lot easier, from a technical point of view. Of course, I had to get used to the very different way of working in industry.')
      ),
      6 => array(
        'question' => array('Als Chemieingenieur ist ein PhD ja kein Muss, wenn man eine Karriere in der Industrie anstrebt. Hat Ihnen der Titel bei der Bewerbung geholfen?',
                            'As a chemical engineer pursuing a career in industry, a PhD is not always a necessity. Did the title help you when applying for a job?'),
        'answer' => array('Tatsächlich ist ein PhD als Chemieingenieur in der Industrie kein Muss. Ob mir der PhD Titel bei meiner Bewerbung geholfen hat, kann ich schlecht beurteilen. Vielmehr bin ich aber davon überzeugt, dass die während meiner Dissertation erlernten Techniken, sowie die Möglichkeit, mich in gewisse Themenbereiche zu vertiefen, bei meiner Bewerbung mit Sicherheit von Vorteil waren.',
                          'A PhD is indeed not always required for a chemical engineer in industry. I can’t judge whether or not my PhD helped me when applying. However, I am convinced that the techniques I learned during my thesis as well as the ability to intensify my knowledge in certain fields were an advantage for the application.')
      ),
      7 => array(
        'question' => array('Welche soft skills sind in Ihrem jetzigen Job bei der Metrohm AG gefragt und welche der Stationen in Ihrem Lebenslauf haben Sie gut darauf vorbereitet?',
                            'Which soft skills do you need in your current job at Metrohm and which chapters in your academic and professional career prepared you for this?'),
        'answer' => array('Meiner Meinung nach ist der grösste Unterschied zwischen der Arbeit in der Industrie und an der Universität die Grösse und Zusammensetzung der Arbeitsgruppen. Um als Gruppe erfolgreich zu sein, braucht es neben guten fachlichen Kenntnissen insbesondere den soft skill der Teamfähigkeit. Diese kann man nur teilweise erlernen oder durch Erfahrung gewinnen. Möglicherweise hat mir dabei das Basketballspielen im Team oder aber meine Tätigkeiten in diversen Vorständen geholfen.<br>
        In meiner neuen Tätigkeit als Produktmanager werde ich im regelmässigen Austausch mit unseren Tochtergesellschaften auf der ganzen Welt im Kontakt sein. Dabei werden mir meine Sprachkenntnisse sicherlich nützlich sein.
        ',
                          'In my opinion, the biggest difference between working in industry and at university is the size and composition of the teams you work in. To be successful as a team, you not only need good technical competences but also a capacity for teamwork. This is something you can only learn to a certain extent or gain through experience. Playing basketball in a team or my involvement in different governing bodies might have helped me with that.<br>
                          In my new role as product manager, I will be in regular contact with our subsidiaries all over the world. Here, my language skills will surely be useful.
                          ')
      ),
      8 => array(
        'question' => array('Müssen Sie für Ihren Job weiterhin auf dem aktuellen Stand der Forschung bleiben, oder konzentrieren Sie sich eher auf die Anwendung von bereits etablierten Technologien?',
                            'Does your job require you to stay on top of current research or do you rather focus on applying established technologies?'),
        'answer' => array('In meiner Rolle als Produktionsingenieur war es nicht unbedingt notwendig, ständig auf dem aktuellen Stand der Forschung zu bleiben. Hier konnte ich oft auf bereits etablierte und bekannte Technologien aufbauen. Stattdessen kann es durchaus sein, dass ich mich zukünftig als Produktmanager wieder stärker mit der Fachliteratur beschäftigen werde.',
                          'In my role as a production engineer it wasn’t necessary to stay up to date with current research all the time. I was mostly able to build on known and established technologies. In my future as a product manager, I will probably read scientific literature more often.')
      ),
      9 => array(
        'question' => array('Welchen Rat würden Sie einem "frischen" ETH-Absolventen geben, der sich auf Jobsuche begibt?',
                            'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Den perfekten Kandidaten gibt es nur in höchst seltenen Fällen. Ich empfehle euch daher, euch auch auf Stellen zu bewerben, bei denen ihr das Anforderungsprofil nicht vollständig erfüllen könnt. Eine Faustregel besagt, wenn ca. 75 – 80% des Anforderungsprofils passt, unbedingt bewerben. Die anderen Kompetenzen können erlernt werden, insbesondere, wenn sie fachlicher Natur sind.',
                          'There are only very few exceptions where there is the perfect candidate. I would thus recommend that you also apply for jobs for which you don’t fulfill all requirements perfectly. There’s a rule of thumb saying that if you fulfill ca. 75 – 80 % of the criteria, you should definitely apply. The other competences can often be learned, in particular those that are technical in nature.')
      ),
    ),
  );
  

  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Sabrina Gschwind',
    'img_url' => set_source($awss3_archive.'/metrohm/interviewee_2017_1', 'png', FALSE),
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
    'img_url' => set_source($awss3_archive.'/metrohm/interviewee_2017_2', 'png', FALSE),
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
