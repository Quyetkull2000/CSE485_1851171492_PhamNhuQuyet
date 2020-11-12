<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!--JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<link rel="stylesheet" href="style.css">

	<!--jquery-->    
	<script type="text/javascript" src="js/jquery.dropdownPlain.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src=https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js></script>
	<script src=https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js></script>


	<title>Web Khoa CNTT</title>
</head>
<body>
	
	<div class="container"  >
	<!-- Header -->
		
	<?php 
		require('includes/header.php');
	?>


		<style>
			.menuu ul li a:hover{
			background: #003478;
			color: white;
			}
			.dropdown:hover .dropdown-menu {display: block;}
		</style>
		<div class="container ame" >	
			
			<nav class=" navbar-expand-lg  navbar-dark navbar">   

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="navbar-toggler-icon"></span></button> 
				<a class="navbar-brand" href="#"></a>
				<div class="collapse navbar-collapse menuu" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav" style="">

						<li class="nav-item ">
							<a class="nav-link" href="#" style="font-size: 22px;"><i class="fas fa-home"></i> <span class="sr-only"></span></a>
						</li>

						
						<li class="nav-item ">
							<a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">GIỚI THIỆU</a>
							<div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" >
								<a class="dropdown-item" href="#">Logo Khoa  CNTT</a> 
								<a class="dropdown-item" href="#">Lời chào mừng</a>
								<a class="dropdown-item" href="#">Tổ chức</a> 
								<a class="dropdown-item" href="#">Hợp tác liên kết</a>
							</div>
						</li>
						

						<li class="nav-item ">
							<a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">NGHIÊN CỨU KHOA HỌC</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Các đề tài dự án</a> 
								<a class="dropdown-item" href="#">Thông tin seminar</a> 
								<a class="dropdown-item" href="#">Công trình công bố</a>
								<a class="dropdown-item" href="#">Các phòng thí nghiệm</a>
							</div>
						</li>



						<li class="nav-item ">
							<a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">ĐÀO TẠO</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Đào tạo khoa học</a> 
								<a class="dropdown-item" href="#">Đào tạo sau đại học</a> 
								<a class="dropdown-item" href="#">Chuẩn đầu ra</a>
								<a class="dropdown-item" href="#">Định hướng ngành nghề</a>
								<a class="dropdown-item" href="#">Mô hình đào tạo</a>
								<a class="dropdown-item" href="#">Đề cương môn học</a>
							</div>
						</li>

						<li class="nav-item ">
							<a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">BỘ MÔN - TRUNG TÂM</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">CN Phần mềm</a> 
								<a class="dropdown-item" href="#">Hệ thống thông tin</a> 
								<a class="dropdown-item" href="#">Khoa học máy tính và mạng</a>
								<a class="dropdown-item" href="#">Toán học</a>
								<a class="dropdown-item" href="#">Tin học và kĩ thuật tính toán</a>
								<a class="dropdown-item" href="#">Trung tâm tin học</a>
							</div>
						</li>
								<li class="nav-item">
									<a class="nav-link" href="includes/hoso/index.php" style="font-size: 15px;margin-top: 5px;">TUYỂN SINH</a>
								</li>	

								<li class="nav-item ">
									<a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">TIN TỨC</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Sự kiện</a> 
										<a class="dropdown-item" href="#">CSE trên báo</a>
									</div>
								</li>
									<li class="nav-item ">
										<a class="nav-link " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" style="font-size: 15px;margin-top: 5px;">THÔNG BÁO</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item" href="#">Thông báo</a> 
											<a class="dropdown-item" href="#">TB đào tạo</a> 
											<a class="dropdown-item" href="#">Nghiên cứu khoa học</a>
											<a class="dropdown-item" href="#">Tuyển dụng</a>
											<a class="dropdown-item" href="#">Học bổng</a>
											<a class="dropdown-item" href="#">Thông báo khác</a>
										</div>
									</li>
										<li class="nav-item">
											<a class="nav-link" href="#" style="font-size: 15px;margin-top: 5px;">LIÊN HỆ</a>
										</li>


									</ul>
								</div>
							</nav>
						</div>
		
						</div>
		<!--Slide hình-->
		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-12">
					<div class="carousel slide" id="carousel-59747">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-59747" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-59747">
							</li>
							<li data-slide-to="2" data-target="#carousel-59747">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="Carousel Bootstrap First" src="./images/anh1.jpg" />

							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Second" src="./images/anh2.jpg" />

							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="./images/anh3.jpg" />

							</div>
						</div> <a class="carousel-control-prev" href="#carousel-59747" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-59747" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
		</div>



		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<hr>

				<!-- Card Title -->  
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<!-- Card 1 -->
								<div class="col-md-12 ">																
								<h3 style="float: left;" class="fas fa-graduation-cap"> Tin tức sự kiện</h3><br><br>
									<div class="row">
										<div class="col-md-12">

											<div class="row">			
												<div class="col-md-4">
													<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/Tintuc1.jpg" />
												</div>
												<div class="col-md-8">
													<h5 class="card-title">
														<b>3 trong 4 sinh viên Trường Đại học Thủy lợi đạt giải tại Olympic Tin học toàn quốc là tân sinh viên Khóa 60</b>
													</h5>
														<span>Olympic Tin học sinh viên Việt Nam là sáng kiến của hội tin học Việt Nam, Hội sinh viên Việt Nam và Bộ giáo dục và đào tạo nhằm động...</span>										
												</div>
											</div>	
											<br>
											<!-- Card 2 -->
											<div class="row">
												<div class="col-md-12">													
													<div class="row">			
														<div class="col-md-4">
															<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/k60.jpg" />
														</div>
														<div class="col-md-8">
															<h5 class="card-title">
																<b>Khoa Công nghệ thông tin gặp mặt tân sinh viên Khóa 60</b>
															</h5>
															<span>Trong không khí vui mừng, rạo rực những ngày đầu nhập học, buổi gặp mặt vừa là dịp để khoa giới thiệu ngành nghề, cơ hội việc làm, vừa là dịp để các em...</span>
														</div>
													</div>		
												</div> 
											</div>
											<br>
											<!-- Card 3 -->
											<div class="row">
												<div class="col-md-12">
													<div class="row">			
														<div class="col-md-4">
															<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/card3.jpg" />
														</div>
														<div class="col-md-8">
															<h5 class="card-title">
																<b>Công nghệ thông tin Trường Đại học Thủy lợi- Mùa tuyển sinh thành công</b>
															</h5>
															<span>Mở đầu thông tin về tuyển sinh năm nay, PGS.TS Nguyễn Xuân Hoài - Viện trưởng Viện nghiên cứu và Phát triển Công nghệ thông tin Đại học Hà Nội...</span>							
														</div>
													</div>	
												</div> 
											</div>
											<br>
											<!-- Card 4 -->
											<div class="row">
												<div class="col-md-12">
													<div class="row">			
														<div class="col-md-4">
															<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/card4.jpg" />
														</div>
														<div class="col-md-8">
															<h5 class="card-title">
																<b>Đội tuyển Olympic Tin học toàn quốc ra quân</b>
															</h5>
															<span>Với thời gian ôn luyện gấp rút trong 2 tháng cùng việc xét chọn kỹ lưỡng qua các bài kiểm tra, đội tuyển Olympic Tin học toàn quốc của Trường Đại học Thủy lợi...</span>									
														</div>
													</div>	
												</div> 									
											</div> 	
											<!-- Youtube -->
											<hr>
											<div class="row">
												<div class="col-md-12">
													<h3 style="float: left;" class="fas fa-film"> Video giới thiệu Khoa</h3><br><br>
													
												<iframe width="100%" height="300px" src="https://www.youtube.com/embed/hxhTgffI2JY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
										</div>												
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Thông báo -->

					<div class="col-md-4">
						<div class="container">
							<div class="row">

								<h3 style="float: left;" class="fas fa-bell"> Thông báo mới</h3><br>
								<a href="http://cse.tlu.edu.vn/tin-thong-bao/cong-ty-cp-giai-phap-phan-mem-tai-chinh-fss-291" style="margin: 10px 0;">CÔNG TY CP GIẢI PHÁP PHẦN MỀM TÀI CHÍNH (FSS) TUYỂN DỤNG</a>
								<img  src="images/icon_new1.gif" height="15px" width="31px" border="0" />
								<a href="http://cse.tlu.edu.vn/tin-thong-bao/tu-0h00-ngay-30-5-den-1-8-2020-thi-sinh-bat-dau-290">Từ 0h00 ngày 30/5 đến 1/8/2020, Thí sinh bắt đầu đăng ký trực tuyến xét tuyển thẳng và xét tuyển học bạ vào Trường Đại học Thủy lợi</a>
								<img  src="images/icon_new1.gif" height="15px" width="31px" border="0" />
								<a href="http://cse.tlu.edu.vn/tin-thong-bao/cong-ty-cp-giai-phap-phan-mem-tai-chinh-fss-291" style="margin: 10px 0;">CÔNG TY CP GIẢI PHÁP PHẦN MỀM TÀI CHÍNH (FSS) TUYỂN DỤNG</a>
								
							</div>

						</div>
						<hr>

						<div class="row ">
							<div class="col-md-12 ">
								<button type="button" class="btn btn-primary btn-block list-menu">Cựu sinh viên</button>
								<button type="button" class="btn btn-secondary btn-block list-menu">Đoàn Hội CLB</button>
								<button type="button" class="btn btn-success btn-block list-menu">Cố vấn học tập</button>
								<button type="button" class="btn btn-danger btn-block list-menu">Thông tin học bổng</button>
								<button type="button" class="btn btn-warning btn-block list-menu">Fanpage Khoa</button>
								<button type="button" class="btn btn-info btn-block list-menu">Tuyển dụng</button>
								<button type="button" class="btn btn-dark btn-block list-menu">IT support</button>
							</div>
						</div>

						<hr>
						<div class="row ">
							<div class="col-md-12" style="margin-top:15px;" >
								<h3 style="float: left;" class="fas fa-search-location">Vị trí</h3><br><br/>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6645536882197!2d105.82422671440703!3d21.006079493929285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac80e331bc79%3A0x996c7ecac9e5b1c7!2zTmjDoCBDNSwgVHJ1bmcgTGnhu4d0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1604223286672!5m2!1svi!2s" width="330" height="330" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<?php 
				require('includes/footer.php');
			 ?>
		</body>
		</html>