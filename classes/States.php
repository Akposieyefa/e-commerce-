<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');
 ?>
<?php 
class States
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
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
