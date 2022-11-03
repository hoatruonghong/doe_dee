<?php
if(is_array($canbo)){
    extract($canbo);
    $canbo_id = $id;
}
?>
<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                            <h4>
                                <a href="index.php?route=nhan-su" style="color: #2c2b2b;">Nhân sự </a> 
                                <i class="zmdi zmdi-chevron-right"></i>
                                <a style="color: #000000;"> Cán bộ</a>
                            </h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Sửa thông tin cán bộ</h2>
                        </div class="row pt-20">
                        <form action="index.php?route=sua_canbo" method="post" enctype="multipart/form-data">
                            
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $canbo_id;?>">
                            Họ và tên<br>
                            <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="hoten"> <br>
                            Chức vụ <br>
                            <input type="text" value="<?php if(isset($position)&&($position!="")) echo $position;?>" name="chucvu"> <br>

                            Hình ảnh <br>
                            <input type="file" name="hinh"> <br>
                            Chuyên ngành <br>
                            <input type="text" value="<?php if(isset($major)&&($major!="")) echo $major;?>" name="major"> <br>
                            Lĩnh vực nghiên cứu <br>
                            <input type="text" value="<?php if(isset($research)&&($research!="")) echo $research;?>" name="research"> <br>
                            Phòng làm việc <br>
                            <input type="text" value="<?php if(isset($lab)&&($lab!="")) echo $lab;?>" name="phonglamviec"> <br>
                            Email <br>
                            <input type="text" value="<?php if(isset($email)&&($email!="")) echo $email;?>" name="email"> <br>
                            Số điện thoại <br>
                            <input type="text" value="<?php if(isset($phone)&&($phone!="")) echo $phone;?>" name="phone"> <br>
                            Học vị <br>
                            <input type="text" value="<?php if(isset($degree)&&($degree!="")) echo $degree;?>" name="degree"> <br>                                                        
                            File giới thiệu <br>
                            <input type="file" value="<?php if(isset($file)&&($file!="")) echo $file;?>" name="file"> <br>
                            Mô tả khác <br>
                            <input type="text" value="<?php if(isset($description)&&($description!="")) echo $description;?>" name="description"> <br>
                            
                            <div class="mt-20">
                                <input type="submit" value="Cập nhật" name="capnhat">
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