<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Tambah Dosen</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
    <form action="<?php echo base_url(); ?>auth/dosen/aksi_tambah" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">NIDN</label>
        <input type="text" name="no_identitas" class="form-control" id="inputPassword4" required placeholder="Nomor Induk Dosen Nasional">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nama Lengkap & Gelar</label>
        <input type="text" name="nama_lengkap" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" required>
        <span class="text-danger"><?php echo form_error('nama_produk'); ?></span>  
        </div>
        <div class="form-group col-md-6" >
        <label for="inputPassword4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputEmail4" placeholder="Password" required>
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Nomor Telepom</label>
        <input type="text" name="phone" class="form-control" id="inputPassword4"  placeholder="Nomor Telepone">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Kode Pos</label>
        <input type="text" name="kode_pos" class="form-control" id="inputPassword4"  placeholder="Kode POS">
        <span class="text-danger"><?php echo form_error('nama_seniman'); ?></span>  
        </div>
        <div class="form-group col-md-12" >
        <label for="inputPassword4">Alamat</label>
        <textarea name="alamat" class="form-control" id="editor"></textarea>
    </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>






