<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";

$obj_name=new Course();
$rs2= $obj_name->getCourse();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
    $id = $_POST['id'];
    $name = $_POST['name'];
    $img = $_POST['img'];
    $date = $_POST['date'];
    $wallet = $_POST['wallet'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $id;

    echo $name;

    echo $img;

    echo $date;
    
    echo $wallet;
    
  }
  $obj_name=new Course();
  $rs2= $obj_name->addCourse($id,$name,$img,$date,$wallet);
    header("location: ../index.php");
    exit(0);
}
?>