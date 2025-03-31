<?php

// provides small functions
include('../php/general.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('../php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('../includes/language.php');

// include all translations from local file
include('./lang.php');


// GENERAL

$active_nav = 'exhibitors';

// $fb = array(
//   "title"        => "",
//   "desc"         => "",
//   "url"          => $awss3."/opengraph/",
//   "image_url"    => "",
//   "image_width"  => "",
//   "image_height" => ""
// );

?>
<?php include('../includes/head.php');  ?>
<?php include('../includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main" class="exhibitors">

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
        <?php echo($lang['content']['intro_text1'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="image">
      <div class="patterned">
        <div class="image-container">
          <span>2</span>
          <div class="bar"></div>
          <span><?php echo($lang['img']['1'][$eng]); ?></span>
        </div>
        <div class="image-container">
          <span>500</span>
          <div class="bar"></div>
          <span><?php echo($lang['img']['2'][$eng]); ?></span>
        </div>
        <div class="image-container">
          <span>4.44/5</span>
          <div class="bar"></div>
          <span><?php echo($lang['img']['3'][$eng]); ?></span>
        </div>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['intro_text2'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
    <div class="text l-12 m-12 s-12">
    <br>
      <br>
      <!-- <div class="programme_button_div">
        <a href="<?php echo($awss3); ?>/files/brochure_2023.pdf">
          <span><i class="fas fa-file-signature"></i>&nbsp;<?php echo($lang['content']['button_registration'][$eng]); ?></span>
        </a>
      </div> -->
      <br>
    </div>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['contact_text'][$eng]); ?><br style="line-height:40px;" />
        <table class="fa-table">
          <tr>
            <td><i class="fa-fw far fa-envelope"></i></td>
            <td><?php obfuscate_mail('contact', '', ''); ?></td>
          </tr>
          <tr>
            <td><i class="fa-fw far fa-building"></i></td>
            <td>VCS, Postfach 84, Wolfgang-Pauli-Str. 9, 8093 Zürich</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['documents_text'][$eng]); ?><br style="line-height:40px;" />
        <table class="fa-table">
          <!-- <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="<?php echo($awss3); ?>/files/brochure_2023.pdf"><?php echo($lang['content']['documents_broschure'][$eng]); ?></a></td>
          </tr> -->
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="<?php echo($awss3); ?>/files/2023expoguide.pdf"><?php echo($lang['content']['documents_guide'][$eng]); ?></a></td>
          </tr>
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="<?php echo($awss3); ?>/files/Terms_and_Conditions.pdf"><?php echo($lang['content']['documents_termsandconditions'][$eng]); ?></a></td>
          </tr>
        </table>
      </div>
    </div>

 
    <div class="spacer">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['packages_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['packages_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <table id="packages-table">
          <tr>
            <td></td>
            <td>C</td>
            <td>Ag</td>
            <td>Au</td>
          </tr>
          <?php for ($i=1; $i <= sizeof($lang['packages_table']) ; $i++) { ?>
            <tr>
              <td><?php echo($lang['packages_table'][$i]['perk'][$eng]); ?></td>
              <td><?php echo($lang['packages_table'][$i]['base'][$eng]); ?></td>
              <td><?php echo($lang['packages_table'][$i]['silver'][$eng]); ?></td>
              <td><?php echo($lang['packages_table'][$i]['gold'][$eng]); ?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['packages_info'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="packages-base gallery-button gallery-button-active info-packages-button" data-targetid="info-base" data-familyclass="info-packages" data-buttonclass="info-packages-button">
        <span>C</span>
      </div>
      <div class="packages-silver gallery-button info-packages-button" data-targetid="info-silver" data-familyclass="info-packages" data-buttonclass="info-packages-button">
        <span>Ag</span>
      </div>
      <div class="packages-gold gallery-button info-packages-button" data-targetid="info-gold" data-familyclass="info-packages" data-buttonclass="info-packages-button">
        <span>Au</span>
      </div>

      <div class="info-packages l-12 m-12 s-12 initially-gallery-opened" id="info-base">
        <div class="box">
          <div class="text bg">
            <span><?php echo($lang['packages_info']['base']['name'][$eng]); ?></span>
            <span class="packages-desc"><?php echo($lang['packages_info']['base']['desc'][$eng]); ?></span>
          </div>
          <div class="text fg">
            <table class="packages">
              <?php for ($i=0; $i < sizeof($lang['packages_info']['base']['perks']); $i++) { ?>
                <tr>
                  <td><i class="fas fa-angle-right"></i></td>
                  <td><?php echo($lang['packages_info']['base']['perks'][$i][$eng]); ?></td>
                </tr>
              <?php } ?>
            </table>
            <br>
            <td><?php echo($lang['packages_info']['base']['price'][$eng]); ?></td>
          </div>
        </div>
      </div>
      <div class="info-packages l-12 m-12 s-12" id="info-silver">
        <div class="box">
          <div class="text bg">
            <span><?php echo($lang['packages_info']['silver']['name'][$eng]); ?></span>
            <span class="packages-desc"><?php echo($lang['packages_info']['silver']['desc'][$eng]); ?></span>
          </div>
          <div class="text fg">
            <table class="packages">
              <?php for ($i=0; $i < sizeof($lang['packages_info']['silver']['perks']); $i++) { ?>
                <tr>
                  <td><i class="fas fa-angle-right"></i></td>
                  <td><?php echo($lang['packages_info']['silver']['perks'][$i][$eng]); ?></td>
                </tr>
              <?php } ?>
            </table>
            <br>
            <td><?php echo($lang['packages_info']['silver']['price'][$eng]); ?></td>
          </div>
        </div>
      </div>
      <div class="info-packages l-12 m-12 s-12" id="info-gold">
        <div class="box">
          <div class="text bg">
            <span><?php echo($lang['packages_info']['gold']['name'][$eng]); ?></span>
            <span class="packages-desc"><?php echo($lang['packages_info']['gold']['desc'][$eng]); ?></span>
          </div>
          <div class="text fg">
            <table class="packages">
              <?php for ($i=0; $i < sizeof($lang['packages_info']['gold']['perks']); $i++) { ?>
                <tr>
                  <td><i class="fas fa-angle-right"></i></td>
                  <td><?php echo($lang['packages_info']['gold']['perks'][$i][$eng]); ?></td>
                </tr>
              <?php } ?>
            </table>
            <br>
            <td><?php echo($lang['packages_info']['gold']['price'][$eng]); ?></td>
          </div>
        </div>
      </div>
      
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer">
    </div>

    <div class="spacer l-d1 m-d1 s-d0">
    </div>
    
    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        <?php echo($lang['content']['feedback_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['feedback_intro'][$eng]); ?>
      </div>
    </div>

    <div class="content flex">
      <div class="image-big l-12 m-12 s-12">
        <div>
          <img <?php set_source($awss3.'/img/companies_2024','png'); ?>></img>
        </div>
      </div>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['feedback_text'][$eng]); ?>
        <br><br>
        <table class="feedback">
          <tr>
            <td>4.29</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['1'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.50</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['2'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.58</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['3'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.50</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['4'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.53</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['5'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.47</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['6'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.72</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['7'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.74</td> <!-- ?gibt es das noch -->
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['8'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.51</td><!-- ?gibt es das noch -->
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['9'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.37</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['10'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.50</td><!-- ?gibt es das noch -->
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['11'][$eng]); ?></td>
          </tr>
          <tr>
            <td>3.88</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['12'][$eng]); ?></td>
          </tr>
          <td>4.56</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['13'][$eng]); ?></td>
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

<!-- END CONTENT  -->

<?php include('../includes/footer.php');  ?>
<?php include('../includes/foot.php');  ?>
