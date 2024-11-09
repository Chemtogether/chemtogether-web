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


$template['company_name'] = 'df-mp';
$template['company_name_short'] = 'dfmp';
$template['logo_url'] = set_source($awss3.'/companies/dfmp/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://df-mp.com','df-mp.com');
//$template['facebook'] = array('https://www.facebook.com/mettlertoledo/', 'METTLER TOLEDO');
//$template['linkedin'] = array('https://www.linkedin.com/company/sigaswiss/','SIGA');


// $template['we_are'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_offer'] = array(
//   'title' => '',
//   'text' => '');
// $template['we_look'] = array(
//   'title' => '',
//   'text' => '');


$template['we_are'] = array(
   'title' => 'We are',

   'text' => 'df-mp is one of the top European firms
in the field of intellectual property law.
We have been advising and representing clients in national and international
matters relating to patents and trademarks for over two decades. Based in
the centre of Munich, our team is international, with attorneys/trainees from
countries including Germany, England,
USA, and Canada.
We possess multilingual capabilities,
command a high level of intercultural
expertise, and maintain a global network. This enables us to develop strategies tailored to the specific demands
of various judicial systems. We provide
counsel to international corporations,
as well as domestic and foreign law
firms, across diverse fields such as
biotechnology, chemistry, pharmaceuticals, electrical and mechanical arts,
trademarks, and designs.');

$template['we_offer'] = array(
   'title' => 'We offer',
   'text' => 'df-mp offers exceptional training to
become a European and/or a German
Patent Attorney, comprising immediate exposure to technical and legal
aspects of patent cases, supervised by
a qualified Attorney. The work is challenging and rewarding, and provides a
strong basis for trainees to be able to
pass the Qualifying Examinations. We
further provide a family-friendly, inclusive and flexible working environment.');

$template['we_look'] = array(
   'title' => 'We are looking for', 
   'text' => 'We are looking for technically-qualified
individuals with at least an MSc or PhD,
an excellent command of written and
spoken English, attention-to-detail and
motivation to apply these skills to the
protection of intellectual property in
exciting new areas of technology.');

$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => '',
    'img_url' => $awss3.'/companies/dfmp/interviewee_2024_1',
    'position' => '',
  
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
        'question' => 'Vorstellung des Unternehmens',
        'answer' => '<b>df-mp Dörries Frank-Molnia & Pohlman Patentanwälte Rechtsanwälte PartG mbB</b> ist eine international renommierte Kanzlei mit Sitz in München, die sich auf den Schutz geistigen Eigentums spezialisiert hat. Unsere Schwerpunkte liegen in den Bereichen Patentrecht, Markenrecht und Designrecht. <br> Wir bieten umfassende Beratung und Dienstleistungen für Mandanten aus verschiedensten High-Tech-Branchen, darunter Biowissenschaften, Chemie, Pharma, Mechanik, Elektronik und Kommunikationstechnologie. Unser Ziel ist es, innovative Unternehmen beim Schutz und der Verteidigung ihrer Technologien und Markenrechte zu unterstützen. Durch unser tiefes Fachwissen und unsere langjährige Erfahrung im nationalen und internationalen Umfeld helfen wir unseren Mandanten, ihre Innovationskraft optimal zu schützen und rechtlich abzusichern.',
      ),
      1 => array(
        'question' => 'Warum haben Sie sich für dieses Unternehmen entschieden?',
        'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Internationale Ausrichtung:</b> Als eine der führenden Kanzleien im Bereich des gewerblichen Rechtsschutzes bietet df-mp die Möglichkeit, in einem globalen Umfeld zu arbeiten. Mandanten aus der ganzen Welt und die Zusammenarbeit mit internationalen Partnern machen die Arbeit spannend und vielfältig.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Spezialisierung auf High-Tech-Branchen:</b> Die Kanzlei berät Mandanten aus innovativen und zukunftsweisenden Industrien wie Biowissenschaften, Chemie, Pharma, Elektronik und Kommunikationstechnologie. Diese Branchen bieten spannende Herausforderungen und ermöglichen es, an hochkomplexen und technologisch fortschrittlichen Fällen mitzuwirken.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Breites Spektrum an Rechtsgebieten:</b> df-mp deckt ein breites Spektrum an Fachgebieten ab, darunter Patentrecht, Markenrecht, Designrecht und weitere Rechtsbereiche des gewerblichen Rechtsschutzes. Das bietet Kandidaten die Möglichkeit, sich in verschiedenen Bereichen weiterzuentwickeln und tiefes Fachwissen aufzubauen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Expertise und Renommee:</b> Als international anerkannte Kanzlei verfügt df-mp über ein hohes Ansehen in der Branche. Die Zusammenarbeit mit führenden Experten auf ihrem Gebiet bietet Kandidaten die Möglichkeit, von erstklassigen Fachleuten zu lernen und ihre Fähigkeiten weiter zu entwickeln.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Hochqualifiziertes Team:</b> Bei df-mp arbeiten erfahrene Patentanwälte, Rechtsanwälte und technische Experten, die in ihren jeweiligen Fachgebieten exzellent ausgebildet sind. Neueinsteiger profitieren von einem Umfeld, das Wissenstransfer und Teamarbeit fördert.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Unterstützung bei der Ausbildung:</b> Für angehende Patentanwälte bietet df-mp eine fundierte Ausbildung und begleitet sie auf dem Weg zur vollen beruflichen Qualifikation. Die Kanzlei investiert in die Weiterbildung ihrer Mitarbeiter, um sicherzustellen, dass sie stets auf dem neuesten Stand der Rechtsprechung und Technologie bleiben.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Starke Werte und Kultur:</b> Bei df-mp wird eine offene, respektvolle und unterstützende Arbeitskultur gepflegt. Teamarbeit, Transparenz und Professionalität werden großgeschrieben, was eine angenehme und produktive Arbeitsatmosphäre schafft.</td>
        </tr>
        </table>',
      ),
      2 => array(
        'question' => 'Welche Karrieremöglichkeiten bietet Ihr Unternehmen für Studierende und Absolventen im Bereich der Chemie, Biochemie, Chemieingenieurswesen, Pharmazie und Pharmazeutische Wissenschaften?',
        'answer' => '<b>Vielfältige Karrierechancen:</b> Ob Berufseinsteiger oder erfahrener Anwalt – df-mp bietet langfristige Karriereperspektiven mit der Möglichkeit, sich zu spezialisieren, in anspruchsvolle Positionen hineinzuwachsen und Mandanten auf höchstem Niveau zu betreuen.',
      ),
      3 => array(
        'question' => 'Welche Studiengänge stellen Sie bevorzugt ein? Gibt es spezielle Einstiegsprogramme oder Praktika, die Sie anbieten?',
        'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Naturwissenschaften:</b> Studiengänge wie Biologie, Chemie, Physik, Biochemie und Biotechnologie sind besonders relevant. Dies liegt an der starken Spezialisierung der Kanzlei auf Patente in den Bereichen Biowissenschaften, Pharma und Chemie.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Pharmazie und Medizin:</b> Aufgrund der Spezialisierung auf Pharma- und Biotechnologiepatente sucht df-mp auch Absolventen der Pharmazie und medizinischer Studiengänge.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Ingenieurwissenschaften:</b> Studiengänge wie Maschinenbau, Elektrotechnik, Informationstechnik und verwandte technische Disziplinen sind ebenfalls sehr gefragt. Diese Fachrichtungen passen zu den technischen Patenten, die df-mp für Mandanten aus der Mechanik- und Elektronikbranche bearbeitet.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Rechtswissenschaften:</b> Bewerber mit einem abgeschlossenen Studium der Rechtswissenschaften, insbesondere mit einem Schwerpunkt auf gewerblichem Rechtsschutz oder einem Interesse daran, sind ebenfalls bestens geeignet.</td>
        </tr>
        </table>
        <br>
        Ja, df-mp bietet verschiedene Möglichkeiten für den Einstieg und die Ausbildung:
        <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Ausbildung zum Patentanwalt:</b> Für Absolventen der Naturwissenschaften oder Ingenieurwissenschaften bietet df-mp ein umfassendes Ausbildungsprogramm zum Patentanwalt. Diese Ausbildung beinhaltet sowohl die interne Schulung in der Kanzlei als auch die Vorbereitung auf das deutsche und das europäische Patentanwalts-Examen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Referendariat:</b> Rechtsreferendare haben bei df-mp die Möglichkeit, ihre Wahlstation im Bereich des gewerblichen Rechtsschutzes zu absolvieren. Dies ist eine wertvolle Gelegenheit, praktische Erfahrungen im Patentrecht zu sammeln und sich auf eine spätere Karriere in diesem Bereich vorzubereiten.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Direkteinstieg:</b> Für qualifizierte Absolventen bietet df-mp auch den Direkteinstieg als Patentanwalt oder Rechtsanwalt an, je nach vorhandener Qualifikation und Spezialisierung. Kandidaten erhalten die Möglichkeit, an hochkomplexen Fällen mitzuarbeiten und werden intensiv betreut und gefördert.</td>
        </tr>
        </table>',
      ),
      4 => array(
        'question' => 'Welche Qualifikationen und Fähigkeiten suchen Sie bei Bewerbern für wissenschaftliche Positionen in Ihrem Unternehmen?',
        'answer' => '<table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Exzellente Fachkenntnisse:</b> Bewerber sollten fundiertes Wissen in ihrem jeweiligen Fachgebiet mitbringen, insbesondere in den Bereichen Naturwissenschaften (Biologie, Chemie, Physik, Biotechnologie) oder Ingenieurwissenschaften (Maschinenbau, Elektrotechnik, Informationstechnik). Ein abgeschlossenes Hochschulstudium (Dipl. oder M.Sc.) ist vorausgesetzt, eine Promotion vorteilhaft.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Analytisches Denken:</b> Bewerber müssen in der Lage sein, komplexe wissenschaftliche und technische Sachverhalte zu analysieren und verständlich darzustellen. Die Arbeit mit Patenten erfordert ein hohes Maß an analytischer Präzision und die Fähigkeit, technische Details in rechtliche Argumentationen umzusetzen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Sprach- und Kommunikationsfähigkeiten:</b> Da die Tätigkeit stark von schriftlicher und mündlicher Kommunikation geprägt ist, werden ausgezeichnete Englischkenntnisse sowie klare und präzise Ausdrucksfähigkeit in Wort und Schrift erwartet. Da df-mp international tätig ist, sind verhandlungssichere Englischkenntnisse vorausgesetzt, weitere Fremdsprachen sind von Vorteil, aber nicht zwingend notwendig.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Detailorientierung:</b> Die Arbeit mit Patenten erfordert ein hohes Maß an Genauigkeit, da kleine Fehler oder Unachtsamkeiten schwerwiegende Folgen haben können.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Lernbereitschaft und Flexibilität:</b> Da sich das Patentrecht ständig weiterentwickelt und technologische Neuerungen rasch voranschreiten, sollten Bewerber bereit sein, sich kontinuierlich weiterzubilden und sich in neue technische und rechtliche Themen einzuarbeiten.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Teamfähigkeit:</b> Patentanwälte und technische Experten arbeiten eng mit anderen Anwälten, Mandanten und Kollegen zusammen, um optimale Lösungen zu finden. Deshalb ist die Fähigkeit zur Zusammenarbeit in einem interdisziplinären Team von großer Bedeutung.</td>
        </tr>
        </table>',
      ),
      5 => array(
        'question' => 'Wie engagiert sich Ihr Unternehmen in Bezug auf Nachhaltigkeit und Umweltschutz?',
        'answer' => 'Ein zentraler Bestandteil dieses Engagements ist die Umstellung auf eine vollständig elektronische Arbeitsweise. In unserer Kanzlei gibt es keine Papierakten mehr, was nicht nur die Effizienz erhöht, sondern auch einen wichtigen Beitrag zur Reduzierung des Papierverbrauchs leistet. Durch die Digitalisierung sämtlicher Arbeitsprozesse sparen wir Ressourcen und reduzieren den ökologischen Fußabdruck der Kanzlei erheblich.',
      ),
      6 => array(
         'question' => 'In welchen Regionen oder Ländern ist Ihr Unternehmen tätig? Gibt es internationale Karrieremöglichkeiten?',
         'answer' => '<b>Regionen und Länder:</b> df-mp hat seinen Sitz in <b>München</b>, einem der wichtigsten Zentren für den gewerblichen Rechtsschutz in Europa. Durch unsere Tätigkeit im Bereich Patentrecht, Markenrecht und weiteren Gebieten des geistigen Eigentums sind wir jedoch nicht nur national, sondern vor allem international tätig. Unsere Mandanten stammen aus verschiedenen Ländern und Branchen weltweit.',
      ),
      7 => array(
         'question' => 'Welche Möglichkeiten bieten Sie für die berufliche Weiterentwicklung und Fortbildung Ihrer Mitarbeitenden?',
         'answer' => 'df-mp legt großen Wert auf die berufliche Weiterentwicklung und Fortbildung seiner Mitarbeiter. Unser Ziel ist es, unseren Anwälten und wissenschaftlichen Mitarbeitern die besten Möglichkeiten zu bieten, ihre Fähigkeiten kontinuierlich auszubauen und sich beruflich weiterzuentwickeln. Dazu bieten wir eine Vielzahl von Programmen und Unterstützungsmöglichkeiten:
         <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Ausbildung zum Patentanwalt:</b> Für Naturwissenschaftler und Ingenieure bietet df-mp ein strukturiertes Ausbildungsprogramm zum deutschen und europäischen Patentanwalt. Während dieser Ausbildung arbeiten die Kandidaten eng mit erfahrenen Patentanwälten zusammen und werden intensiv auf die erforderlichen Prüfungen vorbereitet. Die Ausbildung umfasst sowohl interne Schulungen als auch externe Kurse.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Weiterbildung für Rechtsanwälte:</b> Für Juristen bietet df-mp ebenfalls umfangreiche Weiterbildungsmöglichkeiten. Dies umfasst Schulungen im Bereich des gewerblichen Rechtsschutzes sowie die Unterstützung bei der Spezialisierung auf spezifische Rechtsgebiete, wie Patentrecht, Markenrecht oder Designrecht. Hierbei fördern wir auch den Erwerb zusätzlicher Qualifikationen, beispielsweise als Fachanwalt für gewerblichen Rechtsschutz.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Mentoring und individuelles Coaching:</b> Jeder Mitarbeiter bei df-mp wird durch erfahrene Mentoren unterstützt. Diese stehen für fachliche und persönliche Beratung zur Verfügung, begleiten den Lernprozess und helfen, individuelle Stärken zu fördern. Dieses Mentoring-Programm ermöglicht es unseren Mitarbeitern, sich kontinuierlich zu verbessern und klare Karriereziele zu setzen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Internationale Schulungen und Konferenzen:</b> Da df-mp international tätig ist, bieten wir unseren Mitarbeitern die Möglichkeit, an internationalen Schulungen, Seminaren und Konferenzen teilzunehmen. Diese Veranstaltungen bieten eine hervorragende Gelegenheit, sich über die neuesten Entwicklungen im Bereich des gewerblichen Rechtsschutzes zu informieren, Netzwerke zu erweitern und Einblicke in die internationale Rechtspraxis zu gewinnen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Langfristige Karriereplanung:</b> Wir legen großen Wert auf die langfristige Karriereentwicklung unserer Mitarbeiter. In regelmäßigen Gesprächen wird die berufliche Laufbahn besprochen, und es werden individuelle Entwicklungsziele festgelegt.</td>
        </tr>
        </table>',
      ),
      8 => array(
         'question' => 'Wie würden Sie die Unternehmenskultur in Ihrem Unternehmen beschreiben, insbesondere im Hinblick auf Teamarbeit und Zusammenarbeit?',
         'answer' => 'Die Unternehmenskultur bei df-mp zeichnet sich durch ein starkes Engagement für Teamarbeit, offene Kommunikation und gegenseitige Unterstützung aus. In unserer Kanzlei ist Zusammenarbeit ein zentraler Bestandteil des täglichen Arbeitslebens, sowohl innerhalb der Teams als auch abteilungsübergreifend.
         <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Teamarbeit im Fokus:</b> Bei df-mp arbeiten wir in interdisziplinären Teams, die Patentanwälte, Rechtsanwälte und wissenschaftliche Experten vereinen. Diese enge Zusammenarbeit ermöglicht es, komplexe Mandantenfälle aus unterschiedlichen Blickwinkeln zu betrachten und innovative Lösungen zu entwickeln. Jeder Beitrag wird geschätzt, und der Wissensaustausch zwischen verschiedenen Fachrichtungen und Ebenen wird aktiv gefördert.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Flache Hierarchien und offene Kommunikation:</b> Die Unternehmenskultur bei df-mp ist geprägt von flachen Hierarchien, was eine offene Kommunikation und den direkten Austausch zwischen allen Mitarbeitern erleichtert. Jeder ist ermutigt, Fragen zu stellen, Ideen einzubringen und sich aktiv an der Gestaltung von Prozessen zu beteiligen. Diese Offenheit schafft ein Arbeitsumfeld, in dem sich alle Mitarbeiter wohlfühlen und ihre Fähigkeiten optimal entfalten können.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Unterstützung und Mentoring:</b> Ein wichtiger Bestandteil der Kultur bei df-mp ist die Förderung der individuellen Entwicklung. Erfahrene Kollegen fungieren als Mentoren und bieten Unterstützung, insbesondere für jüngere Mitarbeiter. Durch diese Betreuung wird nicht nur der Wissenstransfer gestärkt, sondern auch ein Klima der gegenseitigen Hilfe und des Lernens geschaffen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Vertrauensvolles Arbeitsumfeld:</b> Vertrauen und Respekt sind Grundpfeiler der Zusammenarbeit bei df-mp. Unsere Mitarbeiter arbeiten eigenverantwortlich, aber stets im Wissen, dass sie sich auf die Unterstützung des Teams verlassen können. Diese vertrauensvolle Arbeitsumgebung fördert Eigeninitiative und ermöglicht es den Mitarbeitern, ihre besten Leistungen zu erbringen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Internationalität und kulturelle Vielfalt:</b> Da df-mp international tätig ist, wird kulturelle Vielfalt bei uns großgeschrieben. Die Zusammenarbeit mit Kollegen und Mandanten aus verschiedenen Ländern schafft ein dynamisches und offenes Arbeitsklima. Wir schätzen die unterschiedlichen Perspektiven und Hintergründe unserer Mitarbeiter und betrachten sie als wertvolle Bereicherung für die Teamarbeit.</td>
        </tr>
        </table>',
      ),
      9 => array(
         'question' => 'Können Sie den typischen Bewerbungsprozess in Ihrem Unternehmen erläutern? Haben Sie Tipps für erfolgreiche Bewerbungen?',
         'answer' => '<b>Typischer Bewerbungsprozess bei df-mp:</b>
         <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Bewerbung per E-Mail:</b> Der Bewerbungsprozess bei df-mp beginnt mit der Einreichung der Bewerbungsunterlagen per E-Mail. Bewerber senden ihren Lebenslauf, ein aussagekräftiges Anschreiben sowie relevante akademische Zeugnisse und Referenzen an die Personalabteilung.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Sichtung der Unterlagen:</b> Nach dem Eingang der Bewerbung werden die Unterlagen von der Personalabteilung und den relevanten Fachbereichen sorgfältig geprüft. Dabei legen wir besonderes Augenmerk auf die fachliche Eignung, die bisherigen Erfahrungen und den Motivationshintergrund des Bewerbers.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Erstes Interview:</b> Bei Interesse seitens der Kanzlei werden die Bewerber zu einem ersten persönlichen Interview eingeladen. Dieses Gespräch dient dem gegenseitigen Kennenlernen und bietet die Möglichkeit, sowohl über die fachlichen Qualifikationen als auch über die Motivation und die Erwartungen des Bewerbers zu sprechen. Hierbei stehen die fachlichen Kenntnisse, die Studienerfahrungen sowie die persönlichen Stärken und die Fähigkeit zur Teamarbeit im Fokus.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Zweites Interview:</b> In der Regel folgt ein zweites Interview, in dem vertiefende Gespräche über die Ziele des Bewerbers und die Anforderungen der Position geführt werden. Dieses Gespräch bietet eine weitere Gelegenheit, offene Fragen zu klären und die gegenseitige Passung genauer zu prüfen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Entscheidung und Angebot:</b> Nach den Interviews treffen wir eine Entscheidung. Erfolgreiche Bewerber erhalten zeitnah ein Angebot mit den Konditionen der Zusammenarbeit. Bei einer Zusage folgt dann der Vertragsabschluss.</td>
        </tr>
        </table>',
      ),
      10 => array(
         'question' => 'Wie können interessierte Studierende und Absolventen am besten mit Ihrem Unternehmen in Kontakt treten und Ihr berufliches Netzwerk erweitern?',
         'answer' => 'Interessierte Studierende und Absolventen können auf mehrere Weise mit df-mp in Kontakt treten, um sich über Karrieremöglichkeiten zu informieren und ihr berufliches Netzwerk zu erweitern:
         <table class="fa-table">
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>Per E-Mail:</b> Der direkte Weg zur Kontaktaufnahme ist per E-Mail. Studierende und Absolventen können ihre Fragen, Interessen oder Bewerbungen an die entsprechende E-Mail-Adresse der Kanzlei richten. Eine proaktive Kontaktaufnahme mit einem gut formulierten Anschreiben ist ein hervorragender erster Schritt, um mit unserem Team ins Gespräch zu kommen. Wir ermutigen Interessierte, ihre Fragen zu Karriere- und Ausbildungsmöglichkeiten zu stellen.</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>E-Mail-Kontakt:</b> career@df-mp.com</td>
        </tr>
        <tr>
        <td><i class="fas fa-fw fa-chevron-right"></td>
        <td><b>LinkedIn:</b> df-mp ist auch auf LinkedIn aktiv.</td>
        </tr>
        </table>',
      ),
    ),
  );

include('../0_template/template.php');


?>
