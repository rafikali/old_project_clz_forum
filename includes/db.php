<?php ob_start();

// $db['db_host'] = "localhost";
// $db['db_user'] = "root";
// $db['db_pass'] = "secret123";
// $db['db_name'] = "np_forum";

$hostname = "localhost";
$username = "root";
$password = "secret123";
$database = "np_forum";


// foreach ($db as $key => $value) {
//     define(strtoupper($key), $value);
// }








$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
