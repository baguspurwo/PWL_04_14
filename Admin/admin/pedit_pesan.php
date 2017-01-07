<?php
    include "koneksi.php";
	$id_pesan=$_GET['id_pesan'];
	$modal=mysqli_query($koneksi,"SELECT * FROM pemesanan WHERE id_pesan='$id_pesan'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="edit_pesan.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Id Pemesanan</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Id Type</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Jumlah</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="jumlah"  class="form-control" value="<?php echo $r['jumlah']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Pemesan</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="nama_pemesan"  class="form-control" value="<?php echo $r['nama_pemesan']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">No KTP</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="no_ktp"  class="form-control" value="<?php echo $r['no_ktp']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tgl Pesan</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="tgl_pesan"  class="form-control" value="<?php echo $r['tgl_pesan']; ?>"/>

                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Tanggal Out</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="tgl_out"  class="form-control" value="<?php echo $r['tgl_out']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">E-mail</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="email"  class="form-control" value="<?php echo $r['email']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Telefon</label>
                    <input type="hidden" name="id_pesan"  class="form-control" value="<?php echo $r['id_pesan']; ?>" />
            <input type="text" name="telepon"  class="form-control" value="<?php echo $r['telepon']; ?>"/>
                </div>


                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Date">Date</label>
     				<input type="text" name="date"  class="form-control" value="<?php echo $r['date']; ?>" disabled/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>


        </div>
    </div>
