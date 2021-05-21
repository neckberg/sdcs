<?php
// echo a page with speified content, attributes, and template
function echo_page($content, $atts = [], $template = 'page') {
  global $page_atts;
  $page_atts = $atts;
  $page_atts['page_content'] = $content;
  include_theme_file("$template.php");  // show the page!
}

function echo_folder_as_page ($dir, $found = true) {
  $content = html_content_from_file([$dir], ['page-content']);
  $page_atts = ($found) ? parse_json_file("$dir/page-atts") : [];
  $template = ($found) ? 'page' : 404;
  echo_page($content, $page_atts, $template);
}

// generate content from whatever type of file we can find (md, php, or html)
function html_content_from_file($dirs = [], $filenames = [], $exts = ['md', 'php', 'html']) {
  list($dir, $name, $ext) = get_best_file($dirs, $filenames, $exts);
  if (!$name) return false;
  $mk_content_func = "mk_content_from_$ext";
  return $mk_content_func("$dir/$name");
}
function mk_content_from_md($filepath) {
  $filename = "$filepath.md";
  $file_contents = file_get_contents($filename);
  if (empty($file_contents)) return '';
  require_once('_3rd_party/parsedown/Parsedown.php');
  $parsedown = new Parsedown();
  return $parsedown->text($file_contents);
}
function mk_content_from_php($filepath) {
  return sandbox_include("$filepath.php");
}
function mk_content_from_html($filepath) {
  return file_get_contents("$filepath.html");
}

// search through hierarchy of filenames and extensions to find the best file available
function get_best_image_url($dirs = [], $img_names = [], $exts = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'ico']) {
  return get_best_file_url($dirs, $img_names, $exts);
}
function get_best_file_url($dirs = [], $filenames = [], $exts = []) {
  $filepath = get_best_file_path($dirs, $filenames, $exts);
  if (!$filepath) return false;
  return full_url($filepath);
}
function get_best_file_path($dirs = [], $filenames = [], $exts = []) {
  list($dir, $name, $ext) = get_best_file($dirs, $filenames, $exts);
  if (!$name) return false;
  return "$dir/$name.$ext";
}
function get_best_file($dirs = [], $filenames = [], $exts = []) {
  if (count($dirs) < 1) $dirs = [''];
  foreach ($dirs as $dir) {
    if (!empty($dir) && !is_dir($dir)) continue;
    foreach ($filenames as $name) {
      foreach ($exts as $ext) {
        $path = $dir . (($dir == '') ? '' : '/') . "$name.$ext";
        if (file_exists($path)) return [$dir, $name, $ext];
      }
    }
  }
  return [false, false, false];
}
function sandbox_include($file) {
  ob_start();
  include($file);
  return ob_get_clean();
}
