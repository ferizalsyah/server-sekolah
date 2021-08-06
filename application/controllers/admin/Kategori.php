<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_kategori');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/kategori/content_kategori';
		$isi['judul']		= 'Referensi';
		$isi['sub_judul']	= 'Data Kategori Barang';
		$isi['data'] 		= $this->db->get('a_tblkategori');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/barang/tambah_barang';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data barang';
		$isi['kt']			= $this->Model_barang->get_ktgori();
		$this->load->view('admin/index',$isi);
	}

	public function update($id_barang)
	{
		$isi['content']		= 'admin/barang/content_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data barang';
		$where 				= array('id_barang' => $id_barang);
		$isi['kt']			= $this->Model_barang->get_ktgori();
		$isi['barang']		= $this->Model_barang->edit_data($where,'barang')->result();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$id_barang		= $this->input->post('id_barang');
		$kode_barang	= $this->input->post('kode_barang');
		$nama_barang 	= $this->input->post('nama_barang');
		$satuan   		= $this->input->post('satuan');
		$jenis_barang	= $this->input->post('jenis_barang');
		$stok			= $this->input->post('stok');
		$harga			= $this->input->post('harga');

		$data = array(
					'id_barang'			=> $id_barang,
					'kode_barang'		=> $kode_barang,
					'nama_barang' 		=> $nama_barang,
					'satuan'			=> $satuan,
					'jenis_barang'		=> $jenis_barang,
					'stok'				=> $stok,
					'harga'				=> $harga,

			);
		$this->Model_barang->input_data($data,'barang');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data barang berhasil."); window.location.href="<?php echo base_url();?>admin/Data_barang"</script> <?php
	}

	public function hapus($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$this->Model_barang->hapus_data($where,'barang');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data barang berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/Data_barang"</script> <?php
	}

	public function edit(){
		$id_barang 			= $this->input->post('id_barang');
		$kode_barang 		= $this->input->post('kode_barang');
		$nama_barang		= $this->input->post('nama_barang');
		$satuan				= $this->input->post('satuan');
		$jenis_barang		= $this->input->post('jenis_barang');
		$stok				= $this->input->post('stok');
		$harga				= $this->input->post('harga');

		$data = array(
					'id_barang'			=> $id_barang,
					'kode_barang'		=> $kode_barang,
					'nama_barang' 		=> $nama_barang,
					'satuan'			=> $satuan,
					'jenis_barang'		=> $jenis_barang,
					'stok'				=> $stok,
					'harga'				=> $harga,
			);
	$where = array(
		'id_barang' => $id_barang
	);

	$this->Model_barang->update_data($where,$data,'barang');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data barang berhasil."); window.location.href="<?php echo base_url();?>/admin/Data_barang"</script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */