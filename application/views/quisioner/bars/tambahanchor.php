<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Tambah Anchor</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
    <form action="<?php echo base_url(); ?>auth/quisioner/aksi_tambah_anchor_bars" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Anchor</label>
        <input type="text" name="anchor" class="form-control" id="inputPassword4" required placeholder="Nama Anchor">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Kategori BARS</label>
        <select name="id_kategori_bars" class="form-control" id="inputPassword4">
        <?php 
            $no = 1;
            foreach($data as $u){ 
            ?>
            <option value="<?php echo $u->id_kategori_bars; ?>"><?php echo $u->nama_kategori_bars; ?></option>
        <?php } ?>
        </select>
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nilai Anchors</label>
        <select name="nilai" class="form-control" id="inputPassword4">
            <option value=1>Sangat Baik</option>
            <option value=2>Baik</option>
            <option value=3>Cukup</option>
            <option value=4>Kurang</option>
            <option value=5>Tidak Baik</option>
        </select>
        </div>
        
        
    </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>






