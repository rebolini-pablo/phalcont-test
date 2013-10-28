<h1>Edit post #<?php echo $post->id; ?></h1>

<form method="post" action="<?php echo $this->url->get('admin/edit/'); ?><?php echo $post->id; ?>">
 <p>
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $post->title; ?>">
 </p>

 <p>
    <label for="description">description</label>
      <input type="text" name="description" value="<?php echo $post->description; ?>">
 </p>

 <p>
    <label for="content">Content</label>
    <textarea name="content"><?php echo $post->content; ?></textarea>
 </p>

 <p>
    <input type="submit" value="Save">
 </p>
  
</form>

<a href="<?php echo $this->url->get('admin/list'); ?>">Back to list</a>