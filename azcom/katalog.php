<html>
    <head>
        <title>AZCom</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
    <div class="container">
        <?php include("header.php") ?>
        <div class="menu">
            <a href="index.php">Beranda</a> | <a href="Katalog.php">Catalog</a>
        </div>
        <div class="content">
           
            <form method = "POST">
                pilih katalog
                <select name="katalog" id="">
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="submit" name='tombol' value="Tampilkan">
                <hr>
                <table border="1" cellpadding="3" cellspacing="0" width="300">
                    <tr>
                        <th>no</th>
                        <th>Nama Produk</th>
                        <th>Jenis</th>
                    </tr>
                    <?php
                     if (isset($_POST['tombol'] )) {
                    $hardware = ['monitor','cpu','keyboard','mouse'];
                    $software = ['WindowsOS','LinuxOS','MacOS'];

                    $catalog = ($_POST['katalog']);

                   

                    

                    if($catalog == 'hardware') {
                        $no = 1;
                        foreach ($hardware as $h) {
                            echo "<tr>
                            <td>$no</td>
                            <td>$h</td>
                            <td>Hardware</td>
                            </tr>";
                            $no++;
                        }
                    }
                    if($catalog == 'software') {
                        $no = 1;
                        foreach ($software as $j) {
                            echo "<tr>
                            <td>$no</td>
                            <td>$j</td>
                            <td>software</td>
                            </tr>";
                            $no++;
                        }
                    }
                }
                    ?>
                   
                </table>
            </form>

        </div>
        <?php include("footer.php") ?>
    </div>

    </body>
</html>