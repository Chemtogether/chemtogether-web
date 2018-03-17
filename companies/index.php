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

$active_nav = 'companies';

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
<div class="companies" id="main">

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

    <div class="spacer" id="day1">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['day1'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php if(sizeof($lang['day1'])==0) echo($lang['content']['no-companies-notice'][$eng]); ?>
        <table class="overview">
          <?php for ($i=0; $i < sizeof($lang['day1']); $i++) { ?>
          <tr class='clickable-tr' data-url='<?php echo($lang['day1'][$i]['link_url']); ?>'>
            <td><img <?php set_source($lang['day1'][$i]['logo_url'],'png'); ?>></img></td>
            <td><?php echo($lang['day1'][$i]['name']); ?></td>
            <td>
              <?php
                if($lang['day1'][$i]['package']!='base') {
                  echo('<div class="');
                  if($lang['day1'][$i]['package']=='silver') echo('table-package-silver"><span>Ag</span>');
                  else if($lang['day1'][$i]['package']=='gold') echo('table-package-gold"><span>Au</span>');
                  else if($lang['day1'][$i]['package']=='platinum') echo('table-package-platinum"><span>Pt</span>');
                  echo('</div>');
                }
              ?>
            </td>
            <td><a href='<?php echo($lang['day1'][$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
          </tr>
        <?php } ?>
        </table>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer" id="day2">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['day2'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <table class="overview">
          <?php if(sizeof($lang['day2'])==0) echo($lang['content']['no-companies-notice'][$eng]); ?>
          <?php for ($i=0; $i < sizeof($lang['day2']); $i++) { ?>
          <tr class='clickable-tr' data-url='<?php echo($lang['day2'][$i]['link_url']); ?>'>
            <td><img <?php set_source($lang['day2'][$i]['logo_url'],'png'); ?>></img></td>
            <td><?php echo($lang['day2'][$i]['name']); ?></td>
            <td>
              <?php
                if($lang['day2'][$i]['package']!='base') {
                  echo('<div class="');
                  if($lang['day2'][$i]['package']=='silver') echo('table-package-silver"><span>Ag</span>');
                  else if($lang['day2'][$i]['package']=='gold') echo('table-package-gold"><span>Au</span>');
                  else if($lang['day2'][$i]['package']=='platinum') echo('table-package-platinum"><span>Pt</span>');
                  echo('</div>');
                }
              ?>
            </td>
            <td><a href='<?php echo($lang['day2'][$i]['link_url']); ?>'><span><i class="fas fa-chevron-right"></i></span> <span>more</span> <span><i class="fas fa-chevron-right"></i></span></a></td>
          </tr>
        <?php } ?>
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
