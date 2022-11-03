<?php
if(is_array($job)){
    extract($job);
}
?>
<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=tuyen-dung" style="color: #2c2b2b;">Danh sách Tuyển dụng </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Thêm Tin tuyển dụng</h2>
                        </div class="row pt-20">
                            <!-- <form action="index.php?route=sua_congviec" enctype="multipart/form-data" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
                                Tên công việc*<br>
                                <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="name" required> <br>
                                Công ty *<br>
                                <input type="text" value="<?php if(isset($company)&&($company!="")) echo $company;?>" name="company" required> <br>
                                Địa chỉ *<br>
                                <input type="text" value="<?php if(isset($location)&&($location!="")) echo $location;?>" name="location" required> <br>
                                Hạn ứng tuyển *<br>
                                <input type="date" value="<?php if(isset($deadline)&&($deadline!="")) echo $deadline;?>" name="deadline" required> <br>
                                Số lượng tuyển *<br>
                                <input type="text" value="<?php if(isset($quantity)&&($quantity!="")) echo $quantity;?>" name="quantity" required> <br>
                                Giới thiệu chung <br>
                                <input type="text" value="<?php if(isset($summary)&&($summary!="")) echo $id;?>" name="summary"> <br>                                
                                Mô tả công việc *<br>
                                <textarea name="description" cols="30" rows="5" required><?php if(isset($description)&&($description!="")) echo $description;?></textarea> <br>
                                Yêu cầu *<br>
                                <textarea name="requirement" cols="30" rows="5" required><?php if(isset($requirement)&&($requirement!="")) echo $requirement;?></textarea> <br>
                                Thông tin liên hệ <br>
                                <textarea name="howtoapply" cols="30" rows="5"><?php if(isset($howtoapply)&&($howtoapply!="")) echo $howtoapply;?></textarea> <br>
                                
                                File đính kèm (nếu có)<br>
                                <input type="file" name="file"> <br>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Cập nhật" name="capnhat">
                                </div> 
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form> -->
                            <form action="index.php?route=sua_job" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
                                Tên công việc*<br>
                                <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="name" required> <br>
                                Giới thiệu chung <br>
                                <input type="text" value="<?php if(isset($summary)&&($summary!="")) echo $summary;?>" name="summary"> <br>  
                                <textarea class="tinymce" cols="30" rows="30" name="content"><?php if(isset($content)&&($content!="")) echo $content;?></textarea>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Cập nhật" name="capnhat">
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