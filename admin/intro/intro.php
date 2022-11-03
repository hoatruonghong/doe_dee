<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Giới thiệu</h2>
                        </div>
						                   
                        <div class="row pt-20" style="border: 1px solid gray; border-radius: 2px; padding: 10px;">
                            <h3 href="#" class="blue-color">Hình ảnh giới thiệu + </h3>
                            <form action="index.php?route=them_hinh_gioithieu" enctype="multipart/form-data" method="post">                                
                                <input type="file" name="hinh">
                                <input type="submit" style="color:#000000;" value="Thêm" name="them">                            
                            </form>
                        </div>
                        <div class="row pt-20">   
                            <?php 
                            if(isset($ds_hinh)&&($ds_hinh)) {
                                foreach ($ds_hinh as $hinhanh) {
                                    extract($hinhanh);
                                    $img_path="../public/intro/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' height=\"200\">";
                                    }
                                    $xoa_hinh = "index.php?route=xoa_hinh_gioithieu&id=".$id;
                                    echo '
                                    <div style="border: 0.5px solid gray; width: fit-content;">
                                        '.$image.'
                                        <a href="'.$xoa_hinh.'"><span class="badge badge-pill badge-danger">X</span></a>
                                    </div>
                                    ';
                                }
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