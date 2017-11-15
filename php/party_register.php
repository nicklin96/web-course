<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 14:32
 */

$time = "'".trim($_GET["ptime"])."'";
$hostname = "'".trim($_GET["phname"])."'";
$place = "'".trim($_GET["pplace"])."'";

require "connect.php";

$exist_check = "SELECT Party_Num FROM party WHERE 'Time' = $time AND Place = $place AND Host_Name = $hostname;";
if($result = mysqli_query($link,$exist_check)){
    if($result->num_rows != 0){
        echo "Your party has been registered already!";
        exit(1);
    }
}else{
    echo "Can't execute query to check existence. Error:".mysqli_error($link);
    exit(1);
}

$register_insert = "INSERT INTO party(Time,Place,Host_Name) VALUES($time,$place,$hostname);";
if(!mysqli_query($link,$register_insert)){
    echo "Can't execute query to insert new party information. Error:".mysqli_error($link);
    exit(1);
}
mysqli_close($link);
echo "Success!";