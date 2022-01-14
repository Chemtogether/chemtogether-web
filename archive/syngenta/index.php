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


$template['company_name'] = 'Syngenta';
$template['company_name_short'] = 'syngenta';
$template['logo_url'] = set_source($awss3_archive.'/syngenta/logo','png', FALSE);

$lang['general']['page_title'] = array('Chemtogether 2020 - Archiv: '.$template['company_name'], 'Chemtogether 2020 - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('https://www.syngenta.ch','syngenta.ch');
$template['facebook'] = array('https://www.facebook.com/Syngenta/', 'Syngenta');
$template['linkedin'] = array('https://ch.linkedin.com/company/syngenta','Syngenta');

$template['we_are'] = array(
  'Syngenta Crop Protection (CP) is one of the four business units of Syngenta Group, a global leader in agricultural technology and innovation with 49000 employees in more than 100 countries. Headquartered in Basel, Switzerland, Syngenta CP has an industry-leading R&D pipeline, strong research capabilities and a broad product portfolio of herbicides, insecticides, fungicides, and seed treatments.',
  'Syngenta Crop Protection (CP) is one of the four business units of Syngenta Group, a global leader in agricultural technology and innovation with 49000 employees in more than 100 countries. Headquartered in Basel, Switzerland, Syngenta CP has an industry-leading R&D pipeline, strong research capabilities and a broad product portfolio of herbicides, insecticides, fungicides, and seed treatments.');
$template['we_offer'] = array(
  'A diverse workforce and an inclusive workplace environment are enablers of our ambition to be the most collaborative and trusted team in agriculture. Our employees reflect the diversity of our customers, the markets where we operate and the communities which we serve.',
  'A diverse workforce and an inclusive workplace environment are enablers of our ambition to be the most collaborative and trusted team in agriculture. Our employees reflect the diversity of our customers, the markets where we operate and the communities which we serve.');
$template['we_look'] = array(
  'We’re keen to recruit the best graduates from a variety of disciplines. Agronomy, biology, chemistry or engineering – at Syngenta CP, students and graduates in a wide range of disciplines will find an opportunity to launch their career.',
  'We’re keen to recruit the best graduates from a variety of disciplines. Agronomy, biology, chemistry or engineering – at Syngenta CP, students and graduates in a wide range of disciplines will find an opportunity to launch their career.');


$i=0;
$template['interview']['2021'][$i++] = array(
  'name' => 'Dr. Camille Le Chapelain',
  'img_url' => set_source($awss3_archive.'/syngenta/interviewee_2021_1','png', FALSE),
  'position' => array('Team Leader in Disease Control Chemistry','Team Leader in Disease Control Chemistry'),

  'education' => array(
    0 => array(
      'date' => '2011-2015',
      'desc' => array('PhD ETHZ in the group of Prof. Carreira','PhD ETHZ in the group of Prof. Carreira'),
    ),
    1 => array(
      'date' => '2009-2010',
      'desc' => array('MSc ETHZ, master thesis in the group of Prof. Diederich','MSc ETHZ, master thesis in the group of Prof. Diederich'),
    ),
    2 => array(
      'date' => '2006-2010',
      'desc' => array('Ecole Polytechnique (France)','Ecole Polytechnique (France)'),
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2020-present',
      'desc' => array('Syngenta, chemistry lead in lead generation (disease control)','Syngenta, chemistry lead in lead generation (disease control)'),
    ),
    1 => array(
      'date' => '2018-2020',
      'desc' => array('Syngenta, team leader in lead optimization (insect control)','Syngenta, team leader in lead optimization (insect control)'),
    ),
    2 => array(
      'date' => '2017-2018',
      'desc' => array('Syngenta, team leader in process chemistry research','Syngenta, team leader in process chemistry research'),
    ),
    2 => array(
      'date' => '2015-2017',
      'desc' => array('Technische Universität München, postdoctoral fellow at the Chair of Biochemistry with Prof. Groll','Technische Universität München, postdoctoral fellow at the Chair of Biochemistry with Prof. Groll'),
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => array('What are your current responsibilities at Syngenta?','What are your current responsibilities at Syngenta?'),
      'answer' => array('I am currently lead chemist in disease control lead generation. As part of a discovery team which consists of scientists from different disciplines (chemistry, biology, biochemistry, computational chemistry, product safety…), we are responsible to find new mode of actions and active chemical classes to progress in the pipeline. Therefore, I define the discovery strategy in disease control together with the other team members, design new active ingredients, analyze the structure-to-activity relationship in different projects. Being the lead chemist, I oversee all chemistry activities and resources. I am also a lab head and prepare research programs for my team and help my coworkers troubleshoot synthetic issues. There are also many networks and initiatives on specific topics in our department. For instance, I am particularly interested in integrating biocatalysis in our discovery activities. As such, I am currently engaged in a couple of collaborations with academics and CROs.',
      'I am currently lead chemist in disease control lead generation. As part of a discovery team which consists of scientists from different disciplines (chemistry, biology, biochemistry, computational chemistry, product safety…), we are responsible to find new mode of actions and active chemical classes to progress in the pipeline. Therefore, I define the discovery strategy in disease control together with the other team members, design new active ingredients, analyze the structure-to-activity relationship in different projects. Being the lead chemist, I oversee all chemistry activities and resources. I am also a lab head and prepare research programs for my team and help my coworkers troubleshoot synthetic issues. There are also many networks and initiatives on specific topics in our department. For instance, I am particularly interested in integrating biocatalysis in our discovery activities. As such, I am currently engaged in a couple of collaborations with academics and CROs.'),
    ),
    1 => array(
      'question' => array('What advice would you give to a freshly graduating ETH student who is about to embark on their job hunt?','What advice would you give to a freshly graduating ETH student who is about to embark on their job hunt?'),
      'answer' => array('Employers want to get to know you and understand how you work as a researcher. It is always interesting to see candidates explain how they tackled issues, took some risks, and sometimes failed ! A lot can be learnt from failed attempts, it is an important part of research and of your growth as a researcher. I would thus advise students to show not only the successful results, but also insist on the steps they have taken to get there. In general, it is important to be genuine and not just try to impress. Taking some time to reflect on the successes and difficulties one has faced before an interview is important. Another advice would be to be curious about the company and the field you apply to. I was not familiar with agrochemistry when I applied at Syngenta and read a couple of opinion article from the scientific literature about the challenges in this field before the interview. Come with an open mind, ready for discussion with fellow scientists. Finally, do not hesitate to contact your network of former colleagues, they can provide you with some insights and tips.','Employers want to get to know you and understand how you work as a researcher. It is always interesting to see candidates explain how they tackled issues, took some risks, and sometimes failed ! A lot can be learnt from failed attempts, it is an important part of research and of your growth as a researcher. I would thus advise students to show not only the successful results, but also insist on the steps they have taken to get there. In general, it is important to be genuine and not just try to impress. Taking some time to reflect on the successes and difficulties one has faced before an interview is important. Another advice would be to be curious about the company and the field you apply to. I was not familiar with agrochemistry when I applied at Syngenta and read a couple of opinion article from the scientific literature about the challenges in this field before the interview. Come with an open mind, ready for discussion with fellow scientists. Finally, do not hesitate to contact your network of former colleagues, they can provide you with some insights and tips.'),
    ),
    2 => array(
      'question' => array('How does your typical working day look like at Syngenta?','How does your typical working day look like at Syngenta?'),
      'answer' => array('I usually have a chat with my team and check the new biological results. As part of a multidisciplinary team, I have some chemistry-centered and also cross-functional discussions on projects. I also spend some time reading the literature, especially the pharma drug discovery literature. I really appreciate not having a routine and being trusted with a lot of freedom in the way I organize my day.','I usually have a chat with my team and check the new biological results. As part of a multidisciplinary team, I have some chemistry-centered and also cross-functional discussions on projects. I also spend some time reading the literature, especially the pharma drug discovery literature. I really appreciate not having a routine and being trusted with a lot of freedom in the way I organize my day.'),
    ),
    3 => array(
      'question' => array('How did you end up working for Syngenta? What got you interested in considering working for Syngenta?','How did you end up working for Syngenta? What got you interested in considering working for Syngenta?'),
      'answer' => array('After two years of postdoc, I felt I was ready to take the next step and get a job in industry. I looked for positions in Switzerland for personal reasons. At that time, there was a job opening at Syngenta that fitted the type of position I was looking for. I knew several former colleagues working there, so I had some ideas which job Syngenta may offer in research chemistry. I was curious about agrochemistry, the challenges the field was facing in terms of public perception, climate change and increased need of sustainability. These difficulties are good drivers for research and innovation.','After two years of postdoc, I felt I was ready to take the next step and get a job in industry. I looked for positions in Switzerland for personal reasons. At that time, there was a job opening at Syngenta that fitted the type of position I was looking for. I knew several former colleagues working there, so I had some ideas which job Syngenta may offer in research chemistry. I was curious about agrochemistry, the challenges the field was facing in terms of public perception, climate change and increased need of sustainability. These difficulties are good drivers for research and innovation.'),
    ),
    4 => array(
      'question' => array('How was your application process at Syngenta?','How was your application process at Syngenta?'),
      'answer' => array('I saw an ad for a team leader position in research on Jobs.ch. I went on Syngenta’s website and filled the application, consisting of a CV, a cover letter and a short research summary. I was then contacted for a phone interview. After a short introduction with a team leader, there was a technical discussion based on the summary I had provided. Once this first screen done, I was invited for a full day interview on site. The night before, another candidate and I went to dinner with one of the team leaders. The next day consisted of a presentation of my PhD and postdoc work, 3 technical interviews, an interview with a HR representative and a soft skills interview. At the end, I had a tour of the chemistry labs and the site. It was quite intense, but I had a good feeling and enjoyed the day, which is really important!','I saw an ad for a team leader position in research on Jobs.ch. I went on Syngenta’s website and filled the application, consisting of a CV, a cover letter and a short research summary. I was then contacted for a phone interview. After a short introduction with a team leader, there was a technical discussion based on the summary I had provided. Once this first screen done, I was invited for a full day interview on site. The night before, another candidate and I went to dinner with one of the team leaders. The next day consisted of a presentation of my PhD and postdoc work, 3 technical interviews, an interview with a HR representative and a soft skills interview. At the end, I had a tour of the chemistry labs and the site. It was quite intense, but I had a good feeling and enjoyed the day, which is really important!'),
    ),
    5 => array(
      'question' => array('What differentiates Syngenta from other Chemical companies in your opinion? What are the main advantages of working for Syngenta, in your opinion','What differentiates Syngenta from other Chemical companies in your opinion? What are the main advantages of working for Syngenta, in your opinion'),
      'answer' => array('I do not have much experience of other companies, so it is tough to compare. Agrochemical research is not as known and advertised as pharmaceutical research, despite the importance and need for in-house innovation. As research scientists, we have a chance to shape a more environment-friendly agriculture and provide new solutions to satisfy both farmers and consumers. What we do can impact farmers all around the world, which is highly motivating. Syngenta chemistry department is quite large, so you have possibilities to evolve in different directions: research, management, project management portfolio…, which I think is an advantage. We have several sites in Switzerland (headquarter, research, development, and production), so there are many opportunities. I feel also privileged to work in a multi-cultural environment surrounded by smart colleagues ! ','I do not have much experience of other companies, so it is tough to compare. Agrochemical research is not as known and advertised as pharmaceutical research, despite the importance and need for in-house innovation. As research scientists, we have a chance to shape a more environment-friendly agriculture and provide new solutions to satisfy both farmers and consumers. What we do can impact farmers all around the world, which is highly motivating. Syngenta chemistry department is quite large, so you have possibilities to evolve in different directions: research, management, project management portfolio…, which I think is an advantage. We have several sites in Switzerland (headquarter, research, development, and production), so there are many opportunities. I feel also privileged to work in a multi-cultural environment surrounded by smart colleagues ! '),
    ),
    6 => array(
      'question' => array('What did you study, and was the fact, that you were a graduate from ETH an advantage?','What did you study, and was the fact, that you were a graduate from ETH an advantage?'),
      'answer' => array('I first studied in France at the Ecole polytechnique with a broad scientific training, before starting to specialize in chemistry. Organic chemistry was always the topic I preferred, together with medicinal/biological chemistry. When I moved to ETHZ for my MSc, I continued in this direction. After a PhD in organic chemistry, I changed quite dramatically by doing a postdoc in structural biochemistry, a field I had no experience in. Going outside my comfort zone was difficult and refreshing at the same time, and it brought me a different perspective on research and chemistry in general. Being an ETH graduate provides you with a good education, visibility and usually a good network. Events like Chemtogether help graduates get in contact with companies and understand the offers they may have.','I first studied in France at the Ecole polytechnique with a broad scientific training, before starting to specialize in chemistry. Organic chemistry was always the topic I preferred, together with medicinal/biological chemistry. When I moved to ETHZ for my MSc, I continued in this direction. After a PhD in organic chemistry, I changed quite dramatically by doing a postdoc in structural biochemistry, a field I had no experience in. Going outside my comfort zone was difficult and refreshing at the same time, and it brought me a different perspective on research and chemistry in general. Being an ETH graduate provides you with a good education, visibility and usually a good network. Events like Chemtogether help graduates get in contact with companies and understand the offers they may have.'),
    ),
  ),
);



  //
  //
  // $template['interview']['2017'][$i++] = array(
  //   'name' => '',
  //   'img_url' => set_source($awss3_archive.'//', 'png', FALSE),
  //   'position' => array('', ''),
  //
  //   'education' => array(
  //     0 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     1 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     2 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //   ),
  //
  //   'career' => array(
  //     0 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     1 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //     2 => array(
  //       'date' => '',
  //       'desc' => array('','')
  //     ),
  //   ),
  //
  //   'interview' => array(
  //     0 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     1 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     2 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     3 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     4 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     5 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     6 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     7 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     8 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //     9 => array(
  //       'question' => array(
  //         '',
  //         ''),
  //       'answer' => array(
  //         '',
  //         '')
  //     ),
  //   ),
  // );

include('../0_template/template.php');



?>
