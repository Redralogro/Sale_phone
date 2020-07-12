<?php 
class Database
{
    private $hostname = "localhost";
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

      //  Function execute sql command
      public function execute($sql)
      {
          $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
          $data = [];
          if ($result) {
              while ($num = mysqli_fetch_assoc($result)) {
                  $data[] = $num;
              }
          }
          return $data;
      }
      public function detail_phone($id)
		{
			$sql = "SELECT * FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->link, $sql);
			$row = mysqli_fetch_array($query);
			return $row;
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
    public function getOrder_detail_byID($id)
		{
			$sql = "SELECT *FROM order_detail where Order_id = $id";
			$query = mysqli_query($this->link, $sql);
			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
        }
        
		public function get_order_id($id)
		{
        	$sql = "SELECT *FROM order_phone where Order_id = $id";
			$query = mysqli_query($this->link, $sql);
			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;

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
       //Insert
       public function insert($table, array $data)
       {
           $sql = "INSERT INTO $table";
           $columns = implode(',', array_keys($data));
           $values = "";
           $sql .= '(' . $columns . ')';
           foreach ($data as $key => $value) {
               if (is_string($value)) {
                   $values .= "'" . mysqli_real_escape_string($this->link, $value) . "'";
               } else {
                   $values .= mysqli_real_escape_string($this->link, $value) . ",";
               }
               $values = substr($values, 0, -1);
               $sql .= " VALUES(.$values.)";
               //debug ($sql) ; die();
               mysqli_query($this->link, $sql) or die("Error Query Insert" . mysqli_error($this->link));
               return mysqli_insert_id($this->link);
           }
       }

}

?>