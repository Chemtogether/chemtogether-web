<?php

if (!isset($_POST["token"]) || ($_POST["token"] != getenv("REGISTRATION_TOKEN"))){
    http_response_code(404);
    include('../errors/404/index.php');
    exit();
}

$year = date('Y');

$db = new SQLite3('registrations.db');

$create_query = "CREATE TABLE IF NOT EXISTS registrations (id INTEGER PRIMARY KEY, full_name TEXT, company TEXT, mail TEXT, phone TEXT, package TEXT, fair_day TEXT, additional_event TEXT, comment TEXT, terms_and_conditions TEXT, y TEXT)";
$db->exec($create_query);

$insert_query = $db->prepare("INSERT INTO registrations (company, full_name, mail, phone, package, fair_day, additional_event, comment, terms_and_conditions, y) VALUES (:company, :full_name, :mail, :phone, :package, :fair_day, :additional_event, :comment, :terms_and_conditions, :y)");
$insert_query->bindValue(':company', $_POST['company']);
$insert_query->bindValue(':full_name', $_POST['full_name']);
$insert_query->bindValue(':mail', $_POST['mail']);
$insert_query->bindValue(':phone', $_POST['phone']);
$insert_query->bindValue(':package', $_POST['package']);
$insert_query->bindValue(':fair_day', $_POST['fair_day']);
$insert_query->bindValue(':additional_event', $_POST['additional_event']);
$insert_query->bindValue(':comment', $_POST['comment']);
$insert_query->bindValue(':terms_and_conditions', $_POST['terms_and_conditions']);
$insert_query->bindValue(':y', $year);
$insert_query->execute();

$company = $_POST['company'];
$full_name = $_POST['full_name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$package = $_POST['package'];
$fair_day = $_POST['fair_day'];
$additional_event = $_POST['additional_event'];
$comment = $_POST['comment'];
$terms_and_conditions = $_POST['terms_and_conditions'];

$mail_msg = "A new company has registered: \n Company: $company \n Name: $full_name \n Mail: $mail \n Phone: $phone \n Package: $package \n Fair day: $fair_day \n Additional event: $additional_event \n Comment: $comment \n Terms and conditions: $terms_and_conditions \n Year: $year";

mail("schmiste@chem.ethz.ch", "New Chemtogether registration", $mail_msg);
mail("mmeinhardt@student.ethz.ch", "New Chemtogether registration", $mail_msg);
mail("tniederhoff@student.ethz.ch", "New Chemtogether registration", $mail_msg);

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
        <?php echo($lang['navigation']['submit_title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['submit_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
        <div class="text l-12m-12 s-12">
        <?php 
                echo "<h2> Your information: </h2> \n";
                echo "Company: ".$_POST['company']." \n";
                echo "Name: ".$_POST['full_name']." \n";
                echo "Mail: ".$_POST['mail']." \n";
                echo "Phone: ".$_POST['phone']." \n";
                echo "Package: ".$_POST['package']." \n";
                echo "Day: ".$_POST['fair_day']." \n";
                echo "Additional Event: ".$_POST['additional_event']." \n";
                echo "Comment: ".$_POST['comment']." \n";
                echo "Terms and Conditions: ".$_POST['terms_and_conditions']." \n";
        ?>
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