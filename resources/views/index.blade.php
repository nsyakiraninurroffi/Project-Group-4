<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Group 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <h2 class="mb-4">📘 Buku Tamu Group 4</h2>

    <form action="{{ route('bukutamu.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="id_tamu" class="form-label">ID Tamu</label>
                <input type="text" name="id_tamu" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nama_tamu" class="form-label">Nama</label>
                <input type="text" name="nama_tamu" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="kepentingan" class="form-label">Kepentingan</label>
                <input type="text" name="kepentingan" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
        </div>
        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-success px-4">Kirim</button>
        </div>
    </form>

    <hr class="my-5">

<h4 class="mb-3">Daftar Tamu</h4>
<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Kepentingan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tamus as $tamu)
            <tr>
                <td>{{ $tamu->id_tamu }}</td>
                <td>{{ $tamu->nama_tamu }}</td>
                <td>{{ $tamu->email }}</td>
                <td>{{ $tamu->alamat }}</td>
                <td>{{ $tamu->no_hp }}</td>
                <td>{{ $tamu->kepentingan }}</td>
                <td>{{ \Carbon\Carbon::parse($tamu->tanggal)->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>