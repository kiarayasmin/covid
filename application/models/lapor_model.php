<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lapor_model extends CI_Model {

	public function get_lapor(){
		return $this->db->get('lapor')
						->result();
	}

	public function get_data_lapor_by_id($id)
	{
		return $this->db->where('id_lapor', $id)
						->get('lapor')
						->row();
	}

	public function tambah()
	{
		$data = array(
				'nama_pelapor' 	        => $this->input->post('nama_pelapor'),
				'notelp_pelapor'		=> $this->input->post('notelp_pelapor'),
				'nama_pasien'			=> $this->input->post('nama_pasien'),
				'umur_pasien'			=> $this->input->post('umur_pasien'),
				'jk_pasien'			    => $this->input->post('jk_pasien'),
				'alamat_pasien'			=> $this->input->post('alamat_pasien')
			);

		$this->db->insert('lapor', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah()
	{
		$data = array(
				'nama_pelapor' 	        => $this->input->post('ubah_nama_pelapor'),
				'notelp_pelapor'		=> $this->input->post('ubah_notelp_pelapor'),
				'nama_pasien'			=> $this->input->post('ubah_nama_pasien'),
				'umur_pasien'			=> $this->input->post('ubah_umur_pasien'),
				'jk_pasien'			    => $this->input->post('ubah_jk_pasien'),
				'alamat_pasien'			=> $this->input->post('ubah_alamat_pasien')
			);

		$this->db->where('id_lapor', $this->input->post('ubah_id_lapor'))
				 ->update('lapor', $data);
		
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus()
	{
		$this->db->where('id_lapor', $this->input->post('hapus_id_lapor'))
				 ->delete('lapor');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	

}

/* End of file lapor_model.php */
/* Location: ./application/models/lapor_model.php */