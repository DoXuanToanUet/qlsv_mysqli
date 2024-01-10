
<?php require_once "header.php";  ?>
<?php include "ketnoi.php";  ?>
<?php

if (isset($_GET['id'])) {

    $id= $_GET['id'];
    $sql = "SELECT * FROM sinhvien WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    if (isset($_POST['update'])) {

        $masv = $_POST['masv'] ? $_POST['masv'] : '';
        $hoten = $_POST['hoten'] ? $_POST['hoten'] : '';
        $lop = $_POST['lop'] ? $_POST['lop'] : '';
        $diemtb = $_POST['diemtb'] ? $_POST['diemtb'] : '';
        $sql = "UPDATE sinhvien SET masv='$masv', hoten='$hoten', lop='$lop', diem=$diemtb WHERE id=$id";
       
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success' role='alert'>
           UPDATE thanh cong
          </div>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }
}

?>

<?php


// var_dump($masv);



?>

    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Ma sinh vien</label>
            <input type="text" class="form-control" value="<?=  $row['masv'] ? $row['masv'] : ''; ?>" name="masv" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ho ten </label>
            <input type="text" name="hoten" value="<?=  $row['hoten'] ? $row['hoten'] : '';?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Lop </label>
            <input type="text" name="lop" value="<?=  $row['lop'] ? $row['lop'] : ''; ?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Diem trung binh </label>
            <input type="number" name="diemtb" value="<?=  $row['diem'] ? $row['diem'] : ''; ?>"  class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>



<?php include "footer.php";  ?>
