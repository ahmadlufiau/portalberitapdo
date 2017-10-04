<?php
$hasil = $koneksi->prepare("SELECT * FROM kontak ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
    <h2>Kontak</h2>
    <div style="clear:both">&nbsp;</div>
    <table class="data">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Hp</th>
                <th>Pesan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key) {?>
                <tr>
                    <td>
                        <?php echo $key['nama']; ?>
                    </td>
                    <td>
                        <?php echo $key['email']; ?>
                    </td>
                    <td>
                        <?php echo $key['hp']; ?>
                    </td>
                     <td>
                        <?php echo $key['pesan']; ?>
                    </td>
                    <td><a onclick="return confirm('Yakin ingin Hapus Data ini?')" href="proses/kontak/hapus.php?id= <?php echo $key['id']; ?>">Hapus</a></td>
                </tr>
                <?php }?>
        </tbody>
    </table>