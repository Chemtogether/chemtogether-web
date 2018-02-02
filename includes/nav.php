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

  <a class="sidenav-link" id="<?php if($active_nav == 'home') echo('active'); ?>" href="/"><?php echo($lang['navigation']['sidenav_home'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'news') echo('active'); ?>" href="/news/"><?php echo($lang['navigation']['sidenav_news'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'fair') echo('active'); ?>" href="/fair/"><?php echo($lang['navigation']['sidenav_fair'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'companies') echo('active'); ?>" href="/companies/"><?php echo($lang['navigation']['sidenav_companies'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'aboutus') echo('active'); ?>" href="/aboutus/"><?php echo($lang['navigation']['sidenav_aboutus'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'archive') echo('active'); ?>" href="/archive/"><?php echo($lang['navigation']['sidenav_archive'][$eng]); ?></a>
  <a class="sidenav-link" id="<?php if($active_nav == 'exhibitors') echo('active'); ?>" href="/exhibitors/"><?php echo($lang['navigation']['sidenav_exhibitors'][$eng]); ?></a>


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
