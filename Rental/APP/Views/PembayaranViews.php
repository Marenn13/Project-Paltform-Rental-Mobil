<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d0e3ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 2px 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: fixed;
            width: 99%;
            top: 0;
            z-index: 1000;
        }
        .header img {
            height: 75px;
        }
        .header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
            font-weight: bold;
            transition: color 0.3s ease;
            font-size: 16px;
        }
        .header nav a:hover {
            color: #007BFF;
        }
        .header .logout {
            color: black;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-color: #d0e3ff;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
            overflow: hidden;
        }
        .details {
            flex: 1;
            float: left;
            margin-right: 20px;
        }
        .form-section {
            float: right;
            width: calc(50% - 20px);
            box-sizing: border-box;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
            .details, .form-section {
                width: 100%;
                margin: 0;
            }
        }
        .form-section h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .form-section .form-group {
            margin-bottom: 10px;
        }
        .form-section .form-group label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }
        .form-section .form-group input[type="text"],
        .form-section .form-group input[type="email"],
        .form-section .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-section .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .image {
           display: flex;
           align-items: center;
           justify-content: center;
            }
        .message {
        margin-top: 20px;
        padding: 10px;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        text-align: center;
        width: 100%;
        max-width: 400px;
    }
        .notification {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .logout-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
            animation: fadeIn 0.3s ease-in-out;
        }
        .logout-container .message {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
        }
        .logout-container img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .logout-container h2 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }
        .logout-container .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }
        .logout-container .buttons a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout-container .buttons a:hover {
            background-color: #0056b3;
        }

    </style>
    <script>
        function showLogoutNotification() {
            document.getElementById('logoutNotification').style.display = 'flex';
        }
        function hideLogoutNotification() {
            document.getElementById('logoutNotification').style.display = 'none';
        }
    </script>
</head>
<body>
<div class="header">
    <img src="../images/nologo.png" alt="Logo">
    <nav>
            <a href="../Views/homepage.php">Halaman</a>
            <a href="../Views/TentangKami.php">Tentang Kami</a>
            <a href="../Views/InfoViews.php">Informasi Mobil</a>
        <a href="javascript:void(0);" class="logout" onclick="showLogoutNotification()">Logout</a>
    </nav>
</div>

<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'Tidak diketahui';
$email = isset($_GET['email']) ? $_GET['email'] : 'Tidak diketahui';
$phone = isset($_GET['phone']) ? $_GET['phone'] : 'Tidak diketahui';
$address = isset($_GET['address']) ? $_GET['address'] : 'Tidak diketahui';
$tglSewa = isset($_GET['tgl_sewa']) ? $_GET['tgl_sewa'] : 'Tidak diketahui';
$durasi = isset($_GET['durasi']) ? intval($_GET['durasi']) : 0;
$supir = isset($_GET['supir']) ? $_GET['supir'] : 'Tidak diketahui';
$carName = isset($_GET['car_name']) ? $_GET['car_name'] : 'Tidak diketahui';
$plate = isset($_GET['plate']) ? $_GET['plate'] : 'Tidak diketahui';
$price = isset($_GET['price']) ? $_GET['price'] : '0';
$image = isset($_GET['image']) ? $_GET['image'] : 'no-image.png';

// Menghitung total harga
$supirCost = $supir == "ya" ? 150000 * $durasi : 0;
$totalPrice = ($price * $durasi) + $supirCost;
?>

<div class="container">
    <div class="details">
        <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($carName); ?>">
        <h2><?php echo htmlspecialchars($carName); ?> / <?php echo htmlspecialchars($plate); ?></h2>
        <h4>Tanggal Sewa: <?php echo htmlspecialchars($tglSewa); ?></h4>
        <h4>Durasi: <?php echo htmlspecialchars($durasi); ?> hari</h4>
        <h4>Menggunakan Supir: <?php echo htmlspecialchars($supir); ?></h4>
        <h4>Harga/Hari: IDR <?php echo number_format($price, 0, ',', '.'); ?></h4>
        <h4>Biaya Supir: IDR <?php echo number_format($supirCost, 0, ',', '.'); ?></h4>
        <h3>Total Harga: IDR <?php echo number_format($totalPrice, 0, ',', '.'); ?></h3>
    </div>


    <div class="form-section">
        <h2>Pembayaran</h2>
        <form action="../Controller/PembayaranController.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="payment_method">Metode Pembayaran</label>
                <input type="radio" id="cod" name="payment_method" value="COD"> COD
                <input type="radio" id="transfer" name="payment_method" value="Transfer"> Transfer
            </div>
            <div class="form-group">
                <label for="bank">Transfer Bank</label>
                <p>BNI: 043969315* (an. Waluyo)</p>
                <p>BCA: 0223476579* (an. Pevita)</p>
            </div>
            <div class="form-group">
                <label for="transfer_proof">Unggah Bukti Transfer</label>
                <input type="file" id="transfer_proof" name="transfer_proof">
            </div>
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">
            <input type="hidden" name="tgl_sewa" value="<?php echo htmlspecialchars($_GET['tgl_sewa']); ?>">
            <input type="hidden" name="durasi" value="<?php echo htmlspecialchars($_GET['durasi']); ?>">
            <input type="hidden" name="supir" value="<?php echo htmlspecialchars($_GET['supir']); ?>">
            <input type="hidden" name="car_name" value="<?php echo htmlspecialchars($_GET['car_name']); ?>">
            <input type="hidden" name="plate" value="<?php echo htmlspecialchars($_GET['plate']); ?>">
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($_GET['price']); ?>">
            <input type="hidden" name="image" value="<?php echo htmlspecialchars($_GET['image']); ?>">
            <div class="form-group">
           
                <input type="submit" value="Pesan">
            </div>
        </form>
    </div>
</div>

<div class="notification" id="logoutNotification">
    <div class="logout-container">
        <div class="message">
            <img src="../images/warning.png" alt="Warning Icon">
            <h2>Anda yakin keluar dari Website?</h2>
        </div>
        <div class="buttons">
            <a href="../Views/logout.php">Logout</a>
            <a href="javascript:void(0);" onclick="hideLogoutNotification()">Batal</a>
        </div>
    </div>
</div>

</body>
</html>
