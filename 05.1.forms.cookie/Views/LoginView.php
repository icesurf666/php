<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php require 'Views/blade/header.php'?>

<div class="content">
	<div class="container">
			<div class="content-block">
				<h2>Авторизация</h2>
				<p>
          <?php if(!$name): ?>
          <form action="/" method="POST">
            <label for="username">Введите имя:</label>
            <input type="text" name="username" id="username" class="counter" required><br>
            <label for="password">Введите пароль:</label>
            <input type="password" name="password" id="password" class="counter" required>
            <input type="submit" value="Готово" class="btn">
          </form>
        <?php else: echo 'Здраствуйте, <b>'.$name. '</b>!
													<br>Вы авторизованы
													<br><a href="/out">Выйти</a>'; ?>
        <?php endif; ?>

        </p>
			</div>
	</div>
</div>
</body>

<?php require 'Views/blade/style.php'?>

</html>
