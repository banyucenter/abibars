<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Ubah Kuisioner BARS</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    <?php foreach($data as $u){ ?>
    <form action="<?php echo base_url(); ?>auth/quisioner/update_anchor" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Anchor</label>
        <input type="hidden" name="id_mbo" value="<?php echo $u->id_kuisioner_bars ?>">
        <input type="text" name="sasaran" class="form-control" id="inputPassword4" required placeholder="Nama Anchor" value="<?php echo $u->anchor;?>">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Kategori BARS</label>
        <select name="id_kategori_mbo" class="form-control" id="inputPassword4">
        <?php 
            $no = 1;
            foreach($kategori as $d){ ?>
             <option <?php if($d->id_kategori_bars == $u->id_kategori_bars){ echo 'selected="selected"'; } ?> 
			 value="<?php echo $d->id_kategori_bars ?>"><?php echo $d->nama_kategori_bars?> </option>
        <?php } ?>
        </select>
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nilai BARS</label>
        <select name="id_kategori_mbo" class="form-control" id="inputPassword4">
        <?php 
            $no = 1;
            foreach($nilai as $d){ ?>
             <option <?php if($d->nilai == $u->nilai){ echo 'selected="selected"'; } ?> 
			 value="<?php echo $d->nilai ?>"><?php echo $d->nilai?> </option>
        <?php } ?>
        </select>
        </div>
    </div>

  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
<?php } ?>
</div>
</div>






