<div>
	<?php if($info): ?>
		<img src="<?= $info['image']; ?>">
		<p>Name: <?= $info['name']; ?></p>
	<?php else: ?>
		<p>Not Found data</p>
	<?php endif; ?>
</div>