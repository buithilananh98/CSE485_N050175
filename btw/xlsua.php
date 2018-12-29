
<!--print_r($_POST);-->
<?php
if($_POST){
    $id=$_GET['id'];
    $a=$_POST['HoTen'];
    $b=$_POST['NgaySinh'];
    $c=$_POST['QueQuan'];
    $d=$_POST['SoDienThoai'];
    $e=$_POST['GioiTinh']; 
    $f=$_POST['KhoaHoc'];
   // $id=$_POST['STT'];
   
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