<!-- START NAV -->

<div id="sidenav">
  <div id="sidenav-logo">
    <img id="sidenav-logo-closed" src="/img/logo/chemtogether_empty_1x.png"></img>
    <img id="sidenav-logo-opened" src="/img/logo/chemtogether_full_1x.png"></img>
  </div>

  <br>

  <div id="sidenav-language">
    <a href="index.php<?php echo(addGet('lang','de')); ?>" id="<?php if(!$eng) echo('active'); ?>">DE</a> | <a href="index.php<?php echo(addGet('lang','en')); ?>" id="<?php if($eng) echo('active'); ?>">EN</a>
  </div>

  <br>

  <a class="sidenav-link" id="<?php if($active_nav == 'home') echo('active'); ?>" href="/">Home</a>
  <a class="sidenav-link  id="<?php if($active_nav == 'fair') echo('active'); ?>" href="/fair/">The Fair</a>
  <a class="sidenav-link  id="<?php if($active_nav == 'companies') echo('active'); ?>" href="/companies/">The Companies</a>
  <a class="sidenav-link  id="<?php if($active_nav == 'aboutus') echo('active'); ?>" href="/aboutus/">The Team</a>
  <a class="sidenav-link  id="<?php if($active_nav == 'archive') echo('active'); ?>" href="/archive/">Archive</a>
  <a class="sidenav-link  id="<?php if($active_nav == 'exhibitors') echo('active'); ?>" href="/exhibitors/">For Companies</a>


</div>

<div id="topnav">

  <div id="topnav-left" onclick="switchNav()">
    <i class="fas fa-bars"></i>&nbsp;&nbsp;<?php echo($lang['navigation']['topnav_menu'][$eng]); ?>
  </div>

  <div id="topnav-center">
  </div>

  <div id="topnav-right">
    <?php echo($lang['navigation']['topnav_title'][$eng]); ?>
  </div>

</div>
<!-- END NAV -->
