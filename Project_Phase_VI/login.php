<?php
// Preliminary connection to database
$host = "spring-2018.cs.utexas.edu";
$user = "ncald";
$pwd = "ra3pNnEmSl"; // Note: PW is clear text!!
$dbs = "cs329e_ncald";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (empty($connect))
{
  die("mysqli_connect failed: " . mysqli_connect_error());
}

// Check if username/password combo exists
$u = $_POST["username"];
$p = $_POST["password"];

$result = mysqli_query($connect, "select * from credentials where email = '$u' and password = '$p'");
if (! $result[$num_rows]) {
    echo "That login information is invalid. Please try again.";
}

// Set logged-in status
setcookie("success", $_POST['user'], time() + 86400*1095, "/");
header("Location: ./");
?>
