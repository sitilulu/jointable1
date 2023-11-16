<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function index()
	{
		// $data['siswa'] = $this->M_siswa->join('tb_siswa', 'tb_kelas', 'tb_siswa.id_kelas=tb_kelas.id_kelas')->result();
		$data['tb3']=$this->M_siswa->join2();
		// $data['siswa'] = $this->M_siswa->join();
		$this->load->view('data_siswa', $data);
	}
}
