<?php
header('Access-Control-Allow-Origin:*');
$conn=mysqli_connect('localhost','root','root','partner'); 
mysqli_query($conn,"set names utf8");

$username=$_GET['username'];
$password=$_GET['password'];

$sql="select * from users where username='$username'";
$query=mysqli_query($conn,$sql);
$us=is_array($row=mysqli_fetch_array($query));
$ps=$us ? $password==$row['password']:FALSE;
if($ps){
    $res=array("res"=>1);
    echo json_encode($res);
}else{
    $res=array("res"=>0);
    echo json_encode($res);
}


?>