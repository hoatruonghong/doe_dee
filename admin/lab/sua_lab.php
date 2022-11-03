<?php
if(is_array($lab)){
    extract($lab);
}
?>
<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=phong-thi-nghiem" style="color: #2c2b2b;">Danh sách Phòng thí nghiệm </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Cập nhật phòng thí nghiệm</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=sua_phongthinghiem" enctype="multipart/form-data" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
                                Tên phòng thí nghiệm *<br>
                                <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="ten" required> <br>
                                Địa điểm * <br>
                                <input type="text" value="<?php if(isset($address)&&($address!="")) echo $address;?>" name="diadiem" required> <br>
                                Giáo viên<br>
                                <input type="text" value="<?php if(isset($teacher)&&($teacher!="")) echo $teacher;?>" name="giaovien"> <br>
                                Môn học<br>
                                <input type="text" value="<?php if(isset($subject)&&($subject!="")) echo $subject;?>" name="monhoc"> <br>
                                Mô tả<br>
                                <textarea name="mota" cols="30" rows="5"><?php if(isset($description)&&($description!="")) echo $description;?></textarea> <br>
                                Hình<br>
                                <input type="file" name="hinh"> <br>
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