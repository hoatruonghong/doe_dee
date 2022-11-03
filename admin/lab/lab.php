<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Phòng thí nghiệm</h2>
                        </div>
						<div class="row pt-20">
                            <a href="index.php?route=them-phong-thi-nghiem" class="btn">Thêm phòng thí nghiệm + </a>
                        </div>
                        <div class="row pt-20">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên phòng</th>
                                    <th scope="col">Địa điểm</th>
                                    <th scope="col">Giảng viên</th>
                                    <th scope="col">Môn học</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php
                                    $i = 1;
                                    foreach ($ds_lab as $lab) {
                                        extract($lab);
                                        $sua_lab = "index.php?route=sua-phong-thi-nghiem&id=".$id;
                                        $xoa_lab = "index.php?route=xoa-phong-thi-nghiem&id=".$id;
                                        $an_lab = "index.php?route=an-phong-thi-nghiem&id=".$id;
                                        $hien_lab = "index.php?route=hien-phong-thi-nghiem&id=".$id;
                                        $img_path="../public/lab/".$image;
                                        if(is_file($img_path)){
                                            $image="<img src='".$img_path."' height='80'>";
                                        }
                                        
                                        echo '
                                        <tr>
                                            <th scope="row">'.$i.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$teacher.'</td>  
                                            <td>'.$subject.'</td>                                          
                                            <td>'.$description.'</td>
                                            <td>'.$image.'</td>
                                            <td>
                                            <a style="color:green;" href="'.$sua_lab.'">  Sửa  </a>
                                            <a style="color:red;" href="'.$xoa_lab.'">  Xóa  </a>
                                            ';
                                            if($status == 1){
                                                echo '<a style="color:blue;" href="'.$an_lab.'">  Ẩn  </a>';
                                            }
                                            else {
                                                echo '<a style="color:blue;" href="'.$hien_lab.'">  Hiện  </a>';
                                            }
                                        echo '
                                            </td>
                                        </tr>
                                        ';
                                        $i++;
                                    }
                                ?>   
                            </tbody>
                        </table>
                        </div>                         
                        <div class="row pt-20" style="border: 1px solid gray; border-radius: 2px; padding: 10px;">
                            <h3 href="#" class="blue-color">Hình ảnh phòng thí nghiệm + </h3>
                            <form action="index.php?route=them_hinh_phongthinghiem" enctype="multipart/form-data" method="post">                                
                                <input type="file" name="hinh">
                                <input type="submit" style="color:#000000;" value="Thêm" name="them">                            
                            </form>
                        </div>
                        <div class="row pt-20">   
                            <?php 
                            if(isset($ds_hinh)&&($ds_hinh)) {
                                foreach ($ds_hinh as $hinhanh) {
                                    extract($hinhanh);
                                    $img_path="../public/lab/".$image;
                                    if(is_file($img_path)){
                                        $image="<img src='".$img_path."' height=\"200\">";
                                    }
                                    $xoa_hinh = "index.php?route=xoa_hinh_phongthinghiem&id=".$id;
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