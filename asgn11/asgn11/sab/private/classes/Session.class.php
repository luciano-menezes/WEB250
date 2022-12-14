<?php

class Session
{
    private $user_id;
    public $username;
    private $last_login;

    public function __construct()
    {
        session_start();
        $this->check_stored_login();
    }

    public function login($user)
    {
        if ($user) {
            // prevent session fixation attacks
            session_regenerate_id();
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->username = $_SESSION['username'] = $user->username;
            $this->last_login = $_SESSION['last_login'] = time();
        }
        return true;
    }

    public function is_logged_in()
    {
        //echo "user: " . $this->user_id; exit;
        return isset($this->user_id);
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['last_login']);
        unset($this->user_id);
        unset($this->username);
        unset($this->last_login);
        return true;
    }

    private function check_stored_login()
    {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->username = $_SESSION['username'];
            $this->last_login = $_SESSION['last_login'];
        }
    }
}
