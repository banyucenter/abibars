

<div style="margin-top:165px"></div>
<div class="container">
    <h3>Data Direktur</h3>
    <a href="<?php echo base_url().'auth/direktur/tambah';?>"><button type="button" class="btn btn-primary">+ Tambah Direktur</button></a><br><br>
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
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
                <td><?php echo $u->no_identitas ?></td>
                <td><?php echo $u->nama_lengkap ?></td>
                
                <td>
                <a href="<?php echo base_url().'auth/direktur/edit/';?><?php echo $u->id_user?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?php echo base_url().'auth/direktur/hapus/'?><?php echo $u->id_user?>" class="btn btn-danger" role="button">Hapus</a>
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
        <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>



