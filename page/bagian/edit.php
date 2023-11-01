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

$data = $koneksi->query("SELECT * FROM bagian WHERE id ='$id'")->fetch_array();
?>

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Bagian</h1>

    <!--card-->
    <section class="container">
     <form action="proses.php " method="post">
        <div class="card">
          <div class="card-body bg-dark">
               <div class="form-group row">

               <div class="row mb-3">
                    <label class="col-2" style="color: white;">Id</label>
                    <div class="col-10">
                         <input name="id" class="form-control" type="text" placeholder="Masukan NIK" value="<?=$data['id'] ?>" readonly required>
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nama</label>
                    <div class="col-10">
                         <input name="nama" class="form-control" type="text" placeholder="Masukan Nama" value="<?=$data['nama'] ?>" required>
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