<?php
/**
 * Model trang chủ
 */
function insert_banner($image){       
    $sql="insert into bmdt_banner(image) values ('$image')";
    pdo_execute($sql);
}
function delete_banner($id){
    $sql="delete from bmdt_banner where id=".$id;
    pdo_execute($sql);
}
function loadAll_banner(){
    $sql="select * from bmdt_banner order by id";
    return pdo_query($sql);
}
function loadOne_banner($id){
    $sql="select * from bmdt_banner where id=".$id;
    return pdo_query_one($sql);
}
function update_banner($image, $id){
    $sql="update bmdt_banner set image ='".$image."'";      
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}

?>