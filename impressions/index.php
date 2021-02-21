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
$active_nav = 'impressions';

$fb = array(
   "title"        => "Chemtogether 2021 - Impressions",
// "desc"         => "",
   "url"          => "https://www.chemtogether.ethz.ch/impressions/",
// "image_url"    => "",
// "image_width"  => "",
// "image_height" => ""
 );

?>

<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div class="companies-detail" id="main">

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

    <?php if($template['successstory_print_until'] > 0) { ?>
      <div class="spacer">
      </div>

      <div class="spacer">
      </div>

      <div class="section">
        <span class="section-slashes">
          <span>/</span><span>/</span>
        </span>
        <span class="section-text">
          <?php echo($lang['detail']['successstory']['section'][$eng]); ?>
        </span>
      </div>

      <?php for ($i=0; ($i < sizeof($template['successstory'])) && ($i < $template['successstory_print_until']); $i++) { ?>
        <div class="spacer">
        </div>

        <div class="anchor" id="i-<?php echo($i); ?>">
        </div>

        <div class="content flex-center">
          <div class="image-interviewee l-4 m-4 s-12">
            <div>
              <img <?php set_source($template['successstory'][$i]['img_url'], 'png'); ?>></img>
            </div>
          </div>
          
        <div class="text l-8 m-8 s-12">
          <div class="interview-info">
            <span><?php echo($template['successstory'][$i]['name']); ?></span><br>
              <div><?php echo($template['successstory'][$i]['introduction']); ?></div>
            </div>
          </div>
        </div>

            <div class="content flex" id="interview-<?php echo($i); ?>">
              <?php for ($j=0; $j < sizeof($template['successstory'][$i]['successstory']); $j++) { ?>
                <div class="text l-12 m-12 s-12">
                  <div><?php echo($template['successstory'][$i]['successstory'][$j]['question']); ?></div>
                  <div><?php echo($template['successstory'][$i]['successstory'][$j]['answer']); ?></div>
                </div>
              <?php } ?>
            </div>

            <div class="content flex">
              <div class="text l-12 m-12 s-12">
                <div class="interview-separator spoiler-button" data-targetid="interview-<?php echo($i); ?>">
                  <span><i class="rotate fas fa-chevron-down"></i></span>
                  <span><?php echo($lang['detail']['successstory']['read_more'][$eng]); ?></span>
                </div>
              </div>
            </div>

            <div class="spacer">
            </div>
          <?php } ?>

        <?php } ?>

        <div class="spacer">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['gallery_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/01.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/01.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/02.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/02.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/03.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/03.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/04.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/04.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/05.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/05.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/06.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/06.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/07.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/07.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/08.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/08.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/09.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/09.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/10.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/10.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/11.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/11.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/12.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/12.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/13.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/13.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/14.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/14.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/15.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/15.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/16.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/16.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/17.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/17.jpg") ?> style="width:100%"></a>
      </div>
      <div class="text l-4 m-6 s-12">
        <a href=<?php echo("$awss3/img/impressions/reduced_size/18.jpg") ?> data-lightbox="impressions" ><img src=<?php echo("$awss3/img/impressions/reduced_size/18.jpg") ?> style="width:100%"></a>
      </div>
    </div>
  </div>
</div>

<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>