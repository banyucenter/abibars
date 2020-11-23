<!DOCTYPE html>
<html lang="en">
<head>
<title>MBO BARS Method</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lelang Empati">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/bootstrap4/bootstrap.min.css';?>">
<link href="<?php echo base_url().'assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/main_styles.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/responsive.css';?>">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<!-- Core build with no theme, formatting, non-essential modules -->
<!-- include summernote css/js -->


</head>

<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}


?>