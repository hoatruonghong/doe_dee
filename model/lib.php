<?php
/**
 * Model thư viện
 */
function insert_lib_doc($name, $date, $description, $image, $link, $field, $author, $download){
    if(! $image){
        $image = "";
    }
    if(! $link){
        $link = "";
    }
    $sql="insert into bmdt_lib_doc(name, date, description, image, link, field, author, download) values ('$name','$date','$description','$image','$link','$field', '$author', '$download')";
    pdo_execute($sql);
}
function delete_lib_doc($id){
    $sql="delete from bmdt_lib_doc where id=".$id;
    pdo_execute($sql);
}
function loadAll_lib_doc(){
    $sql="select * from bmdt_lib_doc order by id";
    return pdo_query($sql);
}
function loadOne_lib_doc($id){
    $sql="select * from bmdt_lib_doc where id=".$id;
    return pdo_query_one($sql);
}
function update_lib_doc($name, $date, $description, $image, $link, $field, $author, $id){
    $sql="update bmdt_lib_doc set name='".$name."',  date ='".$date."', description ='".$description."', field ='".$field."' , link ='".$link."', author='".$author."'";    
    if($image){
        $sql.=", image ='".$image."'";
    }   
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_doc_status($status, $id){
    $sql="update bmdt_lib_doc set status='".$status."' where id=".$id;
    pdo_execute($sql);                
}
function get_total_page($limit){
    $total = pdo_query_value("SELECT count(*)FROM bmdt_lib_doc");
    return ceil((int)$total / $limit);
    
}
function get_lib_doc($current_page, $limit ){
    $total = pdo_query_value("SELECT count(*)FROM bmdt_lib_doc");
    $total_page = ceil((int)$total / $limit);
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
 
    $sql = "SELECT * FROM bmdt_lib_doc LIMIT $start, $limit";
    return pdo_query($sql);
}
function get_search_doc($key){
    $sql = "select * from bmdt_lib_doc where name like '%$key%' or  date like '%$key%'  description like '%$key%'  field like '%$key%'  author like '%$key%'  semester like '%$key%'  note like '%$key%'  ";
    return pdo_query($sql);
}

/**
 * Luận văn
 */
function insert_lib_thesis($name, $date, $description, $image, $link, $field, $author, $download, $semester, $note){
    if(! $image){
        $image = "";
    }
    if(! $link){
        $link = "";
    }
    $sql="insert into bmdt_lib_thesis(name, date, description, image, link, field, author, download, semester, note) values ('$name','$date','$description','$image','$link','$field', '$author', '$download', '$semester', '$note')";
    pdo_execute($sql);
}
function delete_lib_thesis($id){
    $sql="delete from bmdt_lib_thesis where id=".$id;
    pdo_execute($sql);
}
function loadAll_lib_thesis(){
    $sql="select * from bmdt_lib_thesis order by id";
    return pdo_query($sql);
}
function loadOne_lib_thesis($id){
    $sql="select * from bmdt_lib_thesis where id=".$id;
    return pdo_query_one($sql);
}
function update_lib_thesis($name, $date, $description, $image, $link, $field, $author, $download, $semester, $note, $id){
    $sql="update bmdt_lib_thesis set name='".$name."',  date ='".$date."', description ='".$description."', field ='".$field."' , link ='".$link."', author='".$author."', semester ='".$semester."', note='".$note."";    
    if($image){
        $sql.=", image ='".$image."'";
    }  
    if($download){
        $sql.=", download ='".$download."'";
    }   
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_thesis_status($status, $id){
    $sql="update bmdt_lib_thesis set status='".$status."' where id=".$id;
    pdo_execute($sql);                
}
function get_total_page_thesis($limit){
    $total = pdo_query_value("SELECT count(*)FROM bmdt_lib_thesis");
    return ceil((int)$total / $limit);
    
}
function get_lib_thesis($current_page, $limit ){
    $total = pdo_query_value("SELECT count(*)FROM bmdt_lib_thesis");
    $total_page = ceil((int)$total / $limit);
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
 
    $sql = "SELECT * FROM bmdt_lib_thesis LIMIT $start, $limit";
    return pdo_query($sql);
}
function get_search_thesis($key){
    $sql = "select * from bmdt_lib_thesis where name like '%$key%' or  date like '%$key%'  description like '%$key%'  field like '%$key%'  author like '%$key%'  semester like '%$key%'  note like '%$key%'  ";
    return pdo_query($sql);
}
?>