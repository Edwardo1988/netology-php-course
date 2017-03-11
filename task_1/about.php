<?php
	$title ='Первое задание курса PHP';

	$name = 'Имя';
	$age = 'Возраст';
	$mail ='Адрес электронной почты';
	$city ='Город';
	$about ='О себе';

	$student_name='Эдуард Галиев';
	$student_age='28';
	$student_mail='edwardo1988@gmail.com';
	$student_city='Москва';
	$student_about='Сейчас помогаю поднять друзьям простой PHP-сайт, потому я здесь=)';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Первое задание</title>
</head>
<body>
	<h1><?= $title ?></h1>
	<table>
		<tr>
			<td><?= $name ?></td>
			<td><?= $student_name ?></td>
		</tr>
		<tr>
			<td><?= $age ?></td>
			<td><?= $student_age ?></td>
		</tr>
		<tr>
			<td><?= $mail ?></td>
			<td><?= $student_mail ?></td>
		</tr>
		<tr>
			<td><?= $city ?></td>
			<td><?= $student_city ?></td>
		</tr>
		<tr>
			<td><?= $about ?></td>
			<td><?= $student_about ?></td>
		</tr>
	</table>
</body>
</html>