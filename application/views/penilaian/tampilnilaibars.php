

<div style="margin-top:165px"></div>
<div class="container">
    <h3>Data Hasil Monitoring BARS</h3>
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
        <?php 
		$no = 1;
		foreach($data as $u){ 
		?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->tanggal_penilaian ?></td>
                <td><?php echo $u->nama_lengkap ?></td>
                <td><?php echo $u->total ?></td>
                <td><?php echo $u->predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Predikat</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>



