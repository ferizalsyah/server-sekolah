<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Firebase\JWT\JWT;

require FCPATH . 'vendor/autoload.php';

class Profile extends CI_Controller
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
        header('Content_type: Application/json');
        try {
            $data = $this->token != null ? JWT::decode($this->token, $key, array('HS256')) : null;
            $userId = $data != null ? explode('-', $data)[1] : null;
            if ($userId != null) {
                $user = $this->Auth_model->getProfile($userId)->row();
                $response = [
                    "response" => [
                        "data" => $user,
                    ]
                ];
                echo json_encode($response);
            } else {
                echo json_encode([
                    "response" => [
                        "msg" => "token salah",
                    ]
                ]);
            };
        } catch (\Throwable $th) {
            print($th);
            echo json_encode([
                "response" => [
                    "msg" => "token salah",
                ]
            ]);
        }
    }
}
