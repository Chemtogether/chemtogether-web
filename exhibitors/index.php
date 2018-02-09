<?php

// provides small functions
include('php/general_functions.php');

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
        <?php echo($lang['general']['title'][$eng]); ?>
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

    <div class="image">
      <div class="patterned">
        <div class="image-container">
          <span>1</span>
          <div class="bar"></div>
          <span>Fair day</span>
        </div>
        <div class="image-container">
          <span>500</span>
          <div class="bar"></div>
          <span>Daily visitors</span>
        </div>
        <div class="image-container">
          <span>5/6</span>
          <div class="bar"></div>
          <span>Ø Rating</span>
        </div>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        Please do not hesitate to contact us:<br><br>
        <table>
          <tr>
            <td><i class="fa-fw far fa-envelope"></i></td>
            <td><a href="mailto:info@chemtogether.ethz.ch">info@chemtogether.ethz.ch</a></td>
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
        Additional documents:<br><br>
        <table>
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="link">Broschure for companies (2018)</a></td>
          </tr>
          <tr>
            <td><i class="fa-fw far fa-file-alt"></i></td>
            <td><a href="link">Expo Guide (2017)</a></td>
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
        Partner Options
      </span>
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
