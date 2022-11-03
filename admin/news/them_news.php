<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=tin-tuc" style="color: #2c2b2b;">Danh sách Tin tức </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm tin tức</h2>
                        </div class="row pt-20">
                            <!-- <form action="index.php?route=them_tintuc" enctype="multipart/form-data" method="post">
                                Kiểu tin tức <br>
                                <select name="type">
                                    <?php
                                        foreach ($ds_type as $type) {
                                            extract($type);
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                    ?>
                                    
                                </select> <br>    
                                Tiêu đề *<br>
                                <input type="text" placeholder="" name="name" required> <br>
                                Tác giả <br>
                                <input type="text" name="author"> <br>
                                Mô tả *<br>
                                <textarea name="description" cols="30" rows="5" required></textarea> <br>
                                Nội dung *<br>
                                <textarea name="content" cols="30" rows="10" required></textarea> <br>
                                
                                File đính kèm <br>
                                <input type="file" name="file"> <br>
                                Chú thích<br>
                                <input type="text" name="note"> <br>
                                Hình ảnh minh họa (nếu có)<br>
                                <input type="file" name="image"> <br>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Thêm mới" name="themmoi">
                                </div> 
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form> -->
                            <form action="index.php?route=them_tintuc" method="post">
                                Kiểu tin tức <br>
                                <select name="type">
                                    <?php
                                        foreach ($ds_type as $type) {
                                            extract($type);
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                    ?>
                                    
                                </select> <br> 
                                Tiêu đề <br>
                                <textarea type="text" cols="30" rows="2" name="title"></textarea> <br>
                                Nội dung <br>
                                <textarea class="tinymce" cols="30" rows="30" name="content"></textarea>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Thêm mới" name="themmoi">
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