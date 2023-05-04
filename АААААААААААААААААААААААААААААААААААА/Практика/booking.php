<?php
include "connect.php";
$id_kvest=$_POST['id_kvest'];
$phone=$_POST['phone'];
$name_client=$_POST['name_client'];
var_dump($_POST);
$sql = "INSERT INTO booking(id_kvest, phone, name_client) VALUES ('$id_kvest','$phone','$name_client')";
echo $sql;
$result = mysqli_query($connection,$sql) or die("Query failed");
Header("Location:sign.php?id=$id_kvest");
?>
