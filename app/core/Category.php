<?php 

    namespace app\core;

    use app\lib\DB;
    use app\lib\Format;
    class Category
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function catInsert($catName,$phaID)
        {
            $phaID = $this->fm->validation($phaID);
            $catName = $this->fm->validation($catName);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            $phaID = mysqli_real_escape_string($this->db->link, $phaID);
            if (empty($catName) || empty($phaID)) {
                $msg = "<div class='alert alert-danger'>No. field must not be empty!</div>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_category(catName,phaID) VALUES('$catName','$phaID')";
                $catinsert = $this->db->insert($query);
                if ($catinsert) {
                    $msg = "<div class='alert alert-success'>Category Inserted Successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Category Not Inserted.</div>";
                    return $msg;
                }
            }
        }

        public function getAllCat($userID)
        {
            $query = "SELECT * FROM tbl_category  WHERE phaID = '$userID' ORDER BY catId DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getCatById($catid)
        {
            $query = "SELECT * FROM tbl_category WHERE catId = '$catid'";
            $result = $this->db->select($query);
            return $result;
        }

        public function catUpdate($catName, $catid)
        {
            $catName = $this->fm->validation($catName);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            $catid = mysqli_real_escape_string($this->db->link, $catid);
            if (empty($catName)) {
                $msg = "<span class='alert alert-danger'>Category field must not be empty!</span>";
                return $msg;
            } else {
                $query = "UPDATE tbl_category
                SET
                catName = '$catName'
                WHERE catId = '$catid'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<span class='alert alert-success'>Category Updated Successfully</span>";
                    return $msg;
                } else {
                    $msg = "<span class='alert alert-danger'>Category Not Updated.</span>";
                    return $msg;
                }
            }
        }
        public function delCatById($id)
        {
            $query = "DELETE FROM tbl_category WHERE catId = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<span class='success'>Category Deleted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Category Not Deleted!</span>";
                return $msg;
            }
        }
    }
