<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">

        <div class="col-md-3">
            <div class="card shadow border-0 bg-primary text-white">
                <div class="card-body">
                    <h5>Total Kuliner</h5>
                    <h2><?= isset($totalKuliner) ? $totalKuliner : 0 ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 bg-success text-white">
                <div class="card-body">
                    <h5>Total User</h5>
                    <h2><?= isset($totalUser) ? $totalUser : 0 ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 bg-warning text-dark">
                <div class="card-body">
                    <h5>Total Review</h5>
                    <h2> <?= isset($totalReview) ? $totalReview : 0 ?> </h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 bg-danger text-white">
                <div class="card-body">
                    <h5>Total Kategori</h5>
                    <h2> <?= isset($totalKategori) ? $totalKategori : 0 ?> </h2>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="/admin/kuliner" class="btn btn-dark">
            Kelola Data Kuliner
        </a>

        <a href="/logout" class="btn btn-danger">
            Logout
        </a>
    </div>

</div>

</body>
</html>