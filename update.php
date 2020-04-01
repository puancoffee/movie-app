<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $post = $_POST['post'];    
    $tanggal = $_POST['tanggal'];  
    $detail = $_POST['detail'];    

    if($id=='' || $nama=='' || $kategori=='' || $post=='' || $tanggal=='' || $detail==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "update movie set nama='$nama', kategori='$kategori', post='$post', tanggal='$detail' where id='$id'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='dashboard.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>