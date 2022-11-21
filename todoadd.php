<?php

include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>todo app</title>
</head>

<body>
    <div class="container">
        <form action="action.php" method="post">
            <h1>Todo App</h1>
            <div id="line"></div>
            <div class="task-input">
                <input type="text" id="add-task" name="todo" placeholder="Add Task..." value="">
                <button type="submit" class="btn" id="add-btn" name="add">Add</button>
            </div>

        </form>

        <ul class="nav nav-tabs mb-4 pb-2 mt-4" id="ex1" role="tablist">
            <li class="nav-item mr-4" role="presentation">
                <a class="nav-link list active" onclick="abc(this.id)" id="">All</a>
            </li>
            <li class="nav-item mr-4" role="presentation">
                <a class="nav-link list" id="0" onclick="abc(this.id)">Pending</a>
            </li>
            <li class="nav-item mr-4" role="presentation">
                <a class="nav-link list" id="1" onclick="abc(this.id)">Completed</a>
            </li>
        </ul>

        <div class="todo">

            <table class="table table-striped">

                <tbody>
                    <?php
                    include 'connection.php';
                    $q = "select * from todoadmin";
                    $query = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr align="center">
                            <td><?php echo $row['todo']; ?></td>
                            <td>
                                <?php
                                if ($row['status'] == 1) {
                                    echo '<p><a href="status.php?id=' . $row['id'] . '&status=0" class="btn btn-success">Complete</a></p>';
                                } else {
                                    echo '<p><a href="status.php?id=' . $row['id'] . '&status=1" class="btn btn-danger">Pending</a></p>';
                                }
                                ?>
                            </td>
                            <td><?php
                                if ($row['status'] == 1) {
                                    echo '<p ><a href="status.php?id=' . $row['id'] . '&status=0" class="btn btn-success"><i class="fa fa-check"></i></a></p>';
                                } else {
                                    echo '<p><a href="status.php?id=' . $row['id'] . '&status=1" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a></p>';
                                }
                                ?></td>
                            <td><button class="btn-danger btn"><a href="action.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        function abc(e) {
            // debugger;
            $.ajax({
                type: "POST",
                url: "list.php",
                data: {
                    rec: e,
                    list: 'list'
                },
                success: function(result) {
                    $('.todo').html(result);
                    //  console.log(result);
                    // alert(result);
                }

            });
        }
    </script>

</body>

</html>