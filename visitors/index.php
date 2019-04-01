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

$active_nav = 'visitors';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main" class="fair">

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
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="image">
      <div class="patterned">
        <div id="fair-image">
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
            <span id="date-place">HCI G-<?php echo($lang['content']['image_floor'][$eng]); ?></span>
            <span id="date-time">9.00 - 17.00</span>
          </div>
        </div>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['main_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
      <div class="text l-4 m-12 s-12 fair-introlinks">
        <a href="https://www.ethz.ch/de/campus/standorte-anreise/standorte-ZH/hoenggerberg.html">
          <i class="far fa-fw fa-map"></i>&nbsp;
          <span><?php echo($lang['content']['links_directions'][$eng]); ?></span>
        </a>
      </div>
      <div class="text l-4 m-12 s-12 fair-introlinks">
        <a href="<?php echo($awss3."/files/Chemtogether_2018_Brochure.pdf"); ?>">
          <i class="far fa-fw fa-file-alt"></i>&nbsp;
          <span><?php echo($lang['content']['links_guide'][$eng]); ?></span>
        </a>
      </div>
      <div class="text l-4 m-12 s-12 fair-introlinks">
        <a href="/companies/">
          <i class="far fa-fw fa-building"></i>&nbsp;
          <span><?php echo($lang['content']['links_companies'][$eng]); ?></span>
        </a>
      </div>
    </div>
  </div>

  <div class="spacer">
  </div>

  <div class="spacer">
  </div>

  <div class="anchor" id="schedule">
  </div>

  <div class="section">
    <span class="section-slashes">
      <span>/</span><span>/</span>
    </span>
    <span class="section-text">
      <?php echo($lang['content']['schedule_subsection'][$eng]); ?>
    </span>
  </div>

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <?php echo($lang['content']['schedule_text'][$eng]); ?>
    </div>
  </div>

  <div class="spacer">
  </div>

  <div class="spacer">
  </div>

  <div class="anchor" id="programme">
  </div>

  <div class="section">
    <span class="section-slashes">
      <span>/</span><span>/</span>
    </span>
    <span class="section-text">
      <?php echo($lang['content']['programme_subsection'][$eng]); ?>
    </span>
  </div>

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <?php echo($lang['content']['programme_text'][$eng]); ?>
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
