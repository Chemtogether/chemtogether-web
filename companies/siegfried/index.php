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


$template['company_name'] = 'Siegfried Holding AG';
$template['company_name_short'] = 'siegfried';
$template['logo_url'] = set_source($awss3.'/companies/siegfried/logo_svg','svg', FALSE);
$template['package'] = 'gold';
$template['day'] = 2;

$lang['general']['page_title'] = array('Chemtogether 2024 - Firmen: '.$template['company_name'], 'Chemtogether 2024 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);

$template['homepage'] = array('http://www.siegfried.ch','siegfried.ch');
// $template['facebook'] = array('', '');
$template['linkedin'] = array('https://www.linkedin.com/company/siegfried-holding-ag/','Siegfried Holding AG');
// $template['mail'] = array('','');
$template['archive'] = '/archive/siegfried';

$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'Siegfried is a worldwide leading Contract and Development Manufacturing
Organization (CDMO). We operate on
3 continents, 7 countries and 14 locations. We supply for ≈ 200 out of 1500
Active Pharmaceutical Ingredients
(APIs) approved by the FDA. We serve
more than 500 customers globally and
up to 1b people get in contact with our
products every year. We offer contract
developing and manufacturing of APIs,
intermediates and finished dosage
forms. Founded in 1873, we celebrated
our 150 years.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'Join Siegfried for the best of both
worlds: the stability of a global leader
with the innovative spirit of a startup.
Collaborate with talented colleagues,
gain international experience, and
grow in a supportive environment.
Here, your ideas matter, and your career can thrive.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'We’re seeking Bachelor’s, Master’s
graduates and EFZ “Lehrabgänger/
innen” with a passion for continuous
learning and a drive to innovate. If
you thrive in dynamic environments,
embrace challenges, and seek variety
in your work, Siegfried is the place for
you. We value curiosity, adaptability,
and a proactive mindset.');

  
$template['button_print_until'] = 0; 

  $template['interview_print_until'] = 1;
  if(isset($_GET['preview'])) $template['interview_print_until'] = 0;

  $i=0;
  $template['interview'][$i++] = array(
    'name' => 'Mathias Mosberger',
    'img_url' => $awss3.'/companies/siegfried/interviewee_2024_1',
    'position' => 'QC Manager at DINAMIQS, a Siegfried company',
  
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
        'question' => 'Please briefly introduce yourself and your company. What are your priorities and goals?',
        'answer' => 'My name is Mathias, and I am a chemist by training. After completing my PhD, I worked for four and a half years as an Analytical Project Lead at Siegfried AG in Zofingen, a contract development and manufacturing organization (CDMO) in the pharmaceutical industry. My main responsibilities involved supporting new customer development projects as well as commercial products from the analytical side. It was a great entry position to learn about GMP and understand the various roles involved in pharmaceutical production. For the past two months, I have been working as a QC Manager at DINAMIQS, which was acquired by Siegfried in 2023. DINAMIQS is a science-driven CDMO startup focused on the development and manufacturing of viral vectors for gene therapy applications. My current priority is supporting the team in setting up a new quality control laboratory to conduct in-process control analysis and release analysis of the drug product under GMP.',
      ),
      1 => array(
        'question' => 'Why did you choose this company?',
        'answer' => 'I chose this company because it offers the best of both worlds. On one hand, I can bring my experience working under GMP in an established CDMO like Siegfried, where there are structured processes and a solid foundation in place. On the other hand, DINAMIQS is a young and fast-growing company in a highly innovative field—gene therapy—which presents exciting challenges and learning opportunities. The chance to work in an area that’s at the forefront of pharmaceutical innovation and helping to develop new therapeutic methods for patients is incredibly fulfilling. Plus, working at a startup within the broader Siegfried network offers a unique combination of flexibility and growth while benefiting from the backing of an established global organization.',
      ),
      2 => array(
        'question' => 'What career opportunities does your company offer for students and graduates in the fields of chemistry, biochemistry, chemical engineering, pharmacy, and pharmaceutical sciences?',
        'answer' => 'For chemists and pharmacists with a PhD, there are various entry-level positions at Siegfried, such as Analytical Project Manager, Process Project Manager, Quality Assurance Manager, or even Project Manager in production. For Bachelor’s and Master’s students, there are roles as process lab technicians or lab technicians in analytics. At DINAMIQS, which has a younger team, there will be upcoming positions, mainly in process/production laboratories, as well as in analytical development and QC labs. We will be looking for biochemists, pharmacists, and engineers with Master’s or higher degrees.',
      ),
      3 => array(
        'question' => 'Are there any special entry-level programs or internships that you offer?',
        'answer' => 'DINAMIQS, being a young company, we currently don´t have formalized entry-level programs, but we are always looking to bring on talented individuals to help grow the team and the business.',
      ),
      4 => array(
        'question' => 'What qualifications and skills do you look for in applicants for scientific positions in your company?',
        'answer' => 'At DINAMIQS, we´re looking for candidates who not only have a strong academic background but also hands-on experience in a laboratory setting. A Master’s degree is the minimum requirement for scientific positions, particularly in fields like biochemistry, biotechnology, or related disciplines. Technical skills are important, but soft skills, such as good communication and teamwork, are just as essential. The ability to work well with others is critical because of the collaborative nature of our work. We are a small team with big goals, so we need people who can integrate quickly, contribute meaningfully, and share a passion for innovation and scientific discovery. Flexibility and problem-solving abilities are also key, given the fast-paced nature of a startup environment like DINAMIQS.',
      ),
      5 => array(
        'question' => 'Are there specific academic backgrounds or experiences that are preferred?',
        'answer' => 'For roles in analytical development at DINAMIQS, we prioritize candidates with backgrounds in biochemistry, biotechnology, or related fields. In particular, we value experience with mammalian cell lines and familiarity with the most common biochemical techniques such as ELISA, SDS-PAGE, alkaline gel-electrophoresis, qPCR, dPCR, and HPLC. These are crucial skills for someone working in gene therapy development, where viral vectors are being produced and analyzed. Experience in a regulated environment, such as GMP, is also highly desirable. Beyond technical expertise, we’re looking for individuals who demonstrate an ability to work collaboratively, think critically, and adapt quickly to new challenges in a constantly evolving field.',
      ),
      6 => array(
         'question' => 'What problems/issues are you currently dealing with in your company?',
         'answer' => 'Currently, at DINAMIQS, one of the biggest challenges we´re tackling is setting up new laboratories in our recently acquired facility. Moving into a new space is exciting but comes with its own set of challenges, especially when it comes to ensuring that everything complies with regulatory standards. We need to ensure that the labs meet all the required guidelines and regulations to conduct our work efficiently and within the standards of GMP. This involves everything from the installation of specialized equipment to setting up workflows that allow for smooth operations. At the same time, we´re focused on ensuring that our growing team is supported as we integrate new processes and ramp up production capabilities.',
      ),
      7 => array(
         'question' => 'Can you provide insights into your company´s current research and development projects?',
         'answer' => 'Due to confidentiality, I can´t dive into too many specifics about the current research and development projects we are working on at DINAMIQS. However, I can tell you that our primary focus is the development and manufacturing of viral vectors for gene therapy applications. This is an incredibly exciting field, and gene therapy has the potential to revolutionize how we treat a wide range of diseases. If you´re interested in learning more about our services and capabilities, I encourage you to check out our website at <a href="www.dinamiqs.com">www.dinamiqs.com</a>, where you´ll find additional details about the innovative work we’re doing in this space.',
      ),
      8 => array(
         'question' => 'What is your company´s commitment to sustainability and environmental protection?',
         'answer' => 'Siegfried is deeply committed to sustainability. The company aims to reduce its carbon footprint by 50% by 2030, and 71% of our electricity already comes from renewable sources. We focus on energy and atom efficiency and green chemistry to minimize our environmental impact, including reducing volatile organic compound (VOC) emissions. Although DINAMIQS is smaller, it benefits from these sustainability initiatives and contributes to Siegfried’s goal of becoming a leader in environmental and social governance (ESG) in the CDMO industry.',
      ),
      9 => array(
         'question' => 'In which regions or countries does your company operate? Are there international career opportunities?',
         'answer' => 'Siegfried is a global company with operations in Switzerland, the USA, Germany, France, Spain, Malta, and China. This means there are numerous international career opportunities across various regions. As for DINAMIQS, it´s currently based in Zurich, Switzerland, but as part of Siegfried, there could be international mobility opportunities as the company grows.',
      ),
      10 => array(
         'question' => 'How would you describe the corporate culture in your company, particularly with regard to teamwork and collaboration?',
         'answer' => 'At DINAMIQS, the culture is dynamic, open, and highly collaborative, with a flat hierarchy that fosters creativity and innovation. The atmosphere feels more like in a research group, with a very international team, many members coming from research backgrounds and the company language being English. There´s a strong sense of community and shared vision. At Siegfried, despite being larger and more established, the focus on collaboration and teamwork is equally strong. Siegfried provides plenty of opportunities for professional growth and cross-functional cooperation, while maintaining a commitment to quality, excellence, and sustainability.',
      ),
      11 => array(
         'question' => 'Does your company offer mobility to locations in different countries?',
         'answer' => 'Siegfried offers great mobility opportunities across its global network. Employees can explore career paths in different countries and expand their horizons. One key initiative is the Global Rotation Program, where participants rotate through four departments over two years, including one rotation in a different country. This gives participants international experience and prepares them for leadership roles. While DINAMIQS is based in Zurich, being part of Siegfried means there may be mobility opportunities within the broader network in the future.',
      ),
      12 => array(
         'question' => 'Does your company offer benefits in addition to work, e.g. GA/sports and leisure opportunities?',
         'answer' => 'Siegfried provides a wide range of benefits that support work-life balance, including health programs, sports activities, and volunteering or charity initiatives. Career development is also a big focus, with the Siegfried Academy offering training and global mobility options. Each site has its own local initiatives, so depending on where you are based, you can take advantage of specific perks. At DINAMIQS, the focus is more on professional growth, but as part of Siegfried, we may access these broader benefits in the future.',
      ),
      13 => array(
         'question' => 'Can you explain the typical application process in your company? Do you have any tips for successful applications?',
         'answer' => 'The application process at both Siegfried and DINAMIQS begins with submitting your CV and documents online. After an initial screening, you may be invited for an interview to discuss your experience and goals. Some roles may also include an on-site interview. Successful candidates receive a personalized onboarding process. For a successful application, highlight relevant skills and experiences, demonstrate enthusiasm, and ask insightful questions that show you align with the company´s values.',
      ),
      14 => array(
         'question' => 'What is the best way for interested students and graduates to get in touch with your company and expand your professional network?',
         'answer' => 'The best way to connect is by reaching out directly to our HR representatives—don’t hesitate to start a conversation! We’re all happy to answer any questions you may have. It’s also a great way to learn more about what we do and how your skills might fit in. You can also explore our careers page to find open opportunities tailored to different career stages. We´re always excited to hear from curious and motivated individuals!',
      ),
    ),
  );

include('../0_template/template.php');

?>
