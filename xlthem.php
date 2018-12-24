<?php
var_dump($_POST);
    $a=$_POST['HoTen'];
    $b=md5($_POST['NgaySinh']);
    $c=$_POST['QueQuan'];
    $d=$_POST['SoDienThoai'];
    $e=$_POST['GioiTinh']; 
    $f=$_POST['KhoaHoc'];


// tạo kết nối và ktra
$conn = mysqli_connect('localhost', 'root', '','sinhvienhoctienganh') or die("lỗi");
// mysqli_select_db("sinhvienhoctienganh") or die("lỗi");
$qr="insert into users(HoTen,NgaySinh,QueQuan,SoDienThoai,GioiTinh,KhoaHoc) VALUES ('$a','$b','$c','$d','$e','$f')";
mysqli_query($conn, $qr);
//$sql = "INSERT INTO users (HoTen,NgaySinh,QueQuan,SoDienThoai,GioiTinh,KhoaHoc)
   // VALUES ('$a','$b','$c','$d','$e','$f')";
    if($qr){
        header("location:Hienthi.php");
    }
?>