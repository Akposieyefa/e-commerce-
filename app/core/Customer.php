<?php 

    namespace app\core;
    use app\lib\DB;
    use app\lib\Format;
    class Customer
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function customerRegistration($data)
        {
            $fname    	= $this->fm->validation($data['fname']);
            $lname    = $this->fm->validation($data['lname']);
            $email    	= $this->fm->validation($data['email']);
            $phone     	= $this->fm->validation($data['phone']);
            $password   	= $this->fm->validation($data['password']);
            $cpassword 	= $this->fm->validation($data['cpassword']);
            
            $name 		= mysqli_real_escape_string($this->db->link, $name);
            $address 	= mysqli_real_escape_string($this->db->link, $address);
            $city 		= mysqli_real_escape_string($this->db->link, $city);
            $zip 		= mysqli_real_escape_string($this->db->link, $zip);
            $email 		= mysqli_real_escape_string($this->db->link, $email);
            $country 	= mysqli_real_escape_string($this->db->link, $country);
            $phone 		= mysqli_real_escape_string($this->db->link, $phone);
            $pass 		= mysqli_real_escape_string($this->db->link, md5($pass));

            if ($name == "" || $address == "" || $city == "" || $zip == "" || $email == "" || $country == "" || $phone == "" || $pass == "") {
                $msg = "<span class='error'>Fields must not be empty!</span>";
                return $msg;
            }
            $mailquery = "SELECT * FROM tbl_customers WHERE email = '$email' LIMIT 1";
            $mailchk = $this->db->select($mailquery);
            if ($mailchk != false) {
                $msg = "<span class='error'>Email already Exist!</span>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_customers(name, address, city, country, zip, phone, email, pass) VALUES('$name', '$address', '$city', '$country', '$zip', '$phone', '$email', '$pass')";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<span class='success'>Customer Data Inserted Successfully</span>";
                    return $msg;
                } else {
                    $msg = "<span class='error'>Customer Data Not Inserted.</span>";
                    return $msg;
                }
            }
        }

        public function getAllCustomers()
        {
            $query = "SELECT * FROM tbl_customers ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function customerLogin($data)
        {
            $email 	= $this->fm->validation($data['email']);
            $pass  	= $this->fm->validation($data['password']);

            $email 	= mysqli_real_escape_string($this->db->link, $email);
            $pass 	= mysqli_real_escape_string($this->db->link, md5($pass));

            if (empty($email) || empty($pass)) {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            }
            $query = "SELECT * FROM tbl_customers WHERE email = '$email' AND pass = '$pass'";
            $result = $this->db->select($query);
            if ($result != false) {
                $value = $result->fetch_assoc();
                Session::set("cuslogin", true);
                Session::set("cmrId", $value['id']);
                Session::set("cmrName", $value['name']);
                header("Location:cart.php");
            } else {
                $msg = "<div class='alert alert-danger'>Email or Passowrd not matched!</div>";
                return $msg;
            }
        }

        public function getCustomerData($id)
        {
            $query = "SELECT * FROM tbl_customers WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function customerUpdate($data, $cmrId)
        {
            $name    	= $this->fm->validation($data['name']);
            $address    = $this->fm->validation($data['address']);
            $city    	= $this->fm->validation($data['city']);
            $zip     	= $this->fm->validation($data['zip']);
            $email   	= $this->fm->validation($data['email']);
            $country 	= $this->fm->validation($data['country']);
            $phone   	= $this->fm->validation($data['phone']);
            
            $name 		= mysqli_real_escape_string($this->db->link, $name);
            $address 	= mysqli_real_escape_string($this->db->link, $address);
            $city 		= mysqli_real_escape_string($this->db->link, $city);
            $zip 		= mysqli_real_escape_string($this->db->link, $zip);
            $email 		= mysqli_real_escape_string($this->db->link, $email);
            $country 	= mysqli_real_escape_string($this->db->link, $country);
            $phone 		= mysqli_real_escape_string($this->db->link, $phone);
            

            if ($name == "" || $address == "" || $city == "" || $zip == "" || $email == "" || $country == "" || $phone == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            } else {
                $query = "UPDATE tbl_customers
                SET
                name 	= '$name',
                address = '$address',
                city 	= '$city',
                country = '$country',
                zip 	= '$zip',
                phone 	= '$phone',
                email 	= '$email'
                WHERE id = '$cmrId'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<div class='alert alert-success'>Customer Data Update Successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Customer Data Not Updated.</div>";
                    return $msg;
                }
            }
        }

        public function delCustomersById($id)
        {
            $query = "DELETE FROM tbl_customers WHERE id = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<div class='alert alert-success'>Customer Deleted Successfully</div>";
                return $msg;
            } else {
                $msg = "<div class='alert alert-danger'>Customer Not Deleted!</div>";
                return $msg;
            }
        }
    }
