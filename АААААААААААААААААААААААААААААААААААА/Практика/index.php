<?php
include "connect.php";
?>
<!DOCTYPE html>
<html color="#CAC5D0">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<a href="я дома.html" class="buttons1">Квесты</a>
<a href="угадай как я.html" class="buttons">Сертификат</a>
<a href="я в норме.html" class="buttons">О нас</a>
<a href="Ещё одна страница.html" class="buttons">Акции</a>
<a href="тоже страница.html" class="buttons">Карта квестов</a>
<a href="vvod_tovars.php" class="buttons">аааааа</a>
</p>
</header>
<div class="levo"></div>
<hr class="hr-line">
<br>

<body>
<table color="#ffffff"cellpadding="88" cellspacing="20" style="width: 1000px; height: 1400px; " >
<?php
$result = mysqli_query($connection, "SELECT * FROM kvest");
while ($row=mysqli_fetch_array($result))
{
  

?>
    <tr>
      <td background="<?php echo $row["img"] ?>"><a class="table"  href="sign.php?id=<?php echo $row["id_kvest"] ?>"><?php echo $row["name"] ?></a></td>
      <td background="<?php echo $row["img"] ?>"><a class="table"  href="sign.php?id=<?php echo $row["id_kvest"] ?>"><?php echo $row["name"] ?></a></td>
      <td background="<?php echo $row["img"] ?>"><a class="table"  href="sign.php?id=<?php echo $row["id_kvest"] ?>"><?php echo $row["name"] ?></a></td>
    </tr>
    <?php 
    
  }
?>
</table>
<hr class="hr-line">
<style>
          /*подвал*/
      
      </style>
      <div class="footer">
        
             <a class="glik" >grisha.bagin69@gmail.com</a><a class="glik" >тел. 89995843441</a><a class="glik"  href ="https://vk.com/grisha_uchiha">  <img src="vk.png" href="https://vk.com/grisha_uchiha" alt="42.png" align="middle" class="photo1" align="middle"></a><a class="glik" >тел. 89507423464 </a><a class="glik" >grishabagin1@gmail.com</a>
      </div>
      <div class="ded"></div>


    
       
</head>
</body>
</html>
