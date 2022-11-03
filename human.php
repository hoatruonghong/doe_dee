<!-- Breadcrumbs & Page Title Start -->
<div class="breadcrumbs-title">
            <img src="./assets/img/human/banner.jpg" alt="">
        </div>
        <!-- Testimonial Section Start -->
        <section class="testimonial-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">ĐỘI NGŨ ĐÀO TẠO CHẤT LƯỢNG </h2>                    
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="human-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h4>
                                Bộ môn Điện tử trực thuộc Khoa Điện - Điện tử, Đại học Bách Khoa - Đại học Quốc gia Tp.HCM, được thành lập vào năm 1975 với 15 giảng viên do TS. Trần Kim Lợi làm chủ nhiệm bộ môn. Đến nay, bộ môn đã có hơn 30 giảng viên là tiến sĩ, thạc sĩ đã tốt nghiệp từ nhiều nước trên thế giới như Mỹ, Anh, Pháp, Canada, Nhật Bản, Hàn Quốc, Úc, ...
        <br>
                                Nhiệm vụ của Bộ môn điện tử là giảng dạy và đào tạo các môn học liên quan đến chuyên ngành điện tử cho sinh viên đại học và cao học. 
        <br>                   
                                Ngoài ra, Bộ môn còn thực hiện các đề tài nghiên cứu và thiết kế thiết kế mạch điện tử, vi mạch, hệ thống nhúng, hệ thống trên chip, hệ thống xử lý tín hiệu, và hệ thống điện tử y sinh.
        <br>                   
                                Bên cạnh đó, Bộ môn còn hợp tác với các tổ chức nghiên cứu và sản xuất bên ngoài để phát triển các ứng dụng về sản phẩm điện tử.
                            </h4>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <img src="./assets/img/human/Nhansu.png" width="400">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->
        
        <!-- Fun Facts Start -->
        <section class="fun-facts-area ptb-150 bg-img-5 parallax overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/1.png" alt="Icon" />
                            <h1><span class="counter theme-color">75</span></h1>
                            <h5 class="no-margin">Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/2.png" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Classes complete</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/3.png" alt="Icon" />
                            <h1><span class="counter theme-color">120</span></h1>
                            <h5 class="no-margin">all courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-func">
                            <img class="mb-25" src="assets/img/icons/facts/4.png" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Students enrolled</h5>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Fun Facts End -->
        <!-- Our Team Section Start -->
        <section class="team-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">VỀ CHÚNG TÔI</h2>
                            <h3>BAN CHỦ NHIỆM BỘ MÔN</h3>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xs-12 justify-center">
                        <?php
                        if(is_array($chunhiem)){
                            extract($chunhiem[0]);
                        }
                        $chitiet= "index.php?route=can-bo&id=".$id;
                        $img_path="public/human/".$image;
                        if(is_file($img_path)){
                            $image="<img src='".$img_path."' width=\"200\">";
                        }
                        echo '
                        <a href="">
                        <div class="rt-member style2 white-bg">
                            '.$image.'
                            <h4 class="theme-color mb-5">Chủ nhiệm Bộ môn</h4>
                            <h6 class="mb-15">'.$position.'</h6>
                            <h2 class="mb-30">'.$name.'</h2>                            
                        </div>
                        </a>
                        ';
                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                        <div class="rt-member style2 white-bg">
                            <img src="assets/img/people/7.png" alt="Gary Black" />
                            <h4 class="theme-color mb-5">Phó chủ nhiệm Bộ môn</h4>
                            <h6 class="mb-15">Giảng Viên - Tiến Sĩ</h6>
                            <h4 class="mb-30">TRẦN HOÀNG LINH</h4>                            
                        </div>
                    </div>
                    <!-- /.rt-member Box End -->
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                        <div class="rt-member style2 white-bg">
                            <img src="assets/img/people/7.png" alt="Gary Black" />
                            <h4 class="theme-color mb-5">Phó chủ nhiệm Bộ môn</h4>
                            <h6 class="mb-15">Giảng Viên - Tiến Sĩ</h6>
                            <h4 class="mb-30">TRẦN HOÀNG LINH</h4>                            
                        </div>
                    </div>
                    <!-- /.rt-member Box End -->
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                        <div class="rt-member style2 white-bg">
                            <img src="assets/img/people/7.png" alt="Gary Black" />
                            <h4 class="theme-color mb-5">Phó chủ nhiệm Bộ môn</h4>
                            <h6 class="mb-15">Giảng Viên - Tiến Sĩ</h6>
                            <h4 class="mb-30">TRẦN HOÀNG LINH</h4>                            
                        </div>
                    </div>
                    <!-- /.rt-member Box End -->
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                        <div class="rt-member style2 white-bg">
                            <img src="assets/img/people/7.png" alt="Gary Black" />
                            <h4 class="theme-color mb-5">Phó chủ nhiệm Bộ môn</h4>
                            <h6 class="mb-15">Giảng Viên - Tiến Sĩ</h6>
                            <h4 class="mb-30">TRẦN HOÀNG LINH</h4>                            
                        </div>
                    </div>
                    <!-- /.rt-member Box End -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Our Team Section End -->
        <!-- Features Section Start -->
        <section class="features-area pb-100 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Cán bộ giảng dạy</h2>                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row text-center">
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    <a href="./human-detail.html">
                        <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                            <div class="rt-member style2 white-bg">
                                <img src="assets/img/human/teacher2.png"/>
                                <h4 class="theme-color mb-5">Giảng viên, Thạc sĩ</h4>
                                <h4 class="mb-15">Cố vấn đào tạo</h4>
                                <h3 class="mb-30">HỒ TRUNG MỸ</h3>                            
                            </div>
                        </div>
                        <!-- /.rt-member Box End -->
                    </a>   
                    
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Features Section End -->