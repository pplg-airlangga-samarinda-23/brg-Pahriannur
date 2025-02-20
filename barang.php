
<?php
require "koneksi.php";
require "BarangModel.php";
$barangModel = new BarangModel($koneksi);
$rows = $barangModel->getALL();
// session_start();

// if (!isset($_SESION['username'])){
//     header("location:login.php");
// }
$sql = "SELECT * FROM barang";
// $rows = $koneksi -> execute_query($sql, []) ->fetch_all(MYSQLI_ASSOC);
$rows =mysqli_query($koneksi, $sql);
require "views/barang.view.php";
// var_dump($rows);
// foreach ($rows as $row)
// {
//     echo"{$row['id']}; {$row['nama_barang']}n";
// }

// $barang = [
//     [
//         "nama" => "Laptop",
//         "stok" => "6",
//         "status" => "Baik"
//     ],
//     [
//         "nama" => "PC",
//         "stok" => "38",
//         "status" => "Baik"
//     ],
//     [
//         "nama" => "Printer",
//         "stok" => "1",
//         "status" => "Rusak"
        

//     ],
// ];
// foreach ($barang as $item) {
//     echo $item['nama'] . " ";
//     echo $item['stok'] . " ";
//     echo $item['status'] . "";
    
//     }

?>

