<?php $title = "Books Lists"; ?>
<?php ob_start(); ?>
<h1>Books lists<h1>
  <p>Welcome in this section</p>
  <?php $content = ob_get_clean(); ?>

<?php require('public/index.php'); ?>
