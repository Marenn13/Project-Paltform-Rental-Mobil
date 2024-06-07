<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedan Trans & Tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D0E3FF;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: white;
            position: fixed;
            top: 0;
            width: 98%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header img {
            height: 50px;
        }
        .header nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #003366;
            font-weight: bold;
        }
        .container {
            margin-top: 80px; /* Space for fixed header */
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .title h1 {
            margin: 0;
            color: #003366;
        }
        .title::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #003366;
            margin-top: 10px;
        }
        .content {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
        }
        .content img {
            width: 65%; /* Adjusted width */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.1);
            margin-right: 30px;
            margin-top: 100px;
        }
        .text {
            /* border: 3px red solid;  */
            flex: 1;
            min-width: 300px;
            text-align: justify; /* Menambahkan rata kanan dan kiri pada teks */
            padding-right: 100px;
            margin-top: 90px;
        }
        .text h2 {
            color: #003366;
            margin-top: 60px; /* Mengurangi margin atas pada judul */
        }
        .text p {
            font-size: 16px;
            line-height: 2.2;
            margin: 0;
            margin-top: 20px;
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
        function showLogoutNotification() { // Mengganti nama fungsi untuk konsistensi
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
    <div class="content">
        <div class="image">
            <img src="../images/Mobill.jpeg" alt="Kedan Trans & Tour">
        </div>
        <div class="text">
            <h2>KEDAN TRANS & TOUR</h2>
            <p>Kedan Trans & Tour melayani berbagai kebutuhan perjalanan. Anda bisa menggunakan armada mobil kami untuk keperluan perjalanan pribadi dan keluarga ataupun bisnis. Kami menyediakan beragam paket pilihan untuk anda pilih sesuai kebutuhan anda. Menyediakan armada terlengkap dengan pilihan transmisi manual dan matic. Semua unit kami dalam kondisi terbaik untuk perjalanan dalam maupun luar kota. Harga Sewa Kendaraan Kedan Trans & Tour juga relatif murah.</p>
        </div>
    </div>

    <?php if (isset($message) && $message): ?>
        <div class="message"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>

    <div class="notification" id="logoutNotification" style="display:none;">
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