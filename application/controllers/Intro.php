<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends CI_Controller {

//部落格首頁
      public function index()
    {
        $this->load->model('mod_user');
        $this->load->model('mod_blog_list');
        // $this->mod_user->chk_status();

        $data = array(
            'title' => 'Blog',
            'path' => 'page/index',
            'path_text' => 'Blog',
            'datalist'=>$this->mod_blog_list->get_list(),
            'new_article'=>$this->mod_blog_list->get_new_article(),
            
        );

        $this->load->view('page/index', $data);
    }

    //部落格搜尋

    public function index_search($id)
    {
        $this->load->model('mod_user');
        $this->load->model('mod_blog_list');
        $data = array(
            'title'=>'Blog_search',
            'path'=>'page/index_search',
            'path_text' => 'Blog_search',
            'datalist'=>$this->mod_blog_list->tag_search($id),
            


        );
        $this->load->view('page/index_search', $data);

    }


}
?>