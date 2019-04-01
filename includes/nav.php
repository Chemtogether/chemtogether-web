<!-- START NAV -->

<div id="sidenav" class="">
  <a href="/">
    <div id="sidenav-logo">
      <img id="sidenav-logo-closed" <?php set_source($awss3.'/logo/chemtogether_empty','png'); ?>></img>
      <img id="sidenav-logo-opened" <?php set_source($awss3.'/logo/chemtogether_full','png'); ?>></img>
    </div>
  </a>

  <div id="sidenav-language">
    <a href="index.php<?php echo(addGet('lang','de')); ?>" id="<?php if(!$eng) echo('active'); ?>">DE</a> | <a href="index.php<?php echo(addGet('lang','en')); ?>" id="<?php if($eng) echo('active'); ?>">EN</a>
  </div>

  <br><br>

  <a class="sidenav-link" id="<?php if($active_nav == 'home') echo('active'); ?>" href="/">
    <i class="fas fa-fw fa-home"></i>
    <span><?php echo($lang['navigation']['sidenav_home'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'visitors') echo('active'); ?>" href="/visitors/">
    <i class="fas fa-fw fa-user-graduate"></i>
    <span><?php echo($lang['navigation']['sidenav_visitors'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'exhibitors') echo('active'); ?>" href="/exhibitors/">
    <i class="fas fa-fw fa-user-tie"></i>
    <span><?php echo($lang['navigation']['sidenav_exhibitors'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'impressions') echo('active'); ?>" href="/impressions/">
    <i class="fas fa-fw fa-images"></i>
    <span><?php echo($lang['navigation']['sidenav_impressions'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'team') echo('active'); ?>" href="/team/">
    <i class="fas fa-fw fa-users"></i>
    <span><?php echo($lang['navigation']['sidenav_team'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'archive') echo('active'); ?>" href="/archive/">
    <i class="fas fa-fw fa-file-archive"></i>
    <span><?php echo($lang['navigation']['sidenav_archive'][$eng]); ?></span>
  </a>


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
