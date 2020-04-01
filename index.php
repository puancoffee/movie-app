<?php 
    include_once('template/head.php');
?>
<body>
<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">ADMIN LOGIN</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="post" action="cek_login.php">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" name="username" placeholder="username" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" placeholder="password" class="form-control form-control-sm" name="password">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
				
			</form>
		</div>
	</div>
</div>
</div>

	<div>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	</div>
</body>
<?php 
    include_once('template/script.php');
?>
</html>
