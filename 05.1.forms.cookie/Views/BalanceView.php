<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php require 'Views/blade/header.php'?>

<div class="menu">
	<div class="container">
			<div class="content-block">
				<h2>Баланс</h2>
				<p>
				<?php if(!$name): ?>
				  <?="Нет доступа"?>
				<?php else: ?>
				  <?='Ваш баланс: '. $user['balance']?>
				<?php endif; ?>

				</p>
				<?php if(!empty($users)): ?>
					<?php foreach ($users as $item): ?>
					<p>Имя пользователя: <?=$item['name']?>. Баланс: <?=$item['balance']?></p>
                    <?php endforeach; ?>
				<?php endif; ?>
			</div>
	</div>
</div>
</body>

<?php require 'Views/blade/style.php'?>

</html>
