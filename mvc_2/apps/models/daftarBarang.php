<?php

class daftarBarang{
    private $daftar = [];
    private $db = null;
    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql','localhost','root','','mvcapp');
       
        
    }

    public function getDataAll(){
        $stmt = "select * from daftarBarang";
        $query = $this->db->query($stmt);
        $data = [];

        while($result = $this->db->fetch_array($query)){
            $data[] = $result;

        }
        return $data;
    }
}