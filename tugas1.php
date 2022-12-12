<?php
$pelanggan = [
    ['nama' => 'Andika', "<br/>",
     'alamat' => 'Diponegoro', "<br/>",
     'no_telp' => '098746434', "<br/>",
     'pekerjaan' => 'Guru', "<br/>",
     'gaji' => 5000000],

    ['nama' => 'Tesa', "<br/>",
     'alamat' => 'Jalan Badak', "<br/>",
     'no_telp' => '098746434', "<br/>",
     'pekerjaan' => 'PNS', "<br/>",
     'gaji' => 7000000]
];

?>

<html>
    <head>
        <title>DATA NASABAH PELANGGAN</title>
        <h1>Ini Halaman Login</h1>
        <style>
            .warna{
                background-color: orange;
            }
        </style>
    </head>
    <body>
        <?php echo "<h3><center>Tabel</center></h3>"; ?>
        <table border = "2" cellpadding = "10" cellspacing = "0" align = "center"> 
            <th class="warna">Nama</th>
            <th class="warna">Alamat</th>
            <th class="warna">No Telepon</th>
            <th class="warna">Pekerjaan</th>
            <th class="warna">Gaji</th>  
        <?php foreach ($pelanggan as $plg) :?>
            <tr>
                <td><?php echo $plg["nama"]; ?></td>
                <td><?php echo $plg["alamat"]; ?></td>
                <td><?php echo $plg["no_telp"]; ?></td>
                <td><?php echo $plg["pekerjaan"]; ?></td>
                <td><?php echo $plg["gaji"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </table> 
    </body>
</html>