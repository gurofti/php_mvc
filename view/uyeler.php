<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder="Üyelerde arayın">
		<button type="submit">Gönder</button>
	</form>

	<ul>
		<?php foreach ($users as $data): ?>
			<li>
				<?= $data['urunadi']; ?>
			</li>
		<?php endforeach; ?>
	</ul>

</body>
</html>