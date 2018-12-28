<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_blog_list extends CI_Model
{

  
    public function get_list($where = '')
    {
        if ($where != '') {
            $this->db->where($where);
        }
        $data = $this->db->order_by('create_time', 'desc')->get('blog_article')->result_array();

        return $data;
    }


}
?>