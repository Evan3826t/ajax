<?php
// 處理查詢資料的請求
$psn="mysql:host=localhost;charset=utf8;dbname=ajax";
$pdo=new PDO($psn,"root","123");
// 撈出班級

//  sprintf 數字轉字串
$class = '1' . sprintf("%02d",$_GET["class"]);

$sql = "SELECT * FROM `students` WHERE substring(`class_num`,1,3)='$class'";
$row=$pdo->query($sql)->fetchAll();

foreach($row as $r){
    echo "<tr>";
    echo "<td>" . mb_substr($r['class_num'],3,2,"utf8") . "</td>";    
    echo "<td>" . $r['name'] . "</td>";
    echo "<td>" . $r['dept'] . "</td>";
    echo "<td>" . $r['birthday'] . "</td>";
    echo "<td>" . $r['uni_id'] . "</td>";
    echo "</tr>";


}
?>