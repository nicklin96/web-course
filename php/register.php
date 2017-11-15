<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 8:04
 */
$name = "'".trim($_GET["gname"])."'";
$age = trim($_GET["gage"]);
$gender = "'".trim($_GET["ggender"])."'";
$email = "'".trim($_GET["gemail"])."'";

require("connect.php");

$exist_check = "SELECT Guest_ID FROM guest WHERE Guest_Name = $name AND Age = $age AND Gender = $gender AND E_mail = $email;";
if($result = mysqli_query($link,$exist_check)){
    if($result->num_rows != 0){
        echo "Your information has been registered already!";
        exit(1);
    }
}else{
    echo "Can't execute query to check existence. Error:".mysqli_error($link);
    exit(1);
}

$register_insert = "INSERT INTO guest(Guest_Name,Age,Gender,E_mail) VALUES($name,$age,$gender,$email);";
if(!mysqli_query($link,$register_insert)){
    echo "Can't execute query to insert new information. Error:".mysqli_error($link);
    exit(1);
}
mysqli_close($link);
echo "Success! $name can enjoy our parties now!";