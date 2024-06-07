<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedan Trans Tour - Homepage</title>
    <style>
       body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #EAEAEA;
}
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2px 10px;
    background-color: white;
    box-shadow: 0 2px 3px rgba(0,0,0,0.1);
}
.header img {
    height: 75px;
}
.nav-links a {
    margin: 0 15px;
    text-decoration: none;
    color: #002060;
    font-weight: bold;
}
.nav-links a:hover {
    color: #0056b3;
}
.main-content {
    text-align: center;
    background: url('../images/mobil.png') no-repeat center center;
    background-size: cover;
    height: calc(95vh - 100px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
.main-content h1 {
    font-size: 36px;
    margin-bottom: 10px;
}
.main-content p {
    font-size: 18px;
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
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
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
        <div class="nav-links">
            <a href="homepage.php">Halaman</a>
            <a href="TentangKami.php">Tentang Kami</a>
            <a href="InfoViews.php">Informasi Mobil</a>
            <a href="javascript:void(0);" onclick="showLogoutNotification()">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>NIKMATI PERJALANAN ANDA YANG NYAMAN, AMAN & TERJANGKAU</h1>
        <p>Kedan Trans Tour menyediakan berbagai jenis mobil untuk kebutuhan anda.</p>
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
