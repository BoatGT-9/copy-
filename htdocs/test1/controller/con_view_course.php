<?php
include_once("../model/conDB.php");
include_once("../model/Course.php");
$obj_name = new Course();
$rs2 = $obj_name->getCourse();

?>
<table>
    <?php foreach($rs2 as $row)?>
    <td><?= $row["cs_name"];?></td>}