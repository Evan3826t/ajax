<?php

include_once ("base.php");

$uni_id = $_GET['uni_id'];
$sql = "select * from students where uni_id='$uni_id'";

// 取出學生資料
$stu = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

// 轉為 json 格式
//  解碼為 json_decode
echo json_encode($stu);




?>