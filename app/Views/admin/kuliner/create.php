<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kuliner</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="card shadow">
            <div class="card-body">

                <h2>Tambah Data Kuliner</h2>
                <hr>

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

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="/admin/kuliner" class="btn btn-secondary">
                        Kembali
                    </a>

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

                </form>

            </div>
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

</body>

</html>
</script>
        
    </script>

</body>

</html>