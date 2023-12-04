<?php
// Lấy data từ form
if(isset($_POST['register'])&&($_POST['register'])){
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $fullName=$_POST['full_name'];
    $phone=$_POST['phone'];
    $billingAddress=$_POST['billing_address'];
    $billingCity=$_POST['billing_city'];
    // gọi hàm thêm user
    $result = addUser($email, $username, $password, $fullName, $phone, $billingAddress, $billingCity);
    if ($result) echo 'Chúc mừng bạn đã đăng ký thành công';
    else echo 'Bạn đăng ký không thành công';
}