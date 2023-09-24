<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Minuman</title>
    
    <!-- Mengimpor CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Menggunakan Card Bootstrap -->
    <div class="card">
        <div class="card-header">
            <h1 class="mb-0">Detail Minuman</h1>
        </div>
        <div class="card-body">
            <hr />
            <div class="row">
                <div class="col">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="name" class="form-control" placeholder="Judul Buku" value="{{ $barang->title }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Jenis Minuman</label>
                    <input type="text" name="author" class="form-control" placeholder="Penulis" value="{{ $barang->jenis }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Tanggal Di Buat</label>
                    <input type="text" name="year" class="form-control" placeholder="Tahun Terbit" value="{{ $barang->published_year }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="description" placeholder="Deskripsi" readonly>{{ $barang->deskripsi }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Dibuat Pada</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $barang->created_at }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Diperbarui Pada</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Diperbarui Pada" value="{{ $barang->updated_at }}" readonly>
                </div>
            </div>
            <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<!-- Mengimpor JavaScript Bootstrap (Opsional) -->

</body>
</html>
