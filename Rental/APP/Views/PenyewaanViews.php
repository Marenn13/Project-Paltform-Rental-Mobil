<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sewa Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d0e3ff;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 1px 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: fixed;
            width: 99%;
            top: 0;
            z-index: 1000;
        }
        .header img {
            height: 75px;
        }
        .header nav {
            list-style: none;
            padding: 0;
            display: flex;
            margin-right: 20px;
        }
        .header nav a {
            margin-left: 20px;
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
        .header nav a:hover {
            color: #002060;
        }
        .header a.logout {
            text-decoration: none;
            margin-right: 10px;
            color: black;
            font-weight: bold;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 150px; /* Buat area tengah */
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .content img {
            display: flex;
            justify-content: center;
            align-items: self-end;
            margin: 45px 0;
            background: linear-gradient(to bottom, #b3cde0, #011f4b);
            padding: 20px;
            border-radius: 10px;
            max-width: 470px;
        }
        .details {
            flex: 1;
            margin-left: 20px;
        }
        .details h3 {
            margin-top: 0;
        }
        .details .form-group {
            margin-bottom: 15px;
        }
        .details .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .details .form-group select, 
        .details .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .details .form-group input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }
        .warning {
            background-color: #ffcccc;
            padding: 10px;
            border: 1px solid #ff0000;
            margin-top: 20px;
        }
        .warning p {
            margin: 0;
            color: #ff0000;
            font-weight: bold;
        }
        .total-price {
            text-align: right;
            font-size: 24px;
            font-weight: bold;
        }
        .button {
            text-align: center;
            margin-top: 20px;
        }
        .button button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        .image {
           display: flex;
           align-items: center;
           /* border: 3px red solid; */
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
            padding: 10px 0; /* Added padding for consistency */
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
            margin-top: 10px; /* Added margin-top for spacing */
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

<div class="container">
    <div class="content">
        <div>
            <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($carName); ?>">
            <h2><?php echo htmlspecialchars($carName); ?> / <?php echo htmlspecialchars($plate); ?></h2>
            <h4> Harga/Hari: IDR <?php echo number_format($price, 0, ',', '.'); ?></h4>
            <h5>Biaya tambahan jika menggunakan supir = Rp.150.000 </h5>
        </div>
        <div class="details">
            <h3>Detail Sewa Mobil</h3>
            <form action="../Views/Penyewaan2Views.php" method="GET">
                <input type="hidden" name="car_name" value="<?php echo htmlspecialchars($carName); ?>">
                <input type="hidden" name="plate" value="<?php echo htmlspecialchars($plate); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
                <input type="hidden" name="image" value="<?php echo htmlspecialchars($image); ?>">

                <div class="form-group">
                    <label for="tgl-sewa">Tanggal Sewa</label>
                    <input type="date" id="tgl-sewa" name="tgl_sewa" required>
                </div>
                <div class="form-group">
                    <label for="durasi">Durasi Sewa (hari)</label>
                    <input type="number" id="durasi" name="durasi" min="1" required>
                </div>
                <div class="form-group">
                    <label for="supir">Menggunakan Supir?</label>
                    <input type="radio" id="supir-ya" name="supir" value="ya" label for="supir-ya">Ya</label>
                    <input type="radio" id="supir-tidak" name="supir" value="tidak" checked label for="supir-tidak">Tidak</label>
                </div>
                
                <div class="button">
                    <button type="submit">Sewa Sekarang</button>
                </div>
            </form>
        </div>
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
