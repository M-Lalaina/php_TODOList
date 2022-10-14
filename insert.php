<?php

if (isset($_POST["task"])) {

    $task = $_POST["task"];

    $sql = "INSERT INTO `tasks`(task) VALUES('$task')";

    mysqli_query($connect, $sql);
}
