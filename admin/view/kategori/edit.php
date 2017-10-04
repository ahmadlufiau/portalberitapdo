<?php $hasil = $koneksi->prepare("SELECT * FROM kategori WHERE `id` = '" . get('id') . "'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);?>
    <form method="POST" action="proses/kategori/update.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td>
                    <input type="text" name="nama_kategori" value=" <?php echo $data['nama_kategori']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>