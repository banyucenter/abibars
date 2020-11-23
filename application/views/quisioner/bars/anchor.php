

<div style="margin-top:165px"></div>
<div class="container">
    <h3>Anchor BARS</h3>
    <!-- <a href="<?php echo base_url().'auth/quisioner/tambah_anchor_bars';?>"><button type="button" class="btn btn-primary">+ Tambah Quisioner</button></a><br><br> -->
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Anchor</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
		$no = 1;
		foreach($data as $u){ 
		?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->anchor ?></td>
                <td><?php echo $u->nilai ?></td>
                
                <td>
                <a href="<?php echo base_url().'auth/quisioner/edit_anchor/';?><?php echo $u->id_kuisioner_bars?>" class="btn btn-info" role="button">Edit</a>
                <!-- <a href="<?php echo base_url().'auth/quisioner/hapus_anchor/'?><?php echo $u->id_kuisioner_bars?>" class="btn btn-danger" role="button">Hapus</a> -->
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                
                <th>Anchor</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>



