<?php
require("connect.php");
require("insert.php");
require("select.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>users</title>
</head>

<body>
    <main class="m-5 p-5 d-flex ">

        <div class=" w-100 text-center">

            <div class="heading text-center pb-5">
                <h1 class="text-white">TODO_List APP</h1>
            </div>

            <form action="" method="post" class="text-white pb-3">
                <!-- add Tasks -->

                <div class="mb-3 d-flex justify-content-center">
                    <input type="text" id="task" name="task" class="form-control w-100" placeholder="Enter your Task here">

                    <button class="px-3 w-25">Add Task</button>
                </div>

                <!-- / -->
            </form>

            <div class="showTasks text-white">
                <table>
                    <thead class="text-black">
                        <th>id</th>
                        <th>TO DO</th>
                        <th>Actions</th>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data as $value) {
                        ?>
                            <tr>
                                <td><?= $value["id"] ?></td>
                                <td><?= $value["task"] ?></td>
                                <td>
                                    <a href="delete.php?id=<?= $value['id'] ?>" class="text-white btn bg_delete mx-2"><span>X</span></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>