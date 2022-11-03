<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                            <h4>
                                <a href="index.php?route=nhan-su" style="color: #2c2b2b;">Nhân sự </a> 
                                <i class="zmdi zmdi-chevron-right"></i>
                                <a style="color: #000000;"> Cán bộ</a>
                            </h4></div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm kiểu nhân sự</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=them_nhansu" method="post">
                                Kiểu nhân sự<br>
                                <input type="text" placeholder="Kiểu nhân sự" name="kieunhansu">
                                <div class="mt-20">
                                    <input type="submit" value="Thêm mới" name="themmoi">
                                </div> 
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form>
                        </div>
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->        