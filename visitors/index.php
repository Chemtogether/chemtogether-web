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
  "desc"         => "This year's Chemtogether will take place on the 3rd and 4th November 2020! Over two days, a total of eighteen companies from the chemical industry will be present and offer information on careers in their field.",
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

    <div class="spacer">
    </div>

    <div class="image">
      <div class="patterned">
        <div id="fair-image">
          <div class="date-container">
            <span id="date-day1">3</span>
            <span class="date-bar"></span>
            <span id="date-day2">4</span>
          </div>
          <div class="date-container">
            <span id="date-month">Nov.</span>
            <span id="date-year">2020</span>
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
          <td>18:00</td>
          <td><?php echo($lang['content']['schedule_talk1']['event1'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td></td>
          <td><?php echo($lang['content']['schedule_talk1']['event2'][$eng]); ?></td>
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
          <td>18:00</td>
          <td><?php echo($lang['content']['schedule_talk2']['event1'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td></td>
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
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>10:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event3'][$eng]); ?></td>
        </tr>
        <tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>11:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event4'][$eng]); ?></td>
        </tr>
        <tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>12:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event5'][$eng]); ?></td>
        </tr>
        <tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>13:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event6'][$eng]); ?></td>
        </tr>
        <tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>14:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event7'][$eng]); ?></td>
        </tr>
        <tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td>16:30</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event8'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>17:00</td>
          <td><?php echo($lang['content']['schedule_tuesday']['event9'][$eng]); ?></td>
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
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>10:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event3'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>11:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event4'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>13:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event5'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-info"></i></td>
          <td>15:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event6'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="fas fa-fw fa-utensils"></i></td>
          <td>16:30</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event7'][$eng]); ?></td>
        </tr>
        <tr>
          <td><i class="far fa-fw fa-clock"></i></td>
          <td>17:00</td>
          <td><?php echo($lang['content']['schedule_wednesday']['event8'][$eng]); ?></td>
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

    <div class="content flex">
      <div class="text subhead l-12 m-12 s-12">
        <?php echo($lang['content']['day1'][$eng]); ?>
      </div>
    </div>

    <div class="companies">
        <div class="content flex">
          <div class="text l-12 m-12 s-12">
            <?php if(sizeof($data['day1'])==0) echo($lang['content']['no-companies-notice'][$eng]); ?>
            <table class="overview">
              <?php for ($i=0; $i < sizeof($data['day1']); $i++) { ?>
              <tr class='clickable-tr' data-url='<?php echo($data['day1'][$i]['link_url']); ?>'>
                <td class="table-logo"><img <?php echo($data['day1'][$i]['logo_url']); ?>></img></td>
                <td class="table-name"><?php echo($data['day1'][$i]['name']); ?></td>
                <td class="table-package">
                  <?php
                    if($data['day1'][$i]['package']!='base') {
                      echo('<div class="');
                      if($data['day1'][$i]['package']=='silver') echo('table-package-silver"><span>Ag</span>');
                      else if($data['day1'][$i]['package']=='gold') echo('table-package-gold"><span>Au</span>');
                      else if($data['day1'][$i]['package']=='platinum') echo('table-package-platinum"><span>Pt</span>');
                      echo('</div>');
                    }
                  ?>
                </td>
                <td class="table-more"><a href='<?php echo($data['day1'][$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
              </tr>
            <?php } ?>
            </table>
          </div>
        </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text subhead l-12 m-12 s-12">
        <?php echo($lang['content']['day2'][$eng]); ?>
      </div>
    </div>

    <div class="companies">
        <div class="content flex">
          <div class="text l-12 m-12 s-12">
            <table class="overview">
              <?php if(sizeof($data['day2'])==0) echo($lang['content']['no-companies-notice'][$eng]); ?>
              <?php for ($i=0; $i < sizeof($data['day2']); $i++) { ?>
              <tr class='clickable-tr' data-url='<?php echo($data['day2'][$i]['link_url']); ?>'>
                <td class="table-logo"><img <?php echo($data['day2'][$i]['logo_url']); ?>></img></td>
                <td class="table-name"><?php echo($data['day2'][$i]['name']); ?></td>
                <td class="table-package">
                  <?php
                    if($data['day2'][$i]['package']!='base') {
                      echo('<div class="');
                      if($data['day2'][$i]['package']=='silver') echo('table-package-silver"><span>Ag</span>');
                      else if($data['day2'][$i]['package']=='gold') echo('table-package-gold"><span>Au</span>');
                      else if($data['day2'][$i]['package']=='platinum') echo('table-package-platinum"><span>Pt</span>');
                      echo('</div>');
                    }
                  ?>
                  </td>
                <td class="table-more"><a href='<?php echo($data['day2'][$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
              </tr>
            <?php } ?>
            </table>
          </div>
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

    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_2']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_2']['description'][$eng]); ?>
      <br><br>
      <?php echo($lang['content']['programme_2']['guest_1'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_2']['guest_2'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_2']['guest_3'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_2']['guest_4'][$eng]); ?>
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


    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_3']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_3']['description'][$eng]); ?>
      <br>
      <br>
      <div class="programme_button_div">
        <a href="https://ethz.doodle.com/poll/8f48iequk27b6pkv">
          <span><?php echo($lang['content']['programme_3']['button'][$eng]); ?></span>
        </a>
      </div>
      <br>
      <table class="fa-table">
        <tr>
          <td><i class="fas fa-fw fa-exclamation"></i></td>
          <td><?php echo($lang['content']['programme_3']['other'][$eng]); ?></td>
        </tr>
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

    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_4']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_4']['description'][$eng]); ?>
      <br>
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

  </div>
</div>

<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
