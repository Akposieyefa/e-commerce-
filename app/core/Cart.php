<?php 

    namespace app\core;
    use app\lib\DB;
    use app\lib\Format;
    class Cart
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function addToCart($quantity, $proId)
        {
            $quantity = $this->fm->validation($quantity);
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $proId = mysqli_real_escape_string($this->db->link, $proId);
            $sId = session_id();

            $squery = "SELECT * FROM tbl_product WHERE productId = '$proId'";
            $result = $this->db->select($squery)->fetch_assoc();
            $productName = $result['productName'];
            $phamID = $result['phamID'];
            $price = $result['price'];
            $image = $result['image'];

            $chquery = "SELECT * FROM tbl_cart WHERE productId = '$proId' AND sId = '$sId'";
            $getPro = $this->db->select($chquery);

            if ($getPro) {
                $msg = "Product Already Addred";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_cart(sId, productId, productName, price, quantity, image, phaID) VALUES('$sId', '$proId', '$productName', '$price', '$quantity', '$image', '$phamID')";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    header("Location:Cart.php");
                } else {
                    header("Location:404.php");
                }
            }
        }

        public function getCartProduct()
        {
            $sId = session_id();
            $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
            $result = $this->db->select($query);
            return $result;
        }

        public function updateCartQuantity($cartId, $quantity)
        {
            $cartId     = mysqli_real_escape_string($this->db->link, $cartId);
            $quantity   = mysqli_real_escape_string($this->db->link, $quantity);
            $query = "UPDATE tbl_cart
                SET
                quantity = '$quantity'
                WHERE cartId = '$cartId'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                header("Location:cart.php");
            } else {
                $msg = "<span class='error'>Quantity Not Updated.</span>";
                return $msg;
            }
        }
        public function delProductByCart($delProId)
        {
            $delProId   = mysqli_real_escape_string($this->db->link, $delProId);
            $query = "DELETE FROM tbl_cart WHERE cartId = '$delProId'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                echo "<script>window.location = 'cart.php'; </script>";
            } else {
                $msg = "<span class='error'>Product Not Deleted!</span>";
                return $msg;
            }
        }

        public function checkCartItem()
        {
            $sId = session_id();
            $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
            $result = $this->db->select($query);
            return $result;
        }

        public function delCustomerCart()
        {
            $sId = session_id();
            $query = "DELETE FROM tbl_cart WHERE sId = '$sId'";
            $this->db->delete($query);
        }

        public function orderProduct($cmrId)
        {
            $sId = session_id();
            $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
            $getPro = $this->db->select($query);
            if ($getPro) {
                while ($result = $getPro->fetch_assoc()) {
                    $productId      = $result['productId'];
                    $productName    = $result['productName'];
                    $quantity       = $result['quantity'];
                    $phamID         = $result['phaID'];
                    $price          = $result['price'] * $quantity;
                    $image          = $result['image'];

                    $query = "INSERT INTO tbl_order(cmrId, productId, productName, quantity, price, image,phID) VALUES('$cmrId', '$productId', '$productName', '$quantity', '$price', '$image','$phamID')";
                    $inserted_row = $this->db->insert($query);
                }
            }
        }

        public function payableAmount($cmrId)
        {
            $query = "SELECT price FROM tbl_order WHERE cmrId = '$cmrId' AND date = now()";
            $result = $this->db->select($query);
            return $result;
        }

        public function getOrderProduct($cmrId)
        {
            $query = "SELECT * FROM tbl_order WHERE cmrId = '$cmrId' ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function checkOrder($cmrId)
        {
            $query = "SELECT * FROM tbl_order WHERE cmrId = '$cmrId'";
            $result = $this->db->select($query);
            return $result;
        }

        public function getAllOrderProduct()
        {
            $query = "SELECT * FROM tbl_order ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getAllPharmacyOrderProduct($id)
        {
            $query = "SELECT * FROM tbl_order JOIN tbl_customers ON tbl_order.cmrid = tbl_customers.id WHERE	phID='$id' ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function productShifted($id, $time, $price)
        {
            $id     = mysqli_real_escape_string($this->db->link, $id);
            $time   = mysqli_real_escape_string($this->db->link, $time);
            $price  = mysqli_real_escape_string($this->db->link, $price);

            $query = "UPDATE tbl_order
                SET
                status = '1'
                WHERE cmrId = '$id' AND date = '$time' AND price = '$price'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<span class='success'>Updated Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Not Updated.</span>";
                return $msg;
            }
        }

        public function delProductShifted($id, $time, $price)
        {
            $id     = mysqli_real_escape_string($this->db->link, $id);
            $time   = mysqli_real_escape_string($this->db->link, $time);
            $price  = mysqli_real_escape_string($this->db->link, $price);

            $query = "DELETE FROM tbl_order WHERE cmrId = '$id' AND date = '$time' AND price = '$price'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<span class='success'>Data Deleted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Data Not Deleted!</span>";
                return $msg;
            }
        }

        public function todayOrders($from,$to,$id) 
        {
            $query = "SELECT * FROM tbl_order WHERE date Between '$from' AND '$to' AND phID = '$id' ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }//view

        public function pendingOrders($id) 
        {
            $query = "SELECT * FROM tbl_order WHERE phID = '$id' AND status=1 OR status=0  ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }//view

        public function deliverdOrders($id) 
        {
            $query = "SELECT * FROM tbl_order WHERE   phID = '$id' AND status=2 ORDER BY date DESC";
            $result = $this->db->select($query);
            return $result;
        }//view

        
        public function productShiftConfirm($id, $time, $price)
        {
            $id     = mysqli_real_escape_string($this->db->link, $id);
            $time   = mysqli_real_escape_string($this->db->link, $time);
            $price  = mysqli_real_escape_string($this->db->link, $price);

            $query = "UPDATE tbl_order
                SET
                status = '2'
                WHERE cmrId = '$id' AND date = '$time' AND price = '$price'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<div class='alert alert-success'>Updated Successfully</div>";
                return $msg;
            } else {
                $msg = "<div class='alert alert-danger'>Not Updated.</div>";
                return $msg;
            }
        }
    }
