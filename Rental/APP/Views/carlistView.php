<div class="car-list">
    <?php
    foreach ($cars as $car) {
        echo '<div class="car-item">';
        echo '<img src="' . $car[3] . '" alt="' . $car[0] . '">';
        echo '<h3>' . $car[0] . ' / ' . $car[1] . '</h3>';
        echo '<p>Harga <br>IDR ' . number_format($car[2], 0, ',', '.') . ' / 1 hari</p>';
        // Tautan ke halaman penyewaan
        // Perubahan pada tautan untuk langsung mengarahkan ke halaman penyewaan
        echo '<a href="../Controller/InfoController.php?action=penyewaan&carName=' . urlencode($car[0]) . '&plate=' . urlencode($car[1]) . '&price=' . $car[2] . '&image=' . urlencode($car[3]) . '" class="btn-pesan">Pesan</a>';

        echo '</div>';
    }
    ?>
</div>
