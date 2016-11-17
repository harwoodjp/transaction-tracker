<?
include("utils/db_calls.php");
$conn = db_connect();

$user = $_GET['user'];
$amount = $_GET['amount'];
$category = $_GET['category'];

$insert_sql = "INSERT INTO transaction(date,user,amount,type) VALUES('".date('Y-m-d H:i:s')."','$user',$amount,'$category')";

insert($conn,$insert_sql);

header("location: index.php");