<h2>Edit Elektronik</h2>

<form action="<?php echo URL; ?>/elektronik/update" method="post">
    <input type="hidden" name="elektronik_id" value="<?php echo $data['row']['elektronik_id']; ?>">
    <table>
        <tr>
            <td>NAMA ELEKTRONIK</td>
            <td><input type="text" name="nama_elektronik" value="<?php echo $data['row']['nama_elektronik']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS ELEKTRONIK</td>
            <td><input type="text" name="jenis_elektronik" value="<?php echo $data['row']['jenis_elektronik']; ?>"></td>
        </tr>
        <tr>
            <td>WARNA ELEKTRONIK</td>
            <td><input type="text" name="warna_elektronik" value="<?php echo $data['row']['warna_elektronik']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>