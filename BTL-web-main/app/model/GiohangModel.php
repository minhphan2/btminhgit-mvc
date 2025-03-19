<?php

class GiohangModel{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function layGiohang($MaKH){
        $sql_lay = "SELECT * from giohang where MaKH = $MaKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function themGiohang($MaKH, $MaSP, $SoLuong){
        $sql_them = "INSERT INTO giohang(MaKH, MaSP, SoLuong) VALUES ('$MaKH', '$MaSP', '$SoLuong')";
        $result = mysqli_query($this->conn, $sql_them);
        return $result;
    }

    public function suaGiohang($MaKH, $MaSP, $SoLuong){
        $sql_sua = "UPDATE giohang SET SoLuong = '$
        SoLuong' WHERE MaKH = $MaKH and MaSP = $MaSP";
}

    public function xoaGiohang($MaKH, $MaSP){
        $sql_xoa = "DELETE FROM giohang WHERE MaKH = $MaKH and MaSP = $MaSP";
        $result = mysqli_query($this->conn, $sql_xoa);
        return $result;
    }
}
?>