<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		if ($this->session->userdata('username')) {
			$this->check($this->session->userdata('username'));
		}
	}

	public function index()
	{
		$data = array(
			'error' => ''
		);
		$this->load->view('login', $data);
	}

	//function for processing login form
	public function login_process()
	{
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$result 	= $this->login_model->check_user($username, $password);
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$id_user 			= $row->id_user;
				$username 			= $row->username;
				$nama_lengkap		= $row->nama_lengkap;
				$level_user			= $row->level_user;
			}

			$newdata = array(
				'id_user'  		=> $id_user,
				'username' 		=> $username,
				'nama_lengkap'	=> $nama_lengkap,
				'level_user'	=> $level_user,
				'logged_in' 	=> TRUE
			);

			//set up session data
			$this->session->set_userdata($newdata);
			$this->check($this->session->userdata('level_user'));
		} else {
?>
			<script type="text/javascript">
				alert("Maaf nama yang anda masukan tidak benar.");
				window.location.href = "<?php echo base_url(); ?>index.php/login"
			</script> <?php
					}
				}

				public function check($sesion)
				{
					if ($sesion == '1') {
						redirect('admin/admin');
					} elseif ($this->session->userdata('level_user') == '2') {
						redirect('bpm/bpm');
					} elseif ($this->session->userdata('level_user') == '3') {
						redirect('yayasan/yayasan');
					} elseif ($this->session->userdata('level_user') == '4') {
						redirect('biroadm/biroadm');
					} elseif ($this->session->userdata('level_user') == '5') {
						redirect('user/user');
					}
				}
			}
