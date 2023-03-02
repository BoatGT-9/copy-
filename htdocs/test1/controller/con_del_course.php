<?php
echo $c_id = $_GET["id"];

include_once "../model/ConDB.php";
include_once("../model/Coures.php");
$odj_name = new Course();
echo $rs2 = $odj_name->delCourse($cs_id);
?>