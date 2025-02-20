<?php 
session_start();
require "koneksi.php";

require "BarangModel.php";
$barangModel = new BarangModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['id'];
    $sql = "DELETE FROM barang WHERE id=?";
    $row = $koneksi ->execute_query($sql, [$id]);
    $barangModel->delete($id);

    if ($row){
        header("location:barang.php");
    }
}
?>