
<?php require_once "header.php";  ?>
<?php include "ketnoi.php";  ?>
<?php

$sql = "SELECT * FROM sinhvien order by id";
$result = mysqli_query($conn, $sql);
?>

<?php


// var_dump($masv);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
        // $row = mysqli_fetch_assoc($result);
        ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Ma sinh vien</th>
            <th scope="col">Ho ten</th>
            <th scope="col">Lop</th>
            <th scope="col">Diem</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i=0;
                while($row = mysqli_fetch_assoc($result)) {
                    // echo "<pre>";
                    // var_dump($row);
                    // echo "</pre>";
                    $i++;
                    ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['masv']; ?></td>
                            <td><?= $row['hoten']; ?></td>
                            <td><?= $row['lop']; ?></td>
                            <td><?= $row['diem']; ?></td>
                            <td>
                                <a href="sua.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Sua</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Xoa</a>
                            </td>

                        </tr>
                    <?php
                  }
               
            ?>
        </tbody>
        </table
    <?php
   
  } else {
    echo "0 results";
  }

?>




<?php include "footer.php";  ?>