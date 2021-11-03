<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <title>ALIYAH SHOES</title>
</head>
<body>
    <header align="center">
        <h1>Aliyah Shoes</h1>
        
    </header>

    <form action="<?= base_url('aliyahshoes/cetak');?>" method="post">
                <center>
                    
                        <table cellpadding="10px">
                             <tr>
                                <th colspan="3">
                                    Form Output Transaksi
                                    <hr>
                                </th>
                            </tr>
                            <tr>
                                <th>Nama Pembeli</th>
                                <td>:</td>
                                <td>
                                    <?= $np; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>No Handphone</th>
                                <td>:</td>
                                <td>
                                    <?= $nh; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Merk Sepatu</th>
                                <td>:</td>
                                <td>
                                    <?= $ms; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ukuran Sepatu</th>
                                <td>:</td>
                                <td>
                                    <?= $us; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>:</td>
                                <td>
                                    <?= $harga; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <hr>
                                    <a href="<?php echo base_url().'Aliyahshoes' ?>">Back</a>
                                </td>
                            </tr>
                        </table>
                   
                </center>
</body>
</html>