<html>

<head>
    <title>Tugas</title>
    <style>
        .gege {
            width: 100px;
            background-color: crimson;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .gle {
            width: 100px;
            background-color: orange;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .clear {
            clear: right;
        }
    </style>

</head>

<body>
    <h1 style="color:brown">Belajar Array di PHP</h1>
    <?php

    $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

    // !FOR!
    for (
        $i = 0;
        $i < count($hari);
        $i++
    ) {
        echo  '<div class="gege">' . $hari[$i] . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "<h5>Looping dengan <br>
    <b>FOR</b></h5>";



    // !!FOREACH!!
    foreach ($hari as $re) {
        echo '<div class="gle">' . $re . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "<h5>Looping dengan <br>
    <b>FOREACH</b></h5>";
    ?>
</body>

</html>