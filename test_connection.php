<?php

include_once "config_login.php";

function openCon()
{
    $dsn = "mysql:dbname=" . DATABASE_NAME . ";host=" . SERVER_NAME;
    $link = new PDO($dsn, USER_NAME, PASSWORD);

    return $link;
}

function closeCon($a)
{
    $a = null;
}
//inovacion 

$con = openCon();
//operaciones CRUD
$sql = "select username,email from users";
$row=$con->query($sql);
foreach($row as $col){
    echo $col["username"];
    echo "<br>";
    echo $col['email'];
    echo "<br>";
    echo "------";
}


closeCon($con);
