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
$sql="Update users SET HoTen='',NgaySinh='',QueQuan='',SoDienThoai='',GioiTinh='',KhoaHoc='' WHERE STT=$id";
if($conn->query($sql)==TRUE){
    echo" Record updated successfully";
}
else{
    echo "Error updating record ";
}
?>
