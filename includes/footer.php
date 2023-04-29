<!-- START FOOTER -->
<div id="footer-container">
  <div id="footer" class="flex">


    <div class="footer-left l-5 m-12 s-12">
      <span id="footer-text">
        <img <?php set_source($awss3.'/logo/chemtogether_full_white','png'); ?>><br>
        <!-- <span class="footer-text-1">Chemtogether<br></span> -->
        <span class="footer-text-2"><?php echo($lang['footer']['subtitle1'][$eng]); ?><br><?php echo($lang['footer']['subtitle2'][$eng]); ?><br><br><br></span>
        <span class="footer-text-3"><?php echo($lang['footer']['contact'][$eng]); ?><br></span>
        <p class="footer-text-4"><?php obfuscate_mail('contact', '', ''); ?><br></p>
        <br><br>
        <span class="footer-text-3"><?php echo($lang['footer']['address'][$eng]); ?><br></span>
        <p class="footer-text-4">VCS, Postfach 84<br>Wolfgang-Pauli-Str. 9<br>8093 Zürich<br></p>
        <br><br>
        <span class="footer-text-3"><?php echo($lang['footer']['organisation'][$eng]); ?><br></span>
        <p class="footer-text-4"><?php echo($lang['footer']['organisation1'][$eng]); ?> <a href="http://vcs.ethz.ch">VCS</a>, <a href="http://vac.ethz.ch">VAC</a> &amp; <a href="https://www.apv.ethz.ch/">APV</a><br><?php echo($lang['footer']['organisation2'][$eng]); ?> <a href="http://vseth.ethz.ch">VSETH</a> &amp; <a href="http://aveth.ethz.ch">AVETH</a></p>
      </span>
    </div>


    <div class="footer-right l-7 m-12 s-12">
       <div class="date-container">
        <span id="date-day1">7.</span>
        <span class="date-bar"></span>
        <span id="date-day2">8.</span>
      </div> 
      <div class="date-container">
        <span id="date-month">Nov.</span>
        <span id="date-year">2023</span>
      </div>
      <div class="date-container">
        <span id="date-place">HCI G-<?php echo($lang['footer']['floor'][$eng]); ?></span>
        <span id="date-time">9.30 - 17.00</span>
      </div>
      <span id="contact-container">
        <?php obfuscate_mail('contact', '', '<i class="fas fa-envelope-square"></i>'); ?>
        <a href="https://www.linkedin.com/company/chemtogether"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.facebook.com/chemtogether/"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/chemtogether/"><i class="fab fa-instagram"></i></a>
      </span>
    </div>


  </div>
</div>
<!-- END FOOTER -->
