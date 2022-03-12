<?php

/**
 * Mã nguồn shop bán tài khoản game
 * @author Ngô Quốc Đạt <datlechin@gmail.com>
 * @version 0.0.1
 * @copyright 2022
 * Vui lòng không xóa các dòng này
 */

require_once '../bootstrap.php';

if (isLoggedIn()) {
    redirect('/');
}

$title = 'Đăng nhập';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = cleanInput($_POST['username']);
    $password = cleanInput($_POST['password']);

    if ($username === '') {
        $error = 'Vui lòng nhập tên đăng nhập';
    } else {
        $result = $db->query("SELECT * FROM users WHERE username = '$username'");
        $num_rows = $result->num_rows;

        if ($num_rows === 0) {
            $error = 'Tên đăng nhập không tồn tại';
        } else {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: /');
            } else {
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }
    }
}

require_once '../views/login.php';
