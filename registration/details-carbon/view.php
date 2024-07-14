<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("VIEW_DETAILS_CARBON_TOKEN"))){
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
                echo "<h2>Company: " . htmlspecialchars($row['company']) . " </h2> <br>";
                echo "<b>Mail: </b>" . htmlspecialchars($row['mail']) . "<br>";
                echo "<b>Representatives: </b>" . htmlspecialchars($row['representatives']) . "<br>";
                echo "<b>Cars: </b>" . htmlspecialchars($row['cars']) . "<br>";
                echo "<b>Languages: </b>" . htmlspecialchars($row['languages']) . "<br>";
                echo "<b>Employees: </b>" . htmlspecialchars($row['employee']) . "<br>";
                echo "<b>Desired qualifications: </b>" . htmlspecialchars($row['qualifications']) . "<br>";
                echo "<b>Career Options: </b>" . htmlspecialchars($row['options']) . "<br>";
                echo "<b>Founding year: </b>" . htmlspecialchars($row['foundingyear']) . "<br>";
                echo "<b>Number of sites: </b>" . htmlspecialchars($row['sites']) . "<br>";
                echo "<b>Additional facts: </b>" . htmlspecialchars($row['additionalfacts']) . "<br>";
                echo "<b>We are: </b>" . htmlspecialchars($row['weare']) . "<br>";
                echo "<b>We offer: </b>" . htmlspecialchars($row['weoffer']) . "<br>";
                echo "<b>We are looking for: </b>" . htmlspecialchars($row['welooking']) . "<br>";
                echo "<b>Additional information: </b>" . htmlspecialchars($row['additionalinfo']) . "<br>";
                echo "<b>Comment:</b> " . htmlspecialchars($row['comment']) . "<br>"; 
                echo "<b>Year: </b> " .htmlspecialchars($row['y']) . "<br>";
                echo "<b>Successful Upload: </b> " .htmlspecialchars($row['succesfulupload']) . "<br>";
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