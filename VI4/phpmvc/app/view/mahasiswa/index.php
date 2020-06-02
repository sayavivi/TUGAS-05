
<div class="container mt-3">
     
     <!--Flasher-->
     <div class="row">
          <div class="col-lg-6">
               <?php Flasher::flash(); ?>
          </div>
     </div>


      <!-- btn tambah -->
      <div class="row mb-3">
         <div class="col-lg-6">
         <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                 Tambah Data Mahasiswa
             </button>
         </div>
      </div>

      <!-- btn cari -->
      <div class="row mb-3">
         <div class="col-lg-6">
           <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
             <div class="input-group">
               <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
               <div class="input-group-append">
                 <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
               </div>
             </div>
           </form>
         </div>
      </div>


      <!-- btn siswa -->
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
               <?php foreach( $data['mhs'] as $mhs ) : ?>
                 <li class="list-group-item">
                     <?= $mhs['nama']; ?>
                     <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; 
                     ?>" class="badge badge-secondary float-right ml-1" 
                     onclick="return confirm('yakin?')";>hapus</a>
                     <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; 
                     ?>" class="badge badge-info float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                     <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; 
                     ?>" class="badge badge-primary float-right ml-1">detail</a>
                 </li>
               <?php endforeach; ?>
            </ul>
               
        </div>
    </div>

</div>


<!--Modal-->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"aria-labelledby="judulModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
       </div>
       <div class="modal-body">
          
       <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post"> 
         <input type="hidden" name="id" id="id">
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
         </div>     

         <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="nrp">
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
         </div>

         <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
            <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
            <option value="Agribisnis Pembenihan Holtikultura">Agribisnis Pembenihan Holtikultura</option>

            </select>
         </div>

       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Tambah Data</button>
           </form> 
     </div>
    </div>
</div>