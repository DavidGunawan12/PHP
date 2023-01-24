<?php 
echo "Nama : ". $_POST['nama'];
echo "Email :". $_POST['email'];
echo "pesan :". $_POST['pesan'];
 if ($_POST['nama'] == '') {
    echo "isi namanya bang";
    echo "<br>";
 };
 if ($_POST['email'] == '') {
    echo "isi emailnya bang";
    echo "<br>";
 };
 if ($_POST['pesan'] == '') {
    echo "isi pesannya bang";
    echo '<br>';
 };
?>
