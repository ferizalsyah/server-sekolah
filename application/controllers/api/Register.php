<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Firebase\JWT\JWT;

require FCPATH . 'vendor/autoload.php';

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->token = $this->input->get_request_header('Authorization');
        $this->load->model('Register_model');
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
        $data = array(
            'username'          => $this->input->post('username'),
            'email'             => $this->input->post('email'),
            'password'          => $this->input->post('password'),
            'level_user'          => $this->input->post('level_user'),
        );
        // $insert = $this->db->insert('tb_nilai', $data);
        $nilai = $this->Register_model->registerPost()->result();
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
