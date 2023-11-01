<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../template/head.php';
?>

<!-- Navbar -->
<?php
include '../../template/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah Data Karyawan</h1>

    <!--card-->
    <section class="container">
     <form action="proses.php " method="post">
        <div class="card">
          <div class="card-body bg-dark">
               <div class="form-group row">

               <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nik</label>
                    <div class="col-10">
                         <input name="nik" class="form-control" type="text" placeholder="Masukan NIK" required>
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nama</label>
                    <div class="col-10">
                         <input name="nama" class="form-control" type="text" placeholder="Masukan Nama" required>
                    </div>
               </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Tanggal Mulai</label>
                    <div class="col-10">
                         <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan tanggal" required>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Gaji Pokok</label>
                    <div class="col-10">
                         <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan Nominal" required
                         > 
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Status Karyawan</label>
                    <div class="col-10">
                         <select class="form-bagian" name="status_karyawan" id="">
                              <option value="">--Pilih--</option>
                              <option value="Tetap">Tetap</option>
                              <option value="Kontrak">Kontrak</option>
                              <option value="Magang">Magang</option>
                         </select>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Bagian</label>
                    <div class="col-10">
                         <select class="form-bagian" name="bagian_id">
                         <option value="">--Pilih--</option>
                              <?php
                                  $bagian = $koneksi->query("SELECT*FROM bagian");

                                  foreach($bagian as $row){
                              ?>
                              <option value="<?=$row['id']?>"><?=$row['nama']?></option>
                              <?php }?>
                         </select>
                    </div>
                    </div>

               </div>

               </div>

          </div>

          <div class="card-footer">
               <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
               <button type="reset" name="clear" class="btn btn-danger">Clear</button>
          </div>
        </div>
        </form>
    </section>

    <!--End card-->
    <?php
include '../../template/script.php';
?>
</body>


</html>

<script>
  new DataTable('#example');
</script>