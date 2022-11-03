<!-- Breadcrumbs & Page Title Start -->
<div class="breadcrumbs-title">
            <img src="./assets/img/news/banner.jpg" alt="">
        </div>
        <!-- Breadcrumbs & Page Title End -->
        
        
        <section class="annouce-news section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <a href="./career.html"><h2 class="mb-5">THÔNG BÁO</h2></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                        <img src="./assets/img/news/thongbao.png" alt="">
                        <div class="mb-40">
                            <?php
                                extract($ds_notification[0]);
                                $detail = "index.php?route=chi-tiet&id=".$id;
                                echo '
                                <h3>'.$title.'</h3>
                                <a class="btn" href='.$detail.'>Xem thêm</a>
                                ';
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <?php
                            foreach ($ds_notification as $notification) {
                                extract($notification);
                                $detail = "index.php?route=chi-tiet&id=".$id;
                                echo '
                                <div class="mb-40">
                                    <h3>'.$title.'</h3>
                                    <a class="btn" href='.$detail.'>Xem thêm</a>
                                </div>
                                ';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="news bg-color-2 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <a href="./career.html"><h2 class="mb-5">TIN TỨC</h2></a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <?php
                        for ($i=0; $i < 4 ; $i++) { 
                            if (isset($ds_news[$i]) && (!empty($ds_news[$i]))){
                            extract($ds_news[$i]);
                            $detail = "index.php?route=chi-tiet&id=".$id;
                            echo '
                            <a href='.$detail.'>
                                <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-30 tab-mb-50">
                                    <div class="rt-member style2 white-bg">
                                        <img src="assets/img/news.jpg" alt="Gary Black" />
                                        <h4 class="theme-color mb-5">'.$title.'</h4>
                                        <h6 class="mb-15">'.$time.'</h6>
                                        <p class="mb-30">Mô tả</p>
                                        
                                    </div>
                                </div>
                            </a>
                            ';
                            }
                        }
                    ?>
                </div>
                <!-- /.row -->                
            </div>
        </section>

        <section class="tech-news section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <a href="./career.html"><h2 class="mb-5">TIN CÔNG NGHỆ</h2></a>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-xs-12 col-sm-12">
                    <?php
                        foreach ($ds_tech as $news) {
                            extract($news);
                            $detail = "index.php?route=chi-tiet&id=".$id;
                            echo '
                            <div class="col-xs-6 mb-40">
                                <h3>'.$title.'</h3>
                                <p> Mô tả</p>
                                <a class="btn" href='.$detail.'>Xem thêm</a>
                            </div>
                            ';
                        }
                    ?>                      
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Section Start -->
        <section class="event-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <a href="index.php?route=tuyen-dung"><h2 class="mb-5">THÔNG TIN TUYỂN DỤNG</h2></a>
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
        <!-- Event Section End -->  