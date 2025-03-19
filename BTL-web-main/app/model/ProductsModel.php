<?php
class ProductsModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Lấy tất cả sản phẩm
    public function laySanpham() {
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Lấy sản phẩm theo ID
    public function laySanphamTheoID($MaSP) {
        $sql = "SELECT * FROM sanpham WHERE MaSP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $MaSP);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Thêm sản phẩm
    public function themSanpham($MaSP, $TenSP, $Gia, $HinhAnh, $MoTa) {
        $sql = "INSERT INTO sanpham (MaSP, TenSP, Gia, HinhAnh, MoTa) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("isdss", $MaSP, $TenSP, $Gia, $HinhAnh, $MoTa);
        return $stmt->execute();
    }

    // Sửa sản phẩm
    public function suaSanpham($MaSP, $TenSP, $Gia, $HinhAnh, $MoTa) {
        $sql = "UPDATE sanpham SET TenSP = ?, Gia = ?, HinhAnh = ?, MoTa = ? WHERE MaSP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdssi", $TenSP, $Gia, $HinhAnh, $MoTa, $MaSP);
        return $stmt->execute();
    }

    // Xóa sản phẩm
    public function xoaSanpham($MaSP) {
        $sql = "DELETE FROM sanpham WHERE MaSP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $MaSP);
        return $stmt->execute();
    }
}
?>