<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page-Title -->
<div class="row">
   <div class="col-sm-12">
      <div class="page-title-box">
            <div class="btn-group pull-right">
               <ol class="breadcrumb hide-phone p-0 m-0">
                  <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Mahasiswa</li>
               </ol>
            </div>
            <h4 class="page-title">Tampil Data Mahasiswa</h4>
      </div>
   </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
   <div class="col-12">
      <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Tambah Data</button>
         <div class="card m-b-30">
            <div class="card-body">
               <table id="dataMahasiswa" class="table table-bordered">
                     <thead>
                     <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                     </tr>
                     </thead>

                     <tbody>
                        <?php 
                        $no = 0;
                        foreach($mahasiswa as $mhs) : 
                        $no++;   
                        ?>
                        <tr>
                           <td><?= $no; ?></td>
                           <td><?= $mhs['nim']; ?></td>
                           <td><?= $mhs['nama']; ?></td>
                           <td><?= $mhs['alamat']; ?></td>
                           <td><?= $mhs['jenkel']; ?></td>
                           <td>
                              <button type="button" class="btn btn-outline-info btn-sm waves-effect waves-light">Edit</button>
                              <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light">Hapus</button>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                     </tbody>
               </table>

            </div>
         </div>
   </div> <!-- end col -->
</div> <!-- end row -->
<?= $this->endSection(); ?>