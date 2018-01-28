<?php

// provides small functions
include('php/general_functions.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('./lang.php');


// GENERAL

$active_nav = 'exhibitors';



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
        <?php echo($lang['general']['title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-6 m-12 s-12">
        Please do not hesitate to contact us:<br><br>
        <ul class="fa-ul">
          <li><a href="mailto:info@chemtogether.ethz.ch"><span class="fa-li"><i class="fa-fw far fa-envelope"></i></span>info@chemtogether.ethz.ch</a></li>
          <li><span class="fa-li"><i class="fa-fw far fa-building"></i></span>VCS, Postfach 84, Wolfgang-Pauli-Str. 9, 8093 Zürich</li>
        </ul>
      </div>
      <div class="text l-6 m-12 s-12">
        Additional documents:<br><br>
        <ul class="fa-ul">
          <li><a href="link"><span class="fa-li"><i class="fa-fw far fa-file-alt"></i></span>Broschure for companies (2018)</a></li>
          <li><a href="link"><span class="fa-li"><i class="fa-fw far fa-file-alt"></i></span>Expo Guide (2017)</a></li>
        </ul>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        Partner Options
      </span>
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
