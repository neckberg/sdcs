<?php
include_once('functions/html.php');
global $page_atts;
?>
<header>

<section class="bgc-orange c-white pady-1" style="position:fixed; top:0; left:0; right:0;">
  <div class="container-95pc-max-1140px df-col-reverse df-row-md df-row-md jc-end" style="position:relative;">
    <input id="menu-checkbox" class="display-toggle d-none" type="checkbox">
    <div class="d-none d-block-md d-block-checked">
      <nav class="margx--2 top-nav df-col df-row-md">
        <a class="padx-2 pady-1 ff-1" href="#our-services">Services</a>
        <a class="padx-2 pady-1 ff-1" href="#why-sun-dance">Why Sun Dance</a>
        <a class="padx-2 pady-1 ff-1" href="#contact-us">Contact</a>
      </nav>
    </div>
    <label for="menu-checkbox" class="d-none-md d-block" style="width:40px; height:40px; position:relative;">
      <div class="hamburger"><div></div></div>
    </label>
  </div>
</section>
<section class="df-col aa-center" style="padding-top:2rem;">
  <a href="<?php echo full_url(); ?>" style="display:inline-block; height:300px; margin:1rem;">
    <img src="<?php echo full_url('images/sun-dance-logo.png'); ?>" alt="Sun Dance Cleaning Systems, LLC" style="height:100%; width:auto;"/>
  </a>
  <?php
  // <!-- html definition of the logo text -->
  // <p class="c-orange" style="font-size: 100px;font-weight: 600; font-family:'Open Sans', sans-serif;">SUN DANCE</p>
  // <p class="c-orange" style="font-size: 48px; font-weight: 400; font-family:'Open Sans', sans-serif;">CLEANING SYSTEMS, LLC</p>
  ?>
</section>

</header>
