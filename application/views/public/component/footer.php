<!-- Modal -->
<div class="modal fade" id="dialogRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrasi Sebagai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form class="form-controll">
		<label class="radio-inline">
		<input type="radio" name="optRole" id="optPembeli" checked>  Pembeli
		</label>
		<label class="radio-inline">
		<input type="radio" name="optRole" id="optPenjual">  Penjual
		</label>
		</label>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="goRegistrasi();">Pilih</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function goRegistrasi() {

		if (document.getElementById('optPembeli').checked) {
			window.open("<?php echo base_url().'user/register/pembeli';?>","_self");
		} else if (document.getElementById('optPenjual').checked) {
			window.open("<?php echo base_url().'user/register/penjual';?>","_self");
		}
}

</script>



<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                    <ul class="footer_nav">
                        <!-- <li><a href="#">Jual</a></li>
                        <li><a href="#">Beli</a></li>
                        <li><a href="contact.html">Hubungi Kami</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_nav_container">
                    <div class="cr">©2020 All Rights Reserverd. MBO-BARS Method <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<script src="<?php echo base_url().'assets/frontend/js/jquery-3.2.1.min.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/js/jquery.lightbox.min.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/styles/bootstrap4/popper.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/styles/bootstrap4/bootstrap.min.js';?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url().'assets/frontend/plugins/Isotope/isotope.pkgd.min.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/plugins/easing/easing.js';?>"></script>
<script src="<?php echo base_url().'assets/frontend/js/custom.js';?>"></script>
<script src="js/categories_custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<script type="text/javascript">
        $(function() {
        var settings = {fixedNavigation:true};
        $('#gallery a').lightBox(settings);
        });
    </script>


<script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd-mm-yyyy",
                    
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true,
                    
                });
                $('#tanggalakhir').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd-mm-yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
                
            });
</script>


    
<script>
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>




<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
        var rupiahh = document.getElementById('rupiahh');
        var xrupiah = document.getElementById('xrupiah');
        var yrupiah = document.getElementById('yrupiah');
       
        
		rupiah.addEventListener('keyup', function(e){
            a = rupiah.value.replace("Rp.","");
            xrupiah.value = a.replace(".","");
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});

        rupiahh.addEventListener('keyup', function(e){
            a = rupiahh.value.replace("Rp.","");
            yrupiah.value = a.replace(".","");
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiahh.value = formatRupiah(this.value, 'Rp. ');
        });
        
        
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>

</body>

</html>