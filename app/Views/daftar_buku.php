<!-- app/Views/daftar_buku.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<div class="container mt-4">
    <h1>Daftar Buku</h1>
    <br>
    <a class="btn btn-primary" href="/tambah-buku">Tambah buku</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Jumlah</th>
                <th>Genre</th>
                <th>lorong</th>
                <th>Action</th> <!-- Tambah kolom untuk tombol View -->
            </tr>
        </thead>
        <tbody>
    <?php foreach ($daftar_buku as $index => $buku) : ?>
        <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $buku['judul']; ?></td>
            <td><?= $buku['penerbit']; ?></td>
            <td><?= $buku['pengarang']; ?></td>
            <td><?= $buku['tahun_terbit']; ?></td>
            <td><?= $buku['jumlah']; ?></td>
            <td><?= $buku['genre']; ?></td>
            <td><?= $buku['lorong']; ?></td>
            <td>
                <a href="/edit-buku/<?= $buku['id']; ?>" class="btn btn-primary">Edit</a>
                <?= anchor('hapus-buku/' . $buku['id'], 'Hapus', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Apakah Anda yakin ingin menghapus buku ini?')"]); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</div>

<!-- Tambahkan link Bootstrap JS jika diperlukan -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
