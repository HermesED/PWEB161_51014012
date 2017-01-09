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
            <li><a href="kontak"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>More <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <h5>About Us</h5>
                  <li role="separator" class="divider"></li>
                  <li><a href="visimisi"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>Visi dan Misi</a></li>
                  <li><a href="pengurus"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Pengurus</a></li>
                  <li><a href="kegiatan"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>Jadwal Kegiatan</a></li>
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a></li>
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

    <h1>Week 2: Hasil Gambar</h1>

    <div class="container blabla">
      <!-- Karena we bini masih berupa concept dan prototype, maka bagian gallery dibiarkan begini dulu
      (Tidak efektif dan efisien).. Nanti kalau dikembangkan bisa pake google, atau fitur drag and drop gambar-->
      <div class="row">
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a1.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a2.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a3.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a4.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a5.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a7.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a8.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a9.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a10.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a11.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a12.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a13.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a14.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a15.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a17.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a18.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a19.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a20.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a21.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a22.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a23.jpg">
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <img class="gmbr" src="assets/Images/Gallery/Week2/a24.jpg">
        </div><!-- /.col-lg-2 -->
      </div><!-- /.row -->
      <hr>
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
