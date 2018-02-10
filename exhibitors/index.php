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
          <span>Fair day</span>
        </div>
        <div class="image-container">
          <span>500</span>
          <div class="bar"></div>
          <span>Daily visitors</span>
        </div>
        <div class="image-container">
          <span>4.5/5</span>
          <div class="bar"></div>
          <span>Ø Rating</span>
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
        Please do not hesitate to contact us:<br style="line-height:40px;" />
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
        Additional documents:<br style="line-height:40px;" />
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

    <div class="content flex">
      <div class="text l-12 m-12 s-12">
        Here is some informational text
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-4 m-6 s-12">
        <div class="packages-base">
          <span>C</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          Base Package
        </div>
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 1</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 2</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 3</td>
          </tr>
        </table>
        <br>
        <span>CHF 1234.- total</span>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-4 m-6 s-12">
        <div class="packages-silver">
          <span>Ag</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          Silver Package
        </div>
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 1</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 2</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 3</td>
          </tr>
        </table>
        <br>
        <span>CHF 1234.- total</span>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-4 m-6 s-12">
        <div class="packages-gold">
          <span>Au</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          Gold Package
        </div>
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 1</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 2</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 3</td>
          </tr>
        </table>
        <br>
        <span>CHF 1234.- total</span>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-4 m-6 s-12">
        <div class="packages-platinum">
          <span>Pt</span>
        </div>
      </div>
      <div class="text l-8 m-6 s-12">
        <div class="subsection">
          Platinum Package
        </div>
        <table class="packages">
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 1</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 2</td>
          </tr>
          <tr>
            <td><i class="fas fa-angle-right"></i></td>
            <td>Item 3</td>
          </tr>
        </table>
        <br>
        <span>CHF 1234.- total</span>
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
        Company Feedback
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
            <td>Organisation und Kommunikation vor der Messe</td>
          </tr>
          <tr>
            <td>4.8</td>
            <td>/</td>
            <td>5</td>
            <td>Betreuung während der Messe</td>
          </tr>
          <tr>
            <td>4.6</td>
            <td>/</td>
            <td>5</td>
            <td>Frequentierung der Stände durch Studenten</td>
          </tr>
          <tr>
            <td>4.5</td>
            <td>/</td>
            <td>5</td>
            <td>Qualität der Gespräche mit Studenten</td>
          </tr>
          <tr>
            <td>4.6</td>
            <td>/</td>
            <td>5</td>
            <td>Verpflegung</td>
          </tr>
          <tr>
            <td>4.3</td>
            <td>/</td>
            <td>5</td>
            <td>Standposition</td>
          </tr>
          <tr>
            <td>4.3</td>
            <td>/</td>
            <td>5</td>
            <td>Preis-Leistung</td>
          </tr>
          <tr>
            <td>4.5</td>
            <td>/</td>
            <td>5</td>
            <td>Gesamteindruck</td>
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
