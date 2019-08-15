<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->view('theme/dashboard');
	}

	public function display($view, $data = array())
	{
		$data_layout['content'] = $this->load->view($view, $data, true);
		$layout = isset($data['layout']) ? $data['layout'] : 'dashboard';
		$data_layout['sidebar'] = $this->section('sidebar', [], TRUE);
		$data_layout['header'] = $this->section('header', [], TRUE);
		$data_layout['footer'] = $this->section('footer', [], TRUE);
		$this->load->view('theme/' . $layout, $data_layout);
	}
}
