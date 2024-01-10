
<?php require_once "header.php";  ?>
<?php include "ketnoi.php";  ?>
<?php

$sql = '';
if (isset($_POST['add'])) {

    $masv = $_POST['masv'] ? $_POST['masv'] : '';
    $hoten = $_POST['hoten'] ? $_POST['hoten'] : '';
    $lop = $_POST['lop'] ? $_POST['lop'] : '';
    $diemtb = $_POST['diemtb'] ? $_POST['diemtb'] : '';

    $sql = "INSERT INTO sinhvien (masv, hoten, lop, diem) VALUES ('$masv', '$hoten', '$lop', $diemtb)";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
       Them thanh cong
      </div>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
?>

<?php


// var_dump($masv);



?>

    <form action="them.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Ma sinh vien</label>
            <input type="text" class="form-control" name="masv" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ho ten </label>
            <input type="text" name="hoten" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Lop </label>
            <input type="text" name="lop" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Diem trung binh </label>
            <input type="number" name="diemtb" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Them sinh vien</button>
    </form>



<?php include "footer.php";  ?>