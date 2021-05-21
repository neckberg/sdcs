<?php
function html_page_title ($page_atts) {
  if (!isset($page_atts['title'])) return '';
  if (is_home()) return '';
  return '<h1>' . $page_atts['title'] . '</h1>';
}
function html_menu_item($caption, $href = '') {
  $current_page = (requested_path(true) == $href) ? $current_page = 'current_page' : '';
  $href = full_url($href);
  echo "<a class='$current_page' href='$href'>$caption</a>";
}
