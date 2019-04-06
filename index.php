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

$active_nav = 'home';

$fb = array(
  "title"        => "Chemtogether 2019",
  "desc"         => "This year's Chemtogether will take place on the 5th and 6th November 2019! Over two days, a total of eighteen companies from the chemical industry will be present and offer information on careers in their field.",
  "url"          => "https://www.chemtogether.ethz.ch/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main" class="home">

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
          <span id="date-day1">5</span>
          <span class="date-bar"></span>
          <span id="date-day2">6</span>
        </div>
        <div class="date-container">
          <span id="date-month">Nov.</span>
          <span id="date-year">2019</span>
        </div>
        <div class="date-container">
          <span id="date-place">HCI G-<?php echo($lang['content']['slideshow_floor'][$eng]); ?></span>
          <span id="date-time">9.00 - 17.00</span>
        </div>
      </div>
      <div id="home-bottom">
        <div id="link-container">
          <div id="link-visitors">
            <a href="/visitors/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span><?php echo($lang['content']['slideshow_linkvisitors'][$eng]); ?></span></a>
          </div>
          <div id="link-companies">
            <a href="/exhibitors/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span><?php echo($lang['content']['slideshow_linkcompanies'][$eng]); ?></span></a>
          </div>
        </div>
      </div>
    </div>

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

    <div class="spacer">
    </div>


    <div class="content flex">
      <div class="infobox-container l-8 m-12 s-12">
        <a href="/visitors/" class="infobox" id="fair">
          <div class="infoboxtext blue">
            <?php echo($lang['content']['infobox1_text'][$eng]); ?><br>
            <span><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;</span><span><?php echo($lang['content']['infobox1_link'][$eng]); ?></span>
          </div>
        </a>
      </div>

      <div class="infobox-container l-4 m-12 s-12">
        <a href="/impressions/" class="infobox" id="news">
          <div class="infoboxtext orange" style="order:2">
            <?php echo($lang['content']['infobox2_text'][$eng]); ?><br>
            <span><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;</span><span><?php echo($lang['content']['infobox2_link'][$eng]); ?></span>
          </div>
        </a>
      </div>
    </div>

    <div class="content flex">
      <div class="infobox-container l-4 m-12 s-12">
        <a href="/team/" class="infobox" id="aboutus">
          <div class="infoboxtext orange">
            <?php echo($lang['content']['infobox3_text'][$eng]); ?><br>
            <span><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;</span><span><?php echo($lang['content']['infobox3_link'][$eng]); ?></span>
          </div>
        </a>
      </div>

      <div class="infobox-container l-8 m-12 s-12">
        <a href="/exhibitors/" class="infobox" id="companies">
          <div class="infoboxtext blue">
            <?php echo($lang['content']['infobox4_text'][$eng]); ?><br>
            <span><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;</span><span><?php echo($lang['content']['infobox4_link'][$eng]); ?></span>
          </div>
        </a>
      </div>
    </div>


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
