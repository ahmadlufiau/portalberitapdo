<?php $hasil = $koneksi->prepare("SELECT * FROM login kategori WHERE `id` = '" . get('id') . "'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);?>
    <form method="POST" action="proses/user/update.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama </td>
                <td>
                    <input type="text" name="nama_login" value=" <?php echo $data['nama_login']; ?>">
                </td>
            </tr>
            <tr>
                <td>Username </td>
                <td>
                    <input type="text" name="username" value=" <?php echo $data['username']; ?>">
                </td>
            </tr>
            <tr>
                <td>Password </td>
                <td>
                    <input type="text" name="password" value=" <?php echo $data['password']; ?>">
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