<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_back extends CI_Controller {

    public function layout()
    {
        $this->load->model('mod_user');
        $this->mod_user->chk_status();
        $data = array(
             'title' => '後臺首頁',
             'path' => 'index',

        );
        $this->load->view('layout',$data);
        
    }




}
?>