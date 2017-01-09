<title><?php echo $title;?></title>
<!-- NAVBAR
================================================== -->
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://kharisma.ac.id/" target="_blank"><img src="assets/Images/logo stmik.png"></a>
          <h3 class="text-muted">KHARISMA Art (K-Art)</a></h3>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>Home</a></li>
            <li><a href="pendaftaran"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Pendaftaran</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>More <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <h5>About Us</h5>
                  <li role="separator" class="divider"></li>
                  <li><a href="visimisi"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>Visi dan Misi</a></li>
                  <li><a href="pengurus"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Pengurus</a></li>
                  <li><a href="kegiatan"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>Jadwal Kegiatan</a></li>
                  <li><a href="gallery"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active2"><a href="pembatalan">Pembatalan UKM<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="aktif">
              <!-- Button to open the modal login form -->
              <a onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>ADMIN</a>

              <!-- The Modal -->
              <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

              <!-- Modal Content -->
              <form class="modal-content animate" action="action_page.php">
                <div class="imgcontainer">
                  <img src="assets/Images/blank-avatar.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <div class="asu">
                  <label><b>Email</b></label>
                  <input type="text" placeholder="username@kharisma.ac.id" name="uname" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Masukkan Password" name="psw" required>

                  <button type="submit">Login</button>
                  <input type="checkbox" checked="checked"> Remember me
                  </div>
                </div>

                <div class="container">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">Password? </a></span>
                </div>
              </form>
            </div>

            </li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

   <!-- /.Dashboard -->
    <div class="col-sm-7 col-sm-offset-3 col-md-8 col-md-offset-2 main">
    <h1 class="page-header">Kontak Kami</h1>
      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="https://www.facebook.com/stmikkharismamks/" target="_blank"><img src=assets/Images/SosMed/facebooklogo2.png class="img-responsive gmbrkontak" alt="FACEBOOK"></a>
          <h3>Facebook</h3>
          <span><h4>@Ilfan Diago</h4></span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src=assets/Images/SosMed/line.png class="img-responsive gmbrkontak" alt="LINE"></a>
          <h3>LINE!</h3>
          <span><h4>@UKM Menggambar</h4></span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src=assets/Images/Pengurus/ilfan_line.png class="img-responsive gmbrkontak" alt="LINE"></a>
          <h3>LINE!</h3>
          <span><h4>@ilfandiago</h4></span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <img src=assets/Images/SosMed/instagramlogo.png class="img-responsive gmbrkontak" alt="LINE"></a>
          <h3>Instagram!</h3>
          <span><h4>@ukm_k.art</h4></span>
        </div>        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
