<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Tambah Mahasiswa</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
    <form action="<?php echo base_url(); ?>auth/quisioner/aksi_tambah_kuisioner_mbo" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Sasaran</label>
        <input type="text" name="sasaran" class="form-control" id="inputPassword4" required placeholder="Nama Sasaran">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Kategori KRA</label>
        <select name="id_kategori_mbo" class="form-control" id="inputPassword4">
        <?php 
            $no = 1;
            foreach($data as $u){ 
            ?>
            <option value="<?php echo $u->id_kategori_mbo; ?>"><?php echo $u->nama_kra; ?></option>
        <?php } ?>
        </select>
        </div>
        
    </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>






