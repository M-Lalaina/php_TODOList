<?php

require("connect.php");

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sqlDelete = "DELETE FROM `tasks` WHERE id=$id";

    mysqli_query($connect, $sqlDelete);
}

header("location:home.php");

exit(0);
