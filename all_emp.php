<?php

$con = new mysqli("localhost", "root", "", "company");
$st = $con->prepare("select * from emp");
$st->execute(); 
$rs= $st->get_result();
$array = array();
while($row = $rs->fetch_assoc()){
    array_push($array, $row);
}
echo json_encode($array);
