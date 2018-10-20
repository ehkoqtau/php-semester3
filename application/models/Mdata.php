<?php 

class Mdata extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function get_jurusan()
	{
		$query = "select * from jurusan";
		$hasil = $this->db->query($query);
		
		$output = '<option selected value="">Pilih Jurusan...</option>';
		
		foreach ($hasil->result() as $data)
		{
			$output .= '<option value="' . $data->kode_jurusan . '">' . $data->nama_jurusan . '</option>';
		}
		
		return $output;
	}
	
	function update_mahasiswa($table, $update_data, $where)
	{
		$this->db->update($table, $update_data, $where);
        return ($this->db->affected_rows() > 0);
	}

    function insert_mahasiswa($table, $data)
    {
        $this->db->insert($table, $data);
        return ($this->db->affected_rows() > 0);
    }
	
	function get_mahasiswa($table, $where)
	{
		$this->db->where($where);
		$data = $this->db->get($table);
		return $data;
	}
	
	function lihat(){
		
		$query = "select a.nim, a.nama, a.tempat_lahir, a.tanggal_lahir, b.nama_jurusan, a.jenis_kelamin from mahasiswa a, jurusan b where a.jurusan=b.kode_jurusan";
		$hasil = $this->db->query($query);
		
		$output = '
		
		<thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">NIM</th>
			  <th scope="col">NAMA</th>
			  <th scope="col">TEMPAT LAHIR</th>
			  <th scope="col">TANGGAL LAHIR</th>
			  <th scope="col">JURUSAN</th>
			  <th scope="col">KELAMIN</th>
			  <th scope="col">ACTION</th>
			</tr>
		  </thead>
		  <tbody>';
		$num = 1;
		
		foreach ($hasil->result() as $data)
		{
			$output .= '<tr>';
			$output .= '<th scope="row">'. $num . '</th>';
			$output .= '<th>' . $data->nim . '</th>';
			$output .= '<th>' . $data->nama . '</th>';
			$output .= '<th>' . $data->tempat_lahir . '</th>';
			$output .= '<th>' . $data->tanggal_lahir . '</th>';
			$output .= '<th>' . $data->nama_jurusan . '</th>';
			$output .= '<th>' . $data->jenis_kelamin . '</th>';
			$output .= '<th><a href="' . base_url() . 'index.php/akademik/edit?nim=' . $data->nim . '"> Edit</th>';
			$output .= '</tr>';
			
			$num++;
		}
			
			
		$output	.=
		'
			</tr>
		  </tbody>
		';
		
		return $output;
	}
}