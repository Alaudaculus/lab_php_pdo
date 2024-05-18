<?php
include "database.php";

$sql1 = "SELECT c_name FROM category";
$stmt = $dbh->prepare($sql1);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT v_name FROM vendors";
$stmt = $dbh->prepare($sql2);
$stmt->execute();
$vendorss = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="uk-UA">
<head>
  <title>Lab_</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Лабораторна робота №1  курсу 'Internet-технології' поток КІУКІз-21">
  <link href="css//styly1.css" type="text/css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img//12345.png">
</head>
<body>
  <div class="header">
      <h1 >...</h1>
  </div>
  <div class="navbar">
    <a href="Main.php">Головна</a>
    <a href="result.php">Результат</a>
  </div>
  <div class="row">
    <div class="side">
      <p class="task"> БД для зберігання інформації про товари в інтернет-магазині. <br>Забезпечити виведення таких даних: <br>товари обраного виробника;<br>товари в обраної категорії;<br>товари в обраному ціновому діапазоні.</p>
    </div>
    <div class="main">
      <p class="task"> Товари в інтернет-магазині: </p>
      <form action="result.php" method="GET">
        <div class="search">
          <p > Категорія: </p>  
          <select name="category">
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['c_name']) ?>">
                    <?= htmlspecialchars($category['c_name']) ?>
                </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="search">
          <p > Виробник: </p>
          <select name="vendors">
            <?php foreach ($vendorss as $vendors): ?>
                <option value="<?= htmlspecialchars($vendors['v_name']) ?>">
                    <?= htmlspecialchars($vendors['v_name']) ?>
                </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="search">
          <p > Ціна: </p>
          <p class="price"> Від: </p>
          <input type="text" name="price_min" value="0">
          <p class="price"> До: </p>
          <input type="text" name="price_max" value="3000">
        </div>
        <div class="search">
          <input type="submit" name="search">
        </div>
      </form>
    </div>
  </div>

  <div class="footer">
    <h2>Лабораторна робота №1 </h2>
    <p> Варіант №5</p> 
  </div>
</body>
</html>