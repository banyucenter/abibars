<!DOCTYPE html>
<html lang="en">
<head>
<title>Lelang Empati</title>
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/single_styles.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/tyles/single_responsive.css';?>">
<!-- Core build with no theme, formatting, non-essential modules -->
<!-- include summernote css/js -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontend/styles/jquery.lightbox.css';?>">


<style type="text/css">
        /* jQuery lightBox plugin - Gallery style */
        #gallery
        {
            background-color: white;
            padding: 10px;
            width: 520px;
        }
        #gallery ul
        {
            list-style: none;
        }
        #gallery ul li
        {
            display: inline;
        }
        #gallery ul img
        {
            border: 5px solid #3e3e3e;
            border-width: 5px 5px 20px;
        }
        #gallery ul a:hover img
        {
            border: 5px solid #fff;
            border-width: 5px 5px 20px;
            color: #fff;
        }
        #gallery ul a:hover
        {
            color: #fff;
        }
    </style>

</head>

<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}


?>