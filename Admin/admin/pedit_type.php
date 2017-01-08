<?php
    include "koneksi.php";
	$id_type=$_GET['id_type'];
	$modal=mysqli_query($koneksi,"SELECT * FROM tipe_kamar WHERE id_type='$id_type'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="edit_type.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Id Tipe</label>
                    <input type="hidden" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>" />
            <input type="text" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Jenis Kamar</label>
                    <input type="hidden" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>" />
            <input type="text" name="jenis_kamar"  class="form-control" value="<?php echo $r['jenis_kamar']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Harga</label>
                    <input type="hidden" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>" />
            <input type="text" name="harga"  class="form-control" value="<?php echo $r['harga']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Fasilitas</label>
                    <input type="hidden" name="id_type"  class="form-control" value="<?php echo $r['id_type']; ?>" />
            <input type="text" name="fasilitas"  class="form-control" value="<?php echo $r['fasilitas']; ?>"/>
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
