
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
                                                <li class="mr-3"><a href="#" class="text-secondary" data-toggle="modal" data-target="#modal_ubah_pengguna" onclick="prepare_ubah_pengguna('.$l->id_lapor.')"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger" data-toggle="modal" data-target="#modal_hapus_pengguna" onclick="prepare_hapus_pengguna('.$l->id_lapor.')"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                        ';
                                        $no++;
                                    }
                                ?>
                            </tbody>
    <!-- <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody> -->
  </table>
</div>

