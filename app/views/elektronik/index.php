<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektronik Table</title>
    <style>
        /* Add some basic styling for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Add default background color for table rows */
        tr {
            transition: background-color 0.3s;
        }

        /* Add a highlight class for the animation effect on hover */
        tr:hover {
            background-color: #ffcc00;
        }
    </style>
</head>
<body>

<h2>Elektronik</h2>

<a href="<?php echo URL; ?>/elektronik/input" class="btn">Input elektronik</a>

<table id="elektronikTable">
    <tr>
        <th>NO</th>
        <th>NAMA ELEKTRONIK</th>
        <th>JENIS ELEKTRONIK</th>
        <th>WARNA ELEKTRONIK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_elektronik']; ?></td>
            <td><?php echo $row['jenis_elektronik']; ?></td>
            <td><?php echo $row['warna_elektronik']; ?></td>
            <td><a href="<?php echo URL; ?>/elektronik/edit/<?php echo $row['elektronik_id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/elektronik/delete/<?php echo $row['elektronik_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
    <?php
    $no++;
    } ?>
</table>

</body>
</html>
