<?php
function get_page_title ($page_atts = []) {
  if (!isset($page_atts['title'])) return SITE_TITLE;
  if (is_home()) return $page_atts['title'];
  return $page_atts['title'] . ' | ' . SITE_TITLE;
}
function get_page_keywords ($page_atts = []) {
  if (!isset($page_atts['keywords'])) return SITE_KEYWORDS;
  return $page_atts['keywords'];
}
function get_page_image ($page_atts = []) {
  if (isset($page_atts['image-full-url'])) return $page_atts['image-full-url'];
  if (isset($page_atts['image'])) return full_url('images/' . $page_atts['image']);
  if (defined('SITE_IMAGE')) return full_url(SITE_IMAGE);
  return '';
}
function get_add_styles ($page_atts = []) {
  // add style tags that may have been enqueued by other modules
}
function get_og_tags ($page_atts = []) {
  $title = get_page_title($page_atts);
  $image = get_page_image($page_atts);
  ob_start();
  ?>
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:image" content="<?php echo $image; ?>">
  <?php
  // <meta property="og:description" content="">
  // <meta property="og:url" content="">
  return ob_get_clean();
}
