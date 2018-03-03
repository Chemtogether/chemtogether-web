<?php

// provides small functions
include('php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('./lang.php');


// GENERAL

$active_nav = 'news';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main" class="news">

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
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>


<?php
  $files = array_reverse(array_diff(scandir('./data'), array('.', '..')));

  foreach($files as $path) {
    include('./data/'.$path);

    echo('<div class="spacer"></div><div class="spacer"></div>');

    echo('<div class="content flex"><div class="text l-12 m-12 s-12">');

    echo('<div class="subsection">');
    echo($title[$eng]);
    echo('</div>');

    echo($date[$eng]);
    echo('<br><br>');

    echo($content);

    echo('</div></div>');
  }
?>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

  </div>


</div>
<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
