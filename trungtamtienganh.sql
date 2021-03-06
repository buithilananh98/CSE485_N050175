CREATE DATABASE sinhvienhoctienganh;
/*Tạo bảng khóa học ngữ pháp cơ bản*/
CREATE TABLE khoahocnguphapcoban(
    maHV int not null PRIMARY KEY,
    tenHV varchar(30),
    ngaysinh date,
    diachi varchar(30),
    sodienthoai int,
    gioitinh varchar(30)
    )
/* Tạo bảng khóa giao tiếp cơ bản*/
CREATE TABLE khoagiaotiepcoban(
maHV int not null PRIMARY KEY,
tenHV varchar(30)
ngaysinh date,
diachi varchar(30),
sodienthoai int,
gioitinh varchar(30)
)

* Tạo bảng khóa Toeic
CREATE TABLE khoaToeic(
maHV int not null PRIMARY KEY,
tenHV varchar(30),
ngaysinh date,
diachi varchar(30),
sodienthoai int,
gioitinh varchar(30)
)

/* Tạo bảng Toeic_captoctheoyeucau*/ 
CREATE TABLE Toeic_captoctheoyeucau(
maHV int not null PRIMARY KEY,
tenHV varchar(30),
ngaysinh date,
diachi varchar(30),
sodienthoai int,
gioitinh varchar(30)
 )
 
/* Thêm dữ liệu cho bảng khóa học ngữ pháp cơ bản*/
INSERT INTO khoahocnguphapcoban(maHV, tenHV, ngaysinh, diachi, sodienthoai, gioitinh) VALUES (2,bui thi lan anh, 2000-01-01, nam dinh, 10000, nu);
INSERT INTO khoahocnguphapcoban(maHV, tenHV, ngaysinh, diachi, sodienthoai, gioitinh) VALUES (3, nguyen ngoc anh, 2000-01-02,ha noi, 10001, nu);
INSERT INTO khoahocnguphapcoban(maHV, tenHV, ngaysinh, diachi, sodienthoai, gioitinh) VALUES (4, bui gia linh, 2000-01-03, ha noi, 10002, nu);
INSERT INTO khoahocnguphapcoban(maHV, tenHV, ngaysinh, diachi, sodienthoai, gioitinh) VALUES (5, tran van kien, 2000-01-04, thai binh, 10003, nam);
INSERT INTO khoahocnguphapcoban(maHV, tenHV, ngaysinh, diachi, sodienthoai, gioitinh) VALUES (6, nguyen thai son, 2000-01-05,hai phong, 10004, nam);

/* Thêm dữ liệu vào bảng khóa học giao tiếp cơ bản*/
INSERT INTO ‘khoahocgiaotiepcoban’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘7’, ‘nguyen cong dung’, ‘2000-01-06’, ‘thai binh’, ‘10005’, ‘nam’);
INSERT INTO ‘khoahocgiaotiepcoban’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘8’, ‘nguyen van dat’, ‘2000-01-07’, ‘nghe an’, ‘10006’, ‘nam’);
INSERT INTO ‘khoahocgiaotiepcoban’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘9’, ‘pham thi ngoc ha’, ‘2000-01-08’, ‘hai duong ‘10007’, ‘nu’);
INSERT INTO ‘khoahocgiaotiepcoban’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘10’, ‘nguyen thanh hai’, ‘2000-01-09’, ‘ha noi’, ‘10008’, ‘nam’);
INSERT INTO ‘khoahocgiaotiepcoban’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘11’, ‘dang thi hien’, ‘2000-01-10’, ‘ha noi’, ‘10009’, ‘nu’);

/* Thêm dữ liệu vào bảng khóa Toeic*/
INSERT INTO ‘khoaToeic’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘12’, ‘nguyen minh quyet’, ‘2000-01-11’, ‘ha noi’, ‘10010’, ‘nam’);
INSERT INTO ‘khoaToeic’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘13’, ‘cao minh huy’, ‘2000-01-12’, ‘thai binh’, ‘10011’, ‘nam’);
INSERT INTO ‘khoaToeic’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘14’, ‘nguyen trung hieu’, ‘2000-01-13’, ‘thanh hoa’, ‘10012’, ‘nam’);
INSERT INTO ‘khoaToeic’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘15’, ‘nguyen dinh hung’, ‘2000-01-14’, ‘nguyen dinh hung’, ‘10013’, ‘nam’);
INSERT INTO ‘khoaToeic’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘16’, ‘pham hoang hung’, ‘2000-01-15’, ‘ha noi’, ‘10014’, ‘nam’);

/* Thêm dữ liệu vào bảng Toeic_captoctheoyeucau*/

INSERT INTO ‘Toeic_captoctheoyeucau’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘17’, ‘le van khanh’, ‘2000-01-16’, ‘ha noi’, ‘10015’, ‘nam’);
INSERT INTO ‘Toeic_captoctheoyeucau’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘18’, ‘vu van lap’, ‘2000-01-17’, ‘hai phong’, ‘10016’, ‘nam’);
INSERT INTO ‘Toeic_captoctheoyeucau’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘19’, ‘luu thi my linh, ‘2000-01-18’, ‘hung yen’, ‘10017’, ‘nu’);
INSERT INTO ‘Toeic_captoctheoyeucau’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘20’, ‘nguyen thuy trang’, ‘2000-01-19’, ‘ha nam’, ‘10000’, ‘nu’);
INSERT INTO ‘Toeic_captoctheoyeucau’(‘maHV’, ‘tenHV’, ‘ngaysinh’, ‘diachi’, ‘sodienthoai’, ‘gioitinh’) VALUES (‘21’, ‘hoang thi trang’, ‘2000-01-20’, ‘ha noi’, ‘10020’, ‘nu’);




