<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Minuman Baru</title>
    
    <!-- Mengimpor CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Menggunakan Card Bootstrap -->
    <div class="card">
        <div class="card-header">
            <h1>Tambah Minuman Baru</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Nama Minuman</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Minuman</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" required>
                </div>
                <div class="form-group">
                    <label for="published_year">Tahun Di Buat</label>
                    <input type="text" class="form-control" id="published_year" name="published_year" required>
                </div>
                <div class="form-group">
                    <label for="published_year">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- Mengimpor JavaScript Bootstrap (Opsional) -->

</body>
</html>
