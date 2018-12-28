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

    public function blog_list()
    {
        $this->load->model('mod_user');
        $this->load->model('mod_blog_list');
        $this->mod_user->chk_status();

        $data = array(
            'title'=>'文章列表',
            'path'=> 'page/blog_list',
            'datalist'=> $this->mod_blog_list->get_list(),

        );
        $this->load->view('layout',$data);

    }




}
?>