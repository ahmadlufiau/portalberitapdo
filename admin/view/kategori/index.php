<?php
$hasil = $koneksi->prepare("SELECT * FROM kategori ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
    <a class="btn pull-right" href="index.php?p=kategori&m=add">Tambah Baru</a>
    <h2>Kategori</h2>
    <div style="clear:both">&nbsp;</div>
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;foreach ($data as $key) {?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $key['nama_kategori']; ?>
                    </td>
                    <td><a href="index.php?p=kategori&m=edit&id= <?php echo $key['id']; ?>">Ubah</a></td>
                    <td><a onclick="return confirm('Hapus Data <?php echo $key['nama_kategori']; ?>')" href="proses/kategori/hapus.php?id= <?php echo $key['id']; ?>">Hapus</a></td>
                </tr>
                <?php $i++;}?>
        </tbody>
    </table>