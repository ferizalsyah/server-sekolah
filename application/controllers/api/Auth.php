<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Firebase\JWT\JWT;

require FCPATH . "vendor/autoload.php";
require FCPATH . 'vendor/autoload.php';


class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function login()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $result = $this->Auth_model->login($data['email'], $data['password'])->row();
        if ($result != null) {
            $key = "example_key";
            $token = JWT::encode(($result->email . "-" . $result->id_siswa), $key);

            $response = [
                "response" => [
                    "succes" => true,
                    "token" => $token,
                    "msg" => "Login Berhasil",
                    "statuscode" => 200,
                ]
            ];
        } else {
            $response = [
                "response" => [

                    "token" => null,
                    "succes" => false,
                    "msg" => "token tidak berhasil di temukan",
                    "statuscode" => 200,
                ]
            ];
        }
        header('Content_type: application/json');
        echo json_encode($response);
    }
}
