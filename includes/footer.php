<!-- START FOOTER -->
<div id="footer-container">
  <div id="footer" class="flex">


    <div class="footer-left l-5 m-12 s-12">
      <span id="footer-text">
        <span class="footer-text-1">Chemtogether<br></span>
        <span class="footer-text-2"><?php echo($lang['footer']['subtitle1'][$eng]); ?><br><?php echo($lang['footer']['subtitle2'][$eng]); ?><br><br><br></span>
        <span class="footer-text-3"><?php echo($lang['footer']['contact'][$eng]); ?><br></span>
        <p class="footer-text-4"><?php obfuscate_mail('info', '', ''); ?><br></p>
        <br><br>
        <span class="footer-text-3"><?php echo($lang['footer']['address'][$eng]); ?><br></span>
        <p class="footer-text-4">VCS, Postfach 84<br>Wolfgang-Pauli-Str. 9<br>8093 Zürich<br></p>
        <br><br>
        <span class="footer-text-3"><?php echo($lang['footer']['organisation'][$eng]); ?><br></span>
        <p class="footer-text-4"><?php echo($lang['footer']['organisation1'][$eng]); ?> <a href="http://vcs.ethz.ch">VCS</a> &amp; <a href="http://vac.ethz.ch">VAC</a><br><?php echo($lang['footer']['organisation2'][$eng]); ?> <a href="http://vseth.ethz.ch">VSETH</a> &amp; <a href="http://aveth.ethz.ch">AVETH</a></p>
      </span>
    </div>


    <div class="footer-right l-7 m-12 s-12">
      <div class="date-container">
        <span id="date-day1">6</span>
        <span class="date-bar"></span>
        <span id="date-day2">7</span>
      </div>
      <div class="date-container">
        <span id="date-month">Nov.</span>
        <span id="date-year">2018</span>
      </div>
      <span id="contact-container">
        <?php obfuscate_mail('info', '', '<i class="fas fa-envelope-square"></i>'); ?>
        <a href="https://www.facebook.com/chemtogether/"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.linkedin.com/company/chemtogether"><i class="fab fa-linkedin"></i></a>
      </span>
    </div>


  </div>
</div>
<!-- END FOOTER -->
