<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cup.css">
    <title>Login Layout</title>
</head>

<body >
    <h1>Halaman Barang</h1>
    <h2>Selamat datang, <?=$_SESSION['username']?></h2> <br>
    <a href="logout.php">logout</a>
    <script src="script.js"></script>
    <a href="barang-tambah.php">tamhan barang</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Stok </th>
                <th>Status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; 
            // foreach ($barang as $item) {
            while ($item = mysqli_fetch_assoc($rows)) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $item["nama_barang"]; ?></td>
                    <td><?= $item["stok"]; ?></td>
                    <td><?= $item["status"]; ?></td>
                    <td>
                        <a href="barang-edit.php?id=<?$item['id']?>">Edit</a>
                        <a href="barang-hapus.php?id=<?$item['id']?>">Hapus</a>
                    </td>
                </tr>
            <?php
                $no += 1;
            }
            ?>
        </tbody>
    </table>


</body>

</html>


 
