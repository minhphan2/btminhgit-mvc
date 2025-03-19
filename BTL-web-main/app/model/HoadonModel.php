<?php
class HoadonModel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    private $MaHD;
    private $MaKH;
    private $NgayLap;
    private $TongTien;
    private $TrangThai;
    private $DiaChi;
    private $SDT;
    private $TenKH;
    public function layHoadon(){
        $sql_lay = "SELECT * from hoadon";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }
    public function layHoadonTheoID($MaHD){
        $sql_lay = "SELECT * from hoadon where MaHD = $MaHD";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }
    public function themHoadon($MaHD, $MaKH, $NgayLap, $TongTien, $TrangThai, $DiaChi, $SDT, $TenKH){
        $sql_them = "INSERT INTO hoadon(MaHD, MaKH, NgayLap, TongTien, TrangThai, DiaChi, SDT, TenKH) VALUES ('$MaHD', '$MaKH', '$NgayLap', '$TongTien', '$TrangThai', '$DiaChi', '$SDT', '$TenKH')";
        $result = mysqli_query($this->conn, $sql_them);
        return $result;
    }
    public function suaHoadon($MaHD, $MaKH, $NgayLap, $TongTien, $TrangThai, $DiaChi, $SDT, $TenKH){
        $sql_sua = "UPDATE hoadon SET MaKH = '$MaKH', NgayLap = '$NgayLap', TongTien = '$TongTien', TrangThai = '$TrangThai', DiaChi = '$DiaChi', SDT = '$SDT', TenKH = '$TenKH' WHERE MaHD = $MaHD";
        $result = mysqli_query($this->conn, $sql_sua);
        return $result;
    }
    public function xoaHoadon($MaHD){
        $sql_xoa = "DELETE FROM hoadon WHERE MaHD = $MaHD";
        $result = mysqli_query($this->conn, $sql_xoa);
        return $result;
    }

    public function layHoadonTheoMaKH($MaKH){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }
    public function layHoadonTheoTrangThai($TrangThai){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function suaTrangThai($MaHD, $TrangThai){
        $sql_sua = "UPDATE hoadon SET TrangThai = '$TrangThai' WHERE MaHD = $MaHD";
        $result = mysqli_query($this->conn, $sql_sua);
        return $result;
    }

    public function layHoadonTheoNgay($NgayLap){
        $sql_lay = "SELECT * from hoadon where NgayLap = $NgayLap";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTenKH($TenKH){
        $sql_lay = "SELECT * from hoadon where TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoSDT($SDT){
        $sql_lay = "SELECT * from hoadon where SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoDiaChi($DiaChi){
        $sql_lay = "SELECT * from hoadon where DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTongTien($TongTien){
        $sql_lay = "SELECT * from hoadon where TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThai($MaKH, $TrangThai){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaNgay($MaKH, $NgayLap){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and NgayLap = $NgayLap";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTenKH($MaKH, $TenKH){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaSDT($MaKH, $SDT){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaDiaChi($MaKH, $DiaChi){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTongTien($MaKH, $TongTien){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTrangThaiVaNgay($TrangThai, $NgayLap){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai and NgayLap = $NgayLap";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTrangThaiVaTenKH($TrangThai, $TenKH){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai and TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTrangThaiVaSDT($TrangThai, $SDT){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTrangThaiVaDiaChi($TrangThai, $DiaChi){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTrangThaiVaTongTien($TrangThai, $TongTien){
        $sql_lay = "SELECT * from hoadon where TrangThai = $TrangThai and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoNgayVaTenKH($NgayLap, $TenKH){
        $sql_lay = "SELECT * from hoadon where NgayLap = $NgayLap and TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoNgayVaSDT($NgayLap, $SDT){
        $sql_lay = "SELECT * from hoadon where NgayLap = $NgayLap and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoNgayVaDiaChi($NgayLap, $DiaChi){
        $sql_lay = "SELECT * from hoadon where NgayLap = $NgayLap and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoNgayVaTongTien($NgayLap, $TongTien){
        $sql_lay = "SELECT * from hoadon where NgayLap = $NgayLap and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTenKHVaSDT($TenKH, $SDT){
        $sql_lay = "SELECT * from hoadon where TenKH = $TenKH and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTenKHVaDiaChi($TenKH, $DiaChi){
        $sql_lay = "SELECT * from hoadon where TenKH = $TenKH and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoTenKHVaTongTien($TenKH, $TongTien){
        $sql_lay = "SELECT * from hoadon where TenKH = $TenKH and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoSDTvaDiaChi($SDT, $DiaChi){
        $sql_lay = "SELECT * from hoadon where SDT = $SDT and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoSDTvaTongTien($SDT, $TongTien){
        $sql_lay = "SELECT * from hoadon where SDT = $SDT and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoDiaChivaTongTien($DiaChi, $TongTien){
        $sql_lay = "SELECT * from hoadon where DiaChi = $DiaChi and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThaiVaNgay($MaKH, $TrangThai, $NgayLap){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai and NgayLap = $NgayLap";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThaiVaTenKH($MaKH, $TrangThai, $TenKH){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai and TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThaiVaSDT($MaKH, $TrangThai, $SDT){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThaiVaDiaChi($MaKH, $TrangThai, $DiaChi){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaTrangThaiVaTongTien($MaKH, $TrangThai, $TongTien){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and TrangThai = $TrangThai and TongTien = $TongTien";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaNgayVaTenKH($MaKH, $NgayLap, $TenKH){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and NgayLap = $NgayLap and TenKH = $TenKH";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaNgayVaSDT($MaKH, $NgayLap, $SDT){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and NgayLap = $NgayLap and SDT = $SDT";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaNgayVaDiaChi($MaKH, $NgayLap, $DiaChi){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and NgayLap = $NgayLap and DiaChi = $DiaChi";
        $result = mysqli_query($this->conn, $sql_lay);
        return $result;
    }

    public function layHoadonTheoMaKHVaNgayVaTongTien($MaKH, $NgayLap, $TongTien){
        $sql_lay = "SELECT * from hoadon where MaKH = $MaKH and NgayLap =
            $NgayLap and TongTien = $TongTien";
            $result = mysqli_query($this->conn, $sql_lay);
         return $result;
  }   
}
?>