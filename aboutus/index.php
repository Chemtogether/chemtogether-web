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

    <div class="spacer" id="team">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['team_subsection'][$eng]); ?>
      </span>
    </div>

    <!-- <div class="content flex">
      <div class="image-big l-12 m-12 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/team','jpg'); ?>></img>
        </div>
      </div>
    </div> -->

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_1','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_1']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_1']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_1']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_1']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_1']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_1']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_2','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_2']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_2']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_2']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_2']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_2']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_2']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_3','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_3']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_3']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_3']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_3']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_3']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_3']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_4','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_4']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_4']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_4']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_4']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_4']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_4']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_5','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_5']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_5']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_5']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_5']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_5']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_5']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_6','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_6']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_6']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_6']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_6']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_6']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_6']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_7','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_7']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_7']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_7']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_7']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_7']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_7']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_8','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_8']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_8']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_8']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_8']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_8']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_8']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_9','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_9']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_9']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_9']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_9']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_9']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_9']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_10','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_10']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_10']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_10']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_10']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_10']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_10']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_11','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_11']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_11']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_11']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_11']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_11']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_11']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_12','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_12']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_12']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_12']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_12']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_12']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_12']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_13','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_13']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_13']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_13']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_13']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_13']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_13']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="image-member l-4 m-6 s-12">
        <div>
          <img <?php set_source($awss3.'/img/team/member_14','jpg'); ?>></img>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['team_member_14']['name']); ?>
        </div>
        <span><?php echo($lang['content']['team_member_14']['task'][$eng]); ?></span>
        <br><br>
        <?php echo($lang['content']['team_member_14']['info'][$eng]); ?>
        <br><br>
        <?php obfuscate_mail($lang['content']['team_member_14']['mail_prefix'], '', '<i class="far fa-lg fa-fw fa-envelope"></i>'); ?>
        <?php if ($lang['content']['team_member_14']['linkedin'] != '') echo('<a href="'.$lang['content']['team_member_14']['linkedin'].'"><i class="fab fa-lg fa-fw fa-linkedin-in"></i></a>'); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer" id="alumni">
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

    <div class="spacer" id="organisation">
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

  </div>


</div>
<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
