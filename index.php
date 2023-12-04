<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "view/header.php";
include "model/connectdb.php";
include "model/products.php";
include "model/category.php";
include "model/comment.php";
include "model/cart.php";
include "model/order.php";
include "model/user.php";
?>
<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'product-detail':
            $id = $_GET['id'];
            $product = getOneProduct($id);
            $a = [];
            for ($i = 1; $i <=5 ;$i++) {
                $a[$i] = rand(1, 100);
            }
            /*
            echo '<pre>';
            var_dump($a);
            echo '</pre>';

            $array = [1,2,4,5];
            echo '<pre>';
            var_dump($array);
            echo '</pre>';
            */

            $b = [
                'id' => 1,
                'name' => 'Product 01',
                'desc' => 'Description 01',
                'price' => 100,
                'status' => 1,
                ];

            echo '<pre>';
            var_dump($b);
            echo '</pre>';
            
            echo '<pre>';
            var_dump($product);
            echo '</pre>';
            
            exit;
            $category = getOneCategory($product['category_id']);
            if (isset($_SESSION['objuser']['user_id'])) {
                $comments = getAllComments($_SESSION['objuser']['user_id'], $id);
            }
            include "view/product_detail.php";
            break;

        case 'comment':
            include "commentController.php";
            $result = comment($_POST);
            if ($result == 1) header("Location: index.php?act=product-detail&id=".$productId);
            else header("Location: index.php");
            break;
        
        case 'cart':
            addToCart();
            include "view/cart.php";
            break;
        case 'delCart':
            //lấy giá trị
            $id=$_GET['id'];
            deleteCart($id);
            include "view/cart.php";
            break;
        case 'payment':
            // tao don hang voi bang order + order_detail
            // xoa session
            if(isset($_POST['payment'])&&($_POST['payment'])) {
                // tiến hành đặt hàng
                addOrder();
            }
            include "view/payment_success.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'feedback':
            include "view/feedback.php";
            break;
        case 'qna':
            include "view/qna.php";
            break;
        case 'register':
            include "registerController.php";
            include "view/register.php";
            break;
        case 'logout':
            logout();
            break;
        default:
            login();
            $categoryId = isset($_GET['catId']) ? $_GET['catId'] : 0;
            $products = producstList($categoryId);
            $categories = categoryList();
            include "view/home.php";
            break;
    }
} else {
    $categoryId = isset($_GET['catId']) ? $_GET['catId'] : 0;
    $products = producstList($categoryId);
    $categories = categoryList();
    include "view/home.php";
}

?>
<?php
include "view/footer.php";
?>