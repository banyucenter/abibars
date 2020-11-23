

	<div class="best_sellers">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
							<?php 
							foreach($produkowl as $u){ 
							?>
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><img src="<?php echo base_url().'assets/images/produk/'.$u->cover;?>" alt="<?php echo $u->nama_produk;?>"></a>
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><?php echo $u->nama_produk;?></a></h6>
											<p>Batas Waktu Lelang</p>
                                            <div class="product_price"><?php echo date('d F Y', strtotime($u->end_date));?></span></div>
                                            
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							
							</div>
						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
