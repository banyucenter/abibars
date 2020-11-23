<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Ubah Kategori BARS</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    <?php foreach($data as $u){ ?>
    <form action="<?php echo base_url(); ?>auth/quisioner/update_kategori_bars" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Kategori</label>
        <input type="hidden" name="id_kategori_bars" value="<?php echo $u->id_kategori_bars ?>">
        <input type="text" name="nama_kategori_bars" class="form-control" id="inputPassword4" required placeholder="Nama Sasaran" value="<?php echo $u->nama_kategori_bars;?>">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
<?php } ?>
</div>
</div>






