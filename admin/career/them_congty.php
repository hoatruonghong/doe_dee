<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=tuyen-dung" style="color: #2c2b2b;">Danh sách Doanh nghiệp </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm Doanh nghiệp</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=them_congty" enctype="multipart/form-data" method="post">
                                Tên Doanh nghiệp *<br>
                                <input type="text" name="name" required> <br>
                                Địa điểm * <br>
                                <input type="text" name="address" required> <br>                                
                                Mô tả<br>
                                <textarea name="description" cols="30" rows="5"></textarea> <br>
                                Hình ảnh<br>
                                <input type="file" name="image"> <br>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Thêm mới" name="themmoi">
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