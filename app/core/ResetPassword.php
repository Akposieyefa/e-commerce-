<?php

    namespace app\core;
    use app\lib\DB;
use app\lib\Format;
    class Resetpassword
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function resetPassword($data, $id)
        {
            $oldpassword    = $this->fm->validation($data['oldpassword']);
            $newpassword    = $this->fm->validation($data['newpassword']);
            $cnewpassword   = $this->fm->validation($data['cnewpassword']);

            $oldpassword    = mysqli_real_escape_string($this->db->link, $oldpassword);
            $newpassword    = mysqli_real_escape_string($this->db->link, $newpassword);
            $cnewpassword   = mysqli_real_escape_string($this->db->link, $cnewpassword);

            if ($oldpassword == "" || $newpassword == "" || $cnewpassword == "") {
                $msg = "<div class='alert alert-danger'>Please no field should be empty...!</div>";
                return $msg;
            } else {

            $oldpassword    =  md5($oldpassword);
            $newpassword    =  md5($newpassword);
            $cnewpassword   =  md5($cnewpassword);
                $query = "SELECT * FROM tbl_admin WHERE adminId = '$id' AND adminPass = '$oldpassword'";
                $result = $this->db->select($query);
                if ($result != false) {
                
                    $updateQuery = "UPDATE tbl_admin
                    SET
                    adminPass = '$newpassword'
                    WHERE adminId = '$id'";
                    $updated_row = $this->db->update($updateQuery);
                    if ($updated_row) {
                        $msg = "<div class='alert alert-success'>Password updated successfully</div>";
                        return $msg;
                    } else {
                        $msg = "<div class='alert alert-danger'>Error in updating password</div>";
                        return $msg;
                    }
                } else {
                    $msg = "<div class='alert alert-danger'>Wrong password provided</div>";
                    return $msg;
                }
            }
        }

    }
