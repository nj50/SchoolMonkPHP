<?php if(file_exists(dirname(__FILE__)."/includes/session.php")){ include(dirname(__FILE__)."/includes/session.php"); }  
if(isset($_SESSION[$UID])){Validate();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SchoolMonk</title>
	<?php if(file_exists("templates/head_tag.php")){ include("templates/head_tag.php");} ?>
</head>
<body ng-app="SMonk">
	<div id="wrapper">
		<?php if(file_exists("templates/header.php")){ include("templates/header.php");} ?>
        <div id="page-wrapper">
			<div>
				<?php /*if(file_exists("templates/schoolside_nav.php")){ include("templates/schoolside_nav.php");} */?>
				
				<div class='aside navbar-static-side'>
					<div class="row">
						<div class='banner_holder' id='banner'>
							<div id="sliderA" class="slider">
								<img src="images/banner/1.jpg" />
								<img src="images/banner/2.jpg" />
								<img src="images/banner/3.jpg" />
								<img src="images/banner/4.jpg" />
							</div>
							<div class='form'>
								<!--div class="container">
									<div class='col-8' style='margin:0 auto;'>
									<div class="search-container">
										<label>Which School you are looking</label>
										<div class="input-group col-12">
											<input type="text" class="form-control col-10">
											<i class="fa fa-search"></i>
											<button type="submit" class="input-group-btn col-2 btn">Search</button>

										</div>
									</div>
									</div>
								</div-->
								<div class='col-xs-12'>
									<div class="search-container">
										<label>Which School you are looking</label>
										<div class="input-group custom-search-form">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">
													<i class="fa fa-search"></i>Search
												</button>
											</span>
										</div>
									</div>
								</div>
                        
							</div>
						</div>
					</div>
					
					
					<div class="container-fluid" id='homepage'>
						<!-- FeaturedSchool -->
						<h2 class='single-line'><span>Featured School</span></h2>
						<div id="featured_school" class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="item item-type-line">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="headline">School Name</div>
												<div class="line"></div>
												<div class="date">February 29, 2014</div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/sb1.jpg"></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="item item-type-line">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="headline">School Name</div>
												<div class="line"></div>
												<div class="date">February 29, 2014</div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/sb2.jpg"></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="item item-type-line">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="headline">School Name</div>
												<div class="line"></div>
												<div class="date">February 29, 2014</div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/sb3.jpg"></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- SchoolByCityRegion -->
						<h2 class='single-line'><span>School By City Region</span></h2>
						<div id="SchoolByCityRegion" class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="item item-type-double">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="line"></div>
												<div class="headline">Region 1</div>
												<div class="line"></div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/loc1.png"></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="item item-type-double">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="line"></div>
												<div class="headline">Region 2</div>
												<div class="line"></div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/loc2.png"></div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="item item-type-double">
										<a target="_blank" href="" class="item-hover">
											<div class="item-info">
												<div class="line"></div>
												<div class="headline">Region 3</div>
												<div class="line"></div>
											</div>
											<div class="mask"></div>
										</a>
										<div class="item-img"><img alt="" src="images/temp_files/loc3.png"></div>
									</div>
								</div>
							</div>
						</div>
							
							
							
						<!-- ClosingDate -->
						<h2 class='single-line'><span>School By City Region</span></h2>
						<div id="ClosingDate" class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="content-item">
										<img src='images/temp_files/frm1.png' />
										<div class="overlay"></div>
										<div class="corner-overlay-content">17 June</div>
										<!--div class="overlay-content">
											<h2>Image Ink Logo</h2>
											<p>Logo for a screen printing company. They wanted a detachable/recognizable brand that didn't need the name of the company.</p>
										</div-->
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content-item">
										<img src='images/temp_files/frm2.png' />
										<div class="overlay"></div>
										<div class="corner-overlay-content">17 June</div>
										<!--div class="overlay-content">
											<h2>Image Ink Logo</h2>
											<p>Logo for a screen printing company. They wanted a detachable/recognizable brand that didn't need the name of the company.</p>
										</div-->
									</div>
								</div>
								<div class="swiper-slide">
									<div class="content-item">
										<img src='images/temp_files/frm3.png' />
										<div class="overlay"></div>
										<div class="corner-overlay-content">17 June</div>
										<!--div class="overlay-content">
											<h2>Image Ink Logo</h2>
											<p>Logo for a screen printing company. They wanted a detachable/recognizable brand that didn't need the name of the company.</p>
										</div-->
									</div>
								</div>
							</div>
						</div>
					</div>
				
					
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->
		
		<?php if(file_exists("templates/footer.php")){ include("templates/footer.php");} ?>
		
		
    </div>
    <!-- /#wrapper -->
	<?php include('templates/modular.php');?>
	<script>
(function(){
	$("#sliderA").excoloSlider();	
	var featured_school = new Swiper('#featured_school', {
		slidesPerView:'auto',
		spaceBetween: 30,
    });
	var SchoolByCityRegion = new Swiper('#SchoolByCityRegion', {
		slidesPerView:'auto',
		spaceBetween: 30,
    });
	
	var ClosingDate = new Swiper('#ClosingDate', {
		slidesPerView:'auto',
		spaceBetween: 30,
    });
})();
</script>
</body>
</html>