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
                                    foreach ($lapor as $l) {
                                        echo '
                                        <tr>
                                        <th>'.$no.'</th>
                                        <td>'.$l->nama_pelapor.'</td>
                                        <td>'.$l->notelp_pelapor.'</td>
                                        <td>'.$l->nama_pasien.'</td>
                                        <td>'.$l->umur_pasien.'</td>
                                        <td>'.$l->jk_pasien.'</td>
                                        <td>'.$l->alamat_pasien.'</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary" data-toggle="modal" data-target="#modal_ubah_lapor" onclick="prepare_ubah_lapor('.$l->id_lapor.')"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger" data-toggle="modal" data-target="#modal_hapus_lapor" onclick="prepare_hapus_lapor('.$l->id_lapor.')"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                        ';
                                        $no++;
                                    }
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
						<form action="<?php echo base_url('lapor/ubah'); ?>" method="post">
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
	
	function prepare_ubah_lapor(id)
	{
		$("#ubah_id_lapor").empty();
		$("#ubah_nama_pelapor").empty();
		$("#ubah_notelp_pelapor").empty();
		$("#ubah_nama_pasien").empty();
		$("#ubah_umur_pasien").empty();
		$("#ubah_jk_pasien").val();
		$("#ubah_alamat_pasien").empty();

		$.getJSON('<?php echo base_url(); ?>lapor/get_data_lapor_by_id/' + id,  function(data){
        $("#ubah_id_lapor").val(data.id_lapor);
		$("#ubah_nama_pelapor").val(data.nama_pelapor);
		$("#ubah_notelp_pelapor").val(data.notelp_pelapor);
		$("#ubah_nama_pasien").val(data.nama_pasien);
		$("#ubah_umur_pasien").val(data.umur_pasien);
		$("#ubah_jk_pasien").val(data.jk_pasien);
		$("#ubah_alamat_pasien").val(data.alamat_pasien);
		});
	}

	function prepare_hapus_pengguna(id)
	{
		$("#hapus_id").empty();
		$("#hapus_nama").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/pengguna/get_data_pengguna_by_id/' + id,  function(data){
			$("#hapus_id").val(data.id);
			$("#hapus_nama").text(data.nama);
		});
	}
</script>