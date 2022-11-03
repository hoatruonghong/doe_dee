<?php
if(is_array($doc)){
    extract($doc);
}
?>

<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=thu-vien" style="color: #2c2b2b;">Danh sách Văn bản </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Cập nhật văn bản</h2>
                        </div class="row pt-20">
                            <form action="index.php?route=sua_vanban" enctype="multipart/form-data" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
                                Tên văn bản *<br>
                                <input type="text"  value="<?php if(isset($name)&&($name!="")) echo $name;?>" name="name" required> <br>
                                Năm xuất bản * <br>
                                <input type="text" value="<?php if(isset($date)&&($date!="")) echo $date;?>" name="date" required> <br>
                                Tác giả *<br>
                                <input type="text" value="<?php if(isset($author)&&($author!="")) echo $author;?>" name="author"> <br>
                                Mô tả *<br>
                                <textarea name="description" cols="30" rows="5"><?php if(isset($description)&&($description!="")) echo $description;?></textarea> <br>
                                Lĩnh vực<br>
                                <input type="text" value="<?php if(isset($field)&&($field!="")) echo $field;?>" name="field"> <br>
                                File download<br>
                                <input type="file" value="<?php if(isset($download)&&($download!="")) echo $download;?>" name="download"> <br>
                                Link tham khảo<br>
                                <input type="text" value="<?php if(isset($link)&&($link!="")) echo $link;?>" name="link"> <br>
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