<?php
    include_once "../config.php";


    $sql = "DELETE FROM users WHERE ID=:ID";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":ID", $param_ID, PDO::PARAM_INT);

        $param_ID =  

    }
    
?>