<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function getProfile()
    {
        $this->db->from(' tb_siswa siswa');
        $this->db->select('siswa.nama, siswa.email , siswa.kelas, siswa.jenis_kelamin, siswa.alamat');
        return $this->db->get();
    }
}
