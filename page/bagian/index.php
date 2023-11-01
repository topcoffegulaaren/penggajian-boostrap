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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Bagian</h1>

    <!--card-->
    <section class="container">
        <div class="card">
          <div class="card-header"><a href="tambah" class="btn bg-primary" style="margin-left: 10px; color: white">Tambah</a></div>
          <div class="card-body"></div>
        <table style="width: 100%;" id="example" class="table table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $bagian = $koneksi->query("SELECT * FROM bagian ORDER BY id DESC");
    while ($data = $bagian->fetch_array()){
    ?>
    <tr>
     <td><?=$data['id']?></td>
     <td><?=$data['nama']?></td>
     <td>
      <a href="edit?id=<?=$data['id']?>" class="btn bg-success" style="color: white;">Edit</a>
      <a href="proses?id=<?=$data['id']?>" class="btn bg-danger" style="color: white;">Hapus</a>
     </td> 
    </tr>
    <?php }?>  
  </tbody>
</table>
        </div>
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