<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Daftar Minuman</title>
    <!-- Favicon icon -->
    <link rel="icon" type="/assets/image/png" sizes="16x16" href="/assets/mages/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<div class="container mt-5">
    <!-- Menggunakan Card Bootstrap -->
    <div class="card">
        <div class="card-header">
            <div class="drop-down dropdown-profile   dropdown-menu">
            </div>            
            <h1>Daftar Minuman</h1>           
            <div class="header">    
                <div class="header-content clearfix">                                      
                    <div class="header-left">                       
                    </div>
                        <div class="header-right">
                            </li>
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="/assets/images/user/1.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile   dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>                                            
                                            <li><a href="{{ route('logout') }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Minuman</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Minuman</th>
                        <th>Jenis Minuman</th>
                        <th>Tanggal Di Buat</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->id }}</td>
                            <td>{{ $barang->title }}</td>
                            <td>{{ $barang->jenis }}</td>
                            <td>{{ $barang->published_year }}</td>
                            <td>{{ $barang->deskripsi }}</td>
                            <td>
                                <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus Minuman ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Mengimpor JavaScript Bootstrap (Opsional) -->
<script src="/assets/plugins/common/common.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/gleek.js"></script>
<script src="/assets/js/styleSwitcher.js"></script>

<script src="/assets/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>
</html>
