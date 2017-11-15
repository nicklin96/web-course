<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 13:20
 */

$link = mysqli_connect("localhost",
                        "usr_2017_45",
                        "123456",
                        "db_2017_45",
                        "3306");
if(!$link){
    echo "Can't connect to MySQL. Error:".mysqli_connect_error();
    exit(1);
}