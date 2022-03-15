<?php

/**
 * Mã nguồn shop bán tài khoản game
 * @author Ngô Quốc Đạt <datlechin@gmail.com>
 * @version 0.0.1
 * @copyright 2022
 * Vui lòng không xóa các dòng này
 */

use ShopGame\core\Medoo;

class User
{
    private object $db;
    private string $user_id;

    public function __construct(Medoo $db)
    {
        $this->db = $db;
        $this->user_id = $_SESSION['user_id'];
    }

    public function findById($id): array|null
    {
        return $this->db->select('users', '*', ['id' => $id])[0] ?? null;
    }

    public function findByUsername($username): array|null
    {
        return $this->db->select('users', '*', ['username' => $username])[0] ?? null;
    }

    public function findByIdOrUsername($string): array|null
    {
        return $this->db->select('users', '*', ['OR' => ['id' => $string, 'username' => $string]])[0] ?? null;
    }

    public function usernameExists($username): bool
    {
        return $this->db->has('users', ['username' => $username]);
    }

    public function emailExists($email): bool
    {
        return $this->db->has('users', ['email' => $email]);
    }

    public function phoneExists($phone): bool
    {
        return $this->db->has('users', ['phone' => $phone]);
    }

    public function isLoggedIn(): bool
    {
        return isset($this->user_id) && $this->db->has('users', ['id' => $this->user_id]);
    }

    public function isAdmin(): bool
    {
        return $this->isLoggedIn() && $this->db->has('users', ['id' => $this->user_id, 'role' => 'admin']);
    }
}