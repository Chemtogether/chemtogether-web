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

$active_nav = 'fair';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main">

  <div class="container">

    <div class="spacer">
    </div>

    <div class="title">
      <span class="title-text">
        <?php echo($lang['content']['title'][$eng]); ?>
      </span>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['intro_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="image">
      <div class="patterned">
        <div id="fair-image">
          <div class="date-container">
            <span id="date-day1">6</span>
            <span class="date-bar"></span>
            <span id="date-day2">7</span>
          </div>
          <div class="date-container">
            <span id="date-month">Nov.</span>
            <span id="date-year">2018</span>
          </div>
          <div class="date-container">
            <span id="date-place">HCI G-<?php echo($lang['content']['image_floor'][$eng]); ?></span>
            <span id="date-time">9.00 - 17.00</span>
          </div>
        </div>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['main_text'][$eng]); ?>
      </div>
    </div>

    <div class="spacer">
    </div>

    <div class="section">
      <span class="section-slashes">
        <span>/</span><span>/</span>
      </span>
      <span class="section-text">
        Schedule
      </span>
    </div>

    <div class="content flex">
      <div class="text l-12m-12 s-12">
        <?php echo($lang['content']['schedule_text'][$eng]); ?>
      </div>

      <div class="text l-12m-12 s-12">
        <div class="subsection">
            Monday, 5th November
        </div>
        <table class="schedule">
          <tr>
            <td><i class="far fa-fw fa-comment"></i></td>
            <td>18:00</td>
            <td>ETH Career Center Talk: How to write a CV</td>
          </tr>
        </table>
      </div>

      <div class="text l-12m-12 s-12">
        <div class="subsection">
            Tuesday, 6th November
        </div>
        <table class="schedule">
          <tr>
            <td><i class="far fa-fw fa-clock"></i></td>
            <td>09:00</td>
            <td>Start of the fair</td>
          </tr>
          <tr>
            <td><i class="far fa-fw fa-comment"></i></td>
            <td>09:00</td>
            <td>Opening Talk</td>
          </tr>
          <tr>
            <td><i class="fas fa-fw fa-utensils"></i></td>
            <td>16:00</td>
            <td>Apéro</td>
          </tr>
          <tr>
            <td><i class="far fa-fw fa-clock"></i></td>
            <td>17:00</td>
            <td>End of the fair</td>
          </tr>
        </table>
      </div>

      <div class="text l-12m-12 s-12">
        <div class="subsection">
            Wednesday, 7th November
        </div>
        <table class="schedule">
          <tr>
            <td><i class="far fa-fw fa-clock"></i></td>
            <td>09:00</td>
            <td>Start of the fair</td>
          </tr>
          <tr>
            <td><i class="far fa-fw fa-comment"></i></td>
            <td>09:00</td>
            <td>Opening Talk</td>
          </tr>
          <tr>
            <td><i class="fas fa-fw fa-utensils"></i></td>
            <td>16:00</td>
            <td>Apéro</td>
          </tr>
          <tr>
            <td><i class="far fa-fw fa-clock"></i></td>
            <td>17:00</td>
            <td>End of the fair</td>
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
        Supporting Programme
      </span>
    </div>

    <div class="content flex">
      <div class="text l-6 m-12 s-12">
        Test sfdndjshflgoöhasdpfogiih püsd908hgp9dshgüä sd0gds Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
        Test sfdndjshflgoöhasdpfogiih püsd908hgp9dshgüä sd0gds Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
      </div>
      <div class="text l-6 m-12 s-12">
        Test sfdndjshflgoöhasdpfogiih püsd908hgp9dshgüä sd0gds Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
        Test sfdndjshflgoöhasdpfogiih püsd908hgp9dshgüä sd0gds Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
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
