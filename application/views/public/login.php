<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <h3>Login User</h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
    <form action="<?php echo base_url(); ?>user/check_login" method="post">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
          <span class="text-danger"><?php echo form_error('email'); ?></span>  
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
          <span class="text-danger"><?php echo form_error('password'); ?></span>  
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4">Ulangi Password</label>
          <input type="password" name="repassword" class="form-control" id="inputPassword4" placeholder="Password" required>
          <span class="text-danger"><?php echo form_error('repassword'); ?></span>  
        </div>
        <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Login</button><br>
        </div>
        
    </div>
    <div class="form-group col-md-6">
      <div class="form-group col-md-12">
          <img class='img-responsive' src='<?php echo base_url().'assets/images/monitoring.jpg'?>'/>
        </div>
        
    </div>
    
</form>

</div><br>
<p>Belum memiliki akun? <a href="<?php echo base_url().'user/register/pembeli';?>">Register!</a></p>
</div>
