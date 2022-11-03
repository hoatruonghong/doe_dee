<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Trang Nghiên cứu</h2>
                        </div>
                        
						<div class="row pt-20">
                            <a href="index.php?route=them-de-tai" class="btn">Thêm Đề tài nghiên cứu + </a>
                            <a href="index.php?route=them-nhom-nghien-cuu" class="btn">Thêm Nhóm nghiên cứu +</a>
                        </div>
                        <div class="row pt-20">
                            <div class="row pt-20">
                                <h3>Đề tài nghiên cứu</h3>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>                                        
                                        <th scope="col">Năm</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <?php
                                        $i = 1;
                                        foreach ($ds_research as $research) {
                                            extract($research);
                                            $sua_detai="index.php?route=sua-de-tai&id=".$id;
                                            $xoa_detai="index.php?route=xoa-de-tai&id=".$id;
                                            $an_detai="index.php?route=hien-de-tai&id=".$id;
                                            $hien_detai="index.php?route=an-de-tai&id=".$id;
                                            
                                            echo '
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$title.'</td>
                                                <td>'.$time.'</td>
                                                <td>
                                                <a style="color:green;" href="'.$sua_detai.'">  Sửa  </a>
                                                <a style="color:red;" href="'.$xoa_detai.'">  Xóa  </a>
                                                ';
                                                if($status == 1){
                                                    echo '<a style="color:blue;" href="'.$an_detai.'">  Ẩn  </a>';
                                                }
                                                else {
                                                    echo '<a style="color:blue;" href="'.$hien_detai.'">  Hiện  </a>';
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