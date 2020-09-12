<div class="container">
	<h2>Data Laporan Anda</h2>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelapor</th>
				<th>No Telp Pelapor</th>
				<th>Nama Pasien</th>
				<th>Umur Pasien</th>
				<th>Jenis Kelamin Pasien</th>
                <th>Alamat Pasien</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
                $no = 1;
                foreach ($lapor as $l) {?>
                <tr>
                                        <th><?php echo $no; ?></th>
                                        <td><?php echo $l->nama_pelapor ?></td>
                                        <td><?php echo $l->notelp_pelapor ?></td>
                                        <td><?php echo $l->nama_pasien ?></td>
                                        <td><?php echo $l->umur_pasien ?></td>
                                        <td><?php echo $l->jk_pasien ?></td>
                                        <td><?php echo $l->alamat_pasien?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#modal_ubah_lapor" data-dismiss="modal" onclick="prepare_ubah_lapor('.<?php echo $l->id_lapor; ?>.')" class="btn btn-warning waves-effect">Edit</a>
                                            <a id=""href="<?php echo base_url().'/Lapor/hapus/'.$l->id_lapor ?> " onclick="return confirm('Anda yakin akan menghapus data ini?');"class="btn btn-danger waves-effect">Delete</a>
            
                                        </td>
                                    </tr>
                                    
                <?php $no++; } 
                ?>
		</tbody>

	</table>
</div>


			<!-- Modal -->
			<div class="modal fade" id="modal_ubah_lapor">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Ubah Lapor</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>
						<form action="<?php echo base_url('Lapor/ubah'); ?>" method="post">
							<div class="modal-body">
								<div class="form-group">
									<input class="form-control" name="ubah_id_lapor" type="hidden" id="ubah_id_lapor">
								</div>
								<div class="form-group">
									<input class="form-control" name="ubah_nama_pelapor" type="text" id="ubah_nama_pelapor">
								</div>
								<div class="form-group">
									<input class="form-control" name="ubah_notelp_pelapor" type="number" id="ubah_notelp_pelapor">
								</div>
								<div class="form-group">
									<input class="form-control" name="ubah_nama_pasien" type="text" id="ubah_nama_pasien">
								</div>
								<div class="form-group">
									<input class="form-control" name="ubah_umur_pasien" type="number" id="ubah_umur_pasien">
								</div>
								<div class="form-group">
									<select class="form-control" name="ubah_jk_pasien" id="ubah_jk_pasien">
										<option value="laki-laki">Laki-laki</option>
										<option value="perempuan">Perempuan</option>
									</select>
                                </div>
                                <div class="form-group">
									<input class="form-control" name="ubah_alamat_pasien" type="text" id="ubah_alamat_pasien">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	function prepare_ubah_lapor(id_lapor)
	{
		$("#ubah_id_lapor").empty();
		$("#ubah_nama_pelapor").empty();
		$("#ubah_notelp_pelapor").empty();
		$("#ubah_nama_pasien").empty();
		$("#ubah_umur_pasien").empty();
		$("#ubah_jk_pasien").val();
		$("#ubah_alamat_pasien").empty();

		$.getJSON('<?php echo base_url(); ?>Lapor/get_data_lapor_by_id/'+id_lapor, function(data){
            // console.log(data);
        $("#ubah_id_lapor").val(data.id_lapor);
		$("#ubah_nama_pelapor").val(data.nama_pelapor);
		$("#ubah_notelp_pelapor").val(data.notelp_pelapor);
		$("#ubah_nama_pasien").val(data.nama_pasien);
		$("#ubah_umur_pasien").val(data.umur_pasien);
		$("#ubah_jk_pasien").val(data.jk_pasien);
		$("#ubah_alamat_pasien").val(data.alamat_pasien);
		});
    }

</script>