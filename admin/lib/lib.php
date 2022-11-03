<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Thư viện</h2>
                        </div>
						<div class="row pt-20">
                            <a href="index.php?route=them-van-ban" class="btn">Thêm văn bản + </a>
                        </div>
                        <div class="row pt-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên văn bản</th>
                                        <th scope="col">Năm xuất bản</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Tác giả</th>
                                        <th scope="col">Tải về</th>
                                        <th scope="col">Link tham khảo</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_doc as $doc) {
                                            extract($doc);
                                            $sua_lib_doc = "index.php?route=sua-van-ban&id=".$id;
                                            $xoa_lib_doc = "index.php?route=xoa-van-ban&id=".$id;
                                            $an_lib_doc = "index.php?route=an-van-ban&id=".$id;
                                            $hien_lib_doc = "index.php?route=hien-van-ban&id=".$id;
                                            $img_path="../public/lib/".$image;
                                            if(is_file($img_path)){
                                                $image="<img src='".$img_path."' height='80'>";
                                            }
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$name.'</td>
                                                <td>'.$date.'</td>
                                                <td>'.$description.'</td>  
                                                <td>'.$author.'</td>                                          
                                                <td>'.$download.'</td>
                                                <td>'.$link.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_lib_doc.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_lib_doc.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_lib_doc.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_lib_doc.'">  Hiện  </a>';
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
                        <div class="row pt-20">
                            <a href="index.php?route=them-luan-van" class="btn">Thêm luận văn luận án + </a>
                        </div>
                        <div class="row pt-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên văn bản</th>
                                        <th scope="col">Tác giả</th>
                                        <th scope="col">Lĩnh vực</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Tải về</th>
                                        <th scope="col">Học kỳ</th>
                                        <th scope="col">Ghi chú</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_thesis as $thesis) {
                                            extract($thesis);
                                            $sua_lib_thesis = "index.php?route=sua-luan-van&id=".$id;
                                            $xoa_lib_thesis = "index.php?route=xoa-luan-van&id=".$id;
                                            $an_lib_thesis = "index.php?route=an-luan-van&id=".$id;
                                            $hien_lib_thesis = "index.php?route=hien-luan-van&id=".$id;
                                            $img_path="../public/lib/".$image;
                                            if(is_file($img_path)){
                                                $image="<img src='".$img_path."' height='80'>";
                                            }
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$name.'</td>
                                                <td>'.$author.'</td>
                                                <td>'.$field.'</td>  
                                                <td>'.$description.'</td>                                          
                                                <td>'.$download.'</td>
                                                <td>'.$semester.'</td>
                                                <td>'.$note.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_lib_thesis.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_lib_thesis.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_lib_thesis.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_lib_thesis.'">  Hiện  </a>';
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
                        
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->