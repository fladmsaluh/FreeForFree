<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

?>
<?php

$host="127.0.0.1";
$user="root";
$password="root";
$database="hack";
$port="3306";
$socket="";

$connect = mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_errno()){

}else{
  
}

?>

<?php


$res = file_get_contents('php://input');

$res = json_decode($res,true);

$dt= $res[0]['key'];









// upload to database


$query = "INSERT INTO imgname(name)VALUES('$data')";
$result=mysqli_query($connect,$query);
if($result){
  echo json_encode(array('msg'=>'done'));
  
}else{
  echo json_encode(array('msg'=>'error'));
}
?>