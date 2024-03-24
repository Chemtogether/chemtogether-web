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
    <div class="spacer"></div>
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
    <div class="spacer"></div>
    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <form method="post" action="submit.php">
            <input type="hidden" name="token" value="<?php echo getenv("REGISTRATION_TOKEN"); ?>">
            <div>
                <label for="name_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_name'][$eng]); ?> </label>
                <input type="text" name="full_name" placeholder="Name" id="name_form" style="width: 30%; font-size: 16px; font-family: opensans;">
            </div>
            <div class="spacer"></div>
            <div>
                <label for="company_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_company'][$eng]); ?></label>
                <input type="text" name="company" placeholder=<?php echo($lang['content']['form_company'][$eng]); ?> id="company_form" style="width: 30%; font-size: 16px; font-family: opensans;">
            </div>
            <div class="spacer"></div>
            <div>
                <label for="phone_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_phone'][$eng]); ?></label>
                <input type="text" name="phone" placeholder=<?php echo($lang['content']['form_phone'][$eng]); ?> id="phone_form" style="width: 30%; font-size: 16px; font-family: opensans;">
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px;">
                    <?php echo($lang['content']['form_package'][$eng]); ?> <!-- Assuming you have a similar entry for package selection in your language file -->
                </div>
                <div>
                    <input type="radio" id="package_option1" name="package" value="C">
                    <label for="package_option1"><?php echo($lang['content']['form_package_option1'][$eng]); ?></label>
                </div>
                <div>
                    <input type="radio" id="package_option2" name="package" value="Ag">
                    <label for="package_option2"><?php echo($lang['content']['form_package_option2'][$eng]); ?></label>
                </div>
                <div>
                    <input type="radio" id="package_option3" name="package" value="Au">
                    <label for="package_option3"><?php echo($lang['content']['form_package_option3'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <input type="submit" value="Submit">
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

<!-- END CONTENT  -->

<?php include('../includes/footer.php');  ?>
<?php include('../includes/foot.php');  ?>
