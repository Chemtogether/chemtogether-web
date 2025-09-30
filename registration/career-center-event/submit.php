<?php

if (!isset($_POST["token"]) || ($_POST["token"] != getenv("EVENT_REGISTRATION_TOKEN"))){
    http_response_code(404);
    include('../../errors/404/index.php');
    exit();
}


$year = date('Y');


// ─────────────────────────────────────────────────────────────────────────────
// DATABASE
// ─────────────────────────────────────────────────────────────────────────────

// CHANGE: use the event-specific database and table
$db = new SQLite3('eventregistrations.db');

// CHANGE: table reduced to the new fields + metadata


$create_query = "CREATE TABLE IF NOT EXISTS eventregistrations (id INTEGER PRIMARY KEY, full_name TEXT, mail TEXT, study_program TEXT, semester INTEGER, y TEXT)";
$db->exec($create_query);

$insert_query = $db->prepare("INSERT INTO eventregistrations (full_name, mail, study_program, semester, y) VALUES (:full_name, :mail, :study_program, :semester, :y)");
$insert_query->bindValue(':full_name', $_POST['full_name']);
$insert_query->bindValue(':mail', $_POST['mail']);
$insert_query->bindValue(':study_program', $_POST['study_program']);
$insert_query->bindValue(':semester', (int)$_POST['semester'], SQLITE3_INTEGER);
$insert_query->bindValue(':y', $year);
$insert_query->execute();

// ─────────────────────────────────────────────────────────────────────────────
// EMAIL NOTIFICATION
// ─────────────────────────────────────────────────────────────────────────────

// CHANGE: variables aligned to the new fields
$full_name     = $_POST['full_name'];
$mail          = $_POST['mail'];
$study_program = $_POST['study_program'];
$semester      = $_POST['semester'];

// CHANGE: new message & subject for the Career Center event
$subject = "New registration - Career Center: Decision Making";
$mail_msg = "A new participant has registered:\n"
          . "Name: $full_name\n"
          . "E-Mail: $mail\n"
          . "Study program: $study_program\n"
          . "Semester: $semester\n"
          . "Year: $year\n";

// CHANGE: keep or update recipients as needed
// @mail("imuelle@student.ethz.ch",     $subject, $mail_msg);
// @mail("bhuerlimann@student.ethz.ch", $subject, $mail_msg);
// @mail("jgwerder@student.ethz.ch",    $subject, $mail_msg);

// ─────────────────────────────────────────────────────────────────────────────
// PAGE RENDERING
// ─────────────────────────────────────────────────────────────────────────────

// provides small functions
include('../../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../../includes/language.php');

// include all translations from local file
include('./lang.php');

// CHANGE: active nav key matches the registration page slug you used
$active_nav = 'event-registration';

// CHANGE: OpenGraph updated for the event
$fb = array(
  "title"        => "Chemtogether 2025",
  "desc"         => "This year's Chemtogether will take place in November 2025!",  "url"          => "https://www.chemtogether.ethz.ch/registration/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

?>
<?php include('../../includes/head.php');  ?>
<?php include('../../includes/nav.php');   ?>

<!-- START CONTENT -->
<div id="main" class="fair">
  <div class="container">

    <div class="spacer"></div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['navigation']['submit_title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer"></div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['submit_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php
          // CHANGE: Confirmation shows only the four fields you collect now
          echo "<h2>Your information:</h2><br>";
          echo "<b>" . htmlspecialchars($lang['content']['form_name'][$eng]) . ":</b> " . htmlspecialchars($full_name) . "<br>";
          echo "<b>" . htmlspecialchars($lang['content']['form_mail'][$eng]) . ":</b> " . htmlspecialchars($mail) . "<br>";
          echo "<b>" . htmlspecialchars($lang['content']['study_program'][$eng]) . ":</b> " . htmlspecialchars($study_program) . "<br>";
          echo "<b>" . htmlspecialchars($lang['content']['semester'][$eng]) . ":</b> " . htmlspecialchars($semester) . "<br>";
        ?>
      </div>
    </div>

    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    <div class="spacer"></div>

  </div>
</div>
<!-- END CONTENT -->

<?php include('../../includes/footer.php');  ?>
<?php include('../../includes/foot.php');    ?>
