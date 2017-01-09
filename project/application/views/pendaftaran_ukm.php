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
            <li class="active"><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Pendaftaran</a></li>
            <li><a href="kontak"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Contact</a></li>
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


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FORM PENDAFTARAN<br>ANGGOTA BARU</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nama Lengkap Mahasiswa</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap Anda" id="name" required data-validation-required-message="Tolong Masukkan Nama Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>NIM - Nomor Induk Mahasiswa</label>
                                <input type="address" class="form-control" placeholder="Masukkan NIM Anda" id="address" required data-validation-required-message="Tolong Masukkan NIM Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>Pilih Program Studi</label>
                               <div class="checkbox">
                                    <input type="checkbox" value="S1 - Sistem Informasi" required data-validation-required-message="Tolong Pilih Program Studi Anda.">S1 - Sistem Informasi
                                    <p class="help-block text-danger"></p>
                               </div>
                               <div class="checkbox">
                                    <input type="checkbox" value="S1 - Teknik Informatika" required data-validation-required-message="Tolong Pilih Program Studi Anda.">S1 - Teknik Informatika
                                    <p class="help-block text-danger"></p>
                               </div>
                               <div class="checkbox">
                                    <input type="checkbox" value="D3 - Sistem Informasi" required data-validation-required-message="Tolong Pilih Program Studi Anda.">D3 - Sistem Informasi
                                    <p class="help-block text-danger"></p>
                               </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>Pengalaman Software? (Optional)</label>
                               <div class="checkbox">
                                    <input type="checkbox" value="Paint">Paint
                                    <p class="help-block text-danger"></p>
                               </div>
                               <div class="checkbox">
                                    <input type="checkbox" value="Corel Draw">Corel Draw
                                    <p class="help-block text-danger"></p>
                               </div>
                               <div class="checkbox">
                                    <input type="checkbox" value="Adobe Photoshop">Adobe Photoshop
                                    <p class="help-block text-danger"></p>
                               </div>
                               <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="address" class="form-control" placeholder="Software Lainnya">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Angkatan</label>
                                <input type="address" class="form-control" placeholder="Masukkan Tahun Angkatan Anda" id="address" required data-validation-required-message="Tolong Masukkan Tahun Angkatan Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Alamat Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Tolong Masukkan Email Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nomor Handphone</label>
                                <input type="tel" class="form-control" placeholder="Nomor Handphone Anda" id="phone" required data-validation-required-message="Tolong Masukkan Nomor Handphone Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">SELESAI</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr>