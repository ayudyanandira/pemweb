<?php

class home extends Controller {

    private $dt;
    private $df;
    public function __construct(){
        $this->dt = $this->loadmodel("barang");
        $this->df = $this->loadmodel("daftarBarang");
    }
    public function index(){
        echo "anda memanggil action index \n";
    }

    public function home($data1,$data2){
        echo "anda memanggil action home dengan data1 = $data1 dan data2 = $data2 \n";
    }

    public function lihatdata()  {
       echo $this->dt->getData();
    }

    public function listbarang() {
        $data = $this->df->getDataAll();
        $this->loadview('templates/header');
        $this->loadview('home/listBarang',$data);
        $this->loadview('templates/footer');
        
    }
}