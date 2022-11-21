<?php
include 'connection.php';

if ($_POST['rec'] == 1) {
    $status = $_POST['rec'];
    $q = "select * from todoadmin WHERE status=$status ";
    $query = mysqli_query($con, $q);
} 
elseif ($_POST['rec'] == 0) {
    $status = $_POST['rec'];
    $q = "select * from todoadmin WHERE status=$status ";
    $query = mysqli_query($con, $q);
    //  print_r($query);
} else {

    $q = "select * from todoadmin ";
    
    $query = mysqli_query($con, $q);
}
?>

<table class="table table-striped">
    
    <tbody>
        <?php
        if ($row = mysqli_num_rows($query)>0 ) {
            while ($row = mysqli_fetch_assoc($query)) {
                // print_r($row);
        ?><tr>
                 
                    <td><?php echo $row['todo']; ?></td>
                    <td> <?php
                            if ($row['status'] == 1) {
                                echo '<p><a href="status.php?id=' . $row['id'] . '&status=0" class="btn btn-success">Complete</a></p>';
                            } else {
                                echo '<p><a href="status.php?id=' . $row['id'] . '&status=1" class="btn btn-danger">Pending</a></p>';
                            }
                            ?></td>
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
        }
        ?>

    </tbody>

</table>