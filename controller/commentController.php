<?php
function comment($post) {
    if ($post['submit']) {
        $productId = isset($post['product_id']) ? $post['product_id'] : 'n/a';
        $comment = isset($post['comment']) ? $post['comment'] : 'n/a';
        if (isset($_SESSION['objuser']['user_id']) && $productId) {
            addComment($_SESSION['objuser']['user_id'], $productId, $comment);
            return 1;
        }
    } else {
        return 0;
    }
}
