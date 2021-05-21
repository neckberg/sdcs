<!DOCTYPE html>
<?php global $page_atts; ?>
<html>
  <?php
  include_theme_file('head.php');
  ?>
  <body data-page-url="<?php echo requested_path(true); ?>">
    <?php
    include_theme_file('header.php');
    echo $page_atts['page_content'];
    include_theme_file('footer.php');
    ?>
  </body>
</html>
