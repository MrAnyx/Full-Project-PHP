<div class="card mb-3">
	<div class="card-body">
		<h5 class="card-title"><?= htmlentities($post->getName()) ?></h5>
		<p class="text-muted"><?= $post->getCreatedAt()->format('d F Y') ?></p>
		<p><?= $post->getResume() ?></p>
		<p>
			<a href="<?= $router->url("post", ["id" => $post->getId(), "slug" => $post->getSlug()]) ?>" class="btn btn-primary">Voir Plus</a>
		</p>
	</div>
</div>