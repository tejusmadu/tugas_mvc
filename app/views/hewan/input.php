<h2>Input Hewan</h2>

<form action="<?php echo URL; ?>/hewan/save" method="post">
    <table>
        <tr>
            <td>NAMA HEWAN</td>
            <td><input type="text" name="nama_hewan" required></td>
        </tr>
        <tr>
            <td>JENIS HEWAN</td>
            <td><input type="text" name="jenis_hewan"></td>
        </tr>
        <tr>
            <td>WARNA HEWAN</td>
            <td><input type="text" name="warna_hewan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>