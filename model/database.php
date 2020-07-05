<?php 
class Database
{
    private $hostname = "localhost:3307";
    private $user = "root";
    private $pass = "";
    private $db = "phone";
    public $link = null;
    private $result = null;
    //

    public function __construct()
    {
        $this->link = mysqli_connect($this->hostname, $this->user, $this->pass, $this->db) or die("Can't connect db!");

        if ($this->link) {
            mysqli_set_charset($this->link, 'utf-8');
        } else {
            exit();
        }
        return $this->link;
    }

    
    public function getAllData($table)
    {
        $sql = "SELECT * FROM {$table}";
        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        $data = [];
        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }
        return $data;
    }
    public function getdata_where($table, $query)
    {
        $sql = "SELECT * FROM {$table} WHERE ";
        $sql .= $query;
        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        $data = [];
        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }
        return $data;

    }
    function getPro_Id($id){

		$sql = "SELECT *FROM tbl_product WHERE id = $id";
		$query = mysqli_query($this->link, $sql);
		$result = array();
		$result = mysqli_fetch_array($query);

		return $result;
	}

}

?>