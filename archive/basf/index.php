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


$template['company_name'] = 'BASF';
$template['company_name_short'] = 'basf';
$template['logo_url'] = set_source($awss3_archive.'/basf/logo','png', FALSE);
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.basf.com','basf.com');
$template['facebook'] = array('https://facebook.com/basf/', 'BASF');
$template['linkedin'] = array('https://www.linkedin.com/company/basf/','BASF');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'At BASF, we create chemistry for a sustainable future. We combine economic success with environmental protection and social responsibility. The approximately 110,000 employees in the BASF Group work on contributing to the success of our customers in nearly all sectors and almost every country in the world. Further information at www.basf.com.',
  'At BASF, we create chemistry for a sustainable future. We combine economic success with environmental protection and social responsibility. The approximately 110,000 employees in the BASF Group work on contributing to the success of our customers in nearly all sectors and almost every country in the world. Further information at www.basf.com.');
$template['we_offer'] = array(
  'BASF offers a variety of entry and career opportunities at various sites for natural scientists, engineers and digital talents:
    <table class="fa-table">
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Direct entry: With a direct entry you will be assigned challenging tasks from day one.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Trainee programs: Our TOP START, START IN and Inside trainee programs offer ambitious university graduates an exciting career start in various fields.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Internship and thesis</td>
    </tr>
  </tr></table>',
  'BASF offers a variety of entry and career opportunities at various sites for natural scientists, engineers and digital talents:
    <table class="fa-table">
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Direct entry: With a direct entry you will be assigned challenging tasks from day one.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Trainee programs: Our TOP START, START IN and Inside trainee programs offer ambitious university graduates an exciting career start in various fields.</td>
    </tr>
    <tr>
    <td><i class="fas fa-fw fa-chevron-right"></td>
    <td>Internship and thesis</td>
    </tr>
  </tr></table>');
$template['we_look'] = array(
  'BASF relies on committed people with different experiences and perspectives. In addition to specialist knowledge and practical skills, the company values personal skills: A high degree of team spirit, good communication skills and intercultural skills are just as important as a sense of responsibility, entrepreneurial spirit and innovative spirit.', 'BASF relies on committed people with different experiences and perspectives. In addition to specialist knowledge and practical skills, the company values personal skills: A high degree of team spirit, good communication skills and intercultural skills are just as important as a sense of responsibility, entrepreneurial spirit and innovative spirit.' );

  $i=0;

  $template['interview']['2021'][$i++] = array(
    'name' => 'Dr. Nicolle Langer',
    'img_url' => set_source($awss3_archive.'/basf/interviewee_2021_1','png', FALSE),
    'position' => array('Head of Packaging & Labelling – Agricultural Solutions Europe','Head of Packaging & Labelling – Agricultural Solutions Europe'),
  
    'education' => array(
      0 => array(
        'date' => '2004-2005',
        'desc' => array('Postdoc with Fraser Stoddart, UCLA','Postdoc with Fraser Stoddart, UCLA' ),
      ),
      1 => array(
        'date' => '2000-2004',
        'desc' => array('Ph.D. with Francois Diederich, D-CHAB, ETH Zurich','Ph.D. with Francois Diederich, D-CHAB, ETH Zurich'),
      ),
      2 => array(
        'date' => '1995-2000',
        'desc' => array('Chemistry Studies, Netherlands and ETH Zurich','Chemistry Studies, Netherlands and ETH Zurich'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2005-present',
        'desc' => array('BASF', 'BASF'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What’s your current job description at BASF?','What’s your current job description at BASF?'),
        'answer' => array('I am group leader for packaging, labelling and artwork for agrochemical solutions in Europe.', 'I am group leader for packaging, labelling and artwork for agrochemical solutions in Europe.'),
      ),
      1 => array(
        'question' => array('At which BASF site are you currently working?', 'At which BASF site are you currently working?'),
        'answer' => array('My office is in Limburgerhof, Germany, but since 03/2020 I have worked mainly remotely in home office.','My office is in Limburgerhof, Germany, but since 03/2020 I have worked mainly remotely in home office.'),
      ),
      2 => array(
        'question' => array('What is a typical working day at BASF like?','What is a typical working day at BASF like?'),
        'answer' => array('Until 9 am, reading and answering emails. Afterwards, there are numerous alignments on technical and organizational topics.','Until 9 am, reading and answering emails. Afterwards, there are numerous alignments on technical and organizational topics.'),
      ),
      3 => array(
        'question' => array('How did it come, that you are now working at BASF? What made you aware of BASF?','How did it come, that you are now working at BASF? What made you aware of BASF?'),
        'answer' => array('BASF is a known company to most chemists. After my post-doc, I applied with several companies in and around Switzerland.  BASF was offering me the most interesting position.','BASF is a known company to most chemists. After my post-doc, I applied with several companies in and around Switzerland.  BASF was offering me the most interesting position.'),
      ),
      4 => array(
        'question' => array('How did the application process at BASF work?','How did the application process at BASF work?'),
        'answer' => array('I sent my application by (paper!)mail from the USA to Germany. On recruitment day, I held a scientific presentation and afterwards had several interviews. I received the offer to work for BASF on the same day.','I sent my application by (paper!)mail from the USA to Germany. On recruitment day, I held a scientific presentation and afterwards had several interviews. I received the offer to work for BASF on the same day.'),
      ),
      5 => array(
        'question' => array('How is BASF different from other companies in the chemical industry?','How is BASF different from other companies in the chemical industry?'),
        'answer' => array('Due to the size of the company and the numerous different business areas, there are good possibilities to develop oneself in almost any direction.  This was the main reason for me to choose for BASF 16 years ago.','Due to the size of the company and the numerous different business areas, there are good possibilities to develop oneself in almost any direction.  This was the main reason for me to choose for BASF 16 years ago.'),
      ),
      6 => array(
        'question' => array('What did you study, and do you think it prepared you well for your current role?','What did you study, and do you think it prepared you well for your current role?'),
        'answer' => array('I studied and did my PhD in chemistry. My first job at BASF was rather close to my Ph.D. topic, but my current job is hardly related to chemistry. A scientific education is a good basis for personal development, no matter in what direction one finally moves.','I studied and did my PhD in chemistry. My first job at BASF was rather close to my Ph.D. topic, but my current job is hardly related to chemistry. A scientific education is a good basis for personal development, no matter in what direction one finally moves.'),
      ),
      7 => array(
        'question' => array('What advice would you give to a recent ETH graduate, that is currently looking for a job?','What advice would you give to a recent ETH graduate, that is currently looking for a job?'),
        'answer' => array('Be open-minded, talk to people and read as much as possible job descriptions. Most likely, you will find out, what first direction you would like to take. Don´t worry too much about further steps.  
        ','Be open-minded, talk to people and read as much as possible job descriptions. Most likely, you will find out, what first direction you would like to take. Don´t worry too much about further steps.  
        '),
      ),
      8 => array(
        'question' => array('Since when do you work for BASF and how did your position change during this time?','Since when do you work for BASF and how did your position change during this time?'),
        'answer' => array('I have worked at BASF for 16 years, now being in my fourth position. I started, as almost every chemist, as lab team leader in research. Afterwards, I held positions in procurement and technology before taking over my current position. With every job change, I used my past experience and learned a lot of new things.','I have worked at BASF for 16 years, now being in my fourth position. I started, as almost every chemist, as lab team leader in research. Afterwards, I held positions in procurement and technology before taking over my current position. With every job change, I used my past experience and learned a lot of new things.'),
      ),
      9 => array(
        'question' => array('What are your plans at BASF?','What are your plans at BASF?'),
        'answer' => array('To stay interested and keep learning, no matter in what direction and/or position.','To stay interested and keep learning, no matter in what direction and/or position.')),
      10 => array(
        'question' => array('Is it possible to change between the divisions of BASF? Would it be for example possible to switch from R&D to production or marketing?','Is it possible to change between the divisions of BASF? Would it be for example possible to switch from R&D to production or marketing?'),
        'answer' => array('Absolutely yes: my career is the perfect example!','Absolutely yes: my career is the perfect example!')),
      11 => array(
        'question' => array('How important is the work-life balance at BASF? Are you satisfied with the work-life balance at BASF?','How important is the work-life balance at BASF? Are you satisfied with the work-life balance at BASF?'),
        'answer' => array('Work-life-balance is fundamental to me to stay energized. I am happy with my work-life balance: we have flexible working hours and it is fully accepted that the family (father and mother) needs time to take care of their kids.','Work-life-balance is fundamental to me to stay energized. I am happy with my work-life balance: we have flexible working hours and it is fully accepted that the family (father and mother) needs time to take care of their kids.')),
      12 => array(
        'question' => array('What do you like most about the corporate culture at BASF?','What do you like most about the corporate culture at BASF?'),
        'answer' => array('The strong network. For almost every question, you will find somebody who can help.','The strong network. For almost every question, you will find somebody who can help.')),
    )
  );
  


  $i=0;
  
  $template['interview'][2019][$i++] = array(
    'name' => 'Dr. Nikolas Huwyler',
    'img_url' => set_source($awss3_archive.'/basf/interviewee_2019_2', 'png', FALSE),
    'position' => array('Laboratory Team Leader','Laboratory Team Leader'),
  
    'education' => array(
      0 => array(
        'date' => '2009-2015',
        'desc' => array('Doctor of Sciences at ETH Zurich, Group of Prof. Carreira','Doctor of Sciences at ETH Zurich, Group of Prof. Carreira'),
      ),
      1 => array(
        'date' => '2008-2009',
        'desc' => array('Research Internship at MIT, Group of Prof. Jamison','Research Internship at MIT, Group of Prof. Jamison')
      ),
      2 => array(
        'date' => '2004-2009',
        'desc' => array('BSc and MSc in Chemistry at ETH Zurich','BSc and MSc in Chemistry at ETH Zurich')
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2017',
        'desc' => array('Laboratory Team Leader at BASF in Crop Protection Discovery','Laboratory Team Leader at BASF in Crop Protection Discovery'),
      ),
      1 => array(
        'date' => '2016-2017',
        'desc' => array('Postdoctoral Researcher at MPI for Coal Research, Group of Prof. Fürstner','Postdoctoral Researcher at MPI for Coal Research, Group of Prof. Fürstner'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What are your responsibilities as laboratory team leader at BASF?','What are your responsibilities as laboratory team leader at BASF?'),
        'answer' => array('As a research scientist in crop protection my main responsibility is the discovery of
        new molecules that possess high activities against target pests, while at the same
        time being safe for humans and impacting the environment as little as possible. In my
        daily work, this includes managing research projects, collaborating closely with
        experts from other disciplines – ranging e.g. from biology or agronomy to patents
        and marketing, leading technicians in the laboratory, communicating and
        documenting results, monitoring competitors, and, most importantly, coming up with
        new ideas for our pipe-line. In addition, I am also involved in a couple of interesting
        activities outside of research, such as helping to organize the 136 th International BASF
        Summer Course.','As a research scientist in crop protection my main responsibility is the discovery of
        new molecules that possess high activities against target pests, while at the same
        time being safe for humans and impacting the environment as little as possible. In my
        daily work, this includes managing research projects, collaborating closely with
        experts from other disciplines – ranging e.g. from biology or agronomy to patents
        and marketing, leading technicians in the laboratory, communicating and
        documenting results, monitoring competitors, and, most importantly, coming up with
        new ideas for our pipe-line. In addition, I am also involved in a couple of interesting
        activities outside of research, such as helping to organize the 136 th International BASF
        Summer Course.'),
      ),
      1 => array(
        'question' => array('What made you choose BASF as an employer? Can you describe how the application process worked for you?','What made you choose BASF as an employer? Can you describe how the application
        process worked for you?'),
        'answer' => array('In principle, quite simply because BASF offered me exactly the kind of position I was
        looking for at the time I was looking for it. Another important factor was, that I
        actually knew someone in the group I was applying to, and this person was always
        very positive about the position and BASF in general. For me, this positive picture was
        then further substantiated during my own interview, and ultimately convinced me to
        accept the offer – which to this day I have never regretted.<br>
        The application process itself was relatively similar to other larger chemistry or
        pharma companies. After filing an application on the company website, suitable
        candidates are asked to pass through an online assessment test, as well as a
        telephone interview. If successful, your dossier is forwarded to the hiring group
        leader, which selects a couple of candidates for on-site interviews. These interview
        days are usually comprised of a scientific talk by the candidate, several individual
        meetings with group leaders and executives, as well as a coffee-corner meeting with
        your potential future colleagues.','In principle, quite simply because BASF offered me exactly the kind of position I was
        looking for at the time I was looking for it. Another important factor was, that I
        actually knew someone in the group I was applying to, and this person was always
        very positive about the position and BASF in general. For me, this positive picture was
        then further substantiated during my own interview, and ultimately convinced me to
        accept the offer – which to this day I have never regretted.<br>
        The application process itself was relatively similar to other larger chemistry or
        pharma companies. After filing an application on the company website, suitable
        candidates are asked to pass through an online assessment test, as well as a
        telephone interview. If successful, your dossier is forwarded to the hiring group
        leader, which selects a couple of candidates for on-site interviews. These interview
        days are usually comprised of a scientific talk by the candidate, several individual
        meetings with group leaders and executives, as well as a coffee-corner meeting with
        your potential future colleagues.'),
      ),
      2 => array(
        'question' => array('During your PhD and your Postdoc, you focused on total synthesis. How can you
        apply your expertise in organic and organometallic chemistry in your daily work at
        BASF?','During your PhD and your Postdoc, you focused on total synthesis. How can you
        apply your expertise in organic and organometallic chemistry in your daily work at
        BASF?'),
        'answer' => array('I would say that I profit quite a lot from my background in total synthesis since, at
        least from a chemistry perspective, my current position is mostly about how to
        efficiently make a wide variety of relatively complex molecules in a short time. In this
        regard, it is a real advantage to have experience in devising synthetic strategies and
        being familiar with many different types of reactions.','I would say that I profit quite a lot from my background in total synthesis since, at
        least from a chemistry perspective, my current position is mostly about how to
        efficiently make a wide variety of relatively complex molecules in a short time. In this
        regard, it is a real advantage to have experience in devising synthetic strategies and
        being familiar with many different types of reactions.'),
      ),
      3 => array(
        'question' => array('You gained a lot of experience in academia during your studies and research. How did
        you perceive the recent transition into industry? Does the approach to chemistry
        differ from university?','You gained a lot of experience in academia during your studies and research. How did
        you perceive the recent transition into industry? Does the approach to chemistry
        differ from university?'),
        'answer' => array('At least in my experience, and as far as discovery groups are concerned, the
        chemistry itself and the way how chemistry problems are solved is not so much
        different from academia. The most significant changes are probably that you have to
        trouble-shoot reactions without ever having seen them yourself - by working with the
        information the technicians are giving you and by asking the right questions - and
        that one develops a certain preference for the more robust and scalable methods in
        organic chemistry.','At least in my experience, and as far as discovery groups are concerned, the
        chemistry itself and the way how chemistry problems are solved is not so much
        different from academia. The most significant changes are probably that you have to
        trouble-shoot reactions without ever having seen them yourself - by working with the
        information the technicians are giving you and by asking the right questions - and
        that one develops a certain preference for the more robust and scalable methods in
        organic chemistry.'),
      ),
      4 => array(
        'question' => array('How important is harmony between work and outside life for you? Does BASF offer a
        good work-life balance for its employees?','How important is harmony between work and outside life for you? Does BASF offer a
        good work-life balance for its employees?'),
        'answer' => array('I would regard myself as a relatively active and committed person, inside and outside
        of work, and so I do not mind going an extra mile, or two, if my job requires it. On the
        other hand, I also have a lot of interests outside of work, such as for example rock
        climbing or cooking, which I would not want to give up either. In this respect, I
        personally was always very happy with how things worked out at BASF. Of course, it
        sometimes can get very busy at work but then again there are also times when
        everything is much more relaxed. Another quite positive aspect for me is that at
        BASF, PhD-degree holders are generally employed under an individual employment
        contract and therefore fully autonomous regarding time management. In fact, there
        is per se also no obligation for attendance in your office, if your responsibilities at a
        given day do not require it. This means, in most positions and with a bit of self-
        organization, the system offers a lot of flexibility, such as for example doing home
        office on certain days or distributing your working hours a bit more according to
        personal needs.','I would regard myself as a relatively active and committed person, inside and outside
        of work, and so I do not mind going an extra mile, or two, if my job requires it. On the
        other hand, I also have a lot of interests outside of work, such as for example rock
        climbing or cooking, which I would not want to give up either. In this respect, I
        personally was always very happy with how things worked out at BASF. Of course, it
        sometimes can get very busy at work but then again there are also times when
        everything is much more relaxed. Another quite positive aspect for me is that at
        BASF, PhD-degree holders are generally employed under an individual employment
        contract and therefore fully autonomous regarding time management. In fact, there
        is per se also no obligation for attendance in your office, if your responsibilities at a
        given day do not require it. This means, in most positions and with a bit of self-
        organization, the system offers a lot of flexibility, such as for example doing home
        office on certain days or distributing your working hours a bit more according to
        personal needs.'),
      ),
      5 => array(
        'question' => array('What are possible career paths and promotion prospects at BASF?','What are possible career paths and promotion prospects at BASF?'),
        'answer' => array('Chemists traditionally start their careers as lab team leaders in one of the research
        departments and stay in their first position for approximately three to five years. The
        reasoning behind this is, that in these positions at least a part of your responsibilities
        corresponds to something you already have experience in from your PhD, allowing
        you to focus more on all the things which are new. Afterwards, there are two distinct
        career paths one can pursue: In the expert-track, people stay in research with the
        goal of further deepening their knowledge and keeping a high level of expertise in
        their groups, while In the generalist-track the aim is on further broadening your set
        of skills and move on to other jobs, many of which are not available as entry-level
        positions because they require a good share of additional professional experience.','Chemists traditionally start their careers as lab team leaders in one of the research
        departments and stay in their first position for approximately three to five years. The
        reasoning behind this is, that in these positions at least a part of your responsibilities
        corresponds to something you already have experience in from your PhD, allowing
        you to focus more on all the things which are new. Afterwards, there are two distinct
        career paths one can pursue: In the expert-track, people stay in research with the
        goal of further deepening their knowledge and keeping a high level of expertise in
        their groups, while In the generalist-track the aim is on further broadening your set
        of skills and move on to other jobs, many of which are not available as entry-level
        positions because they require a good share of additional professional experience.'),
      ),
      6 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or
        internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or
        internships?'),
        'answer' => array('I would always recommend to first invest some time in finding out a bit more about
        yourself, what you would like to do next, and, as consequence, which options there
        actually are. ETH and affiliated organizations offer a lot of events to inform yourself,
        such as for example Chemtogether, and it is definitively worthwhile to make use of
        some of these opportunities. The best sources of information, however, are usually
        people in your personal network that already are in one of the positions or
        companies that interest you. Once you know in which direction you would like to go,
        it is time to find the right job openings. Here again, besides searching yourself, I
        would let people in your network know that you are currently looking for a job. A
        very useful manual of how to approach the entire application process in a bit more
        thorough and structured way is the «Application Guide» from the ETH Career Center,
        which is available online.','I would always recommend to first invest some time in finding out a bit more about
        yourself, what you would like to do next, and, as consequence, which options there
        actually are. ETH and affiliated organizations offer a lot of events to inform yourself,
        such as for example Chemtogether, and it is definitively worthwhile to make use of
        some of these opportunities. The best sources of information, however, are usually
        people in your personal network that already are in one of the positions or
        companies that interest you. Once you know in which direction you would like to go,
        it is time to find the right job openings. Here again, besides searching yourself, I
        would let people in your network know that you are currently looking for a job. A
        very useful manual of how to approach the entire application process in a bit more
        thorough and structured way is the «Application Guide» from the ETH Career Center,
        which is available online.'),
      ),
    ),
  );
  
  $template['interview'][2019][$i++] = array(
    'name' => 'Dr. Oliver Sala',
    'img_url' => set_source($awss3_archive.'/basf/interviewee_2019_1', 'png', FALSE),
    'position' => array('Research Scientist | Quantum Chemistry','Research Scientist | Quantum Chemistry'),
  
    'education' => array(
      0 => array(
        'date' => '2012-2015',
        'desc' => array('Doctor of Sciences at ETH Zurich, Group of Prof. Dr. A Togni and PD Dr. HP Lüthi','Doctor of Sciences at ETH Zurich, Group of Prof. Dr. A Togni and PD Dr. HP Lüthi'),
      ),
      1 => array(
        'date' => '2009-2012',
        'desc' => array('BSc and MSc in Chemistry at ETH Zurich','BSc and MSc in Chemistry at ETH Zurich'),
      ),
      2 => array(
        'date' => '2006-2009',
        'desc' => array('BSc in Chemistry at University of Applied Sciences Zurich (ZHAW)','BSc in Chemistry at University of Applied Sciences Zurich (ZHAW)'),
      ),
      3 => array(
        'date' => '1994-1997',
        'desc' => array('Apprenticeship - Chemical Laboratory Assistant, Givaudan AG','Apprenticeship - Chemical Laboratory Assistant, Givaudan AG'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2016',
        'desc' => array('Research Scientist | Quantum Chemistry, BASF SE','Research Scientist | Quantum Chemistry, BASF SE'),
      ),
      1 => array(
        'date' => '2015-2016',
        'desc' => array('Research Associate, ETH Zurich','Research Associate, ETH Zurich'),
      ),
      2 => array(
        'date' => '2012-2015',
        'desc' => array('Research Assistant, ETH Zurich','Research Assistant, ETH Zurich')
      ),
      3 => array(
        'date' => '2006-2011',
        'desc' => array('Summer Intern, Givaudan AG','Summer Intern, Givaudan AG'),
      ),
      4 => array(
        'date' => '2004-2006',
        'desc' => array('Senior Laboratory Assistant, Givaudan AG','Senior Laboratory Assistant, Givaudan AG'),
      ),
      5 => array(
        'date' => '2003-2004',
        'desc' => array('Chef Laboratory Assistant (Cheflaborant), Givaudan AG','Chef Laboratory Assistant (Cheflaborant), Givaudan AG'),
      ),
      6 => array(
        'date' => '1997-2003',
        'desc' => array('Chemical Laboratory Assistant, Givaudan AG','Chemical Laboratory Assistant, Givaudan AG'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What is your daily work like as a research scientist in quantum chemistry at BASF and what are your responsibilities?','What is your daily work like as a research scientist in quantum chemistry at BASF and what are your responsibilities?'),
        'answer' => array('I am responsible for several projects, supporting the experimentalists with mechanistic or kinetic insight from quantum chemistry. Most importantly, though, the main goal is to help them save time by guiding their chemistry and predicting properties of potential product compounds or catalyst systems. In that way, experimental screening can be reduced to a minimum. In addition, I am leading a project, which comes along with a lot organizational tasks.','I am responsible for several projects, supporting the experimentalists with mechanistic or kinetic insight from quantum chemistry. Most importantly, though, the main goal is to help them save time by guiding their chemistry and predicting properties of potential product compounds or catalyst systems. In that way, experimental screening can be reduced to a minimum. In addition, I am leading a project, which comes along with a lot organizational tasks.'),
      ),
      1 => array(
        'question' => array('What made you choose BASF as an employer? Can you describe how the application process worked for you?','What made you choose BASF as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('Since over twenty years BASF is committed to quantum chemical computations. This is unique in the chemical industry. Of course, the quantum chemistry group started with just a few people, but today about two hands full of quantum chemists are working at BASF. After sending my application dossier to BASF, everything went very fast. Two weeks later I was invited to Ludwigshafen for one day with accommodation at their own Hotel the night before. The application process was professionally organized. The individual interviews covered both, scientific discussions and social behaviour, hard and soft skills. I felt comfortable throughout the whole day, everyone being very friendly and genuinely interested in my person and my opinion.','Since over twenty years BASF is committed to quantum chemical computations. This is unique in the chemical industry. Of course, the quantum chemistry group started with just a few people, but today about two hands full of quantum chemists are working at BASF. After sending my application dossier to BASF, everything went very fast. Two weeks later I was invited to Ludwigshafen for one day with accommodation at their own Hotel the night before. The application process was professionally organized. The individual interviews covered both, scientific discussions and social behaviour, hard and soft skills. I felt comfortable throughout the whole day, everyone being very friendly and genuinely interested in my person and my opinion.'),
      ),
      2 => array(
        'question' => array('During your PhD you worked on theoretical / computational chemistry. Can you apply your expertise in your current work? How did your studies prepare you for the challenges in the industry?','During your PhD you worked on theoretical / computational chemistry. Can you apply your expertise in your current work? How did your studies prepare you for the challenges in the industry?'),
        'answer' => array('Right from the beginning my expertise could be applied to various projects and this still continues. Having been supervised by two professors – a theoretician and a chemist – during my PhD helped me a lot in being prepared for industry. In addition, the time at Givaudan very much contributed to my industrial background.','Right from the beginning my expertise could be applied to various projects and this still continues. Having been supervised by two professors – a theoretician and a chemist – during my PhD helped me a lot in being prepared for industry. In addition, the time at Givaudan very much contributed to my industrial background.'),
      ),
      3 => array(
        'question' => array('You gained experience in the field of quantum chemistry in academia as well as in the industry. Does the approach in this field differ from academia to industry?','You gained experience in the field of quantum chemistry in academia as well as in the industry. Does the approach in this field differ from academia to industry?'),
        'answer' => array('Yes. In industry, time is a key factor. Nobody can or wants to wait several weeks or even months for results. Therefore, the computational protocols must be accelerated, and the strategy of investigation must be pragmatic. It depends, however, as a patent attorney would say. My work can be divided into three areas: fundamental research, divisional research and method development. Speed is crucial when working for the divisions. Mostly, strict time management is inevitable to meet their milestone requirements.','Yes. In industry, time is a key factor. Nobody can or wants to wait several weeks or even months for results. Therefore, the computational protocols must be accelerated, and the strategy of investigation must be pragmatic. It depends, however, as a patent attorney would say. My work can be divided into three areas: fundamental research, divisional research and method development. Speed is crucial when working for the divisions. Mostly, strict time management is inevitable to meet their milestone requirements.'),
      ),
      4 => array(
        'question' => array('Is it customary at BASF to remain in the same field of activity or are there opportunities to move to another area if desired?','Is it customary at BASF to remain in the same field of activity or are there opportunities to move to another area if desired?'),
        'answer' => array('Both pathways are possible. Depending on personal preferences, one chooses one or the other path of career. The size of BASF opens up a plethora of fields to dive into and give your career another direction.','Both pathways are possible. Depending on personal preferences, one chooses one or the other path of career. The size of BASF opens up a plethora of fields to dive into and give your career another direction.'),
      ),
      5 => array(
        'question' => array('How important is harmony between work and outside life for you? Does BASF offer a good work-life balance for its employees?','How important is harmony between work and outside life for you? Does BASF offer a good work-life balance for its employees?'),
        'answer' => array('Very important. Work-life balance ensures a clear mind, and this is required if I want to be creative and innovative during my daily work. BASF provides many possibilities for recreation and sports activities. For example, BASF has its own fitness centre including sauna.','Very important. Work-life balance ensures a clear mind, and this is required if I want to be creative and innovative during my daily work. BASF provides many possibilities for recreation and sports activities. For example, BASF has its own fitness centre including sauna.'),
      ),
      6 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('I strongly recommend building a network during your undergrad and PhD studies. Go abroad for one semester, setup research collaborations, or do an internship in industry. Consider that it is you who chooses the company you want to work for.','I strongly recommend building a network during your undergrad and PhD studies. Go abroad for one semester, setup research collaborations, or do an internship in industry. Consider that it is you who chooses the company you want to work for.'),
      ),
    ),
  );
  
  $i = 0;
  $template['interview']['2018'][$i++] = array(
    'name' => 'Dr. Michael Seet',
    'img_url' => set_source($awss3_archive.'/basf/interviewee_2018_1', 'png', FALSE),
    'position' => array('Research Scientist', 'Research Scientist'),
  
    'education' => array(
      0 => array(
        'date' => '2009-2013',
        'desc' => array('Doktorat an der ETH Zürich, Gruppe Prof. Diederich', 'PhD at ETH Zurich, Group of Prof. Diederich')
      ),
      1 => array(
        'date' => '2003-2008',
        'desc' => array('Chemiestudium an der Phillips-Universität Marburg', 'Studies in Chemistry at Phillips-Universität Marburg')
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2016',
        'desc' => array('Research Scientist bei BASF', 'Research Scientist at BASF')
      ),
      1 => array(
        'date' => '2013-2016',
        'desc' => array('Research Scientist bei Beiersdorf AG', 'Research Scientist at Beiersdorf AG')
      ),
      2 => array(
        'date' => '2008-2009',
        'desc' => array('Praktikum bei BASF', 'Internship at BASF')
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('Was sind Ihre Aufgaben als Projektmanager bei der BASF?',
                            'What are your responsibilities as project manager at BASF?'),
        'answer' => array('In meiner Rolle als Projektmanager in der BASF Pflanzenschutzforschung koordiniere ich ein Team bestehend aus vier Laborleitenden (Medizinische Chemie, Computational Chemistry, Biochemie) und fünf Labortechnikern.',
                          'In my role as project manager at BASF crop protection R&D, I am coordinating a project team consisting of four lab heads (medicinal chemistry, computational chemistry, biochemistry) and five lab technicians. Aim of the project is finding a new lead candidate and promote it from early hit discovery to lead optimization phase. Tasks comprise the coordination of lab syntheses, molecular modeling approaches, biochemical assay setup, interpretation and presentation of results, defining milestones and targets of the project.')
      ),
      1 => array(
        'question' => array('Sie haben Chemie studiert. Beschäftigt die BASF auch Absolventinnen und Absolventen anderer Fachrichtungen?',
                            'You graduated from ETH Zürich with a PhD in Chemistry. Does BASF also employ graduates of other fields of study?'),
        'answer' => array('Ja. Die BASF ist ein multidisziplinäres Unternehmen, das Fachkräfte mit verschiedensten Hintergründen beschäftigt (Naturwissenschaften, Ingenieurwissenschaften, Sozialwissenschaften, etc.).',
                          'Yes. BASF is a multidisciplinary and highly diverse company, employing professionals with a broad spectrum of backgrounds (all kind of natural sciences, engineers, social sciences, etc.).')
      ),
      2 => array(
        'question' => array('Wie unterscheidet sich die Arbeit in der Industrie von der an der Universität?',
                            'How does a typical work day in industry differ from one at university?'),
        'answer' => array('Meiner Meinung nach gibt es zwei Hauptunterschiede zwischen der Arbeit in der Industrie und an der Universität. Erstens ist industrielle Forschung von der Zusammenarbeit mit verschiedenen Forschungs-, Geschäfts- und Serviceeinheiten geprägt - viele Akteure sind involviert. Die verschiedenen Kompetenzen und Sichtweisen der unterschiedlichen Akteure bereichern das Projekt. Im Gegensatz dazu kann man in der universitären Forschung Projekte oft mehr auf seine eigene Art und Weise durchführen. Zweitens trägt man in der industriellen Forschung mehr Verantwortung, zum Beispiel was das Einhalten von Budgets und Zeitvorgaben der Projekte oder die Fortbildung der Mitarbeitenden betrifft.',
                          'In my opinion, there are two major differences in working in industry as compared to academia. Firstly, industrial research relies strongly on collaborations with various research, business, and service units. Many stakeholders are involved, whose different competencies and views add value to your project. In contrast, in academic research you can run your project more in your own way. Secondly, in industrial research you take over more responsibility, for instance in terms of keeping budget and timelines in your project, or in employee development.')
      ),
      3 => array(
        'question' => array('Warum haben Sie sich die BASF als Arbeitgeber ausgesucht? Wie lief die Bewerbung ab - haben Sie sich auf eine ausgeschriebene Stelle beworben oder initiativ?',
                            'What made you choose BASF as an employer? Can you describe how the application process worked for you?'),
        'answer' => array('Ich habe mich bei der BASF für eine ausgeschriebene Stelle beworben. Dass man mich in der Abteilung aus meinem Praktikum noch kannte hat mir den Weg zum Vorstellungsgespräch jedoch deutlich erleichtert. Generell gefällt mir das Arbeitsklima in der Firma und die Freiheit, die mir in meiner Forschung gewährt wird.',
                          'I applied for BASF to an open position. However, knowing people from the unit due to my previous internship facilitated the invitation for an interview significantly. Generally speaking, I very much enjoy the working atmosphere at BASF and the high degree of freedom I am given in my research.')
      ),
      4 => array(
        'question' => array('In welcher Form bietet die BASF Praktikumsstellen für Studierende an?',
                            'Does BASF offer internships for university students?'),
        'answer' => array('Die BASF bietet eine breite Auswahl an Praktika für Bachelor- und Masterstudierende an. Neben einem mehrmonatigen Praktikum besteht auch die Möglichkeit, eine Bachelor-, Master- oder Doktorarbeit bei der BASF zu machen.',
                          'BASF offers a wide range of internships for undergraduate students. You can join BASF for just a few months, or you can apply to do your bachelor, master, or PhD thesis with BASF.')
      ),
      5 => array(
        'question' => array('Sie haben vor Ihrem PhD ein dreimonatiges Praktikum bei Ihrem späteren Arbeitgeber BASF absolviert. Welche Erfahrungen haben Sie daraus für Ihre berufliche Laufbahn mitgenommen?',
                            'Before starting your PhD, you joined BASF for a three-month internship. Which experiences did this add to your professional career?'),
        'answer' => array('Während meines Praktikums habe ich zwei wichtige Dinge gelernt. Was meine fachbezogenen Kompetenzen betrifft, habe ich gelernt, meinen Arbeitstag sehr effizient zu planen. Diese praktische Erfahrung war eine sehr nützliche Ergänzung zu meinem theoretischen Wissen aus dem Studium. Zusätzlich konnte ich in der Firma viele Kontakte knüpfen, was für meine spätere Karriere äußerst hilfreich war.',
                          'To me, there are two major learnings from my three-month internship at BASF. In terms of improving my hard skills, I learned how to plan my daily lab work very efficiently. This practical experience was a very useful complement to my theoretical background I learned at university. On top of that, I had the chance to build up a network with other interns and lab heads, which was of enormous value for my later career.')
      ),
      6 => array(
        'question' => array('Vor Ihrem Einstieg bei BASF haben Sie bei der Beiersdorf AG ebenfalls als Projektmanager gearbeitet. Was waren Ihre Beweggründe für den Wechsel zur BASF?',
                            'Before joining BASF, you also worked for Beiersdorf AG as a project manager. What was your motivation for changing your job?'),
        'answer' => array('In meinem ersten Job nach meinem PhD bei Beiersdorf habe ich in einer Scouting-Abteilung gearbeitet. Die Arbeit dort bestand teils aus Forschung, teils aus Supplier-Management. Nach drei Jahren entschied ich mich dazu, nach einer neuen Herausforderung in einer reinen Forschungsabteilung zu suchen. Zu dieser Zeit gab es keine passenden Möglichkeiten bei Beiersdorf, deshalb habe ich mich außerhalb der Firma umgesehen und bin auf meine jetzige Stelle bei der BASF gestoßen.',
                          'In my first job after my PhD at Beiersdorf I worked in a Scouting unit, which was partly scientific research, partly supplier management. After three years I decided to look for new challenges in a pure research unit. At that time, there was no suitable opportunity at Beiersdorf, so I looked outside the company, and eventually found my current position at BASF.')
      ),
      7 => array(
        'question' => array('Welche Aufstiegsmöglichkeiten und Karrierewege gibt es innerhalb des Unternehmens?',
                            'Could you describe some of the career opportunities that exist within your company?'),
        'answer' => array('Als Wissenschaftler beginnt man seine Karriere bei der BASF normalerweise in einer Forschungseinheit. Nach einiger Zeit in der Forschung und Entwicklung entscheiden sich viele für einen sogenannten «Expert Track», im Laufe dessen sie ihre Expertise in einem bestimmten Forschungsgebiert verbreitern und vertiefen können um zum «Senior Scientist» oder «Principal Scientist» aufzusteigen. Andere wiederum entscheiden sich für den sogenannten «General Management Track», der darauf ausgelegt ist, abseits der Forschung in anderen Bereichen der BASF Erfahrung zu sammeln und letztlich auf eine Führungsposition abzielt. In beiden Fällen bietet die BASF vielseitige Unterstützung für die Fortbildung ihrer Angestellten.',
                          'As a scientist, you usually start your career at BASF in a research unit. After some time in R&D, many people either decide to go on a so-called Expert Track, on which they broaden and deepen their expertise in a specific research field and advance to Senior Scientist or Principal Scientist grades. Or they go on a so-called General Management Track, on which they leave R&D and broaden their experience in other units within BASF, to eventually strive for a later leadership role. In both scenarios, BAFS offers many tools to support and develop their employees.')
      ),
      8 => array(
        'question' => array('Welche außerfachlichen Kompetenzen sollte man sich neben dem Studium aneignen um für den Berufseinstieg in einem modernen Chemieunternehmen gerüstet zu sein?',
                            'Which soft skills should students try to acquire in the course of their studies to succeed in a modern chemical company like BASF?'),
        'answer' => array('Neben den fachlichen Kernkompetenzen ist es immer eine gute Idee, Erfahrung in angrenzenden Fachgebieten zu sammeln. Als synthetischer Chemiker ist es zum Beispiel hilfreich, gewisse Grundfertigkeiten in Biologie, IT oder Computational Chemistry zu besitzen. Generell rate ich dazu, die Bedeutung von Softskills nicht zu unterschätzen. Seien Sie neugierig und bereit, neue Dinge auszuprobieren, seien Sie offen für Kollaborationen und versuchen Sie, neue Kontakte zu knüpfen. Das ist in jeder Hinsicht hilfreich.',
                          'Besides your core competencies, it is always a good idea to be experienced in closely related disciplines. For instance, as a synthetic chemist, it helps to be skilled in computational chemistry, biology, or IT. However, a general advice is to never underestimate the importance of your soft skills. Be curious and open to try new things, look for collaborations, be creative and establish new contacts. This will help you in any case.')
      ),
      9 => array(
        'question' => array('Welchen Rat würden Sie ETH-Studierenden geben, die sich nach ihrem Abschluss auf Jobsuche begeben?',
                            'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Ich rate dazu, schon während des Studiums ein Netzwerk an Kontakten aufzubauen. Dazu gibt es viele Möglichkeiten – sei es ein Auslandssemester, ein Praktikum oder Kollaborationen in der Forschung. Denken Sie daran, dass Sie es sind, die sich Ihre Arbeitgeber aussuchen.',
                          'I strongly recommend building a network during your undergrad and PhD studies. Go abroad for one semester, setup research collaborations, or do an internship in industry. Consider that it is you who chooses the company you want to work for.')
      ),
    ),
  );

  include('../0_template/template.php');
  
  
  
  ?>