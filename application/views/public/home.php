
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo base_url().'/assets/images/produk10.jpg';?>)">
						<div class="banner_category">
							<a href="<?php echo base_url().'home/yayasan';?>">Karya Yayasan</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner_item align-items-center" style="background-image:url(<?php echo base_url().'/assets/images/produk8.jpg';?>)">
						<div class="banner_category">
							<a href="<?php echo base_url().'home/volunteer';?>">Karya Seniman Voluntir</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Karya Seni</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".1">karya yayasan</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".2">seniman volunteer</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->
						<?php foreach($filter as $u) { ?> 
						<div class="product-item <?php echo $u->id_kategori;?>" style="padding:10px">
							<div class="product discount product_filter">
								<div class="product_image">
									<a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><img src="<?php echo base_url().'assets/images/produk/'.$u->cover;?>" alt="<?php echo $u->nama_produk;?>"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><?php echo $u->nama_produk;?></a></h6>
									<div class="product_price"><?php echo date('d F Y', strtotime($u->end_date));?></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>">Bid Sekarang</a></div>
						</div>
						<?php } ?>
						<!-- Product 2 -->

						
					</div>
				</div>
			</div>
		</div>
	</div>






