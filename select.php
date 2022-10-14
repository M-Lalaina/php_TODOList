<?php

$select = "SELECT * FROM `tasks`";

$query = mysqli_query($connect, $select);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
