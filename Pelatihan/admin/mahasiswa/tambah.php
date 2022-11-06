<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data mahasiswa</title>
    </head>
    <body>
    <h2>Tambah Data mahasiswa</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <td>Nim</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td><input type="text" name="nama_mahasiswa"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>