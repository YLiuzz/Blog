<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    //登入登入相關
    public function login()
    {
        $this->load->model('mod_user');
        $this->load->library('getpost');

        $getpost = array('user_id', 'user_pwd');
        $requred = array('user_id', 'user_pwd');
        $data = $this->getpost->getpost_array($getpost, $requred);
        if ($data == false) {
            $json_arr['sys_code'] = '000';
            $json_arr['sys_msg'] = '資料不足';
            $json_arr['requred'] = $this->getpost->report_requred($requred);
        } else {
            if ($this->mod_user->chk_login($data['user_id'], $data['user_pwd'])) {
                $this->mod_user->do_login($data['user_id']);
                $json_arr['sys_code'] = '200';
                $json_arr['sys_msg'] = '登入完成';
            } else {
                $json_arr['sys_code'] = '500';
                $json_arr['sys_msg'] = '帳密登入失敗';
            }
        }
        echo json_encode($json_arr);
    }

    //上傳圖片
    public function upload_img()
    {
        $this->load->library('file');
        $data = $_POST['data'];
        if ($data == '') {
            $json_arr['sys_code'] = '000';
            $json_arr['sys_msg'] = '資料不足';
        } else {
            $path = './img/';
            $filename = uniqid().'.jpg';
            if ($this->file->base64_2_file($data, $filename, $path)) {
                $json_arr['sys_code'] = '200';
                $json_arr['sys_msg'] = '上傳成功';
                $json_arr['url'] = $path.$filename;
            } else {
                $json_arr['sys_code'] = '500';
                $json_arr['sys_msg'] = '上傳失敗';
            }
        }
        echo json_encode($json_arr);
    }

    //上傳文章
    public function add_article()
    {
        $this->load->model('mod_blog_list');
        $getpost = array('img', 'date', 'title', 'content');
        $requred = array('img', 'date', 'title', 'content');
        $data = $this->getpost->getpost_array($getpost, $requred);
        if ($data == false) {
            $json_arr['sys_code'] = '000';
            $json_arr['sys_msg'] = '資料不足';
            $json_arr['requred'] = $this->getpost->report_requred($requred);
        } else {
            $this->mod_blog_list->add_once($data);
            $json_arr['sys_code'] = '200';
            $json_arr['sys_msg'] = '新增完成';
        }
        echo json_encode($json_arr);
    }
  






}
?>