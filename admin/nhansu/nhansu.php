<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Nhân sự</h2>
                        </div>
                        <div class="row pt-20">
                            
                        </div>
						<div class="row pt-20">
                            <a href="index.php?route=them-nhan-su" class="btn">Thêm kiểu nhân sự + </a>
                            <a href="index.php?route=them-can-bo" class="btn">Thêm cán bộ +</a>
                        </div>
                        <?php
                                $i = 0;
                                foreach ($ds_nhansu as $nhansu) {
                                    extract($nhansu);
                                    extract($ds_canbo[$i]);
                                    $them_canbo="index.php?route=them-can-bo";
                                    $sua_nhansu="index.php?route=sua-nhan-su&id=".$id;
                                    $xoa_nhansu="index.php?route=xoa-nhan-su&id=".$id;                                                                      
                                    echo '
                                    <div class="row pt-20">
                                        <div class="col-sx-12 col-md-8">
                                            Kiểu nhân sự: '.$position.'
                                        </div>
                                        <div class="col-sx-12 col-md-4">
                                            <a style="color:green;" href="'.$sua_nhansu.'">  Sửa  </a>
                                            <a style="color:red;" href="'.$xoa_nhansu.'">  Xóa  </a>
                                                    
                                        </div> 
                                    </div>
                                    <div class="row pt-20 text-center">
                                    
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">HỌ & TÊN</th>
                                        <th scope="col">HÌNH ẢNH</th>
                                        <th scope="col">CHỨC VỤ</th>
                                        <th scope="col">PHÒNG LÀM VIỆC</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">PHONE</th>
                                        <th scope="col">LĨNH VỰC NGHIÊN CỨU</th>
                                        <th scope="col">File</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody> 
                                ';
                                $stt = 1;
                                foreach ($ds_canbo[$i] as $canbo) {                                    
                                    extract($canbo);
                                    $sua_canbo="index.php?route=sua-can-bo&id=".$id;
                                    $xoa_canbo="index.php?route=xoa-can-bo&id=".$id;  
                                    $img_path="../public/human/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' height='80'>";
                                    }
                                    echo '
                                    <tr>
                                        <th>'.$stt.'</th>
                                        <td>'.$name.'</td>
                                        <td>'.$image.'</td>
                                        <td>'.$position.'</td>
                                        <td>'.$lab.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$phone.'</td>
                                        <td>'.$research.'</td>
                                        <td>'.$file.'</td>                                        
                                        <td>
                                            <a style="color:green;" href="'.$sua_canbo.'">  Sửa  </a>
                                            <a style="color:red;" href="'.$xoa_canbo.'">  Xóa  </a>
                                        </td>
                                    </tr>                                     
                                    ';
                                    $stt = $stt+1;
                                };
                                echo '
                                </tbody>
                            </table>
                        </div>
                                    ';
                                    $i++;
                                }
                        ?>                                                       
                        
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->