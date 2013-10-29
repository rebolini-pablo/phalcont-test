<?php if ($success) { ?>
  <h1>Post deleted!</h1>
  <a href="<?php echo $this->url->get('admin/list'); ?>">Back to list</a>
<?php } else { ?>
  <?php if ($post) { ?>
    <h1>Delete post #<?php echo $post->id; ?></h1>
    <form method="post">
      <label>Confirm delete</label>
      <input type="submit" value="delete">
    </form>
  <?php } ?>
<?php } ?>