
<br>
<div class="widget">
	<h3>Tentang Kami</h3>
	<ul style="padding:0px 15px 0px 15px" class="article-list">
		<?php 
			$sekolah1 = $this->model_app->view_where_ordering('halamanstatis',array('kelompok'=>'1'),'urutan','ASC');
			foreach ($sekolah1 as $s) {
				echo "<li><a href='".base_url()."halaman/detail/$s[judul_seo]'>$s[judul]</a></li>";
			}
		?>								
	</ul>
</div>

<!--<div class="widget">
	<h3>Informasi</h3>
	<ul style="padding:0px 15px 0px 15px" class="article-list">
		<?php 
			$sekolah2 = $this->model_app->view_where_ordering('halamanstatis',array('kelompok'=>'2'),'urutan','ASC');
			foreach ($sekolah2 as $s) {
				echo "<li><a href='".base_url()."halaman/detail/$s[judul_seo]'>$s[judul]</a></li>";
			}
		?>										
	</ul>
</div> -->

<div class="widget">
	<h3>Sekilas Info</h3>
	<ul style="padding:0px 15px 0px 15px" class="article-block">
	    
	    <hr>	<p>Informasi</p>
<!--<p><a href="https://pendmasurabaya.site/halaman/detail/informasi"><strong>Lihat Semua Info Terkini &#10003;</p>-->
<p><a href="/informasi"><strong>Lihat Semua Info Terkini &#10003;</p> <hr> <br>

		<?php 
			$sekilas = $this->model_utama->view_ordering_limit('sekilasinfo','id_sekilas','DESC',0,7);
			foreach ($sekilas->result_array() as $row) {	
			$tgl = tgl_indo($row['tgl_posting']);
			echo "<li>
					<div class='article-list'>
						<span class='meta'>
							<a href='#'><span class='icon-text'>🕔</span>$tgl </a>
						</span>
						<h4><a style='color:#000' href='#Info'>$row[info]</a></h4>
					</div>
				  </li>";
			}
		?>		
	
	</ul>
</div>

<!--<i class="fa fa-eye" aria-hidden="true" style="color: green"></i>-->