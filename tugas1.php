<?php
$dataProduk = array(
    //nama produk, merk, harga, status stok
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .available {
            color: green;
        }

        .unavailable {
            color: red;
        }

        .order-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Status Stok</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($dataProduk as $produk): ?>
                <tr>
                    <td><?= $produk[0]; ?></td>
                    <td><?= $produk[1]; ?></td>
                    <td>Rp <?= number_format($produk[2], 0, ',', '.'); ?></td>
                    <td class="<?= $produk[3] ? 'available' : 'unavailable'; ?>">
                        <?= $produk[3] ? 'Tersedia' : 'Tidak Tersedia'; ?>
                    </td>
                    <td>
                        <?php if ($produk[3]): ?>
                            <button class="order-btn">Order</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>