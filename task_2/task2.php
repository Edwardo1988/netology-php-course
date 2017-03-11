<?php 
$x = rand(0, 100);


$a = 1;
$b = 1;
$c = 0;

while ($x > $a) {
	$c = $a;
	$a = $a + $b;
	$b = $c;
};

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Второе задание</title>
</head>
<body>


<?php 
echo $x;
echo '<br/>';

if ($a != $x) {
	echo 'задуманное число НЕ входит в числовой ряд';
}
else {
	echo 'задуманное число входит в числовой ряд';
}
?>
</body>
</html>