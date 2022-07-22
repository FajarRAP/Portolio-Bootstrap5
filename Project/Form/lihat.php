<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Data</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            margin: 20px 0;
            text-align: center;
        }
        table{
            margin: auto;
            width: 80vw;
            border: 1px solid;    
            border-radius: 10px;        
            padding: 10px;
        }
        
        table tr td{
            border: 1px solid;
            text-align: center;
            width: 20%;
            border-radius: 10px;        
            padding: 10px;
        }
        table tr td:nth-child(3){
            width: 10%;
        }
        table tr:nth-child(1) td{
            font-size: 2rem;
        }
        a{
            border: 1px solid;
            display: inline-block;
            width: 80px;
            height: 40px;
            border-radius: 10px;
            text-align: center;
            line-height: 40px;
            background-color: green;
            color: whitesmoke;
            text-decoration: none;
        }
        a:hover{
            background-color: #025217;
        }
    </style>
</head>
<body>
    <h1>Daftar yang mengisi data</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>Asal</td>
            <td>Kelas</td>
        </tr>
    <?php
        $fp = fopen("text.txt", "r");
        while ($isi = fgets($fp)) {
            $pisah = explode(',', $isi);
            echo("<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td></tr>");
        }
    ?>
    <a href='index.php'>Kembali</a>
    </table>
</body>
</html>