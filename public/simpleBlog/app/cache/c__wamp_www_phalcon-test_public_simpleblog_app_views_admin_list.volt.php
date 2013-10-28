<?php if ($posts) { ?>
  <h1>Posts</h1>
  <ul>
    <?php foreach ($posts as $post) { ?>
      <li><?php echo $post->title; ?> - <a href="<?php echo $this->url->get('admin/edit/'); ?><?php echo $post->id; ?>">Edit</a> - <a href="<?php echo $this->url->get('admin/delete/'); ?><?php echo $post->id; ?>">Delete</a></li>
    <?php } ?>
  </ul>
<?php } else { ?>
  <h1>No posts loaded</h1>
<?php } ?>

<a href="<?php echo $this->url->get('admin/create'); ?>">Create post</a>