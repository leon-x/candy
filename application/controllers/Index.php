<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{
    
    public function index(){
        
        //这个控制器不知道是跟那里冲突了
        //不能访问这个控制器
        
        $this->load->view('index_view');
        
    }
    
}
