<?php
class BarangModel
{
    private $koneksi;

    public function __construct(mysqli $koneksi)
    {
        $this->koneksi = $koneksi;
    }
    
    public function getALL()
    {
        $sql = "SELECT *FROM barang";
        $rows = $this->koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
}
