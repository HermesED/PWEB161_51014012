<title><?php echo $title;?></title>
<!-- NAVBAR
================================================== -->
  <body id="page-top">
    
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
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>Jadwal Kegiatan</a></li>
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/Images/Kegiatan/aktifitas_rapat1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="pengurus" role="button">Pengurus UKM</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/Images/Kegiatan/aktifitas_rapat2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="page-header">
        <h1>Jadwal Kegiatan</h1>
    </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">15/11/2016</h4>
              <p class="list-group-item-text">Rapat Pertama UKM Seni Gambar.<br>Pembahasan:<br>1. Pemilihan Ketua UKM<br>2. Perencanaan Penamaan UKM<br>3. Perencanaan Logo UKM</p>
            </a>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Telah Selesai</h3>
                  </div>
                  <div class="panel-body">
                    <p class="list-group-item-text">Hasil:<br>1. Ketua UKM: Ilfan Diago<br>2. Nama UKM: Pending<br>3. Logo UKM : Pending</p>
                  </div>
                </div>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">21/11/2016</h4>
              <p class="list-group-item-text">Rapat Kedua.<br>Pembahasan:<br>1. Voting Penamaan UKM<br>2. Pembicaraan Project Satu Semester<br>3. Visi dan Misi<br>4. Pembuatan Logo UKM</p>
            </a>
            <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Telah Selesai</h3>
                  </div>
                  <div class="panel-body">
                    <p class="list-group-item-text">Hasil:<br>1. Nama UKM: K-Art (Kharisma Art)<br>2. Project: Flipbook 50 Lembar + Doodle<br>3. ......<br>4. Tugas Minggu Depan (Dibuat oleh seluruh anggota UKM)</p>
                  </div>
                </div>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">28/11/2016</h4>
              <p class="list-group-item-text">Pertemuan Ketiga: Pengumpulan dan Pemilihan Tugas Logo UKM</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>
    <hr>