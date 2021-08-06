<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Bpm extends CI_Controller {

public function __construct(){
        // parent::__construct();
        // if ($this->session->userdata('username')=="") {
        // redirect('login')       
        // }
        parent::__construct();	
        $this->load->model('Model_user');         
        $this->load->helper('url');     
}       

public function index() {
     $data = array(                     
        'error' => '',                     
         'username' => $this->session->userdata('username')
);         

$isi['content']     = 'Bpm/isi';
$isi['judul']       = 'dashboard';         
$isi['sub_judul']   = 'home';         
$this->load->view('Bpm/index',$isi);
}       

public function logout() {
    $this->session->unset_userdata('username');         
    $this->session->unset_userdata('level_user');         
    session_destroy();         
    redirect('login');     
    } 
}