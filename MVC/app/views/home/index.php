<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>

<body>
    <div class="container mt-3">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Selamat Datang di Pembelajaran MVC PHP</h1>
                <p class="col-md-8 fs-4">Halo, nama saya <?= $data['nama']; ?>.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>
    </div>
</body>

</html>