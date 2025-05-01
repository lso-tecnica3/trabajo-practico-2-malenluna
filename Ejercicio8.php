<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
<?php
$meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"];
$tempMax = [30.4, 29, 26.8, 23.4, 19.3, 16.6, 16, 17.7, 19.6, 23.1, 26.1, 28.5];
$tempMin = [20.2, 19.5, 18, 13.6, 10.5, 8.3, 7.7, 8.7, 10.6, 13.5, 16, 18.2];

$promMax = 0;
$promMin = 0;
$maxTemp = $tempMax[0];
$minTemp = $tempMin[0];
$mesMax = $meses[0];
$mesMin = $meses[0];

for ($x = 0; $x < count($tempMax); $x++) {
    $promMax += $tempMax[$x];
    $promMin += $tempMin[$x];
    if ($tempMax[$x] > $maxTemp) {
        $maxTemp = $tempMax[$x];
        $mesMax = $meses[$x];
    }
    if ($tempMin[$x] < $minTemp) {
        $minTemp = $tempMin[$x];
        $mesMin = $meses[$x];
    }
}
$promMax = $promMax / count($tempMax);
$promMin = $promMin / count($tempMin);

echo "<h2>Promedios</h2>";
echo "Promedio de las temperaturas máximas: <b>" .number_format($promMax, 2). "°C</b><br>";
echo "Promedio de las temperaturas mínimas: <b>" .number_format($promMin, 2). "°C</b><br>";

echo "<h2>Temperaturas Maximas y Minimas</h2>";
echo "Temperatura máxima: <b>" .number_format($maxTemp, 1). "°C en $mesMax</b><br>";
echo "Temperatura mínima: <b>" .number_format($minTemp, 1). "°C en $mesMin</b><br>";
?>
</body>
</html>
