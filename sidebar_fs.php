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
                        <a href="penilaian_pegawai.php"><i class="fa fa-diamond"></i> <span class="nav-label">Hasil Penilaian</span></a>
                    </li>
                    <li>
                        <a href="laporan_view_fs.php"><i class="fa fa-envelope"></i> <span class="nav-label">laporan </span></a>
                    </li>
                </ul>

            </div>