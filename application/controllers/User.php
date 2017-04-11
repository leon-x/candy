<?php


class User extends CI_Controller{
    
    public function index(){
        
        //$array = [];
        //$aaa=5;
        //$this->get_count($aaa,$array);//调用回调方法
        
        //print_r($array);

        $data = [
            'abc'=>[
                "skuId"=>"B00HF32JZE",
                "skuName"=>"韩寒MOOK2:去你家玩好吗",
                "category"=>"图书",
                "Price"=>18.30,
                "Quantity"=>1
            ]
        ];

        //print_r($data);exit;

        $this->load->view('user',$data);
    }
    
    //简单的回调方法
    public function get_count($aaa,&$array){
        if($aaa - 1 == 0){
            $array[]=$aaa;
        }else{
            $array[]=$aaa;
            $aaa=$aaa - 1;
            $this->get_count($aaa, $array);
        }
        
    }
    
}