<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<h2>Dashboard Admin Kuliner Mranggen</h2>

<div class="row">

    <div class="col-md-3">
        <div class="card bg-primary text-white p-3 shadow">
            <h5>Total Kuliner</h5>
            <h2><?= $total_kuliner ?? 0 ?></h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white p-3 shadow">
            <h5>Total User</h5>
            <h2><?= $total_user ?? 0 ?></h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-dark p-3 shadow">
            <h5>Total Review</h5>
            <h2><?= $total_review ?? 0 ?></h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-danger text-white p-3 shadow">
            <h5>Total Kategori</h5>
            <h2><?= $total_kategori ?? 0 ?></h2>
        </div>
    </div>

</div>

<?= $this->endSection() ?>