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

<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik ='$id'")->fetch_array();
?>

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Karyawan</h1>

    <!--card-->
    <section class="container">
     <form action="proses.php " method="post">
        <div class="card">
          <div class="card-body bg-dark">
               <div class="form-group row">

               <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nik</label>
                    <div class="col-10">
                         <input name="nik" class="form-control" type="text" placeholder="Masukan NIK" value="<?=$data['nik'] ?>" readonly required>
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nama</label>
                    <div class="col-10">
                         <input name="nama" class="form-control" type="text" placeholder="Masukan Nama" value="<?=$data['nama'] ?>" required>
                    </div>
               </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Tanggal Mulai</label>
                    <div class="col-10">
                         <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan tanggal" value="<?=$data['tanggal_mulai'] ?>" required>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Gaji Pokok</label>
                    <div class="col-10">
                         <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan Nominal" value="<?=$data['gaji_pokok'] ?>" 
                         > 
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Status Karyawan</label>
                    <div class="col-10">
                         <select class="form-bagian" name="status_karyawan" id="">
                              <option value="Tetap" <?= $data['status_karyawan'] == 'Tetap' ? "selected" :""?>>Tetap</option>
                              <option value="Kontrak" <?= $data['status_karyawan'] == 'Kontrak' ? "selected" :""?>>Kontrak</option>
                              <option value="Magang" <?= $data['status_karyawan'] == 'Magang' ? "selected" :""?>>Magang</option>
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
                              <option value="<?=$row['id']?>" <?php if ($row['id'] == $data['bagian_id'] ){
                                   echo "selected";
                              }?>><?=$row['nama']?></option>
                              <?php }?>
                         </select>
                    </div>
                    </div>

               </div>

               </div>

          </div>

          <div class="card-footer">
               <button type="submit" name="edit" class="btn btn-success">Simpan</button>
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