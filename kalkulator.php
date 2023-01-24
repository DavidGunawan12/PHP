<html>
    <head>
        <title>getrusage</title>
    </head>
    <body>
        <h1>KALKULATOR</h1>
        <hr>
        <form action="" method="POST">
        Nilai 1<input type="number" name="l1"><br>
        Nilai 2<input type="number" name="l2"><br><br>

        <select name="rumus" id="">
        <option value="" disabled>pilih</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
        </select><br><br>

        <input type="submit" name="hasil" value="Hitung">
        </form>
    
        <?php 
        $n1 = ($_POST['l1']);
        $n2 = ($_POST['l2']);
        $rumus = ($_POST['rumus']);
        
        if ($n1 == '' || $n2 == ''){
            $hsil = 0;
        }else{
        if ($rumus == 'tambah') {
            function pertambahan($n1,$n2)
            {
                $nilai1 = $n1;
                $nilai2 = $n2;
                $luas = $n1 + $n2;
                return $luas;
            }
            echo pertambahan($n1,$n2);
        }
        
        if ($rumus == 'kurang') {
            function pengurangan($n1,$n2)
            {
                $nilai1 = $n1;
                $nilai2 = $n2;
                $luas = $n1 - $n2;
                return $luas;
            }
            echo pengurangan($n1,$n2);
        }

        if ($rumus == 'kali') {
            function perkalian($n1,$n2)
            {
                $nilai1 = $n1;
                $nilai2 = $n2;
                $luas = $n1 * $n2;
                return $luas;
            }
            echo perkalian($n1,$n2);
        }

        if ($rumus == 'bagi') {
            function pembagian($n1,$n2)
            {
                $nilai1 = $n1;
                $nilai2 = $n2;
                $luas = $n1 / $n2;
                return $luas;
            }
            echo pembagian($n1,$n2);

        }
        }
        
        ?>
    </body>
</html>