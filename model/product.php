<?php
    function showProduct(){
        $sql = "SELECT * from product as a inner join category as b on a.id_dm = b.id_dm";
        $listproduct = pdo_query($sql);
        return $listproduct;
    }
    function addProduct($name_sp,$price_sp,$image,$mota,$id_dm){
        $sql = "INSERT INTO `product` (`name_sp`, `price_sp`, `image`, `mota`, `id_dm`)
         VALUES ('$name_sp', '$price_sp', '$image', '$mota', '$id_dm')";
        pdo_execute($sql);
    }
    function deleteProduct($id_sp){
        $sql ="DELETE FROM product WHERE `product`.`id_sp` = $id_sp";
        pdo_execute($sql);
    }
    function loadOneProduct($id_sp){
        $sql ="SELECT * from product where id_sp = $id_sp";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function updateProduct($id_sp,$name_sp,$price_sp,$image,$mota,$id_dm){
        if($image != ""){
            $sql ="UPDATE `product` SET `name_sp` = '$name_sp', `price_sp` = '$price_sp', `image` = '$image',
         `mota` = '$mota', `id_dm` = '$id_dm' WHERE `product`.`id_sp` = $id_sp";
        } else {
            $sql ="UPDATE `product` SET `name_sp` = '$name_sp', `price_sp` = '$price_sp', 
         `mota` = '$mota', `id_dm` = '$id_dm' WHERE `product`.`id_sp` = $id_sp";
        }
          pdo_execute($sql);
    }
?>