<!-- Breadcrumbs & Page Title Start -->
<div class="breadcrumbs-title bg-img-4 parallax blank-space">
            <img src="./assets/img/career/banner.jpg" alt="">
        </div>
        <!-- Breadcrumbs & Page Title End -->
        <div class="container pt-15">
            <h5><a href="index.php" style="color: #000000;">Trang chủ </a> <i class="zmdi zmdi-chevron-right"></i> Tuyển dụng</h5>
        </div>
        <!-- Promo Section Start -->
		<section class="promo-area promo-three ptb-40">
           
			<div>
				<div class="row">
					<div class="col-xs-12 col-md-10">
						<div class="row">
							<div class="col-xs-1" style="background-color: rgb(7, 4, 61); height:480px;">
                            </div>
							<div class="col-xs-12 col-sm-7 pl-45">
								<div class="promo-text pt-40 mr-minus-10">
									<div class="section-title mb-45">
										<h3 class="mb-5 text-capitalize">THÔNG TIN TUYỂN DỤNG THÁNG 4/2022</h3>
										<p>There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm .</p>
									</div>
									<div class="row">
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 mobi-mb-30 text-center">
                                            <a href="#"><img src="./assets/img/home/hcmut.png" style="width: 150px;" alt=""></a>
                                        </div>
                                        
                                    </div>
								</div>
							</div>
                            <div class="col-xs-12 col-sm-4 pl-50">
								<div class="blog-post">
                                    <div class="thumb text-center">
                                        <img src="assets/img/blog/3.jpg" alt="Thumbnail Image" />
                                    </div>
                                    <div class="blog-content ptb-30 plr-35">
                                        <a href="blog-details.html">
                                            <h3 class="text-capitalize">WORKSHOP VIỆC LÀM</h3>
                                        </a>
                                        <h5 class="mb-5">20 Jun 2017</h5>
                                        <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                                        <a class="btn" href="#">Xem thêm</a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Promo Section End -->
       
        <section class="event-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <a href="index.php?route=tuyen-dung"><h2 class="mb-5">Cơ hội việc làm</h2></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <?php
                    for ($i=0; $i < 4; $i++) { 
                        extract($ds_job[$i]);
                        $xemthem = "index.php?route=chi-tiet&id=".$id;
                        echo '
                        <div class="col-xs-12 col-sm-6 mobi-mb-30">
                            <div class="event-box d-flex">                            
                                    <div class="align-container">
                                        <div class="align-inner">
                                            <a href="'.$xemthem.'">
                                                <h4>'.$title.'</h4>
                                            </a>                                            
                                            <p>'.$summary.'</p>
                                            <a class="btn" href="'.$xemthem.'">Xem thêm</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        ';
                    }
                    ?>                      
                </div>                
            </div>
            <!-- /.container -->
        </section>

        <section class="courses-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">DOANH NGHIỆP ĐỒNG HÀNH</h2>
                            <h4>Các doanh nghiệp hợp tác cùng khoa</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <?php
                        foreach ($ds_congty as $congty) {
                            extract($congty);
                            $img_path="public/career/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' style=\"width: 120px;\">";
                                    }
                            echo '
                            <div class="col-xs-4 col-sm-3 mobi-mb-30 text-center">
                                '.$image.'
                            </div>
                            ';
                        }
                    ?>
                    <div class="col-xs-4 col-sm-3 mobi-mb-30 text-center">
                        <img src="./assets/img/home/hcmut.png" style="width: 150px;" alt="">
                    </div>
                </div>
                <!-- /.row -->                
            </div>
            <!-- /.container -->
        </section>