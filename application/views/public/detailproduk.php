<div style="margin-top:165px"></div>

<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
                <h3>Detail Produk Lelang</h3>
				</div>

			</div>
		</div>

					<?php 
						foreach($detail as $u){ 
					?>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(<?php echo base_url().'assets/images/produk/'.$u->cover;?>)"></div>
							</div>
						</div>
						
					</div>
					
				</div>
				<br>
					<div class="text-center">
					<div id="gallery">
					<ul>
					<?php foreach($galeri as $g){ ?>
						<li><a href="<?php echo base_url().'assets/images/produk/galeri/'.$g->foto;?>" title="<?php echo $g->nama_foto;?>">
							<img src="<?php echo base_url().'assets/images/produk/galeri/'.$g->foto;?>" height="80"  alt="" />
						</a></li>
					<?php } ?>	
					</ul>
				</div>
					</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
					<br>
						<h3><?php echo $u->nama_seniman; ?></h3>
						<h5><?php echo $u->nama_produk; ?></h5>
						<p>Bahan : <?php echo $u->bahan; ?></p>
						<p>Image : <?php echo $u->ukuran_image; ?></p>
						<p>Sheet : <?php echo $u->ukuran_sheet; ?></p>
						<p>Frame : <?php echo $u->ukuran_frame; ?></p>
						<p>Edisi : <?php echo $u->edisi; ?></p>
						<p>Lokasi : <?php echo $u->lokasi; ?></p>
					</div>

					<div class="product_color">
					<table class="table table-bordered">
						<thead>
							<tr>
							<td scope="col">Akhir Lelang</td>
							<td scope="col"><?php echo date('d F Y', strtotime($u->end_date));?></td>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>Durasi</td>

							
							<td>
								<?php
									$awal  = date_create($u->end_date);
									$akhir = date_create(); // waktu sekarang
									$diff  = date_diff( $awal, $akhir );
									echo $diff->d . ' hari, ';
									echo $diff->h . ' jam, ';
									echo $diff->i . ' menit, ';
									echo $diff->s . ' detik, ';
								?>
							</td>
							</tr>
							<tr>
							<td>Estimasi Harga</td>
							<td><?php echo rupiah($u->minHarga); ?> - <?php echo rupiah($u->maxHarga); ?></td>
							</tr>
							<tr>
							<td scope="col">Bid Terakhir</th>
							<td scope="col"> <?php echo rupiah($u->current_bid);?></td>
							</tr>
							<tr>
							<td>
								Jumlah Bid
							</td>
							<td>
							<?php 
								foreach($countbid as $c){ 
									echo $c->count;
								}
							?>
						    </td>
							</tr>
						</tbody>
					</table>
					</div>
					
					<form action="<?php echo base_url(); ?>home/aksi_bid" method="post">
						<div class="form-group">
							<label>Masukan Bid Maximal</label>
							<input type="hidden" name="id_produk" value="<?php echo $u->id_produk; ?>" required>
							<!-- <input type="text" name="" class="form-control" id="rupiah" value="<?php echo $u->current_bid;?>" required>
							<input type="hidden" name="jumlahBid" class="form-control" id="xrupiah" required> -->
							
							<select name="jumlahBid" class="form-control">
							<?php  
								$min = $u->minHarga;
								$max = $u->maxHarga;
								
								for ($x = $min; $x <= $max; $x+=100000) {
								echo "<option value='$x'>".rupiah($x)."</option>";
								}
							?>
							</select>
						</div>
						<?php 

						$statuslogin = $this->session->userdata('loggedIn'); 
						if($statuslogin){
							?>
							<button type="submit" class="btn btn-dark">Ikut Lelang</button><?php
						} else { ?>
							<a class="btn btn-danger" href="<?php echo base_url().'user/login';?>">Ikut Lelang</a>
						<?php } ?>
						
					</form>
				</div>
			</div>
		</div>

	</div>

	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab"><span>Detail Produk Lelang</span></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="">
									<h5>Tentang Produk</h5>
								</div>
								<div class="tab_text_block">
									<p><?php echo $u->keterangan;?></p>
								</div>
							</div>
							<div class="col-lg-5 desc_col">
								<div class="">
									<h5>Keterangan</h5>
								</div>
								<div class="tab_text_block">
								<table class="table table-bordered">
									
										<tr>
										<td>Kondisi</td>
										<td><?php echo $u->kondisi; ?> </td>
										</tr>
										<tr>
										<td scope="col">Metode Pembayaran</th>
										<td scope="col"><?php echo $u->metode_pembayaran;?></td>
										</tr>
										<tr>
										<td scope="col">Pengiriman</th>
										<td scope="col"><?php echo $u->informasi_shipping;?></td>
										</tr>
									</tbody>
								</table>
								</div>
							</div>
						</div>
						
					</div>

					

							
					</div>

				</div>
			</div>
		</div>

	</div>

	<?php } ?>