



	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="<?php echo base_url().'';?>">Home</a></li>
						<li class="active"><a href="<?php echo base_url().'home/semuakarya';?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Semua Karya</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">
							<div class="container">
							<img src="<?php echo base_url().'assets/images/banner.png';?>" class="img-fluid">
							</div>
								

								<!-- Product Grid -->

								<div class="product-grid">

                                    <!-- Product 1 -->
                                    <?php 
                                    foreach($semua as $u){ 
                                    ?>

									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><img src="<?php echo base_url().'assets/images/produk/'.$u->cover;?>" alt=""></a>
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>"><?php echo $u->nama_produk;?></a></h6>
												<div class="product_price"><?php echo rupiah($u->minHarga);?> - <?php echo rupiah($u->maxHarga);?></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo base_url().'home/detail/'.$u->id_produk;?>">Ikut Lelang</a></div>
									</div>
                                    <?php } ?>
									<!-- Product 2 -->

									
								</div>
                                <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                <?php 
                                    echo $this->pagination->create_links();
                                    ?>
                                    </div>
                                </div>
                            </div>
                                                        

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
