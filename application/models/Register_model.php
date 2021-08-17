<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model
{
    public function registerPost()
    {
        $this->db->from('tb_user');
        return $this->db->get();
    }
}
