<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends CI_Controller {

//部落格首頁
      public function index()
    {

        $data = array(
            'title' => 'Blog',
            'path' => 'page/index',
            'path_text' => ' > 英聽主選單',
        );
        $this->load->view('page/index', $data);
    }


}
?>