<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Tambah Kategori BARS</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
    <form action="<?php echo base_url(); ?>auth/quisioner/aksi_tambah_kategori_bars" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Nama Kategori</label>
        <input type="text" name="nama_kategori_bars" class="form-control" id="inputPassword4" required placeholder="Nama Kategori Bars">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        
    </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>






