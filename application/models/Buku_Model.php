<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataBuku()
		{
			$this->db->select("id_buku,nama_buku,nama_pengarang,penerbit,kategori,jumlah");
			$query = $this->db->get('buku');
			return $query->result();
		}

			public function addData()
		{
			$object = array('nama_buku' => $this->input->post('nama'),
							'nama_pengarang' => $this->input->post('pengarang'),
							'penerbit' => $this->input->post('penerbit'),
							'kategori' => $this->input->post('kategori_buku'),
							'jumlah'=> $this->input->post('jumlah'),
							);
			$this->db->insert('buku', $object);
		}

		/*public function getJabatanByPegawai($idPegawai)
		{
			$this->db->select("pegawai.nama as namaPegawai, namaJabatan,DATE_FORMAT(tanggalMulai,'%d-%m-%Y') as tanggalMulai,DATE_FORMAT(tanggalSelesai,'%d-%m-%Y') as tanggalSelesai");
			$this->db->where('fk_pegawai', $idPegawai);	
			$this->db->join('pegawai', 'pegawai.id = jabatan_pegawai.fk_pegawai', 'left');	
			$query = $this->db->get('jabatan_pegawai');
			return $query->result();
		}
		public function getAnakByPegawai($idPegawai)
		{
			$this->db->select("pegawai.nama as namaPegawai, anak.nama as namaAnak,DATE_FORMAT(anak.tanggalLahir,'%d-%m-%Y') as tanggalLahir");
			$this->db->where('fk_pegawai', $idPegawai);	
			$this->db->join('pegawai', 'pegawai.id = anak.fk_pegawai', 'left');	
			$query = $this->db->get('anak');
			return $query->result();
		}


		public function insertPegawai()
		{
			$object = array(
				'nama' => $this->input->post('nama'), 
				'foto' => $this->upload->data('file_name') 
				);
			$this->db->insert('pegawai', $object);
		}


		public function getPegawai($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('pegawai',1);
			var_dump($this->db->last_query());
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'nama' => $this->input->post('nama'), 
				'foto' => $this->upload->data('file_name') 
				);
			$this->db->where('id', $id);
			$this->db->update('pegawai', $data);
		}

		public function insertJabatan($idPegawai)
		{
			// idPegawai = 1
			$object = array(
				'namaJabatan' => $this->input->post('jabatan'), 
				'fk_pegawai'=> $idPegawai
				);
			$this->db->insert('jabatan_pegawai', $object);
		}*/
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>