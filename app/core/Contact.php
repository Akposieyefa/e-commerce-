<?php 

    namespace app\core;
    use app\lib\DB;
    use app\lib\Format;

    class Contact
    {
        private $db;
        private $fm;
        private $datetime;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function contactCreate($data)
        {
            $this->datetime = date('Y:m:d');
            $name    	= $this->fm->validation($data['name']);
            $email      = $this->fm->validation($data['email']);
            $subject   	= $this->fm->validation($data['subject']);
            $message    = $this->fm->validation($data['message']);
        
            $name 		= mysqli_real_escape_string($this->db->link, $name);
            $email 	    = mysqli_real_escape_string($this->db->link, $email);
            $subject	= mysqli_real_escape_string($this->db->link, $subject);
            $message	= mysqli_real_escape_string($this->db->link, $message);
            

            if ($name == "" || $email == "" || $subject == "" || $message == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "<div class='alert alert-danger'>Email must be valid</div>";
                return $msg;
            }else {
                $query = "INSERT INTO tbl_contact(name, email, subject, message, created_at) VALUES('$name', '$email', '$subject', '$message', '$this->datetime')";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<div class='alert alert-success'>Message sent successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Error in sending message</div>";
                    return $msg;
                }
            }
        }

        public function getAllContact()
        {
            $query = "SELECT * FROM tbl_contact ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function getContactData($id)
        {
            $query = "SELECT * FROM tbl_contact WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function contactUpdate($data, $cmrId)
        {
            $this->datetime = date('Y:m:d');
            $status    	= $this->fm->validation($data['status']);
            
            $status 	= mysqli_real_escape_string($this->db->link,  $status);

            if ($status == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            } else {
                $query = "UPDATE tbl_contact
                SET
                status 	= '$status',
                updated_at = '$this->datetime' 
                WHERE id = '$cmrId'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<div class='alert alert-success'>Message responded to successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Error in sending response</div>";
                    return $msg;
                }
            }
        }

        public function delContactById($id)
        {
            $query = "DELETE FROM tbl_contact WHERE id = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<div class='alert alert-success'>Customer Deleted Successfully</div>";
                return $msg;
            } else {
                $msg = "<div class='error'>Customer Not Deleted!</div>";
                return $msg;
            }
        }
    }
