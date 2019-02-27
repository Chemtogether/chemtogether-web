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

$active_nav = 'aboutus';

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
<div id="main" class="aboutus">

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

    <div class="anchor" id="team">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['team_subsection'][$eng]); ?>
      </span>
    </div>


    <div class="spacer">
    </div>


    <?php for ($member_id=1; $member_id <= sizeof($lang['team']); $member_id++) { ?>

      <div class="content flex-center">
        <div class="image-member l-4 m-6 s-12">
          <div>
            <img <?php set_source($awss3.'/img/team/user_default','jpg'); ?>></img>
          </div>
        </div>
        <div class="text l-8 m-6 s-12">
          <div class="subsection">
            <?php echo($lang['team'][$member_id]['name']); ?>
          </div>
          <span><?php echo($lang['team'][$member_id]['task'][$eng]); ?></span>
          <br><br>
          <?php echo($lang['team'][$member_id]['info'][$eng]); ?>
          <br><br>
          <?php obfuscate_mail($lang['team'][$member_id]['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
          <?php if ($lang['team'][$member_id]['linkedin'] != '') echo('<a href="'.$lang['team'][$member_id]['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
        </div>
      </div>

      <div class="spacer">
      </div>

      <div class="spacer">
      </div>
    <?php } ?>



    <div class="spacer">
    </div>

    <div class="anchor" id="alumni">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['alumni_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['alumni_text'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
     <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2018
        </div>
        <?php echo($lang['content']['alumni_member_2018']); ?>
      </div>

      <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2017
        </div>
        <?php echo($lang['content']['alumni_member_2017']); ?>
      </div>

      <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2016
        </div>
        <?php echo($lang['content']['alumni_member_2016']); ?>
      </div>

      <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2015
        </div>
        <?php echo($lang['content']['alumni_member_2015']); ?>
      </div>

      <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2014
        </div>
        <?php echo($lang['content']['alumni_member_2014']); ?>
      </div>

      <div class="text l-6 m-12 s-12">
        <div class="subsection">
          Chemtogether 2013
        </div>
        <?php echo($lang['content']['alumni_member_2013']); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="anchor" id="organisation">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['organisation_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['organisation_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/vcs','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['vcs'][$eng]); ?>
        </div>
        <a href="https://www.vcs.ethz.ch/">www.vcs.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/vac','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['vac'][$eng]); ?>
        </div>
        <a href="https://www.vac.ethz.ch/">www.vac.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/vseth','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['vseth'][$eng]); ?>
        </div>
        <a href="http://www.vseth.ethz.ch/">www.vseth.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/aveth','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['aveth'][$eng]); ?>
        </div>
        <a href="http://www.aveth.ethz.ch/">www.aveth.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/dchab','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['chab'][$eng]); ?>
        </div>
        <a href="https://www.chab.ethz.ch/">www.chab.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/organisation/eth','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['organisation']['eth'][$eng]); ?>
        </div>
        <a href="https://www.ethz.ch/">www.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="anchor" id="partners">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['partners_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['partners_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/partners/careercenter','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['partners']['careercenter'][$eng]); ?>
        </div>
        <a href="https://www.ethz.ch/en/industry-and-society/career-center.html">www.ethz.ch</a>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="image-organisation l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/partners/cvpics','png'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['partners']['cvpics'][$eng]); ?>
        </div>
        <a href="https://www.cvpics.ch/">www.cvpics.ch</a>
      </div>
    </div>

    <div class="spacer">
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
