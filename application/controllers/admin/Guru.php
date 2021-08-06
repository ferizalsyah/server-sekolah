<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_guru');
		$this->load->helper('url');
	}

	public function index()
	{
		$isi['content']		= 'admin/guru/content_guru';
		$isi['judul']		= 'Referensi';
		$isi['sub_judul']	= 'Data Lokasi';
		// $query = "SELECT A.*, B.nmkampus FROM a_tblokasi A INNER JOIN a_tblkampus B ON A.idkampus=B.idkampus";
		$isi['data'] 		= $this->db->get('tb_guru');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/guru/guru_add';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data lokasi';
		$isi['kt']			= $this->Model_guru->get('tb_guru');
		// $isi['data']		= $this->db->query("select * from tb_guru");
		$this->load->view('admin/index',$isi); 
	}

	public function update($id_guru)
	{
		$isi['content']		= 'admin/guru/content_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data ruang';
		$where 				= array('id_guru' => $id_guru);
		$isi['siswa']		= $this->db->query("SELECT * FROM tb_guru WHERE id_guru=$id_guru");
		// $isi['lokasi']		= $this->db->get("SELECT * FROM a_tblokasi WHERE idruang=$idruang");
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$id_guru		= $this->input->post('id_guru');
		$nama_guru		= $this->input->post('nama_guru');
		$email 		= $this->input->post('email');
		$password   	= $this->input->post('password');
		$alamat   	= $this->input->post('alamat');
		$jenis_kelamin   	= $this->input->post('jenis_kelamin');
		$guru_mapel   	= $this->input->post('guru_mapel');

		$data = array(
					'id_guru'			=> $id_guru,
					'nama_guru'			=> $nama_guru,
					'email'				=> $email,
					'password' 			=> $password,
					'alamat'			=> $alamat,
					'jenis_kelamin'		=> $jenis_kelamin,
					'guru_mapel'		=> $guru_mapel,

			);
		$this->Model_guru->input_data($data,'tb_guru');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data ruang berhasil."); window.location.href="<?php echo base_url();?>admin/guru"</script> <?php
	}

	public function hapus($id_guru)
	{
		$where = array('id_guru' => $id_guru);
		$this->Model_guru->hapus_data($where,'tb_guru');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data guru berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/guru"</script> <?php
	}

	public function edit(){
		$id_guru 			= $this->input->post('id_guru');
		$nama_guru			= $this->input->post('nama_guru');
		$email				= $this->input->post('email');
		$alamat			= $this->input->post('alamat');
		$guru_mapel			= $this->input->post('guru_mapel');

		$data = array(
					'id_guru'			=> $id_guru,
					'nama_guru'			=> $nama_guru,
					'email' 			=> $email,
					'alamat' 			=> $alamat,
					'guru_mapel' 			=> $guru_mapel,

			);
	$where = array(
		'id_guru' => $id_guru
	);

	$this->Model_guru->update_data($where,$data,'tb_guru');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data ruang berhasil."); window.location.href="<?php echo base_url();?>/admin/lokasi"</script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */