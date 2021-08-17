<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nilai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
        }
        $this->load->model('Model_nilai');
        $this->load->helper('url');
    }

    public function index()
    {
        $isi['content']        = 'admin/nilai/content_nilai';
        $isi['judul']        = 'Referensi';
        $isi['sub_judul']    = 'Data Penilaian';
        $isi['nilai']         = $this->db->get('tb_nilai');
        // $where                 = array('nama' => $nama);
        // $isi['siswa']        = $this->db->query("SELECT * FROM tb_siswa WHERE nama=$nama");
        $this->load->view('admin/index', $isi);
        // $this->load->library('Pdfgenerator');
        // $this->Pdfgenerator->setPaper('A4', 'potrait');
        // $this->Pdfgenerator->filename = "laporan-data-nilai.pdf";
        // $this->pdf->load_view('laporan_siswa', $data);

    }

    public function tambah_siswa()
    {
        $isi['content']        = 'admin/siswa/tambahsiswa';
        $isi['judul']        = 'Referensi';
        $isi['sub_judul']    = 'Data siswa';
        $isi['siswa']            = $this->Model_siswa->get('tb_siswa');
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

        $this->Model_siswa->input_data($data, 'tb_siswa');
?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
        <script type="text/javascript">
            alert("Tambah data siswa berhasil.");
            window.location.href = "<?php echo base_url(); ?>admin/siswa"
        </script> <?php
                }

                public function hapus($id_siswa)
                {
                    $where = array('id_siswa' => $id_siswa);
                    $this->Model_siswa->hapus_data($where, 'tb_siswa');

                    ?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
        <script type="text/javascript">
            alert("hapus data siswa berhasil.");
            window.location.href = "<?php echo base_url(); ?>index.php/admin/siswa"
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
            window.location.href = "<?php echo base_url(); ?>/admin/siswa"
        </script> <?php
                }
            }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */