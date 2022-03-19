<?php

/**
 * Mã nguồn shop bán tài khoản game
 * @author Ngô Quốc Đạt <datlechin@gmail.com>
 * @copyright 2022
 * Vui lòng không xóa các dòng này
 */

use ShopGame\core\Medoo;

session_start();
ob_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';
require_once 'helpers.php';
require_once 'core/Medoo.php';
require_once 'core/User.php';

$db = new Medoo([
    'type' => 'mysql',
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS,
]);

$userClass = new User($db);

if ($userClass->isLoggedIn()) {
    $user_id = cleanInput($_SESSION['user_id']);
    $user = $userClass->findById($user_id);
}