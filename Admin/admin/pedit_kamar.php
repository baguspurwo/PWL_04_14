<?php
    include "koneksi.php";
	$id_ruang=$_GET['id_ruang'];
	$modal=mysqli_query($koneksi,"SELECT * FROM ruang_kamar WHERE id_ruang='$id_ruang'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="edit_kamar.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Id Tipe</label>
                    <input type="hidden" name="id_ruang"  class="form-control" value="<?php echo $r['id_ruang']; ?>" />
            <input type="text" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Kamar</label>
                    <input type="hidden" name="id_ruang"  class="form-control" value="<?php echo $r['id_ruang']; ?>" />
            <input type="text" name="nama_kamar"  class="form-control" value="<?php echo $r['nama_kamar']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Status</label>
                    <input type="hidden" name="id_ruang"  class="form-control" value="<?php echo $r['id_ruang']; ?>" />
            <input type="text" name="status"  class="form-control" value="<?php echo $r['status']; ?>"/>
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
