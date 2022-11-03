<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Tuyển dụng</h2>
                        </div>
						<div class="row pt-20">
                            <a href="index.php?route=them-cong-ty" class="btn">Thêm Doanh nghiệp đồng hành + </a>
                        </div>
                        <div class="row pt-20">
                            <?php 
                                foreach ($ds_congty as $congty) {
                                    extract($congty);
                                    $img_path="../public/career/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' height=\"100\">";
                                    }
                                    $xoa_congty = "index.php?route=xoa-cong-ty&id=".$id;
                                    $sua_congty = "index.php?route=sua-cong-ty&id=".$id;
                                    echo '
                                    <div class="col-xs-3" style="border: 0.5px solid gray; width: fit-content;">
                                        '.$image.'
                                        <a style="color:green;" href="'.$sua_congty.'">  Sửa  </a>
                                        <a style="color:red;" href="'.$xoa_congty.'">  Xóa  </a>

                                    </div>
                                    ';                                    
                                }
                            ?>                            
                        </div>
                        <div class="row pt-20">
                            <a href="index.php?route=them-cong-viec" class="btn">Thêm Tin tuyển dụng + </a>
                        </div>
                        <div class="row pt-20">
                            <?php
                                // foreach ($ds_job as $job) {
                                //     extract($job);                                    
                                //     $xoa_tin = "index.php?route=xoa-cong-viec&id=".$id;
                                //     $sua_tin = "index.php?route=sua-cong-viec&id=".$id;
                                //     $an_tin = "index.php?route=an-cong-viec&id=".$id;
                                //     $hien_tin = "index.php?route=hien-cong-viec&id=".$id;
                                //     echo '<div class="col-9"><h4>'.
                                //         $name.'</h4></div>
                                //         <div class="col-3">
                                //         <a style="color:green;" href="'.$sua_tin.'">  Sửa  </a>
                                //         <a style="color:red;" href="'.$xoa_tin.'">  Xóa  </a>

                                //     ';     
                                //     if($status == 1){
                                //         echo '<a style="color:blue;" href="'.$an_tin.'">  Ẩn  </a>';
                                //     }
                                //     else {
                                //         echo '<a style="color:blue;" href="'.$hien_tin.'">  Hiện  </a>';
                                //     }     
                                //     echo '</div>'     ;                     
                                // } 
                            ?>
                        </div>
                        <div class="row pt-20">
                            <?php
                                
                                foreach ($ds_job as $job) {
                                    extract($job);                                    
                                    $xoa_tin = "index.php?route=xoa-cong-viec&id=".$id;
                                    $sua_tin = "index.php?route=sua-cong-viec&id=".$id;
                                    $an_tin = "index.php?route=an-cong-viec&id=".$id;
                                    $hien_tin = "index.php?route=hien-cong-viec&id=".$id;
                                    echo '<h4>'.
                                        $title.'</h4>
                                        <a style="color:green;" href="'.$sua_tin.'">  Sửa  </a>
                                        <a style="color:red;" href="'.$xoa_tin.'">  Xóa  </a>

                                    ';     
                                    if($status == 1){
                                        echo '<a style="color:blue;" href="'.$an_tin.'">  Ẩn  </a>';
                                    }
                                    else {
                                        echo '<a style="color:blue;" href="'.$hien_tin.'">  Hiện  </a>';
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