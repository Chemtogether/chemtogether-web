<?php

  $PAGE_OPEN = true;

if (!$PAGE_OPEN || !isset($_GET["t"]) || ($_GET["t"] != getenv("EVENT_REGISTRATION_TOKEN"))){
    http_response_code(404);
    include('../../errors/404/index.php');
    exit();
}


// provides small functions
include('../../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../../includes/language.php');

// include all translations from local file
include('./lang.php');


// GENERAL
$active_nav = 'event-registration';

$fb = array(
  "title"        => "Chemtogether 2025",
  "desc"         => "This year's Chemtogether will take place in November 2025!",  "url"          => "https://www.chemtogether.ethz.ch/registration/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

?>

<?php include('../../includes/head.php');  ?>
<?php include('../../includes/nav.php');  ?>



<!-- START CONTENT -->
<div id="main" class="registration">
  <div class="container">

    <div class="spacer"></div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['navigation']['title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php
          echo($lang['content']['intro_text'][$eng]);
        ?>
      </div>
    </div>

    <div class="spacer"></div>

    <div class="section">
      <span class="section-slashes"><span>/</span><span>/</span></span>
      <span class="section-text">
        <?php echo($lang['content']['registration_header'][$eng]); ?>
      </span>
    </div>

    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">

        <!-- CHANGE: Simplified form fields to match the new requirements -->
        <form method="post" action="submit.php" novalidate>
          <input type="hidden" name="token" value="<?php echo getenv("EVENT_REGISTRATION_TOKEN"); ?>">

          <!-- ADDED/CHANGE: Name (required) -->
          <div>
            <label for="name_form" style="margin-right:20px;font-size:20px;font-weight:bold;">
              <?php echo($lang['content']['form_name'][$eng]); ?>:
            </label>
            <input
              type="text"
              name="full_name"
              id="name_form"
              placeholder="<?php echo($lang['content']['form_name'][$eng]); ?>"
              style="width:30%;font-size:16px;font-family:opensans;"
              required
            >
          </div>

          <div class="spacer"></div>

          <!-- ADDED/CHANGE: E-Mail (required) -->
          <div>
            <label for="mail_form" style="margin-right:20px;font-size:20px;font-weight:bold;">
              <?php echo($lang['content']['form_mail'][$eng]); ?>:
            </label>
            <input
              type="email"
              name="mail"
              id="mail_form"
              placeholder="<?php echo($lang['content']['form_mail'][$eng]); ?>"
              style="width:30%;font-size:16px;font-family:opensans;"
              required
            >
          </div>

          <div class="spacer"></div>

          <!-- ADDED: Study program (required) -->
          <div>
            <label for="study_program_form" style="margin-right:20px;font-size:20px;font-weight:bold;">
              <?php echo($lang['content']['study_program'][$eng]); ?>:
            </label>
            <input
              type="text"
              name="study_program"
              id="study_program_form"
              placeholder="<?php echo($lang['content']['study_program'][$eng]); ?>"
              style="width:30%;font-size:16px;font-family:opensans;"
              required
            >
          </div>

          <div class="spacer"></div>

          <!-- ADDED: Semester (required) -->
          <div>
            <label for="semester_form" style="margin-right:20px;font-size:20px;font-weight:bold;">
              <?php echo($lang['content']['semester'][$eng]); ?>:
            </label>
            <input
              type="number"
              min="1"
              max="20"
              step="1"
              name="semester"
              id="semester_form"
              placeholder="<?php echo($lang['content']['semester'][$eng]); ?>"
              style="width:15%;font-size:16px;font-family:opensans;"
              required
            >
          </div>

          <div class="spacer"></div>

          <div class="spacer"></div>
          <input
            type="submit"
            value="Submit"
            style="background-color:rgba(229,107,46,1);color:white;padding:10px 20px;font-size:18px;font-family:'opensans',sans-serif;border:none;cursor:pointer;border-radius:10px;"
          >
        </form>

      </div>
    </div>

    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div>
  </div>
</div>
<!-- END CONTENT -->

<?php include('../../includes/footer.php'); ?>
<?php include('../../includes/foot.php');  ?>