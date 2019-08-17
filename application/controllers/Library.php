<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library extends CI_Controller
{

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
	public function index()
	{
		//parent::__construct();
		//$this->load->view('dashboard');
		//$data['layout'] = 'test';
		//$this->display('SLS/test', $data);
		header('location:' . base_url() . 'library/display/dashboard');
	}

	public function display($view, $data = array())
	{
		//$data_layout['content'] = $this->load->view($view, $data, true);
		$layout = isset($data['layout']) ? $data['layout'] : 'dashboard';
		$this->load->view('theme/sections/header');
		$this->load->view('theme/sections/sidebar');
		$this->load->view('theme/sections/footer');
		$this->load->view('theme/' . $layout);
	}

	public function show()
	{
		$this->load->view('theme/sections/header');
		$this->load->view('theme/sections/sidebar');
		$this->load->view('SLS/test');
		$this->load->view('theme/sections/footer');
	}
}
