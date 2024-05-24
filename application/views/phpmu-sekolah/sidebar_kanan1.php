<br>
<div class="widget widget-search">
<?php
echo "<div class='header-search'>
	".form_open('berita/index')."
		<input type='text' placeholder='Masukkan Pencarian + Enter.....' name='kata' class='search-input' required/>
		<input type='submit' value='Search' name='cari' class='search-button'/>
	</form>
</div>";
?>
</div>
<br>

<div class="widget">
	<h3>External Link</h3>
	<ul style="padding:0px 15px 0px 15px" class="article-list">
		<?php 
			$link_terkait = $this->model_utama->view_ordering_limit('link_terkait','id_link','DESC',0,17);
			foreach ($link_terkait->result_array() as $row) {	
			echo "<li><a target='BLANK' href='$row[url]'>$row[judul] &#8599;</a></li>";
			}
		?>
	</ul>
</div>