<?php
print_r($_POST);
if($_POST){
    $a=$_POST['HoTen'];
    $b=md5($_POST['NgaySinh']);
    $c=$_POST['QueQuan'];
    $d=$_POST['SoDienThoai'];
    $e=$_POST['GioiTinh']; 
    $f=$_POST['KhoaHoc'];
   // $id=$_POST['STT'];
    $id=$_GET['id'];
// tạo kết nối và ktra
$conn = mysqli_connect('localhost', 'root', '','sinhvienhoctienganh') or die("lỗi");
// mysqli_select_db("sinhvienhoctienganh") or die("lỗi");
//$sql="UPDATE users SET HoTen='$a',NgaySinh='$b',QueQuan='$c',SoDienThoai='$d',GioiTinh='$e',KhoaHoc='$f' WHERE STT='$id";
$qr="UPDATE users SET  HoTen='$a',NgaySinh='$b',QueQuan='$c',SoDienThoai='$d',GioiTinh='$e',KhoaHoc='$f' WHERE id='$id' ";
//mysqli_query($conn, $sql);
if($qr){
header('location:Hienthi.php');
}
}
?>
