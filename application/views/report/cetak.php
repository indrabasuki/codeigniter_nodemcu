<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
</head>

<body>

    <h2>
        <center>Data Laporan Aktifitas</center>
    </h2>
    <hr />
    <table border="1" width="100%" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>ID Card</th>
            <th>Kelas</th>
            <th>Waktu In Gate</th>
            <th>Waktu Out Gate</th>
            <th>Keterangan</th>

        </tr>
        <?php
        $no = 1;
        foreach ($report as $row) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->id_card; ?></td>
                <?php if ($row->is_staff == 1) : ?>
                    <td>Staff</td>

                <?php else : ?>
                    <td><?php echo $row->kelas_name; ?></td>
                <?php endif; ?>

                <?php if ($row->in == 1) : ?>
                    <td><?= date("Y-m-d H:i:s", substr($row->time, 0, 10));  ?></td>
                <?php else : ?>
                    <td>..</td>
                <?php endif; ?>
                <?php if ($row->out == 1) : ?>
                    <td><?= date("Y-m-d H:i:s", substr($row->time, 0, 10));  ?></td>
                <?php else : ?>
                    <td>..</td>
                <?php endif; ?> <td><?= $row->activity_description ?></td>

            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>