<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("DETAILS_CARBON_TOKEN"))){
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
$active_nav = 'details-carbon';

$fb = array(
  "title"        => "Chemtogether 2024",
  "desc"         => "This year's Chemtogether will take place in November 2024!",  "url"          => "https://www.chemtogether.ethz.ch/registration/details-carbon",
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
      <div class="text l-12m-12 s-12" style="padding: 1em;">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer"></div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['details_header'][$eng]); ?>
      </span>
    </div>

    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <form enctype="multipart/form-data" method="post" action="submit.php">
            <input type="hidden" name="token" value="<?php echo getenv("DETAILS_CARBON_TOKEN"); ?>">
            <div class="content flex">
              <div class="text l-12m-12 s-12">
                <?php echo($lang['content']['general_spacer'][$eng]); ?>
              </div>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="email_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_email'][$eng]); ?> </label>
                <input type="email" name="email" placeholder="E-mail" id="email_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="company_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_company'][$eng]); ?></label>
                <input type="text" name="company" id="company_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div class="content flex">
              <div class="text l-12m-12 s-12">
                <?php echo($lang['content']['attendance_spacer'][$eng]); ?>
              </div>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="representatives_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_representatives'][$eng]); ?></label>
                <textarea name="representatives" id="representatives_form" style="width: 30%; font-size: 16px; font-family: opensans;" required></textarea>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="cars_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_cars'][$eng]); ?></label>
                <input type="text" name="cars" id="cars_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div class="content flex">
              <div class="text l-12m-12 s-12">
                <?php echo($lang['content']['facts_spacer'][$eng]); ?>
              </div>
            </div>
            <div class="spacer"></div>

            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                <label for="companylogo_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_companylogo'][$eng]); ?></label>
                <input type="file" name="companylogo" id="companylogo_form" required>
            </div>
            <div class="spacer"></div>


            <div>
                <label for="languages_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_languages'][$eng]); ?></label>
                <input type="text" name="languages" placeholder=<?php echo($lang['content']['form_languages'][$eng]); ?> id="languages_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="employee_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_employee'][$eng]); ?></label>
                <input type="text" name="employee" placeholder=<?php echo($lang['content']['form_employee'][$eng]); ?> id="employee_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px;">
                    <?php echo($lang['content']['form_qualification'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="qualification_option1" name="qualification[]" value="BSc" style="margin-right: 20px;" required>
                    <label for="qualification_option1"><?php echo($lang['content']['form_qualification_option1'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="qualification_option2" name="qualification[]" value="MSc" style="margin-right: 20px;" required>
                    <label for="qualification_option2"><?php echo($lang['content']['form_qualification_option2'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="qualification_option3" name="qualification[]" value="PhD" style="margin-right: 20px;" required>
                    <label for="qualification_option3"><?php echo($lang['content']['form_qualification_option3'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="qualification_option4" name="qualification[]" value="Post-Doc" style="margin-right: 20px;" required>
                    <label for="qualification_option4"><?php echo($lang['content']['form_qualification_option4'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <div>
                <div style="margin-bottom: 10px; font-size: 20px;;">
                    <?php echo($lang['content']['form_options'][$eng]); ?>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option1" name="option[]" value="Thesis" style="margin-right: 20px;" required>
                    <label for="options_option1"><?php echo($lang['content']['form_options_option1'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option2" name="option[]" value="Industrial PhD" style="margin-right: 20px;" required>
                    <label for="options_option2"><?php echo($lang['content']['form_options_option2'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option3" name="option[]" value="Industrial Post-Doc" style="margin-right: 20px;" required>
                    <label for="options_option3"><?php echo($lang['content']['form_options_option3'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option4" name="option[]" value="Internship" style="margin-right: 20px;" required>
                    <label for="options_option4"><?php echo($lang['content']['form_options_option4'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option5" name="option[]" value="Trainee" style="margin-right: 20px;" required>
                    <label for="options_option5"><?php echo($lang['content']['form_options_option5'][$eng]); ?></label>
                </div>
                <div style="margin-left: 20px; margin-bottom: 5px;">
                    <input type="checkbox" id="options_option6" name="option[]" value="Direct Entry" style="margin-right: 20px;" required>
                    <label for="options_option6"><?php echo($lang['content']['form_options_option6'][$eng]); ?></label>
                </div>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="founding_year_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_founding_year'][$eng]); ?></label>
                <input type="text" name="founding_year" placeholder=<?php echo($lang['content']['form_founding_year'][$eng]); ?> id="founding_year_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="sites_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_sites'][$eng]); ?></label>
                <input type="text" name="sites" placeholder=<?php echo($lang['content']['form_sites'][$eng]); ?> id="sites_form" style="width: 30%; font-size: 16px; font-family: opensans;" required>
            </div>
            <div class="spacer"></div>            
            <div>
                <label for="additional_facts_form" style="margin-right: 20px; font-size: 20px; padding: 1em;"><?php echo($lang['content']['form_additional_facts'][$eng]); ?></label>
                <textarea name="additional_facts" id="additional_facts_form" style="width: 30%; font-size: 16px; font-family: opensans;"></textarea>
            </div>
            <div class="spacer"></div>
            <div class="content flex">
              <div class="text l-12m-12 s-12">
                <?php echo($lang['content']['profile_spacer'][$eng]); ?>
              </div>
            </div>
            <div class="spacer"></div> 
            <div>
                <label for="we_are_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_we_are'][$eng]); ?></label>
                <textarea id="we_are_form" style="width: 30%; font-size: 16px; font-family: opensans;" required></textarea>
            </div>
            <div class="spacer"></div>
            <div>
                <label for="we_offer_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_we_offer'][$eng]); ?></label>
                <textarea name="we_offer" id="we_offer_form" style="width: 30%; font-size: 16px; font-family: opensans;" required></textarea>
            </div>
            <div class="spacer"></div>   
            <div>
                <label for="we_looking_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_we_looking'][$eng]); ?></label>
                <textarea name="we_looking" id="we_looking_form" style="width: 30%; font-size: 16px; font-family: opensans;" required></textarea>
            </div>
            <div class="spacer"></div>  
            <div>
                <label for="additional_info_form" style="margin-right: 20px; font-size: 20px;"><?php echo($lang['content']['form_additional_info'][$eng]); ?></label>
                <textarea name="additional_info" id="additional_info_form" style="width: 30%; font-size: 16px; font-family: opensans;"></textarea>
            </div>
            <div class="spacer"></div>             
            <div>
                <label for="comment_form" style="margin-right: 20px; font-size: 20px; vertical-align: top;"><?php echo($lang['content']['form_comment'][$eng]); ?> </label>
                <textarea name="comment" id="comment_form" style="width: 60%; font-size: 16px; font-family: opensans; vertical-align: top;"></textarea>
            </div>
            <div class="spacer"></div>
            <div class="spacer"></div>
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

<?php include('../../includes/footer.php');  ?>
<?php include('../../includes/foot.php');  ?>
