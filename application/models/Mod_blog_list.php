<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_blog_list extends CI_Model
{

  //取得文章列表
    public function get_list($where = '')
    {
        if ($where != '') {
            $this->db->where($where);
        }
        $data = $this->db->order_by('create_time', 'desc')->get('blog_article')->result_array();

        return $data;
    }

    //把文章寫入DB

        public function add_once($data)
    {
        $this->db->insert('blog_article', $data);

        return true;
    }

    //取得文章
    public function get_once($sn)
    {
        $this->db->where('sn', $sn);
        $data = $this->db->get('blog_article')->row_array();
        foreach ($data as $k => $v) {
            if ($v == null) {
                $data[$k] = '';
            }
        }

        return $data;
    }

    // 更新文章
    public function update_once($data)
    {
        $this->db->where('sn',$data['sn']);
        $this->db->update('blog_article',$data);

        return true;
    }

    //刪除文章

    public function remove_once($sn)
    {
        $this->db->where('sn', $sn);
        $this->db->delete('blog_article');

        return true;
    }

    //取出最新文章

    public function get_new_article($sn= '')
    {
        if ($sn != '') {
            $this->db->where($sn);
        }
        $data= $this->db->order_by('sn','desc')->get('blog_article')->result_array();

        return $data;

    }

    //搜尋tag標籤

    public function tag_search($id)
    {
     
        $this->db->where('classification', $id);
        $data = $this->db->get('blog_article')->row_array();
       
       
        return $data;
      
    }






}
?>