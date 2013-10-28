<h1>Posts Cargados</h1>

<?php if ($posts) { ?>
<ul>
  <?php foreach ($posts as $post) { ?>
  <li><a href="post/read/<?php echo $post->id; ?>"><?php echo $post->title; ?></a></li>
  <?php } ?>
</ul>
<?php } else { ?>
  Sorry...No posts loaded
<?php } ?>