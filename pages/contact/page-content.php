<?php
require_once('_functions/email.php');
// send_email($to, $subject = '', $body = '');
?>
<main>
  <h1>Contact us</h1>
  <p>Contact us via the form below...</p>
  <?php
  // $recaptcha_settings = parse_json_file('settings/recaptcha');
  // $site_key = $recaptcha_settings['site-key']
  ?>
  <form action="javascript:;" onsubmit="contact_form_submit(this)" method="POST">
  <!-- <form action="http://localhost:8888/Folder/manilla/email" method="POST"> -->
    <p>Send me a message!</p>
    <input aria-label="name" name="name" placeholder="Name" type="text" tabindex="1" required="">
    <input aria-label="business" name="business" placeholder="Business" type="text">
    <input aria-label="email" name="email" placeholder="Email" type="email" required="">
    <input aria-label="phone" name="phone" placeholder="Phone" type="tel">
    <textarea aria-label="write your message" name="message" placeholder="Type your message..."  required=""></textarea>
    <!-- <div class="g-recaptcha" data-sitekey="<?php // echo $site_key; ?>"></div> -->
    <input type="submit" value="Submit">
  </form>
</main>


<!-- <script src='https://www.google.com/recaptcha/api.js' async defer></script> -->
<script>
// https://developers.google.com/recaptcha/docs/display#js_api
// if (grecaptcha.getResponse() == '') {
//   console.log('reCaptcha not completed')
// }
</script>
<script>
function contact_form_submit(form) {
let p = form.querySelector('p')
p.innerHTML = 'Sending...'

let resource_root = window.location.origin  // got this here: https://stackoverflow.com/questions/1368264/how-to-extract-the-hostname-portion-of-a-url-in-javascript

// amazing tutorial about using fetch to use a REST API: https://gomakethings.com/how-to-use-the-fetch-api-with-vanilla-js/
// also used this to figure out how to submit the form data: https://stackoverflow.com/questions/46640024/how-do-i-post-form-data-with-fetch-api
// fetch(resource_root + '/email', {method:'post', body: new FormData(form)})
fetch(resource_root + '/Folder/manilla/api/message', {method:'post', body: new FormData(form)})
.then(function (response) {
	// The API call was successful!
	if (response.ok) {
		return response.json();
	} else {
		return Promise.reject(response);
	}
}).then(function (data) {
	// This is the JSON from our response
	console.log(data);
  p.innerHTML = data.message
  form.reset()
}).catch(function (err) {
	// There was an error
  console.warn('Something went wrong.', err);
  p.innerHTML = 'Something went wrong. Please try again or contact me via <a href="mailto:nathan.eckberg@gmail.com">email</a>'
})

}
</script>
