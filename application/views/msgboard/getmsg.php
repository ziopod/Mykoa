<ul>
<?php foreach ($msgs as $msg): ?>
	<li>
		<h2><?php echo $msg['title']; ?></h2>
		<?php echo $msg['content']; ?>
	</li>
<?php endforeach; ?>
</ul>