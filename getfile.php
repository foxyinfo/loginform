<?php

include("connection.php");

$username =$_POST["txtUsername"];
$password =$_POST["txtPassword"];
$IDS =$_GET["ID"];

$query="SELECT * FROM users WHERE username='$username' and password='$password' and ID;";

$result = $conn->query($query);
$row=mysqli_fetch_array($result);

if($row['username']==$username && $row['password']==$password && $row['ID']==1)
{
 header("location:page1.php?st=suc");
}
else if($row['username']==$username && $row['password']==$password && $row['ID']==2)
{
 header("location:page2.php?st=suc");
}
else
{
 header("location:failure.php?st=suc");
}

?>