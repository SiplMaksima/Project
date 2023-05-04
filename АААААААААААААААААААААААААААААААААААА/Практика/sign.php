<!DOCTYPE html>
<html color="#CAC5D0">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<link color="#1C0041">
<header>


<a href="RICK.HTML"><img src="42.png" alt="42.png" align="middle" class="photo"></a> <br><h1 class="title">
</h1>
<p color ="#828282" class="menu">
<a href="угадай где я.html" class="buttons">Главная</a>
<a href="index.php" class="buttons1">Квесты</a>
<a href="угадай как я.html" class="buttons">Сертификат</a>
<a href="я в норме.html" class="buttons">О нас</a>
<a href="Ещё одна страница.html" class="buttons">Акции</a>
<a href="тоже страница.html" class="buttons">Карта квестов</a>
</p></header><hr class="hr-line">
<?php
include "connect.php";
$id=$_GET["id"];
$sql = "SELECT * FROM kvest WHERE id_kvest=$id";

$result = mysqli_query ($connection,$sql) or die("Query failed");
while($row=mysqli_fetch_array($result)) {
?>
<h1 class="gx"><?php echo $row["name"]; ?></h1>
<img 
class="photo" src="<?php echo $row["img"]; ?>" />
<div class="levo"></div>
<body>
<h1 class="fuflo">
</h1>
<table border="0" class="gg" style="border-spacing:10px;">  
 <tr> 
  <td><h2 class="gx"><?php echo $row["kol"]; ?></h2></td>
  <td><h2 class="gx"><?php echo $row["time"]; ?></h2></td>
  <td><h2 class="gx" ><?php echo $row["price"]; ?></h2></td>
 </tr>   
 <tr> 
  <td class="gl"><h6>количество человек</h6></td>
  <td class="gl"><h6>время на прохождение</h6></td>
  <td class="gl"><h6>стоимость игры одной команды</h6></td>
 </tr>  
</table>
<br>
<a class="haip2"><p class="gz">Легенда квеста:</p><?php echo $row["description"]?></a>
<br><br> 
<div>




        <h3>Бронирование</h3>
        <form class="form2" action="booking.php" method="post" name="form2" enctype="multipart/form-data">
    <tr>
      <input type="hidden" value="<?php echo $row["id_kvest"];?>" name="id_kvest"/>
      <td><a class="phone"> Телефон <input type="text" name="phone" /></td>
      <td><a class="name_client">Имя <input type="text" name="name_client" /></td>
      <td><a class="submit"><input type="submit" name="insert" value="Забронировать"></td>
    </tr>
    </form>
<a href="sign copy.php" class="buttons">Забронировать</a>

<?php 
}
?>



<hr class="hr-line">
<style>
          /*подвал*/
     
      </style>
      <div class="footer">
        
                 <a class="glik" >grisha.bagin69@gmail.com</a><a class="glik" >тел. 89995843441</a><a class="glik"  href ="https://vk.com/grisha_uchiha">  <img src="vk.png" href="https://vk.com/grisha_uchiha" alt="42.png" align="middle" class="photo1" align="middle"></a><a class="glik" >тел. 89507423464 </a><a class="glik" >grishabagin1@gmail.com</a>
      </div>
      <div class="ded"></div>


    </header>
       
</head>
</body>
</html>