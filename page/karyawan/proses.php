<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])) {
     $nik = $_POST['nik'];
     $nama = $_POST['nama'];
     $tanggal_mulai= $_POST['tanggal_mulai'];
     $gaji_pokok = $_POST['gaji_pokok'];
     $status_karyawan = $_POST['status_karyawan'];
     $bagian_id = $_POST['bagian_id'];

     $submit =  $koneksi -> query ("INSERT INTO karyawan VALUES (
          '$nik',
          '$nama',
          '$tanggal_mulai',
          '$gaji_pokok',
          '$status_karyawan',
          '$bagian_id'
)");

if($submit){
     echo "<script>alert('Data Berhasil Disimpan');location.href='../karyawan';</script>";
     echo "<script>alert('Data Gagal Disimpan !!');location.href='../karyawan/tambah.php';</script>";
}

}else if(isset($_POST['edit'])) {
     $nik = $_POST['nik'];
     $nama = $_POST['nama'];
     $tanggal_mulai= $_POST['tanggal_mulai'];
     $gaji_pokok = $_POST['gaji_pokok'];
     $status_karyawan = $_POST['status_karyawan'];
     $bagian_id = $_POST['bagian_id'];

     $submit =  $koneksi -> query ("UPDATE karyawan SET
          nik = '$nik',
          nama ='$nama',
          tanggal_mulai ='$tanggal_mulai',
          gaji_pokok ='$gaji_pokok',
          status_karyawan ='$status_karyawan',
          bagian_id ='$bagian_id'
          WHERE
          nik ='$nik';
");

if($submit){
     echo "<script>alert('Data Berhasil Ubah');location.href='../karyawan';</script>";
     echo "<script>alert('Data Gagal Ubah !!');location.href='../karyawan/tambah.php';</script>";
}

}else if(isset($_GET['id'])) {
     $delete = $koneksi->query("DELETE FROM karyawan WHERE nik = '$_GET[id]'");
if($delete){
     echo "<script>alert('Data Berhasil Hapus');location.href='../karyawan';</script>";
}else{
     echo "<script>alert('Data Gagal Hapus !!');location.href='../karyawan/tambah.php';</script>";
}
}