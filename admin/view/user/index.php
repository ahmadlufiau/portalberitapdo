<?php
$hasil = $koneksi->prepare("SELECT * FROM login ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();?>
    <a class="btn pull-right" href="index.php?p=user&m=add">Tambah Baru</a>
    <h2>User</h2>
    <div style="clear:both">&nbsp;</div>
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;foreach ($data as $login) {?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $login['nama_login']; ?>
                    </td>
                    <td>
                        <?php echo $login['username']; ?>
                    </td>
                    <td>
                        <?php echo $login['password']; ?>
                    </td>
                    <td><a href="index.php?p=user&m=edit&id= <?php echo $login['id']; ?>">Ubah</a></td>
                    <td><a onclick="return confirm('Hapus Data <?php echo $login['nama_login']; ?>')" href="proses/user/hapus.php?id= <?php echo $login['id']; ?>">Hapus</a></td>
                </tr>
                <?php $i++;}?>
        </tbody>
    </table>