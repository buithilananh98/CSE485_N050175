<?php
//In ra dữ liệu từ from khi người dùng nhập vào
//var_dump($POST);
if(isset($_POST['username']) && isset($_POST['password'])){
if(isset($_POST['remember'])){
        //nếu người dùng lưu mk thì dùng cookies lưu trong 30 ngày
        setcookie("logged",$_POST['username'],time()+(30*86400),"/");
}else{
        //nếu không lưu thì dùng cookies lưu trong 30 ngày
        session_start();
$_SESSION['logged']=$_POST['username'];
    }
}else{
    $error="You have  to enter username and password";
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sinhvienhoctienganh";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST)
{
//gán
    $username=$_POST['username'];
    $password=$_POST['password'];
    // $username=mysqli_real_escape_string($conn,$_POST['$a']);
    // $password=mysqli_real_escape_string($conn,$_POST[' $b']);
    //Lấy ra bảng login
    $sql="select*from login"; 
    //gán cho nó 
    $result=mysqli_query($conn,$sql);
    // $result=mysqli_num_rows($query);
    while($row = mysqli_fetch_assoc($result)){
        if($row['username'] == $username && $row['password'] == $password){
            echo  "thanh cong";
            header('location:Hienthi.php');
        }else{
            echo" Tên hoặc mật khẩu không đúng";
        }
    }
}
?>


<html>
<head>
    <link rel="stylesheet"type="text/css" href="login.css"/>
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
<section id="gioithieu" class="section-intro p-y-3">
             <form method="POST" action="login.php">
	<fieldset  >
	    <legend >Login</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" ></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" ></td>
	    		</tr>
                <tr>
                <td></td>
              <td>
              <!-- Nếu check thì biến remember đc khai báo là 1 -->
                <input type="checkbox" name="remember" value="1"> Remember password?</td>
                </tr>
	    		<tr>
                <!-- tách bảng-->
                <td></td>
                <td>
	    			<input type="submit" value="Login"></td>
	    		</tr>
                <tr>
                <td></td>
                <td>
                <?php
                echo(isset($error))?$error:"";
                ?>
                </td>
                </tr>
	    	</table>
  </fieldset>
  </form>
</div>
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


 
         