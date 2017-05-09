<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Jenis_Hero extends CI_Controller {

	/*public function __construct()
	{
		parent::__construct();
		//$this->load->model('Model_Jenis');
	}*/
	public function index()
	{
		$this->load->model('kategori_model');
		$data['kategori_list']=$this->Model_Jenis->getDataKategori();
		$this->load->view('kategori',$data);	
	}
	
	//public function dataTable()
	//{
	//	$data['data_pegawai']=$this->pegawai_model->getDataPegawai();
	//	$this->load->view('Pegawai_dataTable',$data);	
	//}
	public function addData() 
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		if($this->form_validation->run()==FALSE){
			$data['kategori_list']=$this->Kategori_Model->getDataKategori();
			$this->load->view('addKategori',$data);
		}
		else
		{
			
			$this->Kategori_Model->addKategori();
			header("location:".site_url());
			
		}
	}

	/*public function edit($id) 
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if($this->form_validation->run()==FALSE){

			$data['data_pegawai']=$this->Model_Jenis->getDataIdJenis($id);
			$this->load->view('EditData',$data);

		}
		
                else
                {
						$this->Model_Jenis->editData($id);
						header("location:".site_url());
				
		}
	}
	

	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->load->model('Model_Jenis');
		$this->Model_Jenis->deleteData($id);
	header("location:".site_url());
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>