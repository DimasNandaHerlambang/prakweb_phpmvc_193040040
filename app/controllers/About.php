<?php 

class About extends Controller {
	public funtion index($nama = 'Dimas', $pekerjaan = 'Mahasiswa', $umur = 21)
	{
		
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templetes/header', $data);
		$this->view('about/index', $data);
		$this->view('templetes/footer');
	}

	public function page()
	{
		$data['judul'] = 'pages';
		$this->view('templetes/header', $data);
		$this->view('about/page');
		$this->view('templetes/footer');

	}	
}