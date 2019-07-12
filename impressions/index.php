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
   "title"        => "Chemtogether 2019 - Impressions",
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
<div id="main" class="container">

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
    </div>


</div>

<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>