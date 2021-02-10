<?php
$response = file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5");
$response = json_decode($response,true);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>api privat</title>
</head>
<body>

<pre>
<?php
foreach ($response as $value) {
    var_dump($value);
}
?>
 </pre>
<?php
$sale_usd = $response [0]['sale'];
?>
<form method="get">
    Конвертер к UAH (продажа)<br>
    <input type="text" name="sale_usd" placeholder="Введите суму USD"><br>
    <button type="submit">Посчитать</button>
    <br>
    <?php
    $sale_usd_to_uah = $_GET["sale_usd"];
    echo $sale_usd_to_uah * $sale_usd . " ГРН";
    ?>

</form>
</body>
</html>
