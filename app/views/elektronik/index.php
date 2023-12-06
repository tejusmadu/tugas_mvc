<h2>Elektronik</h2>

<a href="<?php echo URL; ?>/elektronik/input" class="btn">Input elektronik</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA ELEKTRONIK</th>
        <th>JENIS ELEKTRONIK</th>
        <th>WARNA ELEKTRONIK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1;
    foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_elektronik']; ?></td>
            <td><?php echo $row['jenis_elektronik']; ?></td>
            <td><?php echo $row['warna_elektronik']; ?></td>
            <td><a href="<?php echo URL; ?>/elektronik/edit/<?php echo $row['elektronik_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/elektronik/delete/<?php echo $row['elektronik_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>

</table>
