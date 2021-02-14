<?php 

    namespace app\core;
    use app\lib\DB;
use app\lib\Format;
    class States
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new DB();
            $this->fm = new Format();
        }

        public function getAllState()
        {
            $query = "SELECT * FROM states";
            $result = $this->db->select($query);
            return $result;
        }

        public function getLgaByStateId($id)
        {
            $query = "SELECT * FROM lgas WHERE  state_id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

    }
