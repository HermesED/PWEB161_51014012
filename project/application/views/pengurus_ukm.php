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
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Pengurus</a></li>
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


    <!-- /Gambar Tampilan Template DASHBOARD -->
    <div class="col-sm-10 col-sm-offset-6 col-md-10 col-md-offset-1 main">
          <h1 class="page-header">Pengurus</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Ketua</h4>
              <span class="text-muted">Ilfan Diago</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Sekertaris</h4>
              <span class="text-muted">Abed Nego Thendean</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 1</h4>
              <span class="text-muted">Jesslyn Chandra</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bendahara 2</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Anggota UKM</h2>
          <h4>Total = 42 Orang</h4>
          <div class="table-responsive">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jurusan</th>
                  <th>Angkatan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>52016001</td>
                  <td>Abed Nego Thendean</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013001</td>
                  <td>Aditya Tricahya Tunggal</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015004</td>
                  <td>Alvan Suwandy</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51014003</td>
                  <td>Andy Eric Wijaya</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015004</td>
                  <td>Billy Tanyawan</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>31014002</td>
                  <td>Bryant Federico</td>
                  <td>D3 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013007</td>
                  <td>Caroline Layadi</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015006</td>
                  <td>Evelyn Wilbert Wijaya</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>31014003</td>
                  <td>Faisal T. Supu</td>
                  <td>D3 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015008</td>
                  <td>Florencia Irena</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016016</td>
                  <td>Fudianto Ciuandi</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013019</td>
                  <td>Gabriel Irfon Elrohi Soen</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016017</td>
                  <td>Gilbert Thiodores</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015016</td>
                  <td>Girvan Benedict</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>31014004</td>
                  <td>Herfiani</td>
                  <td>D3 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>31014005</td>
                  <td>HERMELINDA LONDA</td>
                  <td>D3 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51014012</td>
                  <td>Hermes Engel Djohar</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015018</td>
                  <td>Hong William Fondy</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016019</td>
                  <td>Ian Yo Sall</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015019</td>
                  <td>Ilfan Diago</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015010</td>
                  <td>Ivan Darmawan</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016023</td>
                  <td>Jason Loardy</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015022</td>
                  <td>Jason Pratama Sunarji</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015011</td>
                  <td>Jessica Chandra</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015023</td>
                  <td>Jesslyn Chandra</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013026</td>
                  <td>Jip William Surya Arif Munandar</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015025</td>
                  <td>Kelvin Gowanto</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016025</td>
                  <td>Kevin Suharto</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52016028</td>
                  <td>Michael Pohan</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2016</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51013022</td>
                  <td>Muhammad Fahmi</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52014049</td>
                  <td>Panji Putra Dwiarya Aritanto</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015031</td>
                  <td>Prabowo Gosal</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015032</td>
                  <td>Renaldi Pranata</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013040</td>
                  <td>Richard</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52014020</td>
                  <td>Riswandy Tiryasuwiryo</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2014</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013044</td>
                  <td>Ronnie Chandiawan</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015036</td>
                  <td>Thias Angela Desan</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015038</td>
                  <td>Thomas Alvin Leonardy Liwang</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52012049</td>
                  <td>Waode Makani Daga</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2012</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52015041</td>
                  <td>Willianto</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>51015017</td>
                  <td>Yanoris Arnold Nigga</td>
                  <td>S1 - Sistem Informasi</td>
                  <td>2015</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>52013053</td>
                  <td>Yohannes Aldrin Pratama</td>
                  <td>S1 - Teknik Informatika</td>
                  <td>2013</td>
                  <td>Aktif</td>
                </tr>
              </tbody>
            </table>
            <hr>
          </div>
        </div>

