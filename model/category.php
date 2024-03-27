<?php
    function listCategory(){
        $sql = "select * from category";
        $listcategory = pdo_query($sql);
        return $listcategory;
    }
    function addCategory($name_dm){
        $sql = "INSERT INTO `category` ( `name_dm`) VALUES ( '$name_dm')";
        pdo_execute($sql);
    }
    function deletecategory($id_dm){
        $sql = "DELETE FROM category WHERE `category`.`id_dm` = $id_dm";
        pdo_execute($sql);
    }
    function loadOneCategory($id_dm){
        $sql = "SELECT * from category where id_dm = $id_dm";
        $ct = pdo_query_one($sql);
        return $ct;
    }
    function updateCategory($id_dm,$name_dm){
        $sql = "UPDATE `category` SET `name_dm` = '$name_dm'
         WHERE `category`.`id_dm` = $id_dm";
        pdo_execute($sql);
    }
?>