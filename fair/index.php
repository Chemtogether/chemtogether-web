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

$active_nav = 'fair';

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
            <span id="date-day1">6</span>
            <span class="date-bar"></span>
            <span id="date-day2">7</span>
          </div>
          <div class="date-container">
            <span id="date-month">Nov.</span>
            <span id="date-year">2018</span>
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
      <div class="text l-6 m-12 s-12 fair-introlinks">
        <a href="https://www.ethz.ch/de/campus/standorte-anreise/standorte-ZH/hoenggerberg.html">
          <i class="far fa-fw fa-map"></i>&nbsp;
          <span><?php echo($lang['content']['links_directions'][$eng]); ?></span>
        </a>
      </div>
      <!-- <div class="text l-4 m-12 s-12 fair-introlinks">
        <a href="/files/expoguide.pdf">
          <i class="far fa-fw fa-file-alt"></i>&nbsp;
          <span><?php echo($lang['content']['links_guide'][$eng]); ?></span>
        </a>
      </div> -->
      <div class="text l-6 m-12 s-12 fair-introlinks">
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

    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['schedule_talk2']['title'][$eng]); ?>
      </div>
      <table class="schedule">
        <tr>
          <td><i class="far fa-fw fa-comment"></i></td>
          <td>17:15</td>
          <td><?php echo($lang['content']['schedule_talk2']['event1'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td>18:30</td>
          <td><?php echo($lang['content']['schedule_talk2']['event2'][$eng]); ?></td>
        </tr>
      </table>
    </div>

    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['schedule_tuesday']['title'][$eng]); ?>
      </div>
      <table class="schedule">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>09:00</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event1'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-comment"></i></td>
          <td>09:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event2'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td>16:00</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event3'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>17:00</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event4'][$eng]); ?></td>
        </tr>
      </table>
    </div>

    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['schedule_wednesday']['title'][$eng]); ?>
      </div>
      <table class="schedule">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>09:00</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event1'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-comment"></i></td>
          <td>09:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event2'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td>16:00</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event3'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>17:00</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event4'][$eng]); ?></td>
        </tr>
      </table>
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

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['description'][$eng]); ?>
      <br><br>
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

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_2']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_2']['description'][$eng]); ?>
      <br><br>
      <table class="fa-table">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td><?php echo($lang['content']['programme_2']['time'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-map"></i></td>
          <td><?php echo($lang['content']['programme_2']['place'][$eng]); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="spacer">
  </div>

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_3']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_3']['description'][$eng]); ?>
      <br><br>
      <table class="fa-table">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td><?php echo($lang['content']['programme_3']['time'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-map"></i></td>
          <td><?php echo($lang['content']['programme_3']['place'][$eng]); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="spacer">
  </div>

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_4']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_4']['description'][$eng]); ?>
      <br><br>
      <table class="fa-table">
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td><?php echo($lang['content']['programme_4']['time'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-map"></i></td>
          <td><?php echo($lang['content']['programme_4']['place'][$eng]); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="spacer">
  </div>

  <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_5']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_5']['description'][$eng]); ?>
      <br>
      <br>
      <div class="programme_button_div">
        <a href="https://ethz.doodle.com/poll/tf8hfqcdppt76pti">
          <span><?php echo($lang['content']['programme_5']['button'][$eng]); ?></span>
        </a>
      </div>
      <br>
      <table class="fa-table">
        <tr>
          <td><i class="fas fa-fw fa-exclamation"></i></td>
          <td><?php echo($lang['content']['programme_5']['other'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td><?php echo($lang['content']['programme_5']['time'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-map"></i></td>
          <td><?php echo($lang['content']['programme_5']['place'][$eng]); ?></td>
        </tr>
      </table>
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
