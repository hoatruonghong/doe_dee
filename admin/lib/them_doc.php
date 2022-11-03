<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=thu-vien" style="color: #2c2b2b;">Danh sách Văn bản </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm văn bản</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=them_vanban" enctype="multipart/form-data" method="post">
                                Tên văn bản *<br>
                                <input type="text" placeholder="" name="name" required> <br>
                                Năm xuất bản * <br>
                                <input type="text" name="date" required> <br>
                                Tác giả *<br>
                                <input type="text" name="author"> <br>
                                Mô tả *<br>
                                <textarea name="description" cols="30" rows="5"></textarea> <br>
                                Lĩnh vực<br>
                                <input type="text" name="field"> <br>
                                File download<br>
                                <input type="file" name="download"> <br>
                                Link tham khảo<br>
                                <input type="text" name="link"> <br>
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