<?php
$hasil = $koneksi->prepare("SELECT * FROM galeri ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
    <a class="btn pull-right" href="index.php?p=galeri&m=add">Tambah Foto</a>
    <h2>Galeri</h2>
    <div style="clear:both">&nbsp;</div>
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;foreach ($data as $galeri) {?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $galeri['nama']; ?>
                    </td>
                    <td><img class="img-mini" src="assets/gambar/<?php echo $galeri['gambar']; ?>">
                    </td>
                    <td><a href="index.php?p=galeri&m=edit&id= <?php echo $galeri['id']; ?>">Ubah</a></td>
                    <td><a onclick="return confirm('Yakin Ingin Menghapus Data?')" href="proses/galeri/hapus.php?id= <?php echo $galeri['id']; ?>">Hapus</a></td>
                </tr>
                <?php $i++;}
?>
        </tbody>
    </table>