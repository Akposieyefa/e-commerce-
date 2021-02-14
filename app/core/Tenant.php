<?php 

    namespace app\core;

    use app\lib\DB;
    use app\lib\Format;

    class Tenant
    {
        private $db;
        private $fm;
        private $datetime;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function pharmacyRegistration($data)
        {
            $this->datetime = date('Y:m:d');
            $name    	= $this->fm->validation($data['name']);
            $email      = $this->fm->validation($data['email']);
            $phone    	= $this->fm->validation($data['phone']);
            $state    	= $this->fm->validation($data['state']);
            @$lga   	= $this->fm->validation($data['lgas']);
            $address 	= $this->fm->validation($data['address']);
            $pname   	= $this->fm->validation($data['pname']);
            $desc  		= $this->fm->validation($data['desc']);
            $password   = $this->fm->validation($data['password']);
            $cpassword  = $this->fm->validation($data['cpassword']);
            
            $name 	    = mysqli_real_escape_string($this->db->link, $name);
            $email 	    = mysqli_real_escape_string($this->db->link, $email);
            $phone 	    = mysqli_real_escape_string($this->db->link, $phone);
            $state 	    = mysqli_real_escape_string($this->db->link, $state);
            $lga 	    = mysqli_real_escape_string($this->db->link, $lga);
            $address    = mysqli_real_escape_string($this->db->link, $address);
            $pname 	    = mysqli_real_escape_string($this->db->link, $pname);
            $desc       = mysqli_real_escape_string($this->db->link, $desc);
            $password   = mysqli_real_escape_string($this->db->link, md5($password));
            $cpassword  = mysqli_real_escape_string($this->db->link, md5($cpassword));

            //documents

            $permited  = array('pdf', 'txt','jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['docs']['name'];
            $file_size = $_FILES['docs']['size'];
            $file_temp = $_FILES['docs']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

            //logo
            $permitedimg  = array('jpg', 'jpeg', 'png', 'gif');
            $file_nameimg = $_FILES['logo']['name'];
            $file_sizeimg = $_FILES['logo']['size'];
            $file_tempimg = $_FILES['logo']['tmp_name'];

            $divimg = explode('.', $file_nameimg);
            $file_extimg = strtolower(end($divimg));
            $unique_imageimg = substr(md5(time()), 0, 10).'.'.$file_extimg;
            $uploaded_imageimg = "upload/".$unique_imageimg;

        
            if (empty($file_name) || empty($file_nameimg)) {
                $msg = "<div class='alert alert-danger'>Please Select any Image !</div>";
                return $msg;
            } elseif ($file_size >4048567 || $file_sizeimg > 4048567) {
                $msg = "<div class='alert alert-danger'>Image Size should be less then 4MB! </div>";
                return $msg;
            } elseif (in_array($file_ext, $permited) === false || in_array($file_extimg, $permitedimg) === false) {
                $msg = "<div class='alert alert-danger'>You can upload only:-".implode(', ', $permited)."</div>";
                return $msg;
            } elseif ($name == "" || $email == "" || $phone == "" || $state == "" || $lga == "" || $address == "" || $pname == "" || $desc == "" || $password == "" || $cpassword == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            }elseif ($password != $cpassword) {
            $msg = "<div class='alert alert-danger'>Passowrd do not match</div>";
                return $msg;
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "<div class='alert alert-danger'>Email not valid</div>";
                return $msg;
            }else {

                $mailquery = "SELECT * FROM tbl_pharmacy WHERE email = '$email' LIMIT 1";
                $mailchk = $this->db->select($mailquery);
                if ($mailchk != false) {
                    $msg = "<div class='alert alert-danger'>Email already Exist!</div>";
                    return $msg;
                } else {
                        move_uploaded_file($file_temp, $uploaded_image);
                        move_uploaded_file($file_tempimg, $uploaded_imageimg);
                        $query = "INSERT INTO tbl_pharmacy(name,email, phone,state_id,lga_id,address,pname,descr,password,docs,logo, created_at) VALUES('$name', '$email', '$phone', '$state', '$lga', '$address', '$pname', '$desc','$password','$uploaded_image', '$uploaded_imageimg','$this->datetime')";
                        $inserted_row = $this->db->insert($query);
                        if ($inserted_row) {
                            $msg = "<div class='alert alert-success'>Pharmacy created successfully</div>";
                            return $msg;
                        } else {
                            $msg = "<div class='alert alert-danger'>Error in creting pharmacy</div>";
                            return $msg;
                        }
                    }

                }
        }

        public function getAllPharmacy()
        {
            $query = "SELECT * FROM tbl_pharmacy ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function pharmacyLogin($phamUser, $phamPass)
        {

            $phamUser = $this->fm->validation($phamUser);
            $phamPass = $this->fm->validation($phamPass);
            $phamUser = mysqli_real_escape_string($this->db->link, $phamUser);
            $phamPass = mysqli_real_escape_string($this->db->link, $phamPass);

            if (empty($phamUser) || empty($phamPass)) {
                $loginmsg = "Email or Password must not be empty!";
                return $loginmsg;
            } else {
                $query = "SELECT * FROM tbl_pharmacy WHERE email = '$phamUser' AND password = '$phamPass'";
                $result = $this->db->select($query);
                if ($result != false) {
                    $value = $result->fetch_assoc();
                    $session::set("phamlogin", true);
                    $session::set("phamId",      $value['id']);
                    $session::set("phamUser",    $value['name']);
                    $session::set("phamEmail",   $value['email']);
                    $session::set("phamPhone",   $value['phone']);
                    $session::set("phamAddress", $value['address']);
                    $session::set("phamDesc",    $value['descr']);
                    $session::set("phamRegDate", $value['created_at']);
                    $session::set("phamStatus",  $value['status']);
                    $session::set("phamName",    $value['pname']);
                    header("Location:dashboard.php");
                } else {
                    $loginmsg = "Email or Password not match!";
                    return $loginmsg;
                }
            }
        }

        public function getPharmacyData($id)
        {
            $query = "SELECT * FROM tbl_pharmacy JOIN states ON tbl_pharmacy.state_id = states.id JOIN lgas ON tbl_pharmacy.lga_id = lgas.id  WHERE tbl_pharmacy.id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function pharmacyUpdate($data, $cmrId)
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
                $msg = "<span class='error'>Fields must not be empty!</span>";
                return $msg;
            } else {
                $query = "UPDATE tbl_pharmacy
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

        public function delPharmacyById($id)
        {
            $query = "DELETE FROM tbl_pharmacy WHERE id = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<div class='alert alert-danger'>Deleted successfully</div>";
                return $msg;
            } else {
                $msg = "<div class='alert alert-success'>Unable to delete()</div>";
                return $msg;
            }
        }
    }
