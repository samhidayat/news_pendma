<!DOCTYPE html>
<html lang="id">
	<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>INFORMASI</title>
        <!-- Favicons -->
  <link href="/portal/images/favicon.png" rel="icon">
  <link href="/portal/images/favicon.png" rel="apple-touch-icon">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--<link href="css/table1.css" rel="stylesheet">
        
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
		.align-middle{
			vertical-align: middle !important;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="https://pendmasurabaya.site/portal/images/favicon.png"></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/berita">Berita</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan Publik <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/dumas">Whistleblowing System</a></li>
            <li><a href="/layanan">Pendma</a></li>
            <li><a href="/portal">Link Terkait</a></li>
            <!--<li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
          <li><a href="/berita/indeks_berita">Sitemap</a></li>
          <li><a href="/agenda">Agenda</a></li>
          <li><a href="/hubungi">Hubungi Kami</a></li>
        </li>
      </ul>
      	<form class="navbar-form navbar-left">
        <div class="form-group">
					<!--
					-- Input Group adalah salah satu komponen yang disediakan bootstrap
					-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
					-->
					<div class="input-group">
						<!-- Buat sebuah textbox dan beri id keyword -->
						<input type="text" class="form-control" placeholder="Pencarian..." id="keyword">
						
						<span class="input-group-btn">
							<!-- Buat sebuah tombol search dan beri id btn-search -->
							<button class="btn btn-primary" type="button" id="btn-search">CARI</button>
							<a href="" class="btn btn-warning">RESET</a>
							</form>
						</span>
					</div>
				</div>
			</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<br>
    
		<div style="padding: 0 15px;">
			
			<!--
			-- Buat sebuah div dengan class row
			-- class row ini berfungsi untuk membagi-bagi layar
			-- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
			-- Atau lebih tepatnya sering disebut dengan GRID
			-- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
			-- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
			-- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
			-->
		
			<br>
			
			<!--
			-- Beri atribut id="view" pada tag div yang akan digunakan untuk menampung data 
			-- yang ada pada tabel siswa di database dan paginationnya
			-->
			<div id="view"><?php include "view.php"; ?></div>
		</div>
		
		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>
		
		<!-- Load File bootstrap.min.js yang ada difolder js -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Load file ajax.js yang ada di folder js -->
		<script src="js/ajax.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<hr>
		<div id="view"><?php include "footer.php"; ?></div>
	</body>
</html>

