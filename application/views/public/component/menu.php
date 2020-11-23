<body>
<div class="super_container">
	<!-- Header -->
	<header class="header trans_300">
	
		<!-- Top Navigation -->
		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">tel: +1-800-427-8638 | E: info@stikesmutiaramahakam.ac.id</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<li class="account">
									<a href="#">
									<?php 
										if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==1)){
											echo "Selamat Datang, ", $this->session->userdata('userName');
										?>
											<i class="fa fa-angle-down"></i>
											<div class="dis">
											</a>
											<ul class="account_selection">
												
												<li><a href="<?php echo base_url().'profil';?>"><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a></li>
												<li><a href="<?php echo base_url().'user/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Keluar</a></li>	

											</ul>

										<?php } 
										
										
										else if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==2)){
											echo "Selamat Datang, ", $this->session->userdata('userName');
										?>
											<i class="fa fa-angle-down"></i>
											<div class="dis">
											</a>
											<ul class="account_selection">
												<?php $id = $this->session->userdata('userId'); ?>

												<li><a href="<?php echo base_url().'profil';?>"><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a></li>
												<li><a href="<?php echo base_url().'produk/tampil/'.$id;?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Produk Anda</a></li>
												<li><a href="<?php echo base_url().'user/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Keluar</a></li>	

											</ul>

										<?php }
										else if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==3)){
											echo "Selamat Datang, ", $this->session->userdata('userName');
										?>
											<i class="fa fa-angle-down"></i>
											<div class="dis">
											</a>
											<ul class="account_selection">
												<?php $id = $this->session->userdata('userId'); ?>

												<li><a href="<?php echo base_url().'profil';?>"><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a></li>	
												<li><a href="<?php echo base_url().'lelang';?>"><i class="fa fa-user" aria-hidden="true"></i>Riwayat Lelang</a></li>
												<li><a href="<?php echo base_url().'user/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Keluar</a></li>	
											</ul>

										<?php
										}else {	
										?>
											Masuk Akun
											<i class="fa fa-angle-down"></i>
											<div class="dis">
											</a>
											<ul class="account_selection">
												<li><a href="#" data-toggle="modal" data-target="#dialogRole"><i class="fa fa-user-plus" aria-hidden="true"></i>Daftar</a></li>
												<li><a href="<?php echo base_url().'user/login';?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Masuk</a></li>	
											</ul>

									<?php 
										}
										
									?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
                        <a href="#">MBO-BARS</a>						
                        </div>
						<nav class="navbar ">
							<ul class="navbar_menu">
										<?php 
										if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==3)){
										?>
								<!-- menu beli-->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Beli
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="<?php echo base_url().'home/semuakarya';?>">Semua Karya Seni</a>
									<a class="dropdown-item" href="<?php echo base_url().'home/yayasan';?>">Karya Yayasan</a>
									<a class="dropdown-item" href="<?php echo base_url().'home/volunteer';?>">Karya Seniman Volunteer</a>
									</div>
								</li>
								<?php } else if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==2)){ ?>
								<!-- menu jual-->
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Jual
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Cara Menjual</a>
									<a class="dropdown-item" href="<?php echo base_url().'produk/tambah';?>">Jual Karya</a>
									</div>
								</li>
								<?php } else if($this->session->userdata('loggedIn') && ($this->session->userdata('userLevel')==1)){ ?>
								<!-- menu jual-->
								<li><a href="<?php echo base_url().'profil';?>">Home</i></a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Data Master
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="<?php echo base_url().'auth/dosen';?>">Dosen</a>
									<a class="dropdown-item" href="<?php echo base_url().'auth/mahasiswa';?>">Mahasiswa</a>
									<a class="dropdown-item" href="<?php echo base_url().'auth/direktur';?>">Direktur</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Data Quesioner
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="<?php echo base_url().'auth/quisioner/mbo';?>">MBO</a>
									<a class="dropdown-item" href="<?php echo base_url().'auth/quisioner/bars';?>">BARS</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Form Penilaian
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="<?php echo base_url().'auth/penilaian/mbo';?>">MBO</a>
									<a class="dropdown-item" href="<?php echo base_url().'auth/penilaian/bars';?>">BARS</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Hasil Penilaian
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="<?php echo base_url().'auth/penilaian/hasil_mbo';?>">MBO</a>
									<a class="dropdown-item" href="<?php echo base_url().'auth/penilaian/hasil_bars';?>">BARS</a>
									</div>
								</li>
								<?php } else { ?>
									
								
								<?php } ?>
								
							</ul>
							<ul class="navbar_user">
								<!--<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>-->
								
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="fs_menu_overlay"></div>

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#" data-toggle="modal" data-target="#dialogRole"><i class="fa fa-sign-in" aria-hidden="true"></i>Register</a></li>
						<li><a href="<?php echo base_url().'user/login';?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Login</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="<?php echo base_url().'';?>">home</a></li>
				<li class="menu_item"><a href="<?php echo base_url().'home/semuakarya';?>">beli</a></li>
				<li class="menu_item"><a href="<?php echo base_url().'user/register/penjual';?>">jual</a></li>
				<li class="menu_item"><a href="<?php echo base_url().'home/semuakarya';?>">kategori</a></li>
			</ul>
		</div>
	</div>


