<main>

<section id="who-we-are" class="bgc-blue c-white">
  <div class="container-95pc-max-1140px">
    <div class="df-col aa-center">
      <div class="w12-md">
        <p>Sun Dance Cleaning Systems is a locally owned and operated commercial cleaning company, serving Madison and the surrounding vicinities since 1991. We provide high-quality office cleaning services tailored to our clients’ needs, preferences, and special requests.</p>
        <br>
        <p>We are committed to delivering the highest quality service for our customers, all without the pressures of being tied down by contracts. Every Client has direct line of communication to the owner Nikhil Kottege. This allows us to address any issues or shortcoming that may come up, along with any special requests as quickly as possible.</p>
        <br>
        <p>We look forward to working with you and building a strong lasting relationship for years to come. Thank you for considering Sun Dance to help you with all your cleaning needs.</p>
        <br>
        <p><strong style="font-weight:800;">Nikhil Kottege</strong></p>
        <p>Owner, Sun Dance Cleaning Systems</p>
      </div>
    </div>
  </div>
</section>

<section id="our-services" class="">
  <div class="container-95pc-max-1140px df-row aa-center">
    <div class="w4-md df-row jc-end aa-center">
      <?php echo file_get_contents(theme_path() . "/svgs/hand-serving-sparkly-house.svg"); ?>

      <!-- <img class="w12" src="<?php echo full_url('images/cleaning-services-vector.png'); ?>"/> -->
      <!-- <img style="width:100%" src="https://images.squarespace-cdn.com/content/v1/5bde2f3c7e3c3ad6bdbf5168/1545171720046-JZ98KW6DH1YK34OHW6L2/ke17ZwdGBToddI8pDm48kOIQ-fPLW3DXO2UnqryyhUZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1Ubgqc79L-YgfPDh9DXCsn1cBmZXrKQPBknU2_w2dRJrkkC7MTV4zpKUlQG8_gHGYTQ/cactus-test.jpg?format=2500w" alt="..."> -->
    </div>
    <div class="w8-md df-row jc-start">
      <div>
        <header class="df-row jc-between">
          <h2>Our Services</h2>
        </header>
        <ul>
          <li>Entrance Areas</li>
          <li>Dusting</li>
          <li>Vacuuming</li>
          <li>Trash</li>
          <li>Restroom Sanitation</li>
          <li>Kitchen Area Cleaning</li>
          <li>Fitness Rooms</li>
          <li>Floors – Carpet – Tile</li>
          <li>Cleaning Supply Order/Management</li>
          <li>Disinfecting</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="why-sun-dance" class="bgc-blue">
  <div class="container-95pc-max-1140px">
    <h2 class="ta-center c-white">Why Sun Dance?</h2>
    <div class="df-row jc-center h3-icon-headers c-white" style="flex-wrap:wrap;">
      <article class="w4-md df-col jc-start ta-center pady-2">
        <i class="fas fa-file-contract c-yellow"></i>
        <h3 class="c-white pady-2">Bonded and Insured<h3>
        <p class="c-white">lorem ipsum dolor sit amet</p>
      </article>
      <article class="w4-md df-col jc-start ta-center pady-2">
        <i class="fas fa-user-tie c-orange-light"></i>
        <h3 class="c-white pady-2">Experienced and Professional<h3>
        <p class="c-white">lorem ipsum dolor sit amet</p>
      </article>
      <article class="w4-md df-col jc-start ta-center pady-2">
        <i class="fas fa-calendar-check c-orange"></i>
        <h3 class="c-white pady-2">Prompt and Reliable<h3>
        <p class="c-white">lorem ipsum dolor sit amet</p>
      </article>
    </div>
  </div>
</section>

<section id="contact-us" class="df-col aa-center">
  <?php
  // $recaptcha_settings = parse_json_file('settings/recaptcha');
  // $site_key = $recaptcha_settings['site-key']
  ?>
  <form class="contact-form w8-md padx-1" action="javascript:;" onsubmit="contact_form_submit(this)" method="POST">
  <!-- <form action="http://localhost:8888/Folder/manilla/email" method="POST"> -->
    <h2>Free Quote</h2>
    <p style="padding-bottom:1rem;">Contact us for a free quote or any other questions!</p>
    <input aria-label="name" name="name" placeholder="Name" type="text" tabindex="1" required="">
    <input aria-label="business" name="business" placeholder="Business" type="text">
    <input aria-label="email" name="email" placeholder="Email" type="email" required="">
    <input aria-label="phone" name="phone" placeholder="Phone" type="tel">
    <textarea aria-label="write your message" name="message" placeholder="Type your message..."  required=""></textarea>
    <!-- <div class="g-recaptcha" data-sitekey="<?php // echo $site_key; ?>"></div> -->
    <input type="submit" value="Submit">
  </form>
</section>

</main>
<?php

// <i class="fas fa-spray-can"></i>
// <i class="fas fa-hand-sparkles"></i>
// <i class="fas fa-hands-wash"></i>
// <i class="fas fa-hands-sink"></i>
// <i class="fas fa-hands-toilet"></i>
// <i class="fas fa-broom"></i>
// <i class="fas fa-bath"></i>
// <i class="fas fa-shower"></i>
// <i class="fas fa-soap"></i>
// <i class="fas fa-pump-soap"></i>
