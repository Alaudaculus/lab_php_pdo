<?php
include "database.php";
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
          <select name="category" >
            <option value="Videocard">Videocard</option>
            <option value="CPU">CPU</option>
            <option value="Display">Display</option>
            <option value="Memory">Memory</option>
          </select>
        </div>
        <div class="search">
          <p > Виробник: </p>
          <select name="vendors" >
            <option value="LG">LG</option>
            <option value="ASUS">ASUS</option>
            <option value="Samsung">Samsung</option>
            <option value="Intel">Intel</option>
            <option value="AMD">AMD</option>
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