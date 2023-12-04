<?php
function getAllComments($userId, $productId) {
    $conn=connectdb();
    $sql = "SELECT * FROM `comments` WHERE user_id = '".$userId."' 
    AND product_id = '".$productId."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll(); // lấy nhiều dòng
    return $kq;
}

function addComment($userId, $productId, $comment) {
    $conn=connectdb();
    $sql = "INSERT INTO comments (`user_id`, `product_id`, `comment`) VALUES ('".$userId."', '".$productId."', '".$comment."')";
    $conn->exec($sql);
}
?>