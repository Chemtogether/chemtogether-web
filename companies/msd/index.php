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
    "title"        => "Interview with Dr. Marc David Grynbaum from MSD - Chemtogether",
    "desc"         => "Dr. Marc David Grynbaum works as Principal Scientist Regional SAS Hub at MSD. Learn more about his career and work in his interview, and meet MSD at this year's Chemtogether!",
    "url"          => "",
    "image_url"    => $awss3."/opengraph/msd_20181008.jpg",
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
$template['company_name'] = 'MSD';
$template['company_name_short'] = 'msd';
$template['logo_url'] = set_source($awss3.'/companies/msd/logo','png', FALSE);
$template['package'] = 'silver';
$template['day'] = 2;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2019 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://www.msd.com','msd.com');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/msd-global/','MSD Global');
// $template['mail'] = array('','');
$template['archive'] = '/archive/msd';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'At MSD, we are inventing for life. As a leading global biopharmaceutical company, we have been engaged in life science research for more than a century, developing drugs and vaccines for the most challenging diseases worldwide. In Switzerland, we provide a wide range of healthcare solutions and are making available significant novel medicines, including treatments of cancer, diabetes and infectious diseases incl. antibiotic-resistant infections. Our recently re-integrated broad vaccines portfolio is well positioned to further prevent diseases and improve public health. <br>Switzerland serves as an international hub in the company’s global setting with four sites in and around the city of Lucerne. Our R&amp;D site in Werthenstein was involved in the development of about 45% of MSD’s products, serving patients in need. From here, around 270 scientists, engineers, technicians, process specialists and administrative personnel from around 14 nations test, develop and analyze new large molecule (i.e. biological), test and run stability studies on drug substances or drug products, provide experimental medicines for worldwide clinical trials and are contributing state-of- the-art packaging of clinical supplies.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Inventing shapes our corporate culture. In joining MSD, you’ll be part of an organization that is inspired by innovation to achieve our ambitious goals and transform lives through spirited co-creation and applied curiosity. You will be embarking on a journey where you can drive your national or international career development aspirations. We are proud of our modern working environment and our positive culture of cooperation and support. We are an equal opportunities organization, proudly embracing diversity in all its forms. When are you inventing the future?');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'We are regularly looking for talents with a strong educational background in Life Sciences, recently having gained a relevant university degree or with first industry experience, pursuing a career in the pharmaceutical industry. Your experience can be applied in a variety of functions within our local and regional organizations in Switzerland, e.g. in R&amp;D and manufacturing, quality, regulatory affairs or external manufacturing management. Besides, MSD offers an apprenticeship program with a focus on biology or chemistry.');
$template['interview_print_until'] = 1;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$template['interview_print_until'] = 0;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

$template['interview'][$i++] = array(
  'name' => 'Dr. Stephanie Moessner',
  'img_url' => $awss3.'/companies/msd/interviewee_2019_1',
  'position' => 'Director Pharmaceutical Sciences WAG',

  'education' => array(
    0 => array(
      'date' => '1996-1998',
      'desc' => 'Postdoctoral Researcher (Humboldt Fellowship), NIST National Institute of Standards and Technology, Gaithersburg, Maryland, US',
    ),
    1 => array(
      'date' => '1991-1995',
      'desc' => 'PhD scientist in analytical and environmental chemistry, toxicology, University of Ulm, Germany, Department of Analytical and Environmental Chemistry',
    ),
    2 => array(
      'date' => '1985-1991',
      'desc' => 'Diploma, Chemistry (inorganic, organic, physical and analytical chemistry), University of Ulm, Germany',
    ),
  ),

  'career' => array(
    0 => array(
      'date' => '2018',
      'desc' => 'Director PharmSci WAG, Werthenstein BioPharma GmbH, MSD Switzerland',
    ),
    1 => array(
      'date' => '2010-2018',
      'desc' => 'Director ACDS (Analytical Chemistry in Development and Supply), Werthenstein BioPharma GmbH, MSD Switzerland',
    ),
    2 => array(
      'date' => '2004-2010',
      'desc' => 'Associate Director GMP/Comparator Labs, Werthenstein BioPharma GmbH, MSD Switzerland',
    ),
    3 => array(
      'date' => '1999-2004',
      'desc' => 'Manager Stability Lab, Werthenstein Chemie AG',
    ),
  ),

  'interview' => array(
    0 => array(
      'question' => 'What is your daily work like as Director of Chemistry at MSD and what are your responsibilities?',
      'answer' => 'I am head of the Pharmaceutical Sciences department at MSD in Switzerland at the development site an Schachen close to Lucerne. My teams are developing analytical methods for innovative drug products, e.g. on polymeric basis. My daily work is mainly leading people, project coordination and making strategic decisions.',
    ),
    1 => array(
      'question' => 'You worked in the academia and the industry. How does the work differ in the fields and what could they learn from each other?',
      'answer' => 'While academia is primarily focused on basic scientific research, the pharmaceutical industry is applying these results into products for the benefit of the patient. Synergies between academia and industry are key for the success of both. MSD has recognized this important network and has established their research facilities close to top universities.',
    ),
    2 => array(
      'question' => 'You graduated in chemistry and completed your PhD as well in the fields of chemistries. How much do you still come in contact with concrete chemistry in your function as director?',
      'answer' => 'In my current position as people manager, the direct contact with scientific problems is less in focus than earlier in my career. Other competencies like developing and motivating people get more important.',
    ),
    3 => array(
      'question' => 'How much have your studies prepared you for your role as Director of Chemistry at MSD?',
      'answer' => 'During my PhD thesis in addition to working on scientific questions I have learned how to manage success and failure. I learned to be curious, resilient, flexible and adapt to challenging situations. This has tremendously prepared me for my current role.',
    ),
    4 => array(
      'question' => 'How important is harmony between work and outside life for you? Does MSD offer a good work-life balance for its employees?',
      'answer' => 'A good work-life balance is and was very important during my career. I have two children, worked part-time for many years, enjoy flexible working hours and can work from home. MSD has been recognized as Top Employer since many years.',
    ),
    5 => array(
      'question' => 'You were already promoted multiple times. How do you imagine your future career path to look like?',
      'answer' => 'This is a good question! To be honest, I never had a clear career path laid out for me. I always relied on my openness, flexibility and good network to develop into potential new roles.',
    ),
    6 => array(
      'question' => 'Which suggestions do you have for a recent ETH graduate applying for jobs or internships?',
      'answer' => 'I would suggest him or her to be open-minded, choose broadly and be aware that the industry is changing fast and not always in a predictable way. A good network, challenging mentors and supportive sponsors are crucial in your career. Attending as many university events as possible to establish relationships with potential employers in the region is very helpful. Explore different areas in internships to get an understanding, what it is like to work in such a role. There are so many opportunities nowadays, so keep on exploring.',
    ),
  ),
);

include('../0_template/template.php');

?>