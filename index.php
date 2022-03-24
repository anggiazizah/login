<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form action="form_add_aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jk" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="number" name="no_telepon"></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>
                    <select name="kecamatan">
                        <option>-- Pilih Kecamatan --</option>
                        <option>Rajeg</option>
                        <option>Sindang Jaya</option>
                        <option>Cikupa</option>
                        <option>Curug</option>
                        <option>Kronjo</option>
                        <option>Pakuhaji</option>
                        <option>Pasar Kemis</option>
                        <option>Sepatan</option>
                        <option>Mauk</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="kirim">Kirim</button>
                    <button type="reset" name="reset">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>