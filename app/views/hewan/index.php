<h2>Hewan</h2>

<a href="<?php echo URL; ?>/hewan/input" class="btn">Input Hewan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA HEWAN</th>
        <th>JENIS HEWAN</th>
        <th>WARNA HEWAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1;
    foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_hewan']; ?></td>
            <td><?php echo $row['jenis_hewan']; ?></td>
            <td><?php echo $row['warna_hewan']; ?></td>
            <td><a href="<?php echo URL; ?>/hewan/edit/<?php echo $row['hewan_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/hewan/delete/<?php echo $row['hewan_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>

</table>
