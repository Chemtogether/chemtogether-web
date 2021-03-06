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

$active_nav = '';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main">

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
        <?php echo($lang['content']['error_1'][$eng]); ?>
        <br><br>
        <?php echo($lang['content']['error_2'][$eng]); ?> <?php obfuscate_mail('webmaster', '', ''); ?>.
        <br><br><br>
        <a href="/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span><?php echo($lang['content']['home'][$eng]); ?></span></a>
        <br>
        <a onclick="window.history.back();" href=""><i class="fas fa-undo fa-fw"></i>&nbsp;<span><?php echo($lang['content']['return'][$eng]); ?></span></a>
      </div>
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
