<!DOCTYPE html>
<!-- ########################################### -->
<!-- #                                         # -->
<!-- #         ✋-made for Chemtogether         # -->
<!-- #         github.com/Chemtogether         # -->
<!-- #                                         # -->
<!-- ########################################### -->
<html lang="<?php echo($language);?>">

<!-- START HEAD -->
<head>


  <!-- meta-tags -->
  <meta name="keywords" content="Chemtogether, job fair, chemistry, chemical engineering, interdisciplinary, science, ETH, ETHZ"/>
  <meta name="description" content="Chemtogether"/>
  <meta name="author" content="webmaster@chemtogether.ethz.ch"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <?php if(isset($fb)) {  ?>
  <!-- opengraph tags -->
  <meta property="og:title" content="<?php echo($fb['title']); ?>">
  <meta property="og:description" content="<?php echo($fb['desc']); ?>">
  <meta property="og:type" content="article">
  <?php if($fb['url']!='') { ?><meta property="og:url" content="<?php echo($fb['url']); ?>"><?php } ?>
  <meta property="og:image" content="<?php echo($fb['image_url']); ?>">
  <meta property="og:image:width" content="<?php echo($fb['image_width']); ?>">
  <meta property="og:image:height" content="<?php echo($fb['image_height']); ?>">
  <meta property="og:locale" content="de_CH">
  <meta property="og:locale:alternate" content="en_US">
  <meta property="og:locale:alternate" content="de_DE">
  <meta property="og:locale:alternate" content="en_GB">
  <?php  }  ?>

  <!-- title + favicon -->
  <title><?php echo($lang['general']['page_title'][$eng]); ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo($awss3);?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo($awss3);?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo($awss3);?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo($awss3);?>/favicon/manifest.json">
  <link rel="mask-icon" href="<?php echo($awss3);?>/favicon/safari-pinned-tab.svg" color="#272727">
  <link rel="shortcut icon" href="<?php echo($awss3);?>/favicon/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Chemtogether">
  <meta name="application-name" content="Chemtogether">
  <meta name="msapplication-config" content="<?php echo($awss3);?>/favicon/browserconfig.xml">
  <meta name="theme-color" content="#272727">


  <!-- css includes -->
  <link rel="stylesheet" href="/css/all.css?v=20181023_0"/>


  <!-- js includes -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2650931-4"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2650931-4');
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>
<!-- END HEAD -->

<!-- START BODY -->
<body>
