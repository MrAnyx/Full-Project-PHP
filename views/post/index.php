<?php

use App\Helpers\Text;
use App\Models\Post;

$title = "Mon Blog";

$pdo = new PDO("mysql:dbname=blog_php;host=127.0.0.1", "root", "MDPbdd", [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->query("SELECT * FROM post ORDER BY created_at DESC LIMIT 12");
$posts = $query->fetchAll(PDO::FETCH_CLASS, Post::class);

?>

<h1>Mon blog</h1>

<div class="row">

	<?php foreach ($posts as $post): ?>
	<div class="col-md-3">
		<?php require __DIR__ . '/card.php'; ?>
	</div>
	<?php endforeach ?>

</div>

