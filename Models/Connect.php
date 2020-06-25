<?php
abstract class Connect{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'rw';

    private $con = null;
    private $result = null;

    public function _connect()
    {
        $this->con =  mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if ($this->con)
        {
            mysqli_set_charset($this->con, 'utf8');

        }
        return $this->con;
    }

    public function execute($sql)
    {
        $this->result = $this->con->query($sql);
        return $this->result;
    }

    public function getData()
    {
        if ($this->result)
            $data = mysqli_fetch_array($this->result);
        else
            $data = 0;
        return $data;
    }

    public function num_rows()
    {
        if ($this->result)
            $num = mysqli_num_rows($this->result);
        else $num = 0;
        return $num;
    }
} 