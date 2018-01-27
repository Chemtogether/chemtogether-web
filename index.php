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

$active_nav = 'home';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main">

  <div class="container">

    <div id="slideshow-container">
      <ul class="slideshow">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
      <ul class="overlay">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
      <div id="home-top">
        <div class="date-container">
          <span id="date-day1">6</span>
          <span class="date-bar"></span>
          <span id="date-day2">7</span>
        </div>
        <div class="date-container">
          <span id="date-month">Nov.</span>
          <span id="date-year">2018</span>
        </div>
        <div class="date-container">
          <span id="date-place">HCI G-<?php echo($lang['content']['slideshow_floor'][$eng]); ?></span>
          <span id="date-time">9.00 - 17.00</span>
        </div>
      </div>
      <div id="home-bottom">
        <div id="link-container">
          <div id="link-visitors">
            <a href="/fair/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span><?php echo($lang['content']['slideshow_linkvisitors'][$eng]); ?></span></a>
          </div>
          <div id="link-companies">
            <a href="/companies/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span><?php echo($lang['content']['slideshow_linkcompanies'][$eng]); ?></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['content']['title'][$eng]); ?>
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

    <div class="spacer">
    </div>

  </div>


</div>
<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
