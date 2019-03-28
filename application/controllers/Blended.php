<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blended extends CI_Controller {

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
		$this->load->view('blended');
	}

	public function volumeps()
	{
		
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				$data['v3']=(int)$this->input->post('v3',true);
				$data['v4']=1 / 2 * $data['v1'] * $data['v2'];
				$data['hasil']=$data['v4'] * $data['v3'];
			$this->load->view('volumeps',$data);
	}
	public function matauang()
	{
		
				$data['v1']=(float)$this->input->post('v1',true);
				$data['v2']=$data['v1'] * 0.0000951674;
				$data['v3']=$data['v1'] * 0.00223806;
				$data['v4']=$data['v1'] * 0.00370476;
			$this->load->view('matauang',$data);
	}
	public function luasjg()
	{
		
				$data['v1']=(int)$this->input->post('v1',true);
				$data['v2']=(int)$this->input->post('v2',true);
				$data['hasil']=$data['v1'] * $data['v2'];
			$this->load->view('luasjg',$data);
	}
}