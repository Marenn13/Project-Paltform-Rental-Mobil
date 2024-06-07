<?php
class RegistrasiModel {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }
    public function registerUser($nama_depan, $nama_belakang, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email is already registered
        $stmt = $this->conn->prepare("SELECT email FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return "Email sudah terdaftar.";
        } else {
            $insert_stmt = $this->conn->prepare("INSERT INTO login (nama_depan, nama_belakang, email, user_password) VALUES (?, ?, ?, ?)");
            $insert_stmt->bind_param("ssss", $nama_depan, $nama_belakang, $email, $hashed_password);
            if ($insert_stmt->execute()) {
                return "Registrasi berhasil.";
            } else {
                return "Terjadi kesalahan saat menyimpan data.";
            }

            $insert_stmt->close();
        }

        $stmt->close();
    }
}

?>
