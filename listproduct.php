<?php
include "dataproduct.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>

<link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1> Produk </h1>

            <div id="produktabel">
                <table>
                    <thead>
                        <tr>
                            <td> Produk </td>
                            <td> Harga </td>
                            <td> Deskripsi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($product as $item) { ?>
                        <tr>
                            <td> <?php echo $item["nama"]; ?> </td>
                            <td> Rp. <?php echo $item["harga"]; ?> </td>
                            <td> <?php echo $item["des"]; ?> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
<br><br><br><br><br>
            <div id="produkcard">
                <div class="row">
                    <?php foreach($product as $item) { ?>
                        <div class="card">
                            <h3> <?php echo $item["nama"] ;?> </h3>
                            <p> Rp. <?php echo $item["harga"]; ?></p>
                            <p> <?php echo $item["des"]; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>

<script src="main.js"></script>
</body>
</html>