<?php
if(is_array($news)){
    extract($news);
}
?>

<div class="col-xs-12 col-sm-10 mobi-mb-50">
                        <div class="row">
                        <h4><a href="index.php?route=tin-tuc" style="color: #2c2b2b;">Danh sách Tin tức </a></h4>
                        </div>
                        <div class="row section-title text-center">
                            <h2 class="blue-color">Cập nhật tin tức</h2>
                        </div class="row pt-20">
                            <!-- <form action="index.php?route=sua_tintuc" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id;?>">
                                
                                Tiêu đề *<br>
                                <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name;?>" placeholder="" name="name" required> <br>
                                Tác giả <br>
                                <input type="text" value="<?php if(isset($author)&&($author!="")) echo $author;?>" name="author"> <br>
                                Mô tả *<br>
                                <textarea name="description" cols="30" rows="5" required> <?php if(isset($description)&&($description!="")) echo $description;?></textarea> <br>
                                Nội dung *<br>
                                <textarea name="content" cols="30" rows="10" required> <?php if(isset($content)&&($content!="")) echo $content;?></textarea> <br>
                                
                                File đính kèm <br>
                                <input type="file" name="file"> <br>
                                Chú thích<br>
                                <input type="text" value="<?php if(isset($note)&&($note!="")) echo $note;?>" name="note"> <br>
                                Hình ảnh minh họa (nếu có)<br>
                                <input type="file" name="image"> <br>
                                <div class="mt-20">
                                    <input type="submit" style="color:#000000;" value="Cập nhật" name="Cập nhật">
                                </div> 
                                <?php
                                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                ?>
                            </form> -->
                            <form action="index.php?route=sua_tintuc" method="post">
                                <input type="hidden" value="<?php if(isset($id)&&($id!="")) echo $id;?>" name="id"> <br>
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