<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Buku Perpustakaan Online</title>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }
        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Laporan Data Buku Perpustakaan Online</h3>
    <br/>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($buku as $b) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $b['judul_buku']; ?></td>
                    <td><?= $b['pengarang']; ?></td>
                    <td><?= $b['penerbit']; ?></td>
                    <td><?= $b['tahun_terbit']; ?></td>
                    <td><?= $b['ISBN']; ?></td>
                    <td><?= $b['stok']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>