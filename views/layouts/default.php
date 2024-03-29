<!DOCTYPE html>
<html lang=fr class="h-100">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title><?= $title ?? "Mon Site" ?></title>
</head>
<body class="d-flex flex-column h-100">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a href="#" class="navbar-brand">Mon Site</a>
	</nav>

	<div class="container mt-4">
		<?= $content ?>
	</div>

	<?php if(defined("DEBUG_TIME")): ?>
	<footer class="bg-secondary text-light py-4 footer mt-auto">
		<div class="container">
			Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME)) ?> ms
		</div>
	</footer>
	<?php endif ?>
	
</body>
</html>
