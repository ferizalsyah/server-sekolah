<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mapel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
        }
        $this->load->model('Model_mapel');
        $this->load->helper('url');
    }

    public function index()
    {
        $isi['content']           = 'admin/mapel/content_mapel';
        $isi['judul']             = 'Referensi';
        $isi['sub_judul']         = 'Data mata pelajaran';
        $isi['pelajaran']         = $this->db->get('tb_pelajaran');
        $this->load->view('admin/index', $isi);
    }

    public function tambah_mapel()
    {
        $isi['content']          = 'admin/mapel/tambah_mapel';
        $isi['judul']            = 'Referensi';
        $isi['sub_judul']        = 'Data mapel';
        $isi['mapel']            = $this->Model_mapel->get('tb_pelajaran');
        $this->load->view('admin/index', $isi);
    }

    public function update($id_siswa)
    {
        $isi['content']        = 'admin/siswa/content_update';
        $isi['judul']        = 'Manajemen data';
        $isi['sub_judul']    = 'Update data kampus';
        $where                 = array('id_siswa' => $id_siswa);
        $isi['siswa']        = $this->db->query("SELECT * FROM tb_siswa WHERE id_siswa=$id_siswa");
        $this->load->view('admin/index', $isi);
    }

    public function simpan()
    {
        $nama_pelajaran        = $this->input->post('nama_pelajaran');
        $data = array(
            'nama_pelajaran'            => $nama_pelajaran,

        );

        $this->Model_mapel->input_data($data, 'tb_pelajaran');
?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
        <script type="text/javascript">
            alert("Tambah data mapel berhasil.");
            window.location.href = "<?php echo base_url(); ?>admin/mapel"
        </script> <?php
                }

                public function hapus($id_pelajaran)
                {
                    $where = array('id_pelajaran    ' => $id_pelajaran);
                    $this->Model_mapel->hapus_data($where, 'tb_pelajaran');

                    ?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
        <script type="text/javascript">
            alert("hapus data Mapel berhasil.");
            window.location.href = "<?php echo base_url(); ?>index.php/admin/mapel"
        </script> <?php
                }

                public function edit()
                {
                    $id_siswa        = $this->input->post('id_siswa');
                    $nama            = $this->input->post('nama');
                    $nisn             = $this->input->post('nisn');
                    $email           = $this->input->post('email');
                    $password       = $this->input->post('password');
                    $alamat           = $this->input->post('alamat');
                    $jenis_kelamin  = $this->input->post('jenis_kelamin');
                    $kelas           = $this->input->post('kelas');

                    $data = array(
                        'id_siswa'            => $id_siswa,
                        'nama'                => $nama,
                        'nisn'                 => $nisn,
                        'email'                => $email,
                        'password'            => $password,
                        'alamat'            => $alamat,
                        'jenis_kelamin'        => $jenis_kelamin,
                        'kelas'                => $kelas,

                    );
                    $where = array(
                        'id_siswa' => $id_siswa
                    );

                    $this->Model_siswa->update_data($where, $data, 'tb_siswa');
                    ?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
        <script type="text/javascript">
            alert("Update data kampus berhasil.");
            window.location.href = "<?php echo base_url(); ?>/admin/mapel"
        </script> <?php
                }
            }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */