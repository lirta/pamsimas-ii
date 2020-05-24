<div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                           <?php echo "    <img alt='image' class='img-circle' src='foto/$_SESSION[foto]' width='80px' />"; ?>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo "$_SESSION[nama]"; ?></strong><br><strong class="font-bold"><?php echo "$_SESSION[jabatan]"; ?></strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="login.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="home.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="pegawai_view.php"><i class="fa fa-users"></i> <span class="nav-label">Pegawai</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Penilaian</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="kategori_view.php">Kategori Penilaian</a></li>
                            <li><a href="penilaian_add.php">penilaian</a></li>
                            <li><a href="penilaian_view.php">Hasil Penilaian</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kuesioner</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="Kuesioner_kategori_view.php">Kategori Kuesioner</a></li>
                            <li><a href="kuesioner_nilai_view.php">Kuesioner Nilai</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="laporan_view.php"><i class="fa fa-envelope"></i> <span class="nav-label">laporan </span></a>
                    </li>
                </ul>

            </div>