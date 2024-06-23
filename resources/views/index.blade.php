<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">
        <a href="https://www.malasngoding.com">www.malasngoding.com</a>
    </h2>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah" class="btn btn-success mb-3">+ Tambah Pegawai Baru</a>
 
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET" class="form-inline mb-3">
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
 
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        Halaman: {{ $pegawai->currentPage() }} <br/>
        Jumlah Data: {{ $pegawai->total() }} <br/>
        Data Per Halaman: {{ $pegawai->perPage() }} <br/>
    </div>
 
    <div class="d-flex justify-content-center">
        {{ $pegawai->links() }}
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
