<?php if ($post) { ?>
  <h1><?php echo $post->title; ?></h1>
  <h2><?php echo $post->description; ?></h2>
  <p><?php echo $post->content; ?></p>

  <a href="../../">Back to post list.</a>
<?php } else { ?>
  <h1>Invalid Post ID</h1>
<?php } ?>