<html>
    <head>
        <body>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                </tr>
<?php foreach($data as $item) : ?>                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nama']?></td>
                    <td><?= $item['qty']?></td>
                </tr>
<?php endforeach ?>
            </table>
        </body>
    </head>
</html>