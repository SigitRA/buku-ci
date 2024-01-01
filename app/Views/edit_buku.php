<!-- app/Views/edit_buku.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Buku</h1>
        <form action="/update-buku/<?= $buku['id']; ?>" method="post">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul']; ?>" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit']; ?>" required>
            </div>

            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang']; ?>" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $buku['jumlah']; ?>" required>
            </div>

            <div class="form-group">
    <label for="genre">Genre:</label>
    <select class="form-control" id="genre" name="genre" required>
        <option value="">Pilih Genre</option>
        <option value="Fiksi" <?= ($buku['genre'] === 'Fiksi') ? 'selected' : ''; ?>>Fiksi</option>
        <option value="Non-Fiksi" <?= ($buku['genre'] === 'Non-Fiksi') ? 'selected' : ''; ?>>Non-Fiksi</option>
        <option value="Fantasi" <?= ($buku['genre'] === 'Fantasi') ? 'selected' : ''; ?>>Fantasi</option>
        <!-- Tambahkan opsi genre lainnya sesuai kebutuhan -->
    </select>
</div>

<div class="form-group">
    <label for="lorong">Lorong:</label>
    <select class="form-control" id="lorong" name="lorong" required>
        <option value="">Pilih Lorong</option>
        <option value="Lorong A" <?= ($buku['lorong'] === 'Lorong A') ? 'selected' : ''; ?>>Lorong A</option>
        <option value="Lorong B" <?= ($buku['lorong'] === 'Lorong B') ? 'selected' : ''; ?>>Lorong B</option>
        <option value="Lorong C" <?= ($buku['lorong'] === 'Lorong C') ? 'selected' : ''; ?>>Lorong C</option>
        <!-- Tambahkan opsi lorong lainnya sesuai kebutuhan -->
    </select>
</div>
            <button type="submit" class="btn btn-primary">Update Buku</button>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
