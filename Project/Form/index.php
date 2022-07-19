<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Data Diri</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <form method="POST" action="isi.php">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="asal" placeholder="Asal">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-success position-absolute top-0" href="../../index.html" role="button">Kembali</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>