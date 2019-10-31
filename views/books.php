<?php $title = "Books Lists"; ?>
<?php ob_start(); ?>
<h1>Books lists</h1>

<ul>
  <?php
    foreach ($books as $book) {
      ?>
      <li><?php echo $book['title']; ?></li>    
      <?php
      //code...
    }
  ?>
</ul>

  <pre>
    <?php var_dump($books); ?>
  </pre>
  <p>Welcome in this section</p>
  <?php $content = ob_get_clean(); ?>

<?php require('public/index.php'); ?>
