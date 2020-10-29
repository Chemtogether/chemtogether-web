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
  "url"          => "https://www.chemtogether.ethz.ch/panel/",
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
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['guest_1'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_2'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_3'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_4'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_5'][$eng]); ?>
      <br><br>
      <div class="programme_button_div">
        <a href="https://ethz.zoom.us/j/95494096173">
          <span><?php echo($lang['content']['programme_1']['button_1'][$eng]); ?></span>
        </a>
      </div>
      <br>
      <div class="programme_button_div">
        <a href="https://ethz.zoom.us/j/98442575856">
          <span><?php echo($lang['content']['programme_1']['button_2'][$eng]); ?></span>
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

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['main_text_1'][$eng]); ?> <br>
        <?php echo($lang['content']['main_text_2'][$eng]); ?> <br>
        <?php echo($lang['content']['main_text_3'][$eng]); ?> <br>
        <?php echo($lang['content']['main_text_4'][$eng]); ?> <br>
        <?php echo($lang['content']['main_text_5'][$eng]); ?> <br>
        <?php echo($lang['content']['main_text_6'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

  </div>
</div>

<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
