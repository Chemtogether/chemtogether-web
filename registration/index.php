<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("REGISTRATION_TOKEN"))){
    http_response_code(404);
    include('../errors/404/index.php');
    exit();
}

// provides small functions
include('../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../includes/language.php');

// include all translations from local file
include('./lang.php');


// GENERAL
$active_nav = 'registration';

$fb = array(
  "title"        => "Chemtogether 2024",
  "desc"         => "This year's Chemtogether will take place in November 2024!",  "url"          => "https://www.chemtogether.ethz.ch/registration/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

?>

<?php include('../includes/head.php');  ?>
<?php include('../includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main" class="registration">

  <div class="container">

    <div class="spacer">
    </div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['navigation']['title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer"></div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['registration_header'][$eng]); ?>
      </span>
    </div>

    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <form method="post" action="submit.php">
            <input type="hidden" name="token" value="<?php echo getenv("REGISTRATION_TOKEN"); ?>">
            <div>
                <label for="name_form" style="margin-right: 20px; font-size: 20px; font-weight: bold;"><?php echo($lang['content']['form_name'][$eng]); ?> </label>
                <input type="text" name="full_name" placeholder="Name" id="name_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="company_form" style="margin-right: 20px; font-size: 20px; font-weight: bold;"><?php echo($lang['content']['form_company'][$eng]); ?></label>
                <input type="text" name="company" placeholder=<?php echo($lang['content']['form_company'][$eng]); ?> id="company_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="mail_form" style="margin-right: 20px; font-size: 20px; font-weight: bold;"><?php echo($lang['content']['form_mail'][$eng]); ?></label>
                <input type="text" name="mail" placeholder=<?php echo($lang['content']['form_mail'][$eng]); ?> id="mail_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="phone_form" style="margin-right: 20px; font-size: 20px; font-weight: bold;"><?php echo($lang['content']['form_phone'][$eng]); ?></label>
                <input type="text" name="phone" placeholder=<?php echo($lang['content']['form_phone'][$eng]); ?> id="phone_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">
                    <?php echo($lang['content']['form_package'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="package_option1" name="package" value="C" style="margin-right: 20px;" required>
                    <label for="package_option1"><?php echo($lang['content']['form_package_option1'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="package_option2" name="package" value="Ag" style="margin-right: 20px;" required>
                    <label for="package_option2"><?php echo($lang['content']['form_package_option2'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="package_option3" name="package" value="Au" style="margin-right: 20px;" required>
                    <label for="package_option3"><?php echo($lang['content']['form_package_option3'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">
                    <?php echo($lang['content']['form_day'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="day_option1" name="day" value="Tue" style="margin-right: 20px;" required>
                    <label for="day_option1"><?php echo($lang['content']['day_option1'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="day_option2" name="day" value="Wed" style="margin-right: 20px;" required>
                    <label for="day_option2"><?php echo($lang['content']['day_option2'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">
                    <?php echo($lang['content']['form_additional_event'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="additional_event_option1" name="additional_event" value="Yes" style="margin-right: 20px;">
                    <label for="additional_event_option1"><?php echo($lang['content']['additional_event_option1'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="comment_form" style="margin-right: 20px; font-size: 20px; vertical-align: top; font-weight: bold;"><?php echo($lang['content']['form_comment'][$eng]); ?> </label>
                <textarea name="comment" id="comment_form" style="width: 60%; font-size: 16px; font-family: opensans; vertical-align: top;"></textarea>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">
                    <?php echo($lang['content']['form_terms_and_conditions'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="radio" id="terms_and_conditions_option1" name="terms_and_conditions" value="Yes" style="margin-right: 20px;" required>
                    <label for="terms_and_conditions_option1"><?php echo($lang['content']['terms_and_conditions_option1'][$eng]); ?></label>
                </div>
            </div>
            <input type="submit" value="Submit" style="background-color: rgba(229,107,46,1); color: white; padding: 10px 20px; font-size: 16px; font-family: 'opensans', sans-serif; border: none; cursor: pointer;">
        </form>
      </div>
    </div>

    

    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    </div>
    </div>

  </div>
</div>

<!-- END CONTENT  -->

<?php include('../includes/footer.php');  ?>
<?php include('../includes/foot.php');  ?>
