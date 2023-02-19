<?php
class categories extends DB {
    public function Get_all ()
    {
        $qr = "SELECT * FROM product";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $mang[] = $row;
        }
        return $mang;
    }
    // Hàm lấy từng mục
    public function Get_one ($id)
    {
        $qr = "SELECT * FROM product ";
        $result = mysqli_query($this->con, $qr);
        return mysqli_fetch_assoc($result);
    }
    public function Get_type ()
    {
        $qr = "SELECT * FROM types";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $mang[] = $row;
        }
        return $mang;
    }
    public function Get_detail($id)
    {
        $qr = "SELECT * FROM Single WHERE id = $id ";
        $result = mysqli_query($this->con, $qr);
        return mysqli_fetch_assoc($result);
    }
}
?>