<?php
include "connect.php";
$name=$_POST['name'];
$time=$_POST['time'];
$description=$_POST['description'];
$kol=$_POST['kol'];
$price=$_POST['price'];
$img=$_POST['img'];

if(is_uploaded_file($_FILES["filename"]["tmp_name"])) {
    $img=$_FILES["filename"]["name"];
    move_uploaded_file(
        $_FILES["filename"] ["tmp_name"],
        __DIR__ . DIRECTORY_SEPARATOR . "img" .DIRECTORY_SEPARATOR.$_FILES ["filename"] ["name"]
    );
}else {
    echo ("ошибка загрузки файла");
}
    

$sql = "INSERT INTO kvest(name,time,description,kol,price,img) VALUES ('$name','$time','$description','$kol','$price','$img')";

$result = mysqli_query($connection,$sql) or die("Query failed");
Header("Location:uspex.php?i=1");
?>