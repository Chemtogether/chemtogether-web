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


$template['company_name'] = 'Johnson & Johnson';
$template['company_name_short'] = 'johnsonandjohnson';
$template['logo_url'] = $awss3_archive.'/johnsonandjohnson/logo';
$template['package'] = 'base';

$lang['general']['page_title'] = array('Chemtogether - Archiv: '.$template['company_name'], 'Chemtogether - Archive:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.jnj.ch/','jnj.ch');
$template['facebook'] = array('https://facebook.com/jnj/', 'Johnson & Johnson');
$template['linkedin'] = array('https://www.linkedin.com/company/johnson-&-johnson/','Johnson & Johnson');
// $template['mail'] = array('','');

$template['we_are'] = array(
  'At Johnson & Johnson, we believe good health is the foundation of vibrant lives, thriving communities and forward progress. That’s why for more than 130 years, we have aimed to keep people well at every age and every stage of life. Today, as the world’s largest and most broadly based healthcare company, we are committed to using our reach and size for good. We strive to improve access and affordability, create healthier communities, and put a healthy mind, body and environment within reach of everyone, everywhere. 
  Every day, our more than 130,000 employees across the world are blending heart, science and ingenuity to profoundly change the trajectory of health for humanity.',
  'At Johnson & Johnson, we believe good health is the foundation of vibrant lives, thriving communities and forward progress. That’s why for more than 130 years, we have aimed to keep people well at every age and every stage of life. Today, as the world’s largest and most broadly based healthcare company, we are committed to using our reach and size for good. We strive to improve access and affordability, create healthier communities, and put a healthy mind, body and environment within reach of everyone, everywhere. 
  Every day, our more than 130,000 employees across the world are blending heart, science and ingenuity to profoundly change the trajectory of health for humanity.');
$template['we_offer'] = array(
  'Bachelor’s, Master’s, MBA, and PhD students can find outstanding opportunities to apply their academic skills through internship, co-op, or full-time roles within our Swiss companies. Our Leadership Development Programs (LDPs) offer accelerated development across a range of functional disciplines for high-potential students, notably: 
    The Global Operations Leadership Development (GOLD) Program combines challenging work rotations with classroom and online training over a two and a half-year period. The goal is to develop the next generation of leaders for Supply Chain, Operations, Engineering and Quality roles. 
    The Financial Leadership Development Program (FLDP) is a two year program designed to successfully develop future business leaders throughout the Johnson & Johnson Finance organization.',
    'Bachelor’s, Master’s, MBA, and PhD students can find outstanding opportunities to apply their academic skills through internship, co-op, or full-time roles within our Swiss companies. Our Leadership Development Programs (LDPs) offer accelerated development across a range of functional disciplines for high-potential students, notably: 
      The Global Operations Leadership Development (GOLD) Program combines challenging work rotations with classroom and online training over a two and a half-year period. The goal is to develop the next generation of leaders for Supply Chain, Operations, Engineering and Quality roles. 
      The Financial Leadership Development Program (FLDP) is a two year program designed to successfully develop future business leaders throughout the Johnson & Johnson Finance organization.');
$template['we_look'] = array(
  'Whether you are an undergraduate, master’s or MBA student, when you apply for the overall Leadership program in your area of interest, you will become eligible for one of the many slots available in that field. And when you join our team, you will not just be working on major assignments—you’ll also have the support you need in order to succeed. All of our programs include training and mentorship as a core part of the experience.',
  'Whether you are an undergraduate, master’s or MBA student, when you apply for the overall Leadership program in your area of interest, you will become eligible for one of the many slots available in that field. And when you join our team, you will not just be working on major assignments—you’ll also have the support you need in order to succeed. All of our programs include training and mentorship as a core part of the experience.');

  $i = 0;
  $template['interview'][2019][$i++] = array(
    'name' => 'Daniela Paunescu-Bluhm',
    'img_url' => set_source($awss3_archive.'/johnsonandjohnson/interviewee_2019_1', 'png', FALSE),
    'position' => array('Senior Manufacturing Process Engineer','Senior Manufacturing Process Engineer'),
  
    'education' => array(
      0 => array(
        'date' => '2012-2015',
        'desc' => array('PhD in Science, Department of Chemistry and Applied Biosciences, ETH Zurich (CH), «Synthetic DNA Fossils», Diss. Nr. 23033 (2015)','PhD in Science, Department of Chemistry and Applied Biosciences, ETH Zurich (CH), «Synthetic DNA Fossils», Diss. Nr. 23033 (2015)'),
      ),
      1 => array(
        'date' => '2010-2012',
        'desc' => array('Master in Chemistry, ETH Zurich (CH), Focus: Process design and optimization of DNA functionalized nanoparticles','Master in Chemistry, ETH Zurich (CH), Focus: Process design and optimization of DNA functionalized nanoparticles'),
      ),
      2 => array(
        'date' => '2007-2010',
        'desc' => array('Bachelor in Chemistry, Ruprecht-Karls-University Heidelberg (DE), Focus: Synthesis of organic compounds and catalysis','Bachelor in Chemistry, Ruprecht-Karls-University Heidelberg (DE), Focus: Synthesis of organic compounds and catalysis'),
      ),
    ),
  
    'career' => array(
      0 => array(
        'date' => '2016',
        'desc' => array('Senior Manufacturing Process Engineer at Pharmaceutical Company of Johnson & Johnson 
        • Project Leader of the E2E product strategy of PDO Monomer across the Johnson & Johnson 
        • Supply Chain with a cross-function team of 8-10 core team members 
        • API Technical Owner of DACOGEN and Value Chain Member 
        • Process Engineer of commercial Active Pharmaceutical Ingredients (API) according GMP, 
        • Regulatory and Compliance requirements 
        • Execution of Technology Transfer and Process Performance Qualification of New Product',
        'Senior Manufacturing Process Engineer at Pharmaceutical Company of Johnson & Johnson 
        • Project Leader of the E2E product strategy of PDO Monomer across the Johnson & Johnson 
        • Supply Chain with a cross-function team of 8-10 core team members 
        • API Technical Owner of DACOGEN and Value Chain Member 
        • Process Engineer of commercial Active Pharmaceutical Ingredients (API) according GMP, 
        • Regulatory and Compliance requirements 
        • Execution of Technology Transfer and Process Performance Qualification of New Product'),
      ),
      1 => array(
        'date' => '2012-2016',
        'desc' => array('After her Master studies she worked as a PhD Researcher for the Institute for Chemical and Bioengineering at ETH, which resulted in 16 peer-reviewed scientific publications (5 as first author). During this time, she as well gained wide range of work experience. At Go Beyond Early Stage Investing she had the opportunity to develop a tool for evaluating the investment potential of start-ups. She as well worked at the ETH on project basis as a consultant for technology companies in the decision of marketing and innovation.','After her Master studies she worked as a PhD Researcher for the Institute for Chemical and Bioengineering at ETH, which resulted in 16 peer-reviewed scientific publications (5 as first author). During this time, she as well gained wide range of work experience. At Go Beyond Early Stage Investing she had the opportunity to develop a tool for evaluating the investment potential of start-ups. She as well worked at the ETH on project basis as a consultant for technology companies in the decision of marketing and innovation.'),
      ),
    ),
  
    'interview' => array(
      0 => array(
        'question' => array('What are your responsibilities as process engineer at Johnson &amp; Johnson?','What are your responsibilities as process engineer at Johnson &amp; Johnson?'),
        'answer' => array('I am currently working as process engineer at Janssen Schaffhausen within Johnson & Johnson (J&J) and I am responsible for active pharmaceutical ingredients (API) in the small molecule sector. We are producing the “foundation” of drugs and I am therefore representing this part of the drug across the supply chain. In collaboration with different departments, I ensure the supply of APIs and support the launch of new compounds. The produced drugs serve patients worldwide with serious diseases, who depend on the required treatments. I am very proud that I can contribute directly to the launch of important therapies addressing the needs of patients around the globe.  
        Innovation, complex development and research work, handling challenges of large-scale production and the people behind it enabled the improvement of patients’ life.','I am currently working as process engineer at Janssen Schaffhausen within Johnson & Johnson (J&J) and I am responsible for active pharmaceutical ingredients (API) in the small molecule sector. We are producing the “foundation” of drugs and I am therefore representing this part of the drug across the supply chain. In collaboration with different departments, I ensure the supply of APIs and support the launch of new compounds. The produced drugs serve patients worldwide with serious diseases, who depend on the required treatments. I am very proud that I can contribute directly to the launch of important therapies addressing the needs of patients around the globe.  
        Innovation, complex development and research work, handling challenges of large-scale production and the people behind it enabled the improvement of patients’ life.'),
      ),
      1 => array(
        'question' => array('Your first contact to Johnson & Johnson happened at the Chemtogether fair. How did this help you in your application process?','Your first contact to Johnson & Johnson happened at the Chemtogether fair. How did this help you in your application process?'),
        'answer' => array('My first contact with Johnson & Johnson was indeed at the Chemtogether at the ETH Zurich. I was talking with HR representatives and had inspiring discussions about possibilities at Johnson & Johnson. I got better insights in the different programs offered by J&J and learned more about the advantages, which I was not aware of before the discussion. For example, I started at J&J in a temporary PostDoc program, which was my first step into the pharmaceutical industry…and which was initiated by the recruiting event at the ETH.','My first contact with Johnson & Johnson was indeed at the Chemtogether at the ETH Zurich. I was talking with HR representatives and had inspiring discussions about possibilities at Johnson & Johnson. I got better insights in the different programs offered by J&J and learned more about the advantages, which I was not aware of before the discussion. For example, I started at J&J in a temporary PostDoc program, which was my first step into the pharmaceutical industry…and which was initiated by the recruiting event at the ETH.'),
      ),
      2 => array(
        'question' => array('During your PhD you worked on synthetic fossilization of DNA in silica nanoparticles. Can you apply your expertise in your current work? How did your studies prepare you for the challenges in industry?','During your PhD you worked on synthetic fossilization of DNA in silica nanoparticles. Can you apply your expertise in your current work? How did your studies prepare you for the challenges in industry?'),
        'answer' => array('My PhD research was already including applied science and problem-solving regarding application of the designed nanoparticles as tracer and tags. I intensively worked with different collaborations and departments to find the best design concept, the best detection method and the best application for it. On the one side, I learned that only the interpersonal interactions and discussions rise the most efficient and creative solutions and on the other side, I gained a tolerance of frustration. Both learnings and competencies are part of my personal tool box, which I daily use in my current function.','My PhD research was already including applied science and problem-solving regarding application of the designed nanoparticles as tracer and tags. I intensively worked with different collaborations and departments to find the best design concept, the best detection method and the best application for it. On the one side, I learned that only the interpersonal interactions and discussions rise the most efficient and creative solutions and on the other side, I gained a tolerance of frustration. Both learnings and competencies are part of my personal tool box, which I daily use in my current function.'),
      ),
      3 => array(
        'question' => array('What advice can you give to graduating PhD candidates regarding future employment opportunities outside of academia?','What advice can you give to graduating PhD candidates regarding future employment opportunities outside of academia?'),
        'answer' => array('Ask yourself what you really want, what is your core motivation and go for it. See the big picture and do not limit yourself by trying to get everything directly after PhD or study (e.g. permanent position, leading function, location). Build up your competences step by step… but therefore you need to jump into cold water.','Ask yourself what you really want, what is your core motivation and go for it. See the big picture and do not limit yourself by trying to get everything directly after PhD or study (e.g. permanent position, leading function, location). Build up your competences step by step… but therefore you need to jump into cold water.'),
      ),
      4 => array(
        'question' => array('What are possible career paths and promotion prospects at Johnson & Johnson?','What are possible career paths and promotion prospects at Johnson & Johnson?'),
        'answer' => array('This depends on yourself! You own your career and within Johnson & Johnson there are a variety of possibilities in different aspects. We openly talk about individual career paths, whether with our line manager, during career events or in special designed programs.','This depends on yourself! You own your career and within Johnson & Johnson there are a variety of possibilities in different aspects. We openly talk about individual career paths, whether with our line manager, during career events or in special designed programs.'),
      ),
      5 => array(
        'question' => array('Which suggestions do you have for a recent ETH graduate applying for jobs or internships?','Which suggestions do you have for a recent ETH graduate applying for jobs or internships?'),
        'answer' => array('Be well prepared! Get all information you can get about the job, the company, the industry sector, business reports etc., use your network and especially all offered possibilities at ETH Zürich (e.g. ETH Career Center). 
        Try your best and when it will not work out…do not give up.','Be well prepared! Get all information you can get about the job, the company, the industry sector, business reports etc., use your network and especially all offered possibilities at ETH Zürich (e.g. ETH Career Center). 
        Try your best and when it will not work out…do not give up.'),
      ),
    ),
  );



include('../0_template/template.php');

?>
