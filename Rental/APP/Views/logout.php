<?php
session_start();

class Logout {
    public function __construct() {
        $this->logoutUser();
    }

    private function logoutUser() {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();

        // Redirect ke halaman login atau homepage
        header("Location: Beranda.php");
        exit();
    }
}

  // Buat objek Logout untuk memulai proses logout
  new Logout();
?>