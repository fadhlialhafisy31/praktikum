<?php 

class Home073 extends CI_controller {
	
	public function index($username073 = '')
	{
		if (! $this->session->userdata('username')) redirect('auth073');
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $username073;
		$this->load->view('templates073/header', $data);
		$this->load->view('home073/index073', $data);
		$this->load->view('templates073/footer');
	}
}