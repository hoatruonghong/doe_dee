<?php
/**
 * Model Đề tài nghiên cứu
 */

function insert_research($name, $image, $author,$description, $year, $area, $link, $topicID, $teacher, $level  ){
    $sql="insert into bmdt_research_paper(name, image, author, description, year, area, link, topicID , teacher, level ) values ('$name','$image','$author', '$description', '$year','$area','$link', '$topicID', '$teacher','$level')";
    pdo_execute($sql);
}
function delete_research($id){
    $sql="delete from bmdt_research_paper where id=".$id;
    pdo_execute($sql);
}
function loadAll_research(){
    $sql="select * from bmdt_research_paper order by id";
    return pdo_query($sql);
}

function loadOne_research($id){
    $sql="select * from bmdt_research_paper where id=".$id;
    return pdo_query_one($sql);
}
function update_research($name, $image, $author,$description, $year, $area, $link, $topicID, $teacher, $level ,$id ){
    $sql="update bmdt_research_paper set name='".$name."',  author ='".$author."', description='".$description."',  year ='".$year."',area ='".$area."',  link ='".$link."',  topicID ='".$topicID."',teacher ='".$teacher."',  level ='".$level."'";    
    if (! $image){
        $sql.=", image=".$image." ";
    }
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_research_status($id, $status){
    $sql="update bmdt_research_paper set status = '".$status."' where id=".$id;
    pdo_execute($sql);                
}
/**
 * Model nhóm nghiên cứu
 */
function insert_researcher($name, $image, $member,$achievement, $description  ){
    $sql="insert into bmdt_research_researcher(name, image, member, description, achievement ) values ('$name','$image','$member', '$description', '$achievement')";
    pdo_execute($sql);
}
function delete_researcher($id){
    $sql="delete from bmdt_research_researcher where id=".$id;
    pdo_execute($sql);
}
function loadAll_researcher(){
    $sql="select * from bmdt_research_researcher order by id";
    return pdo_query($sql);
}


function loadOne_researcher($id){
    $sql="select * from bmdt_research_researcher where id=".$id;
    return pdo_query_one($sql);
}
function update_researcher($name, $image, $member,$achievement, $description ,$id ){
    $sql="update bmdt_research_researcher set name='".$name."',  member ='".$member."', description='".$description."',  achievement ='".$achievement."' ";    
    if (! $image){
        $sql.=", image=".$image." ";
    }
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_researcher_status($id, $status){
    $sql="update bmdt_research_researcher set status = '".$status."' where id=".$id;
    pdo_execute($sql);                
}

?>