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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah Data Penggajian</h1>

    <!--card-->
    <section class="container">
     <form action="proses.php " method="post">
        <div class="card">
          <div class="card-body bg-dark">
               <div class="form-group row">
               <div class="row mb-3">
                    <label class="col-2" style="color: white;">id</label>
                    <div class="col-10">
                         <input name="id" class="form-control" type="text" placeholder="Masukan id" required>
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Karyawan Nik</label>
                    <div class="col-10">
                         <input name="karyawan_nik" class="form-control" type="text" placeholder="Masukan karyawan NIK" required>
                    </div>
               </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Tahun</label>
                    <div class="col-10">
                         <input name="tahun" class="form-control" type="number" placeholder="Masukan Tahun" required>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Bulan</label>
                    <div class="col-10">
                         <input name="bulan" class="form-control" type="number" placeholder="Masukan Bulan" required> 
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Gaji Bayar</label>
                    <div class="col-10">
                         <input name="gaji_bayar" class="form-control" type="number" placeholder="Masukan Nominal" required> 
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