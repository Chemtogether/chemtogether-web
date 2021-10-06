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
    "title"        => "Interview with Dr. Vincent Diederich from Metrohm - Chemtogether",
    "desc"         => "Dr. Vincent Diederich works as Production Engineer & Interim Department Head at the Department of Separation Column Production at Metrohm. Learn more about his career and work in his interview, and meet Metrohm at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/metrohm_20181001.jpg",
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
$template['company_name'] = 'Metrohm AG';
$template['company_name_short'] = 'metrohm';
$template['logo_url'] = set_source($awss3.'/companies/metrohm/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2021 - Firmen: '.$template['company_name'], 'Chemtogether 2021 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('https://www.metrohm.com','metrohm.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/metrohm-/','Metrohm');
// $template['mail'] = array('','');
$template['archive'] = '/archive/metrohm';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Metrohm is a high-tech company with 60 subsidiaries all around the globe. Our high-precision instruments for chemical analysis are among the best in the world. We are growing faster than the market and outperform our competitors; in our main business, titration, we are the global number one. We are independent: Metrohm is owned by the charitable Metrohm foundation.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'You challenging, highly rewarding opportunities at the interface between chemistry, electronics, software and mechanical engineering, and our global customers. Young talents with a «cando» attitude get the chance to take on responsibility quickly. People, who come to work for us enjoy a stimulating working environment.');
$template['we_look'] = array(
  'title' => 'We are looking for',
  'text' => 'We are looking for young talents eager to start their career as a<table class="fa-table">
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


  $template['interview_print_until'] = 1;
  // if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

  $i=0;

  $template['interview'][$i++] = array(
    'name' => 'Tobias Favero',
    'img_url' => $awss3.'/companies/metrohm/interviewee_2021_1',
    'position' => 'Systems Engineer',
  
    'education' => array(
      0 => array(
        'date' => '2011-2017',
        'desc' => 'BSc und MSc in Interdisziplinären Naturwissenschaften, ETH Zürich',
      ),
      1 => array(
        'date' => '2005-2008',
        'desc' => 'BSc in Informationstechnologie, ZHAW Winterthur ',
      ),
      2 => array(
        'date' => '1997-2000',
        'desc' => 'Lehre als Chemielaborant, Coca-Cola Amatil AG ',
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2018-present',
        'desc' => 'Systems Engineer, Metrohm',
      ),
      1 => array(
        'date' => '2009-2011',
        'desc' => 'Softwareentwickler, NovaLink',
      ),
      2 => array(
        'date' => '2000-2003',
        'desc' => 'Chemielaborant, Coca-Cola Beverages AG ',
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => 'Was ist ihre derzeitige Tätigkeit bei Metrohm?',
        'answer' => 'Ich habe als Kernteammitglied die Fachverantwortung für ein Team in der Abteilung Systems Engineering. Mein Team begleitet verschiedene Projekte mit Experimenten im Labor, diese Aufgaben beinhalten aber nicht nur "klassische" Laborarbeit sondern ist sehr interdisziplinär, da in der Geräteentwicklung verschiedene Disziplinen sehr eng zusammen arbeiten und es unumgänglich ist fachlich über den Tellerrand zu schauen. In der Rolle als Kernteammitglied bin ich neben der Ressourcen- und Arbeitsplanung auch für die Qualität der Ergebnisse unseres Teams verantwortlich.',
      ),
      1 => array(
        'question' => 'Welchen Rat würden Sie einem „frischen“ ETH Absolventen geben, der sich auf Jobsuche begibt?',
        'answer' => 'Ich habe als Kernteammitglied die Fachverantwortung für ein Team in der Abteilung Systems Engineering. Mein Team begleitet verschiedene Projekte mit Experimenten im Labor, diese Aufgaben beinhalten aber nicht nur "klassische" Laborarbeit sondern ist sehr interdisziplinär, da in der Geräteentwicklung verschiedene Disziplinen sehr eng zusammen arbeiten und es unumgänglich ist fachlich über den Tellerrand zu schauen. In der Rolle als Kernteammitglied bin ich neben der Ressourcen- und Arbeitsplanung auch für die Qualität der Ergebnisse unseres Teams verantwortlich.',
      ),
      2 => array(
        'question' => 'Wie sieht Ihr klassischer Arbeitstag bei Metrohm aus?',
        'answer' => 'Ein "normaler" Arbeitstag besteht aus 2-3 Meetings bei denen es meistens um die teamübergreifende Koordination der verschiedenen Projekte geht. Die restliche Zeit verbringe ich vor allem mit bilateralen fachlichen Gesprächen innerhalb meines Teams, dabei beurteilen wir zusammen aktuelle Daten, diskutieren Problemstellungen oder besprechen die Dokumentation der Ergebnisse.',
      ),
      3 => array(
        'question' => 'Wie kam es, dass sie nun für Metrohm arbeiten? Wie sind sie auf die Firma aufmerksam geworden?',
        'answer' => 'Ich habe mich nach meinem Studium an der ETH nach einer Stelle umgesehen bei der meine Doppelqualifikation (Chemie/IT) ein Mehrwert sein kann. Da in Analysegeräten und Sensoren diese beiden Disziplinen oft eng verzahnt sind, habe ich mich vor allem bei Firmen beworben die Laborgeräte entwickeln, so bin ich auf die Metrohm gestossen.',
      ),
      4 => array(
        'question' => 'Wie lief ihr Bewerbungsprozess bei Metrohm?',
        'answer' => 'Ich habe mich auf eine Stelle als Teilprojektleiter beworben, bei der ich aber im ersten Anlauf abgelehnt worden bin. Da die Metrohm meinen Lebenslauf spannend fand wurde mir im Anschluss angeboten mein Dossier vorerst zu behalten um bei passenden Stellen auf mich zurück zu kommen. Dies ist kurze Zeit später auch passiert, ich wurde eingeladen mich für eine andere Stelle vorzustellen und habe diese im Anschluss erhalten.',
      ),
      5 => array(
        'question' => 'Was glauben Sie unterscheidet Metrohm von anderen Chemiefirmen? Was sind die drei grössten Vorteile von Metrohm?',
        'answer' => 'Ein grosser Vorteil ist, dass der grösste Teil der Entwickler:innen vor Ort in Herisau stationiert ist, dies fördert und erleichtert die disziplinenübergreifende Zusammenarbeit enorm. Eine Kultur der offenen Türen unterstützt die Zusammenarbeit zusätzlich, sodass viele Fragen im persönlichen Gespräch gelöst werden können. Ein weiterer grosser Vorteil ist die stetige Weiterbildung der Mitarbeiter:innen, dies wird von der Firma Metrohm aktiv gefördert.',
      ),
      6 => array(
        'question' => 'Was haben sie studiert und war die Tatsache, dass Sie einen ETH Abschluss hatten, ein Vorteil für den Einstieg in die Berufswelt?',
        'answer' => 'Ich habe Interdisziplinäre Naturwissenschaften studiert. Dies ist aber nicht meine Erstausbildung da ich bereits eine Lehre als Chemielaborant und ein Studium in Informatik (ZHAW Winterthur) abgeschlossen habe und sowohl im Labor als auch als Softwareentwickler schon einige Jahre Berufserfahrung mitbrachte. Meine aktuelle Stelle ist jedoch die erste nach dem ETH Abschluss, insofern war es schon ein Einstieg in eine neue berufliche Perspektive. Bei den Bewerbungen hat mir der ETH Abschluss vor allem durch seine Reputation geholfen, als Absolvent habe ich viel Vorschussvertrauen hinsichtlich meiner Fähigkeiten erhalten komplexe Probleme zu lösen und mich selbständig in neue Fragestellungen einzuarbeiten.',
      ),
    ),
  );


  $template['interview'][$i++] = array(
  'name' => 'Karina Hasler',
  'img_url' => $awss3.'/companies/metrohm/interviewee_2019_1',
  'position' => 'Systems Engineer',

  'education' => array(
    0 => array(
      'date' => '2014-2015',
      'desc' => '“Master of Science ETH in Chemistry”, ETH Zurich, Switzerland',
    ),
    1 => array(
      'date' => '2009-2014',
      'desc' => '“Bachelor of Science ETH in Chemistry“, ETH Zurich, Switzerland',
    ),
    2 => array(
      'date' => '2005-2009',
      'desc' => 'Maturität, Secondary school in Nuolen',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2019',
      'desc' => 'Teamleader at Systems Engineering, Metrohm AG',
    ),
    1 => array(
      'date' => '2017',
      'desc' => 'Core Team Member at Systems Engineering, Metrohm AG',
    ),
    2 => array(
      'date' => '2015',
      'desc' => 'Systems Engineer at Systems
Engineering, Metrohm AG, Herisau, Switzerland',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What are your responsibilities as team leader at Metrohm?',
      'answer' => 'The main task of a team leader is to improve the personal skills of the employees so
that they can reach their future career opportunities. The team leader also serves as
the primary point of contact to discuss personal issues or problems with their
colleagues.',
    ),
    1 => array(
      'question' => 'You started your work at Metrohm directly after graduating with a Master’s degree
from ETH Zürich. How did the application process work for you? Did you have to
compete with other candidates that did a PhD?',
      'answer' => 'There did not appear to be any competition between PhD and Master’s degree during
the application process, but there were other challenges. I only applied for jobs in
analytics where a PhD is not necessary, nor will it be considered for salary. Many
applications have been rejected due to lack of practical experience for positions
requiring a Master’s degree, and for being overqualified for lab technician positions.',
    ),
    2 => array(
      'question' => 'How does your daily work life look like at Metrohm? Do you normally work at the
same location or do you get to travel for work?',
      'answer' => 'My daily work life constantly changes on a daily basis. Through the interdisciplinary
workspace, no day looks like another. As a core team member, I serve assist with
project leadership to coordinate different tests of many projects and connect the
different disciplines. My responsibilities as a team leader give me a different
perspective that is independent of routine technical work which allows me the
opportunity to lead a team completely—including the coordination and support of
five colleagues with their technical and personal challenges. So, how can one day be
like the other one?
My work mostly takes place in Herisau, so there is not much need to travel on a
regular basis.',
    ),
    3 => array(
      'question' => 'You graduated in chemistry. Does Metrohm also employ graduates with a different
background?',
      'answer' => 'Yes, Metrohm employs people with diverse backgrounds and is an interdisciplinary
workplace. For example, I have colleagues with degrees in electronics and various
engineering specialties. There also can be found some interdisciplinary backgrounds
in the department of Systems Engineering, where the laboratory tests are done.',
    ),
    4 => array(
      'question' => 'How important is harmony between work and outside life for you? Does Metrohm
offer a good work-life balance for its employees?',
      'answer' => 'The Work-Life-Balance is very important for me and for all my team members.
Metrohm offers many possibilities for a good work-life balance and offers amenities
such as an exercise room as well as a relaxing room. In addition, there are events held
like the companies run of St.Gallen as well as ‘Bike to work’.',
    ),
    5 => array(
      'question' => 'You were already promoted twice during your employment at Metrohm. How do you
imagine your future career opportunities to look like?',
      'answer' => 'Metrohm gave me the chance to work as a core team member as my first promotion
after 1.5 years, and also recently promoted me to the team leader. These two

promotions happened fairly quickly in my 3.5 year tenure. The next step in the
company Metrohm could be to manage a project as a project leader or to be the head
of a department. Let’s see what the future brings.',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or
internships?',
      'answer' => 'It will be a very difficult time to find a job after graduating from ETH. If there is a
chance to attend an internship between the Bachelor and the Master studies, take it
to obtain practice work experience. There will be a time where companies do not
reply or you will be frustrated because they always give you the same answer.
Nevertheless, be sure you will find a company that will give you a chance.',
    ),
  ),
);
 
include('../0_template/template.php');

?>