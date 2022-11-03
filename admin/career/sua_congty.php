<?php
if(is_array($congty)){
    extract($congty);
}
?>
<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=tuyen-dung" style="color: #2c2b2b;">Danh sách Doanh nghiệp </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Cập nhật Doanh nghiệp</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=sua_congty" enctype="multipart/form-data" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
                                Tên Doanh nghiệp *<br>
                                <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="name" required> <br>
                                Địa điểm * <br>
                                <input type="text" value="<?php if(isset($address)&&($address!="")) echo $address;?>" name="address" required> <br>                                
                                Mô tả<br>
                                <textarea name="description" cols="30" rows="5"><?php if(isset($description)&&($description!="")) echo $description;?></textarea> <br>
                                Hình ảnh<br>
                                <input type="file" name="image"> <br>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Cập nhật" name="capnhat">
                                </div> 
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form>
                        </div>
					</div>					
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Listing Section End -->        