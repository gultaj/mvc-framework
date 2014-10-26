<h2>Films</h2>
<ul class="list-unstyled">
	<?php foreach ($films as $film) : ?>
		<li><?= $film['name'] ?> - <small><?= $film['genre'] ?></small></li>
	<?php endforeach ?>
</ul>