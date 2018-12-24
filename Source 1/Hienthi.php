<html>
<head>
    <link rel="stylesheet"type="text/css" href="trungtamb.css"/>
    <script type="text/javacript> src="http://code.jquery.com/jquery-1.8.3.min.js" ></script>
    <script type="text/javacript> src="slider.js" ></script>

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<meta charset="UTF-8">
	<title>web</title>
</head>
<body>
	<header id="he">
        <a href="trungtama.php">
                <ul>
                        <li><a href="trungtama.php" style="color:white"><img id="Home" src="Home.png" alt="Home">Trung tâm</a></li>
                        <li><a href="sugia.php" style="color:white">Đội ngũ sứ giả</a></li>
                        <li><a href="vinhdanhhv.php" style="color:white">Vinh danh học viên</a></li>
                        <li><a href="khaigiang.php" style="color:white">Lịch khai giảng</a></li>
                        <li><a href="ppdaotao.php" style="color:white">Các phương pháp đào tạo</a></li>
                    </ul>
                </header>
        </a>
        <nav id="menu">
                <ul>
                    <img id="ten" src="anhlogo.jpg" alt="ten">
                    <img id="so1" src="so1vn.jpg" alt="so1">
                    <a href="dangky.php"style="text-decoration: none; padding-left: 210px;" <strong><span style="color:#FF0000;"><b>❤</b></span> </strong>Đăng ký</a>/<a href="login.php" style="text-decoration: none;" <strong><span style="color:#FF0000;"><b>◆</b></span> </strong>Đăng nhập</a>
                    /<a href="trungtama.php" style="text-decoration: none;" <strong><span style="color:#FF0000;"><b>❤</b></span> </strong>Đăng xuất</a>
                </div>
                </ul>
            </nav>
            <section>
<div class="table-responsive">
<table class="course-table table table-bordered text-middle m-b-0">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sinhvienhoctienganh";

// tạo kết nối và ktra
$conn = mysqli_connect($servername, $username, $password,$database) ;
// truy vấn danh mục khoatoeic
$sql="SELECT * from khoatoeic";
$query=  mysqli_query($conn,$sql);
// lúc này $query chứa tập hợp dữ liệu trả về cần dùng vòng lặp để đọc dl theo từng dongf
$num=mysqli_num_rows($query);
if($num>0){
    while($row=mysqli_fetch_assoc($query)){
        ?>
             <tr>
<td><?php echo $row ['maHV']?></td>
<td><?php echo $row ['tenHV']?></td>
<td><?php echo $row ['ngaysinh']?></td>
<td><?php echo $row ['diachi']?></td>
<td><?php echo $row ['sodienthoai']?></td>
<td><?php echo $row ['gioitinh']?></td>
<td><a href=""title="">Edit</td>
</tr>
<?php
    }
}
?>

</div>
</table>
</section>
                <footer>
                    <h4 id="Ten">Trung Tâm Anh Ngữ Julia</h4>
                    <h4 id="DiaChi">Số 7/35 Tây sơn - Quang Trung - Đống Đa-Hà Nội</h4>
                    <h4 id="DT">Hotline:0389855550</h4> 
                    <h4 id= "DD" style="color:white">Đại diện: Bùi Thanh Tùng - Giám Đốc</h4>
                    <h4 style="color:white">Đơn Vị Chủ Quản: Công Ty Cổ Phần MarNET</h4>
                    <h4 style="color:white"> Giấy chứng nhận Đăng ký doanh nghiệp số 0106114568</h4>
                </footer>
            
            </body>
            </html>
  