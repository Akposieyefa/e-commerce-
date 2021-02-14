<?php 
    namespace app\core;
    use app\lib\DB;
    use app\lib\Format;
    
    class Complain
    {
        private $db;
        private $fm;
        private $datetime;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function complainCreate($data)
        {
            $this->datetime = date('Y:m:d');
            $userID    	= $this->fm->validation($data['userID']);
            $subject   	= $this->fm->validation($data['subject']);
            $message    = $this->fm->validation($data['message']);
        
            $userID  	= mysqli_real_escape_string($this->db->link, $userID );
            $subject	= mysqli_real_escape_string($this->db->link, $subject);
            $message	= mysqli_real_escape_string($this->db->link, $message);
            
            if ($userID == ""  || $subject == "" || $message == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_complain(user_id, subject, message, created_at) VALUES('$userID', '$subject', '$message', '$this->datetime')";
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

        public function getAllComplain()
        {
            $query = "SELECT * FROM tbl_complain  ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getUserComplain($id)
        {
            $query = "SELECT * FROM tbl_complain WHERE user_id = '$id' ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getComplainData($id)
        {
            $query = "SELECT * FROM tbl_complain WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function adminGetComplainData($id)
        {
            $query = "SELECT * FROM tbl_complain JOIN tbl_pharmacy WHERE tbl_complain.id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function complainUpdate($status, $cmrId)
        {
            $this->datetime = date('Y:m:d');
            $status    	= $this->fm->validation($status);
            
            $status 	= mysqli_real_escape_string($this->db->link,  $status);

            if ($status == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            } else {
                $query = "UPDATE tbl_complain
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

        public function complainUpdateByUser($data)
        {
            $this->datetime = date('Y:m:d');
            $id         = $this->fm->validation($data['c_id']);
            $subject    = $this->fm->validation($data['subject']);
            $message    = $this->fm->validation($data['message']);
        
            $id         = mysqli_real_escape_string($this->db->link, $id );
            $subject    = mysqli_real_escape_string($this->db->link, $subject);
            $message    = mysqli_real_escape_string($this->db->link, $message);

            if ($id == ""  || $subject == "" || $message == "") {
                $msg = "<div class='alert alert-danger'>Fields must not be empty!</div>";
                return $msg;
            } else {
                $query = "UPDATE tbl_complain
                    SET
                    subject = '$subject',
                    message = '$message',
                    created_at = '$this->datetime' 
                    WHERE id = '$id'";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<div class='alert alert-success'>Message updated successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Error in updating message</div>";
                    return $msg;
                }
            }
        }

        public function delComplainById($id)
        {
            $query = "DELETE FROM tbl_complain WHERE id = '$id'";
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
