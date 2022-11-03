<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=phong-thi-nghiem" style="color: #2c2b2b;">Danh sách Phòng thí nghiệm </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm phòng thí nghiệm</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=them_phongthinghiem" enctype="multipart/form-data" method="post">
                                Tên phòng thí nghiệm *<br>
                                <input type="text" placeholder="" name="ten" required> <br>
                                Địa điểm * <br>
                                <input type="text" name="diadiem" required> <br>
                                Giảng viên phụ trách<br>
                                <input type="text" name="giaovien"> <br>
                                Môn học<br>
                                <input type="text" name="monhoc"> <br>
                                Mô tả<br>
                                <textarea name="mota" cols="30" rows="5"></textarea> <br>
                                Hình ảnh<br>
                                <input type="file" name="hinh"> <br>
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