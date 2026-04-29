<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-success">Tambah Kuliner</h2>

    <a href="/admin/kuliner" class="btn btn-secondary">
        ← Kembali
    </a>
</div>

<div class="card shadow border-0 rounded-4">
    <div class="card-body">

        <form method="post" action="/admin/kuliner/store">

            <div class="mb-3">
                <label>Nama Kuliner</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Kategori ID</label>
                <input type="number" name="kategori_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Latitude</label>
                <input type="text" name="latitude" id="latitude" class="form-control" readonly>
            </div>

            <div class="mb-3">
                <label>Longitude</label>
                <input type="text" name="longitude" id="longitude" class="form-control" readonly>
            </div>

            <button type="button" onclick="getCoordinate()" class="btn btn-success mb-3">
                Cari Koordinat
            </button>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="/admin/kuliner" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

<script>
    function getCoordinate() {
        let alamat = document.querySelector('[name="alamat"]').value;

        fetch('/admin/kuliner/get-coordinate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'alamat=' + encodeURIComponent(alamat)
            })
            .then(response => response.json())
            .then(data => {
                if (data.status) {
                    document.getElementById('latitude').value = data.lat;
                    document.getElementById('longitude').value = data.lon;
                    alert('Koordinat berhasil ditemukan!');
                } else {
                    alert('Alamat tidak ditemukan');
                }
            });
    }
</script>

<?= $this->endSection() ?>
        
    </script>

</body>

</html>