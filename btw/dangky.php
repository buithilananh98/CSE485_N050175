<html>
<head>
    <link rel="stylesheet"type="text/css" href="dky1.css"/>
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
                </div>
                </ul>
            </nav>
            <div id="slide">
                    <div class="container-flud"></div>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="anhdau.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img id="anhsau" class="d-block w-100" src="anhsau.png" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img id="anhcuoi"  src="anhcuoi.jpg" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                          </div>
                 </div>
  <section>
                    <div id="c" >
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sinhvienhoctienganh";

// tạo kết nối và ktra
$conn = mysqli_connect($servername, $username, $password,$database) ;
// truy vấn danh mục khoatoeic
$sql="SELECT * from xuly";
$query=  mysqli_query($conn,$sql);
?>

            <form action="Qlydangky.php" method="post"> 
            <h3 style="color:red">Sign up for a free consultation</h3>
            HoTen:<input type="text" name="HoTen"><br>
            NgaySinh:<input type="text" name="NgaySinh"><br>
            QueQuan:<input type="text" name="QueQuan"><br>
            SoĐienThoai:<input type="text" name="SoDienThoai"><br>
            GioiTinh:<input type="text" name="GioiTinh"><br>
            KhoaHoc:<input type="text" name="KhoaHoc"><br>
            <input type ="submit" value="submit"/>
            <input type="reset" value="Reset" />


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