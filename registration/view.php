<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("VIEW_REGISTRATIONS_TOKEN"))){
    http_response_code(404);
    include('../errors/404/index.php');
    exit();
}

$db = new SQLite3('registrations.db');

$res = $db->query("SELECT * FROM registrations");

// provides small functions
include('../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../includes/language.php');

// include all translations from local file
include('./lang.php');

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
<div id="main" class="fair">

  <div class="container">

    <div class="spacer">
    </div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['navigation']['view_title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['view_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
        <div class="text l-12m-12 s-12">
        <?php 
            while (($row = $res->fetchArray())) {
                echo "<h2>".$row['company']."</h2> \n";
                echo "Name: ".$row['full_name']." \n";
                echo "Mail: ".$row['mail']." \n";
                echo "Phone: ".$row['phone']." \n";
                echo "Package: ".$row['package']." \n";
                echo "Day: ".$row['fair_day']." \n";
                echo "Additional Event: ".$row['additional_event']." \n";
                echo "Comment: ".$row['comment']." \n";
                echo "Terms and Conditions: ".$row['terms_and_conditions']." \n";
            }
        ?>
      </div>
    </div> 

    </div>

  </div>
</div>

<!-- END CONTENT  -->

<?php include('../includes/footer.php');  ?>
<?php include('../includes/foot.php');  ?>