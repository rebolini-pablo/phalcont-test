<?php
  use Phalcon\Tag;
?>

<h1>Create a post</h1>

<?php echo Tag::form("admin/create"); ?>
 <p>
    <label for="title">Title</label>
    <?php echo Tag::textField("title") ?>
 </p>

 <p>
    <label for="description">description</label>
    <?php echo Tag::textField("description") ?>
 </p>

 <p>
    <label for="content">Content</label>
    <?php echo Tag::textArea("content") ?>
 </p>

 <p>
    <?php echo Tag::submitButton("Save") ?>
 </p>

</form>

<a href="{{ url('admin/list') }}">Back to list</a>