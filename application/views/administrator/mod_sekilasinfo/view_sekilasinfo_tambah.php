<ol><a href="https://drive.google.com/file/d/11EY-dZWVin1_itfWmWMf4kYrMhX0XhRB/view" onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=530, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank"><button>klik disini, lihat script yang digunakan</button></a></ol>

<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Info</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_sekilasinfo',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th scope='row' width='120px'>Tulis Info</th>             <td><textarea class='form-control' name='a' style='height:200px' required></textarea></td></tr>
                 <!--   <tr><th scope='row'>Foto</th>                     <td><input type='file' class='form-control' name='b'></td></tr> -->
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
