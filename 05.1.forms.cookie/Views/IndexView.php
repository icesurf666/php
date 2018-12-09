<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php require 'Views/blade/header.php'?>

<div role="main">
	<div class="container">
			<div class="content-block">
				<h2><?= Index::getHeader()?></h2>
				<p>
					<?php if ($name): ?>
						<?='Здраствуйте: '.$name.'<br><a href="/balance">Посмотреть баланс</a>'?>
					<?php else:?>
						<?='Чтобы просмотреть баланс необходимо пройти авторизацию'?>
					<?php endif; ?>
				</p>
			</div>
	</div>
</div>
</body>

<?php require 'Views/blade/style.php'?>

</html>
