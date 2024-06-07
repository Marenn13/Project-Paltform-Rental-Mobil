<?php
class LoginModel {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }
    public function authenticateUser($email, $password) {
        // Menggunakan prepared statement untuk keamanan
        $stmt = $this->conn->prepare("SELECT email, user_password FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($db_email, $db_password);
        $stmt->fetch();

        if ($stmt->num_rows > 0) {
            if (password_verify($password, $db_password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

        $stmt->close();
    }
}

?>
