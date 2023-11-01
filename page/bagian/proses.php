<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])) {
     $id = $_POST['id'];
     $nama = $_POST['nama'];

     $submit =  $koneksi -> query ("INSERT INTO bagian VALUES (
          '$id',
          '$nama'
)");

if($submit){
     echo "<script>alert('Data Berhasil Disimpan');location.href='../bagian';</script>";
     echo "<script>alert('Data Gagal Disimpan !!');location.href='../bagian/tambah';</script>";
}

}else if(isset($_POST['edit'])) {
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $submit =  $koneksi -> query ("UPDATE Bagian SET
          id = '$id',
          nama ='$nama'
          WHERE
          id ='$id';
");

if($submit){
     echo "<script>alert('Data Berhasil Ubah');location.href='../bagian';</script>";
     echo "<script>alert('Data Gagal Ubah !!');location.href='../bagian/tambah';</script>";
}

}else if(isset($_GET['id'])) {
     $delete = $koneksi->query("DELETE FROM Bagian WHERE id = '$_GET[id]'");
if($delete){
     echo "<script>alert('Data Berhasil Hapus');location.href='../bagian';</script>";
}else{
     echo "<script>alert('Data Gagal Hapus !!');location.href='../bagian/tambah';</script>";
}
}