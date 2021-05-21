<?php
include_once('functions/html.php');
global $page_atts;
?>
<header>

<section class="bgc-orange c-white pady-1" style="position:fixed; top:0; left:0; right:0;">
  <div class="container-95pc-max-1140px df-row jc-end" style="position:relative;">
    <input id="menu-checkbox" class="display-toggle d-none" type="checkbox">
    <nav class="d-none d-block-md d-block-checked margx--1 top-nav">
      <a class="padx-1 ff-1" href="#our-services">Services</a>
      <a class="padx-1 ff-1" href="#why-sun-dance">Why Sun Dance</a>
      <a class="padx-1 ff-1" href="#contact-us">Contact</a>
    </nav>
    <label for="menu-checkbox" class='d-none-md d-block'>
      <div class="hamburger"><div></div></div>
    </label>
  </div>
</section>
<section class="df-col aa-center" style="padding-top:1rem;">
  <a href="<?php echo full_url(); ?>">
    <img src="<?php echo full_url('images/sun-dance-logo.png'); ?>"/>
  </a>
</section>

</header>
