
<?php 
    session_start();
    ob_start();
    if((isset($_SESSION['role']))&&($_SESSION['role']==1)){             
        include "header.php";     
        
        include "../model/pdo.php";
        include "../model/user.php";
        include "../model/lab.php";        
        include "../model/personnel.php";
        include "../model/cadres.php";        
        include "../model/lib.php";        
        include "../model/news.php";
        include "../model/career.php";
        include "../model/home.php";
        include "../model/research.php";
        include "../model/intro.php";
        include "../model/education.php";

        if((isset($_GET['route'])&&($_GET['route']!=''))){
            $route=$_GET['route'];
            switch ($route) {
                case 'thoat':
                    if(isset($_SESSION['role'])) unset($_SESSION['role']);
                    header('location: login.php');
                    break; 
                /**
                 * Controller Giới thiệu
                 */
                case 'gioi-thieu':
                    $ds_hinh = loadAll_intro_image();
                    include "intro/intro.php";
                    break;
                case 'them_hinh_gioithieu':
                    if(isset($_POST['them'])&&($_POST['them'])){
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/intro/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_intro_image($hinh);                                                
                    }
                    $ds_hinh = loadAll_intro_image();
                    include "intro/intro.php";
                    break;
                case 'xoa_hinh_gioithieu':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_intro_image($_GET['id']);
                    };
                    $ds_hinh = loadAll_intro_image();
                    include "intro/intro.php";
                    break;
                
                
                /**
                 * Controller nghiên cứu
                 */
                case 'nghien-cuu':
                    $ds_research = loadAll_research();
                    $ds_researcher = loadAll_researcher();
                    include "research/nghiencuu.php";
                    break;
                case 'them-de-tai':

                case 'them_detai':
                
                case 'sua-de-tai':

                case 'sua_detai':

                case 'an-de-tai':

                case 'hien-de-tai':
                
                case 'them-nhom':

                case 'them_nhom':
                
                case 'sua-nhom':

                case 'sua_nhom':

                case 'an-nhom':

                case 'hien-nhom':
                    break;
                /**
                 * Controller nhân sự
                 */
                case 'nhan-su':   
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }
                    include "nhansu/nhansu.php";
                    break;
                case 'them-nhan-su':
                    include "nhansu/them_nhansu.php";
                    break;
                case 'them_nhansu':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $kieunhansu=$_POST['kieunhansu'];
                        insert_nhansu($kieunhansu);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }                    
                    include "nhansu/nhansu.php";
                    break;       
                case 'sua-nhan-su':
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $nhansu = loadOne_nhansu($_GET['id']);
                        
                    };
                            
                    include "nhansu/sua_nhansu.php";
                    break; 
                case 'sua_nhansu':    
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $kieunhansu=$_POST['kieunhansu'];
                        $id=$_POST['id'];
                        update_nhansu($kieunhansu, $id);
                        $thongbao = "Cập nhật thành công";
                    }   
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }                    
                    include "nhansu/nhansu.php";
                    break;      
                case 'xoa-nhan-su':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_nhansu($_GET['id']);
                    };
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }
                    include "nhansu/nhansu.php";
                    break;
                /**
                 * Controller cán bộ
                 */
                case 'them-can-bo':
                    $ds_nhansu = loadAll_nhansu();                    
                    include "nhansu/them_canbo.php";  
                    break;
                case 'them_canbo':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $nhansu_id=$_POST['nhansu_id'];
                        $hoten=$_POST['hoten'];
                        $chucvu=$_POST['chucvu'];
                        $phonglamviec=$_POST['phonglamviec'];
                        $email=$_POST['email'];
                        $linhvuc=$_POST['major'];
                        $research=$_POST['research'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/human/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $phone=$_POST['phone'];
                        $degree=$_POST['degree'];
                        $description=$_POST['description'];
                        $file=$_FILES['file']['name'];
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_canbo($nhansu_id, $hoten,$chucvu, $hinh, $phonglamviec, $email, $linhvuc, $phone, $degree, $file, $description, $research);
                        $thongbao = "Thêm thành công";
                    }  
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }                    
                    include "nhansu/nhansu.php";
                    break;     
                case 'sua-can-bo':
                    if(isset($_GET['id'])&&($_GET['id']>0)){     
                        $ds_nhansu = loadAll_nhansu();                
                        $canbo = loadOne_canbo($_GET['id']);                        
                    };
                    include "nhansu/sua_canbo.php";
                    break; 
                case 'sua_canbo':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $id=$_POST['id'];
                        //$nhansu_id=$_POST['nhansu_id'];
                        $hoten=$_POST['hoten'];
                        $chucvu=$_POST['chucvu'];
                        $phonglamviec=$_POST['phonglamviec'];
                        $email=$_POST['email'];
                        $linhvuc=$_POST['linhvuc'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/nhansu/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        //update_canbo($hoten,$chucvu, $hinh, $phonglamviec, $email, $linhvuc, $id);
                        $thongbao = "Thêm thành công";
                    }  
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }                    
                    include "nhansu/nhansu.php";
                    break;
                case 'xoa-can-bo':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_canbo($_GET['id']);
                    };
                    $ds_nhansu = loadAll_nhansu();
                    $length = count($ds_nhansu);
                    $ds_canbo = [];
                    for ($i = 0; $i < $length; $i++) {
                        extract($ds_nhansu[$i]);
                        $ds_canbo[$i] = loadAllInNhansu_canbo($id);
                    }                    
                    include "nhansu/nhansu.php";
                    break;

                
                /**
                 * Controller phòng thí nghiệm
                 */
                case 'phong-thi-nghiem':
                    $ds_hinh = loadAll_lab_image();
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'them-phong-thi-nghiem':
                    include "lab/them_lab.php";  
                    break;
                case 'them_phongthinghiem':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $ten=$_POST['ten'];
                        $diadiem=$_POST['diadiem'];
                        $giaovien=$_POST['giaovien'];
                        $monhoc=$_POST['monhoc'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/lab/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_lab($ten, $diadiem, $giaovien, $hinh, $mota, $monhoc);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'sua-phong-thi-nghiem':    
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $lab = loadOne_lab($_GET['id']);                        
                    };                
                    include "lab/sua_lab.php";  
                    break;
                case 'sua_phongthinghiem':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $ten=$_POST['ten'];
                        $diadiem=$_POST['diadiem'];
                        $giaovien=$_POST['giaovien'];
                        $monhoc=$_POST['monhoc'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/lab/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        update_lab($ten, $diadiem, $giaovien, $monhoc, $mota, $hinh, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'xoa-phong-thi-nghiem':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_lab($_GET['id']);
                    };
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'an-phong-thi-nghiem':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_lab_status($_GET['id'], 0);
                    };
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'hien-phong-thi-nghiem':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_lab_status($_GET['id'], 1);
                    };
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'them_hinh_phongthinghiem':
                    if(isset($_POST['them'])&&($_POST['them'])){
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="../public/lab/";
                        $target_file= $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_lab_image($hinh);                                                
                    }
                    $ds_hinh = loadAll_lab_image();
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                case 'xoa_hinh_phongthinghiem':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_lab_image($_GET['id']);
                    };
                    $ds_hinh = loadAll_lab_image();
                    $ds_lab = loadAll_lab();
                    include "lab/lab.php";
                    break;
                
                /**
                 * Controller thư viện
                 */
                
                case 'thu-vien':
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                //Tài liệu tham khảo
                case 'them-van-ban':
                    include "lib/them_doc.php";  
                    break;
                case 'them_vanban':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/lib/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $description=$_POST['description'];
                        $link=$_POST['link'];
                        $field=$_POST['field'];
                        $author=$_POST['author'];                        
                        $download=$_FILES['download']['name'];
                        if (move_uploaded_file($_FILES["download"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_lib_doc($name, $date, $description, $image, $link, $field, $author, $download);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'sua-van-ban':    
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $doc = loadOne_lib_doc($_GET['id']);                        
                    };                
                    include "lib/sua_doc.php";  
                    break;
                case 'sua_vanban':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/lib/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $description=$_POST['description'];
                        $link=$_POST['link'];
                        $field=$_POST['field'];
                        $author=$_POST['author'];                        
                        $download=$_FILES['download']['name'];
                        if (move_uploaded_file($_FILES["download"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        update_lib_doc($name, $date, $description, $image, $link, $field, $author, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'xoa-van-ban':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_lib_doc($_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'an-van-ban':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_doc_status(0, $_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'hien-van-ban':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_doc_status(1, $_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                
                //Luận văn luận án
                case 'them-luan-van':
                    include "lib/them_thesis.php";  
                    break;
                case 'them_luanvan':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/lib/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $description=$_POST['description'];
                        $link=$_POST['link'];
                        $field=$_POST['field'];
                        $author=$_POST['author']; 
                        $semester=$_POST['semester'];
                        $note=$_POST['note'];                        
                        $download=$_FILES['download']['name'];
                        if (move_uploaded_file($_FILES["download"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                          insert_lib_thesis($name, $date, $description, $image, $link, $field, $author, $download, $semester, $note);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'sua-luan-van':    
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $thesis = loadOne_lib_thesis($_GET['id']);                        
                    };                
                    include "lib/sua_thesis.php";  
                    break;
                case 'sua_luanvan':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/lib/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $description=$_POST['description'];
                        $link=$_POST['link'];
                        $field=$_POST['field'];
                        $author=$_POST['author'];                        
                        $download=$_FILES['download']['name'];
                        if (move_uploaded_file($_FILES["download"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        update_lib_doc($name, $date, $description, $image, $link, $field, $author, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'xoa-luan-van':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_lib_thesis($_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'an-luan-van':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_thesis_status(0, $_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;
                case 'hien-luan-van':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_thesis_status(1, $_GET['id']);
                    };
                    $ds_doc = loadAll_lib_doc();
                    $ds_thesis = loadAll_lib_thesis();
                    include "lib/lib.php";
                    break;

                /**
                 * Controller tin tức
                 */
                case 'tin-tuc':
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                case 'them-tin-tuc':
                    $ds_type = loadType_news();
                    include "news/them_news.php";  
                    break;
                case 'them_tintuc':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $title = $_POST['title'];
                        $type = $_POST['type'];
                        $content = $_POST['content'];
                        
                        insert_news($title, $type, $content );
                        $thongbao = "Thêm thành công";
                    }
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                case 'sua-tin-tuc':    
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $news = loadOne_news($_GET['id']);                        
                    };                
                    include "news/sua_news.php";  
                    break;
                case 'sua_tintuc':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $title = $_POST['title'];
                        $content = $_POST['content'];
                        update_news($title, $content, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                case 'xoa-tin-tuc':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_news($_GET['id']);
                    };
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                case 'an-tin-tuc':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_news_status($_GET['id'], 0);
                    };
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                case 'hien-tin-tuc':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_news_status($_GET['id'], 1);
                    };
                    $ds_notification = loadEach_news(1);
                    $ds_news = loadEach_news(2);
                    $ds_tech = loadEach_news(3);
                    include "news/news.php";
                    break;
                
                /**
                 * Controller tuyển dụng
                 */
                case 'tuyen-dung':
                    $ds_congty = loadAll_company();
                    $ds_job = loadAll_job();

                    include "career/career.php";
                    break;
                // Doanh nghiệp
                case 'them-cong-ty':
                    include "career/them_congty.php";
                    break;
                case 'them_congty':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/career/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $description=$_POST['description'];
                        insert_company($name, $address, $image, $description);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_congty = loadAll_company();
                    $ds_job = loadAll_job();
                    include "career/career.php";
                    break;
                case 'sua-cong-ty':
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $congty = loadOne_company($_GET['id']);                        
                    }; 
                    include "career/sua_congty.php";
                    break;
                case 'sua_congty':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/career/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $description=$_POST['description'];
                        update_company($name, $address, $image, $description, $id);
                        $thongbao = "Sửa thành công";
                    }
                    $ds_congty = loadAll_company();
                    $ds_job = loadAll_job();
                    include "career/career.php";
                    break;
                case 'xoa-cong-ty':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_company($_GET['id']);
                    };               
                    $ds_congty = loadAll_company();     
                    include "career/career.php";                    
                    break;
                
                // Công việc
                case 'them-cong-viec':
                    include "career/them_job.php";
                    break;
                case 'them_congviec':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $file=$_FILES['file']['name'];
                        $target_dir="../public/career/";
                        $target_file= $target_dir . basename($_FILES['file']['name']);
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $summary=$_POST['summary'];
                        $deadline=$_POST['deadline'];
                        $quantity=$_POST['quantity'];
                        $location=$_POST['location'];
                        $company=$_POST['company'];
                        $howtoapply=$_POST['howtoapply'];
                        $requirement=$_POST['requirement'];
                        $description=$_POST['description'];
                        insert_job($name, $summary, $deadline, $quantity, $location, $file, $company, $howtoapply, $description, $requirement);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_congty = loadAll_company();
                    $ds_job = loadAll_job();
                    include "career/career.php";
                    break;
                case 'sua-cong-viec':
                    if(isset($_GET['id'])&&($_GET['id']>0)){                    
                        $job = loadOne_job($_GET['id']);                        
                    }; 

                    include "career/sua_job.php";
                    break;
                case 'sua_congviec':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $file=$_FILES['file']['name'];
                        $target_dir="../public/career/";
                        $target_file= $target_dir . basename($_FILES['file']['name']);
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        $name=$_POST['name'];
                        $id=$_POST['id'];
                        $summary=$_POST['summary'];
                        $deadline=$_POST['deadline'];
                        $quantity=$_POST['quantity'];
                        $location=$_POST['location'];
                        $company=$_POST['company'];
                        $howtoapply=$_POST['howtoapply'];
                        $requirement=$_POST['requirement'];
                        $description=$_POST['description'];
                        update_job($name, $description, $summary, $deadline, $quantity, $location,$file, $company, $requirement, $id);
                        $thongbao = "Sửa thành công";
                    }
                    $ds_congty = loadAll_company();
                    $ds_job = loadAll_job();
                    include "career/career.php";
                    break;
                case 'xoa-cong-viec':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_job($_GET['id']);
                    };               
                    $ds_congty = loadAll_company();    
                    $ds_job = loadAll_job(); 
                    include "career/career.php";                    
                    break;
                case 'an-cong-viec':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_job_status($_GET['id'], 0);
                    };
                    $ds_congty = loadAll_company();    
                    $ds_job = loadAll_job(); 
                    include "career/career.php";
                    break;
                case 'hien-cong-viec':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        update_job_status($_GET['id'], 1);
                    };
                    $ds_congty = loadAll_company();    
                    $ds_job = loadAll_job(); 
                    include "career/career.php";
                    break;
                case 'them_job':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $content = $_POST['content'];
                        $title = $_POST['name'];
                        $summary = $_POST['summary'];
                        insert_job($title, $summary, $content);
                    }
                    $ds_congty = loadAll_company();    
                    $ds_job = loadAll_job(); 
                    include "career/career.php";
                    break;
                case 'sua_job':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $content = $_POST['content'];
                        update_job($title, $summary, $content, $id);
                    }
                    $ds_congty = loadAll_company();    
                    $ds_job = loadAll_job(); 
                    include "career/career.php";
                    break;
                /**
                 * Controller Trang chủ
                 */
                case 'trang-chu':
                    $ds_banner = loadAll_banner();
                    include "home/home.php";
                    break;
                case 'them-banner':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $image=$_FILES['image']['name'];
                        $target_dir="../public/home/";
                        $target_file= $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          };
                        insert_banner($image);
                        $thongbao = "Thêm thành công";
                    }
                    $ds_banner = loadAll_banner();
                    include "home/home.php";
                case 'xoa-banner-home':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_banner($_GET['id']);
                    };               
                    $ds_banner = loadAll_banner();
                    include "home/home.php";

                default:
                    # code...
                    break;
            }
        }
        else{
            include "body.php"; 
        }    
        #include "footer.php";
    } else { 
        header('location: login.php');
    }
    
?>