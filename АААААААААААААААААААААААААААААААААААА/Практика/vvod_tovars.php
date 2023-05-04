<!Doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Список квестов - добавление квеста</title>
</head>
<body>
    <form action="insert_tovars.php" method="post" name="form1" enctype="multipart/form-data">
      Название квеста <input type="text" name="name" /><br>
      Время квеста <input type="number" name="time" /><br>
      Описание <input type="text" name="description" /><br>
      Кол-во людей <input type="number" name="kol" /><br>
      Цена <input type="number" name="price" /><br>
      Добавить изображение <input type="file" name="filename"><br>
      <input type="submit" name="insert" value="Добавить">
    </form>
    <a href="index.php">На главную</a>
    <?php
include "connect.php";
$id=$_GET["id"];
$sql = "SELECT * FROM booking WHERE id_booking = $id_booking";
$result = mysqli_query ($connection,$sql) or die("Query failed");
while($row=mysqli_fetch_array($result)) 
    {
      echo $row["id_booking"];
      echo $row["id_kvest"];
      echo $row["phone"];
      echo $row["name_client"];
    }
    ?>
</body>
</html>