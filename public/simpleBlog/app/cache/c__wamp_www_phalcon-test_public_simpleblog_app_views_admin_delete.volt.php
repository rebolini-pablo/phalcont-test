<?php if ($post) { ?>
  <h1>Delete post #<?php echo $post->id; ?></h1>
  <form method="post">
    <label>Confirm delete</label>
    <input type="submit" value="delete">
  </form>
<?php } else { ?>

<?php } ?>