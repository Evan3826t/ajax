<?php
// 處理查詢資料的請求
// 撈出班級
include_once("base.php");
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
    // 自創屬性 data-*  把 uid 放入其中
    echo "<td><button class='edit-user' data-edit='".$r['uni_id']."'>編輯</button></td>";
    echo "<td><button class='del-user' data-del='".$r['uni_id']."'>刪除</button></td>";
    
    echo "</tr>";


}
?>