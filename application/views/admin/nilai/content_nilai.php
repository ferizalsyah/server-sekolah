 <div class="box box-primary">
     <div class="box-header">
         <h3 class="box-title">Data Nilai &nbsp;&nbsp;<a href="<?php echo base_url() . "admin/siswa/tambah_siswa/" ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
     </div>
     <!-- Main content -->

     <div class="box">
         <div class="box-header">
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama Siswa</th>
                         <th>Kelas</th>
                         <th>Nilai UTS</th>
                         <th>Nilai UAS</th>
                         <th>Nilai Harian</th>
                         <th>Nilai Matematika</th>
                         <th>Nilai PKN</th>
                         <th>Nilai Bahasa Indonesia</th>
                         <th>Nilai Agama</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $no = 1;
                        foreach ($nilai->result() as $row) {
                        ?>
                         <tr>
                             <td><?php echo $no; ?></td>
                             <td><?php echo $row->nama; ?></td>
                             <td><?php echo $row->kelas; ?></td>
                             <td><?php echo $row->nilai_uts; ?></td>
                             <td><?php echo $row->nilai_uas; ?></td>
                             <td><?php echo $row->nilai_harian; ?></td>
                             <td><?php echo $row->nilai_matematika; ?></td>
                             <td><?php echo $row->nilai_pkn; ?></td>
                             <td><?php echo $row->nilai_bahasa_indonesia; ?></td>
                             <td><?php echo $row->nilai_agama; ?></td>
                             <td>
                                 <a href="<?php echo base_url() . "admin/nilai/update/" . $row->id_nilai; ?>" class="btn btn-success btn-sm">Edit</a>
                                 <a href="<?php echo base_url() . "admin/nilai/hapus/" . $row->id_nilai; ?>" class="btn btn-danger btn-sm">Delete</a>
                             </td>
                             </form>
                         </tr>
                     <?php
                            $no++;
                        }
                        ?>
             </table>
             <div>
                 <h3><a href="<?php echo base_url(); ?>admin/Report/pdf_kembali">printpdf</a></h3>
             </div>

         </div>