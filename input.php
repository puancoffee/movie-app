<?php
    include_once('template/head.php');
?>
<body>
    <div class="app">
    <div id="sidenav">
      <div class="wrapper">
        <div class="logo">
          <a href="#">VIDEO CENTER</a>
          <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="menu">
          <ul>
			
            <!-- If login as admin -->
            <li>
              <a href="#">DASHBOARD</a>
                <ul>
                  <li><a href="dashboard.php">LIST MOVIE</a></li>
                  <li  class="active"><a href="input.php">TAMBAH MOVIE</a></li>
                </ul>
            </li>
            <li><a href="logout.php" class="logout">LOGOUT</a></li>
          </ul>
        </div>
		<div>
		
		</div>
      </div>
    </div>
       <div class="row">
       <div class="col-sm-2">
       </div>
       <div class="col-sm-10">
       <div class="container">
        <h2><i class="fa fa-plus"></i> Tambah Movie</h2>
        <hr>
        <form id="inputmahasiswa" class="form-horizontal" method="post" action="simpan.php">

            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan judul film" required>
                </div>
            </div>

            <div class="form-group">
                <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan kategori" required>
                </div>
            </div>

            <div class="form-group">
                <label for="post" class="col-sm-2 control-label">Post by</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="post" name="post" placeholder="Masukan nama" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-4">
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="detail" class="col-sm-2 control-label">Detail</label>
                <div class="col-sm-4">
                <textarea type="text" class="form-control" id="detail" name="detail" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-info">Tambah</button>
                </div>
            </div>
            </form>
        </div>
       </div>
       </div>
    </div>

    <footer>
        <!-- <p class="text-center">Copyright &copy; 2018 by Candra Septia Cahya</p> -->
    </footer>
</body>
<?php
    include_once('template/script.php');
?>
<script>
    $(document).ready(function(){
        $("#nama").keyup(function(){
            $pattern = "[^a-zA-Z ]";
            if(preg_match($pattern,$string)) {
                alert("gagal");
            } else {
                alert("berhasil");
            }
        });

        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        });

        
    });
    
</script>
</html>

