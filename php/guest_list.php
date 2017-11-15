<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 8:48
 */
require "connect.php";

$all_guest_select = "select * from guest;";

$result = mysqli_query($link,$all_guest_select);
if($result->num_rows==0){
    echo "What a pity! Nobody registered their information yet.";
    exit(0);
}else{
    echo "<h4>guest table</h4>";
    echo "<p>$result->num_rows piece of information found</p>";
}
echo "<table><thead><tr><td>Name</td><td>Age</td><td>Gender</td><td>E mail</td><td>Select</td></tr></thead><tbody>";
while($row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td><input type='checkbox' name='like_guest[]' value='$row[0]'></td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($link);