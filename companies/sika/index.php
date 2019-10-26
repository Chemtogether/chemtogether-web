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
$template['company_name'] = 'Sika';
$template['company_name_short'] = 'sika';
$template['logo_url'] = set_source($awss3.'/companies/sika/logo_svg','svg', FALSE);
$template['package'] = 'base';
$template['day'] = 1;
$lang['general']['page_title'] = array('Chemtogether 2019 - Firmen: '.$template['company_name'], 'Chemtogether 2018 - Companies:'.$template['company_name']);
$lang['navigation']['title'] = array($template['company_name'], $template['company_name']);
$lang['navigation']['topnav_title']= array($template['company_name'], $template['company_name']);
$template['homepage'] = array('http://che.sika.com/','che.sika.com');
$template['facebook'] = array('https://www.facebook.com/SikaSchweizAG/', 'Sika Schweiz AG');
$template['linkedin'] = array('https://www.linkedin.com/company/sika/','Sika');
// $template['mail'] = array('','');
$template['archive'] = '/archive/sika';
$template['we_are'] = array(
  'title' => 'We are',
  'text' => 'a specialty chemicals company with a leading position in the development and production of systems and products for bonding, sealing, damping, reinforcing and protecting in the building sector and automotive industry. Sika has a worldwide presence in 98 countries with over 190 factories and over 17’000 employees. Our aim is to foster a culture of performance and respect - across hierarchies, departments, and countries. Trust is vital to Sika. It\'s the basis of our relationships with customers and employees. If you trust Sika we can open up a whole world of interesting opportunities for you too.');
$template['we_offer'] = array(
  'title' => 'We offer',
  'text' => 'innovative and challenging internships and traineeships focusing on specialty chemicals in the field of research and development. You will work independently and learn first-hand about the many aspects of chemistry and material sciences found in the various fields of Sika Technology.');
$template['we_look'] = array(
  'title' => 'We look for',
  'text' => 'open-minded and proactive people with an international focus, who are interested in new technologies and exciting challenges.');


//$template['interview_print_until'] = 0;
if(isset($_GET['preview']) && $_GET['preview'] == sha1($template['company_name_short'])) $template['interview_print_until'] = 1;

$i=0;

$template['interview'][$i++] = array(
  'name' => 'Carl Philipp Rosenau',
  'img_url' => $awss3.'/companies/sika/interviewee_2019_1',

  'interview' => array(
    0 => array(
      'question' => 'You switched from academia to industry almost a year ago. What were your first steps in search for employment?',
      'answer' => 'The first step was building a network of people outside my research field – this takes time. This is important as they help you finding out about the variety of different companies and job descriptions one is not aware of while being in the academic world. Also, with personal contacts, information on job vacancies are spread faster and easier.
      Attending career fairs such as Chemtogether, the career night and other events offered by the career center of ETH was an essential step of building a network.
      For example, I only got to know Sika at a career event and intensified the contact at Chemtogether.',
    ),
    1 => array(
      'question' => 'You mentioned ETH career events. How were those helpful?',
      'answer' => 'I would highly recommend them. The field trips to companies, which are regularly organized by associations such as VCS, VAC and VECS as well as the in-house career events at ETH are very beneficial. They give you great insight into which kind of jobs are out there and offer you the opportunity to get a feeling for the company and the leave the academic microcosms. The only drawback is that one has to invest time for participation in these kinds of events, which can be challenging during your studies or during doctoral research - but it’s time well spent.',
    ),
    2 => array(
      'question' => 'How much time passed between starting your job search until you started working at Sika?',
      'answer' => 'This is a difficult question to answer since I already started building my network during my master studies and also applied to companies months prior to finishing my doctorate. Personally, this experience and the interviews really helped me at a later stage and accelerated my job search. After my defence and still under contract at ETH, it took about four months after sending my first application to get hired by Sika.',
    ),
    3 => array(
      'question' => 'Can you give advice on how early one should start their job search?',
      'answer' => 'I would recommend to start at least one year ahead of your desired starting date. In my experience, many people are too busy doing research or writing their thesis and only start the job search after they have graduated. As the job search involves a lot of preparation and most importantly self-consciousness to find out one’s own skills set and desires - this process takes some time. It’s a learning curve, of course (laughs).
      Moreover, nowadays you need to write a lot of applications before getting hired - despite having an advanced science degree from ETH Zurich.',
    ),
    4 => array(
      'question' => 'What are things that came to your mind in terms of preparation for the job search?',
      'answer' => 'First, you need to find out who you are and which skills you have. Next, it is important to pinpoint which parts of a job matters the most to you. Aspects like work atmosphere, development opportunities, salary and meaningfulness of the work need to be weighed against each other as they are perceived individually and then matched with one’s skills set.',
    ),
    5 => array(
      'question' => 'How did you prepare for the Chemtogether fair?',
      'answer' => 'First, I wanted to go into the fair open minded and get my own impressions of the various companies and thereby neglecting any prejudices I may have. 
      Preparation is also key here. I would recommend to look up the different companies beforehand, where they are located, what their main business is – you can even have a look into the news section about their latest inventions. It is very important to approach the companies with prepared questions, such as what typical entry jobs are, how the application process works, if there are current job vacancies etc.? Not just: so what does your company do? Showing you’re prepared and asking specific questions already gives the company a good impression of yourself.
      On the other hand, the company has the same obligation. Their presentation must convince potential future employees to apply for a job. In my opinion, Sika did an excellent job in that regard and really convinced me to work with them.',
    ),
    6 => array(
      'question' => 'So, you already met HR representatives at the fair?',
      'answer' => 'Yes, indeed most companies bring their HR representatives along. Sika, for instance, brought their HR representatives and since I already knew them from a prior career event at ETH, so it was quite easy to restart the conversation. I directly passed on my C.V. and heard about an upcoming open position that was interesting for me.',
    ),
    7 => array(
      'question' => 'What happened after the fair?',
      'answer' => 'My application process was accelerated as I had direct contact to HR. Also, Sika has a great hiring process with diligent communication.',
    ),
    8 => array(
      'question' => 'Is this the usual case?',
      'answer' => 'No, not at all (laughs). This is not given in the world of electronic applications via online portals which are popular at a lot of companies. The bigger a company is the more rigid the application process gets with its fixed procedures and it cannot be easily accelerated. HR then often is organized decentralized or even outsourced and therefore needs more time to review all the applications and come to a decision.',
    ),
    9 => array(
      'question' => 'Do you have further recommendations for students who are seeking for work?',
      'answer' => 'Again, I would emphasize how important a network of people is. With this I don’t necessarily mean a network with HR or company representatives. But having active exchange and natural contact with fellow students and colleagues, former supervisors and so forth, helps a lot in gaining information about different kind of jobs and potentially interesting fields. Take time during the studies to stay in touch with your friends and colleagues, this is your network. 
      Moreover, keep your eyes open and look for opportunities outside university rather than just studying and only being focused on a quick degree. For example, nowadays there are a lot more jobs for people who graduate with a master’s degree than university students (and professors for that matter) would think. 
      In any case, if there are no suitable jobs available after the master’s level or none of personal interest to you, a doctoral degree can be a great option to qualify yourself further.',
    ),
    10 => array(
      'question' => 'Last question: Is your supervisor or professor important for the job search?',
      'answer' => 'I think this depends on which kind of job you are looking for. In classical research jobs at big pharma companies your professor’s name may be more important than elsewhere. In my case, it was not important at all – even more so as I entered a new field. Personal initiative is much more important nowadays!',
    ),
  ),
);

include('../0_template/template.php');
?>