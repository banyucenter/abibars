

<div style="margin-top:165px"></div>
<div class="container">
    <h3>Data Quisioner BARS</h3>
    <a href="<?php echo base_url().'auth/quisioner/tambah_kategori_bars';?>"><button type="button" class="btn btn-primary">+ Tambah Quisioner</button></a><br><br>
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
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
                <td><?php echo $u->nama_kategori_bars ?></td>
                
                <td>
                <a href="<?php echo base_url().'auth/quisioner/anchorbars/';?><?php echo $u->id_kategori_bars?>" class="btn btn-success" role="button">Lihat Anchor</a>
                <a href="<?php echo base_url().'auth/quisioner/edit_kategori_bars/';?><?php echo $u->id_kategori_bars?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?php echo base_url().'auth/quisioner/hapus_kategori_bars/'?><?php echo $u->id_kategori_bars?>" class="btn btn-danger" role="button">Hapus</a>
                </td>
            </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
        <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>



