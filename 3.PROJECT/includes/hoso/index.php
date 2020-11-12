<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<title>Xét tuyển học bạ</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<!-- Header -->
		<div class="header">
			<h2 >Thông tin hồ sơ</h2>
		</div>

		<div class="row">
			<!-- Menu tùy chọn -->
			<div class="col-md-3">
				<div class="card">
					<h5 class="card-header  bg-danger fa fa-book-reader ">
						<a href="http://www.tlu.edu.vn/Portals/0/2020-6/CS%20HN_1%20(1)-da%20chuyn%20di.pdf?ver=2020-07-02-164537-460" target="cuaso" style="color: black;" >Điều kiện xét tuyển</a>
					</h5>
					<h5 class="card-header bg-success fa fa-address-book ">
						<a href="https://tuyensinhso.vn/school/dai-hoc-thuy-loi.html" style="color: black;">Ngành xét tuyển</a>
					</h5>
					<h5 class="card-header bg-warning fa fa-envelope-open ">
						<a href="https://tuyensinhso.vn/school/dai-hoc-thuy-loi.html" style="color: black;">Hồ sơ và cách đăng kí</a>
					</h5>
					<h5 class="card-header bg-info title-menu fa fa-user-plus">
						<a href="form-xettuyen.php" target="cuaso" style="color: black;">Đăng kí xét tuyển</a>
					</h5>
					<h5 class="card-header bg-light fa fa-graduation-cap">
						<a href="#" style="color: black;">Hướng dẫn nhập học</a>
					</h5>
				</div>
			</div>

			<!-- Form xét tuyển học bạ -->
			<div class="col-md-9">
				<form name="form-xettuyen" method="POST" action="">
					<!-- Thông tin hồ sơ -->
					<div class="container-fluid form-xt" style="border: 1px solid black;">
						<!-- Hàng 1 -->
						<div class="row element-row">
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" >Họ tên</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập tên" name="hoten" > 
							</div>
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Giới tính</div>
								</div>
								<select class=" form-control col-md" name="gioitinh" >
									<option value="" disabled selected>-Chọn-</option>
									<option>Nam</option>
									<option>Nữ</option>
								</select>

							</div>
						</div>

						<!-- Hàng 2 -->
						<div class="row element-row">
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Ngày sinh</div>
								</div>
								<input type="date" class="form-control  col-md" placeholder="Nhập ngày tháng năm sinh" name="ngaysinh"> 
							</div>
							<div class="input-group col-md-3">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Dân tộc</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập tên" name="dantoc"> 
							</div>
							<div class="input-group col-md-3">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Tôn giáo</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập tên" name="tongiao"> 
							</div>
						</div>

						<!-- Hàng 3 -->
						<div class="row element-row">
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Nơi sinh</div>
								</div>
								<select class=" form-control col-md" name="noisinh" id="chonTinh">
									<option value="" disabled selected>-Chọn tỉnh-</option>
								</select>
							</div>
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Năm tốt nghiệp</div>
								</div>
								<select class=" form-control col-md" id="ddlYears" name="namtotnghiep">
									<option value="" disabled selected>-Chọn-</option>			
								</select>
							</div>
						</div>

						<!-- Hàng 4 -->
						<div class="row element-row">
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Học lực lớp 12</div>
								</div>
								<select class=" form-control col-md" name="hocluclop12" >
									<option value="" disabled selected>-Chọn-</option>
									<option>Giỏi</option>
									<option>Khá</option>
									<option>Trung bình</option>
									<option>Yếu</option>
								</select>
							</div>
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Hạnh kiểm lớp 12</div>
								</div>
								<select class=" form-control col-md" name="hanhkiemlop12">
									<option value="" disabled selected>-Chọn-</option>
									<option>Tốt</option>
									<option>Khá</option>
									<option>Trung Bình</option>
									<option>Yếu</option>
								</select>
							</div>
						</div>

						<!-- Hàng 5 -->
						<div class="row element-row">
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Số CMND/CCCD</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Số CMND" name="socmnd"> 
							</div>
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Ngày cấp</div>
								</div>
								<input type="date" class="form-control  col-md" placeholder="Ngày cấp" name="ngaycap"> 
							</div>
							<div class="input-group col-md-4">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Nơi cấp</div>
								</div>
								<select class=" form-control col-md" name="noicap" id="chonTinh">
									<option value="" disabled selected>-Chọn tỉnh-</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
						</div>

						<!-- Hàng 6 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Hộ khẩu thường trú</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập hộ khẩu thường trú" name="hokhauthuongtru"> 
							</div>
						</div>
						<p><i>  Ghi rõ tên tỉnh(thành phố), huyện(Quận), xã(phường) vào ô hộ khẩu thường trú</i></p>
						<p><b>  Nơi học THPT hoặc tương đương(Ghi tên trường và nơi trường đóng: huyện(quận), tỉnh(Thành phố)): </b></p>


						<div class="row" >
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-5"></div>
									<div class="col-md-3" style="text-align: center;margin-bottom: 0px;"><b>Mã tỉnh</b></div>
									<div class="col-md-4" style="text-align: center;padding-left: 30px;"><b>Tên tỉnh/TP</b></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6" style="text-align: center;"><b>Mã trường</b></div>
									<div class="col-md-6" style="text-align: center;"><b>Tên trường</b></div>
								</div>
							</div>
						</div>
						<!-- hàng 7 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Năm lớp 10</div>
								</div>

								<input type="text" class="form-control input-group-text col-md" placeholder="" name="matinhlop10"> 
								<select class=" form-control col-md" name="tentinhlop10" id="chonTinh">
									<option value="" disabled selected>-Chọn tỉnh-</option>
								</select>
								<input type="text" class="form-control input-group-text col-md" placeholder="" name="matruonglop10"> 
								<input type="text" name="tentruong" class="col-md" name="tentruonglop10">
							</div>
						</div>
						<!-- hàng 8 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Năm lớp 11</div>
								</div>
								<input type="text" class="form-control input-group-text col-md"  name="matinhlop11"> 
								<select class=" form-control col-md" name="tentinhlop11" id="chonTinh">
									<option value="" disabled selected>-Chọn tỉnh-</option>
								</select>
								<input type="text" class="form-control input-group-text col-md"  name="matruonglop11"> 
								<input type="text" name="tentruong" class="col-md" name="tentruonglop11">
							</div>
						</div>
						<!-- hàng 9 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Năm lớp 12</div>
								</div>
								<input type="text" class="form-control input-group-text col-md" name="matinhlop12"> 
								<select class=" form-control col-md" name="tentinhlop12" id="chonTinh">
									<option value="" disabled selected>-Chọn tỉnh-</option>
								</select>
								<input type="text" class="form-control input-group-text col-md"  name="matruonglop12"> 
								<select name=slist class=" form-control col-md" name="tentruonglop12" id="chontinh">
									
								</select>

							</div>
						</div>
						<!-- hàng 10 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<p class="col-md">Đối tượng ưu tiên tuyển sinh(Thuộc đối tượng nào thì chọn đối tượng bên phải</p>
								<select class=" form-control col-md-2 chonTinh" name="doituonguutien">
									<option value="" disabled selected>-Chọn-</option>
								</select>
							</div>
						</div>
						<!-- hàng 11 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<p class="col-md">Khu vực ưu tiên tuyển sinh(Thuộc khu vực nào thì chọn kí hiệu của khu vực(KV1,KH2-NT,KV2,KV3)vào ô khu vực ưu tiên)</p>
								<select class=" form-control col-md-2 chonTinh"  name="khuvucuutien"  >
									<option value="" disabled selected>-Chọn-</option>
								</select>
							</div>
						</div>

						<!-- hàng 12 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Địa chỉ liên hệ</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập hộ khẩu thường trú" name="diachilienhe"> 
							</div>
						</div>
						<!-- hàng 13 -->
						<div class="row element-row">
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Điện thoại thí sinh</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập hộ khẩu thường trú" name="sdtthisinh"> 
							</div>
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<div class="input-group-text  col-md" id="btnGroupAddon">Điện thoại phụ huynh</div>
								</div>
								<input type="text" class="form-control  col-md" placeholder="Nhập hộ khẩu thường trú" name="sdtphuhuynh"> 
							</div>
						</div>
					</div>
					<!-- Thông tin đăng kí -->
					<div class="container">
						<div class="row form-dk">
							<div class="container title-dk">
								<h2 class="card-form">Thông tin đăng kí</h2>
							</div>
							<div class="col-md-12 form-dk-1">
								<p>Sau khi đã đọc và hiểu rõ các quy định về tiêu chí và điều kiện xét tuyển của nhà Trường, tôi đồng ý xét tuyển học bạ vào trình độ Đại học như sau:(Chọn phương thức xét tuyển)</p>
								<input type="checkbox" name="xettuyen1" > <b>Xét tuyển bằng tổng điểm Trung bình lớp 12 theo tổ hợp 3 môn</b><br/>
								<input type="checkbox" name="xettuyen2"> <b>Xét tuyển bằng tổng điểm Trung bình 3 học kì(HK1, HK2 năm lớp 11, HK1 năm lớp 12)</b><br/>
								<b>Lưu ý:</b>Thí sinh có thể chọn một trong hai hoặc chọn cả hai để nâng cao cơ hội trúng tuyển <br/>
								<input type="submit" name="submit" class="btn btn-primary btn-lg submit" value="Nộp hồ sơ">
								
							</div>
							
							<?php 
							require('Config.php'); echo "string";
							if (isset($_POST['submit']) ) {
										# code...
								$hoten= $_POST['hoten'];
								$gioitinh = $_POST['gioitinh']; 
								$ngaysinh= $_POST['ngaysinh'];
								$dantoc= $_POST['dantoc'];
								$tongiao= $_POST['tongiao'];
								$noisinh=$_POST['noisinh'];
								$namtotnghiep= $_POST['namtotnghiep'];
								$hocluclop12= $_POST['hocluclop12'];
								$hanhkiemlop12= $_POST['hanhkiemlop12'];
								$socmnd= $_POST['socmnd'];
								// $ngaycap= $_POST['ngaycap'];
								// $noicap= $_POST['noicap'];
								// $hokhauthuongtru= $_POST['hokhauthuongtru'];
								// $matinhlop10= $_POST['matinhlop10'];
								// $matinhlop11= $_POST['matinhlop11'];
								// $matinhlop12= $_POST['matinhlop12'];
								// $tentinhlop10= $_POST['tentinhlop10'];
								// $tentinhlop11= $_POST['tentinhlop11'];
								// $tentinhlop12= $_POST['tentinhlop12'];
								// $matruonglop10= $_POST['matruonglop10'];
								// $matruonglop11= $_POST['matruonglop11'];
								// $matruonglop12= $_POST['matruonglop12'];
								// $tentruonglop10= $_POST['tentruonglop10'];
								// $tentruonglop11= $_POST['tentruonglop11'];
								// $tentruonglop12= $_POST['tentruonglop12'];
								// $doituonguutien= $_POST['doituonguutien'];
								// $khuvucuutien= $_POST['khuvucuutien'];
								// $diachilienhe= $_POST['diachilienhe'];
								// $sdtthisinh= $_POST['sdtthisinh'];
								// $sdtphuhuynh= $_POST['sdtphuhuynh'];

								$sql=" INSERT INTO thongtinhoso(Hoten,Gioitinh,Ngaysinh,Dantoc,Tongiao,Noisinh,Namtotnghiep,Hocluclop12,Hanhkiemlop12,SoCMND) VALUES('$hoten','$gioitinh','$ngaysinh','$dantoc','$tongiao','$noisinh','$namtotnghiep','$hocluclop12','$hanhkiemlop12','$socmnd')";
								mysqli_query($conn,$sql);
							}
							?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="Chontinh.js"></script>
	<!-- Tạo Drop hiển thị năm -->
	<script type="text/javascript">
		window.onload = function () {
        //Tham khảo Dropdownlist
        var ddlYears = document.getElementById("ddlYears");

        //Xác định năm hiện tại
        var currentYear = (new Date()).getFullYear();

        //Lặp lại và thêm các gtri năm vào Dropdownlist
        for (var i = 1900; i <= currentYear; i++) {
        	var option = document.createElement("OPTION");
        	option.innerHTML = i;
        	option.value = i;
        	ddlYears.appendChild(option);
        }
    };
</script>

<script type="text/javascript">
	var chonTinh= document.getElementsById('chonTinh');
	var states = new Array("An Giang", "Bà Rịa – Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "	Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "	Đà Nẵng", "Rio 	Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội","Hà Tĩnh","Hải Dương","Hải Phòng","Hậu Giang","	Hòa Bình","Hưng Yên","	Khánh Hòa","	Kiên Giang","Kon Tum","	Lai Châu","	Lâm Đồng","Lạng Sơn","Lào Cai","Long An","Nam Định","	Nghệ An","Ninh Bình","	Ninh Thuận","	Phú Thọ","Phú Yên","	Quảng Bình","Quảng Nam","	Quảng Ngãi","	Quảng Ninh","	Quảng Trị","	Sóc Trăng","	Sơn La","Tây Ninh","	Thái Bình","Thái Nguyên","	Thanh Hóa","	Thừa Thiên Huế","	Tiền Giang","	TP Hồ Chí Minh","	Trà Vinh","	Tuyên Quang","Vĩnh Long","	Vĩnh Phúc","Yên Bái");
	for(var hi=0; hi<states.length; hi++){
		var option= document.createElement("OPTION");
		option.innerHTML= states[hi];
		option.value= states[hi];
		chonTinh.appendChild(option);
	}
	// document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
	
</script>
<!-- Form xét tuyển -->
			<!-- <div class="col-md-9 form-hs">
				<div class="row">
					<iframe src="form-xettuyen.php" name="cuaso" height="1800px"  scrolling="no" class="col-md-12" style="border: 1px solid black;">
						<input type="submit" name="submit" class="btn btn-primary btn-lg submit" value="Nộp hồ sơ">
					</iframe>
					
				</div>
			</div> -->
		</body>
		</html>
