
	<div class="container">
        <h2>Lapor Covid-19</h2>
        <?php
                        $notif = $this->session->flashdata('notif');
                        if($notif != NULL){
                            echo '
                                <div class="alert alert-info">'.$notif.'</div>
                            ';
                        }
                    ?>
		<form action="<?php echo base_url('lapor/tambah'); ?>" method="post">
			<div class="form-group">
				<label for="Nama">Nama Pelapor :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Pelapor" name="nama pelapor">
			</div>
			<div class="form-group">
				<label for="notelp">No Telp Pelapor :</label>
				<input type="number" class="form-control" placeholder="Masukkan No Telepon Pelapor" name="notelp pelapor">
			</div>
			<div class="form-group">
				<label for="">Nama Pasien :</label>
				<input type="text" class="form-control"  placeholder="Masukkan Nama Pasien" name="nama pasien">
			</div>
			<div class="form-group">
				<label for="">Umur Pasien :</label>
				<input type="number" class="form-control"  placeholder="Masukkan Umur Pasien" name="umur pasien">
			</div>
			<div class="form-group">
            <label for="">Jenis Kelamin Pasien :</label>
            <select class="form-control" name="jk pasien">
                <option value="laki-laki">Laki-laki</option>	
                <option value="Perempuan">Perempuan</option>	
            </select>
			<div class="form-group">
				<label for="">Alamat Pasien :</label>
				<input type="text" class="form-control"  placeholder="Masukkan Alamat Pasien" name="alamat pasien">
			</div>
			</div>
			<!-- <div class="form-group form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			</div> -->
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</body>

</html>