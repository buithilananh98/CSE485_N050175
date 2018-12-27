 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sinhvienhoctienganh";
$id = $_GET['id'];
// tạo kết nối và ktra
$conn = mysqli_connect($servername, $username, $password,$database) ;
// truy vấn danh mục khoatoeic
$sql="DELETE FROM users WHERE STT=$id";
$query =  mysqli_query($conn,$sql);

  if($sql){
      header('location:Hienthi.php');
  }
  ?>
