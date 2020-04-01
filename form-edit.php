<?php
    require_once('koneksi.php');

    if($_GET['id']!=null){
        $id = $_GET['id'];

        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();

        if($koneksi->connect_error){
            echo "Gagal Koneksi : ". $koneksi->connect_error;
        }

        $query = "select * from movie where id='$id'";
        $data = $koneksi->query($query);

    }
?>

<?php
    include_once('template/head.php');
?>
<body>
    
    <?php
        if($data->num_rows <= 0){
            echo "Data tidak ditemukan";
        } else{
            while($row = $data->fetch_assoc()){
                $id         = $row['id'];
                $nama       = $row['nama'];
                $kategori   = $row['kategori'];
                $post      = $row['post'];
                $tanggal   = $row['tanggal'];
                $detail   = $row['detail'];
            }
        }
    ?>

    <div class="row">
        <div class="container">
        <h2><i class="fa fa-pencil"></i> Edit Data</h2>
        <hr>
        <form class="form-horizontal" method="post" action="update.php">

            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">

            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="<?php echo $nama;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan kategori" value="<?php echo $kategori;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="post" class="col-sm-2 control-label">Post by</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="post" name="post" placeholder="Masukan Nama" value="<?php echo $post;?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $tanggal;?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="detail" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="detail" name="detail" placeholder="Tanggal" value="<?php echo $detail;?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <footer>
        <!-- <p class="text-center">Copyright &copy; 2018 by Candra Septia Cahya</p> -->
    </footer>
</body>
<?php
    include_once('template/script.php');
?>
</html>

