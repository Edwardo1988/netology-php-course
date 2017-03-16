<?php
$all_animals = array(
"Africa" => array("Panthera leo", "Loxodonta africana", "Panthera"),
"Europe" => array("Mustela nivalis", "Ursus", "Bison bonasus"),
"America" => array("Antilocapra americana", "Scolopendra heros", "Puma"),
"Asia" => array("Varanus", "Androctonus crassicauda", "Elephas maximus"),
"Australia" => array("Macropus", "Phascolarctos cinereus", "Ornithorhynchus anatinus")
);

foreach ($all_animals as $continent) {
	foreach ($continent as $continent_animal) {
		if (count(explode(' ', $continent_animal)) === 2) {
			$animals_double[] = $continent_animal;
		}
	}
}

foreach ($animals_double as $animal_mixed) {
	$animals_short_name = explode (' ', $animal_mixed);
	$animal_short_name_first[] = $animals_short_name[0];
	$animal_short_name_second[] = $animals_short_name[1];
}

shuffle($animal_short_name_first);
shuffle($animal_short_name_second);

for ($i=0; $i < count ($animal_short_name_second); $i++) {
	$animals_unreal[] = $animal_short_name_first[$i] . " " . $animal_short_name_second[$i];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Третье задание</title>
</head>
<body>
<?php
foreach ($animals_unreal as $animal_unreal_name) {
		echo $animal_unreal_name;
		echo '<br/>';
	}
?>
</body>
</html>