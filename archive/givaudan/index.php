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


$template['company_name'] = 'Givaudan';
$template['company_name_short'] = 'givaudan';
$template['logo_url'] = $awss3_archive.'/givaudan/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.givaudan.com/','givaudan.com');
$template['facebook'] = array('https://www.facebook.com/discovergivaudan', 'Givaudan');
$template['linkedin'] = array('https://www.linkedin.com/company/givaudan/','Givaudan');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'Givaudan is the global leader in the creation of flavours and fragrances. In close collaboration with food, beverage, consumer product and fragrance partners, Givaudan develops tastes and scents that delight consumers the world over. With a passion to understand consumers’ preferences and a relentless drive to innovate, Givaudan is at the forefront of creating flavours and fragrances that ‘engage your senses’. The Company achieved sales of CHF 4.7 billion in 2016. Headquartered in Switzerland with local presence in over 98 locations, the Company has more than 10,476 employees worldwide.',
  'Givaudan is the global leader in the creation of flavours and fragrances. In close collaboration with food, beverage, consumer product and fragrance partners, Givaudan develops tastes and scents that delight consumers the world over. With a passion to understand consumers’ preferences and a relentless drive to innovate, Givaudan is at the forefront of creating flavours and fragrances that ‘engage your senses’. The Company achieved sales of CHF 4.7 billion in 2016. Headquartered in Switzerland with local presence in over 98 locations, the Company has more than 10,476 employees worldwide.');
$template['we_offer'] = array(
  'At Givaudan, everyone impacts the world of millions of people. We can only do so, by living our longstanding culture. We live by our DNA values, which guide us in all we do. Inspiring, Challenging and with Heart &amp; Soul.',
  'At Givaudan, everyone impacts the world of millions of people. We can only do so, by living our longstanding culture. We live by our DNA values, which guide us in all we do. Inspiring, Challenging and with Heart &amp; Soul.');
$template['we_look'] = array(
  'Are you someone who wants to grow and shape your own world? Who thrives being in a culture where you can express yourself in a creative team environment? Who wants to collaborate and learn together with teams who are as passionate as you are? Then come join us - and impact your world.',
  'Are you someone who wants to grow and shape your own world? Who thrives being in a culture where you can express yourself in a creative team environment? Who wants to collaborate and learn together with teams who are as passionate as you are? Then come join us - and impact your world.');


  $i=0;
  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Corinne Baumgartner',
    'img_url' => set_source($awss3_archive.'/givaudan/interview-2017-1', 'png', FALSE),
    'position' => array('Portfolio Manager', 'Portfolio Manager'),

    'education' => array(
      0 => array(
        'date' => '1999-2003',
        'desc' => array('Diplom Chemie/Biologie ETH Zürich','Diploma Chemistry/Biology ETH Zürich')
      ),
      1 => array(
        'date' => '2004-2007',
        'desc' => array('Doktor in Organischer Chemie ETH Zürich','PhD in Organic Chemistry ETH Zürich')
      ),
      2 => array(
        'date' => '2007-2008',
        'desc' => array('Postdoc California Institute of Technology','Postdoc at California Institute of Technology')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2009-2015',
        'desc' => array('Research Scientist','Research Scientist')
      ),
      1 => array(
        'date' => '2015-2016',
        'desc' => array('Senior Research Scientist','Senior Research Scientist')
      ),
      2 => array(
        'date' => '2016',
        'desc' => array('Portfolio Manager','Portfolio Manager')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Portfolio Manager bei Givaudan?",
          "What do you do as a Portfolio Manager at Givaudan?"),
        'answer' => array(
          "Ich bin zur Zeit Portfolio Manger für Frangrances S&ampT und Ingredients Research und verantwortlich für unsere Forschungsprogamme. In dieser Rolle stelle ich sicher, dass unsere Projekte mit unseren Geschäftsprioritäten übereinstimmen, definiere business cases, konsolidiere Innovationsbedürfnisse, überwache Projektfortschritte, bestätige wichtige Entscheidungen und messe die Performance unserer Pipeline. Ich führe ausserdem einige bestimmte Projekte und unsere Launch Committees für Moleküle, die kurz vor der Kommerzialisierung stehen.",
          "I am currently the Portfolio Manager for Fragrances S&ampT/Ingredients Research and responsible for our research programs. Within this role I ensure that our projects are in line with business priorities, define business cases, consolidate innovation needs, monitor project progresses, validate key decisions and measure our pipeline’s performance. I am also leading selected projects as well as our launch committees for molecules which are close to commercialization.")
      ),
      1 => array(
        'question' => array(
          "Arbeiten Sie hauptsächlich in Dübendorf oder ist Ihre Position mit vielen Reisen verbunden?",
          "Are you working in Dübendorf most of the time or does your position entail a lot of travelling?"),
        'answer' => array(
          "Ich bin in Dübendorf und reise ein- bis zweimal im Monat in eines unserer anderen Forschungszentren.",
          "I am based in Dübendorf and am travelling to our other research centers once or twice a month.")
      ),
      2 => array(
        'question' => array(
          "Was waren Ihre Aufgaben als Sie als Research Scientist im Discovery Team angefangen haben?",
          "What did you do in your starting position as a Research Scientist in the discovery team?"),
        'answer' => array(
          "Das Discovery Team ist für die Entwicklung neuer Zutaten verantwortlich, welches mein Hauptziel während meiner Zeit als Research Scientist war. Zusammen mit meinem Team aus Laboranten und Lehrlingen erforschten wir die Welt der organischen Chemie um unseren Parfümeuren neue Moleküle liefern zu können.",
          "The Discovery team is responsible for the development of new fragrance ingredients which was my main goal during my time as a Research Scientist. Together with my team of technicians and apprentices we were exploring the world of organic chemistry to deliver novel molecules for our perfumers.")
      ),
      3 => array(
        'question' => array(
          "Sind nur Chemiker in Ihrem Team oder ist es interdisziplinär?",
          "Are there only chemists in the team or is it interdisciplinary?"),
        'answer' => array(
          "Die Ingredients Research Group in Dübendorf besteht hauptsächlich aus Chemiker, Biologen und Parfümeuren. Besonders die Zusammenarbeit mit den Parfümeuren ist sehr spannend und war etwas komplett Neues für mich, als ich bei Givaudan angefangen habe. Die Fähigkeit das, was im Labor hergestellt wurde, sofort bewerten zu können, ist etwas sehr Einzigartiges für unser Geschäftsfeld. Wir arbeiten in einem faszinierenden Umfeld, in dem die Wissenschaft die Kunst trifft.",
          "The Ingredients Research group in Dübendorf consists mainly of chemists, biologists and perfumers. Especially the teamwork with the perfumers is exciting and was totally new for me when I started at Givaudan. The ability to directly evaluate what has been created in the lab is quite unique for our industry. We work in a fascinating environment where science meets art.")
      ),
      4 => array(
        'question' => array(
          "Wie häufig kommt es vor, dass Wissenschaftler ihre Position innerhalb von Givaudan wechseln – so wie Sie es getan haben?",
          "How common is it for chemists to switch to a different position within Givaudan, as you did?"),
        'answer' => array(
          "Bei Givaudan hat jeder Angestellte die Chance seine Karriere nach seinen eigenen professionellen Interessen zu formen. Daher gibt es keine allgemeine Vorgehensweise und jeder 'Fall' wird gesondert behandelt.",
          "At Givaudan, every employee has the chance to build and shape its own career according to his/her professional interests, therefore a common approach does not exist and every 'case' is treated separately.")
      ),
      5 => array(
        'question' => array(
          "Ihre Dissertation war darauf konzentriert, neue organische Moleküle zu synthetisieren, die an bestimmte Enzym-Pockets binden. Das Ziel war die Etablierung eines neuen Bekämpfungsweges für Malariapathogene. Konnten Sie diese Erfahrung bei Ihren Aufgaben bei Givaudan nutzen?",
          "Your dissertation was focused on synthesizing new organic molecules, which target specific enzymatic pockets in order to establish a new pathway to target Malaria pathogens. Were you able to use this experience in your tasks at Givaudan?"),
        'answer' => array(
          "Im Bezug auf strukturbasiertes Design neuer Moleküle, war mein Hintergrund mit Sicherheit von Vorteil. Duftstoffe binden jedoch nicht spezifisch an nur einem olfaktorischen Rezeptor, daher ist unsere Herangehensweise schon etwas anders, als das was ich während meines Doktorats gemacht habe. Am Ende müssen Moleküle, die auf dem Papier entworfen wurden, immernoch im Labor hergestellt werden. Daher geht es am Ende wieder zurück zu den Anfängen und darum unsere synthetischen Fähigkeiten anzuwenden um am Ende ein echtes Sample in der Hand zu halten.",
          "Regarding structure based design of new molecules it was for sure helpful to have this background. However, fragrance molecules may not bind specifically to only one olfactory receptor and therefore our approaches are a bit different to what I have done during my PhD. But in the end the molecules which are designed on paper need to be prepared in the lab. So it’s back to the roots trying to apply our skills in synthetic chemistry to get a real sample into our hands.")
      ),
      6 => array(
        'question' => array(
          "Wie einfach war der Übergang von Ihrem PostDoc zu Givaudan? Wie unterscheidet sich die Arbeit in einer OC-Gruppe zur Arbeit in der Industrie?",
          "How easy was the transition from your postdoctoral position to Givaudan? How does work in an organic chemistry group differ from work in industry?"),
        'answer' => array(
          "Es hat etwas gedauert, bis ich mich an die neue Umgebung, das neue Equipment und die neuen Abläufe gewöhnt hatte. Alles in allem war es aber ein einfacher Übergang. Im Bezug auf die Teamführung hat es sicher geholfen, dass ich während meines Doktorats Studenten betreut habe. Vom synthetischen Aspekt her, sind die Größe der Ansätze und der frühe Fokus auf die industrielle Machbarkeit der größte Unterschied, aber am Ende des Tages ist es immernoch Chemie. Während meines Doktorats und meines Postdocs habe ich mich immer auf ein bestimmtes Projekt konzentriert, während ich bei Givaudan normalerweise an verschiedenen Projekten mit verschiedenen Teams beteiligt bin. Die Teams haben unterschiedlichste Hintergründe, was die Arbeit sehr inspirierend und vielseitig macht. Der Fokus liegt definitiv auf Projekten die von Geschäftsinteresse sind und die Zeit bis zur Marktreife ist der wichtigste Faktor.",
          "It took some time to get used to the new environment, equipment and the processes but overall the transition was smooth. Regarding leading a team, it certainly helped that I was supervising students during my PhD. From a synthetic point of view, reaction scale and an early focus on industrial feasibility might be the biggest differences, but again, it’s still chemistry. Whereas during the PhD and the postdoc I was focusing on a single project, at Givaudan we are usually working on several projects in different teams with people having various backgrounds which is very inspiring and diverse. The focus clearly is on projects driven by business needs and time to market is crucial.")
      ),
      7 => array(
        'question' => array(
          "Was hat Sie dazu bewogen, sich Givaudan als Arbeitgeber auszusuchen? Wie verlief Ihre Bewerbung – haben Sie sich auf eine ausgeschriebene Stelle beworben oder was es eine Initiativbewerbung?",
          "What led you to choose Givaudan as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
        'answer' => array(
          "Die Möglichkeit in der Geruchs- und Geschmacksindustrie zu arbeiten war sehr ansprechend und ich mochte die Vielfalt an Stellen, die Givaudan anbietet. Auf einem Stockwerk erforschen wir neue chemische Reaktionen für fragrance ingredients und auf einem anderen benutzen wir Geschmacksstoffe in Anwendungen für Eiscreme oder Kekse. Meine eigentliche Bewerbung war eine Initiativbewerbung per eMail und ich war glücklicherweise zur richtigen Zeit am richtigen Ort. Ich war nämlich nur 2 Wochen in den 'Ferien' in der Schweiz und habe versucht so viele Bewerbungsgespräche wie möglich in dieser Zeit zu absolvieren.",
          "Getting the opportunity to work within the Fragrance and Flavour industry was very appealing and I liked the diversity of jobs offered at Givaudan. On one floor we are exploring new chemical reactions for fragrance ingredients and on the other we use flavours in applications as ice cream or cookies. Regarding my job application it was an speculative application by eMail and I was lucky to be at the right place at the right time. I spent two weeks of “holiday” in Switzerland and tried to get as many interviews as possible during this time.")
      ),
      8 => array(
        'question' => array(
          "Gibt es Praktika oder andere Möglichkeiten sich aus erster Hand ein Bild von der Arbeit bei Givaudan zu machen?",
          "Are there internships or other programs that would allow students or graduates to see firsthand how it is to work at Givaudan?"),
        'answer' => array(
          "Wir haben normalerweise mindestens 2 Studentenpraktika in den Discovery und den Process Research groups. Sie werden auf unserer Homepage und auch zum Beispiel auf LinkedIn ausgeschrieben.",
          "We usually have at least two internships each year for students within the Discovery and the Process Research groups. These programs are announced on our homepage as well as for example on LinkedIn.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Ich denke dass es wichtig ist, flexibel zu sein. Man sollte auch offen bleiben gegenüber jobs außerhalb der eigenen comfort zone oder den großen und bekannten Arbeitgebern. Man sollte früh genug mit dem Bewerbungsprozess anfangen, da es meisten länger dauert als man denkt.",
          "I think it is important to be flexible and keep an open mind about jobs outside your comfort zone and of the big and well known employers. Try to start early enough with the application process as it might take more time than you initially assumed.")
      ),
    ),
  );

  $template['interview']['2017'][$i++] = array(
    'name' => 'Dr. Baptiste Jaquet',
    'img_url' => set_source($awss3.'/img/team/2018/user_default', 'jpg', FALSE),
    'position' => array('Reaction Flavourist Trainee', 'Reaction Flavourist Trainee'),

    'education' => array(
      0 => array(
        'date' => '2007-2010',
        'desc' => array('BSc Chemical and Bioengineering EPFL Lausanne','BSc Chemical and Bioengineering EPFL Lausanne')
      ),
      1 => array(
        'date' => '2010-2011',
        'desc' => array('MSc Chemical and Bioengineering ETH Zürich','MSc Chemical and Bioengineering ETH Zürich')
      ),
      2 => array(
        'date' => '2011-2016',
        'desc' => array('Doktor Chemical Engineering ETH Zürich','PhD Chemical Engineering ETH Zürich')
      ),
    ),

    'career' => array(
      0 => array(
        'date' => '2016',
        'desc' => array('Reaction Flavourist Trainee','Reaction Flavourist Trainee')
      ),
    ),

    'interview' => array(
      0 => array(
        'question' => array(
          "Was sind Ihre Aufgaben als Reaction Flavourist Trainee bei Givaudan?",
          "What do you do as a Reaction Flavourist Trainee at Givaudan?"),
        'answer' => array(
          "Ich bin zur Zeit in einem Training, welches in den ersten drei Arbeitsjahren stattfindet. Es erlaubt neuen 'Flavour creators' während der Arbeit zu lernen, sich Zeit zu nehmen, neue Leute kennenzulernen und mit Ideen zu experimentieren. Meine Aufgabe besteht darin, neue Produkte und Produktionstechnologien zu entwickeln. Dies beinhaltet mit Creation und Application Teams zusammenzuarbeiten, genauso wie mit der Marketing- und der Regulierungsabteilung. Sobald ein Produkt entwickelt wurde, stellen mein Team und ich die Industrialisierung (upscaling) sicher. Dies erfordert eine Menge Kreativität und bietet viel experimentellen Freiraum.",
          "I am currently  in a continuous training happening during the three first years of work, allowing new flavour creators to learn during the job and take time to meet people and experiment ideas. My job consists in developing new products and production technologies. This includes interacting with creation and application teams, with marketing and regulatory department. Once a product is developed, my team and I ensure its industrialization (upscaling). This job requires a lot of creativity and offers a lot of experimental freedom.")
      ),
      1 => array(
        'question' => array(
          "Sie sind ja relativ neu in der Firma – was sind Ihre Pläne und Ziele innerhalb von Givaudan?",
          "You are relatively new to the company, what are your plans and goals within Givaudan?"),
        'answer' => array(
          "Erstmal möchte ich mein Training abschliessen und besser Bescheid wissen, wie das Geschäft genau funktioniert. Ich bin mir immernoch nicht ganz sicher, ob ich auf der R&ampD-Seite bleiben möchte oder nicht doch irgendwann eine Rolle im Managment versuchen möchte.",
          "My first goal is to finish my training and get to better know how business works. I am still not sure if I want to stay on the R&ampD side or try out some management roles at some point.")
      ),
      2 => array(
        'question' => array(
          "Wie häufig trifft man Chemieingenieure bei Givaudan an? Haben alle einen Doktor oder gibt es auch MSc- oder BSc-Absolventen?",
          "How common is it to find chemical engineers at Givaudan? Do they have a PhD or are there also MSc or BSc graduates?"),
        'answer' => array(
          "Man findet häufiger Verfahrenstechniker als Chemieingenieure, obwohl es sehr darauf ankommt über welche Abteilung von Givaudan wir sprechen. Die meisten Ingenieure, die ich getroffen habe, haben einen Master in Verfahrenstechnik oder Maschinenbau.",
          "It is more common to find process engineers than chemical engineers, even though this is highly dependent on which division of Givaudan we are talking about. Most of the engineers that I met have a MSc in process or mechanical engineering.")
      ),
      3 => array(
        'question' => array(
          "In welchen Bereichen ist die Ingenieursperspektive gefragt?",
          "In which areas is the engineering perspective needed?"),
        'answer' => array(
          "Die Ingenieursperspektive ist tatsächlich grundlegend dafür, die komplexen Systeme zu verstehen, mit denen wir arbeiten. Chemieingenieure haben die Fähigkeit sich ein abstraktes Bild eines Prozesses oder eine chemischen Systems zu machen. Dies erlaubt die Herangehenwesie zu vereinfachen und zum Wesentlichen vorzudringen. Ich denke Chemieingenieure sind essentiell, um zwischen Chemie und Verfahrenstechnik zu vermitteln.",
          "The engineering perspective is actually essential for the understanding of the complex systems we are working with. Chemical engineers have the ability to build an abstract picture of a process or a chemical system, which allows them to simplify the approaches and get to the essential. I believe chemical engineers are essential to bridge chemistry and process engineering.")
      ),
      4 => array(
        'question' => array(
          "Wie oft interagieren Ingenieure wie Sie mit den anderen Naturwissenschaften bei Givaudan?",
          "How often do chemical engineers like you interact with other disciplines of the natural sciences at Givaudan?"),
        'answer' => array(
          "Ich komme fast täglich mit den anderen Naturwisschenschaften in Kontakt. Es gibt Mitarbeiter mit einem Hintergrund in Biotechnologie, Lebensmittelwissenschaften, Chemie oder Molekularbiologie. Ich habe dabei nie irgendwelche Kommunikationsprobleme feststellen können. Ich denke es ist Grundvorraussetzung, klar und effizient mit Personen aus anderen Disziplinen kommunizieren zu können, um in der Industrie arbeiten zu können. Das beinhaltet zum Beispiel auch Ergebnisse seinem Manager zu präsentieren.",
          "I interact with people from other disciplines almost daily. They have a biotechnology, food engineering, chemistry, or molecular biology background. I have never encountered any problems communicating with them. I think it is a prerequisite to be able to communicate clearly and efficiently with people from other fields in order to work in the industry. It includes communicating your results to your managers for example.")
      ),
      5 => array(
        'question' => array(
          "Wie einfach war der Übergang von der ETH zu Givaudan?",
          "How easy was the transition from ETH to Givaudan?"),
        'answer' => array(
          "Der Übergang verlief sehr glatt. Ich habe mich gut in die Teams eingefügt und lerne immernoch jeden Tag neue Möglichkeiten kennen, mich persönlich weiterzuentwickeln. Der große Unterschied ist die persönliche Verantwortung, die man in der Industrie trägt. Man muss in der Lage sein eine klare Strategie und Projektpläne zu formulieren um darzulegen was man tut. Das führt dazu dass man viel strukturierter, rationaler und direkter arbeitet. Der andere große Unterschied ist das Projekte normalerweise kürzer sind und man weniger eine emotionale Bindung aufbaut, wie zu einem PhD-Projekt. Das heißt auch dass man lernen muss konstruktiv mitzuarbeiten, auch wenn der eigene Beitrag nicht zwangsweise im Rampenlicht steht. Projekte in der Industrie sind ebenfalls viel realer. Man kann die Resultate seiner Projekte innerhalb weniger Monate in der Produktion sehen. Ich persönlich finde dies sehr zufriedenstellend.",
          "The transition to Givaudan was very smooth. I was integrated easily to the teams and I am still discovering new interesting personal development fields every day. The main difference is the accountability that you have in a company. You have to be able to communicate a clear strategy and project plans about what you are doing. This makes you work in a more structured, rational, and direct way. The other main difference is that projects are typically shorter and less emotionally involved than during a PhD. This involves learning how to participate constructively, even if sometimes your contribution is not under the spotlight. On the other hand, the projects in the industry are much more real. You can witness the results of your projects on the production scale in the run of a few months. I find this very satisfying.")
      ),
      6 => array(
        'question' => array(
          "Was hat Sie dazu bewogen, sich Givaudan als Arbeitgeber auszusuchen? Wie verlief Ihre Bewerbung – haben Sie sich auf eine ausgeschriebene Stelle beworben oder was es eine Initiativbewerbung?",
          "What led you to choose Givaudan as an employer? How did the application proceed – did you apply for an advertised position or was it a speculative application?"),
        'answer' => array(
          "Ich wollte mein Betätigungsfeld wechseln und etwas anderes als Polymere zu Gesicht bekommen. Ich hatte schon immer eine Leidenschaft für Kochen und das Probieren neuer Dinge. Als ich dann die Ausschreibung einer Stelle als „Food Chemist“ sah, beschloss ich es zu probieren. Insgeheim dachte ich, dass ich eh keine Chance habe, da ich überhaupt keine Erfahrung auf diesem Gebiet hatte. Die Personalabteilung und der Manager sahen trotzdem einige interessante Punkte in meinem Profil, welche nicht in der Ausschreibung zur Sprache kamen. Nach den anfänglichen Gesprächen – Betätigungsfeld, Art der Arbeit und Gehalt – entschloss ich mich die Stelle anzutreten.",
          "I wanted to change the field of my work and see something else than polymers. I always had a passion for cooking and tasting new things. So when I saw the advertisement for a “food chemist”, I decided to give it a try, thinking I had no chance to get through, since I had absolutely no background in this field. But the HR department and hiring manager saw some interesting features in my profile that were not listed in the job offer. After initial discussions, I found the job interesting – for the field, type of work and compensation- and decided to go ahead.")
      ),
      7 => array(
        'question' => array(
          "Was war Ihrer Meinung nach der ausschlagebendste Punkt dafür, dass Sie die Stelle bekommen haben?",
          "What was in your opinion the most important factor that allowed you to get the job?"),
        'answer' => array(
          "Das Schwierigste ist es durch die Aussortierung der Lebensläufe zu kommen. Dafür muss man Zeit investieren, in einen gutes Motivationsschreiben, welches klar erklärt warum das Angebot und die Firma für einen von Interesse ist und was man selber für die Firma zu bieten hat. Es lohnt sich auch etwas Geld zu investieren und ein professionelles Foto für den CV machen zu lassen – das wirkt Wunder!",
          "The most difficult part is to manage to get through the first CV sorting process. For this, you have to invest time in writing a good cover letter, which explains clearly why the offer and company interest you and what you think you can bring to the company. Invest a little bit of money to get a professional looking photo you can include in your CV – this works wonders!")
      ),
      8 => array(
        'question' => array(
          "Sie sprechen Englisch, Französisch und Deutsch – welche Sprache nutzen Sie am meisten während Ihrer Arbeit bei Givaudan?",
          "You speak English, French and German -  which one do you use more often at work at Givaudan?"),
        'answer' => array(
          "Givaudan ist eine multikulturelle Firma. Ich passe mich daher meistens an die Person an, mit der ich gerade rede. Die gemeinsame Basis ist natürlich Englisch. Alltäglich spreche ich allerdings hauptsächlich Deutsch, gefolgt von Englisch und danach Französisch.",
          "Givaudan is a multicultural company. So I mainly adapt to the people I am talking with. The common ground is of course English. But in my daily life, I mainly speak German, followed by English and then French.")
      ),
      9 => array(
        'question' => array(
          "Letzte Frage: Welchen Rat würden Sie einem 'frischen' ETH-Absolventen geben, der sich auf Jobsuche begibt?",
          "Last question: What would your advice be for someone who recently graduated from ETH and is looking for a job?"),
        'answer' => array(
          "Nehmen Sie sich Zeit um darüber nachzudenken, wie Sie kommunizieren. Das kann ausschlagebender sein, als Ihre eigentlichen Fähigkeiten, wenn Sie die ETH verlassen. Ihr zukünftiger Manager muss sich sicher sein, dass Sie sich in die Firma einfügen können und dass Sie in Teams konstruktiv mitarbeiten können. Versuchen Sie also Ihre Persönlichkeit während den Interviews zu zeigen und verstecken Sie sich nicht hinter durchformulierten Antworten. Vergessen Sie allerdings nicht, dass die Person Ihnen gegenüber jahrelange Erfahrung in diesem Feld hat – werden Sie also nicht zu hochnäsig.<br>Scheuen Sie sich auch nicht, sich auf Stellen zu bewerben, die Sie interessieren, selbst wenn Sie nicht genau dem Anforderungsprofil entsprechen. Sie wissen nie genau was die Firma eigentlich sucht und es könnte sich herausstellen dass einige Ihrer Fähigkeit sogar essentiell sind. Zuletzt würde ich es Ihnen empfehlen, rechtzeitig mit der Jobsuche zu beginnen und nicht die Hoffnung zu verlieren, wenn die ersten Rückmeldungen nicht positiv sind.",
          "Take some time to think about how you communicate. This may be more important than your actual skill when you get out of the ETH. Your hiring manager has to feel confident that you are able to adapt to the company, and that you will be able to work in teams in a constructive manner. So try to show your personality during the interviews, do not hide behind formatted answers. However, do not forget that the person in front of you probably has years of experience in his field, so try not to be too full of yourself.<br>Do not hesitate to apply for jobs which interest you, even if you do not fit exactly the requirement listed on the offer. You do not know exactly what the company is looking for, and it could be that some of your skills will reveal essential. Finally, would advise to start soon enough with your job search and also not to lose hope if your first experiences are not positive.")
      ),
    ),
  );


include('../0_template/template.php');

?>
