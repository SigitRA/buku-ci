<!-- app/Views/tambah_buku.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Form Tambah Buku</h1>
        <form action="/tambah-buku" method="post">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>

            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label>
                <select class="form-control" id="genre" name="genre" required>
                    <option value="">Pilih Genre</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Fantasi">Fantasi</option>
                    <!-- Tambahkan opsi-opsi genre lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="lorong">Lokasi:</label>
                <select class="form-control" id="lorong" name="lorong" required>
                    <option value="">Pilih lorong</option>
                    <option value="Lorong A">Lorong A</option>
                    <option value="Lorong B">Lorong B</option>
                    <option value="Lorong c">Lorong c</option>
                    <!-- Tambahkan opsi-opsi genre lainnya sesuai kebutuhan -->
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
