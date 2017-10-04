<h2>Tambah Gambar</h2>
<form method="POST" action="proses/galeri/save.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" placeholder="Nama Foto">
            </td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>
                <input type="file" name="gambar">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
            </td>
        </tr>
    </table>
</form>