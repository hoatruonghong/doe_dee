<?php
/**
 * Model Tin tức
 */
function loadType_news(){
    $sql="select * from bmdt_news_type order by id";
    return pdo_query($sql);
}

// Tin tức

// function insert_news($name, $type, $content, $description, $author, $note, $image, $file ){
//     $time = date_default_timezone_set("Asia/Ho_Chi_Minh"); 
//     $thoigian = date("Y-m-d H:i:s", time());

//     $sql="insert into bmdt_news_notification(name, type, content, description, author, note, image, file, time ) values ('$name','$type','$content','$description','$author','$note','$image','$file', '$thoigian')";
//     pdo_execute($sql);
// }
// function delete_news($id){
//     $sql="delete from bmdt_news_notification where id=".$id;
//     pdo_execute($sql);
// }
// function loadAll_news(){
//     $sql="select * from bmdt_news_notification order by id";
//     return pdo_query($sql);
// }

// function loadEach_news($type){
//     $sql="select * from bmdt_news_notification where type = ".$type." order by id";
//     return pdo_query($sql);
// }

// function loadOne_news($id){
//     $sql="select * from bmdt_news_notification where id=".$id;
//     return pdo_query_one($sql);
// }
// function update_news($name, $content, $description, $author, $note, $image, $file, $id){
//     $sql="update bmdt_news_notification set name='".$name."',  content ='".$content."', author ='".$author."', note ='".$note."' , description ='".$description."'";    
//     if($image){
//         $sql.=", image ='".$image."'";
//     }  
//     if($file){
//         $sql.=", file ='".$file."'";
//     }   
//     $sql.=" where id=".$id;
//     pdo_execute($sql);                
// }
// function update_news_status($id, $status){
//     $sql="update bmdt_news_notification set status = '".$status."' where id=".$id;
//     pdo_execute($sql);                
// }
function insert_news($title, $type, $content ){
    $thoigian = date("Y-m-d H:i:s", time());

    $sql="insert into bmdt_news(title, type, content, time ) values ('$title','$type','$content', '$thoigian')";
    pdo_execute($sql);
}
function delete_news($id){
    $sql="delete from bmdt_news where id=".$id;
    pdo_execute($sql);
}
function loadAll_news(){
    $sql="select * from bmdt_news order by time DESC";
    return pdo_query($sql);
}
function loadNum_news($num){
    $sql="select * from bmdt_news order by time DESC limit '$num'";
    return pdo_query($sql);
}
function loadEach_news($type){
    $sql="select * from bmdt_news where type = ".$type." order by time DESC";
    return pdo_query($sql);
}

function loadOne_news($id){
    $sql="select * from bmdt_news where id=".$id;
    return pdo_query_one($sql);
}
function update_news($title, $content, $id){
    $sql="update bmdt_news set title='".$title."',  content ='".$content."'";    
       
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_news_status($id, $status){
    $sql="update bmdt_news set status = '".$status."' where id=".$id;
    pdo_execute($sql);                
}
?>