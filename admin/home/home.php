<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang chủ</h2>
                        </div>
						<div class="row pt-20">
                            <form action="index.php?route=them-banner" enctype="multipart/form-data" method="post">
                                <input type="file" name="image">
                                <input class="btn" type="submit" value="Thêm banner +" name="themmoi">
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form>
                        </div>
                        <div class="row pt-20">
                            <?php 
                                foreach ($ds_banner as $banner) {
                                    extract($banner);
                                    $img_path="../public/home/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' height=\"100\">";
                                    }
                                    $xoa_hinh = "index.php?route=xoa-banner-home&id=".$id;
                                    echo '
                                    <div class="col-xs-3" style="border: 0.5px solid gray; width: fit-content;">
                                        '.$image.'
                                        <a style="color:red;" href="'.$xoa_hinh.'">  Xóa  </a>

                                    </div>
                                    ';                                    
                                }
                            ?>                            
                        </div>
                        
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->