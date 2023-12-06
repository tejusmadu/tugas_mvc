<h2>Input Hewan</h2>

<form action="<?php echo URL; ?>/elektronik/save" method="post">
    <table>
        <tr>
            <td>NAMA ELEKTRONIK</td>
            <td><input type="text" name="nama_elektronik" required></td>
        </tr>
        <tr>
            <td>JENIS ELEKTRONIK</td>
            <td><input type="text" name="jenis_elektronik"></td>
        </tr>
        <tr>
            <td>WARNA ELEKTRONIK</td>
            <td><input type="text" name="warna_elektronik"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>