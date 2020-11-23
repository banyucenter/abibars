<!DOCTYPE html>
<html lang="en">
<head>
<title>Lelang Empati</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/bootstrap4/bootstrap.min.css';?>">
<link href="<?php echo base_url().'assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/jquery-ui-1.12.1.custom/jquery-ui.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/categories_styles.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/categories_responsive.css';?>">
</head>
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}


?>