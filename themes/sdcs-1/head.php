<?php
global $page_atts;
require('functions/head.php');
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- *noe added Month D YYYY -->
  <!-- <meta name="google-site-verification" content="" /> -->

  <title><?php echo get_page_title($page_atts); ?></title>
  <meta name="Keywords" content="<?php echo get_page_keywords($page_atts); ?>">
  <?php echo get_og_tags($page_atts); ?>
  <!-- <meta name="Description" content=""> -->

  <link rel="icon" type="image/png" href="<?php echo full_url('images/favicon/favicon-16x16.png'); ?>" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo full_url('images/favicon/favicon-32x32.png'); ?>" sizes="32x32" />

  <!-- google fonts! -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo full_url('_3rd_party/fontawesome-free-5.14.0-web/css/all.css'); ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo theme_file_url('style.css') . '?' . time(); ?>">
  <?php echo get_add_styles($page_atts); ?>
</head>
