<?
include("utils/db_calls.php");
$conn = db_connect();

$user = $_POST['user'];
$amount = $_POST['amount'];
$category = $_POST['category'];

$insert_sql = "INSERT INTO transaction(date,user,amount,type) VALUES('".date('Y-m-d H:i:s')."','$user',$amount,'$category')";

insert($conn,$insert_sql);

header("location: index.php");