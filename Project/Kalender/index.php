<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kalender</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $kalender=array(date('d'), date('m'), date('Y'));
            $jmlHari=date("t",mktime(0,0,0,$kalender[1],$kalender[0],$kalender[2]));
            $namaBulan=date("F",mktime(0,0,0,$kalender[1],$kalender[0],$kalender[2]));
            echo "<h1 class='text-center mb-3'>$namaBulan $kalender[2]</h1>";
        ?>
        <!-- Kalender -->
        <div class="container border bg-success rounded">
            <div class="row justify-content-evenly text-center fs-5">
                <div class="col-1 mt-3">
                    <p class="text-white">Senin</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-white">Selasa</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-white">Rabu</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-white">Kamis</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-white">Jumat</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-white">Sabtu</p>
                </div>
                <div class="col-1 mt-3">
                    <p class="text-danger">Minggu</p>
                </div>
            </div>
            <?php
                $hariPertama=date('w', mktime(0,0,0,$kalender[1],1,$kalender[2]));
                switch($hariPertama){
                    case 0:
                        $jadikanMinggu=1;
                        break;
                    case 1:
                        $jadikanMinggu=7;
                        break;
                    case 2:
                        $jadikanMinggu=6;
                        break;
                    case 3:
                        $jadikanMinggu=5;
                        break;
                    case 4:
                        $jadikanMinggu=4;
                        break;
                    case 5:
                        $jadikanMinggu=3;
                        break;
                    case 6:
                        $jadikanMinggu=2;
                        break;
                }
                echo "<div class='row justify-content-evenly text-center'>";    
                $hariIni=date('j', mktime(0,0,0,7,3,2022));
                $ketemu=1;
                    for($a=1; $a<=7; $a++){
                        if($a<$hariPertama){
                            echo "<div class='col-1 mb-3'><p> </p></div>";
                        }elseif($a>=$hariPertama){    
                            $warnaTeks="text-dark";      
                            $warnaBg="bg-success";            
                            if($ketemu==$hariIni){
                                $warnaTeks="text-success";
                                $warnaBg="bg-warning";
                                echo "<div class='col-1 text-center border mb-3 $warnaTeks $warnaBg rounded'><p class='m-2 fs-1'>$ketemu</p></div>";
                            }elseif(date('l', mktime(0,0,0,$kalender[1], $a+$jadikanMinggu, $kalender[2]))=="Sunday"){                                
                                echo "<div class='col-1 text-center border mb-3 text-danger $warnaBg rounded'><p class='m-2 fs-1'>$ketemu</p></div>";
                            }else{
                                echo "<div class='col-1 text-center border mb-3 $warnaTeks $warnaBg rounded'><p class='m-2 fs-1'>$ketemu</p></div>";
                            }
                            $ketemu++;
                        }
                    }
                
                echo"</div>";
                for($a=$ketemu; $a<=$jmlHari; $a++){
                    if(date('w', mktime(0,0,0,$kalender[1], $a, $kalender[2]))==1){
                        echo "<div class='row justify-content-evenly text-center'>";                
                    }
                    $warnaTeks="text-dark";      
                    $warnaBg="bg-success";      
                    if(date("l", mktime(0,0,0,$kalender[1],$a,$kalender[2]))=="Sunday"){
                        $warnaTeks="text-danger";                    
                    }
                    if($a==$hariIni){
                        $warnaTeks="text-success";
                        $warnaBg="bg-warning";
                    }
                    echo "<div class='col-1 border mb-3 $warnaTeks $warnaBg rounded'><p class='m-2 fs-1'>$a</p></div>";        
                    if(date('w', mktime(0,0,0,$kalender[1], $a, $kalender[2]))==0){
                        echo "</div>";
                    }            
                }
            ?>
        </div>
        <!-- Akhir Kalender -->
        <a class="btn btn-success position-absolute top-0" href="../../index.html" role="button">Kembali</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
