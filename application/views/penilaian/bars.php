<div style="margin-top:165px"></div>

<div class="container product_section_container">
    <form action="<?php echo base_url(); ?>auth/penilaian/input_bars" method="post">
        <div class="form-row">
        
        <div class="form-group col-md-12">
            <label for="inputEmail4">Pilih Dosen</label>
            <select class="form-control" id="dosen" onchange="updateIdDosen()"
				type="text" placeholder="Paket" >
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
            <select class="form-control" id="user" onchange="updateIdUser()"
				type="text" placeholder="Paket" >
                <option>--Pilih Direktur--</option>
                <?php 
                    foreach($direktur as $direktur){ ?>
                    <option value="<?php echo $direktur->id_user;?>">
                    <?php echo $direktur->nama_lengkap;?></option> 
                    <?php } ?>          
            </select>
			<div class="invalid-feedback">
				<?php echo form_error('id_user') ?>
			</div>
        </div>

        <div class="form-group col-md-12">
            <label for="inputEmail4">Form Penilaian Dosen</label>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Indikator</th>
                        <th>Pilih Nilai</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($bars as $u){ 
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->nama_kategori_bars ?></td>
                        <td>
                        <input type='hidden' name="id_dosen[]" class="id_dosen"/>
                        <input type='hidden' name="id_user[]" class="id_user"/>
                        <input type='hidden' name="id_kategori_bars[]" value="<?php echo $u->id_kategori_bars ?>"/>
                        <?php 
                                $this->db->select('id_kategori_bars, nama_kategori_bars,id_kuisioner_bars, anchor, nilai');
                                $this->db->from('v_bars');
                                $this->db->where('v_bars.id_kategori_bars',$u->id_kategori_bars);
                                $result= $this->db->get()->result();
                        ?>  
                            <select id="mahasiswa" class="form-control" name="id_bars[]" type="text" placeholder="Paket" >
                                    <option>--Pilih Anchor Nilai--</option>
                                <?php 
                                    foreach($result as $r){ ?>
                                    
                                    <option value="<?php echo $r->id_kuisioner_bars;?>">
                                    <?php echo $r->anchor;?></option> 
                                    <?php } ?>          
                            </select>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
			
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

    function updateIdUser() {
        var x = document.getElementById("user").value;
        var list = document.getElementsByClassName("id_user");
        for (var i = 0; i < list.length; i++) {
            list[i].setAttribute("value", x);
        }
    }

</script>