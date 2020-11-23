<div style="margin-top:165px"></div>
<div class="container product_section_container">
<?php foreach($user as $u){ ?> 
    <h3>Selamat Datang, <?php echo $u->nama_lengkap;?></h3>
    <hr>
    <div class="row">  
          <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
    </div>  
    
        <!-- <table class="table table-bordered">
        
        <tbody>
        
            <tr>
            <td>Nama Awal</td>
            <td><?php echo $u->first_name;?></td>
            </tr>
            <tr>
            <td>Nama Akhir</td>
            <td><?php echo $u->last_name;?></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><?php echo $u->email;?></td>
            </tr>
            
            <?php } ?>
            
            
        </tbody>
    </table> -->
</div>
</div>