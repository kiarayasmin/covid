<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lapor_model');
	}

	public function index()
	{

			$data['main_view'] = 'lapor_view';
			$data['lapor'] = $this->lapor_model->get_lapor();


			$this->load->view('template', $data);

    }
    
    public function data() {
            $data['main_view'] = 'datalapor_view';
            $data['lapor'] = $this->lapor_model->get_lapor();
            $this->load->view('template', $data);
    }


                
	public function tambah()
	{
			$this->form_validation->set_rules('nama_pelapor', 'nama pelapor', 'trim|required');
			$this->form_validation->set_rules('notelp_pelapor', 'notelp pelapor', 'trim|numeric');
			$this->form_validation->set_rules('nama_pasien', 'nama pasien', 'trim|required|required');
			$this->form_validation->set_rules('umur_pasien', 'umur pasien', 'trim|required|numeric');
			$this->form_validation->set_rules('jk_pasien', 'jk pasien', 'trim|required');
			$this->form_validation->set_rules('alamat_pasien', 'alamat pasien', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->lapor_model->tambah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Laporan Anda diterima');
					redirect('lapor/index');
				} else {
					$this->session->set_flashdata('notif', 'Laporan Anda gagal diterima');
					redirect('lapor/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('lapor/index');
			}
	}

	public function ubah()
	{
        $this->form_validation->set_rules('ubah_nama_pelapor', 'nama pelapor', 'trim|required');
        $this->form_validation->set_rules('ubah_notelp_pelapor', 'notelp pelapor', 'trim|numeric');
        $this->form_validation->set_rules('ubah_nama_pasien', 'nama pasien', 'trim|required|required');
        $this->form_validation->set_rules('ubah_umur_pasien', 'umur pasien', 'trim|required|numeric');
        $this->form_validation->set_rules('ubah_jk_pasien', 'jk pasien', 'trim|required');
        $this->form_validation->set_rules('ubah_alamat_pasien', 'alamat pasien', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->lapor_model->ubah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah lapor berhasil');
					redirect('lapor/index');
				} else {
					$this->session->set_flashdata('notif', 'Ubah lapor gagal');
					redirect('lapor/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('lapor/index');
			}
	}

	public function hapus()
	{
			if($this->lapor_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus lapor Berhasil');
				redirect('lapor/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus lapor gagal');
				redirect('lapor/index');
			}
	}

	public function get_data_lapor_by_id($id)
	{

			$data = $this->lapor_model->get_data_lapor_by_id($id);
			echo json_encode($data);

	}

}

/* End of file lapor.php */
/* Location: ./application/controllers/lapor.php */