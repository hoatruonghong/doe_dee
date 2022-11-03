<?php
/**
 * Model doanh nghiệp
 */
function insert_company($name, $address, $image, $description){   
    if(! $description){
        $description = "";
    }
    $sql="insert into bmdt_career_company(name, address, description, image) values ('$name','$address','$description','$image')";
    pdo_execute($sql);
}
function delete_company($id){
    $sql="delete from bmdt_career_company where id=".$id;
    pdo_execute($sql);
}
function loadAll_company(){
    $sql="select * from bmdt_career_company order by id";
    return pdo_query($sql);
}
function loadOne_company($id){
    $sql="select * from bmdt_career_company where id=".$id;
    return pdo_query_one($sql);
}
function update_company($name, $address, $image, $description, $id){
    $sql="update bmdt_career_company set name='".$name."',  address ='".$address."', description ='".$description."'";    
    if($image){
        $sql.=", image ='".$image."'";
    }   
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}

/**
 * Model tin tuyển dụng
 */

function delete_job($id){
    $sql="delete from bmdt_career_news where id=".$id;
    pdo_execute($sql);
}

function loadOne_job($id){
    $sql="select * from bmdt_career_news where id=".$id;
    return pdo_query_one($sql);
}

function update_job_status($id, $status){
    $sql="update bmdt_career_news set status = '".$status."' where id=".$id;
    pdo_execute($sql);                
}
function insert_job($title, $summary, $content){
    $thoigian = date("Y-m-d H:i:s", time());

    $sql="insert into bmdt_career_news(title, summary, content, posttime ) values ('$title','$summary','$content','$thoigian')";
    pdo_execute($sql);
}
function update_job($title, $summary, $content,  $id){
    $sql="update bmdt_career_news set title='".$title."', summary ='".$summary."', content='".$content."'";    
    
    $sql.=" where id=".$id;
    pdo_execute($sql);            
}
function loadAll_job(){
    $sql="select * from bmdt_career_news order by posttime DESC";
    return pdo_query($sql);
}
?>