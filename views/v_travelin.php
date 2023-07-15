<!DOCTYPE html>
<html>
    <head>
        <title>TRAVELIN</title>
    </head>
    <body>
        <table border="1px solid black">
            <tr>
                <th>ID User</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Pass</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Umur</th>
            </tr>
            <?php foreach($travelin as $trv) : ?>
            <tr>
                <td><?php echo $trv['id_user']; ?></td>
                <td><?php echo $trv['email']; ?></td>
                <td><?php echo $trv['nama']; ?></td>
                <td><?php echo $trv['pass']; ?></td>
                <td><?php echo $trv['jenis_kelamin']; ?></td>
                <td><?php echo $trv['noHP']; ?></td>
                <td><?php echo $trv['umur']; ?></td>
            </tr>
            <?php endforeach;  ?>
        </table>
    </body>
</html>