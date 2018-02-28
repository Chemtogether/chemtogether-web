<!-- START NAV -->

<div id="sidenav" class="">
  <a href="/">
    <div id="sidenav-logo">
      <img id="sidenav-logo-closed" <?php set_source('https://s3.eu-central-1.amazonaws.com/static.chemtogether.2018/logo/chemtogether_empty','png'); ?>></img>
      <img id="sidenav-logo-opened" <?php set_source('https://s3.eu-central-1.amazonaws.com/static.chemtogether.2018/logo/chemtogether_full','png'); ?>></img>
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

  <a class="sidenav-link" id="<?php if($active_nav == 'news') echo('active'); ?>" href="/news/">
    <i class="far fa-fw fa-newspaper"></i>
    <span><?php echo($lang['navigation']['sidenav_news'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'fair') echo('active'); ?>" href="/fair/">
    <i class="fas fa-fw fa-info"></i>
    <span><?php echo($lang['navigation']['sidenav_fair'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'companies') echo('active'); ?>" href="/companies/">
    <i class="far fa-fw fa-building"></i>
    <span><?php echo($lang['navigation']['sidenav_companies'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'aboutus') echo('active'); ?>" href="/aboutus/">
    <i class="fas fa-fw fa-users"></i>
    <span><?php echo($lang['navigation']['sidenav_aboutus'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'archive') echo('active'); ?>" href="/archive/">
    <i class="fas fa-fw fa-archive"></i>
    <span><?php echo($lang['navigation']['sidenav_archive'][$eng]); ?></span>
  </a>

  <a class="sidenav-link" id="<?php if($active_nav == 'exhibitors') echo('active'); ?>" href="/exhibitors/">
    <i class="far fa-fw fa-address-card"></i>
    <span><?php echo($lang['navigation']['sidenav_exhibitors'][$eng]); ?></span>
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
