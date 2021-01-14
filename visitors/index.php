<?php

// provides small functions
include('php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('./lang.php');
include('../companies/data.php');


// GENERAL
$active_nav = 'visitors';

$fb = array(
  "title"        => "Chemtogether 2020",
  "desc"         => "This year's Chemtogether is cancelled. Again in 2021, over two days, a total of eighteen companies from the chemical industry will be present and offer information on careers in their field.",
  "url"          => "https://www.chemtogether.ethz.ch/visitors/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

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

    <div class="content flex">
      <div class="text l-6 m-12 s-12 fair-introlinks">
        <a href="https://www.ethz.ch/de/campus/erreichen/hoenggerberg.html">
          <i class="far fa-fw fa-map"></i>&nbsp;
          <span><?php echo($lang['content']['links_directions'][$eng]); ?></span>
        </a>
      </div>
      <div class="text l-6 m-12 s-12 fair-introlinks">
        <a href="<?php echo($awss3."/files/2019expoguide.pdf"); ?>">
          <i class="far fa-fw fa-file-alt"></i>&nbsp;
          <span><?php echo($lang['content']['links_guide'][$eng]); ?></span>
        </a>
      </div>
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

  <div class="text l-12 m-12 s-12">
    <div class="subsection">
      <?php echo($lang['content']['schedule_talk1']['title'][$eng]); ?>
    </div>
    <table class="schedule">
      <tr>
        <td><i class="far fa-fw fa-comment"></i></td>
        <td>17:15</td>
        <td><?php echo($lang['content']['schedule_talk1']['event1'][$eng]); ?></td>
      </tr>
    </table>
  </div>

  </div>

  <div class="spacer">
  </div>

  <div class="spacer">
  </div>


    <div class="section">
        <span class="section-slashes">
          <span>/</span><span>/</span>
        </span>
        <span class="section-text">
          <?php echo($lang['content']['companies_subsection'][$eng]); ?>
        </span>
    </div>

    <div class="content flex">
        <div class="text l-12 m-12 s-12">
          <?php echo($lang['content']['companies_text'][$eng]); ?>
        </div>
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
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['description'][$eng]); ?> <br> <br>
      <?php echo($lang['content']['programme_1']['guest_1'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_2'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_3'][$eng]); ?>
      <br><br>
      <div class="programme_button_div">
        <a href="https://www.chemtogether.ethz.ch/dsmlecture/">
          <span><?php echo($lang['content']['programme_1']['button'][$eng]); ?></span>
        </a>
      </div>
      <br>
      <table class="fa-table">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td><?php echo($lang['content']['programme_1']['time'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-map"></i></td>
          <td><?php echo($lang['content']['programme_1']['place'][$eng]); ?></td>
        </tr>
      </table>
    </div>
    </div>

    <div class="spacer">
    </div>

  </div>
</div>

<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
