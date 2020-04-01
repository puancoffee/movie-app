<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    // $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $post = $_POST['post'];    
    $tanggal = $_POST['tanggal'];  
    $detail = $_POST['detail'];    

    if( $nama=='' || $kategori=='' || $post=='' || $tanggal=='' || $detail==''){
        echo "Gagal Input, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }
    $query = "insert into movie (nama, kategori, post, tanggal, detail) values('$nama', '$kategori', '$post', '$tanggal', '$detail')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='dashboard.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>