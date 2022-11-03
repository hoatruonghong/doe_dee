<!-- Header Section End -->
<div class="breadcrumbs-title bg-img-5 parallax blank-space">
            <img src="./assets/img/lab/banner.jpg" alt="">
        </div>
        <!-- Breadcrumbs & Page Title End -->
        <div class="container pt-15">
            <h5><a href="index.html" style="color: #000000;">Home </a> <i class="zmdi zmdi-chevron-right"></i> Phòng thí nghiệm</h5>
        </div>
        
        
        <section class="lab-area promo-three ptb-100 white-bg">
    <div class="container"> 
    <?php
        $i = 0;
        foreach ($ds_lab as $lab) {
            extract($lab);
            $img_path = "public/lab/" . $image;
            if (is_file($img_path)) {
                $image = "<img src='" . $img_path . "'";
            }
            if ($i % 2 == 0) {
                echo '
                        <div class="row lab-row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="pt-40 mr-minus-10">
									<div class="section-title mb-45">
										<h3 class="mb-5 text-title">PHÒNG THÍ NGHIỆM <br>
                                        ' . $name . '</h3>
                                        <ul>
                                            <li>' . $address . '</li>
                                            <li>Giáo viên phụ trách: '.$teacher.'</li>
                                            <li>Phục vụ môn học ' . $subject . '.</li>
                                            <li>'.$description.'</li>
                                        </ul>      
									</div>									
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="slick-boxed">
									<div>
                                        <div class="item">' . $image . '</div> 
									</div>
								</div>
							</div>							
						</div>
                    </div>
                ';
            } else {
                echo '
                <div class="row lab-row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="slick-boxed">
                            <div>
                                <div class="item">' . $image . '</div>           
                            </div>
                        </div>
                    </div>	
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="pt-40 mr-minus-10">
                            <div class="section-title mb-45">
                                <h3 class="mb-5 text-title">PHÒNG THÍ NGHIỆM <br>
                                ' . $name . '</h3>
                                <ul>
                                    <li>' . $address . '</li>
                                    <li>Giáo viên phụ trách:'.$teacher.'</li>
                                    <li>Phục vụ môn học ' . $subject . '.</li>
                                    <li>'.$description.'</li>
                                </ul>      
                            </div>									
                        </div>
                    </div>													
                </div>

                ';
            };
            $i = $i + 1;
        }
    ?>
    </div>
</section>
        <!-- Testimonial Section Start -->
        <section class="testimonial-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Một số hình ảnh<br>
                            Cơ sở Vật chất Bộ môn Điện tử</h2>                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div id="testimonial" class="text-center">
                    <?php
                    foreach($ds_hinh as $hinh) { 
                        extract($hinh);
                        $img_path="public/lab/".$image;
                        if(is_file($img_path)){
                            $image="<img src='".$img_path."' style=\"height:150px;\" >";
                        }
                        echo '                           
                        <div class="slide-item">
                            <div class="say-box ptb-30 white-bg">
                                '.$image.'                                    
                            </div>
                        </div>
                        ';
                    }
                    ?>                
            </div>
        </section>
        <!-- Testimonial Section End -->