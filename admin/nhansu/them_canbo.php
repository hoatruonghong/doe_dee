<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                            <h4>
                                <a href="index.php?route=nhan-su" style="color: #2c2b2b;">Nhân sự </a> 
                                <i class="zmdi zmdi-chevron-right"></i>
                                <a style="color: #000000;"> Cán bộ</a>
                            </h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm cán bộ</h2>
                        </div class="row pt-20">
                        <form action="index.php?route=them_canbo" method="post" enctype="multipart/form-data">
                                Kiểu nhân sự <br>
                            <select name="nhansu_id">
                                <?php
                                    foreach ($ds_nhansu as $nhansu) {
                                        extract($nhansu);
                                        echo '<option value="'.$id.'">'.$position.'</option>';
                                    }
                                ?>
                                
                            </select> <br>
                            Họ và tên *<br>
                            <input type="text" name="hoten"> <br>
                            Chức vụ * <br>
                            <input type="text" name="chucvu"> <br>                            
                            Hình ảnh <br>
                            <input type="file" name="hinh"> <br>
                            Chuyên ngành <br>
                            <input type="text" name="major"> <br>
                            Lĩnh vực nghiên cứu <br>
                            <input type="text" name="research"> <br>
                            Phòng làm việc <br>
                            <input type="text" name="phonglamviec"> <br>
                            Email <br>
                            <input type="text" name="email"> <br>
                            Số điện thoại <br>
                            <input type="text" name="phone"> <br>
                            Học vị <br>
                            <input type="text" name="degree"> <br>                                                        
                            File giới thiệu <br>
                            <input type="file" name="file"> <br>
                            Mô tả khác <br>
                            <input type="text" name="description"> <br>
                            <div class="mt-20">
                                <input type="submit" value="Thêm mới" name="themmoi" id="">
                            </div>                            
                        </form>    
                        </div>
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->