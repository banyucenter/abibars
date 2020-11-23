<div style="margin-top:165px"></div>
<div class="container product_section_container">
    <form action="<?php echo base_url(); ?>auth/penilaian/input_mbo" method="post">
        <div class="form-row">
        
        <div class="form-group col-md-12">
            <label for="inputEmail4">Pilih Dosen</label>
            <select id="dosen" class="form-control" onchange="updateIdDosen()" type="text" placeholder="Paket" >
                    <option>--Pilih Dosen--</option>
                <?php 
                    foreach($dosen as $dosen){ ?>
                    
                    <option value="<?php echo $dosen->id_user;?>">
                    <?php echo $dosen->nama_lengkap;?></option> 
                    <?php } ?>          
            </select>
			<div class="invalid-feedback">
				<?php echo form_error('id_user') ?>
			</div>
        </div>
        <div class="form-group col-md-12">
            <label for="inputEmail4">Pilih Mahasiswa</label>
            <select id="mahasiswa" class="form-control" onchange="updateIdMahasiswa()" type="text" placeholder="Paket" >
                    <option>--Pilih Mahasiswa--</option>
                <?php 
                    foreach($mahasiswa as $mahasiswa){ ?>
                    
                    <option value="<?php echo $mahasiswa->id_user;?>">
                    <?php echo $mahasiswa->nama_lengkap;?></option> 
                    <?php } ?>          
            </select>
			<div class="invalid-feedback">
				<?php echo form_error('id_user') ?>
			</div>
        </div>
        <div class="form-group col-md-12">
            <label for="inputEmail4">Form MBO</label>
            
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sasaran</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($mbo as $mbo){ ?>
                        <tr>
                            <td><?php echo  $mbo->sasaran; ?></td>
                            <input type='hidden' name="id_dosen[]" class="id_dosen"/>
                            <input type='hidden' name="id_mahasiswa[]" class="id_mahasiswa"/>
                            <input type='hidden' name="id_mbo[]" value="<?php echo $mbo->id_mbo ?>"/>
                            <td>
                            <select class="form-control" name="nilai[]">
                                <option value=40>Sangat Memuaskan</option>
                                <option value=30>Memuaskan</option>
                                <option value=20>Cukup Memuaskan</option>
                                <option value=10>Tidak Memuaskan</option>
                            </select>
                            </td>
                        </tr>
                    <?php } ?>      
                    </tbody>
                    </table>
			<div class="invalid-feedback">
				<?php echo form_error('id_user') ?>
			</div>
        </div>

        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Simpan</button><br>
        </div>
        
    </form>
</div>

<script>
    function updateIdDosen() {
        var x = document.getElementById("dosen").value;
        var list = document.getElementsByClassName("id_dosen");
        for (var i = 0; i < list.length; i++) {
            list[i].setAttribute("value", x);
        }
    }

    function updateIdMahasiswa() {
        var x = document.getElementById("mahasiswa").value;
        var list = document.getElementsByClassName("id_mahasiswa");
        for (var i = 0; i < list.length; i++) {
            list[i].setAttribute("value", x);
        }
    }

</script>
