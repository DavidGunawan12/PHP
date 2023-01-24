<?php 

$n1 = ($_POST['l1']);
$n2 = ($_POST['l2']);
$rumus = ($_POST['rumus']);

if ($n1 == '' || $n2 == ''){
    echo 'isian gada';
}else{
if ($rumus == 'tambah') {
    function segitiga($n1,$n2)
    {
        $alas = $n1;
        $tinggi = $n2;
        $luas = ;
        return $luas;
    }
    echo segitiga($n1,$n2);
}

if ($rumus == 'Lpp') {
    function persegipanjang($n1,$n2)
    {
        $panjang = $n1;
        $lebar = $n2;
        $luas = $panjang * $lebar;
        return $luas;
    }
    echo persegipanjang($n1,$n2);
}
}


?>