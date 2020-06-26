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
    // Function getdata

    public function getdata()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    //-------------------------------CRUD-------------------------------

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

    // Select

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
    public function get_byID($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE Phone_id = $id ";
        $result = mysqli_query($this->link, $sql) or die("Error " . mysqli_error($this->link));
        return mysqli_fetch_assoc($result);
    }
    public function fetchOne($table, $query)
    {
        $sql = "SELECT * FROM {$table} WHERE ";
        $sql .= $query;
        $sql .= "LIMIT 1";
        $result = mysqli_query($this->link, $sql) or die("Lỗi  truy vấn fetchOne " . mysqli_error($this->link));
        return mysqli_fetch_assoc($result);
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
    //Update
    public function update($table, array $data, array $conditions)
    {
        $sql = "UPDATE {$table}";
        $set = " SET";
        $where = "WHERE";
        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $set .= $key .= "=" . '\'' . mysqli_real_escape_string($this->link, xss_clean($value)) . ',';
            } else {
                $set .= $key .= "=" . mysqli_real_escape_string($this->link, xss_clean($value)) . ',';
            }
        }
        $set = substr($set, 0, -1);
        foreach ($conditions as $key => $value) {
            if (is_string($value)) {
                $where .= $key .= "=" . '\'' . mysqli_real_escape_string($this->link, xss_clean($value)) . '\'AND';
            } else {
                $where .= $key .= "=" . mysqli_real_escape_string($this->link, xss_clean($value)) . 'AND';
            }
        }
    }
    public function updateview($sql)
    {
        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        return mysqli_affected_rows($this->link);
    }

    public function countTable($table)
    {
        $sql = "SELECT id FROM  {$table}";
        $result = mysqli_query($this->link, $sql) or die("Lỗi Truy Vấn countTable----" . mysqli_error($this->link));
        $num = mysqli_num_rows($result);
        return $num;
    }
    //Delete
    public function Delete($table, $sql)
    {
        $sql = "DELETE FROM '$table' WHERE .'$sql'";
        mysqli_query($this->link, $sql) or die(mysqli_error($this->link));

        return mysqli_affected_rows($this->link);
    }

    public function deletesql($table, $sql)
    {
        $sql = "DELETE FROM {$table} WHERE " . $sql;
        // _debug($sql);die;
        mysqli_query($this->link, $sql) or die(" Lỗi Truy Vấn delete   --- " . mysqli_error($this->link));
        return mysqli_affected_rows($this->link);
    }
    //-----------------------------END_CRUD-----------------------------
    public function fetchJones($table, $sql, $total = 1, $page, $row, $pagi = true)
    {
        $result = mysqli_query($this->link, $sql);
        $data = [];

        if ($pagi == true) {
            $sotrang = ceil($total / $row);
            $start = ($page - 1) * $row;
            $sql .= " LIMIT $start,$row ";
            $data = ["page" => $sotrang];

            $result = mysqli_query($this->link, $sql) or die("Lỗi truy vấn fetchJone ---- " . mysqli_error($this->link));
        } else {
            $result = mysqli_query($this->link, $sql) or die("Lỗi truy vấn fetchJone ---- " . mysqli_error($this->link));
        }

        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }

        return $data;
    }
    public function fetchJone($table, $sql, $page = 0, $row, $pagi = false)
    {
        $result = mysqli_query($this->link, $sql);
        $data = [];
        // _debug($sql);die;
        if ($pagi == true) {
            $total = $this->countTable($table);
            $sotrang = ceil($total / $row);
            $start = ($page - 1) * $row;
            $sql .= " LIMIT $start,$row";
            $data = ["page" => $sotrang];

            $result = mysqli_query($this->link, $sql) or die("Lỗi truy vấn fetchJone ---- " . mysqli_error($this->link));
        } else {
            $result = mysqli_query($this->link, $sql) or die("Lỗi truy vấn fetchJone ---- " . mysqli_error($this->link));
        }

        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }
        // _debug($data);
        return $data;
    }

    public function fetchJoneDetail($table, $sql, $page = 0, $total, $pagi)
    {
        $result = mysqli_query($this->link, $sql) or die("Lỗi truy vấn fetchJone ---- " . mysqli_error($this->link));

        $sotrang = ceil($total / $pagi);
        $start = ($page - 1) * $pagi;
        $sql .= " LIMIT $start,$pagi";

        $result = mysqli_query($this->link, $sql);
        $data = [];
        $data = ["page" => $sotrang];
        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }
        return $data;
    }

    public function total($sql)
    {
        $result = mysqli_query($this->link, $sql);
        $tien = mysqli_fetch_assoc($result);
        return $tien;
    }
}