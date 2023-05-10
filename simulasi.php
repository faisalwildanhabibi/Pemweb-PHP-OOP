<?php
require_once 'Product.php';
require_once 'cdMusic.php';
require_once 'cdRack.php';

// Buat data cdMusic
$cd = new cdMusic();
$cd->setName('Here With Me');
$cd->setPrice(50000);
$cd->setDiscount(0.2);
$cd->setArtist('D4vd');
$cd->setGenre('Dansa, Elektronik');

// Menghitung harga data cdMusic
$cd->calculatePrice();

// Buat data cdRack
$rack = new cdRack();
$rack->setName('Beerbongs & Bentleys');
$rack->setPrice(750000);
$rack->setDiscount(0.35);
$rack->setCapacity(5);
$rack->setModel('2018');

// Menghitung harga data cdRack
$rack->calculatePrice();
?>

<!-- Menampilkan output menggunakan tabel -->
<center>
    <table border="2px">
        <thead>
            <tr>
                <th style="background-color: d3d3d3;" colspan="6">cdMusic</th>
            </tr>
            <tr style="background-color: ababab;">
                <th>Judul Lagu</th>
                <th>Harga</th>
                <th>Diskon (%)</th>
                <th>Penyanyi</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $cd->getName(); ?></td>
                <td>Rp<?php echo number_format($cd->getPrice(), 0, ',', '.'); ?></td>
                <td><?php echo $cd->getDiscount() * 100 . '%'; ?></td>
                <td><?php echo $cd->getArtist(); ?></td>
                <td><?php echo $cd->getGenre(); ?></td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table border="2px">
        <thead>
            <tr>
                <th style="background-color: d3d3d3;" colspan="6">cdRack</th>
            </tr>
            <tr style="background-color: ababab;">
                <th>Nama Rak</th>
                <th>Harga</th>
                <th>Diskon (%)</th>
                <th>Model</th>
                <th>Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rack->getName(); ?></td>
                <td>Rp<?php echo number_format($rack->getPrice(), 0, ',', '.'); ?></td>
                <td><?php echo $rack->getDiscount() * 100 . '%'; ?></td>
                <td><?php echo $rack->getModel(); ?></td>
                <td><?php echo $rack->getCapacity(); ?></td>
            </tr>
        </tbody>
    </table>
</center>