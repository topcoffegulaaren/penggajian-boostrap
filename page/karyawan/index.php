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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Karyawan</h1>

    <!--card-->
    <section class="container">
        <div class="card">
          <div class="card-header"><a href="tambah" class="btn bg-primary" style="margin-left: 10px; color: white">Tambah</a></div>
          <div class="card-body"></div>
        <table style="width: 100%;" id="example" class="table table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Mulai</th>
      <th scope="col">Gaji Pokok</th>
      <th scope="col">Status Karyawan</th>
      <th scope="col">Bagian</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $karyawan = $koneksi->query("SELECT * FROM karyawan ORDER BY nik DESC");
    while ($data = $karyawan->fetch_array()){
    ?>
    <tr>
     <td><?=$no++; ?></td>
     <td><?=$data['nik']?></td>
     <td><?=$data['nama']?></td>
     <td><?=$data['tanggal_mulai']?></td>
     <td><?=$data['gaji_pokok']?></td>
     <td><?=$data['status_karyawan']?></td>
     <td><?=$data['bagian_id']?></td> 
     <td>
      <a href="edit?id=<?=$data['nik']?>" class="btn bg-success" style="color: white;">Edit</a>
      <a href="proses?id=<?=$data['nik']?>" class="btn bg-danger" style="color: white;">Hapus</a>
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