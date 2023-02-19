<?php
class Admin extends DB 
{
    public function authenticate($user, $pass)
    {
        $qr = "SELECT * FROM tbl_admin WHERE user='" .$user."' AND pass='" . $pass."' ";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $mang[] = $row;
        }
        if(count($mang)>0) return $mang[0]['role'];
        else return 0;
    }
    public function Get_all ()
    {
        $qr = "SELECT * FROM tbl_admin";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $mang[] = $row;
        }
        return $mang;
    }
    // Hàm insert
    public function InsertNewProduct($name,$price,$image,$product_category) {
        $qr = "INSERT INTO product VALUES(null , '$name' ,' $price' , '$image', '$product_category')";
        $result = false;
        if(mysqli_query($this->con, $qr) ) {
           $result = true;
        }
        return $result;
       }
    // Hàm update
    public function edit_product($product_id,$name,$price,$image,$product_category) 
    {
        $qr = "UPDATE product SET
        name='$name', price='$price', image='$image', product_category='$product_category'
        WHERE id='product_id' ";
        $result = mysqli_query($this->con, $qr);
        return $result;
    }
    // Hàm delete
    public function deleteProduct($id)
{
    $id = (int) $id;
    $result = mysqli_query($this->con, "DELETE FROM product WHERE id = $id");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

}
?>