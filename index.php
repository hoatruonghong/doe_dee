<?php 
    include "model/pdo.php";
    include "model/user.php";
    include "model/lab.php";        
    include "model/personnel.php";
    include "model/cadres.php";        
    include "model/lib.php";        
    include "model/news.php";
    include "model/career.php";
    include "model/home.php";
    include "model/intro.php";
    include "model/research.php";
    include "model/education.php";
    

    /**
     * Header
     */
    if((isset($_GET['route'])&&($_GET['route']!=''))){
        $route=$_GET['route'];
        switch ($route) {
            case 'gioi-thieu':
                $pageTitle = "Giới thiệu";
                break;
            case 'dao-tao':
                $pageTitle = "Đào tạo";
                break;
            case 'nghien-cuu':
                $pageTitle = "Nghiên cứu";
                break;
            case 'nhan-su':
                $pageTitle = "Nhân sự";
                break;
            case 'thu-vien':
                $pageTitle = "Thư viện";
                break;
            case 'phong-thi-nghiem':
                $pageTitle = "Phòng thí nghiệm";
                break; 
            case 'lien-he':
                $pageTitle = "Liên hệ";
                break;   
            case 'tin-tuc':
                $pageTitle = "Tin tức";
                break;   
            case 'tuyen-dung':
                $pageTitle = "Tuyển dụng";
                break;         
            default:
                $pageTitle = "Trang chủ";
                break;
        }
    } else {
        $pageTitle = "Trang chủ";
    }
    include "header.php";
    
    /**
     * Body
     */    
    if((isset($_GET['route'])&&($_GET['route']!=''))){
        $route=$_GET['route'];
        switch ($route) {
            case 'gioi-thieu':     
                $ds_hinh = loadAll_intro_image();
                include "intro.php";
                break;            
            case 'dao-tao':
                include "education.php";
                break;
            case 'nghien-cuu':
                include "research.php";
                break;
            case 'thu-vien':
                $current_page = isset($_GET['page_doc']) ? $_GET['page_doc'] : 1;
                $limit = 6;
                $total_page = get_total_page($limit);
                if (isset($_GET['search_doc']) && (!empty($_GET["search_doc"]))){
                    $key = $_GET["search"];
                    $ds_doc = get_search_doc($key);

                }
                else {
                    $ds_doc = get_lib_doc($current_page, $limit);
                }

                $current_page_thesis = isset($_GET['page_thesis']) ? $_GET['page_thesis'] : 1;
                $limit_thesis = 3;
                $total_page_thesis = get_total_page_thesis($limit_thesis);
                if (isset($_GET['search_thesis']) && (!empty($_GET["search_thesis"]))){
                    $key = $_GET["search"];
                    $ds_thesis = get_search_thesis($key);

                }
                else {
                    $ds_thesis = get_lib_thesis($current_page, $limit_thesis);
                }
                include "lib.php";
                break;
            case 'nhan-su':
                $ds_canbo = loadAll_canbo();
                $ds_nhansu = loadAll_nhansu();  
                $chunhiem = loadAllInNhansu_canbo(1);              
                include "human.php";
                break;
            case 'phong-thi-nghiem':    
                $ds_lab = loadAll_lab();
                $ds_hinh = loadAll_lab_image();            
                include "lab.php";
                break; 
            case 'lien-he':
                include "contact.php";
                break;     
            case 'tin-tuc':
                $ds_notification = loadEach_news(1);
                $ds_news = loadEach_news(2);
                $ds_tech = loadEach_news(3);
                $ds_job = loadAll_job();
                include "news.php";  
                break;
            case 'tuyen-dung':
                $ds_congty = loadAll_company();
                $ds_job = loadAll_job();

                include "career.php";  
                break;
            case 'chi-tiet':  
                if(isset($_GET['id'])&&($_GET['id']>0)){                    
                    $tintuc = loadOne_job($_GET['id']);                        
                };      
                include "blog-detail.php";
                break;  
            case 'can-bo':
                include "human-detail.php";     
            default:
                $ds_banner = loadAll_banner();
                $ds_congty = loadAll_company();
                $num_teacher = get_num_teacher();
                $ds_news = loadAll_news();
                $ds_job = loadAll_job();
                include "home.php";
                break;
        }
    }
    else {                
        include "home.php";
    }

    include "footer.php";
?>