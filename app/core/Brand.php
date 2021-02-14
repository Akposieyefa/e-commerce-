<?php 
    namespace app\core;

    use app\lib\DB;
    use app\lib\Format;
    class Brand
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function brandInsert($brandName,$phaID)
        {
            $phaID = $this->fm->validation($phaID);
            $brandName = $this->fm->validation($brandName);
            $brandName = mysqli_real_escape_string($this->db->link, $brandName);
            $phaID = mysqli_real_escape_string($this->db->link, $phaID);
            if (empty($brandName) || empty($phaID)) {
                $msg = "<div class='alert alert-danger'>Brand field must not be empty!</div>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_brand(brandName,phaID) VALUES('$brandName','$phaID')";
                $brandinsert = $this->db->insert($query);
                if ($brandinsert) {
                    $msg = "<div class='alert alert-success'>Brand Inserted Successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Brand Not Inserted.</div>";
                    return $msg;
                }
            }
        }

        public function getAllBrand()
        {
            $query = "SELECT * FROM tbl_brand ORDER BY brandId DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getAllByBrandPharmacy($phaID)
        {
            $query = "SELECT * FROM tbl_brand WHERE phaID = '$phaID' ORDER BY brandId DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getBrandById($brandid)
        {
            $query = "SELECT * FROM tbl_brand WHERE brandId = '$brandid'";
            $result = $this->db->select($query);
            return $result;
        }

        public function brandUpdate($brandName, $brandId)
        {
            $brandName = $this->fm->validation($brandName);
            $brandName = mysqli_real_escape_string($this->db->link, $brandName);
            $brandId = mysqli_real_escape_string($this->db->link, $brandId);
            if (empty($brandName)) {
                $msg = "<div class='alert alert-danger'>Brand field must not be empty!</div>";
                return $msg;
            } else {
                $query = "UPDATE tbl_brand
                SET
                brandName = '$brandName'
                WHERE brandId = '$brandId'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<div class='alert alert-success'>Brand Updated Successfully</div>";
                    return $msg;
                } else {
                    $msg = "<div class='alert alert-danger'>Brand Not Updated.</div>";
                    return $msg;
                }
            }
        }
        public function delBrandById($id)
        {
            $id = mysqli_real_escape_string($this->db->link, $id);
            $query = "DELETE FROM tbl_brand WHERE brandId = '$id'";
            $deldata = $this->db->delete($query);
            if ($deldata) {
                $msg = "<div class='alert alert-success'>Brand Deleted Successfully</div>";
                return $msg;
            } else {
                $msg = "<div class='alert alert-danger'>Brand Not Deleted!</div>";
                return $msg;
            }
        }
    }
