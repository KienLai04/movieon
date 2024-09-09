<?php

function lsgd($user){
        $sql= "SElECT *
        FROM lsgiaodich 
        JOIN user ON lsgiaodich.id_user = user.id_user
        WHERE user.id_user = ?";
        return pdo_query_one($sql,$user);
}

?>