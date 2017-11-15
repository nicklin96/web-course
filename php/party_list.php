<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/10/26
 * Time: 8:48
 */
require "connect.php";

$all_party_select = "select * from party";

$result = mysqli_query($link,$all_party_select);
if($result->num_rows==0){
    echo "What a pity! There is no party information yet.";
    exit(0);
}else{
    echo "<h4>party table</h4>";
    echo "<p>$result->num_rows piece of information found</p>";
}
echo "<table><thead><tr><td>Time</td><td>Place</td><td>Host Name</td><td>Select</td></tr></thead><tbody>";
while($row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td><input type='radio' name='like_party' value='$row[0]'></td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($link);