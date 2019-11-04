<?php $title = "Books Lists"; ?>
<?php ob_start(); ?>

<style>
</style>

<div class="container">

  <div class="row">
    <?php foreach ($books as $book) { ?>
      <div class="col-xs-12 col-md-3">
        <div class="card">
          <div class="valeur">
            <img src="<?php echo $book['imageLink']; ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="?action=book&id=<?php echo $book['id']; ?>" class="btn btn-primary">Wikipedia</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>




<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
