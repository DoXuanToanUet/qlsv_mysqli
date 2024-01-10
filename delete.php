
<?php require_once "header.php";  ?>
<?php include "ketnoi.php";  ?>
<?php

$sql = '';
if (isset($_GET['id'])) {

    $id= $_GET['id'];
    $sql = "DELETE FROM sinhvien WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
      Delete success
      </div>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
?>

<?php


// var_dump($masv);



?>

   

<?php include "footer.php";  ?>