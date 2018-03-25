<?php

// provides small functions
include('php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('./data.php');
include('./lang.php');


// GENERAL







// Selects from all archive entries those that have a key entry for $year in $archive[*]['attendences'] and then sorts the array to be platinum -> gold -> silver -> base
function prepare_year_archive($array, $year){

  // indexing of new array
  $index = 0;

  // first select the entries that occured in $year and copy them completely to $newarray
  $newarray = array();
  if (is_array($array) && sizeof($array)>0) {
    foreach (array_keys($array) as $key) {
      if (array_key_exists($year, $array[$key]['attendences'])) $newarray[$index++] = $array[$key];
    }
  }

  // indexing of final array
  $index = 0;

  // select from $newarray those entries according to package priority and append to $finalarray
  $finalarray = array();
  if (is_array($newarray) && sizeof($newarray)>0) {
    foreach (array('platinum','gold','silver','base') as $package) {
      foreach (array_keys($newarray) as $key) {
        if ($newarray[$key]['attendences'][$year] == $package) $finalarray[$index++] = $newarray[$key];
      }
    }
  }

  // return newly sorted array
  return $finalarray;
}




$active_nav = 'archive';

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
<div class="archive" id="main">

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
        <?php echo($lang['content']['intro_text'][$eng]); ?>
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
        <?php echo($lang['content']['alphanumeric'][$eng]); ?>
      </span>
    </div>

    <div class="content flex" id="alphabetic">
      <div class="text l-12 m-12 s-12">
        <?php if(sizeof($archive)==0) echo($lang['content']['no-companies-notice'][$eng]); ?>
        <table class="overview alphabetic">
          <?php for ($i=0; $i < sizeof($archive); $i++) { ?>
            <tr class='clickable-tr' data-url='<?php echo($archive[$i]['link_url']); ?>'>
              <td class="table-logo"><img <?php echo($archive[$i]['logo_url']); ?>></img></td>
              <td class="table-name"><?php echo($archive[$i]['name']); ?></td>
              <td class="table-info"><?php if($archive[$i]['info']) echo('<i class="fas fa-fw fa-info">'); ?></td>
                <td class="table-interview"><?php if($archive[$i]['interviews']) echo('<i class="fas fa-fw fa-user"></i>'); ?></td>
                <td class="table-more"><a href='<?php echo($archive[$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="spacer">
      </div>

      <div class="content flex">
        <div class="text l-12 m-12 s-12">
          <div class="table-separator spoiler-button" data-targetid="alphabetic">
            <span><i class="rotate fas fa-chevron-down"></i></span>
            <span><?php echo($lang['content']['expand'][$eng]); ?></span>
          </div>
        </div>
      </div>

      <div class="spacer">
      </div>

      <div class="spacer">
      </div>

      <?php
      // FILL OUT ONLY HERE
      // EVERYTHING ELSE IS DONE AUTOMATICALLY
      $years = array(2017, 2016, 2015, 2014, 2013);

      foreach ($years as $year) { ?>
        <div class="spacer">
        </div>

        <div class="spacer">
        </div>

        <div class="section">
          <span class="section-slashes">
            <span>/</span><span>/</span>
          </span>
          <span class="section-text">
            Chemtogether <?php echo($year); ?>
          </span>
        </div>

        <div class="content flex" id="year-<?php echo($year); ?>">
          <div class="text l-12 m-12 s-12">
            <?php
            $temp_archive = array();
            $temp_archive = prepare_year_archive($archive, $year);
            if(sizeof($temp_archive)==0) echo($lang['content']['no-companies-notice'][$eng]);
            ?>
            <table class="overview yearly">
              <?php for ($i=0; $i < sizeof($temp_archive); $i++) { ?>
                <tr class='clickable-tr' data-url='<?php echo($temp_archive[$i]['link_url']); ?>'>
                  <td class="table-logo"><img <?php echo($temp_archive[$i]['logo_url']); ?>></img></td>
                  <td class="table-name"><?php echo($temp_archive[$i]['name']); ?></td>
                  <td class="table-package">
                    <?php
                    if($temp_archive[$i]['attendences'][$year]!='base') {
                      echo('<div class="');
                      if($temp_archive[$i]['attendences'][$year]=='silver') echo('table-package-silver"><span>Ag</span>');
                      else if($temp_archive[$i]['attendences'][$year]=='gold') echo('table-package-gold"><span>Au</span>');
                      else if($temp_archive[$i]['attendences'][$year]=='platinum') echo('table-package-platinum"><span>Pt</span>');
                      echo('</div>');
                    }
                    ?>
                  </td>
                  <td class="table-more"><a href='<?php echo($temp_archive[$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>

        <div class="spacer">
        </div>

        <div class="content flex">
          <div class="text l-12 m-12 s-12">
            <div class="table-separator spoiler-button" data-targetid="year-<?php echo($year); ?>">
              <span><i class="rotate fas fa-chevron-down"></i></span>
              <span><?php echo($lang['content']['expand'][$eng]); ?></span>
            </div>
          </div>
        </div>

        <div class="spacer">
        </div>

        <div class="spacer">
        </div>

      <?php } ?>

      <div class="spacer">
      </div>

      <div class="spacer">
      </div>

    </div>


  </div>
  <!-- END CONTENT  -->

  <?php include('includes/footer.php');  ?>
  <?php include('includes/foot.php');  ?>
