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

$active_nav = 'exhibitors';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


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
          <span>1</span>
          <div class="bar"></div>
          <span><?php echo($lang['img']['1'][$eng]); ?></span>
        </div>
        <div class="image-container">
          <span>500</span>
          <div class="bar"></div>
          <span><?php echo($lang['img']['2'][$eng]); ?></span>
        </div>
        <div class="image-container">
          <span>4.5/5</span>
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
        <?php echo($lang['content']['contact_text'][$eng]); ?><br style="line-height:40px;" />
        <table>
          <tr>
            <td><i class="fa-fw far fa-envelope"></i></td>
            <td><?php obfuscate_mail('info', '', ''); ?></td>
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
        <table>
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="link"><?php echo($lang['content']['documents_broschure'][$eng]); ?></a></td>
          </tr>
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="link"><?php echo($lang['content']['documents_guide'][$eng]); ?></a></td>
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

    <div class="content flex-center">
      <div class="text l-4 m-6 s-12">
        <div class="packages-base">
          <span>C</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['packages_base']['name'][$eng]); ?>
        </div>
        <span class="packages-desc"><?php echo($lang['content']['packages_base']['desc'][$eng]); ?></span>
        <br><br>
        <span class="packages-desc">CHF 1500.- total</span>
      </div>
    </div>
    <div class="spacer s-d0 m-d1 l-d1">
    </div>
    <div class="content flex-center">
      <div class="text l-12 m-12 s-12">
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_base']['item1'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_base']['item2'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_base']['item3'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_base']['item4'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_base']['item5'][$eng]); ?></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer s-d0 m-d1 l-d1">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="text l-4 m-6 s-12">
        <div class="packages-silver">
          <span>Ag</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['packages_silver']['name'][$eng]); ?>
        </div>
        <span class="packages-desc"><?php echo($lang['content']['packages_silver']['desc'][$eng]); ?></span>
        <br><br>
        <span class="packages-desc">CHF 2500.- total</span>
      </div>
    </div>
    <div class="spacer s-d0 m-d1 l-d1">
    </div>
    <div class="content flex-center">
      <div class="text l-12 m-12 s-12">
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item1'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item2'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item3'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item4'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item5'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_silver']['item6'][$eng]); ?></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer s-d0 m-d1 l-d1">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="text l-4 m-6 s-12">
        <div class="packages-gold">
          <span>Au</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['packages_gold']['name'][$eng]); ?>
        </div>
        <span class="packages-desc"><?php echo($lang['content']['packages_gold']['desc'][$eng]); ?></span>
        <br><br>
        <span class="packages-desc">CHF 4000.- total</span>
      </div>
    </div>
    <div class="spacer s-d0 m-d1 l-d1">
    </div>
    <div class="content flex-center">
      <div class="text l-12 m-12 s-12">
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item1'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item2'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item3'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item4'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item5'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item6'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item7'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item8'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item9'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_gold']['item10'][$eng]); ?></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="spacer s-d0 m-d1 l-d1">
    </div>

    <div class="spacer">
    </div>

    <div class="content flex-center">
      <div class="text l-4 m-6 s-12">
        <div class="packages-platinum">
          <span>Pt</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          <?php echo($lang['content']['packages_platinum']['name'][$eng]); ?>
        </div>
        <span class="packages-desc"><?php echo($lang['content']['packages_platinum']['desc'][$eng]); ?></span>
        <br><br>
        <span class="packages-desc">CHF 5000.- total</span>
      </div>
    </div>
    <div class="spacer s-d0 m-d1 l-d1">
    </div>
    <div class="content flex-center">
      <div class="text l-12 m-12 s-12">
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_platinum']['item1'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_platinum']['item2'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_platinum']['item3'][$eng]); ?></td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td><?php echo($lang['content']['packages_platinum']['item4'][$eng]); ?></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="spacer">
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
        <?php echo($lang['content']['feedback_subsection'][$eng]); ?>
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        <?php echo($lang['content']['feedback_text'][$eng]); ?>
        <br><br>
        <table class="feedback">
          <tr>
            <td>4.5</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['1'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.8</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['2'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.6</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['3'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.5</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['4'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.6</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['5'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.3</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['6'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.3</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['7'][$eng]); ?></td>
          </tr>
          <tr>
            <td>4.5</td>
            <td>/</td>
            <td>5</td>
            <td><?php echo($lang['content']['feedback_entries']['8'][$eng]); ?></td>
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
