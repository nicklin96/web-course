<?php

$firstName = $_GET["Personal_FirstName"];
$lastName = $_GET["Personal_LastName"];
$age = $_GET["Personal_Age"];
$sex = $_GET["Personal_Sex"];
$id = $_GET["Personal_IDNumber"];
$watch = $_GET["watch"];
$holiday = $_GET["holiday"];
$knowledge = $_GET["knowledge"];
$chat = $_GET["chat"];
if(empty($chat)){
    $chat = "You prefer silence!";
}
$data = array($firstName,$lastName,$age,$sex,$id,$watch,$holiday,$knowledge,$chat);
$item = array("First Name","Last Name","Age","Sex","ID","Watch","Holiday","Knowledge","chat");

echo "<h4>This is the information you submitted just now!</h4>";
echo "<table>";
echo "<thead><tr><td>ITEM</td><td>Input</td></tr></thead>";
echo "<tbody>";
for($i=0;$i<sizeof($data);$i++){
    echo "<tr>";
    echo "<td>$item[$i]</td>";
    echo "<td>$data[$i]</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
