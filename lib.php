 <!-- Breadcrumbs & Page Title Start -->
 <div class="breadcrumbs-title">
            <img src="./assets/img/lib/banner.jpg" alt="">
        </div>
        <!-- Breadcrumbs & Page Title End -->
        
        <!-- Courses Grid View Start -->
        <section class="courses-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 pb-80">
                        <div class="courses-bar">
                            <div class="section-title pull-left">
                                <h2 class="mb-5">Văn bản</h2>
                                <hr class="line">
                            </div>                            
                            <!-- Nav tabs End -->
                            <!-- <div class="sort-courses pull-right mlr-40">
								<form action="#">
									<select name="courses" id="courses">
										<option value="All Courses" selected>Tất cả lĩnh vực</option>
										<option value="Education">Education</option>
										<option value="Photoshop">Photoshop</option>
										<option value="Microsoft">Microsoft</option>
										<option value="Design">Design</option>
										<option value="Learning">Learning</option>
									</select>
								</form>
                                <span><i class="zmdi zmdi-chevron-down"></i></span>
                            </div> -->
                            <!-- <div class="search-course pull-right">
                                <form action="index.php?route=thu-vien&search_doc">
                                    <input type="text" name="search" placeholder="Tìm kiếm văn bản" />
                                    <button class="btn" type="submit">Tìm kiếm</button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="grid-view">
                                <div class="row">
                                    <?php
                                        foreach ($ds_doc as $doc) {
                                            extract($doc);

                                            echo '
                                            <div class="col-xs-12 col-sm-6 col-md-4 mb-50">
                                                <div class="course-box">
                                                    <div class="course-content plr-25">
                                                        <div class="thumb text-center">
                                                            <a href="course-details.html"><img src="assets/img/course/1.jpg" alt="Thumbnail Image" /></a>
                                                            
                                                        </div>
                                                        <a href="course-details.html">
                                                            <h3 class="text-capitalize">'.$name.'</h3>
                                                        </a>
                                                        <div class="date-comment clearfix">
                                                            <div class="pull-left">
                                                                <h6><span>Date: </span>'.$date.'</h6>
                                                            </div>                                                    
                                                        </div>
                                                        <p class="mb-20">'.$description.'</p>
                                                        <a class="btn btn-1" href="'.$link.'">Xem</a>
                                                    </div>                                            
                                                </div>
                                            </div>
                                            ';
                                        }
                                    ?>                                   
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.Grid View End -->                            
                        </div>
                        <!-- /.Tab panes End -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="rt-pagination round pt-60 text-center">
                            <?php
                            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                            if ($current_page > 1 && $total_page > 1){
                                echo '<a style="color:black;" href="index.php?route=thu-vien&page_doc='.($current_page-1).'">Prev</a> | ';
                            }
                            
                            // Lặp khoảng giữa
                            for ($i = 1; $i <= $total_page; $i++){
                                // Nếu là trang hiện tại thì hiển thị thẻ span
                                // ngược lại hiển thị thẻ a
                                if ($i == $current_page){
                                    echo '<span>'.$i.'</span> | ';
                                }
                                else{
                                    echo '<a style="color:black;" href="index.php?route=thu-vien&page_doc='.$i.'">'.$i.'</a> | ';
                                }
                            }
                            
                            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                            if ($current_page < $total_page && $total_page > 1){
                                echo '<a style="color:black;" href="index.php?route=thu-vien&page_doc='.($current_page+1).'">Next</a> | ';
                            }
                            ?>
                            <!-- <ul class="clearfix">
                                <li class="active"><a href="javascript:void(0)">01</a></li>
                                <li><a href="javascript:void(0)">02</a></li>
                                <li><a href="javascript:void(0)">03</a></li>
                                <li><a href="javascript:void(0)"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul> -->
                        </div>
                        <!-- /.Pagination -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Courses Grid View End -->

        <!-- Courses Grid View Start -->
        <section class="courses-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 pb-80">
                        <div class="courses-bar">
                            <div class="section-title pull-left">
                                <h2 class="mb-5">Luận văn, Luận án</h2>
                                <hr class="line">
                            </div>                            
                            <!-- Nav tabs End -->
                            <!-- <div class="sort-courses pull-right mlr-40">
								<form action="#">
									<select name="courses" id="courses">
										<option value="All Courses" selected>Tất cả lĩnh vực</option>
										<option value="Education">Education</option>
										<option value="Photoshop">Photoshop</option>
										<option value="Microsoft">Microsoft</option>
										<option value="Design">Design</option>
										<option value="Learning">Learning</option>
									</select>
								</form>
                                <span><i class="zmdi zmdi-chevron-down"></i></span>
                            </div> -->
                            <!-- <div class="search-course pull-right">
                                <form action="index.php?route=thu-vien&search_thesis">
                                    <input type="text" name="search" placeholder="Tìm kiếm luận văn" />
                                    <button class="btn" type="submit">Tìm</button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="grid-view">
                                <div class="row">
                                <?php
                                        foreach ($ds_thesis as $doc) {
                                            extract($doc);

                                            echo '
                                            <div class="col-xs-12 col-sm-6 col-md-4 mb-50">
                                                <div class="course-box">
                                                    <div class="course-content plr-25">
                                                        <div class="thumb text-center">
                                                            <a href="course-details.html"><img src="assets/img/course/1.jpg" alt="Thumbnail Image" /></a>
                                                            
                                                        </div>
                                                        <a href="course-details.html">
                                                            <h3 class="text-capitalize">'.$name.'</h3>
                                                        </a>
                                                        <div class="date-comment clearfix">
                                                            <div class="pull-left">
                                                                <h6><span>Date: </span>'.$date.'</h6>
                                                            </div>                                                    
                                                        </div>
                                                        <p class="mb-20">'.$description.'</p>
                                                        <a class="btn btn-1" href="'.$link.'">Xem</a>
                                                    </div>                                            
                                                </div>
                                            </div>
                                            ';
                                        }
                                    ?>                                                                      
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.Grid View End -->                            
                        </div>
                        <!-- /.Tab panes End -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="rt-pagination round pt-60 text-center">
                        <?php
                            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                            if ($current_page_thesis > 1 && $total_page_thesis > 1){
                                echo '<a style="color:black;" href="index.php?route=thu-vien&page_thesis='.($current_page_thesis-1).'">Prev</a> | ';
                            }
                            
                            // Lặp khoảng giữa
                            for ($i = 1; $i <= $total_page_thesis; $i++){
                                // Nếu là trang hiện tại thì hiển thị thẻ span
                                // ngược lại hiển thị thẻ a
                                if ($i == $current_page_thesis){
                                    echo '<span>'.$i.'</span> | ';
                                }
                                else{
                                    echo '<a style="color:black;" href="index.php?route=thu-vien&page_thesis='.$i.'">'.$i.'</a> | ';
                                }
                            }
                            
                            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                            if ($current_page_thesis < $total_page_thesis && $total_page_thesis > 1){
                                echo '<a style="color:black;" href="index.php?route=thu-vien&page_thesis='.($current_page_thesis+1).'">Next</a> | ';
                            }
                            ?>
                        </div>
                        <!-- /.Pagination -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Courses Grid View End -->

        <!-- Fun Facts Start -->
        <section class="fun-facts-area ptb-100 mb-60 bg-img-3 parallax overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/1.png" alt="Icon" />
                            <h1><span class="counter theme-color">75</span></h1>
                            <h5 class="no-margin white-color">Giảng viên</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/2.png" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin white-color">Văn bản</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/3.png" alt="Icon" />
                            <h1><span class="counter theme-color">120</span></h1>
                            <h5 class="no-margin white-color ">Luận văn</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/4.png" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin white-color">Luận án</h5>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Fun Facts End -->
        
        <!-- Testimonial Section Start -->
        <section class="testimonial-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Thư viện ảnh
                            </h2>                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div id="testimonial" class="text-center">
                <div class="slide-item">
                    <div class="isay-box ptb-30 white-bg">
                        <img src="assets/img/news/lvtn.png" alt="Icon" />                        
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="isay-box ptb-30 white-bg">
                        <img src="assets/img/intro/lab.png" alt="Icon" />                        
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="isay-box ptb-30 white-bg">
                        <img src="assets/img/news/thongbao.png" alt="Icon" />                        
                    </div>
                </div>
                <!-- /.Item end -->
            </div>
        </section>
        <!-- Testimonial Section End -->