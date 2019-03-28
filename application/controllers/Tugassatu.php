<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugassatu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		$this->load->view('tugas_cisatu');
	}

	public function perkalian()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('v1','Variabel1','required|integer');
		$this->form_validation->set_rules('v2','Variabel2','required|integer');
			if ($this->form_validation->run()) {
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				$data['hasil']=$data['v1'] * $data['v2'];
			}else{
				$data['v1']=0;
				$data['v2']=0;
				$data['hasil']=0;
			}
			$this->load->view('perkalian',$data);
	}
	public function pertambahan()
	{
		
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				$data['hasil']=$data['v1'] + $data['v2'];
			
			$this->load->view('pertambahan',$data);
	}
	public function pengurangan()
	{
		
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				$data['hasil']=$data['v1'] - $data['v2'];
			
			$this->load->view('pengurangan',$data);
	}
	public function pembagian()
	{
		
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				if ($data['v2']>0){
					$data['hasil']=$data['v1']/$data['v2'];
				}else{
					$data['hasil']='error, variabel 2 tidak boleh kosong';
				}

			
			$this->load->view('pembagian',$data);
	}
}