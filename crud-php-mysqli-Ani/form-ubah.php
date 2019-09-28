  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data 
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $nama   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM is_siswa WHERE nama='$nama
          '") or die('Query Error : '.mysqli_error($db));
        while ($data     = mysqli_fetch_assoc($query)) {
          $nama          = $data['nama'];
          $username      = $data['username'];
          $password      = $data['password'];
          $email         = $data['email'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Userame</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $username; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="password" autocomplete="off" value="<?php echo $password; ?>" required>
              </div>
            </div>

            <div class="form-group">
               <label class="col-sm-2 control-label">Email</label>
               <div class="col-sm-3">
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
