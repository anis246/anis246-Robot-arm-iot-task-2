<<?php 

$data = json_encode($_POST);
echo "$data";

$host = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";

$con = new mysqli($host, $username, $password, $dbname);

if (mysqli_connect_error()) {

    die('connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {

        $query1 = "UPDATE base SET value= '$data[2]' where ID=1";
        mysqli_query($con, $query1);

    


    $con->close();
}

?>