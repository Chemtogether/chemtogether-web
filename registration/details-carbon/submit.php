<?php

if (!isset($_POST["token"]) || ($_POST["token"] != getenv("DETAILS_CARBON_TOKEN"))){
    http_response_code(404);
    include('../../errors/404/index.php');
    exit();
}

$year = date('Y');

$uploaddir = "/home/webmaster/uploaded-company-data/$year/";
mkdir($uploaddir);
$companyname = preg_replace( '/[^a-z0-9]+/', '', strtolower($_POST['company']));
$uploadfile_logo = $uploaddir . $companyname . 'logo' . basename($_FILES['companylogo']['name']);

if (move_uploaded_file($_FILES['companylogo']['tmp_name'], $uploadfile_logo)) {
  $successful_upload = TRUE;
}
else{
  $successful_upload = FALSE;
  echo "File submission not successful. Please send the relevant files to us by E-Mail!";
}

$db = new SQLite3('detailscarbon.db');

$create_query = "CREATE TABLE IF NOT EXISTS detailscarbon (id INTEGER PRIMARY KEY, mail TEXT, company TEXT, representatives TEXT, cars TEXT, languages TEXT, employee TEXT, qualification TEXT, options TEXT, foundingyear TEXT, sites TEXT, additionalfacts TEXT, weare TEXT, weoffer TEXT, welooking TEXT, additionalinfo TEXT, comment TEXT ,y TEXT, successfulupload BOOLEAN)";
$db->exec($create_query);

$insert_query = $db->prepare("INSERT INTO detailscarbon (mail, company, representatives, cars, languages, employee, qualification, options, foundingyear, sites, additionalfacts, weare, weoffer, welooking, additionalinfo, comment, y, successfulupload) VALUES (:mail, :company, :representatives, :cars, :languages, :employee, :qualification, :options, :foundingyear, :sites, :additionalfacts, :weare, :weoffer, :welooking, :additionalinfo, :comment, :y, :successfulupload)");
$insert_query->bindValue(':mail', $_POST['mail']);
$insert_query->bindValue(':company', $_POST['company']);
$insert_query->bindValue(':representatives', $_POST['representatives']);
$insert_query->bindValue(':cars', $_POST['cars']);
$insert_query->bindValue(':languages', $_POST['languages']);
$insert_query->bindValue(':employee', $_POST['employee']);
$insert_query->bindValue(':qualification', implode(", ", $_POST['qualification']));
$insert_query->bindValue(':options', implode(", ", $_POST['options']));
$insert_query->bindValue(':foundingyear', $_POST['foundingyear']);
$insert_query->bindValue(':sites', $_POST['sites']);
$insert_query->bindValue(':additionalfacts', $_POST['additionalfacts']);
$insert_query->bindValue(':weare', $_POST['weare']);
$insert_query->bindValue(':weoffer', $_POST['weoffer']);
$insert_query->bindValue(':welooking', $_POST['welooking']);
$insert_query->bindValue(':additionalinfo', $_POST['additionalinfo']);
$insert_query->bindValue(':comment', $_POST['comment']);
$insert_query->bindValue(':y', $year);
$insert_query->bindValue(':successfulupload', $successful_upload);
$insert_query->execute();

$mail = $_POST['mail'];
$company = $_POST['company'];
$representatives = $_POST['representatives'];
$cars = $_POST['cars'];
$languages = $_POST['languages'];
$employee = $_POST['employee'];
$qualification = implode(", ", $_POST['qualification']);
$options = implode(", ", $_POST['options']);
$foundingyear = $_POST['foundingyear'];
$sites = $_POST['sites'];
$additionalfacts = $_POST['additionalfacts'];
$weare = $_POST['weare'];
$weoffer = $_POST['weoffer'];
$welooking = $_POST['welooking'];
$additionalinfo = $_POST['additionalinfo'];
$comment = $_POST['comment'];

$mail_msg = "A new company has given their details: \n Company: $company \n Mail: $mail \n Find informations on the view page.";

mail("schmiste@chem.ethz.ch", "New Chemtogether registration", $mail_msg);
//mail("mmeinhardt@student.ethz.ch", "New Chemtogether registration", $mail_msg);
//mail("tniederhoff@student.ethz.ch", "New Chemtogether registration", $mail_msg);

// provides small functions
include('../../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../../includes/language.php');

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
            echo "<h2> Your information: </h2><br>";
            echo "<b>Mail: </b>" . htmlspecialchars($_POST['mail']) . "<br>";
            echo "<b>Company: </b>" . htmlspecialchars($_POST['company']) . "<br>";
            echo "<b>Representatives: </b>" . htmlspecialchars($_POST['representatives']) . "<br>";
            echo "<b>Cars: </b>" . htmlspecialchars($_POST['cars']) . "<br>";
            echo "<b>Languages: </b>" . htmlspecialchars($_POST['languages']) . "<br>";
            echo "<b>Employees: </b>" . htmlspecialchars($_POST['employee']) . "<br>";
            echo "<b>Desired qualifications: </b>" . htmlspecialchars(implode(", ", $_POST['qualification'])) . "<br>";
            echo "<b>Career Options: </b>" . htmlspecialchars(implode(", ", $_POST['options'])) . "<br>";
            echo "<b>Founding year: </b>" . htmlspecialchars($_POST['foundingyear']) . "<br>";
            echo "<b>Number of sites: </b>" . htmlspecialchars($_POST['sites']) . "<br>";
            echo "<b>Additional facts: </b>" . htmlspecialchars($_POST['additionalfacts']) . "<br>";
            echo "<b>We are: </b>" . htmlspecialchars($_POST['weare']) . "<br>";
            echo "<b>We offer: </b>" . htmlspecialchars($_POST['weoffer']) . "<br>";
            echo "<b>We are looking for: </b>" . htmlspecialchars($_POST['welooking']) . "<br>";
            echo "<b>Additional information: </b>" . htmlspecialchars($_POST['additionalinfo']) . "<br>";
            echo "<b>Comment:</b> " . htmlspecialchars($_POST['comment']) . "<br>"; 
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

<?php include('../../includes/footer.php');  ?>
<?php include('../../includes/foot.php');  ?>