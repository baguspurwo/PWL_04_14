<!doctype html>
<html lang="en">
<head>
<title></title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Aguzrybudy" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
</br>
    <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
      <th>Status</th>
      <th>Action</th>
    </thead>
<?php
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"SELECT * FROM user");
  while($r=mysqli_fetch_array($modal)){
  $no++;

?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['username']; ?></td>
      <td><?php echo  $r['password']; ?></td>
      <td><?php echo  $r['status']; ?></td>
      <td>
         <a href="#" class='open_modal' id='<?php echo  $r['id_user']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('delete_user.php?&id_user=<?php echo  $r['id_user']; ?>');">Delete</a>
      </td>
  </tr>


<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add-->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data Using User </h4>
        </div>

        <div class="modal-body">
          <form action="save_user.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="nama"  class="form-control" placeholder="Nama" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Username</label>
                  <input type="text" name="username"  class="form-control" placeholder="Username" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Password</label>
                  <input type="text" name="password"  class="form-control" placeholder="Password" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Status</label>
                  <input type="text" name="status"  class="form-control" placeholder="Status" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Date">Date</label>
                  <input type="text" name="date"  class="form-control" plcaceholder="Timestamp" disabled value="Timestamp" required/>
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



            </div>


        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>

      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "pedit_user.php",
    			   type: "GET",
    			   data : {id_user: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>
