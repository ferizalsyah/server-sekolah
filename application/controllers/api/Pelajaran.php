<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Firebase\JWT\JWT;

require FCPATH . 'vendor/autoload.php';

class Pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->token = $this->input->get_request_header('Authorization');
        $this->load->model('Auth_model');
        $this->handelAuth();
    }
    public function handelAuth()
    {
        if ($this->token == null) {
            echo json_encode([
                "response" => [
                    "succes" => true,
                    "token" => $this->token,
                    "msg" => "token tidak valid",
                    "statuscode" => 200,
                ]
            ]);
        }
    }
    public function index()
    {
        $key = "example_key";
        header("Content-Type: appllication/json");
        try {
            $data = $this->token != null ? JWT::decode($this->token, $key, array('HS256')) : null;
            $userId = $data != null ? explode('-', $data)[1] : null;
            if ($userId != null) {
                $user = $this->Auth_model->daftarPelajaran()->result();
                $kat = $this->db->get_where('tb_kelas', ['id_kelas' => $userId])->row()->nama_kelas;
                $response = [
                    "kelas" => $kat,
                    "msg" => "menampilkan kelas permata pelajaran",
                    "response" => [
                        "data" => $user
                    ]
                ];
                echo json_encode($response);
            } else {
                echo json_encode([
                    "response" => [
                        "msg" => "Token salah",
                    ]
                ]);
            }
        } catch (\Throwable $th) {
            print($th);
            echo json_encode([
                "response" => [
                    "msg" => "Token salah",
                ]
            ]);
        }
    }
}
