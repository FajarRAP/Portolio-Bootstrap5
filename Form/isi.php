<?php
    $nama=@$_POST['nama'];
    $asal=@$_POST['asal'];
    $kelas=@$_POST['kelas'];
    $data=$nama.",".$asal.",".$kelas."\n";
    $tulisFile=fopen("text.txt","a");
    fputs($tulisFile, "$nama,$asal,$kelas\n");
    // fwrite($tulisFile, $data);
    fclose($tulisFile);
    header("Location: setelahIsi.php")
?>