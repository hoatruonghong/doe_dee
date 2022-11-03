<?php
    
/**
 * Model hình ảnh giới thiệu
 */
function insert_intro_image($hinh){
    $sql="insert into bmdt_intro_image(image) values ('".$hinh."')";
    pdo_execute($sql);
}
function delete_intro_image($id){
    $sql="delete from bmdt_intro_image where id=".$id;
    pdo_execute($sql);
}
function loadAll_intro_image(){
    $sql="select * from bmdt_intro_image order by id desc";
    return pdo_query($sql);
}
function loadOne_intro_image($id){
    $sql="select * from bmdt_intro_image where id=".$id;
    return pdo_query_one($sql);
}
?>