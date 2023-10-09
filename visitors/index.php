<?php

// provides small functions
include('../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../php/language_cookie.php');

// creates $lang array and provides translation text for common elements (navigation and footer)
include('../includes/language.php');

// include all translations from local file
include('./lang.php');
include('../companies/data.php');


// GENERAL
$active_nav = 'visitors';

$fb = array(
  "title"        => "Chemtogether 2023",
  "desc"         => "This year's Chemtogether will take place on the 7th and 8th November 2023! Over two days, a total of eighteen companies from the chemical industry will be present and offer information on careers in their field.",  "url"          => "https://www.chemtogether.ethz.ch/visitors/",
  "image_url"    => $awss3."/opengraph/home_20180315.jpg",
  "image_width"  => "1200",
  "image_height" => "627"
);

?>

<?php include('../includes/head.php');  ?>
<?php include('../includes/nav.php');  ?>


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
        <a href="<?php echo($awss3."/files/2022expoguide.pdf"); ?>">
          <i class="far fa-fw fa-file-alt"></i>&nbsp;
          <span><?php echo($lang['content']['links_guide'][$eng]); ?></span>
        </a>
      </div>
    </div>

  <div class="spacer">
  </div>

  <div class="section">
        <span class="section-slashes">
          <span>/</span><span>/</span>
        </span>
        <span class="section-text">
          <?php echo($lang['content']['howto_subsection'][$eng]); ?>
        </span>
    </div>
  
    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['howto_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
      <div class="text l-6 m-12 s-12 fair-introlinks">
        <a href="<?php echo($awss3."/files/howtocareerfair.pdf"); ?>">
          <i class="far fa-fw fa-file-alt"></i>&nbsp;
          <span><?php echo($lang['content']['links_howto'][$eng]); ?></span>
        </a>
      </div>
    </div>

  <div class="spacer">
  </div>

  <div class="anchor" id="schedule">
  </div>

  <!-- <div class="section">
    <span class="section-slashes">
      <span>/</span><span>/</span>
    </span>
    <span class="section-text">
      <?php echo($lang['content']['schedule_subsection'][$eng]); ?>
    </span>
  </div> -->
<!-- 
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
        <td>17:00 - 20:00</td>
        <td><?php echo($lang['content']['schedule_talk1']['event1'][$eng]); ?></td>
      </tr>
    </table>
  </div>
  </div> -->

  <!-- <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <?php echo($lang['content']['collaboration'][$eng]); ?>
  </div>
  <div class="text l-12 m-12 s-12">
    <div class="subsection">
      <?php echo($lang['content']['schedule_talk2']['title'][$eng]); ?>
    </div>
    <table class="schedule">
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event1'][$eng]); ?></td>
      </tr>
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event2'][$eng]); ?></td>
      </tr>
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event3'][$eng]); ?></td>
      </tr>
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event4'][$eng]); ?></td>
      </tr>
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event5'][$eng]); ?></td>
      </tr>
      <tr>
        <td><i class="fa fa-play-circle"></i></td>
        <td></td>
        <td><?php echo($lang['content']['schedule_talk2']['event6'][$eng]); ?></td>
      </tr>
    </table>
  </div>
  </div> -->

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
          <?php echo($lang['content']['intro-text'][$eng]); ?>
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
            <?php if(sizeof($data['day1'])==0) echo($lang['content']['preliminary-one'][$eng]); ?>
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
              <?php if(sizeof($data['day2'])==0) echo($lang['content']['preliminary-two'][$eng]); ?>
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

   <!-- This is new -->

   <div class="content flex">
   <div class="text l-12 m-12 s-12">
        <div class="subsection">
        <?php echo($lang['content']['programme_1_preview']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1_preview']['main_text'][$eng]); ?>
      <!--
      <?php echo($lang['content']['programme_1_preview']['coming_soon'][$eng]); ?>

      -->
    </div>
    </div> 

    <div class="spacer">
    </div>  
    
    <div class="spacer">
    </div>  
    
     <!-- This is new -->
    
    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['description'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_1']['guest_1'][$eng]); ?> <br>
      <!--<?php echo($lang['content']['programme_1']['guest_2'][$eng]); ?> <br> -->
      <!--<?php echo($lang['content']['programme_1']['guest_3'][$eng]); ?> <br> -->
      <!-- <?php echo($lang['content']['programme_1']['guest_4'][$eng]); ?> <br> -->
      <!-- <div class="programme_button_div">
        <a href="https://www.chemtogether.ethz.ch/dsmlecture/">
          <span><?php echo($lang['content']['programme_1']['button'][$eng]); ?></span>
        </a>
      </div> 
    -->
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
    <div class="content flex">
      <div class="text subhead l-12 m-12 s-12">
        <?php echo($lang['content']['speaker'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['cv_header'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['cv_guest_1'][$eng]); ?> <br><br>
      <!-- <?php echo($lang['content']['programme_1']['cv_guest_2'][$eng]); ?> <br><br>
      <?php echo($lang['content']['programme_1']['cv_guest_3'][$eng]); ?> <br><br> -->
      <br>
      </div>
    </div>

    <div class="spacer">
    </div> 

    <div class="content flex">
   <div class="text l-12 m-12 s-12">
        <div class="subsection">
        <?php echo($lang['content']['programme_2_preview']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_2_preview']['main_text'][$eng]); ?>
      <!--
      <?php echo($lang['content']['programme_2_preview']['coming_soon'][$eng]); ?>
      -->
    </div>
    </div> 

    <div class="spacer">
    </div>  
    
    <div class="spacer">
    </div>  
    
    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_2']['title'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_2']['description'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_2']['guest_1'][$eng]); ?> <br>
      <?php echo($lang['content']['programme_2']['guest_2'][$eng]); ?> <br>
      <!--<?php echo($lang['content']['programme_2']['guest_3'][$eng]); ?> <br> -->
      <!-- <?php echo($lang['content']['programme_2']['guest_4'][$eng]); ?> <br> -->
      <!-- <div class="programme_button_div">
        <a href="https://www.chemtogether.ethz.ch/dsmlecture/">
          <span><?php echo($lang['content']['programme_2']['button'][$eng]); ?></span>
        </a>
      </div> 
    -->
      <br>
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
      <div class="text subhead l-12 m-12 s-12">
        <?php echo($lang['content']['speaker'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_2']['cv_header'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_2']['cv_guest_1'][$eng]); ?> <br><br>
       <?php echo($lang['content']['programme_2']['cv_guest_2'][$eng]); ?> <br><br>
      <!--<?php echo($lang['content']['programme_2']['cv_guest_3'][$eng]); ?> <br><br> -->
      <br>
      </div>
    </div>

    <!-- <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['speaker'][$eng]); ?>
      </span>
    </div>
    
    <div class="content flex">
    <div class="text l-12 m-12 s-12">
      <div class="subsection">
        <?php echo($lang['content']['programme_1']['cv_header'][$eng]); ?>
      </div>
      <?php echo($lang['content']['programme_1']['cv_guest_1'][$eng]); ?> <br><br>
      <?php echo($lang['content']['programme_1']['cv_guest_2'][$eng]); ?> <br><br>
      <?php echo($lang['content']['programme_1']['cv_guest_3'][$eng]); ?> <br><br>
      <br>

    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    <div class="spacer">
    </div>
    </div> -->

  </div>
</div>

<!-- END CONTENT  -->

<?php include('../includes/footer.php');  ?>
<?php include('../includes/foot.php');  ?>
