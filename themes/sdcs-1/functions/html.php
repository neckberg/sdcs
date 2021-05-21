<?php
function html_page_title ($page_atts) {
  // error_log(print_r($page_atts, true));
  if (!isset($page_atts['title'])) return '';
  // if (is_home()) return '';
  return '<h1>' . $page_atts['title'] . '</h1>';
}
function html_menu_item($caption, $url = '', $url_is_exact = false) {
  $current_page = (requested_path(true) == $url) ? $current_page = 'current_page' : '';
  if (!$url_is_exact) $url = full_url($url);
  echo "<a class='$current_page' href='$url'>$caption</a>";
}
