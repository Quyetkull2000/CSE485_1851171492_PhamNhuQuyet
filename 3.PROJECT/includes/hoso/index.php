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
	<link rel="stylesheet" type="text/css" href="../../css/xettuyen.css">
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
						<a href="nganhtuyensinh.php" style="color: black;">Ngành xét tuyển</a>
					</h5>
					<h5 class="card-header bg-warning fa fa-envelope-open ">
						<a href="https://tuyensinhso.vn/school/dai-hoc-thuy-loi.html" style="color: black;">Hồ sơ và cách đăng kí</a>
					</h5>
					<h5 class="card-header bg-info title-menu fa fa-user-plus">
						<a href="index.php" target="cuaso" style="color: black;">Đăng kí xét tuyển</a>
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
									<option selected="selected">Nam</option>
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
									<option value="An Giang" selected="selected">An Giang</option>
									<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
									<option value="Bắc Giang">Bắc Giang</option>
									<option value="Bắc Kạn">Bắc Kạn</option>
									<option value="Bạc Liêu">Bạc Liêu</option>
									<option value="Bắc Ninh">Bắc Ninh</option>
									<option value="Bến Tre">Bến Tre</option>
									<option value="Bình Định">Bình Định</option>
									<option value="Bình Dương">Bình Dương</option>
									<option value="Bình Phước">Bình Phước</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Cà Mau">Cà Mau</option>
									<option value="Cao Bằng">Cao Bằng</option>
									<option value="Đắk Lắk">Đắk Lắk</option>
									<option value="Đắk Nông">Đắk Nông</option>
									<option value="Điện Biên">Điện Biên</option>
									<option value="Đồng Nai">Đồng Nai</option>
									<option value="Đồng Tháp">Đồng Tháp</option>
									<option value="Gia Lai">Gia Lai</option>
									<option value="Hà Giang">Hà Giang</option>
									<option value="Hà Nam">Hà Nam</option>
									<option value="Hà Tĩnh">Hà Tĩnh</option>
									<option value="Hải Dương">Hải Dương</option>
									<option value="Hậu Giang">Hậu Giang</option>
									<option value="Hòa Bình">Hòa Bình</option>
									<option value="Hưng Yên">Hưng Yên</option>
									<option value="Khánh Hòa">Khánh Hòa</option>
									<option value="Kiên Giang">Kiên Giang</option>
									<option value="Kon Tum">Kon Tum</option>
									<option value="Lai Châu">Lai Châu</option>
									<option value="Lâm Đồng">Lâm Đồng</option>
									<option value="Lạng Sơn">Lạng Sơn</option>
									<option value="Lào Cai">Lào Cai</option>
									<option value="Long An">Long An</option>
									<option value="Nam Định">Nam Định</option>
									<option value="Nghệ An">Nghệ An</option>
									<option value="Ninh Bình">Ninh Bình</option>
									<option value="Ninh Thuận">Ninh Thuận</option>
									<option value="Phú Thọ">Phú Thọ</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Ngãi">Quảng Ngãi</option>
									<option value="Quảng Ninh">Quảng Ninh</option>
									<option value="Quảng Trị">Quảng Trị</option>
									<option value="Sóc Trăng">Sóc Trăng</option>
									<option value="Sơn La">Sơn La</option>
									<option value="Tây Ninh">Tây Ninh</option>
									<option value="Thái Bình">Thái Bình</option>
									<option value="Thái Nguyên">Thái Nguyên</option>
									<option value="Thanh Hóa">Thanh Hóa</option>
									<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
									<option value="Tiền Giang">Tiền Giang</option>
									<option value="Trà Vinh">Trà Vinh</option>
									<option value="Tuyên Quang">Tuyên Quang</option>
									<option value="Vĩnh Long">Vĩnh Long</option>
									<option value="Vĩnh Phúc">Vĩnh Phúc</option>
									<option value="Yên Bái">Yên Bái</option>
									<option value="Phú Yên">Phú Yên</option>
									<option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
									<option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
									<option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
									<option value="Tp.Hà Nội">Tp.Hà Nội</option>
									<option value="TP  HCM">TP HCM</option>
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
									<option selected="selected">Giỏi</option>
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
									<option selected="selected">Tốt</option>
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
									<option value="An Giang" selected="selected">An Giang</option>
									<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
									<option value="Bắc Giang">Bắc Giang</option>
									<option value="Bắc Kạn">Bắc Kạn</option>
									<option value="Bạc Liêu">Bạc Liêu</option>
									<option value="Bắc Ninh">Bắc Ninh</option>
									<option value="Bến Tre">Bến Tre</option>
									<option value="Bình Định">Bình Định</option>
									<option value="Bình Dương">Bình Dương</option>
									<option value="Bình Phước">Bình Phước</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Cà Mau">Cà Mau</option>
									<option value="Cao Bằng">Cao Bằng</option>
									<option value="Đắk Lắk">Đắk Lắk</option>
									<option value="Đắk Nông">Đắk Nông</option>
									<option value="Điện Biên">Điện Biên</option>
									<option value="Đồng Nai">Đồng Nai</option>
									<option value="Đồng Tháp">Đồng Tháp</option>
									<option value="Gia Lai">Gia Lai</option>
									<option value="Hà Giang">Hà Giang</option>
									<option value="Hà Nam">Hà Nam</option>
									<option value="Hà Tĩnh">Hà Tĩnh</option>
									<option value="Hải Dương">Hải Dương</option>
									<option value="Hậu Giang">Hậu Giang</option>
									<option value="Hòa Bình">Hòa Bình</option>
									<option value="Hưng Yên">Hưng Yên</option>
									<option value="Khánh Hòa">Khánh Hòa</option>
									<option value="Kiên Giang">Kiên Giang</option>
									<option value="Kon Tum">Kon Tum</option>
									<option value="Lai Châu">Lai Châu</option>
									<option value="Lâm Đồng">Lâm Đồng</option>
									<option value="Lạng Sơn">Lạng Sơn</option>
									<option value="Lào Cai">Lào Cai</option>
									<option value="Long An">Long An</option>
									<option value="Nam Định">Nam Định</option>
									<option value="Nghệ An">Nghệ An</option>
									<option value="Ninh Bình">Ninh Bình</option>
									<option value="Ninh Thuận">Ninh Thuận</option>
									<option value="Phú Thọ">Phú Thọ</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Ngãi">Quảng Ngãi</option>
									<option value="Quảng Ninh">Quảng Ninh</option>
									<option value="Quảng Trị">Quảng Trị</option>
									<option value="Sóc Trăng">Sóc Trăng</option>
									<option value="Sơn La">Sơn La</option>
									<option value="Tây Ninh">Tây Ninh</option>
									<option value="Thái Bình">Thái Bình</option>
									<option value="Thái Nguyên">Thái Nguyên</option>
									<option value="Thanh Hóa">Thanh Hóa</option>
									<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
									<option value="Tiền Giang">Tiền Giang</option>
									<option value="Trà Vinh">Trà Vinh</option>
									<option value="Tuyên Quang">Tuyên Quang</option>
									<option value="Vĩnh Long">Vĩnh Long</option>
									<option value="Vĩnh Phúc">Vĩnh Phúc</option>
									<option value="Yên Bái">Yên Bái</option>
									<option value="Phú Yên">Phú Yên</option>
									<option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
									<option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
									<option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
									<option value="Tp.Hà Nội">Tp.Hà Nội</option>
									<option value="TP  HCM">TP HCM</option>

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
									<option value="An Giang" selected="selected">An Giang</option>
									<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
									<option value="Bắc Giang">Bắc Giang</option>
									<option value="Bắc Kạn">Bắc Kạn</option>
									<option value="Bạc Liêu">Bạc Liêu</option>
									<option value="Bắc Ninh">Bắc Ninh</option>
									<option value="Bến Tre">Bến Tre</option>
									<option value="Bình Định">Bình Định</option>
									<option value="Bình Dương">Bình Dương</option>
									<option value="Bình Phước">Bình Phước</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Cà Mau">Cà Mau</option>
									<option value="Cao Bằng">Cao Bằng</option>
									<option value="Đắk Lắk">Đắk Lắk</option>
									<option value="Đắk Nông">Đắk Nông</option>
									<option value="Điện Biên">Điện Biên</option>
									<option value="Đồng Nai">Đồng Nai</option>
									<option value="Đồng Tháp">Đồng Tháp</option>
									<option value="Gia Lai">Gia Lai</option>
									<option value="Hà Giang">Hà Giang</option>
									<option value="Hà Nam">Hà Nam</option>
									<option value="Hà Tĩnh">Hà Tĩnh</option>
									<option value="Hải Dương">Hải Dương</option>
									<option value="Hậu Giang">Hậu Giang</option>
									<option value="Hòa Bình">Hòa Bình</option>
									<option value="Hưng Yên">Hưng Yên</option>
									<option value="Khánh Hòa">Khánh Hòa</option>
									<option value="Kiên Giang">Kiên Giang</option>
									<option value="Kon Tum">Kon Tum</option>
									<option value="Lai Châu">Lai Châu</option>
									<option value="Lâm Đồng">Lâm Đồng</option>
									<option value="Lạng Sơn">Lạng Sơn</option>
									<option value="Lào Cai">Lào Cai</option>
									<option value="Long An">Long An</option>
									<option value="Nam Định">Nam Định</option>
									<option value="Nghệ An">Nghệ An</option>
									<option value="Ninh Bình">Ninh Bình</option>
									<option value="Ninh Thuận">Ninh Thuận</option>
									<option value="Phú Thọ">Phú Thọ</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Ngãi">Quảng Ngãi</option>
									<option value="Quảng Ninh">Quảng Ninh</option>
									<option value="Quảng Trị">Quảng Trị</option>
									<option value="Sóc Trăng">Sóc Trăng</option>
									<option value="Sơn La">Sơn La</option>
									<option value="Tây Ninh">Tây Ninh</option>
									<option value="Thái Bình">Thái Bình</option>
									<option value="Thái Nguyên">Thái Nguyên</option>
									<option value="Thanh Hóa">Thanh Hóa</option>
									<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
									<option value="Tiền Giang">Tiền Giang</option>
									<option value="Trà Vinh">Trà Vinh</option>
									<option value="Tuyên Quang">Tuyên Quang</option>
									<option value="Vĩnh Long">Vĩnh Long</option>
									<option value="Vĩnh Phúc">Vĩnh Phúc</option>
									<option value="Yên Bái">Yên Bái</option>
									<option value="Phú Yên">Phú Yên</option>
									<option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
									<option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
									<option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
									<option value="Tp.Hà Nội">Tp.Hà Nội</option>
									<option value="TP  HCM">TP HCM</option>
								</select>
								<input type="text" class="form-control input-group-text col-md" placeholder="" name="matruonglop10"> 
								<input type="text"  class="col-md" name="tentruonglop10">
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
									<option value="An Giang" selected="selected">An Giang</option>
									<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
									<option value="Bắc Giang">Bắc Giang</option>
									<option value="Bắc Kạn">Bắc Kạn</option>
									<option value="Bạc Liêu">Bạc Liêu</option>
									<option value="Bắc Ninh">Bắc Ninh</option>
									<option value="Bến Tre">Bến Tre</option>
									<option value="Bình Định">Bình Định</option>
									<option value="Bình Dương">Bình Dương</option>
									<option value="Bình Phước">Bình Phước</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Cà Mau">Cà Mau</option>
									<option value="Cao Bằng">Cao Bằng</option>
									<option value="Đắk Lắk">Đắk Lắk</option>
									<option value="Đắk Nông">Đắk Nông</option>
									<option value="Điện Biên">Điện Biên</option>
									<option value="Đồng Nai">Đồng Nai</option>
									<option value="Đồng Tháp">Đồng Tháp</option>
									<option value="Gia Lai">Gia Lai</option>
									<option value="Hà Giang">Hà Giang</option>
									<option value="Hà Nam">Hà Nam</option>
									<option value="Hà Tĩnh">Hà Tĩnh</option>
									<option value="Hải Dương">Hải Dương</option>
									<option value="Hậu Giang">Hậu Giang</option>
									<option value="Hòa Bình">Hòa Bình</option>
									<option value="Hưng Yên">Hưng Yên</option>
									<option value="Khánh Hòa">Khánh Hòa</option>
									<option value="Kiên Giang">Kiên Giang</option>
									<option value="Kon Tum">Kon Tum</option>
									<option value="Lai Châu">Lai Châu</option>
									<option value="Lâm Đồng">Lâm Đồng</option>
									<option value="Lạng Sơn">Lạng Sơn</option>
									<option value="Lào Cai">Lào Cai</option>
									<option value="Long An">Long An</option>
									<option value="Nam Định">Nam Định</option>
									<option value="Nghệ An">Nghệ An</option>
									<option value="Ninh Bình">Ninh Bình</option>
									<option value="Ninh Thuận">Ninh Thuận</option>
									<option value="Phú Thọ">Phú Thọ</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Ngãi">Quảng Ngãi</option>
									<option value="Quảng Ninh">Quảng Ninh</option>
									<option value="Quảng Trị">Quảng Trị</option>
									<option value="Sóc Trăng">Sóc Trăng</option>
									<option value="Sơn La">Sơn La</option>
									<option value="Tây Ninh">Tây Ninh</option>
									<option value="Thái Bình">Thái Bình</option>
									<option value="Thái Nguyên">Thái Nguyên</option>
									<option value="Thanh Hóa">Thanh Hóa</option>
									<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
									<option value="Tiền Giang">Tiền Giang</option>
									<option value="Trà Vinh">Trà Vinh</option>
									<option value="Tuyên Quang">Tuyên Quang</option>
									<option value="Vĩnh Long">Vĩnh Long</option>
									<option value="Vĩnh Phúc">Vĩnh Phúc</option>
									<option value="Yên Bái">Yên Bái</option>
									<option value="Phú Yên">Phú Yên</option>
									<option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
									<option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
									<option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
									<option value="Tp.Hà Nội">Tp.Hà Nội</option>
									<option value="TP  HCM">TP HCM</option>
								</select>
								<input type="text" class="form-control input-group-text col-md"  name="matruonglop11"> 
								<input type="text"  class="col-md" name="tentruonglop11">
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
									<option value="An Giang" selected="selected">An Giang</option>
									<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
									<option value="Bắc Giang">Bắc Giang</option>
									<option value="Bắc Kạn">Bắc Kạn</option>
									<option value="Bạc Liêu">Bạc Liêu</option>
									<option value="Bắc Ninh">Bắc Ninh</option>
									<option value="Bến Tre">Bến Tre</option>
									<option value="Bình Định">Bình Định</option>
									<option value="Bình Dương">Bình Dương</option>
									<option value="Bình Phước">Bình Phước</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Bình Thuận">Bình Thuận</option>
									<option value="Cà Mau">Cà Mau</option>
									<option value="Cao Bằng">Cao Bằng</option>
									<option value="Đắk Lắk">Đắk Lắk</option>
									<option value="Đắk Nông">Đắk Nông</option>
									<option value="Điện Biên">Điện Biên</option>
									<option value="Đồng Nai">Đồng Nai</option>
									<option value="Đồng Tháp">Đồng Tháp</option>
									<option value="Gia Lai">Gia Lai</option>
									<option value="Hà Giang">Hà Giang</option>
									<option value="Hà Nam">Hà Nam</option>
									<option value="Hà Tĩnh">Hà Tĩnh</option>
									<option value="Hải Dương">Hải Dương</option>
									<option value="Hậu Giang">Hậu Giang</option>
									<option value="Hòa Bình">Hòa Bình</option>
									<option value="Hưng Yên">Hưng Yên</option>
									<option value="Khánh Hòa">Khánh Hòa</option>
									<option value="Kiên Giang">Kiên Giang</option>
									<option value="Kon Tum">Kon Tum</option>
									<option value="Lai Châu">Lai Châu</option>
									<option value="Lâm Đồng">Lâm Đồng</option>
									<option value="Lạng Sơn">Lạng Sơn</option>
									<option value="Lào Cai">Lào Cai</option>
									<option value="Long An">Long An</option>
									<option value="Nam Định">Nam Định</option>
									<option value="Nghệ An">Nghệ An</option>
									<option value="Ninh Bình">Ninh Bình</option>
									<option value="Ninh Thuận">Ninh Thuận</option>
									<option value="Phú Thọ">Phú Thọ</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Bình">Quảng Bình</option>
									<option value="Quảng Ngãi">Quảng Ngãi</option>
									<option value="Quảng Ninh">Quảng Ninh</option>
									<option value="Quảng Trị">Quảng Trị</option>
									<option value="Sóc Trăng">Sóc Trăng</option>
									<option value="Sơn La">Sơn La</option>
									<option value="Tây Ninh">Tây Ninh</option>
									<option value="Thái Bình">Thái Bình</option>
									<option value="Thái Nguyên">Thái Nguyên</option>
									<option value="Thanh Hóa">Thanh Hóa</option>
									<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
									<option value="Tiền Giang">Tiền Giang</option>
									<option value="Trà Vinh">Trà Vinh</option>
									<option value="Tuyên Quang">Tuyên Quang</option>
									<option value="Vĩnh Long">Vĩnh Long</option>
									<option value="Vĩnh Phúc">Vĩnh Phúc</option>
									<option value="Yên Bái">Yên Bái</option>
									<option value="Phú Yên">Phú Yên</option>
									<option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
									<option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
									<option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
									<option value="Tp.Hà Nội">Tp.Hà Nội</option>
									<option value="TP  HCM">TP HCM</option>
								</select>
								<input type="text" class="form-control input-group-text col-md"  name="matruonglop12"> 
								<input type="text"  class="col-md" name="tentruonglop12">
							</div>
						</div>
						<!-- hàng 10 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<p class="col-md">Đối tượng ưu tiên tuyển sinh(Thuộc đối tượng nào thì chọn đối tượng bên phải</p>
								<select class=" form-control col-md-2 chonTinh" name="doituonguutien">
									<option value="" disabled selected>-Chọn-</option>
									<option selected="selected">Học sinh đạt giải cấp quốc gia</option>
									<option>Hộ nghèo</option>
								</select>
							</div>
						</div>
						<!-- hàng 11 -->
						<div class="row element-row">
							<div class="input-group col-md-12">
								<p class="col-md">Khu vực ưu tiên tuyển sinh(Thuộc khu vực nào thì chọn kí hiệu của khu vực(KV1,KH2-NT,KV2,KV3)vào ô khu vực ưu tiên)</p>
								<select class=" form-control col-md-2 chonTinh"  name="khuvucuutien"  >
									<option value="" disabled selected>-Chọn-</option>
									<option selected="selected">KV1</option>
									<option>KV2-NT</option>
									<option>KV2</option>
									<option>KV3</option>
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
								<input type="checkbox" name="xettuyen1" value="Xét tuyển bằng tổng điểm Trung bình lớp 12 theo tổ hợp 3 môn"> <b>Xét tuyển bằng tổng điểm Trung bình lớp 12 theo tổ hợp 3 môn</b><br/>
								<input type="checkbox" name="xettuyen2" value="Xét tuyển bằng tổng điểm Trung bình 3 học kì(HK1, HK2 năm lớp 11, HK1 năm lớp 12)"> <b>Xét tuyển bằng tổng điểm Trung bình 3 học kì(HK1, HK2 năm lớp 11, HK1 năm lớp 12)</b><br/>
								<b>Lưu ý:</b>Thí sinh có thể chọn một trong hai hoặc chọn cả hai để nâng cao cơ hội trúng tuyển <br/>
								<input type="submit" name="submit" class="btn btn-primary btn-lg submit" value="Nộp hồ sơ">
								
							</div>
							
							<?php 
							require('../Config.php');
							if (isset($_POST['submit']) ) {
										# code...
								$hoten= $_POST['hoten'];
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$gioitinh = $_POST['gioitinh'];
								}
								$ngaysinh= $_POST['ngaysinh'];
								$dantoc= $_POST['dantoc'];
								$tongiao= $_POST['tongiao'];
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$noisinh = $_POST['noisinh'];
								}
								// if($_SERVER['REQUEST_METHOD'] == "POST"){ 
								// 	$namtotnghiep = $_POST['namtotnghiep'];
								// }
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$hocluclop12 = $_POST['hocluclop12'];
								}
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$hanhkiemlop12 = $_POST['hanhkiemlop12'];
								}
								$socmnd= $_POST['socmnd'];
								$ngaycap= $_POST['ngaycap'];
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$noicap = $_POST['noicap'];
								}
								$hokhauthuongtru= $_POST['hokhauthuongtru'];
								$matinhlop10= $_POST['matinhlop10'];
								$matinhlop11= $_POST['matinhlop11'];
								$matinhlop12= $_POST['matinhlop12'];
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$tentinhlop10 = $_POST['tentinhlop10'];
								}
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$tentinhlop11 = $_POST['tentinhlop11'];
								}
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$tentinhlop12 = $_POST['tentinhlop12'];
								}
								$matruonglop10= $_POST['matruonglop10'];
								$matruonglop11= $_POST['matruonglop11'];
								$matruonglop12= $_POST['matruonglop12'];
								$tentruonglop10= $_POST['tentruonglop10'];
								$tentruonglop11= $_POST['tentruonglop11'];
								$tentruonglop12= $_POST['tentruonglop12'];
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$doituonguutien = $_POST['doituonguutien'];
								}
								if($_SERVER['REQUEST_METHOD'] == "POST"){ 
									$khuvucuutien = $_POST['khuvucuutien'];
								}
								$diachilienhe= $_POST['diachilienhe'];
								$sdtthisinh= $_POST['sdtthisinh'];
								$sdtphuhuynh= $_POST['sdtphuhuynh'];
								if (isset($_POST['xettuyen1'])) {
									$hinhthucxettuyen=$_POST['xettuyen1'];
								}
								else{
									$hinhthucxettuyen=$_POST['xettuyen2'];
								}
								
								$sql=" INSERT INTO hoso(Hoten,Gioitinh,Ngaysinh,Dantoc,Tongiao,Noisinh,Hocluc_lop12,Hanhkiem_lop12,SoCMND,Ngaycap,Noicap,Hokhau,Matinh_lop10,Tentinh_lop10,Matruong_lop10,Tentruong_lop10,Matinh_lop11,Tentinh_lop11,Matruong_lop11,Tentruong_lop11,Matinh_lop12,Tentinh_lop12,Matruong_lop12,Tentruong_lop12,Doituong_uutien,Khuvuc_uutien,Diachi,Dienthoai_TS,Dienthoai_PH,Hinhthuc_xettuyen) VALUES('$hoten','$gioitinh','$ngaysinh','$dantoc','$tongiao','$noisinh','$hocluclop12','$hanhkiemlop12','$socmnd','$ngaycap', '$noicap',  '$hokhauthuongtru' ,'$matinhlop10', '$tentinhlop10', '$matruonglop10', '$tentruonglop10', '$matinhlop11', '$tentinhlop11', '$matruonglop11', '$tentruonglop11', '$matinhlop12', '$tentinhlop12', '$matruonglop12', '$tentruonglop12', '$doituonguutien', '$khuvucuutien', '$diachilienhe','$sdtthisinh' ,'$sdtphuhuynh' ,'$hinhthucxettuyen')";
								mysqli_query($conn,$sql);
							}
							?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- Chọn năm -->
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

<!-- <script type="text/javascript">
	var chonTinh= document.getElementsById('chonTinh');
	var states = new Array("An Giang", "Bà Rịa – Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "	Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "	Đà Nẵng", "Rio 	Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội","Hà Tĩnh","Hải Dương","Hải Phòng","Hậu Giang","	Hòa Bình","Hưng Yên","	Khánh Hòa","	Kiên Giang","Kon Tum","	Lai Châu","	Lâm Đồng","Lạng Sơn","Lào Cai","Long An","Nam Định","	Nghệ An","Ninh Bình","	Ninh Thuận","	Phú Thọ","Phú Yên","	Quảng Bình","Quảng Nam","	Quảng Ngãi","	Quảng Ninh","	Quảng Trị","	Sóc Trăng","	Sơn La","Tây Ninh","	Thái Bình","Thái Nguyên","	Thanh Hóa","	Thừa Thiên Huế","	Tiền Giang","	TP Hồ Chí Minh","	Trà Vinh","	Tuyên Quang","Vĩnh Long","	Vĩnh Phúc","Yên Bái");
	for(var hi=0; hi<states.length; hi++){
		var option= document.createElement("OPTION");
		option.innerHTML= states[hi];
		option.value= states[hi];
		chonTinh.appendChild(option);
	}
	// document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
	
</script> -->

</body>
</html>
