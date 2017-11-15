<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 10:49
 */

$guest_list = $_GET['like_guest'];
$party_num = $_GET['like_party'];
require "connect.php";
foreach ($guest_list as $guest){
    $exist_check = "select count(*) from guest_party where Guest_ID = $guest and Party_Num = $party_num;";
    if($result = mysqli_query($link,$exist_check)){
        $row = mysqli_fetch_row($result);
        if($row[0]==0)
            continue;
    }else{
        echo "Exist check failed. Error: ".mysqli_error($link);
        exit(1);
    }
    $insert_party_guest = "delete from guest_party where Guest_ID = $guest and Party_Num = $party_num;";
    if(!mysqli_query($link,$insert_party_guest)){
        echo "Can't delete participation information. Error:".mysqli_error($link);
        exit(1);
    }else{
        echo "success!\n";
    }
}
