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

        public function socialCreate($data)
        {
            $this->datetime = date('Y:m:d');
            $facebook    	= $this->fm->validation($data['facebook']);
            $twitter        = $this->fm->validation($data['twitter']);
            $instagram    	= $this->fm->validation($data['instagram']);
            $google         = $this->fm->validation($data['google']);
            $linked         = $this->fm->validation($data['linkend']);

            $facebook 		= mysqli_real_escape_string($this->db->link, $facebook);
            $twitter 	    = mysqli_real_escape_string($this->db->link, $twitter);
            $instagram 		= mysqli_real_escape_string($this->db->link, $instagram);
            $google	        = mysqli_real_escape_string($this->db->link, $google);
            $linked         = mysqli_real_escape_string($this->db->link, $linked);
            

            if ($facebook == "" || $twitter == "" || $instagram == "" || $google == "" || $linked =="") {
                $msg = "<span class='error'>Fields must not be empty!</span>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_social(facebook, twitter, instagram, linked,google, created_at) VALUES('$facebook', '$twitter', '$instagram', '$google', '$this->datetime')";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<span class='success'>Message sent successfully</span>";
                    return $msg;
                } else {
                    $msg = "<span class='error'>Error in sending message</span>";
                    return $msg;
                }
            }
        }

        public function getAllSocialLinks()
        {
            $query = "SELECT * FROM tbl_social ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function getSocialData($id)
        {
            $query = "SELECT * FROM tbl_social WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function socialUpdate($data, $cmrId)
        {
            $this->datetime = date('Y:m:d');
            $status    	= $this->fm->validation($data['status']);
            
            $status 	= mysqli_real_escape_string($this->db->link,  $status);

            if ($status == "") {
                $msg = "<span class='error'>Fields must not be empty!</span>";
                return $msg;
            } else {
                $query = "UPDATE tbl_contact
                SET
                status 	= '$status',
                updated_at = '$this->datetime' 
                WHERE id = '$cmrId'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<span class='success'>Message responded to successfully</span>";
                    return $msg;
                } else {
                    $msg = "<span class='error'>Error in sending response</span>";
                    return $msg;
                }
            }
        }

        public function delSocialById($id)
        {
            // $id = mysqli_real_escape_string($this->db->link, $id);
            $query = "DELETE FROM tbl_social WHERE id = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<span class='success'>Customer Deleted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Customer Not Deleted!</span>";
                return $msg;
            }
        }
    }
