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
        <div class="page-not-found">
            <?= $header_error?>
        </div>
		<div style="width: 100%; height: 100%;">
			<iframe width="100%" height="600px" src="https://www.youtube.com/embed/<?=$randomVideo?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>
    </div>
</div>
</body>

<?php require 'Views/blade/style.php'?>

</html>
