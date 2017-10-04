<?php
$hasil = $koneksi->prepare("SELECT * FROM berita ORDER BY id_berita DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
    <a class="btn pull-right" href="index.php?p=berita&m=add">Tambah Berita</a>
    <h2>Berita</h2>
    <div style="clear:both">&nbsp;</div>
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;foreach ($data as $berita) {?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $berita['tanggal']; ?>
                    </td>
                    <td>
                        <?php echo $berita['judul']; ?>
                    </td>
                    <td>
                        <?=substr($berita['isi'], 0, 50);?>
                    </td>
                    <td><img class="img-mini" src="assets/gambar/<?php echo $berita['gambar']; ?>">
                    </td>
                    <td><a href="index.php?p=berita&m=edit&id_berita= <?php echo $berita['id_berita']; ?>">Ubah</a></td>
                    <td><a onclick="return confirm('Yakin Ingin Menghapus Data?')" href="proses/berita/hapus.php?id_berita= <?php echo $berita['id_berita']; ?>">Hapus</a></td>
                </tr>
                <?php $i++;}
?>
        </tbody>
    </table>