<?php
require_once('functions.php');

// controllers
function controller_pages($page_folder, $is_last_controller) {
  array_unshift($page_folder, 'pages');
  $dir = implode('/', $page_folder);
  $found = (is_dir($dir)) ? true : false;
  if (!$found && !$is_last_controller) return false;
  echo_folder_as_page($dir, $found);
  return true;
}
function controller_404() {
  echo_page('', [], 404);
}
function controller_email() {
  $email_settings = parse_json_file('settings/email');
  if (empty($_POST)) return json_response(400, 'Invalid Request');
  if (!isset($_POST['email'])) return json_response(400, 'Invalid Request');
  require_once('_functions/email.php');
  $result = send_email($_POST['email'], 'Thanks for your message!', '<p>' . $_POST['message'] . '</p>');
  if ($result != true) return json_response(400, 'Something went wrong when sending your email');
  $response = [];
  $response['message'] = 'Thanks for your message!';
  return json_response(200, 'OK', $response);
}

// https://shareurcodes.com/blog/creating%20a%20simple%20rest%20api%20in%20php
// https://dev.to/shahbaz17/build-a-simple-rest-api-in-php-2edl
function json_response($status, $status_message, $data = NULL) {
  // header("Access-Control-Allow-Origin: *");
  // header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
  // header("Access-Control-Max-Age: 3600");
  // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  header("Content-Type: application/json; charset=UTF-8");
	header('HTTP/1.1 ' . $status . ' ' . $status_message);
  echo json_encode($data);
  die();
  return true;
}
