<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Minuman</title>
    
    <!-- Mengimpor CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Menggunakan Card Bootstrap -->
    <div class="card">
        <div class="card-header">
            <h1>Edit Minuman</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Nama Minuman</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $barang->title }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Minuman</label>
                    <input type="text" class="form-control" id="author" name="jenis" value="{{ $barang->jenis }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ $barang->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="published_year">Tanggal Di Buat</label>
                    <input type="text" class="form-control" id="published_year" name="published_year" value="{{ $barang->published_year }}" required>
                </div>
                <div class="bootstrap-modal">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Edit</button>
                    <button href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</button>
                    <!-- Modal -->
                    <!-- Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Minuman</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">Apakah Anda Yakin Untuk Mengubah Data?</div>
            <div class="modal-footer">
                <!-- Create a row with two columns for buttons -->
                <div class="row">
                    <div class="col">
                        <!-- "Edit" button -->
                        <button type="submit" class="btn btn-primary btn-block">Save changes</button>
                    </div>
                    <div class="col">
                        <!-- "Cancel" button -->
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Mengimpor JavaScript Bootstrap (Opsional) -->
<script src="/assets/plugins/common/common.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/gleek.js"></script>
<script src="/assets/js/styleSwitcher.js"></script>
</body>
</html>
