<h2>Edit Hewan</h2>

<form action="<?php echo URL; ?>/hewan/update" method="post">
    <input type="hidden" name="hewan_id" value="<?php echo $data['row']['hewan_id']; ?>">
    <table>
        <tr>
            <td>NAMA HEWAN</td>
            <td><input type="text" name="nama_hewan" value="<?php echo $data['row']['nama_hewan']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS HEWAN</td>
            <td><input type="text" name="jenis_hewan" value="<?php echo $data['row']['jenis_hewan']; ?>"></td>
        </tr>
        <tr>
            <td>WARNA HEWAN</td>
            <td><input type="text" name="warna_hewan" value="<?php echo $data['row']['warna_hewan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>