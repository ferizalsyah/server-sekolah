<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($email, $password)
    {
        $this->db->select('email, id_siswa ');
        $this->db->where(array('email' => $email, 'password' => $password));
        $query = $this->db->get('tb_siswa');
        return $query;
    }
    public function getProfile()
    {
        $this->db->from(' tb_siswa siswa');
        $this->db->select('siswa.nama, siswa.email , siswa.kelas, siswa.jenis_kelamin, siswa.alamat');
        return $this->db->get();
    }
    public function daftarPelajaran()
    {
        $this->db->from('tb_pelajaran pelajaran');
        $this->db->select('pelajaran.*');
        return $this->db->get();
    }
    public function detailNilai()
    {
        $this->db->from('tb_nilai nilai');
        $this->db->select('nilai.*');
        return $this->db->get();
    }
    public function nilaiPost()
    {
        $this->db->from('tb_nilai');
        // $this->db->post('nilai.*');
        return $this->db->get();
    }
}
