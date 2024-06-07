<?php
include '../Model/Koneksi.php';
include '../Model/Penyewaan2Model.php';
class Penyewaan2Controller {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $tglSewa = $_POST["tgl_sewa"];
            $durasi = $_POST["durasi"];
            $supir = $_POST["supir"];
            $carName = $_POST["car_name"];
            $plate = $_POST["plate"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            // Hitung biaya supir dan total harga
            $supirCost = $supir == "ya" ? 150000 * $durasi : 0;
            $totalPrice = ($price * $durasi) + $supirCost;

            // Tentukan direktori penyimpanan file
            $uploadDir = 'uploads/';
                // Ensure the directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Tentukan path file KTP dan SIM
            $ktpPath = $uploadDir . basename($_FILES['ktp']['name']);
            $simPath = $uploadDir . basename($_FILES['sim']['name']);

            // Pindahkan file KTP dan SIM ke direktori penyimpanan
            if (move_uploaded_file($_FILES['ktp']['tmp_name'], $ktpPath) && move_uploaded_file($_FILES['sim']['tmp_name'], $simPath)) {
                // Buat query SQL
                $sql = "INSERT INTO Penyewaan (name, email, phone, address, tgl_sewa, durasi, supir, car_name, plate, price, image, ktp, sim, total_harga)
                        VALUES ('$name', '$email', '$phone', '$address', '$tglSewa', '$durasi', '$supir', '$carName', '$plate', '$price', '$image', '$ktpPath', '$simPath', '$totalPrice')";

                // Jalankan query SQL
                global $conn;
                if ($conn->query($sql) === TRUE) {
                    // Redirect ke halaman pembayaran jika query berhasil dieksekusi
                    header("Location: ../Views/PembayaranViews.php?tgl_sewa=$tglSewa&durasi=$durasi&supir=$supir&car_name=$carName&plate=$plate&price=$price&name=$name&email=$email&phone=$phone&address=$address&total_harga=$totalPrice&image=$image");
                    exit();
                } else {
                    // Tampilkan pesan error jika query gagal dieksekusi
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                // Tampilkan pesan error jika gagal mengunggah file KTP atau SIM
                echo "Gagal mengunggah file KTP atau SIM.";
            }
        }
    }
}

$controller = new Penyewaan2Controller();
$controller->index();
?>
