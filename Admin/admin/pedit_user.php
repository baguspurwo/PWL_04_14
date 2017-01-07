<?php
    include "koneksi.php";
	$id_user=$_GET['id_user'];
	$modal=mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="edit_user.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                    <input type="hidden" name="id_user"  class="form-control" value="<?php echo $r['id_user']; ?>" />
            <input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Usernama</label>
                    <input type="hidden" name="id_user"  class="form-control" value="<?php echo $r['id_user']; ?>" />
            <input type="text" name="username"  class="form-control" value="<?php echo $r['username']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Password</label>
                    <input type="hidden" name="id_user"  class="form-control" value="<?php echo $r['id_user']; ?>" />
            <input type="text" name="password"  class="form-control" value="<?php echo $r['password']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">status</label>
                    <input type="hidden" name="id_user"  class="form-control" value="<?php echo $r['id_user']; ?>" />
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
