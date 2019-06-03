<?php

$con = new mysqli("localhost", "root", "", "company");
$st = $con->prepare("select * from emp where id = ?");
$st->bind_param("i", $_GET["id"]);
$st->execute(); 
$rs= $st->get_result();
$row = $rs->fetch_assoc();
echo json_encode($row);