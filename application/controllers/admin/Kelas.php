<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kelas');
		$this->load->helper('url');
	}


	public function index()
	{
		$isi['content']		= 'admin/kelas/content_kelas';
		$isi['judul']		= 'Referensi';
		$isi['sub_judul']	= 'Data Merek';
		$isi['data'] 		= $this->db->get('tb_kelas');
		$this->load->view('admin/index', $isi);
	}

	public function tambah_kelas()
	{
		$isi['content']		= 'admin/kelas/tambah_kelas';
		$isi['judul']		= 'referensi';
		$isi['sub_judul']	= 'data kelas';
		$isi['kt']			= $this->Model_kelas->get('tb_kelas');
		$this->load->view('admin/index', $isi);
	}

	public function update($id_kelas)
	{
		$isi['content']		= 'admin/kelas/content_kelas';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data merek';
		$where 				= array('id_kelas' => $id_kelas);
		$isi['kt']			= $this->Model_kelas->get();
		$isi['kelas']		= $this->Model_kelas->edit_data($where, 'tb_kelas')->result();
		$this->load->view('admin/index', $isi);
	}

	public function simpan()
	{
		$nama_kelas		= $this->input->post('nama_kelas');

		$data = array(
			'nama_kelas'			=> $nama_kelas,

		);
		$this->Model_kelas->input_data($data, 'tb_kelas');
?>
		<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
		<script type="text/javascript">
			alert("Tambah data barang berhasil.");
			window.location.href = "<?php echo base_url(); ?>admin/kelas"
		</script> <?php
				}

				public function hapus($id_kelas)
				{
					$where = array('id_kelas' => $id_kelas);
					$this->Model_kelas->hapus_data($where, 'tb_kelas');
					?>
		<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
		<script type="text/javascript">
			alert("hapus data barang berhasil.");
			window.location.href = "<?php echo base_url(); ?>index.php/admin/kelas"
		</script> <?php
				}

				public function edit()
				{
					$idmerek 			= $this->input->post('idmerek');
					$nmmerek 		= $this->input->post('nmmerek');

					$data = array(
						'idmerek'			=> $idmerek,
						'nmmerek	'		=> $nmmerek,
					);
					$where = array(
						'idmerek' => $idmerek
					);

					$this->Model_merek->update_data($where, $data, 'merek');
					?>
		<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
		<script type="text/javascript">
			alert("Update data barang berhasil.");
			window.location.href = "<?php echo base_url(); ?>/admin/merek"
		</script> <?php
				}
			}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */