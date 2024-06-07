<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedan Trans Tour</title>
    <style>
        /* Include your CSS styles here */
        /* Styles from your original HTML */
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
            padding: 10px 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: fixed;
            width: 98%;
            top: 0;
            z-index: 1000;
        }
        .header img {
            height: 35px;
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
            color: red;
        }
        .container {
            padding: 80px 40px 40px 40px;
        }
        .car-list {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .car-item {
            background: radial-gradient(circle, #0b2454 30%, #1e3d66 70%, #4d698e 100%);
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .car-item:hover {
            transform: scale(1.05);
        }
        .car-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .car-item h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #fff;
        }
        .car-item p {
            font-size: 14px;
            color: #ddd;
        }
        .car-item .btn-pesan {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .car-item .btn-pesan:hover {
            background-color: #0056b3;
        }
        @media (max-width: 1200px) {
            .car-list {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 900px) {
            .car-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .car-list {
                grid-template-columns: 1fr;
            }
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
        function confirmLogout() {
            document.getElementById('logoutNotification').style.display = 'flex';
        }
        function hideLogoutNotification() {
            document.getElementById('logoutNotification').style.display = 'none';
        }
    </script>
</head>
<body>

    <div class="header">
        <img src="../images/nologo.png" alt="Kedan Trans Tour Logo">
        <nav>
            <a href="homepage.php">Halaman</a>
            <a href="TentangKami.php">Tentang Kami</a>
            <a href="InfoViews.php">Informasi Mobil</a>
            <a href="javascript:void(0);" onclick="confirmLogout()">Logout</a>
        </nav>
    </div>
    <?php
 include "../Controller/InfoController.php";

$controller = new InfoController();
 
?>

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
