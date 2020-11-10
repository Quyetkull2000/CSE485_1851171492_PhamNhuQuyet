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
	<div class="container">
	<!-- Header -->
		<?php 
		require('includes/header.php');
		?>

		<!--Slide hình-->
		<div class="container-fluid">
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
																								
												</div>
											</div>	

											<!-- Card 2 -->
											<div class="row">
												<div class="col-md-12">													
													<div class="row">			
														<div class="col-md-4">
															<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/Tintuc1.jpg" />
														</div>
														<div class="col-md-8">
															<h5 class="card-title">
																<b>Sinh viên Khoa CNTT giao lưu với công ty Qualica Nhật Bản</b>
															</h5>
															
														</div>
													</div>		
												</div> 
											</div>
											<!-- Card 3 -->
											<div class="row">
												<div class="col-md-12">
													<div class="row">			
														<div class="col-md-4">
															<img class="card-img-top" alt="Bootstrap Thumbnail First" src="images/Tintuc1.jpg" />
														</div>
														<div class="col-md-8">
															<h5 class="card-title">
																<b>Khoa Công nghệ thông tin ký kết thoả thuận hợp tác với công ty công nghệ NashTech</b>
															</h5>
																								
														</div>
													</div>	
												</div> 
											</div>

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
																									
														</div>
													</div>	
												</div> 									
											</div> 	
											<!-- Youtube -->
											<hr>
											<div class="row">
												<div class="col-md-12">
													<h3 style="float: left;" class="fas fa-film"> Video giới thiệu Khoa</h3><br><br>
													<iframe  width="100%" height="300px" 
													src="https://www.youtube.com/embed/vq3GlW82oRg"
													frameborder="0" >
												</iframe>
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
								<img  src="images/icon_new1.gif" height="15px" width="31px" border="0" />							
								<a href="http://cse.tlu.edu.vn/tin-thong-bao/cong-ty-cp-giai-phap-phan-mem-tai-chinh-fss-291" style="margin: 10px 0;"><img  src="images/icon_new1.gif" height="15px" width="31px" border="0" />CÔNG TY CP GIẢI PHÁP PHẦN MỀM TÀI CHÍNH (FSS) TUYỂN DỤNG</a>
								<img  src="images/icon_new1.gif" height="15px" width="31px" border="0" /><br>
								<a href="http://cse.tlu.edu.vn/tin-thong-bao/tu-0h00-ngay-30-5-den-1-8-2020-thi-sinh-bat-dau-290">Từ 0h00 ngày 30/5 đến 1/8/2020, Thí sinh bắt đầu đăng ký trực tuyến xét tuyển thẳng và xét tuyển học bạ vào Trường Đại học Thủy lợi</a>
								<img  src="images/icon_new1.gif" height="15px" width="31px" border="0" /><br>
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