<?php

$data = file_get_contents('phone-book.json');
$data_real = json_decode($data, true);
var_dump($data_real);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Пятое задание</title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Адрес</th>
			<th>Номер телефона</th>
		</tr>
	<?php foreach($data_real as $item){ ?>
		<tr>
			<td><?= $item['firstName']; ?></td>
			<td><?= $item['lastName']; ?></td>
			<td><?= $item['address']; ?></td>
			<td><?= $item['phoneNumber']; ?></td>
		</tr>
	<?php } ?>
	</table>


</body>
</html>