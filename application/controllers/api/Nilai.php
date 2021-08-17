<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Firebase\JWT\JWT;

require FCPATH . 'vendor/autoload.php';

class Nilai extends CI_Controller
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
        header("Content-Type: application/json");
        try {
            $data = $this->token != null ? JWT::decode($this->token, $key, array('HS256')) : null;
            $userId = $data != null ? explode('-', $data)[1] : null;
            if ($userId != null) {
                $user = $this->Auth_model->detailNilai($userId)->row();
                $response = [
                    "response" => [
                        "data" => $user
                    ]
                ];
                echo json_encode($response);
            } else {
                echo json_encode([
                    "response" => [
                        "data" => "Token salah"
                    ]
                ]);
            };
        } catch (\Throwable $th) {
            print($th);
            echo json_encode([
                "response" => [
                    "msg" => "Token Salah",
                ]
            ]);
        }
    }

    public function detailNilaiPost()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'nilai_uts'     => $this->input->post('nilai_uts'),
            'kelas'         => $this->input->post('kelas'),
        );
        // $insert = $this->db->insert('tb_nilai', $data);
        $nilai = $this->Auth_model->nilaiPost()->result();
        if ($nilai) {
            // $this->response($data, 200);
            $response = [
                "response" => [
                    "msg" => "Data post berhasil",
                    "data" => $data,
                ]
            ];
            echo json_encode($response);
        } else {
            // $this->response(array('status' => 'fail', 502));
            echo json_encode([
                "response" => [
                    "msg" => "data tidak berhasil",
                ]
            ]);
        }
    }
}
