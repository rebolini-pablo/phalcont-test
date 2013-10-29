<h1>Posts Cargados</h1>

<?php if (empty($posts)) { ?>
  Sorry...No posts loaded
<?php } else { ?>
<ul>
  <?php foreach ($posts as $post) { ?>
  <li><a href="post/read/<?php echo $post->id; ?>"><?php echo $post->title; ?></a></li>
  <?php } ?>
</ul>
<?php } ?>