<?php


class User_text_models extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
    
    
    /**
     * 获取单条信息
     */
    public function getOne($conditions){
        
        $query = $this->db->from('user_text')->where('id',1)->get()->row_array();
    
        return $query;
    }
    
    
}