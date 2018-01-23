<?php

// provides small functions
include('php/general_functions.php');

// controls cookie, sets $eng as boolean depending on language choice and provides 'en' or 'de' in $language
include('php/language_cookie.php');



// creates $lang array and provides translation text for common elements (navigation and footer)
include('includes/language.php');

// include all translations from local file
include('lang.php');


// GENERAL

$active_nav = 'home';



?>
<?php include('includes/head.php');  ?>
<?php include('includes/nav.php');  ?>


<!-- START CONTENT -->
<div id="main">

  <div class="container">
    <div id="slideshow-container">
      <ul class="slideshow">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
      <ul class="overlay">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
      <div id="home-top">
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
          <span id="date-place">HCI G-floor</span>
          <span id="date-time">9.00 - 17.00</span>
        </div>
      </div>
      <div id="home-bottom">
        <div id="link-container">
          <div id="link-visitors">
            <a href="/fair/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span>Information for visitors</span></a>
          </div>
          <div id="link-companies">
            <a href="/companies/"><i class="fas fa-arrow-circle-right fa-fw"></i>&nbsp;<span>Information for companies</span></a>
          </div>
        </div>
      </div>
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
  </div>


</div>
<!-- END CONTENT  -->

<?php include('includes/footer.php');  ?>
<?php include('includes/foot.php');  ?>
