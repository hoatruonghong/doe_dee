<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Tin tức</h2>
                        </div>
						<div class="row pt-20">
                            <a href="index.php?route=them-tin-tuc" class="btn">Thêm + </a>
                        </div>
                        
                        <div class="row pt-20">
                            <div class="row pt-20">
                                <h3>Thông báo</h3>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>                                        
                                        <th scope="col">Ngày đăng</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_notification as $news) {
                                            extract($news);
                                            $sua_tin_tuc = "index.php?route=sua-tin-tuc&id=".$id;
                                            $xoa_tin_tuc = "index.php?route=xoa-tin-tuc&id=".$id;
                                            $an_tin_tuc = "index.php?route=an-tin-tuc&id=".$id;
                                            $hien_tin_tuc = "index.php?route=hien-tin-tuc&id=".$id;
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$title.'</td>
                                                <td>'.$time.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_tin_tuc.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_tin_tuc.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_tin_tuc.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_tin_tuc.'">  Hiện  </a>';
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
                            <div class="row pt-20">
                                <h3>Tin tức</h3>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>                                        
                                        <th scope="col">Ngày đăng</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_news as $news) {
                                            extract($news);
                                            $sua_tin_tuc = "index.php?route=sua-tin-tuc&id=".$id;
                                            $xoa_tin_tuc = "index.php?route=xoa-tin-tuc&id=".$id;
                                            $an_tin_tuc = "index.php?route=an-tin-tuc&id=".$id;
                                            $hien_tin_tuc = "index.php?route=hien-tin-tuc&id=".$id;
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$title.'</td>
                                                <td>'.$time.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_tin_tuc.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_tin_tuc.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_tin_tuc.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_tin_tuc.'">  Hiện  </a>';
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
                            <div class="row pt-20">
                                <h3>Tin công nghệ</h3>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>                                        
                                        <th scope="col">Ngày đăng</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_tech as $news) {
                                            extract($news);
                                            $sua_tin_tuc = "index.php?route=sua-tin-tuc&id=".$id;
                                            $xoa_tin_tuc = "index.php?route=xoa-tin-tuc&id=".$id;
                                            $an_tin_tuc = "index.php?route=an-tin-tuc&id=".$id;
                                            $hien_tin_tuc = "index.php?route=hien-tin-tuc&id=".$id;
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$title.'</td>
                                                <td>'.$time.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_tin_tuc.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_tin_tuc.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_tin_tuc.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_tin_tuc.'">  Hiện  </a>';
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