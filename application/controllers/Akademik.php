<?php 
 
class Akademik extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mdata');
	}
 
	function index()
	{
		$this->load->view('home');
	}
	
	function lihat()
	{
		// foreach ($this->mdata->lihat_mahasiswa()->result() as $row)
		// {
			// echo $row->nama;
			// echo '<br>';
			// echo $row->nim;
		// }
		
		$this->load->view('lihat');
		
	}
	
	function tambah()
	{
        if($this->input->post('submit') === strtolower('kirim'))
        {
            $where_cek_nim = array('nim' => strtoupper($this->input->post('nim')));

            if($this->mdata->get_mahasiswa('mahasiswa', $where_cek_nim)->num_rows() > 0)
            {
                echo 'Data nim <strong>' . strtoupper($this->input->post('nim')) . '</strong> sudah ada. klik link "<strong><a href="' . base_url() . 'index.php/akademik/tambah">TAMBAH</a></strong>" untuk mengulang menambahkan mahasiswa.';
            }
            else
            {
                $data = array(
                    'nim' => strtoupper($this->input->post('nim')),
                    'nama' => strtoupper($this->input->post('nama')),
                    'tempat_lahir' => strtoupper($this->input->post('tempat_lahir')),
                    'tanggal_lahir' => strtoupper($this->input->post('tanggal_lahir')),
                    'alamat' => strtoupper($this->input->post('alamat')),
                    'no_hp' => strtoupper($this->input->post('hp')),
                    'jurusan' => strtoupper($this->input->post('jurusan')),
                    'jenis_kelamin' => strtoupper($this->input->post('jenis_kelamin'))
                );

                $insert = $this->mdata->insert_mahasiswa('mahasiswa', $data);

                if ($insert > 0)
                {
                    echo 'Data nim <strong>' . strtoupper($this->input->post('nim')) . '</strong> sukses ditambahkan. klik link "<strong><a href="' . base_url() . 'index.php/akademik/lihat">LIHAT</a></strong>" untuk melihat mahasiswa.';
                }
            }
        }
        else
        {
            $this->load->view('tambah');
        }
	}
	
	function edit()
	{
	    $nim = strtoupper($this->input->get('nim'));

        if($this->input->post('submit') === "update")
        {
            $data = array(
                'nama' => strtoupper($this->input->post('nama')),
                'tempat_lahir' => strtoupper($this->input->post('tempat_lahir')),
                'tanggal_lahir' => strtoupper($this->input->post('tanggal_lahir')),
                'alamat' => strtoupper($this->input->post('alamat')),
                'no_hp' => strtoupper($this->input->post('hp')),
                'jurusan' => strtoupper($this->input->post('jurusan')),
                'jenis_kelamin' => strtoupper($this->input->post('jenis_kelamin'))
            );

            $where = array(
                'nim' => strtoupper($this->input->post('nim'))
            );

            $update = $this->mdata->update_mahasiswa('mahasiswa', $data, $where);

            if($update > 0 )
            {
                echo 'Data nim <strong>' . strtoupper($nim) . '</strong> sukses diperbaharui. klik link "<strong><a href="' . base_url() . 'index.php/akademik/lihat">LIHAT</a></strong>" untuk melihat hasil edit mahasiswa.';
            }
            else
            {
                echo 'Data nim <strong>' . strtoupper($nim) . '</strong> gagal diperbaharui. klik link "<strong><a href="' . base_url() . 'index.php/akademik/lihat">LIHAT</a></strong>" untuk mengulangi edit mahasiswa.';
            }

        }
        elseif ($nim)
        {
            $where = array(
                'nim' => $nim
            );

            $data['hasil'] = $this->mdata->get_mahasiswa('mahasiswa', $where);

            if ($data['hasil']->num_rows() > 0)
            {
                $this->load->view('edit', $data);
            }
            else
            {
               redirect('http://localhost' . base_url('index.php/akademik/lihat?pesan=nim_tidak_ada'));
            }
        }
		else
        {
            redirect('http://localhost' . base_url('index.php/akademik/lihat?pesan=nim_belum_dipilih'));
        }
		
	}
}